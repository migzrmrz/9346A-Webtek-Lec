<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HtmlQuestions extends Model
{
    protected $table = 'html_questions';

    protected $primaryKey = 'html_question_number';

    public function htmlChoice()
    {
        return $this->hasMany('App\HtmlQuestions');
    }
}
