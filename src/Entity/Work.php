<?php
/**
 * Created by PhpStorm.
 * User: muszkin
 * Date: 08.09.17
 * Time: 15:37
 */

namespace App\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;


/**
 * Class Work
 * @package App\Entity
 * @ORM\Entity()
 */
class Work
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(name="id",type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="comapny",type="string",length=255)
     */
    private $company;

    /**
     * @var \DateTime
     * @ORM\Column(name="start_date",type="date")
     */
    private $start_date;

    /**
     * @var \DateTime
     * @ORM\Column(name="end_date",type="date")
     */
    private $end_date;

    /**
     * @var Duty[]|ArrayCollection
     * @ORM\OneToMany(targetEntity="Duty",mappedBy="work")
     */
    private $duties;

    /**
     * @var WorkDescription[]|ArrayCollection
     * @ORM\OneToMany(targetEntity="WorkDescription",mappedBy="work")
     */
    private $workDescriptions;

    public function __construct()
    {
        $this->duties = new ArrayCollection();
        $this->workDescriptions = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $company
     * @return Work
     */
    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param \DateTime $start_date
     * @return Work
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
     * @return Work
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
     * @return Duty[]|ArrayCollection
     */
    public function getDuties()
    {
        return $this->duties;
    }

    /**
     * @param Duty $duty
     * @return $this
     */
    public function addDuty(Duty $duty)
    {
        $this->duties->add($duty);
        return $this;
    }

    /**
     * @param Duty $duty
     * @return $this
     */
    public function removeDuty(Duty $duty)
    {
        $this->duties->remove($duty);
        return $this;
    }


    public function __toString()
    {
        return "{$this->getEndDate()->format('Y-m-d')} - {$this->getStartDate()->format('Y-m-d')} {$this->getCompany()}\n{$this->getDuties()}";
    }

    /**
     * @return WorkDescription[]|ArrayCollection
     */
    public function getWorkDescriptions()
    {
        return $this->workDescriptions;
    }

    /**
     * @param WorkDescription $workDescription
     * @return $this
     */
    public function addWorkDescription(WorkDescription $workDescription)
    {
        $this->workDescriptions->add($workDescription);
        return $this;
    }

    /**
     * @param WorkDescription $workDescription
     * @return $this
     */
    public function removeWorkDescription(WorkDescription $workDescription)
    {
        $this->workDescriptions->removeElement($workDescription);
        return $this;
    }


}