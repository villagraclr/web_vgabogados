<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\EmailMailable;
use Illuminate\Support\Facades\Mail;
use App\Models\Subject;
use App\Models\PracticeArea;
use App\Models\Contact;

class AppController extends Controller
{
    //
    public function index(){
        $practice_areas = PracticeArea::all();
        return view('app.home', ["practice_areas" => $practice_areas]);
    }
    public function about(){
        return view('app.about');
    }
    public function service(){
        return view('app.service');
    }
    public function contact(){
        $practice_areas = PracticeArea::all();
        return view('app.contact_us', ["practice_areas" => $practice_areas]);
    }
    public function fetchPracticeArea(Request $request){
        $data['subjects'] = Subject::where("practice_area_id",$request->practice_area_id)->get(["title", "id"]);
        return response()->json($data);
    }
    public function send(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|min:4',
                'email' => 'required|email:rfc,dns',
                'phone' => 'required|min:9',
                'practice_area_id' => 'required',
                'subject_id' => 'required',
                'subject' => 'required|min:4',
                'message' => 'required'
            ],
            [
                'name.required'=>'El campo Nombre está vacío',
                'name.min'=>'El campo Nombre debe tener al menos 6 caracteres',
                'email.required'=>'El campo E-Mail está vacío',
                'email.email'=>'El E-Mail ingresado no es válido',
                'phone.required'=>'El campo Teléfono está vacío',
                'phone.min'=>'El campo Teléfono debe tener al menos 9 caracteres',
                'practice_area_id.required'=>'Seleccione Área de práctica',
                'subject_id.required'=>'Seleccione Motivo',
                'subject.required'=>'El campo Asunto está vacío',
                'subject.min'=>'El campo Asunto debe tener al menos 6 caracteres',
                'message.required'=>'El campo Descripción está vacío'
            ]
        );
        $mailData = [
            'name'              =>  $request->input('name'),
            'email'             =>  $request->input('email'),
            'phone'             =>  $request->input('phone'),
            'practice_area_title'  =>  $request->input('practice_area_title'),
            'subject_title'        =>  $request->input('subject_title'),
            'subject'           =>  $request->input('subject'),
            'message'           =>  $request->input('message')
	];
	
        Contact::create(
            [
                'name'=>$request->input('name'),
                'email'=>$request->input('email'),
                'phone'=>$request->input('phone'),
                'practice_area_id'=>$request->input('practice_area_id'),
                'subject_id'=>$request->input('subject_id'),
                'subject'=>$request->input('subject'),
                'message'=>$request->input('message')
            ]
	);
	$to = env('MAIL_TO_ADDRESS');
	$cc = $request->input('email');
	$email = new EmailMailable(
		$request->input('name'),
 		$request->input('email'),
 		$request->input('phone'),
 		$request->input('practice_area_title'),
 		$request->input('subject_title'),
 		$request->input('subject'),
 		$request->input('message')
	);
	Mail::to($to)->cc($cc)->send($email);

        //$request->session()->flash('css', 'success');
        //$request->session()->flash('mensaje', "Se creó el registro exitosamente");
        return redirect()->route('index');
    }
}

