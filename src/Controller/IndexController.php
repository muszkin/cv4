<?php

namespace App\Controller;


use App\Entity\Language;
use App\Factory\SchoolFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{

  /**
   * @Route("/",name="index")
   * @param SchoolFactory $schoolFactory
   * @param Request $request
   * @return \Symfony\Component\HttpFoundation\Response
   */
  public function indexAction(SchoolFactory $schoolFactory,Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $lang = $request->getLanguages();
    $schools = [];

    /** @var Language $language */
    $language = $em->getRepository("App:Language")->findOneBy([
      "iso" => strtoupper($lang[0]),
    ]);

    if ($language) {
      $schools = $schoolFactory->getAllSchoolsForLanguage($language);
    }else{
      $language = $em->getRepository("App:Language")->findOneBy([
        "iso" => "EN"
      ]);
      $schools = $schoolFactory->getAllSchoolsForLanguage($language);
    }
    $works = $em->getRepository('App:Work')->findAll();
    $skills = $em->getRepository("App:Skill")->findAll();
    $testimonials = $em->getRepository("App:Testimonial")->findAll();

    return $this->render('index.html.twig',[
      "schools" => $schools,
      "works" => $works,
      "skills" => $skills,
      "testimonials" => $testimonials,
    ]);
  }

}