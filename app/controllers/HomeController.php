<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\Home;

class HomeController extends Controller
{
    private Home $home;
 
    public function __construct()
    {
        $this->home = new Home();
    }

    public function index($request)
    {
        $data = ["titulo" => "Bienbenido al Home"];
        return $this->render("home/home", $data);
    }

    public function saludar(Request $request, $nombre = "desconocido")
    {
        return $this->render("home/saludar", ["nombre" => $nombre]);
    }

    public function users(Request $request)
    {
        $usuarios = $this->home->all();
        return $this->render("test", ["users" => $usuarios]);
    }
}
