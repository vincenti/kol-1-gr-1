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
    /**
     * @Route("/roomWithoutBooks.html", name="roomWithoutBooks")
     */
    public function roomWithoutBooksAction()
    {
        return $this->render('default/roomWithoutBooks.html.twig');
    }
    /* B */

    /* C */
    
    /**
     * @Route("/careless.html", name="careless")
     */
    public function carelessAction()
    {
        return $this->render('default/careless.html.twig');
    }
    
    /**
     * @Route("/curiosity.html", name="curiosity")
     */
    public function curiosityAction()
    {
        return $this->render('default/curiosity.html.twig');
    }
    
    /* D */

    /* E */
 /**
 * @Route("/egg.html", name="egg")
 */
public function  eggAction()
{
    return $this->render('default/egg.html.twig');
}
    /* F */

    /**
     * @Route("/Fairness.html", name="Fairness")
     */
    public function FairnessAction()
    {
        return $this->render('default/Fairness.html.twig');
    }
     /**
     * @Route("/Fire.html", name="Fire")
     */
    public function FireAction()
    {
        return $this->render('default/Fire.html.twig');
    }
    /* G */
    /**
     * @Route("/givehim.html", name="givehim")
     */
    public function givehimAction()
    {
        return $this->render('default/givehim.html.twig');
    }
    /* H */
     /**
     * @Route("/prevention.html", name="prevention")
     */
    public function preventionAction()
    {
        return $this->render('default/prevention.html.twig');
    }
    
      /**
     * @Route("/pride.html", name="pride")
     */
    public function prideAction()
    {
        return $this->render('default/pride.html.twig');
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
/**
 * @Route("/kindness.html", name="kindness")
 */
public function kindnessAction()
{
    return $this->render('default/kindness.html.twig');
}

    /* L */
/**
 * @Route("/Love.html", name="Love")
 */
public function  LoveAction()
{
    return $this->render('default/Love.html.twig');
}

/**
 * @Route("/Learning.html", name="Learning")
 */
public function  LearningAction()
{
    return $this->render('default/Learning.html.twig');
}


    /* M */
    /**
     * @Route("/myhouse.html", name="myhouse")
     */
    public function myhouseAction()
    {
        return $this->render('default/myhouse.html.twig');
    }
    /**
     * @Route("/thunder.html", name="thunder")
     */
    public function thunderAction()
    {
        return $this->render('default/thunder.html.twig');
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
    
    /**
    * @Route("/reap.html", name="reap")
    */
    public function reapAction()
    {
        return $this->render('default/reap.html.twig');
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
