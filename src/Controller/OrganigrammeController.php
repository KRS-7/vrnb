<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrganigrammeController extends AbstractController
{
    /**
     * @Route("/organisation/edit", name="app_organigramme")
     *
     * Cette méthode sert à afficher l'organigramme de l'association sur la page "Gestion de l'organigramme"
     */
    public function affichage(UserRepository $userRepository): Response
    {
        //On refuse l'accès à cette méthode si l'utilisateur n'a pas le rôle Admin.
        $this->denyAccessUnlessGranted("ROLE_ADMIN");

        return $this->render('organigramme/index.html.twig', [
            'controller_name' => 'OrganigrammeController',
            'users' => $userRepository->orderUserByReferent(),
        ]);
    }

}
