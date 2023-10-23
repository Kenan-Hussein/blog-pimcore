<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class StaticPageController extends FrontendController
{
    public function defaultAction(Request $request): Response
    {
        return $this->render('static/static-page-default.html.twig');
    }
}
