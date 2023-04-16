<?php 

namespace App\Form;

use App\Repository\ItEquipmentsRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ItEquipmentForm extends AbstractType
{
    private ItEquipmentsRepository $itEquipmentrepository;

    public function __construct(ItEquipmentsRepository $itEquipmentrepository)
    {
        $this->itEquipmentrepository = $itEquipmentrepository;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $secretaries = $this->itEquipmentrepository->getSecretaries();
        if (!is_array($secretaries)) {
            $secretaries = [];
        }
         $options = [];
            foreach($secretaries as $secretariat){
                $options[$secretariat["name"]] = $secretariat["id"];
            }

        $builder
        ->add('type', TextType::class, [
            'label' => 'Type',
            'required' => true,
        ])
        ->add('index', TextType::class, [
            'label' => 'index',
            'required' => true,
        ])
        ->add('name', TextType::class, [
            'label' => 'name',
            'required' => true,
        ])
        ->add('secretary', ChoiceType::class, [
            'choices' => $options,
            'required' => true,
            'label' => 'select secretary'
        ])
        ->add('status',TextType::class, [
            'label' => 'status',
            'required' => true
        ]);
    }
}
