<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use WxSpider\ServiceController;

class IndexController extends Controller
{

    public function index(Request $request){
        $wxSpiderService = new ServiceController("zgmy_0810@163.com" , "20170810_" ,[
            'host'  => '127.0.0.1',
            'port'  => 3306,
            'user'  => 'root',
            'pass'  => 'wxy1314520',
            'name'  => 'laravel-blog',
        ]);
        $status = $wxSpiderService->weChatLogin();
        dd($status);
    }

}
