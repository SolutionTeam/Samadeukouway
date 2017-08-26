<?php

namespace FontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FontController extends Controller
{
    public function indexAction()
    {
        return $this->render('FontBundle:Default:index.html.twig');
    }
}
