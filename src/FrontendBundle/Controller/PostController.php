<?php

namespace FrontendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use FrontendBundle\Entity\Post;
use FrontendBundle\Form\PostType;

/**
 * Post controller.
 *
 */
class PostController extends Controller
{
    /**
     * Lists all Post entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $route = $this->getRefererRoute();
        $filmId = preg_replace("/\D/",'', $route);

        $posts = $em->getRepository('FrontendBundle:Post')->findByFilmId($filmId);

        $tab = [];

        foreach ($posts as $post)
        {
            $userid = $em->getRepository('AppBundle:User')->findOneById($post->getAuthor());

            $tab[] = array(
                'username' => $userid->getUsername(),
                'content' => $post->getContent(),
                'date' => $post->getDate(),           
            );
        }

        return $this->render('post/index.html.twig', array(
            'posts' => $posts,
            'tab'=> $tab,
        ));
    }

    /**
     * Creates a new Post entity.
     *
     */
    public function newAction(Request $request)
    {
        $post = new Post();
        $form = $this->createForm('FrontendBundle\Form\PostType', $post);
        $form->handleRequest($request);

        $route = $this->getRefererRoute();
        $filmId = preg_replace("/\D/",'', $route);


        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->container->get('security.context')->getToken()->getUser();
            $userid = $user->getId();
            $post->setAuthor($userid);
            $post->setDate(new \Datetime());
            $post->setFilmId($filmId);
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            $url = '..'.$route;
            return $this->redirect($url);
        }

        return $this->render('post/new.html.twig', array(
            'post' => $post,
            'form' => $form->createView(),
        ));
    }

    public function getRefererRoute()
    {
        $request = $this->getRequest();

        //récupère la route actuelle
        $referer = $request->headers->get('referer');
        $lastPath = substr($referer, strpos($referer, $request->getBaseUrl()));
        $lastPath = str_replace($request->getBaseUrl(), '', $lastPath);

        // récupère les informations du nom de la route (pas utile pour le besoin que l'on a)
        // $matcher = $this->get('router')->getMatcher();
        // $parameters = $matcher->match($lastPath);
        // $route = $parameters['_route'];

        return $lastPath;
    }

    /**
     * Finds and displays a Post entity.
     *
     */
    public function showAction(Post $post)
    {
        $deleteForm = $this->createDeleteForm($post);

        return $this->render('post/show.html.twig', array(
            'post' => $post,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Post entity.
     *
     */
    public function editAction(Request $request, Post $post)
    {
        $deleteForm = $this->createDeleteForm($post);
        $editForm = $this->createForm('FrontendBundle\Form\PostType', $post);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            return $this->redirectToRoute('post_edit', array('id' => $post->getId()));
        }

        return $this->render('post/edit.html.twig', array(
            'post' => $post,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Post entity.
     *
     */
    public function deleteAction(Request $request, Post $post)
    {
        $form = $this->createDeleteForm($post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($post);
            $em->flush();
        }

        return $this->redirectToRoute('post_index');
    }

    /**
     * Creates a form to delete a Post entity.
     *
     * @param Post $post The Post entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Post $post)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('post_delete', array('id' => $post->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
