<?php

namespace App\Controller;

use App\Entity\Property;
use App\Repository\PropertyRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PropertyController extends AbstractController
{

    /**
     * @var PropertyRepository
     */

    private $repository;

    /**
     * @var EntityManagerInterface
     */

    private $em;

    public function __construct(PropertyRepository $repository, EntityManagerInterface $em)
    {

        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("/biens", name="property.index")
     * @return Response
     */

    public function index(): Response
    {
        $property = $this->repository->findAllVisible();
       /*  $property[0]->setSold(true);
        $this->em->flush(); */

        return $this->render('property/index.html.twig', ['current_menu' => 'properties']);
    }
}
