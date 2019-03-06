<?php

namespace App\Transformers;

use App\Question;
use League\Fractal\TransformerAbstract;

class QuestionTransformer extends TransformerAbstract
{
    public function transform(Question $item)
    {
        return [
            'id' => $item->id,
            'question' => $item->question,
//            ''
        ];
    }
}
