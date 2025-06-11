<?php

namespace App\Http\Controllers;

use App\Model\CertificateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function make_request_certificate(Request $request){
        $validator=Validator::make($request->all(),[
            'user_id'   =>'required|numeric',
            'certificate_id'   =>'required|numeric',
        ]);
        $request->merge(['isCreated'=>1]);


        if($validator->fails()){
            return response(['errors'=>$validator->errors()]);
        }
        if($request->requestCertificate){
            $Requestcertification=CertificateRequest::findorfail($request->requestCertificate);
            $Requestcertification->update($request->all());
        }else{
            CertificateRequest::create($request->all());
        }


    }
}
