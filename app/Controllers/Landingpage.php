<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Landingpage extends BaseController
{
    public function index()
    {
        $data = [            
            'whatsapp' => "446 290 6191",
            'mobile' => "446 290 6191",
            'email_contacto' => "contacto@beecloud.com.mx",
            'email_info' => "info@beecloud.com.mx",
            'url_facebook' => "https://www.facebook.com/beecloud",
            'url_twitter' => "https://www.twitter.com/beecloud",
            'url_instagram' => "https://www.instagram.com/beecloud"
        ];

        return view("lp_v", $data);
    }

    public function privacidad()
    {

        $data = [            
            'whatsapp' => "446 290 6191",
            'mobile' => "446 290 6191",
            'email_contacto' => "contacto@beecloud.com.mx",
            'email_info' => "info@beecloud.com.mx",
            'url_facebook' => "https://www.facebook.com/beecloud",
            'url_twitter' => "https://www.twitter.com/beecloud",
            'url_instagram' => "https://www.instagram.com/beecloud"
        ];

        return view("lp_privacidad_v", $data);
    }

    public function terminos_y_condiciones()
    {

        $data = [            
            'whatsapp' => "446 290 6191",
            'mobile' => "446 290 6191",
            'email_contacto' => "contacto@beecloud.com.mx",
            'email_info' => "info@beecloud.com.mx",
            'url_facebook' => "https://www.facebook.com/beecloud",
            'url_twitter' => "https://www.twitter.com/beecloud",
            'url_instagram' => "https://www.instagram.com/beecloud"
        ];

        return view("lp_terminos_y_condiciones_v", $data);
    }
}
