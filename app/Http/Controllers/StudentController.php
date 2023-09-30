<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Validator as ValidationValidator;

class StudentController extends Controller
{
    public function index(){
        $data=Student::paginate(6);
        return view('admin.home')->with(['register'=>$data]);
    }

    //register page
    public function register(){
        return view('admin.register');
    }

    //register student page
    public function registerStudent(Request $request){
        $validator= Validator::make($request->all(),[
            'name' => 'required',
            'father_name' => 'required',
            'grade' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);
        if($validator->fails()){
            return back()->withErrors($validator)
                         ->withInput();
        }

        $data=$this->requestData($request);
        Student::create($data);
        return redirect()->route('admin#index')->with(['registerSuccess'=>"Register Successfully!"]);
    }

    //delete page
    public function delete($id){
        Student::where('student_id',$id)->delete();
        return back()->with(['deleteSuccess'=>'delete success']);
    }

    //info page
    public function studentInfo($id){
        $data= Student::where('student_id',$id)->first();
        return view('admin.info')->with(['info'=>$data]);
    }

    //edit page
    public function editStudent($id){
        $data=Student::where('student_id',$id)->first();
        return view('admin.edit')->with(['edit'=>$data]);
    }

    //update student page
    public function updateStudent($id,Request $request){
        $validator= Validator::make($request->all(),[
            'name' => 'required',
            'father_name' => 'required',
            'grade' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);
        if($validator->fails()){
            return back()->withErrors($validator)
                         ->withInput();
        }
        $updateData=$this->requestUpdateStudentData($request);
        Student::where('student_id',$id)->update($updateData);
        return redirect()->route('admin#index')->with(['updateSuccess'=>"update Successfully!"]);
    }


    private function requestUpdateStudentData($request){
        return[
            'name' => $request->name,
            'father_name' => $request->father_name,
            'grade' => $request->grade,
            'phone' => $request->phone,
            'address' => $request->address
        ];
    }

    private function requestData($request){
        return[
            'name' => $request->name,
            'father_name' => $request->father_name,
            'grade' => $request->grade,
            'phone' => $request->phone,
            'address' => $request->address
        ];
    }
}
