<?php

namespace App\Transformers;

use App\Platform;
use League\Fractal\TransformerAbstract;

class PlatformTransformer extends TransformerAbstract
{
    public function transform(Platform $platform)
    {
        return [
            'id' => $platform->id,
            'name' => $platform->name,
            'questionCount' => $platform->questionCount[0]->count,
            'baseDevCost' => $platform->base_development_cost
        ];
    }
}
