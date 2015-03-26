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

    /* D */

    /* E */

    /* F */

    /* G */

    /* H */

    /* I */

    /* J */

    /* K */

    /* L */
/**
 * @Route("/Love.html", name="Love")
 */
public function  LoveAction()
{
    return $this->render('default/Love.html.twig');
}


    /* M */

    /* N */
    /**
     * @Route("/never.html", name="never")
     */
    public function neverAction()
    {
        return $this->render('default/never.html.twig');
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
    /* R */

    /* S */

    /* T */

    /* U */

    /* V */

    /* W */

    /* X */

    /* Y */

    /* Z */

}
