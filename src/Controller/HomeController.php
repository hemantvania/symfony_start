<?php
/**
 * Created by PhpStorm.
 * User: Himatlal.Vaniya
 * Date: 10/14/2019
 * Time: 3:38 PM
 */

namespace   App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return new Response('Homepage is found');
    }

    /**
     * @Route("/users")
     */
    public function users()
    {
        $users = ['Hemant', 'Rakesh', 'Kiran', 'Mohan'];
        return $this->render('users/users.html.twig', [
            'users' => $users,
        ]);
    }

    /**
     * @Route("/user/{id}")
     * @param $id
     * @return Response
     */
    public function user($id)
    {
        return new Response("THis is user id: ".$id);
    }
}