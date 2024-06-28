<?php

namespace App\Processor;

use App\Models\Team;
use App\Models\TeamVenue;

class TeamProcessor extends BaseProcessor
{
    public function processData(): mixed
    {
        $team = $this->data;

        $_team = Team::updateOrCreate(
            ['remote_id' => $team->team->id],
            [
                'name' => $team->team->name,
                'code' => $team->team->code,
                'country' => $team->team->country,
                'founded' => $team->team->founded,
                'national' => $team->team->national,
                'logo' => $team->team->logo
            ]
        );

        if (isset($team->venue->id)) {
            TeamVenue::updateOrCreate(
                [
                    'team_id' => $_team->id,
                    'remote_id' => $team->venue->id
                ],
                (array) $team->venue
            );
        }

        return $_team;
    }
}
