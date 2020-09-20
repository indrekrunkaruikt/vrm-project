<?php


namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BookingIndex extends AbstractController
{
    /**
     * @Route("/create_booking")
     */
    public function create_booking(): Response
    {
        return $this->render('bookings/create_booking.html.twig');
    }

    /**
     * @Route("/bookings")
     */
    public function bookings(): Response
    {
        return $this->render('bookings/bookings.html.twig');
    }
}