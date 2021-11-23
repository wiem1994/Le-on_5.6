<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Conge;
use App\Entity\Upload;
use App\Form\UploadType;
use App\Entity\Actualite;
use App\Form\ActualiteType;
use App\Form\CongeTypePhpType;
use App\Form\RegistrationType;
use App\Repository\UserRepository;
use App\Repository\CongeRepository;
use App\Repository\ActualiteRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use ContainerF6n0khT\PaginatorInterface_82dac15;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class testController extends AbstractController
{
    /**
     * @Route("/test")
     */
    public function testAjax()
    {
    }
}
