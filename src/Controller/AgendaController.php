<?php

namespace App\Controller;

use App\Entity\Agenda;
use App\Entity\Contact;
use App\Form\AgendaType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class AgendaController extends AbstractController
{
    #[Route('/agenda', name: 'app_agenda')]
    public function index(EntityManagerInterface $entityManager,ValidatorInterface $validator,Request $request): Response
    {
            $agenda = new Agenda();
            $user=$this->getUser();
           $form = $this->createForm(AgendaType::class,$agenda);
           $form->handleRequest($request);
           if($form->isSubmitted()){
               $entityManager->persist($agenda);
               $entityManager->flush();
               $this-> addFlash('success'," l'agenda $agenda->getName() a été ajouté");
           }


        return $this->render('agenda/index.html.twig', [
            'form' => $form,
        ]);
    }
}
