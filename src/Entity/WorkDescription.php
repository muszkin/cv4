<?php
/**
 * Created by PhpStorm.
 * User: muszkin
 * Date: 08.09.17
 * Time: 15:37
 */

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * Class WorkDescription
 * @package App\Entity
 * @ORM\Entity()
 */
class WorkDescription
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
     * @ORM\Column(name="position",type="string",length=255)
     */
    private $position;

    /**
     * @var Language
     * @ORM\ManyToOne(targetEntity="Language",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     */
    private $language;

    /**
     * @var Work
     * @ORM\ManyToOne(targetEntity="Work",inversedBy="workDescriptions",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     */
    private $work;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $position
     * @return WorkDescription
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    public function __toString()
    {
        return "{$this->getPosition()}";
    }

    /**
     * @param Work $work
     * @return WorkDescription
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
   * @param Language $language
   * @return WorkDescription
   */
  public function setLanguage(Language $language): WorkDescription
  {
    $this->language = $language;
    return $this;
  }

  /**
   * @return Language
   */
  public function getLanguage(): Language
  {
    return $this->language;
  }

}