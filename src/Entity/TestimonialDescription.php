<?php
/**
 * Created by PhpStorm.
 * User: muszkin
 * Date: 11.09.17
 * Time: 15:08
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class TestimonialDescription
 * @package App\Entity
 * @ORM\Entity()
 */
class TestimonialDescription
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
    private $project;

    /**
     * @var string
     * @ORM\Column(type="string",length=255)
     */
    private $description;

    /**
     * @var Language
     * @ORM\ManyToOne(targetEntity="Language",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     */
    private $lang;

    /**
     * @var Testimonial
     * @ORM\ManyToOne(targetEntity="Testimonial",inversedBy="testimonialDescriptions",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     */
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