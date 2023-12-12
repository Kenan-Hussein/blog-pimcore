<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject\Categories;
use Symfony\Component\HttpFoundation\Request;

class CategoryController extends FrontendController
{
    public function categoryAction(Request $request)
    {
        $categories = new Categories\Listing();

        return $this->render('category/category-list.html.twig', ['categories' => $categories]);
    }
}
