<?php

namespace Kit\XunsearchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KitXunsearchBundle:Default:index.html.twig');
    }
}
