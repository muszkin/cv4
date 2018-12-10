<?php
/**
 * Created by PhpStorm.
 * User: muszkin
 * Date: 08.09.17
 * Time: 15:40
 */

namespace App\Entity;


class DutyDescription
{
    /** @var int */
    private $id;

    /** @var string */
    private $description;

    /** @var Language */
    private $lang;

    /** @var Duty */
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