<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Mail;
use Session;
use Auth;

class PaginasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['only' => 'post_Login' ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function postContact(Request $request) {
        $this->validate($request, [
            'names' => 'required|max:100',
            'email' => 'required|email',
            'phone' => 'digits_between:8,10',
            'subject' => 'min:3',
            'mensaje' => 'required']);

        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'nombres' => $request->names,
            'tel' => $request->phone,
            'bodyMessage' => $request->mensaje
            );

        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('valerdi.play@gmail.com');
            $message->subject($data['subject']);
        });

        Session::flash('success', 'Your Email was Sent!');

        return redirect('/');
    }

    public function post_Login()
    {
        $user = Auth::user();
        
        return view('plantilla.inicio', ['user'=>$user]);
    }
}
