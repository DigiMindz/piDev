<?php

namespace Test2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('Test2Bundle:Default:index.html.twig');
    }
}
