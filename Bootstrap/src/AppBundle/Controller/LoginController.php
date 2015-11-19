<?php
namespace AppBundle\Controller;

use AppBundle\Entity\LoginEntity;
use AppBundle\Form\Login;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
    /**
     * @Route("/Login", name="Login")
     */

    public function newAction()
    {
        $task = new LoginEntity();

        $form = $this->createForm(new Login());

        return $this->render(':Szablony:login.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}