<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $data['page_title'] = "Settings";

        $all_settings = Settings::distinct()->whereNotIn('settings_input_type',['file'])->get(array('id','settings_type','settings_description','settings_key','settings_value','settings_input_type'));

        $all_settings_array = array();
        $old_key = "";


        foreach ($all_settings as $all_setting){
            $old_key = $all_setting['settings_type'];

            $all_settings_array[$old_key][] = array(
                'id'=>$all_setting['id'],
                'key' => $all_setting['settings_key'],
                'value' => $all_setting['settings_value'],
                'settings_input_type'=>$all_setting['settings_input_type'],
                'descr' => $all_setting['settings_description']
            );
        }


        $data['all_key'] = array_keys($all_settings_array);
        $data['all_settings_array'] = $all_settings_array;


        return view('panel.settings.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        $all_settings_data = $request->except('_token');

        // return $all_settings_data;

        foreach ($all_settings_data as $key => $value){
            $settings = Settings::find($key);
            $settings->settings_value = $value;
            $settings->save();
        }

        return redirect()->back()->with('alert_success','Settings has been updated successfully')->withInput();
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
            'advert_image'=>'required|max:1024',
        ]);

        if ($validator->fails()){
            return back()->with('alert_error',$validator->errors()->first());
        }

        if ($request->has('advert_image')){
            $file = $request->file('advert_image');
            $image = time().$file->getClientOriginalName();
            $file->move(move_image(),$image);
        }

        $settings = Settings::find($id);
        $settings->settings_value = $image;
        $settings->save();

        return redirect()->back()->with('alert_success','Settings has been updated successfully')->withInput();
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
