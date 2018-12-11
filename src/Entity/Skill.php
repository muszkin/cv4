<?php
/**
 * Created by PhpStorm.
 * User: muszkin
 * Date: 11.09.17
 * Time: 12:39
 */

namespace App\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Skill
 * @package App\Entity
 * @ORM\Entity()
 */
class Skill
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    private $value;

    /**
     * @var SkillDescription|ArrayCollection
     * @ORM\OneToMany(targetEntity="SkillDescription",mappedBy="skill",cascade={"persist"})
     */
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