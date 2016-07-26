<?php

namespace App\Api\V1\Controllers;

use App\Questions;
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

class QuestionsController extends Controller
{

    public function index()
    {
        $questions = Questions::all();
        return $questions;
    }
    public function show($id){
        $question= Questions::where('id','=',$id)->first();
        return $question;
    }
}
