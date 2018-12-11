<?php
/**
 * Created by PhpStorm.
 * User: muszkin
 * Date: 08.09.17
 * Time: 15:40
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Class DutyDescription
 * @package App\Entity
 * @ORM\Entity
 */
class DutyDescription
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
    private $description;

    /**
     * @var Language
     * @ORM\ManyToOne(targetEntity="Language",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     */
    private $lang;

    /**
     * @var Duty
     * @ORM\ManyToOne(targetEntity="Duty",inversedBy="dutyDescriptions",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     */
    private $duty;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $description
     * @return DutyDescription
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

    public function __toString()
    {
        return " - {$this->getDescription()}\n";
    }

    /**
     * @param Language $lang
     * @return DutyDescription
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
        return $this;
    }

    /**
     * @return Language
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * @param Duty $duty
     * @return DutyDescription
     */
    public function setDuty($duty)
    {
        $this->duty = $duty;
        return $this;
    }

    /**
     * @return Duty
     */
    public function getDuty()
    {
        return $this->duty;
    }


}