<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use \Exception;

class SubscriptionController extends Controller
{
    public function saveEmail(Request $request){

        $validator=$request->validate([
            'email' => ['required','email:rfc,dns']
        ]);


        if (Subscription::where('email','=',$validator['email'])->first()==null)
        {
            Subscription::create($validator);
        }
        return redirect('/');
    }
}
