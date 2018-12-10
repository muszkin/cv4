<?php
/**
 * Created by PhpStorm.
 * User: muszkin
 * Date: 08.09.17
 * Time: 15:40
 */

namespace App\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Duty
 * @package App\Entity
 * @ORM\Entity()
 */
class Duty
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(name="duty_id",type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Work
     * @ORM\ManyToOne(targetEntity="Work",inversedBy="duties",cascade={"persist"})
     * @ORM\JoinColumn(onDelete="CASCADE",nullable=false)
     */
    private $work;

    /** @var ArrayCollection|DutyDescription */
    private $dutyDescriptions;

    public function __construct()
    {
        $this->dutyDescriptions = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param Work $work
     * @return Duty
     */
    public function setWork($work)
    {
        $this->work = $work;
        return $this;
    }

    /**
     * @return Work
     */
    public function getWork()
    {
        return $this->work;
    }

    /**
     * @return DutyDescription|ArrayCollection
     */
    public function getDutyDescriptions()
    {
        return $this->dutyDescriptions;
    }

    /**
     * @param DutyDescription $dutyDescription
     * @return $this
     */
    public function addDutyDescription(DutyDescription $dutyDescription)
    {
        $this->dutyDescriptions->add($dutyDescription);
        return $this;
    }

    /**
     * @param DutyDescription $dutyDescription
     * @return $this
     */
    public function removeDutyDescription(DutyDescription $dutyDescription)
    {
        $this->dutyDescriptions->removeElement($dutyDescription);
        return $this;
    }

}