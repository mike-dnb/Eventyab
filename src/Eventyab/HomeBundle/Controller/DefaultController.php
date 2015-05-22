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

        $form = $this->createFormBuilder()
			->setAction($this->generateUrl('eventyab_home'))
        	->add('name', 'text', array(
        			'label' => false, 'attr' => array(
        				'placeholder' =>'Event title',
        			)
        	))
        	->add('country', 'country', array(
        			'label' => false,
        			'placeholder' => 'Choose an option',
        	))
        	->add('date', 'date', array(
        			'label' => false,
					'widget' => 'single_text',
					'html5' => true,
        			'attr' => array (
        					'style' => 'height: 25px;',
        					'class' => 'form-control'
        			)
        	))
        	->add('search', 'submit', array(
        			'label' => 'Search',
        	))
        	->getForm();
        
        return $this->render('EventyabHomeBundle:Default:index.html.php', array(
        		'form' => $form->createView(),
        ));
        
    }
    
    public function testAction(Request $request) {
    	echo "THIS IS MO";
    }
}
