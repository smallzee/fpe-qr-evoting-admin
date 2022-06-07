<?php

namespace App\Http\Controllers\panel;

use App\Contestant;
use App\Http\Controllers\Controller;
use App\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ContestantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['page_title'] = "All Contestant";
        $data['contestant'] = Contestant::orderBy('matric_number')->paginate(10);
        return view('panel.contestant.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['page_title'] = "Create Contestant";
        return view('panel.contestant.create',$data);
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
            'matric_number'=>'required|unique:contestant',
            'email'=>'required|unique:contestant',
            'phone'=>'required|numeric',
            'department' =>'required',
            'level'=>'required',
            'sex'=>'required',
            'program'=>'required',
            'post'=>'required',
            'alias'=>'required'
        ]);

        if ($validator->fails()){
            return back()->with('alert_error',$validator->errors()->first());
        }


        Contestant::create([
            'name'=>$request->name,
            'matric_number'=>$request->matric_number,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'program'=>$request->program,
            'department_id' => $request->department,
            'level'=>$request->level,
            'sex'=>$request->sex,
            'post_id'=>$request->post,
            'alias'=>$request->alias
        ]);

        return back()->with('alert_success','Contestant profile has been created successfully');
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
        $data['page_title'] = "Edit Contestant Profile";
        $data['contestant'] = Contestant::find($id);
        return view('panel.contestant.edit',$data);
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
            'program'=>'required',
            'post'=>'required',
            'alias'=>'required'
        ]);

        if ($validator->fails()){
            return back()->with('alert_error',$validator->errors()->first());
        }

        $contestant = Contestant::find($id);
        $contestant->name = $request->name;
        $contestant->matric_number = $request->matric_number;
        $contestant->email = $request->email;
        $contestant->program = $request->program;
        $contestant->department_id = $request->department;
        $contestant->level = $request->level;
        $contestant->sex = $request->sex;
        $contestant->post_id = $request->post;
        $contestant->alias = $request->alias;
        $contestant->save();


        return back()->with('alert_success','Contestant profile has been updated successfully');
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
    }
}
