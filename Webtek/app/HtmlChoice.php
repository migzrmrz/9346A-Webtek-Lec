<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HtmlChoice extends Model
{
    protected $table = 'html_choices';

    protected $primaryKey = 'id';

    public function question()
    {
        return $this->belongsTo('App\HtmlQuestions', 'html_question_number');    
    }
}
