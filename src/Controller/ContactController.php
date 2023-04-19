<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(EntityManagerInterface $entityManager,Request $request): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class,$contact);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $form->getData();
            $entityManager->persist($contact);
            $entityManager->flush();
            $this->addFlash('success','Ajouté avec succés');
        }else{
            $this->addFlash("fail","echec de l'ajout");
        }

        return $this->render('contact/index.html.twig', [
            'form' => $form,
        ]);
    }
}
