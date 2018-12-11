<?php


namespace App\Factory;


use App\Entity\Education;
use App\Entity\EducationDescription;
use App\Entity\Language;
use Doctrine\ORM\EntityManagerInterface;
use App\Model\School;

class SchoolFactory
{
  /** @var EntityManagerInterface */
  private $entityManager;

  public function __construct(EntityManagerInterface $entityManager)
  {
    $this->entityManager = $entityManager;
  }

  public function getAllSchoolsForLanguage(Language $language)
  {
    $educations = $this->entityManager->getRepository("App:Education")->findAll();

    $schools = [];

    foreach ($educations as $education) {
      /** @var Education $education*/
      $school = new School();
      $school->setStartDate($education->getStartDate());
      $school->setEndDate($education->getEndDate());
      foreach ($education->getEducationDescriptions() as $educationDescription) {
        /** @var EducationDescription $educationDescription */
        if ($educationDescription->getLang() === $language) {
          $school->setName($educationDescription->getSchoolName());
          $school->setDescription($educationDescription->getDescription());
          $school->setTitle($educationDescription->getEndTitle());
        }else{
          continue;
        }
      }
      $schools[] = $school;
    }

    return $schools;
  }
}