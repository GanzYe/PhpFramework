<?php


namespace App\Controllers;


class SiteController {
    function index(){
        return view('home.html', [
            'name' => 'Bob' //request('name')
        ]);
    }
}