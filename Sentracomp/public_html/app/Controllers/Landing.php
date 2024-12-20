<?php

namespace App\Controllers;

class Landing extends BaseController
{
    public function index($lang)
    {
        //Get Lang
        //Pengecekan Jika Kosong
        if (empty($lang)) {
            $lang = 'id';
        }

        $data['lang'] = lang_landing($lang);
        return view('landing/v_index', $data);
    }
}
