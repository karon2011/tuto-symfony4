<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ArticleController {

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
    return new Response(sprintf('New article to show : %s', $slug));
  }
}
