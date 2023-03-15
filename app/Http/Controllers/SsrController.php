<?php


namespace App\Http\Controllers;


use App\Utils\Ssr;

class SsrController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index() {
        return Ssr::render();
    }
}
