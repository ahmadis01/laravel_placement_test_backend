<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function GetQuestions(){
        $questions = Question::all();
        return response()->json($questions,200);
    }
    public function GetQuestionByLanguage($language_id){
        $questions = Question::where('language_id', $language_id)->get();
        return response()->json($questions,200);
    }
    public function GetQuestionByQuestionType($language_id , $questionType_id){
        $questions = Question::where('language_id', $language_id)->where('questionType_id',$questionType_id )->get();
        return response()->json($questions , 200);
    }
    public function GetQuestion($id){
        $question = Question::find($id);
        return response()->json($question,200);  
    }
    public function AddQuestion(Request $request){
        $question = Question::create($request->all());
        $answers = QuestionController::AddQuestionAnswers($request,$question->id);
        return response()->json($question,200);
    }
    public function UpdateQuestion(Request $request , $id){
        $question = Question::find($id)->update($request->all());
        return response()->json(['message' => 'success'],200);
    }
    public function DeleteQuestion( $id){
        $question = Question::find($id)->delete();
        return response()->json(['message' => 'success'],200);
    }
    public static function AddQuestionAnswers(Request $request ,$question_id){
        for($i=0;$i<4;$i++){
            $answer = Answer::create([
                'answerText' => $request->answer[$i]->answerText,
                'isCorrect' => $request->answer[$i]->isCorrect,
                'question_id' => $question_id,
            ]);
        }
        
    }
}
