<?php
/**
 * Created by PhpStorm.
 * User: muszkin
 * Date: 11.09.17
 * Time: 12:39
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Class SkillDescription
 * @package App\Entity
 * @ORM\Entity()
 */
class SkillDescription
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
    private $name;

    /**
     * @var Language
     * @ORM\ManyToOne(targetEntity="Language",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     */
    private $lang;

    /**
     * @var Skill
     * @ORM\ManyToOne(targetEntity="Skill",inversedBy="skillDescriptions",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     */
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