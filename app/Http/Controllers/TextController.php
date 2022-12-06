<?php

namespace App\Http\Controllers;
use App\Models\Text;
use Illuminate\Http\Request;

class TextController extends Controller
{
    public function GetTexts(){
        $Texts = Text::all();
        return response()->json($Texts,200);
    }
    public function GetText($id){
        $Text = Text::find($id);
        return response()->json($Text,200);  
    }
    public function AddText(Request $request){
        $Text = Text::create($request->all());
        return response()->json($Text,200);
    }
    public function UpdateText(Request $request , $id){
        $Text = Text::find($id)->update($request->all());
        return response()->json(['message' => 'success'],200);
    }
    public function DeleteText( $id){
        $Text = Text::find($id)->delete();
        return response()->json(['message' => 'success'],200);
    }
}
