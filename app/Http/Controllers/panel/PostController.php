<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['page_title'] = "All Posts";
        $data['posts'] = Posts::orderBy('name')->paginate(10);
        return view('panel.post.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['page_title'] = "Create Post";
        return view('panel.post.create',$data);
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
            'name'=>'required|unique:posts'
        ]);

        if ($validator->fails()){
            return back()->with('alert_error',$validator->errors()->first());
        }

        Posts::create([
            'name'=>$request->name
        ]);

        return back()->with('alert_success','Post has been added successfully');
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
        $data['page_title'] = "Edit Posts";
        $data['post'] = Posts::find($id);
        return view('panel.post.edit',$data);
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
            'name'=>'required'
        ]);

        if ($validator->fails()){
            return back()->with('alert_error',$validator->errors()->first());
        }

        $posts = Posts::find($id);
        $posts->name = $request->name;
        $posts->save();

        return back()->with('alert_success','Post has been updated successfully');
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
