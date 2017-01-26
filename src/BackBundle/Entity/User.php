<?php

namespace BackBundle\Entity;

use BackBundle\Entity\Commercial;
use BackBundle\Entity\Company;
use BackBundle\Entity\Customer;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Gedmo\Mapping\Annotation As Gedmo;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    const ROLE_ADMIN = 'ROLE_ADMIN';
    const ROLE_CUSTOMER = 'ROLE_CUSTOMER';
    const ROLE_COMPANY = 'ROLE_COMPANY';
    const ROLE_COMMERCIAL = 'ROLE_COMMERCIAL';

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var bool
     *
     * @ORM\Column(name="change_password", type="boolean",nullable=true)
     */
    protected $changePassword;


    /**
     * @var Customer
     *
     * @ORM\OneToOne(targetEntity="BackBundle\Entity\Customer", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    protected $customer;

    /**
     * @var Commercial
     *
     * @ORM\OneToOne(targetEntity="BackBundle\Entity\Commercial", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    protected $commercial;

    /**
     * @var Company
     *
     * @ORM\ManyToOne(targetEntity="BackBundle\Entity\Company", inversedBy="splashscreenPeriodes")
     */
    private $company;

    /**
     * @var \DateTime
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column( type="datetime", nullable=true)
     */
    private $updated;

    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->changePassword = true;
    }

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
     * Set changePassword
     *
     * @param boolean $changePassword
     *
     * @return User
     */
    public function setChangePassword($changePassword)
    {
        $this->changePassword = $changePassword;

        return $this;
    }

    /**
     * Get changePassword
     *
     * @return boolean
     */
    public function getChangePassword()
    {
        return $this->changePassword;
    }

    /**
     * Set customer
     *
     * @param Customer $customer
     *
     * @return User
     */
    public function setCustomer(Customer $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set commercial
     *
     * @param Commercial $commercial
     *
     * @return User
     */
    public function setCommercial(Commercial $commercial = null)
    {
        $this->commercial = $commercial;

        return $this;
    }

    /**
     * Get commercial
     *
     * @return Commercial
     */
    public function getCommercial()
    {
        return $this->commercial;
    }


    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return User
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return User
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set company
     *
     * @param \BackBundle\Entity\Company $company
     *
     * @return User
     */
    public function setCompany(Company $company = null)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return \BackBundle\Entity\Company
     */
    public function getCompany()
    {
        return $this->company;
    }
}
