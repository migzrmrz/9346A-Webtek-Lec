<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requsts;

use Illuminate\Http\Request;

use App\HtmlQuestions;
use App\HtmlChoice;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function quiz()
    {
        return view('pages.quiz');
    }

    public function courses()
    {
        return view('pages.courses');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function login()
    {
        return view('pages.login');
    }

    public function register()
    {
        return view('pages.register');
    }
    
    public function home()
    {
        return view('pages.home');
    }

    public function htmlQuiz()
    {
        return view('pages.htmlQuiz');
    }

    public function cssQuiz()
    {
        return view('pages.cssQuiz');
    }

    public function htmlQuestionsPage()
    {   
        $questions = HtmlQuestions::all();
        $choices = HtmlChoice::all();
        return view('pages.htmlQuestionsPage')->with('questions', $questions)->with('choices', $choices);
    }

    public function htmlCourse()
    {
        return view('pages.htmlCourse');
    }

    public function cssCourse()
    {
        return view('pages.cssCourse');
    }

    public function phpCourse()
    {
        return view('pages.phpCourse');
    }

    public function jsCourse()
    {
        return view('pages.jsCourse');
    }

    public function nodeJSCourse()
    {
        return view('pages.nodeJSCourse');
    }

    public function jspCourse()
    {
        return view('pages.jspCourse');
    }

    public function javaServletCourse()
    {
        return view('pages.javaServletCourse');
    }


}
