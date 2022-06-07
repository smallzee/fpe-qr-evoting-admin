<?php

namespace App\Http\Controllers\api;

use App\Contestant;
use App\Course;
use App\Http\Controllers\Controller;
use App\Posts;
use App\Students;
use App\Vote;
use Illuminate\Support\Facades\Log;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    //

    public function login(Request $request){

        $validator = Validator::make($request->all(),[
            'matric_number'=>'required',
            'password'=>'required'
        ]);

        if ($validator->fails()){
            GetJSONResponse($validator->errors()->first(),false);
        }

        $matric = strtolower($request->matric_number);
        $password = strtolower($request->password);

        $student = Students::where('matric_number',$matric);

        $student_info = $student->first();

        if ($student->count() == 0){
            GetJSONResponse("Invalid matric number entered",false);
        }

        if (!Hash::check($password,$student_info->password)){
            GetJSONResponse("Invalid password entered",false);
        }

        $response = array(
            'id'=>$student_info->id,
            'name'=>ucwords($student_info->name),
            'matric_number'=>strtoupper($student_info->matric_number),
            'phone'=>$student_info->phone,
            'email'=>$student_info->email,
            'department'=>ucwords($student_info->department->name),
            'level'=>$student_info->level,
            'gender'=>ucwords($student_info->sex),
            'programme'=>$student_info->program
        );

        GetJSONResponse("success",true,$response);

    }

    public function contestant(){
        $contestant = Contestant::orderBy('post_id')->get();

        if ($contestant->count() == 0){
            GetJSONResponse("No available contestant yet, please try again later",false);
        }

        $response = array();

        foreach ($contestant as $value){
            $response[] = array(
                'id'=>$value->id,
                'name'=>ucwords($value->name),
                'alias'=>ucwords($value->alias),
                'matric_number'=>strtoupper($value->matric_number),
                'phone'=>$value->phone,
                'email'=>$value->email,
                'department'=>ucwords($value->department->name),
                'level'=>$value->level,
                'gender'=>ucwords($value->sex),
                'programme'=>$value->program,
                'post'=>ucwords($value->post->name)
            );
        }

        GetJSONResponse("success",true,$response);
    }

    public function scanQr(Request $request){
        $validator = Validator::make($request->all(),[
            'matric_number'=>'required',
        ]);

        if ($validator->fails()){
            GetJSONResponse($validator->errors()->first(),false);
        }

        $student = Students::where('matric_number',$request->matric_number);
        $student_info = $student->first();

        if ($student->count() == 0){
            GetJSONResponse("Ops!! Sorry unable to scan your ID-Card",false);
        }

        $election_date = strtotime(get_settings('election_date'));
        $current_date = strtotime(date('Y-m-d'));

        if ($current_date != $election_date){
            GetJSONResponse("Could not conduct election now",false);
        }

        $post = Posts::orderBy('name')->get(['id','name']);

        $posts = $contestants = array();

        foreach ($post as $value){
            $posts[] = array(
                'id'=>$value->id,
                'image'=>image_url('icon.jpeg'),
                'name'=>ucwords($value->name),
            );
        }

        $contestant = Contestant::orderBy('name')->get();

        foreach ($contestant as $value){
            $contestants[] = array(
                'id'=>$value->id,
                'post_id'=>$value->post_id,
                'name'=>ucwords($value->name),
                'alias'=>ucwords($value->alias),
                'matric_number'=>strtoupper($value->matric_number),
                'phone'=>$value->phone,
                'email'=>$value->email,
                'department'=>ucwords($value->department->name),
                'level'=>$value->level,
                'gender'=>ucwords($value->sex),
                'programme'=>$value->program,
                'post'=>ucwords($value->post->name)
            );
        }

        $response = array(
            'post'=>$posts,
            'contestant'=>$contestants
        );

        GetJSONResponse("success",true,$response);

/*        $phone = $student_info->phone;
        $pin = rand(0000,9999);

        $curl = curl_init();

        $message = "Your epin is ".$pin;*/

       /* curl_setopt_array($curl, array(
            CURLOPT_URL => "https://www.bulksmsnigeria.com/api/v1/sms/create",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode([
                "api_token"=>"RPiWvY6eR8fPOtrLFQDOAbMyVTOinfV9GeS7bwb7aF462rnMOWYpYKxKJJCG",
                "from" => "FPE Evoting",
                "to"=>$phone,
                "body"=>$message,
                //"dnd"=>2
            ]),
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $response1 = json_decode($response,1);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err){
            GetJSONResponse("Error network, please try again later",false);
            return;
        }*/

      /*  if ($student_info->pin == 1){
            GetJSONResponse("You have already verified to cast vote",false);
            return;
        }

        $student_info->pin = $pin;
        $student_info->save();
        GetJSONResponse("Your verification pin has been sent to your phone number",true);*/

       /* if ($response1['data']['status'] == "success"){
            $student_info->pin = $pin;
            $student_info->save();
            GetJSONResponse("Your verification pin has been sent to your phone number",true);
            retur;
        }*/

    }

    public function verifyPin(Request $request){
        $validator = Validator::make($request->all(),[
            'pin'=>'required',
        ]);

        if ($validator->fails()){
            GetJSONResponse($validator->errors()->first(),false);
        }

        $student_id = $request->student_id;
        $student = Students::find($student_id);

        $pin = $request->pin;

        if ($pin != $student->pin){
            GetJSONResponse("Invalid verification pin entered",false);
            return;
        }

        if ($student->pin == 1){
            GetJSONResponse("You have already verified",false);
            return;
        }

        $post = Posts::orderBy('name')->get(['id','name']);

        $posts = $contestants = array();

        foreach ($post as $value){
            $posts[] = array(
                'id'=>$value->id,
                'image'=>image_url('icon.jpeg'),
                'name'=>ucwords($value->name),
            );
        }

        $contestant = Contestant::orderBy('name')->get();

        foreach ($contestant as $value){
            $contestants[] = array(
                'id'=>$value->id,
                'post_id'=>$value->post_id,
                'name'=>ucwords($value->name),
                'alias'=>ucwords($value->alias),
                'matric_number'=>strtoupper($value->matric_number),
                'phone'=>$value->phone,
                'email'=>$value->email,
                'department'=>ucwords($value->department->name),
                'level'=>$value->level,
                'gender'=>ucwords($value->sex),
                'programme'=>$value->program,
                'post'=>ucwords($value->post->name)
            );
        }

        $response = array(
            'post'=>$posts,
            'contestant'=>$contestants
        );

        GetJSONResponse("success",true,$response);

    }

    public function VoteContestant(Request $request){
        $voter_id = $request->voter_id;
        $contestant_id = $request->contestant_id;
        $post_id = $request->post_id;

        $vote = Vote::where('voter_id',$voter_id)->where('post_id',$post_id);

        $post = Posts::find($post_id);

        if ($vote->count() == 0){

            Vote::create([
                'voter_id'=>$voter_id,
                'contestant_id'=>$contestant_id,
                'post_id'=>$post_id
            ]);

            GetJSONResponse("Your vote has been cast successfully",true);

        }else{
            GetJSONResponse("You have already cast your vote for ".$post->name,false);
        }

    }

    public function Result(){
        $release_election_status = get_settings('release_election_result');

        if ($release_election_status == 0){
            GetJSONResponse("Election result has not been released",false);
        }

        $post = Posts::orderBy('name')->get(['id','name']);

        $posts = $contestants = array();

        foreach ($post as $value){
            $posts[] = array(
                'id'=>$value->id,
                'total_vote'=>Vote::where('post_id',$value->id)->count(),
                'image'=>image_url('icon.jpeg'),
                'total_accredited'=>Students::where('pin',1)->count(),
                'name'=>ucwords($value->name),
            );
        }

        $contestant = Contestant::orderBy('name')->get();

        foreach ($contestant as $value){
            $contestants[] = array(
                'id'=>$value->id,
                'post_id'=>$value->post_id,
                'name'=>ucwords($value->name),
                'alias'=>ucwords($value->alias),
                'matric_number'=>strtoupper($value->matric_number),
                'phone'=>$value->phone,
                'email'=>$value->email,
                'department'=>ucwords($value->department->name),
                'level'=>$value->level,
                'gender'=>ucwords($value->sex),
                'programme'=>$value->program,
                'post'=>ucwords($value->post->name),
                'total_vote'=>Vote::where('post_id',$value->post_id)->where('contestant_id',$value->id)->count()
            );
        }

        $response = array(
            'post'=>$posts,
            'contestant'=>$contestants
        );

        GetJSONResponse("success",true,$response);
    }

}
