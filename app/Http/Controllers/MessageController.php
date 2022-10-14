<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function word($msg)
    {
        return view('message.word', ['msg' => $msg]);
    }

    public function result($num1,$calcu,$num2)
    {
        switch ($calcu) {
            case 'addition':
            $ans = $num1 + $num2;
                return view('message.result', ['calcu' => $calcu, 'num1' => $num1, 'num2' => $num2, 'ans'=> $ans]);
                break;
            case 'subtraction':
            $ans = $num1 - $num2;
                return view('message.result', ['calcu' => $calcu, 'num1' => $num1, 'num2' => $num2, 'ans'=> $ans]);
                break;
            case 'multiplication':
            $ans = $num1 * $num2;
                return view('message.result', ['calcu' => $calcu, 'num1' => $num1, 'num2' => $num2, 'ans'=> $ans]);
                break;
            case 'division':
            $ans = $num1 / $num2;
                return view('message.result', ['calcu' => $calcu, 'num1' => $num1, 'num2' => $num2, 'ans'=> $ans]);
                break;
        }
    }
}

