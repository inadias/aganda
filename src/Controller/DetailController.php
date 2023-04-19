<?php

namespace App\Controller;

use App\Entity\ContactDetail;
use App\Form\DetailType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DetailController extends AbstractController
{
    #[Route('/detail', name: 'app_detail')]
    public function index(): Response
    {
        $detail= new ContactDetail();
        $form =  $this->createForm(DetailType::class,$detail);
        return $this->render('detail/index.html.twig', [
            'form' => $form,
        ]);
    }
}
