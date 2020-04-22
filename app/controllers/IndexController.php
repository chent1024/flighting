<?php

namespace App\Controllers;

use App\Models\News;

class IndexController
{
    public function index($aa = '')
    {
        echo 'index';
        echo $this->add();
//        app()->log()::logger->info('12312');
       $rs = News::where('id', 1)->first();
       print_r($rs->title);
        $rs = News::where('id', 1)->first();
        print_r($rs->title);
        config('app.debug');
        public_path('aaa');
        return view('index');
    }

    protected function add()
    {
        return 2;
    }
}
