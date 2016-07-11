<?php
/**
 * Created by PhpStorm.
 * User: jacappsios
 * Date: 7/11/16
 * Time: 1:21 AM
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function homepageAction()
    {
        return $this->render('main/homepage.html.twig');
    }

}