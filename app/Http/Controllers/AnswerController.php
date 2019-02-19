<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\AnswersModel;

class AnswerController extends Controller
{
    //
    public function GetAnswer() {
        $answer = AnswersModel::inRandomOrder()->get()[0];
        return response($answer, 200);
    }
}
