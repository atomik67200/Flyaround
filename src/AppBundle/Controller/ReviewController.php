<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;

/**
 * Review controller.
 *
 * @Route("review")
 */

class ReviewController extends Controller
{
    /**
     * List review vue
     *
     * @Route("/", name="review_index")
     * @Method("GET")
     */

    public function ReviewAction()
    {
        return $this->render('review/index.html.twig');
    }

    /**
     * List review vue
     *
     * @Route("/new", name="review_new")
     * @Method({"GET", "POST"})
     */

    public function ReviewNewAction(Request $request)
    {
        return $this->render('review/new.html.twig');
    }
}
