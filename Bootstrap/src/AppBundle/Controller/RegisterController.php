<?php
namespace AppBundle\Controller;


use AppBundle\Entity\RegisterEntity;
use AppBundle\Form\Register;
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
        $task = new RegisterEntity();

        $form = $this->createForm(new Register());
        $form->bind($this->getRequest());

        return $this->render(':Szablony:register.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}