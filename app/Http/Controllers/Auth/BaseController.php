<?php
 namespace App\Http\Controllers\Auth;
 use App\Http\Controllers\Controller;

 use Monolog\Logger;
 use Monolog\Handler\StreamHandler;

 class BaseController extends Controller
 {
     private $loger;
     public function __construct()
     {
         //初始化monolog
         $this->loger= new Logger('name');
         $this->loger->pushHandler(new StreamHandler('path/to/your.log'));
         $this->loger->addWarning('Foo');
     }
 }
