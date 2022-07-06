<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PDF;

class PublicController extends Controller
{
    public function index()
    {
        return view('feedback');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'         => 'required',
            'organization' => 'required',
            'email'        => 'required|email',
            'mobile'       => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'date'         => 'required',
            'supervisor'   => 'required',
            'staff'        => 'required',
            'neatness'     => 'required',
            'rate'         => 'required',
            'feedback'     => 'required'
        ]);

        $data["name"] = $request->name;
        $data["organization"] = $request->organization;
        $data["email"] = $request->email;
        //$data["email"] = "deuti@ininepal.com";
        $data["mobile"] = $request->mobile;
        $data["date"] = $request->date;
        $data["feedback"] = $request->feedback;
        $data["supervisor"] = $request->supervisor;
        $data["staff"] = $request->staff;
        $data["neatness"] = $request->neatness;
        $data["rate"] = $request->rate;

        $pdf = PDF::loadView('email', $data);
        Mail::send('email', $data, function($message)use($data, $pdf) {
            $message->to('deuti@ininepal.com')->cc('kritika@ininepal.com')
                ->subject("Customer Feedback")
                ->attachData($pdf->output(), "feedback.pdf");
        });
        return response()->json(['success'=>'Form is successfully submitted!']);
    }
}
