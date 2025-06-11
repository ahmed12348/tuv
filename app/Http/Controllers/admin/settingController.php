<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\Message;
use App\Model\setting;
use App\Model\Contact;
use App\Model\Social;
use App\Model\Subscribe;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class settingController extends Controller
{


    public function Our_Values(){

        $setting=Setting::orderby('id','desc')->first();



        return view('system.setting.ourValue',compact('setting'));

    }

    public function Our_Values_Update(Request $request){

        $validator=Validator::make($request->all() ,[
            'our_mission_en'=>'required|string',
            'our_mission_ar' =>'required|string',
            'our_vision_en' =>'required|string',
            'our_vision_ar'=>'required|string',
            'message_en'=>'required|string',
            'message_ar'=>'required|string',
            'about_ar'=>'required|string',
            'about_en'=>'required|string',
        ]);
        if($validator->fails()){
            return response(['errors'=>$validator->errors()]);
        }
        $setting=setting::orderby('id','desc')->first();

        $setting->update($request->all());
        return  'Updated';

    }

    public function contactus(){
        $contact=Contact::orderby('id','desc')->first();
        return view('system.setting.contact',compact('contact'));
    }


    public function ContactUs_update(Request $request){

        $validator=Validator::make($request->all() ,[
            'phone'         =>'required|string',
            'email'         =>'required|email',
            'address_en'    =>'required|string',
            'address_ar'    =>'required|string',
            'time_hour_en'  =>'required|string',
            'time_hour_ar'  =>'required|string',
        ]);
        if($validator->fails()) {
            return response(['errors' => $validator->errors()]);
        }
        $setting=Contact::orderby('id','desc')->first();
        $setting->update($request->all());
        return  'Updated';

    }
    public function update_social(Request $request){
           //dd($request->all());
        $validator=Validator::make($request->all() ,[
            'facebook'=>'sometimes|nullable|string',
            'instagram' =>'sometimes|nullable|string',
            'youtube' =>'sometimes|nullable|string',
            'linkedin' =>'sometimes|nullable|string',
            'skype' =>'sometimes|nullable|string',
            'twitter'=>'sometimes|nullable|string',
        ]);
        if($validator->fails()){
            return response(['errors'=>$validator->errors()]);
        }
        $social=Social::orderby('id','desc')->first();
        $social->update($request->all());

        return 'updated';
    }
    public function show_social(){


        $social=Social::orderby('id','desc')->first();
        return view('system.setting.social' ,compact('social'));
    }
    public function subscribes(){

        $subscribers=Subscribe::orderby('id','desc')->paginate(20);
        return view('system.setting.subscribers' ,compact('subscribers'));

    }
    public function Messages(){
        $messages=Message::orderby('id','desc')->paginate(20);
        return view('system.setting.messages',compact('messages'));

    }

    public function Messages_delete($id){

        Message::find($id)->delete();
        return'deleted';
    }

}
