<?php

namespace Eventyab\EventsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EventyabEventsBundle:Default:index.html.twig', array('name' => $name));
    }
}
