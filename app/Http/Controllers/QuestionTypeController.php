<?php

namespace App\Http\Controllers;

use App\Models\QuestionType;
use Illuminate\Http\Request;

class QuestionTypeController extends Controller
{
    public function GetQuestionTypes(){
        $languages = QuestionType::all();
        return response()->json($languages,200);
    }
    public function GetQuestionType($id){
        $language = QuestionType::find($id);
        return response()->json($language,200);  
    }
    public function AddQuestionType(Request $request){
        $language = QuestionType::create($request->all());
        return response()->json($language,200);
    }
    public function UpdateQuestionType(Request $request , $id){
        $language = QuestionType::find($id)->update($request->all());
        return response()->json(['message' => 'success'],200);
    }
    public function DeleteQuestionType( $id){
        $language = QuestionType::find($id)->delete();
        return response()->json(['message' => 'success'],200);
    }
}
