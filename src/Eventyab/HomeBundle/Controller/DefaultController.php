<?php

namespace Eventyab\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        //return $this->render('EventyabHomeBundle:Default:index.html.twig', array('name' => $name));
        //return $this->render('EventyabHomeBundle:Default:index.html.twig');
        $reponse = new Response(json_encode(array('name'=>'Mohammad')));
        $reponse->headers->set('Content-Type', 'application/json');
        //echo $request->getLanguages()[0];
        //return $reponse;
        return $this->render('EventyabHomeBundle:Default:index.html.php');
        
    }
    
    public function testAction(Request $request) {
    	echo "THIS IS MO";
    }
}
