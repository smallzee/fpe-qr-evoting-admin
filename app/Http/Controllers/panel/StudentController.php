<?php

namespace App\Http\Controllers\panel;

use App\Department;
use App\Http\Controllers\Controller;
use App\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['page_title'] = "Create Students";
        return view('panel.student.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'matric_number'=>'required|unique:students',
            'email'=>'required|unique:students',
            'phone'=>'required|numeric',
            'department' =>'required',
            'level'=>'required',
            'sex'=>'required',
            'program'=>'required'
        ]);

        if ($validator->fails()){
            return back()->with('alert_error',$validator->errors()->first());
        }


        Students::create([
            'name'=>$request->name,
            'matric_number'=>$request->matric_number,
            'password'=>Hash::make($request->matric_number),
            'email'=>$request->email,
            'phone'=>$request->phone,
            'program'=>$request->program,
            'department_id' => $request->department,
            'level'=>$request->level,
            'sex'=>$request->sex,
        ]);

        return back()->with('alert_success','Student profile has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $department = Department::find($id);
        $data['page_title'] = "All ".ucwords($department->name)." Students";
        $data['students'] = Students::where('department_id',$id)->orderBy('id','desc')->paginate(10);
        return view('panel.student.index',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $student = Students::find($id);
        $data['page_title'] = "Edit Student Information";
        $data['student'] = $student;
        return view('panel.student.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'matric_number'=>'required',
            'email'=>'required',
            'phone'=>'required|numeric',
            'department' =>'required',
            'level'=>'required',
            'sex'=>'required',
            'program'=>'required'
        ]);

        if ($validator->fails()){
            return back()->with('alert_error',$validator->errors()->first());
        }

        $matric = strtolower($request->matric_number);

        $student = Students::find($id);
        $student->name = $request->name;
        $student->matric_number = strtolower($matric);
        $student->password = Hash::make($matric);
        $student->email = $request->email;
        $student->program = $request->program;
        $student->department_id = $request->department;
        $student->level = $request->level;
        $student->sex = $request->sex;
        $student->save();


        return back()->with('alert_success','Student profile has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        return $id;
    }
}
