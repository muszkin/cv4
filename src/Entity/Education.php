<?php
/**
 * Created by PhpStorm.
 * User: muszkin
 * Date: 08.09.17
 * Time: 12:57
 */

namespace App\Entity;


use Doctrine\Common\Collections\ArrayCollection;

class Education
{
    /** @var int */
    private $id;

    /** @var \DateTime */
    private $start_date;

    /** @var \DateTime */
    private $end_date;

    /** @var EducationDescription|ArrayCollection */
    private $educationDescriptions;


    public function __construct()
    {
        $this->educationDescriptions = new ArrayCollection();
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param \DateTime $start_date
     * @return Education
     */
    public function setStartDate($start_date)
    {
        $this->start_date = $start_date;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * @param \DateTime $end_date
     * @return Education
     */
    public function setEndDate($end_date)
    {
        $this->end_date = $end_date;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * @return EducationDescription|ArrayCollection
     */
    public function getEducationDescriptions()
    {
        return $this->educationDescriptions;
    }

    /**
     * @param EducationDescription $educationDescription
     * @return $this
     */
    public function addEducationDescriptions(EducationDescription $educationDescription)
    {
        $this->educationDescriptions->add($educationDescription);
        return $this;
    }

    /**
     * @param EducationDescription $educationDescription
     * @return $this
     */
    public function removeEducationDescription(EducationDescription $educationDescription)
    {
        $this->educationDescriptions->removeElement($educationDescription);
        return $this;
    }



}