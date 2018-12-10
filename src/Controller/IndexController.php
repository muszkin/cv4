<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{

  /**
   * @Route("/",name="index")
   */
  public function indexAction()
  {
    $em = $this->getDoctrine()->getManager();


    $schools = $em->getRepository('AppBundle:Education')->findAll();
    $works = $em->getRepository('AppBundle:Work')->findAll();
    $skills = $em->getRepository("AppBundle:Skill")->findAll();
    $testimonials = $em->getRepository("AppBundle:Testimonial")->findAll();

    return $this->render('@App/index.html.twig',[
      "schools" => $schools,
      "works" => $works,
      "skills" => $skills,
      "testimonials" => $testimonials,
    ]);
  }

}