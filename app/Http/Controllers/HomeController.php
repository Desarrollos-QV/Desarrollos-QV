<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    /**
     * Summary of services
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function services()
    {
        return view('website/services');
    }
    
    /**
     * Summary of clients
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function clients()
    {
        return view('website/clients');
    }

    /**
     * Summary of contact
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function contact()
    {
        return view('website/contact');
    }
}
