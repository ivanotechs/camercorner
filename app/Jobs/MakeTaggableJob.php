<?php

namespace App\Jobs;

use App\Contracts\TaggableModel;
use App\Models\Tag;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class MakeTaggableJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $models;

    /**
     * Create a new job instance.
     */
    public function __construct($models)
    {
        $this->models = $models;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        foreach ($this->models as $model) {
            if ($model instanceof TaggableModel) {
                if(get_class($model) === "App\Models\League" && $model["custom_name"] != null){
                    Tag::updateOrCreate([
                        'taggable_id' => $model->id,
                        'taggable_type' => get_class($model),
                    ],[
                        'name' => $model["custom_name"]
                    ]);
                }else if(get_class($model) === "App\Models\Fixture" && $model[$model->taggableFieldName()] === null){
                    if (isset($model->homeTeam()->code) && isset($model->awayTeam()->code)) {
                        Tag::updateOrCreate([
                            'taggable_id' => $model->id,
                            'taggable_type' => get_class($model),
                            'name' => $model->homeTeam()->code.$model->awayTeam()->code
                        ],[
                            'name' =>$model->homeTeam()->code.$model->awayTeam()->code
                        ]);
                    }
                }else{
                    Tag::updateOrCreate([
                        'taggable_id' => $model->id,
                        'taggable_type' => get_class($model),
                        'name' => $model[$model->taggableFieldName()]
                    ],[
                        'name' => $model[$model->taggableFieldName()]
                    ]);
                }
            }
        }
    }
}
