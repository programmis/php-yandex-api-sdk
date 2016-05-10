<?php

namespace YaDirectSdk\VCards\Includes;


use YaDirectSdk\Includes\JsonData;

class VCard
{

    use JsonData;

    /**
     * @var integer $campaignId
     */
    private $campaignId;

    /**
     * @var string $country
     */
    private $country;

    /**
     * @var string $city
     */
    private $city;

    /**
     * @var string $companyName
     */
    private $companyName;

    /**
     * @var string $workTime
     */
    private $workTime;

    /**
     * @var Phone $phone
     */
    private $phone;

    /**
     * @var string $street
     */
    private $street;

    /**
     * @var string $house
     */
    private $house;

    /**
     * @var string $building
     */
    private $building;

    /**
     * @var string $apartment
     */
    private $apartment;

    /**
     * @var InstantMessenger $instantMessenger
     */
    private $instantMessenger;

    /**
     * @var string $extraMessage
     */
    private $extraMessage;

    /**
     * @var string $contactEmail
     */
    private $contactEmail;

    /**
     * @var string $ogrn
     */
    private $ogrn;

    /**
     * @var integer $metroStationId
     */
    private $metroStationId;

    /**
     * @var MapPoint $pointOnMap
     */
    private $pointOnMap;

    /**
     * @var string $contactPerson
     */
    private $contactPerson;

    /**
     * @return int
     */
    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * @param int $campaignId
     * @return $this
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     * @return $this
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getWorkTime()
    {
        return $this->workTime;
    }

    /**
     * @param string $workTime
     * @return $this
     */
    public function setWorkTime($workTime)
    {
        $this->workTime = $workTime;
        return $this;
    }

    /**
     * @return Phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param Phone $phone
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $street
     * @return $this
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string
     */
    public function getHouse()
    {
        return $this->house;
    }

    /**
     * @param string $house
     * @return $this
     */
    public function setHouse($house)
    {
        $this->house = $house;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuilding()
    {
        return $this->building;
    }

    /**
     * @param string $building
     * @return $this
     */
    public function setBuilding($building)
    {
        $this->building = $building;
        return $this;
    }

    /**
     * @return string
     */
    public function getApartment()
    {
        return $this->apartment;
    }

    /**
     * @param string $apartment
     * @return $this
     */
    public function setApartment($apartment)
    {
        $this->apartment = $apartment;
        return $this;
    }

    /**
     * @return InstantMessenger
     */
    public function getInstantMessenger()
    {
        return $this->instantMessenger;
    }

    /**
     * @param InstantMessenger $instantMessenger
     * @return $this
     */
    public function setInstantMessenger($instantMessenger)
    {
        $this->instantMessenger = $instantMessenger;
        return $this;
    }

    /**
     * @return string
     */
    public function getExtraMessage()
    {
        return $this->extraMessage;
    }

    /**
     * @param string $extraMessage
     * @return $this
     */
    public function setExtraMessage($extraMessage)
    {
        $this->extraMessage = $extraMessage;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * @param string $contactEmail
     * @return $this
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getOgrn()
    {
        return $this->ogrn;
    }

    /**
     * @param string $ogrn
     * @return $this
     */
    public function setOgrn($ogrn)
    {
        $this->ogrn = $ogrn;
        return $this;
    }

    /**
     * @return int
     */
    public function getMetroStationId()
    {
        return $this->metroStationId;
    }

    /**
     * @param int $metroStationId
     * @return $this
     */
    public function setMetroStationId($metroStationId)
    {
        $this->metroStationId = $metroStationId;
        return $this;
    }

    /**
     * @return MapPoint
     */
    public function getPointOnMap()
    {
        return $this->pointOnMap;
    }

    /**
     * @param MapPoint $pointOnMap
     * @return $this
     */
    public function setPointOnMap($pointOnMap)
    {
        $this->pointOnMap = $pointOnMap;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactPerson()
    {
        return $this->contactPerson;
    }

    /**
     * @param string $contactPerson
     * @return $this
     */
    public function setContactPerson($contactPerson)
    {
        $this->contactPerson = $contactPerson;
        return $this;
    }

}