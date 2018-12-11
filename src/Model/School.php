<?php


namespace App\Model;


class School
{

  /** @var string */
  private $name;

  /** @var \DateTime */
  private $start_date;

  /** @var \DateTime */
  private $end_date;

  /** @var string */
  private $description;

  /** @var string */
  private $title;

  /**
   * @return string
   */
  public function getName(): string
  {
    return $this->name;
  }

  /**
   * @param string $name
   */
  public function setName(string $name)
  {
    $this->name = $name;
  }

  /**
   * @return string
   */
  public function getStartDate(): string
  {
    return $this->start_date->format("Y-m-d");
  }

  /**
   * @param \DateTime|string $start_date
   */
  public function setStartDate($start_date)
  {
    if (!($start_date instanceof \DateTime)) {
      $start_date = new \DateTime($start_date);
    }
    $this->start_date = $start_date;
  }

  /**
   * @return string
   */
  public function getEndDate(): string
  {
    return $this->end_date->format("Y-m-d");
  }

  /**
   * @param \DateTime|string $end_date
   */
  public function setEndDate($end_date)
  {
    if (!($end_date instanceof \DateTime)) {
      $end_date = new \DateTime($end_date);
    }
    $this->end_date = $end_date;
  }

  /**
   * @return string
   */
  public function getDescription(): string
  {
    return $this->description;
  }

  /**
   * @param string $description
   */
  public function setDescription(string $description)
  {
    $this->description = $description;
  }

  /**
   * @return string
   */
  public function getTitle(): string
  {
    return $this->title;
  }

  /**
   * @param string $title
   */
  public function setTitle(string $title)
  {
    $this->title = $title;
  }


}