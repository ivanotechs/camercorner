<?php

namespace App\Processor;

use App\Jobs\MakeTaggableJob;
use App\Models\Fixture;
use App\Models\League;
use App\Models\Season;
use App\Models\Team;
use App\Services\APIFootballService;
use Illuminate\Support\Facades\Log;
use PHPUnit\Exception;

class FixtureProcessor extends BaseProcessor
{
    public function processData($updateStats = false): mixed
    {
        foreach ($this->data as $data) {
            try {
                // get fixture and the events
                $homeTeam = Team::remote($data->teams->home->id)->first();
                $awayTeam = Team::remote($data->teams->away->id)->first();
                $league = League::remote($data->league->id)->first();

                if ($league && $homeTeam && $awayTeam) {
                    echo "Processing fixture {$data->fixture->id} of league {$league->name} \n";

                    $fixture = Fixture::updateOrCreate([
                        "remote_id" => $data->fixture->id,
                    ], [
                        "league_id" => $league->id,
                        "home_team_id" => $homeTeam->id,
                        "away_team_id" => $awayTeam->id,
                        "status" => $data->fixture->status->short,
                        "season" => $league->current_season ?? Season::currentSeason(),
                        "date" => $data->fixture->date,
                        "timezone" => $data->fixture->timezone,
                        "tag_name" => $homeTeam->code.$awayTeam->code,
                        "data" => json_encode($data),
                        "event" => isset($data->events) ? json_encode($data->events) : null,
                    ]);

                    if ($league->favourite) {
                        $_updateStats = $updateStats;

                        if (!$_updateStats) {
                            $_updateStats = in_array($fixture->status, Fixture::LIVE_MATCH);
                        }

                        if ($_updateStats) {
                            sleep(1);
                            $this->getFixtureStats($fixture);
                        }
                    }

                    MakeTaggableJob::dispatch([$fixture]);
                }
            } catch (Exception $e) {
                Log::error($e->getMessage(), [
                    'trace'     => $e->getTrace()
                ]);
            }
        }

        return true;
    }

    private function getFixtureStats($fixture) {
        /** @var APIFootballService $apiFootballService */
        $apiFootballService = resolve(APIFootballService::class);

        $fullFixture = $apiFootballService->fixtureById($fixture->remote_id);
        if ($fullFixture) {
            $fixture->update([
                'stat'    => isset($fullFixture->statistics) ? json_encode($fullFixture->statistics) : null,
                'lineup'  => isset($fullFixture->lineups) ? json_encode($fullFixture->lineups) : null,
                'players' => isset($fullFixture->players) ? json_encode($fullFixture->players) : null,
                'event'   => isset($fullFixture->events) ? json_encode($fullFixture->events) : null,
            ]);
        }
    }
}
