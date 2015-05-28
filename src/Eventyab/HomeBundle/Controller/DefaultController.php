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
        				'class' => 'form-control',
        				'id' => 'exampleInputName2'
        			)
        	))
        	->add('country', 'country', array(
        			'label' => false,
        			'placeholder' => 'Choose an option',
        			'required'    => false,
        			'attr' => array(
        					'class' => 'form-control'
        			)
        	))
        	->add('date', 'date', array(
        			'label' => false,
					'widget' => 'single_text',
					'html5' => true,
        			'required'    => false,
        			'attr' => array (
        					'class' => 'form-control'
        			)
        	))
        	->add('search', 'submit', array(
        			'label' => 'Search',
        			'attr' => array (
        					'class' => 'btn btn-primary'
        			)
        	))
        	->getForm();
        	
        	
        	/* 
        	$form_filter = $this->createFormBuilder(null, array ('attr' => array ('name' => 'form_filter')))
        	->setAction($this->generateUrl('eventyab_home'))
        	->add('name', 'text', array(
        			'label' => false, 'attr' => array(
        					'placeholder' =>'Event title',
        					'class' => 'form-control',
        					'id' => 'exampleInputName2'
        			)
        	))
        	->add('country', 'country', array(
        			'label' => false,
        			'placeholder' => 'Choose an option',
        			'required'    => false,
        			'attr' => array(
        					'class' => 'form-control'
        			)
        	))
        	->add('type', 'choice', array(
        			'choices' => array('r' => 'Riligious', 'c' => 'Cultural', 'a' => 'academia', 's' => 'sport'),
        			'label' => false,
        			'placeholder' => 'Choose an option',
        			'required'    => false,
        			'attr' => array(
        					'class' => 'form-control'
        			)
        	))
        	->add('price', 'choice', array(
        			'choices' => array('0' => 'Free', '1' => 'Under $10', '2' => '$10 - $20', '3' => '$20 and more'),
        			'label' => false,
        			'placeholder' => 'Choose an option',
        			'required'    => false,
        			'attr' => array(
        					'class' => 'form-control'
        			)
        	))
        	->add('date', 'date', array(
        			'label' => false,
        			'widget' => 'single_text',
        			'html5' => true,
        			'required'    => false,
        			'attr' => array (
        					'class' => 'form-control'
        			)
        	))
        	->add('search', 'submit', array(
        			'label' => 'Search',
        			'attr' => array (
        					'class' => 'btn btn-primary'
        			)
        	))
        	->getForm(); */
        
        return $this->render('EventyabHomeBundle:Default:index.html.php', array(
        		'form' => $form->createView(),
        		//'form_filter' => $form_filter->createView(),
        ));
        
    }
    
    public function testAction(Request $request) {
    	echo "THIS IS MO";
    }
}
