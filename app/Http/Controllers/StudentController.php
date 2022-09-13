<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Student $student){
        $students = Student::get();
        return view('students.index')-> with('students', $students);
    }
    public function createNew(){
        return view('students.create');
        
    }

    public function store(Request $request){
        $this->validate($request, [
            'name'=>'required|max:255',
            'address' => 'required|max:255',
            'mobile' => 'required',
        ]);

        Student::create([
            'name'=> $request->name,
            'address' => $request->address,
            'mobile'=> $request->mobile,
        ]);

        return redirect('/students');

    }

    public function edit($id){
        $student = Student::find($id);
        
        return view('students.edit',compact('student'));
    }

    public function update(Request $request, $id){
        $student = Student::find($id);

       $this->validate($request, [
            'name'=>'required|max:255',
            'address' => 'required|max:255',
            'mobile' => 'required',
        ]);

        $student->update([
            'name'=> $request->name,
            'address' => $request->address,
            'mobile'=> $request->mobile,
        ]);
        
        return redirect('/students');

    }

    public function destroy($id){
        $student = Student::find($id);
        $student->delete();
        return back()->with('status', 'deleted successfully');

    }

}
