<?php

namespace App\Http\Controllers;

use App\Model\Accreditation;
use App\Model\Branch;
use App\Model\CertificateRequest;
use App\Model\Certification;
use App\Model\Client;
use App\Model\Contact;
use App\Model\Message;
use App\Model\Partner;
use App\Model\Service;
use App\Model\setting;
use App\Model\Social;
use App\Model\Tag;
use App\Model\Team;
use App\Model\TrainingUser;
use App\Model\Trainning;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Traits\imageUploader;
use App\Model\Subscribe;
use App\User;

class SiteController extends Controller
{
    use imageUploader;
    public function homePage(){


        $services=Service::all();
        $certifications=Certification::orderby('id','asc')->limit(6)->get();
        $trainings=Trainning::all();
        $clients=Client::all();
        $partners=Partner::all();
        $accreditations=Accreditation::all();
        return view('frontend.home',compact('services','certifications','clients','partners','trainings','accreditations'));
    }

    public function Trainings(){
        $trainings=Trainning::paginate(9);
        return view('frontend.training',compact('trainings'));
    }
    public function single_training($id){
       $social=Social::orderby('id','desc')->first();

        $training=Trainning::with(['trainer','courses'])->findorfail($id);

        return view('frontend.singleTraining',compact('training','social'));
    }

    public function joinTraining(Request $request){
        $validator=Validator::make($request->all(),[
            'training_id'=>'required|numeric',
        ]);

        if($validator->fails()){
            return response(['errors'=>$validator->errors()]);
        }
           $request->merge(['user_id'=>auth()->user()->id]);
        TrainingUser::UpdateOrCreate($request->all());

        return 'saved';
    }
    
    public function single_certification($id)
    {
       
         $certification = certification::find($id);

        if (!$certification) {
            abort(404, 'Certification not found');
        }

        return view('frontend.single_certification', compact('certification'));
    }
       public function single_accreditation($id)
    {
       
         $accreditation = Accreditation::find($id);

        if (!$accreditation) {
            abort(404, 'Accreditation not found');
        }

        return view('frontend.single_accreditation', compact('accreditation'));
    }
    public function certifications(){
        $certifications=Certification::all();
        return view('frontend.certificates' ,compact('certifications'));
    }


    public function certification(){
        $certificate=Certification::orderby('id','desc')->findorfail(request()->id);
        return response(['certification'=>$certificate]);

    }

    public function save_request_certification(Request  $request){
        $validator=Validator::make($request->all(),[
            'certificate_id'  =>'required|numeric',
            'first_name'      =>'required|string',
            'last_name'       =>'required|string',
            'notes'           =>'required|string',
            'email'           =>'required|email',
            'phone'           =>'required',
        ]);



        if($validator->fails()){
            return response(['errors'=>$validator->errors()]);
        }


        $reqcertificate=CertificateRequest::where([
            'user_id'=>auth()->user()->id,
            'certificate_id' =>$request->certificate_id
        ])->first();
        if($reqcertificate){
            return response(['errors'=>['You Have Already Certificate Request  on This Certificate ']]);
        }
        $request->merge(['user_id'=>auth()->user()->id]);

        CertificateRequest::create($request->all());

         return 'saved';

    }

    public function show_all_services(){
        $services=Service::all();
        return view('frontend.services',compact('services'));

    }

    public function single_service($id){

        $service=Service::findorfail($id);
        $tags=Tag::all();
        return view('frontend.singleservice',compact('service','tags'));
    }

    public function tag_services($id){

       $tag=Tag::with('services')->findOrFail($id);


       $services=$tag['services'];


        return view('frontend.services',compact('services'));

    }

    public function about_us(){


        $teams =Team::all();
        $setting=Setting::orderby('id','desc')->first();
        return view('frontend.about',compact('setting','teams'));
    }
    public function ContacUs(){
        $contact=Contact::orderby('id','desc')->first();
        $branches=Branch::all();

        return view('frontend.contact',compact('contact','branches'));
    }

    public function save_message(Request $request){
        $validator=Validator::make($request->all(),[
            'First_name' =>'required|string',
            'email'=>'required|email',
            'phone' =>'required',
            'subject'=>'required',
            'message'=>'required',

        ]);

        if($validator->fails()){
            return response(['errors'=>$validator->errors()]);
        }
        Message::create($request->all());

        return 'saved';
    }
    public function profile(){
        $user=User::with(['certifications','trainings.trainer'])->where('id',auth()->user()->id)->first();


        return view('frontend.profile',compact('user'));

    }

    public function logout(){

        auth()->logout();
        return redirect('/');
    }

    public function edit_profile(){

        return view('frontend.edit_profile');
    }


    public function update_user_info(Request $request){


        $validator=Validator::make($request->all(),[
            'name'  =>'required|nullable',
            'email' =>'required|email|unique:users,email,'.auth()->user()->id,
            'phone' =>'sometimes|nullable',
            'biography' =>'sometimes|nullable|string',
            'new_password'   =>'sometimes|nullable|string',
            'cur_password' =>'required_with:new_password|nullable',
            'image'=>'sometimes|nullable|mimes:jpeg,png,jpg',
        ],[
            'new_password.confirm'=>'must confirm new Password',
        ]);

        if($validator->fails()){
            return response(['errors'=>$validator->errors()]);
        }

        if(!is_null($request->new_password)){
           if(auth()->attempt(['password'=>$request->cur_password ,'email'=>auth()->user()->email])){
               $request->merge(['password' =>Hash::make($request->new_password)]);
           }else{
               return response(['errors'=>['Current Password In Valid Try again']]);
           }
        }
        $data=$request->only(['password','name','phone','email','biography']);

        if($request->hasFile('image')){
            $data['image']=$this->uploadSingleImage($request->image ,'user');

        }

        $user=User::where('id',auth()->user()->id)->first();
        $user->update($data);

return  'Updated';
    }


public function subScribe(Request $request){
       // dd($request->all());
        Subscribe::updateOrCreate(['email'=>$request->EMAIL]);
return'updated';

    }

    public function searchCertificate(Request $request){
        $certifications=Certification::where('title' ,$request->search)->get();
        return view('frontend.certificates' ,compact('certifications'));

    }


}
