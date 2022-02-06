<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Valentine;

class ValentineController extends Controller
{
    public function makeValentine(Request $request){
        if(empty($request->cupid_name)){
            return back()->withErrors(['cupid_name' => __('errors.cupid_name')]);
        }

        $data['email'] = null;
        if(!empty($request->email))
            $data['email'] = $request->email;

        $data['cupid_name'] = $request->cupid_name;
        $data['valentine_token'] = Str::random(20);
        $data['cupid'] =  $request->ip();
        
        Valentine::factory()->create($data);

        if(!empty($request->email)){
            // TODO: add mail
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
        
        $v->lover = $_SERVER['REMOTE_ADDR']; //$_SERVER['HTTP_FORWARDED_FOR']; temporary for tests
        $v->created_at = date('Y-m-d H:i:s');
        $v->save();

        return view('valentine', ['valentine' => $v]);
    }
}
