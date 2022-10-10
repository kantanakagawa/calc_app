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
                return view('message.addition', ['calcu' => $calcu, 'num1' => $num1, 'num2' => $num2]);
                break;
            case 'subtraction':
                return view('message.subtraction', ['calcu' => $calcu, 'num1' => $num1, 'num2' => $num2]);
                break;
            case 'multiplication':
                return view('message.multiplication', ['calcu' => $calcu, 'num1' => $num1, 'num2' => $num2]);
                break;
            case 'division':
                return view('message.division', ['calcu' => $calcu, 'num1' => $num1, 'num2' => $num2]);
                break;
        }
    }
}

