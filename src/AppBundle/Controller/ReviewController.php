<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Review;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Form\ReviewType;
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
     * Lists all review entities.
     *
     * @Route("/", name="review_index")
     * @Method("GET")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $reviews = $em->getRepository('AppBundle:Review')->findAll();

        return $this->render('review/index.html.twig', array(
            'reviews' => $reviews,
        ));
    }

    /**
     * List review vue
     *
     * @Route("/new", name="review_new")
     * @Method({"GET", "POST"})
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */

    public function newAction(Request $request)
    {
        $review = new Review();
        $form = $this->createForm(ReviewType::class, $review);


        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($review);
            $em->flush();

            // You can use too :
            // return $this->redirect($this->generateUrl('review_show', array('id' => $review->getId())))

            return $this->redirectToRoute('review_show', array('id' => $review->getId()));
        }

        return $this->render('review/new.html.twig', array(
            'review' => $review,
            'form' => $form->createView()));
    }




    /**
     * Show all review entities.
     *
     * @Route("/show/{id}", name="review_show")
     * @Method("GET")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction(Review $review){


        $deleteForm = $this->createDeleteForm($review);
        if ($deleteForm->isSubmitted() && $deleteForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('review_edit', array('id' => $review->getId()));
        }

        $em = $this->getDoctrine()->getManager();

        $reviews = $em->getRepository(Review::class)->find($review->getId());

        //dump($reviews);

        return $this->render('review/show.html.twig', array(
            'reviews' => $reviews,
            'delete_form' => $deleteForm->createView(),
        ));

    }


    /**
     * Displays a review to edit it.
     *
     * @Route("/{id}/edit", name="review_edit")
     * @Method({"GET", "POST"})
     * @param Request $request
     * @param Review $review
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function editAction(Request $request,Review $review){


        $editForm = $this->createForm('AppBundle\Form\ReviewType', $review);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('review_edit', array('id' => $review->getId()));
        }

        return $this->render('review/edit.html.twig', array(
            'reviews' => $review,
            'edit_form' => $editForm->createView(),

        ));

    }

    /**
     * Delete a review entitiy.
     *
     * @Route("/delete/{id}", name="review_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request,Review $review){


        $form = $this->createDeleteForm($review);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($review);
            $em->flush();
        }

        return $this->redirectToRoute('review_index');

    }

    /**
     * @param Review $review
     * @return \Symfony\Component\Form\FormInterface
     */
    private function createDeleteForm(Review $review)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('review_delete', array('id' => $review->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}
