<?php


namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin")
 */
class AdminController extends AbstractController
{


  /**
   * @Route("/",name="admin.index")
   * @Template("admin/index.html.twig")
   */
  public function indexAction()
  {

  }
}