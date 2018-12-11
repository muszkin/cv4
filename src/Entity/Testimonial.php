<?php
/**
 * Created by PhpStorm.
 * User: muszkin
 * Date: 11.09.17
 * Time: 15:08
 */

namespace App\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Testimonial
 * @package App\Entity
 * @ORM\Entity()
 */
class Testimonial
{
    /**
     * @var  int
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var  string
     * @ORM\Column(type="string",length=255)
     */
    private $name;

    /**
     * @var  string
     * @ORM\Column(type="string",length=255)
     */
    private $project_url;

    /**
     * @var TestimonialDescription|ArrayCollection
     * @ORM\OneToMany(targetEntity="TestimonialDescription",mappedBy="testimonial",cascade={"persist"})
     */
    private $testimonialDescriptions;


    public function __construct()
    {
        $this->testimonialDescriptions = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $name
     * @return Testimonial
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $project
     * @return Testimonial
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
     * @param string $testimonial
     * @return Testimonial
     */
    public function setTestimonial($testimonial)
    {
        $this->testimonial = $testimonial;
        return $this;
    }

    /**
     * @return string
     */
    public function getTestimonial()
    {
        return $this->testimonial;
    }

    /**
     * @param string $project_url
     * @return Testimonial
     */
    public function setProjectUrl($project_url)
    {
        $this->project_url = $project_url;
        return $this;
    }

    /**
     * @return string
     */
    public function getProjectUrl()
    {
        return $this->project_url;
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
     * @return TestimonialDescription|ArrayCollection
     */
    public function getTestimonialDescriptions()
    {
        return $this->testimonialDescriptions;
    }

    /**
     * @param TestimonialDescription $testimonialDescription
     * @return $this
     */
    public function addTestimonialDescription(TestimonialDescription $testimonialDescription)
    {
        $this->testimonialDescriptions->add($testimonialDescription);
        return $this;
    }

    /**
     * @param TestimonialDescription $testimonialDescription
     * @return $this
     */
    public function removeTestimonialDescription(TestimonialDescription $testimonialDescription)
    {
        $this->testimonialDescriptions->removeElement($testimonialDescription);
        return $this;
    }


}