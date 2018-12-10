<?php
/**
 * Created by PhpStorm.
 * User: muszkin
 * Date: 11.09.17
 * Time: 12:39
 */

namespace App\Entity;


class SkillDescription
{
    /** @var int */
    private $id;

    /** @var string */
    private $name;

    /** @var Language */
    private $lang;

    /** @var Skill */
    private $skill;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $name
     * @return SkillDescription
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
     * @param Skill $skill
     * @return SkillDescription
     */
    public function setSkill($skill)
    {
        $this->skill = $skill;
        return $this;
    }

    /**
     * @return Skill
     */
    public function getSkill()
    {
        return $this->skill;
    }


}