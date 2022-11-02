<?php

namespace App\Http\Controllers;
use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function GetLanguages(){
        $languages = Language::all();
        return response()->json($languages,200);
    }
    public function GetLanguage($id){
        $language = Language::find($id);
        return response()->json($language,200);  
    }
    public function GetLanguageByName($name){
        $language = Language::where('name',$name)->get();
        return response()->json($language,200);  
    }
    public function AddLanguage(Request $request){
        $language = Language::create($request->all());
        return response()->json($language,200);
    }
    public function UpdateLanguage(Request $request , $id){
        $language = Language::find($id)->update($request->all());
        return response()->json(['message' => 'success'],200);
    }
    public function DeleteLanguage( $id){
        $language = Language::find($id)->delete();
        return response()->json(['message' => 'success'],200);
    }
}
