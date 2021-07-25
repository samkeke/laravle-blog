<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Samkeke\WxSpider\ServiceController;

class IndexController extends Controller
{

    public function index(Request $request){
        $wxSpiderService = new ServiceController("zgmy_0810@163.com" , "20170810_");
        $wxSpiderService->weChatLogin();
    }

}
