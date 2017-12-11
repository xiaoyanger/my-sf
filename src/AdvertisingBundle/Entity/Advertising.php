<?php

namespace AdvertisingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Advertising
 *
 * @ORM\Table(name="advertising")
 * @ORM\Entity(repositoryClass="AdvertisingBundle\Repository\AdvertisingRepository")
 */
class Advertising
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", length=5 ,name="position_id")
     */
    private $positionId;

    /**
     * @ORM\Column(type="integer", length=3 ,name="media_type")
     */
    private $mediaType;

    /**
     * @ORM\Column(type="string", length=60 ,name="ad_name")
     */
    private $adName;

    /**
     * @ORM\Column(type="string", length=255 ,name="ad_link")
     */
    private $adLink;

    /**
     * @ORM\Column(type="text" ,name="ad_code")
     */
    private $adCode;

    /**
     * @ORM\Column(type="string", length=60 ,name="link_man")
     */
    private $linkMan;

    /**
     * @ORM\Column(type="integer", length=8 ,name="click_count")
     */
    private $clickCount;


    /**
     * @ORM\Column(type="integer", length=11 ,name="start_time")
     */
    private $startTime;

    /**
     * @ORM\Column(type="integer", length=11 ,name="end_time")
     */
    private $endTime;

    /**
     * @ORM\Column(type="integer", length=3 ,name="enabled")
     */
    private $enabled;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * set positionId
     *
     * @param integer $positionId
     *
     * @return Advertising
     */
    public function setPositionId($positionId)
    {
        $this->position_id = $positionId;
        return $this;
    }

    /**
     * Get positionId
     *
     * @return integer
     */
    public function getPositionId()
    {
        return $this->positionId;
    }

    /**
     * set mediaType
     *
     * @param integer $mediaType
     *
     * @return Advertising
     */
    public function setMediaType($mediaType)
    {
        $this->mediaType = $mediaType;
        return $this;
    }

    /**
     * Get mediaType
     *
     * @return integer
     */
    public function getMediaType()
    {
        return $this->mediaType;
    }

    /**
     * set adName
     *
     * @param string $adName
     *
     * @return Advertising
     */
    public function setAdName($adName)
    {
        $this->adName = $adName;
        return $this;
    }

    /**
     * Get adName
     *
     * @return string
     */
    public function getAdName()
    {
        return $this->adName;
    }

    /**
     * set adLink
     *
     * @param string $adLink
     *
     * @return Advertising
     */
    public function setAdLink($adLink)
    {
        $this->adLink = $adLink;
        return $this;
    }

    /**
     * Get adLink
     *
     * @return string
     */
    public function getAdLink()
    {
        return $this->adLink;
    }

    /**
     * set adCode
     *
     * @param string $adCode
     *
     * @return Advertising
     */
    public function setAdCode($adCode)
    {
        $this->adCode = $adCode;
        return $this;
    }

    /**
     * Get adCode
     *
     * @return string
     */
    public function getCode()
    {
        return $this->adCode;
    }

    /**
     * set startTime
     *
     * @param int $startTime
     *
     * @return Advertising
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * Get startTime
     *
     * @return int
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * set endTime
     *
     * @param int $endTime
     *
     * @return Advertising
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * Get endTime
     *
     * @return int
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * set linkMan
     *
     * @param string $linkMan
     *
     * @return Advertising
     */
    public function setLinkMan($linkMan)
    {
        $this->linkMan = $linkMan;
        return $this;
    }

    /**
     * Get linkMan
     *
     * @return string
     */
    public function getLinkMan()
    {
        return $this->linkMan;
    }

    /**
     * set clickCount
     *
     * @param int $clickCount
     *
     * @return Advertising
     */
    public function setClickCount($clickCount)
    {
        $this->clickCount = $clickCount;
        return $this;
    }

    /**
     * Get clickCount
     *
     * @return int
     */
    public function getClickCount()
    {
        return $this->clickCount;
    }

    /**
     * set enabled
     *
     * @param int $enabled
     *
     * @return Advertising
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Get enabled
     *
     * @return int
     */
    public function getEnabled()
    {
        return $this->enabled;
    }
}
