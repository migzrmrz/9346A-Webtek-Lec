<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CssChoice extends Model
{
    protected $table = 'css_choices';

    protected $primaryKey = 'id';

    public function question()
    {
        return $this->belongsTo('App\CssQuestions', 'css_question_number');    
    }
}
