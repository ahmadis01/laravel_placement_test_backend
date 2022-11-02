<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentLanguage;
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
        $student = Student::create($request->all());
        StudentLanguage::create([
            'language_id'=>$request->language_id,
            'student_id' =>$student->id
        ]);
        return response()->json($student,200);
    }
    public function GetStudentLanguages($id){
        $languages = StudentLanguage::where('student_id',$id)->get();
        return response()->json($languages,200);
    }
    public function AddStudentLanguage($student_id , $language_id){
        StudentLanguage::create([
            'language_id' =>$language_id,
            'student_id' =>$student_id
        ]);
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
