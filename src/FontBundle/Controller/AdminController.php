<?php

namespace SamakeurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction()
    {
        return $this->render('SamakeurBundle:Default:index.html.twig');
    }
}
