<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\AnswerModel;

class AnswerController extends Controller
{
    //
    public function GetAnswer() {
        $answer = AnswerModel::inRandomOrder()->get()[0];
        return $answer;
    }
}
