<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }


    /* A */

    /* B */

    /* C */
    
    /**
     * @Route("/careless.html", name="careless")
     */
    public function carelessAction()
    {
        return $this->render('default/careless.html.twig');
    }
    
    /* D */

    /* E */

    /* F */

    /* G */

    /* H */
     /**
     * @Route("/prevention.html", name="prevention")
     */
    public function preventionAction()
    {
        return $this->render('default/prevention.html.twig');
    }


    /* I */    
    /**
     * @Route("/insanity.html", name="insanity")
     */
    public function insanityAction()
    {
        return $this->render('default/insanity.html.twig');
    }
    /**
     * @Route("/if-a-job.html", name="if-a-job")
     */
    public function ifajobAction()
    {
        return $this->render('default/if-a-job.html.twig');
    }
    /* J */

    /* K */
/**
 * @Route("/keep.html", name="keep")
 */
public function keepAction()
{
    return $this->render('default/keep.html.twig');
}

    /* L */
/**
 * @Route("/Love.html", name="Love")
 */
public function  LoveAction()
{
    return $this->render('default/Love.html.twig');
}


    /* M */
    /**
     * @Route("/myhouse.html", name="myhouse")
     */
    public function myhouseAction()
    {
        return $this->render('default/myhouse.html.twig');
    }
    /* N */
    /**
     * @Route("/never.html", name="never")
     */
    public function neverAction()
    {
        return $this->render('default/never.html.twig');
    }
    /**
     * @Route("/no.html", name="no")
     */
    public function NoNewsAction()
    {
        return $this->render('default/no.html.twig');
    }
    /* O */

    /* P */

    /* Q */
/**
 * @Route("/Quickly.html", name="Quickly")
 */
public function QuicklyAction()
{
    return $this->render('default/Quickly.html.twig');
}
/**
 * @Route("/Question.html", name="Question")
 */
public function QuestionAction()
{
    return $this->render('default/Question.html.twig');
}
    /* R */
    /**
    * @Route("/rat.html", name="rat")
    */
    public function stronkaAction()
    {
        return $this->render('default/rat.html.twig');
    }
    /* S */

    /* T */

    /* U */

    /* V */

    /* W */

    /* X */

    /* Y */

    /* Z */

}
