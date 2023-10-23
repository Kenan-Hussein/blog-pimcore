<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject\AbstractObject;
use Pimcore\Model\DataObject\BlogPost;
use Pimcore\Model\DataObject\Data\UrlSlug;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends FrontendController
{
    public function slugAction(Request $request, BlogPost $object, UrlSlug $Slug): array
    {
        return [
            'blogPost' => $object
        ];
    }
}
