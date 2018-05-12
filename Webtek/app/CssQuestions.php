<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CssQuestions extends Model
{
    protected $table = 'css_questions';

    protected $primaryKey = 'css_question_number';

    public function htmlChoice()
    {
        return $this->hasMany('App\CssQuestions');
    }
}
