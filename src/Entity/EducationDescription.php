<?php
/**
 * Created by PhpStorm.
 * User: muszkin
 * Date: 08.09.17
 * Time: 12:57
 */

namespace App\Entity;


class EducationDescription
{
    /** @var int */
    private $id;

    /** @var string */
    private $school_name;

    /** @var string */
    private $description;

    /** @var string */
    private $end_title;

    /** @var Language */
    private $lang;

    /** @var Education */
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