<?php
/**
 * Created by PhpStorm.
 * User: timbauer
 * Date: 7/16/14
 * Time: 2:13 PM
 */

namespace teacherApp\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class testPageController extends Controller
{
    /**
     * @Route("/testPage", name="home_testPage")
     * @Template()
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render('@Home/Default/testPage.html.twig');
    }
} 