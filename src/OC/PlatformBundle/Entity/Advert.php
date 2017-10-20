<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Advert
 *
 * @ORM\Table(name="advert")
 * @ORM\Entity(repositoryClass="OC\PlatformBundle\Repository\AdvertRepository")
 */
class Advert
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
   * @ORM\ManyToOne(targetEntity="OC\UserBundle\Entity\User")
   * @ORM\JoinColumn(nullable=true)
   */
  private $user;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */

    private $date;
    /**
    * @var \String
    *
    * @ORM\Column(name="callerId", type="string" , unique=true)
    */

   private $callerId;

     /**
     * @var \String
     *
     * @ORM\Column(name="firstName", type="string")
     */

    private $firstName;
    /**
     * @var \String
     *
     * @ORM\Column(name="lastName", type="string")
     */

    private $lastName;
   /**
     * @var \String
     *
     * @ORM\Column(name="company", type="string", nullable=true)
     */

    private $company;
   /**
     * @var \String
     *
     * @ORM\Column(name="address1", type="string", nullable=true)
     */

    private $address1;
  /**
     * @var \String
     *
     * @ORM\Column(name="address2", type="string", nullable=true)
     */

    private $address2;
  /**
     * @var \String
     *
     * @ORM\Column(name="address3", type="string", nullable=true)
     */

    private $address3;
   /**
     * @var \String
     *
     * @ORM\Column(name="city", type="string", nullable=true)
     */

    private $city;
   /**
     * @var \String
     *
     * @ORM\Column(name="state", type="string", nullable=true)
     */

    private $state;
/**
     * @var \String
     *
     * @ORM\Column(name="province", type="string", nullable=true)
     */

    private $province;
/**
     * @var \String
     *
     * @ORM\Column(name="phone", type="string", nullable=true)
     */

    private $phone;
/**
     * @var \String
     *
     * @ORM\Column(name="phone2", type="string", nullable=true)
     */

    private $phone2;
/**
     * @var \String
     *
     * @ORM\Column(name="comments", type="string", nullable=true)
     */

    private $comments;
 /**
     * @var \datetime
     *
     * @ORM\Column(name="birthdate", type="datetime" , nullable=true)
     */
    private $birthdate;
/**
     * @var \datetime
     *
     * @ORM\Column(name="postdate", type="datetime" , nullable=true)
     */

    private $postdate;
/**
     * @var \String
     *
     * @ORM\Column(name="custom1", type="string", nullable=true)
     */

    private $custom1;
/**
     * @var \String
     *
     * @ORM\Column(name="zip", type="string", nullable=true)
     */

    private $zip;
/**
     * @var \String
     *
     * @ORM\Column(name="email", type="string", nullable=true)
     */

    private $email;
/**
     * @var \String
     *
     * @ORM\Column(name="countryCode", type="string", nullable=true)
     */
    private $countryCode;
/**
     * @var \String
     *
     * @ORM\Column(name="gender", type="string" , nullable=true)
     */

    private $gender;
/**
     * @var \String
     *
     * @ORM\Column(name="vendorCode", type="string", nullable=true)
     */

    private $vendorCode;
/**
     * @var \String
     *
     * @ORM\Column(name="Custom2", type="string", nullable=true)
     */

    private $custom2;
/**
     * @var \String
     *
     * @ORM\Column(name="NameOnCard", type="string", nullable=true)
     */

    private $NameOnCard;
/**
     * @var \String
     *
     * @ORM\Column(name="BillingAddress", type="string", nullable=true)
     */

    private $BillingAddress;

/**
     * @var \String
     *
     * @ORM\Column(name="city1", type="string", nullable=true)
     */

    private $city1;
/**
     * @var \String
     *
     * @ORM\Column(name="state1", type="string", nullable=true)
     */

    private $state1;
/**
     * @var \String
     *
     * @ORM\Column(name="zip1", type="string", nullable=true)
     */

    private $zip1;
/**
     * @var \String
     *
     * @ORM\Column(name="ccType", type="string", nullable=true)
     */

    private $ccType;
/**
     * @var \String
     *
     * @ORM\Column(name="ccNumber", type="string", nullable=true)
     */

    private $ccNumber;
/**
     * @var \String
     *
     * @ORM\Column(name="cvvCode", type="string", nullable=true)
     */

    private $cvvCode;


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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Advert
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Advert
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }



    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Advert
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set company
     *
     * @param string $company
     *
     * @return Advert
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set address1
     *
     * @param string $address1
     *
     * @return Advert
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * Get address1
     *
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set address2
     *
     * @param string $address2
     *
     * @return Advert
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * Get address2
     *
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set address3
     *
     * @param string $address3
     *
     * @return Advert
     */
    public function setAddress3($address3)
    {
        $this->address3 = $address3;

        return $this;
    }

    /**
     * Get address3
     *
     * @return string
     */
    public function getAddress3()
    {
        return $this->address3;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Advert
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set state
     *
     * @param string $state
     *
     * @return Advert
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set province
     *
     * @param string $province
     *
     * @return Advert
     */
    public function setProvince($province)
    {
        $this->province = $province;

        return $this;
    }

    /**
     * Get province
     *
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Advert
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set comments
     *
     * @param string $comments
     *
     * @return Advert
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set birthdate
     *
     * @param string $birthdate
     *
     * @return Advert
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return string
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set postdate
     *
     * @param string $postdate
     *
     * @return Advert
     */
    public function setPostdate($postdate)
    {
        $this->postdate = $postdate;

        return $this;
    }

    /**
     * Get postdate
     *
     * @return string
     */
    public function getPostdate()
    {
        return $this->postdate;
    }

    /**
     * Set custom1
     *
     * @param string $custom1
     *
     * @return Advert
     */
    public function setCustom1($custom1)
    {
        $this->custom1 = $custom1;

        return $this;
    }

    /**
     * Get custom1
     *
     * @return string
     */
    public function getCustom1()
    {
        return $this->custom1;
    }

    /**
     * Set user
     *
     * @param \OC\UserBundle\Entity\User $user
     *
     * @return Advert
     */
    public function setUser(\OC\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \OC\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set zip
     *
     * @param string $zip
     *
     * @return Advert
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Get zip
     *
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Advert
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set countryCode
     *
     * @param string $countryCode
     *
     * @return Advert
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Get countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return Advert
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set vendorCode
     *
     * @param string $vendorCode
     *
     * @return Advert
     */
    public function setVendorCode($vendorCode)
    {
        $this->vendorCode = $vendorCode;

        return $this;
    }

    /**
     * Get vendorCode
     *
     * @return string
     */
    public function getVendorCode()
    {
        return $this->vendorCode;
    }

    /**
     * Set custom2
     *
     * @param string $custom2
     *
     * @return Advert
     */
    public function setCustom2($custom2)
    {
        $this->custom2 = $custom2;

        return $this;
    }

    /**
     * Get custom2
     *
     * @return string
     */
    public function getCustom2()
    {
        return $this->custom2;
    }

    /**
     * Set nameOnCard
     *
     * @param string $nameOnCard
     *
     * @return Advert
     */
    public function setNameOnCard($nameOnCard)
    {
        $this->NameOnCard = $nameOnCard;

        return $this;
    }

    /**
     * Get nameOnCard
     *
     * @return string
     */
    public function getNameOnCard()
    {
        return $this->NameOnCard;
    }

    /**
     * Set billingAddress
     *
     * @param string $billingAddress
     *
     * @return Advert
     */
    public function setBillingAddress($billingAddress)
    {
        $this->BillingAddress = $billingAddress;

        return $this;
    }

    /**
     * Get billingAddress
     *
     * @return string
     */
    public function getBillingAddress()
    {
        return $this->BillingAddress;
    }

    /**
     * Set city1
     *
     * @param string $city1
     *
     * @return Advert
     */
    public function setCity1($city1)
    {
        $this->city1 = $city1;

        return $this;
    }

    /**
     * Get city1
     *
     * @return string
     */
    public function getCity1()
    {
        return $this->city1;
    }

    /**
     * Set state1
     *
     * @param string $state1
     *
     * @return Advert
     */
    public function setState1($state1)
    {
        $this->state1 = $state1;

        return $this;
    }

    /**
     * Get state1
     *
     * @return string
     */
    public function getState1()
    {
        return $this->state1;
    }

    /**
     * Set zip1
     *
     * @param string $zip1
     *
     * @return Advert
     */
    public function setZip1($zip1)
    {
        $this->zip1 = $zip1;

        return $this;
    }

    /**
     * Get zip1
     *
     * @return string
     */
    public function getZip1()
    {
        return $this->zip1;
    }

    /**
     * Set ccType
     *
     * @param string $ccType
     *
     * @return Advert
     */
    public function setCcType($ccType)
    {
        $this->ccType = $ccType;

        return $this;
    }

    /**
     * Get ccType
     *
     * @return string
     */
    public function getCcType()
    {
        return $this->ccType;
    }

    /**
     * Set ccNumber
     *
     * @param string $ccNumber
     *
     * @return Advert
     */
    public function setCcNumber($ccNumber)
    {
        $this->ccNumber = $ccNumber;

        return $this;
    }

    /**
     * Get ccNumber
     *
     * @return string
     */
    public function getCcNumber()
    {
        return $this->ccNumber;
    }

    /**
     * Set cvvCode
     *
     * @param string $cvvCode
     *
     * @return Advert
     */
    public function setCvvCode($cvvCode)
    {
        $this->cvvCode = $cvvCode;

        return $this;
    }

    /**
     * Get cvvCode
     *
     * @return string
     */
    public function getCvvCode()
    {
        return $this->cvvCode;
    }

    /**
     * Set phone2
     *
     * @param string $phone2
     *
     * @return Advert
     */
    public function setPhone2($phone2)
    {
        $this->phone2 = $phone2;

        return $this;
    }

    /**
     * Get phone2
     *
     * @return string
     */
    public function getPhone2()
    {
        return $this->phone2;
    }

    /**
     * Set callerId
     *
     * @param string $callerId
     *
     * @return Advert
     */
    public function setCallerId($callerId)
    {
        $this->callerId = $callerId;

        return $this;
    }

    /**
     * Get callerId
     *
     * @return string
     */
    public function getCallerId()
    {
        return $this->callerId;
    }
}
