<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
  #[Route('/')]
  public function text() : Response
  {
  $text = rand(0,0);
  return $this->render('base.html.twig', [
          'text' => $text,
  ]);
  }
}