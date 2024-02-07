<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;


class SmsMessageController extends Controller
{
    //
    public function index(){

        // $message = Message::select('*')->get();
        return view('index');
    }

    public function action($id = null){

        // $message = Message::all();
        return view('insert');
    }

    public function store(Request $request, $id = null){

        $data = $request->all();
        $message = Message::updateOrCreate([
            'id' => $id ?? ''
        ], $data);

        return redirect(route('sms.insert'))->with('success','Maklumat berjaya disimpan.');
    }

    public function all()
    {
        $messages = Message::all();
        return response()->json($messages);
    }
    
    public function total()
    {
        $total = Message::count();
        return response()->json(['total' => $total]);
    }
    public function read()
    {
        $message = Message::all();
        return response()->json($message);
    }
    
}
