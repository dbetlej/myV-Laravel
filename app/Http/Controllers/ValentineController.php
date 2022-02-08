<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Valentine;
use App\Models\Wishes;

class ValentineController extends Controller
{
    public function makeValentine(Request $request){
        if(empty($request->cupid_name)){
            return redirect('/')->with('errors', ['cupid_name' => __('errors.cupid_name')]);
        }
        if(empty($request->content)){
            return redirect('/')->with('errors', ['content' => __('errors.content')]);
        }

        $data['email'] = null;
        if(!empty($request->email))
            $data['email'] = $request->email;

        $data['cupid_name'] = $request->cupid_name;
        $data['content'] = $request->content;
        $data['valentine_token'] = Str::random(20);
        $data['cupid'] =  $request->ip();
        
        Valentine::factory()->create($data);

        if(!empty($request->email)){
            Mail::to($request->email)->send(new App\Mail\Valentine($data['valentine_token']));
        }
        
        return view('welcome', ['v' => $data]);
    }

    public function getValentine(string $token){
        if(empty($token)){
            return redirect('/404');
        }
        
        $v = Valentine::Valentine($token)->first();
        if(empty($v->created_at)){
            return redirect('/404');
        }

        if(!empty($_SERVER['HTTP_FORWARDED_FOR'])){
            $v->lover = $_SERVER['HTTP_FORWARDED_FOR'];
        }else if(!empty($_SERVER['REMOTE_ADDR'])){
            $v->lover = $_SERVER['REMOTE_ADDR'];
        }else{
            // $v->lover = '192.168.0.1'; //For tests only
        }
        $v->created_at = date('Y-m-d H:i:s');
        $v->save();

        return view('valentine', ['valentine' => $v]);
    }

    public function get_whish(){
        $whish = Wishes::inRandomOrder()->first();
        return response()->json($whish);
    }
}
