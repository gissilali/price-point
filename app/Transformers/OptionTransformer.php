<?php

namespace App\Transformers;


use App\Option;
use League\Fractal\TransformerAbstract;

class OptionTransformer extends TransformerAbstract
{
    public function transform(Option $item)
    {
        return [
            'id' => $item->id,
            'option' => $item->option
        ];
    }
}