<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use BaseController;

class TestController extends BaseController
{
    public function aa(){
        $this->loger->warning(1233);
    }
}
