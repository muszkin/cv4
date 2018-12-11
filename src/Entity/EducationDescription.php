<?php
/**
 * Created by PhpStorm.
 * User: muszkin
 * Date: 08.09.17
 * Time: 12:57
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Class EducationDescription
 * @package App\Entity
 * @ORM\Entity()
 */
class EducationDescription
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string",length=255)
     */
    private $school_name;

    /**
     * @var string
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $description;

    /**
     * @var string
     * @ORM\Column(type="string",length=255)
     */
    private $end_title;

    /**
     * @var Language
     * @ORM\ManyToOne(targetEntity="Language",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     */
    private $lang;

    /**
     * @var Education
     * @ORM\ManyToOne(targetEntity="Education",inversedBy="educationDescriptions",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     */
    private $education;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $school_name
     * @return EducationDescription
     */
    public function setSchoolName($school_name)
    {
        $this->school_name = $school_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getSchoolName()
    {
        return $this->school_name;
    }

    /**
     * @param string $description
     * @return EducationDescription
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param string $end_title
     * @return EducationDescription
     */
    public function setEndTitle($end_title)
    {
        $this->end_title = $end_title;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getEndTitle()
    {
        return $this->end_title;
    }

    public function __toString()
    {
        return "{$this->getSchoolName()} ({$this->getEndTitle()})";
    }

    /**
     * @return Language
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * @param Language $lang
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
    }

    /**
     * @return Education
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * @param Education $education
     */
    public function setEducation($education)
    {
        $this->education = $education;
    }


}