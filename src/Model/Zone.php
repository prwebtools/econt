<?php

namespace Todstoychev\Econt\Model;

class Zone extends AbstractModel
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $nameEnglish;

    /**
     * @var bool
     */
    private $national;

    /**
     * @var bool
     */
    private $isEe;

    /**
     * @var \DateTime|null
     */
    private $updatedOn;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return Zone
     */
    public function setId($id)
    {
        $this->id = $id;

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
     * @param string $name
     *
     * @return Zone
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getNameEnglish()
    {
        return $this->nameEnglish;
    }

    /**
     * @param string $nameEnglish
     *
     * @return Zone
     */
    public function setNameEnglish($nameEnglish)
    {
        $this->nameEnglish = $nameEnglish;

        return $this;
    }

    /**
     * @return bool
     */
    public function isNational()
    {
        return $this->national;
    }

    /**
     * @param bool $national
     *
     * @return Zone
     */
    public function setNational($national)
    {
        $this->national = $national;

        return $this;
    }

    /**
     * @return bool
     */
    public function isEe()
    {
        return $this->isEe;
    }

    /**
     * @param bool $isEe
     *
     * @return Zone
     */
    public function setIsEe($isEe)
    {
        $this->isEe = $isEe;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getUpdatedOn()
    {
        return $this->updatedOn;
    }

    /**
     * @param \DateTime|null $updatedOn
     *
     * @return Zone
     */
    public function setUpdatedOn($updatedOn)
    {
        $this->updatedOn = $updatedOn;

        return $this;
    }
}
