<?php
/**
 * Created by PhpStorm.
 * User: mucha
 * Date: 04.12.2018
 * Time: 19:39
 */

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Language
 * @package App\Entity
 * @ORM\Entity()
 */
class Language
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
     * @ORM\Column(name="name",type="string",length=255)
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(name="iso",type="string",length=2)
     */
    private $iso;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getIso()
    {
        return $this->iso;
    }

    /**
     * @param string $iso
     */
    public function setIso($iso)
    {
        $this->iso = $iso;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return $this->iso;
    }

}