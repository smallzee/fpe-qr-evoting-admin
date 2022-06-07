<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['page_title'] = "Administrative";
        $data['users'] = User::orderBy('id','desc')->paginate(10);
        return view('panel.admin.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['page_title'] = "Create New Administrative";
        return view('panel.admin.create',$data);
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
            'email'=>'required|unique:users|max:200',
            'phone'=>'required|unique:users|numeric',
            'password'=>'required'
        ]);

        if ($validator->fails()){
            return back()->with('alert_error',$validator->errors()->first());
        }

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'password'=>Hash::make($request->password)
        ]);

        return back()->with('alert_success','Account created successfully');
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
        $user = User::find($id);
        $data['page_title'] = "Edit Administrative";
        $data['user'] = $user;
        return view('panel.admin.edit',$data);
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
        $user = User::find($id);

        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'phone'=>'required|numeric',
        ]);

        if ($validator->fails()){
            return back()->with('alert_error',$validator->errors()->first());
        }

        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->save();

        return back()->with('alert_success','Account has been updated successfully');
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
