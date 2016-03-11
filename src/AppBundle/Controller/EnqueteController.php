<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EnqueteController extends Controller
{
    public function reportAction()
    {
        return $this->render('AppBundle:Enquete:report.html.twig', array(
            // ...
        ));
    }

    public function newAction()
    {
        return $this->render('AppBundle:Enquete:new.html.twig', array(
            // ...
        ));
    }

    public function saveAction()
    {
        return $this->render('AppBundle:Enquete:save.html.twig', array(
            // ...
        ));
    }

}
