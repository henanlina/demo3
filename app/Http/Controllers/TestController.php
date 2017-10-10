<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;

class TestController extends Controller
{
    //
    public function index(){
        $user = new User();
//        $data = $user->read();
//        $data = $user->getInfoById(1);
//        $data = $user->addUser(['id'=>2,'username'=>'test2','phone'=>'15838350795']);
        $data = $user->updateInfo(['phone'=>'15838350795'],['phone'=>'15838350000']);
        dump($data);
        echo 'route index';
    }
}
