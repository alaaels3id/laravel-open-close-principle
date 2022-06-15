<?php

namespace App\Http\Controllers;

use App\Http\Icons\IconInterface;

class HomeController extends Controller
{
    protected IconInterface $iconInterface;

    public function __construct(IconInterface $iconInterface)
    {
        $this->iconInterface = $iconInterface;
    }

    public function index()
    {
        return view('home', ['icons' => $this->iconInterface->getIcons()]);
    }
}
