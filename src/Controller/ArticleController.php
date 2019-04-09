<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController {

  /**
  * @Route("/")
  */
  public function homepage() {
    return new Response("Hello stepnet !");
  }

  /**
  * @Route("/news/{slug}")
  */
  public function show($slug)
  {
    $members = [
      'Jamie', 'Cersei', 'Tyrion', 'Geoffrey',
    ];

    return $this->render('article/show.html.twig', [
      'title' => ucwords(str_replace('-',' ',$slug)),
      'members' => $members,
    ]);
  }
}
