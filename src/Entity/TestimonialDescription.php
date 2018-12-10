<?php
/**
 * Created by PhpStorm.
 * User: muszkin
 * Date: 11.09.17
 * Time: 15:08
 */

namespace App\Entity;


class TestimonialDescription
{
    /** @var  int */
    private $id;

    /** @var  string */
    private $project;

    /** @var  string */
    private $description;

    /** @var Language */
    private $lang;

    /** @var Testimonial */
    private $testimonial;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $project
     * @return TestimonialDescription
     */
    public function setProject($project)
    {
        $this->project = $project;
        return $this;
    }

    /**
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * @param string $description
     * @return TestimonialDescription
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     * @return Testimonial
     */
    public function getTestimonial()
    {
        return $this->testimonial;
    }

    /**
     * @param Testimonial $testimonial
     */
    public function setTestimonial($testimonial)
    {
        $this->testimonial = $testimonial;
    }


}