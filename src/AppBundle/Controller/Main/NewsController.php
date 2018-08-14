<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 25.04.2018
 * Time: 17:29
 */

namespace AppBundle\Controller\Main;


use AppBundle\Entity\News;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewsController extends Controller
{
    /**
     * @Route("/news/{slug}", name="news_view")
     * @ParamConverter("news", options={"mapping" : {"slug" : "news_slug"}})
     */
    public function viewAction(News $news) {
        return $this->render("frontend/news/view.html.twig", [
            "news" => $news
        ]);
    }
}