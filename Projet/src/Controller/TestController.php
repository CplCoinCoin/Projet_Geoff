<?php

namespace App\Controller ;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class TestController extends AbstractController 
{


    /**
     * @Route("/test", name="indextest")
     */
    public function index ()
    {
        var_dump("Hello");
        die();
    }


}


?>