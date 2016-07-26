<?php

namespace App\Api\V1\Controllers;

use App\Solutions;
use JWTAuth;
use Validator;
use Config;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Dingo\Api\Routing\Helpers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;
use Tymon\JWTAuth\Exceptions\JWTException;
use Dingo\Api\Exception\ValidationHttpException;

class SolutionController extends Controller
{
    public function store(Request $request){
       // dd($request);
        Solutions::create([
            'code'=>$request[0]['code'],
            'question_id'=>$request[0]['question_id'],
            'correct'=>$request[0]['correct'],
            'user_id'=>$request[0]['user_id'],
        ]);
        return $request[0];
    }
}
