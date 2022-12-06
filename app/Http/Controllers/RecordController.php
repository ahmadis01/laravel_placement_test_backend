<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;
class RecordController extends Controller
{
    public function GetRecords(){
        $Records = Record::all();
        return response()->json($Records,200);
    }
    public function GetRecord($id){
        $Record = Record::find($id);
        return response()->json($Record,200);  
    }
    public function AddRecord(Request $request){
        $record = $request->file('path');
        $gen = hexdec(uniqid()).'.'.$record->getClientOriginalExtension();
        $record->move('records/',$gen);
        $last='recrods/'.$gen;
        Record::create([
            'path' => $last,
        ]);
        return response()->json($last,200);
    }
    public function UpdateRecord(Request $request , $id){
        $Record = Record::find($id)->update($request->all());
        return response()->json(['message' => 'success'],200);
    }
    public function DeleteRecord( $id){
        $Record = Record::find($id)->delete();
        return response()->json(['message' => 'success'],200);
    }
}
