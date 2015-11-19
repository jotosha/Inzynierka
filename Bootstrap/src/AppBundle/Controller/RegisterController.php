<?php
namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RegisterController extends Controller
{
    /**
     * @Route("/Register", name="Register")
     */

    public function newAction()
    {
        //$task = new Task3();

        //$form = $this->createForm(new Login());

        return $this->render(':Szablony:register.html.twig', array(
            //'form' => $form->createView(),
        ));
    }

}