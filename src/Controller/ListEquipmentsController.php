<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ItEquipmentsRepository;

class ListEquipmentsController extends AbstractController
{
    private ItEquipmentsRepository $itEquipmentsRepository;

    public function __construct(ItEquipmentsRepository $itEquipmentsRepository)
    {
        $this->itEquipmentsRepository = $itEquipmentsRepository;
    }

    /**
     * @Route("/equipments")
     */
    public function index(): Response
    {
        $equipments = $this->itEquipmentsRepository->getItEquipments();
        dump($equipments);
        die();
        return new Response("cos");
    }
}
