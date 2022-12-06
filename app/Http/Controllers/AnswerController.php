<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function GetAnswers(){
        $Answers = Answer::all();
        return response()->json($Answers,200);
    }
    public function GetQuestionAnswers($question_id){
        $Answers = Answer::where($question_id)->get();
        return response()->json($Answers,200);  
    }
    public function GetCorrectAnswers(){
        $answers = Answer::where('isCorrect',true)->get();
        return response()->json($answers,200);
    }
    public function GetCorrectAnswer($question_id){
        $answer = Answer::where('question_id',$question_id ,'isCorrect',true)->get();
        return response()->json($answer,200);
    }
    public function AddAnswer(Request $request){
        $Answer = Answer::create($request->all());
        return response()->json($Answer,200);
    }
    public function UpdateAnswer(Request $request , $id){
        $Answer = Answer::find($id)->update($request->all());
        return response()->json(['message' => 'success'],200);
    }
    public function DeleteAnswer($id){
        $Answer = Answer::find($id)->delete();
        return response()->json(['message' => 'success'],200);
    }
}
