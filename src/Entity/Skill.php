<?php
/**
 * Created by PhpStorm.
 * User: muszkin
 * Date: 11.09.17
 * Time: 12:39
 */

namespace App\Entity;


use Doctrine\Common\Collections\ArrayCollection;

class Skill
{
    /** @var int */
    private $id;

    /** @var int */
    private $value;

    /** @var SkillDescription|ArrayCollection */
    private $skillDescriptions;

    public function __construct()
    {
        $this->skillDescriptions = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $value
     * @return Skill
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return SkillDescription|ArrayCollection
     */
    public function getSkillDescriptions()
    {
        return $this->skillDescriptions;
    }

    /**
     * @param SkillDescription $skillDescription
     * @return $this
     */
    public function addSkillDescription(SkillDescription $skillDescription)
    {
        $this->skillDescriptions->add($skillDescription);
        return $this;
    }

    /**
     * @param SkillDescription $skillDescription
     * @return $this
     */
    public function removeSkillDescription(SkillDescription $skillDescription)
    {
        $this->skillDescriptions->removeElement($skillDescription);
        return $this;
    }

}