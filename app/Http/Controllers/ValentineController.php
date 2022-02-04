<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Valentine;

class ValentineController extends Controller
{
    public function makeValentine(Request $request)[
        if(empty($request->cupid_name)){
            return back()->withErrors(['cupid_name', __('errors.cupid_name')])
        }

        $data['email'] = null;
        if(!empty($request->email))
            $data['email'] = $request->email;

        $data['cupid_name'] = $request->cupid_name;
        $data['valentine_token'] = Str::random(20);
        
        Valentine::factory()->create($data);

        if(!empty($request->email)){
            // TODO: add mail
        }
        
        return view('valentine_confirmation', $data);
    ];
}
