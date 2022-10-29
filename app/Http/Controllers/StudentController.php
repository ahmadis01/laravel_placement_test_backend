<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function GetStudents(){
        $students = Student::all();
        return response()->json($students,200);
    }
    public function GetStudent($id){
        $student = Student::find($id);
        return response()->json($student,200);  
    }
    public function GetStudentByName($name){
        $student = Student::where('name',$name)->get();
        return response()->json($student,200);  
    }
    public function AddStudent(Request $request){
        Student::create($request->all());
        return response()->json(['message' => 'success'],200);
    }
    public function UpdateStudent(Request $request , $id){
        $student = Student::find($id)->update($request->all());
        return response()->json(['message' => 'success'],200);
    }
    public function DeleteStudent( $id){
        $student = Student::find($id)->delete();
        return response()->json(['message' => 'success'],200);
    }
}
