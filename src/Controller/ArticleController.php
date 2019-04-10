<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
// use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class ArticleController extends AbstractController {

  /**
  * @Route("/", name="app_homepage")
  */
  public function homepage() {
    // return new Response("Hello stepnet !");
    return $this->render('article/homepage.html.twig');
  }

  /**
  * @Route("/news/{slug}", name="article_show")
  */
  public function show($slug) {
    $comments = [
      'Nul', 'Magnifique', 'Comment on démarre symfony ?', 'Sensiolabs are genius...',
    ];

    // dump($slug, $this);

    return $this->render('article/show.html.twig', [
      'title' => ucwords(str_replace('-', ' ', $slug)),
      'slug' => $slug,
      'comments' => $comments,
    ]);
  }

  /**
  * @Route("/news/{slug}/heart", name="article_toggle_heart", methods={"POST"})
  */
  public function toggleArticleHeart($slug, LoggerInterface $logger) {

    $logger->info('Article is being hearted');
    return new JsonResponse(['hearts' => rand(5, 100)]);

  }
}
