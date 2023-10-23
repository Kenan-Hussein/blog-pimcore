<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject\BlogPost;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends FrontendController
{
    public function portalAction(): Response
    {
        $data = new BlogPost\Listing();

        return $this->render('home/default.html.twig', ['data' => $data]);
    }

    public function blogPostAction(): Response
    {
        $data = new BlogPost\Listing();

        //$data->setCondition('BlogPost = ?', '/BlogPosts/');

        return $this->render('content/blog-post.html.twig', ['data' => $data]);
    }
}
