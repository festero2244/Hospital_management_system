<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Doctor;

use App\Models\Appointment;

use App\Models\ContactUs;

use Mail;


class HomeController extends Controller
{
    

    public function redirect(){
        if(Auth::id()){
            if(Auth::user()->usertype=='0'){
                $doctor = doctor::all();
                return view('user.home',compact('doctor'));
            }

            else{
                return view('admin.home');
            }

        }
        else{
            return redirect()->back();
        }
    }

    public function index(){
        if(Auth::id())
        {
            return redirect('home');
        }
        else
        {
        $doctor = doctor::all();//send all data from doctor table to user home page
        return view('user.home',compact('doctor'));
    }
}

public function appointment(Request $request ){

    $data = new appointment;

    $data->name=$request->name;

    $data->email=$request->email;

    $data->date=$request->date;

    $data->phone=$request->number;

    $data->message=$request->message;

    $data->doctor=$request->doctor;

    $data->status='In progress';

    if(Auth::id())
    {
        $data->user_id=Auth::user()->id;
    }

    $data->save();

    return redirect()->back()->with('message','Appointment Request Successful . We will get back to you soon.');

    


}

public function myappointment(){


      if(Auth::id()){
        $userid=Auth::user()->id;//get and store userid in userid 
        $appoint=appointment::where('user_id',$userid)->get();//for getting appointment
     
    return view('user.my_appointment',compact('appoint'));
}

else{
    return redirect()->back();
}


}

public function cancel_appoint($id){
    
    $data=appointment::find($id);

    $data->delete();

    return redirect()->back();
}

public function about(){
    $doctor = doctor::all();
    return view('user.about',compact('doctor'));
   
}


public function doctors(){

    $doctor = doctor::all();
    return view('user.doctor',compact('doctor'));
    
}

public function contact(){
        
    return view('user.contact');
}

public function save(Request $request) { 

    $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required'
    ]);

    $contact = new ContactUs;

    $contact->name = $request->name;
    $contact->email = $request->email;
    $contact->subject = $request->subject;
    $contact->message = $request->message;

    $contact->save();
    
    \Mail::send('user.contactemail',
         array(
             'name' => $request->get('name'),
             'email' => $request->get('email'),
             'subject' => $request->get('subject'),
             'user_message' => $request->get('message'),
         ), function($message) use ($request)
           {
              $message->from($request->email);
              $message->to('festy5050@gmail.com');
           });
    return back()->with('success', 'Thank you for contact us!');

}

}
