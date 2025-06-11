<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\Accreditation;
use App\Model\CertificateRequest;
use App\Model\Company;
use App\Model\Team;
use Illuminate\Http\Request;
use App\Model\Certification;
use App\User;
use Illuminate\Support\Facades\Validator;
use App\Traits\imageUploader;
use niklasravnsborg\LaravelPdf\Facades\Pdf;

class AccreditationController extends Controller
{
    use imageUploader;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accreditations =Accreditation ::orderby('id','desc')->paginate(20);

        return view('system.accreditations.index' ,compact('accreditations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('system.accreditations.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all(); 
        $validator = Validator::make($data, [
            'title_ar'        => 'required|string|min:3|max:100',
            'title_en'        => 'required|string|min:3|max:100',
            'description_ar'  => 'required|string|min:10|max:1000',
            'description_en'  => 'required|string|min:10|max:1000',
            'icon'            => 'required|string|max:255',
            'image'           => 'required|file|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($validator->fails()) {
            return response(['errors' => $validator->errors()], 422);
        }

        $data['image'] = $this->uploadSingleImage($request->file('image'), 'accreditations');

        $accreditation = Accreditation::create($data);

        // Sync tags (assuming many-to-many)
        if ($request->has('tags')) {
            $accreditation->tags()->sync($request->tags);
        }

        return response(['message' => 'Saved successfully'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $accreditation = Accreditation::findOrFail($id);
        return view('system.accreditations.edit', compact('accreditation'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accreditation $accreditation)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'title_ar'        => 'required|string|min:3|max:100',
            'title_en'        => 'required|string|min:3|max:100',
            'description_ar'  => 'required|string|min:10|max:1000',
            'description_en'  => 'required|string|min:10|max:1000',
            'icon'            => 'required|string|max:255',
            'image'           => 'nullable|file|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($validator->fails()) {
            return response(['errors' => $validator->errors()], 422);
        }

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadSingleImage($request->file('image'), 'accreditations');
        }

        $accreditation->update($data);


        return response(['message' => 'Updated successfully'], 200);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accreditation $accreditation)
    {
        $accreditation->delete();
        return 'deleted';
    }

    public function cerification_request(){

        $accreditations=CertificateRequest::with(['user','certificate'])->paginate(20);
        return view('system.accreditations.request_certification' ,compact('accreditations'));

    }
    public function cerification_request_delete($id){

        $accreditations=CertificateRequest::where('id',$id)->first()->delete();
        return 'delete';

    }

    public function add_certificate($id=null){

        if($id)
            $Requestcertification=CertificateRequest::findorfail($id);
        else
            $Requestcertification=null;

        $certifications=Certification::all();
        $users=User::all();
        $teams=Team::all();
        $companies=Company::all();
        return view('system.certifications.create' ,compact('teams','users','Requestcertification','certifications','companies'));

    }

    public function save_certificate(Request $request){
        $validator=Validator::make($request->all(),[
            'user_id'   =>'required|numeric',
            'trainer_id'   =>'required|numeric',
            'certificate_id'   =>'required|numeric',
            'status'    =>'required|numeric',
            'title'     =>'required|string',
            'date'      =>'required|date',
            'start_date' =>'required|date',
            'end_date' =>'required|date',
            'serial' =>'required|unique:certificate_requests',
            'username_certificate' =>'required|string',
            'compnay_id' =>'required|numeric',
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
    public function generate_serial($id){

        $certificate=Certification::where('id',$id)->first();

        $digits = 6;
        //    Eg. substr(str_shuffle("0123456789"), 0, 5);
        return 'FN-'.$certificate->symbol.'-'.substr(str_shuffle("0123456789"), 0, 5);
    }
    public function certificate_show($id){

        $certificate=CertificateRequest::with(['company','coach','category'])->where([
            'isCreated'=>1,
            'id'=>$id
        ])->firstOrFail();




        $pdf =Pdf::loadView('system.certifications.pdf', ['certificate'=>$certificate], [], [
            'format' => 'A4-L'
        ]);
        $output = $pdf->output();

        return new \Illuminate\Http\Response($output, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline',
            'filename' => "company.pdf'"]);
    }

    public function certificate_Edit($id){

        $Requestcertification=CertificateRequest::findorfail($id);
        $certifications=Certification::all();
        $users=User::all();
        $teams=Team::all();
        $companies=Company::all();

        return view('system.certifications.edit' ,compact('companies','teams','users','Requestcertification','certifications'));

    }

    // public function Update_certificate(Request $request ,$id){


    //     $validator=Validator::make($request->all(),[
    //         'user_id'   =>'required|numeric',
    //         'trainer_id'   =>'required|numeric',
    //         'certificate_id'   =>'required|numeric',
    //         'status'    =>'required|numeric',
    //         'title'     =>'required|string',
    //         'date'      =>'required|date',
    //         'start_date' =>'required|date',
    //         'end_date' =>'required|date',
    //         'serial' =>'required|unique:certificate_requests,serial,'.$id,
    //         'username_certificate' =>'required|string',
    //         'compnay_id' =>'required|numeric',
    //     ]);
    //     $request->merge(['isCreated'=>1]);


    //     if($validator->fails()){
    //         return response(['errors'=>$validator->errors()]);
    //     }
    //         $Requestcertification=CertificateRequest::findorfail($id);
    //         $Requestcertification->update($request->all());
    // }
    public function search(Request $request)
    {
        $search = $request->input('query');
        $accreditations = Accreditation::where('title', 'like', $search . '%')->get();
    
        return response()->json($accreditations);
    }
    

}
