<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    function formSubmit(Request $request){
        
        $data= array(
            'subject'=> $request->input('subject'),
            'emailMessage'=>$request->input('message')
        );
        $rules = array(
            'subject' => 'required',
            'emailMessage' => 'required'
            );
            
        $validator = Validator::make($data, $rules);

        if($validator->fails()){
           return Redirect::to('contact')->withErrors($validator)->withInput();
        }
        

        \Mail::send('contactMsg', $data, function($message){
                $message->to('developer.rahgozar@gmail.com','Business LaravelProject')
                        ->subject('Business LaravelPRoject Contact Us');
        });

        return Redirect::to('contactMsg');

    }
}
