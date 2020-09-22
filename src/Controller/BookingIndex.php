<?php


namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType ;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class BookingIndex extends AbstractController
{
    /**
     * @Route("/create_booking")
     */
    public function create_booking(): Response
    {
        $form = $this->createFormBuilder()
            ->add('First-name', TextType::class, [
                'required' => true
            ])
            ->add('Last-name', TextType::class, [
                'required' => true
            ])
            ->add('Phone-number', TextType::class, [
                'required' => true
            ])
            ->add('Email', TextType::class, [
                'required' => false
            ])
            ->add('Birthday', DateType::class, [
                'required' => true,
            ])
            ->add('Start-date', DateType::class, [
                'required' => true,
            ])
            ->add('nrOfPeople', IntegerType::class, [
                'required' => true,
            ])
            ->add('End-date', DateType::class, [
                'required' => true,
            ])
            ->add('How-to-pay', ChoiceType::class, [
                'choices' => [
                    'money',
                    'card',
                    'check',
                    'chickens'
                ]
            ])
            ->add('additional-information', TextareaType::class, [
            ])
            ->add('save', SubmitType::class, ['label' => 'Create booking'])
            ->getForm();

        return $this->render('bookings/create_booking.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/bookings")
     */
    public function bookings(): Response
    {
        return $this->render('bookings/bookings.html.twig');
    }
}