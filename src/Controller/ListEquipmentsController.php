<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ItEquipmentsRepository;
use App\Form\ItEquipmentForm;
use Symfony\Component\HttpFoundation\Request;

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
    public function index(Request $request): Response
    {
       
        $form = $this->createForm(ItEquipmentForm::class, null, [
            
        ]);
       
        $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Handle form submission
    }

    return $this->render('it_equipment/create.html.twig', [
        'form' => $form->createView(),
    ]);
    

    }
}
