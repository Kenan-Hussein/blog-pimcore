<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Pimcore\Model\Asset;
use Pimcore\Model\DataObject\AbstractObject;
use Pimcore\Model\DataObject\BlogPost;
use Pimcore\Model\DataObject\Data\UrlSlug;
use Symfony\Bridge\Twig\Attribute\Template;
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

    #[Template('content/blog-post-teaser.html.twig')]
    public function renderLetBlogAction(Request $request): array
    {
        if ('asset' === $request->get('type')) {
            $asset = Asset::getById((int) $request->get('id'));
            if ('folder' === $asset->getType()) {
                return [
                    'assets' => $asset->getChildren()
                ];
            }
        }

        return [];
    }
}
