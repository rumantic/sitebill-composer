<?php
namespace Sitebill;
use Illuminate\Routing\Controller;

class Sitebill extends Controller
{
    public static function world()
    {
        //test
        return view('sitebill::index');
    }
}

