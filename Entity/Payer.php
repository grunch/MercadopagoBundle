<?php

namespace Grunch\MercadopagoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="mp_payer")
 */
class Payer
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     *
     */
    protected $id;
    /**
     * @ORM\OneToMany(targetEntity="Grunch\MercadopagoBundle\Entity\Payment", mappedBy="payer")
     */
    protected $payments;
    /**
     * @ORM\Column(type="string", length=50)
     *
     */
    protected $firstname = '';
    /**
     * @ORM\Column(type="string", length=50)
     *
     */
    protected $lastname = '';
    /**
     * @ORM\Column(type="string", length=50)
     *
     */
    protected $email = '';
    /**
     * @ORM\Column(type="string", length=20)
     *
     */
    protected $nickname = '';
    /**
     * @ORM\Column(type="string", length=15)
     *
     */
    protected $phone = '';
    /**
     * @ORM\Column(type="string", length=25)
     *
     */
    protected $identification = '';

    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstname
     *
     * @param  string $firstname
     * @return Payer
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param  string $lastname
     * @return Payer
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set email
     *
     * @param  string $email
     * @return Payer
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
     * Set nickname
     *
     * @param  string $nickname
     * @return Payer
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set phone
     *
     * @param  string $phone
     * @return Payer
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
     * Set identification
     *
     * @param  string $identification
     * @return Payer
     */
    public function setIdentification($identification)
    {
        $this->identification = $identification;

        return $this;
    }

    /**
     * Get identification
     *
     * @return string
     */
    public function getIdentification()
    {
        return $this->identification;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->payments = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add payments
     *
     * @param  \Grunch\MercadopagoBundle\Entity\Payment $payments
     * @return Payer
     */
    public function addPayment(\Grunch\MercadopagoBundle\Entity\Payment $payments)
    {
        $this->payments[] = $payments;

        return $this;
    }

    /**
     * Remove payments
     *
     * @param \Grunch\MercadopagoBundle\Entity\Payment $payments
     */
    public function removePayment(\Grunch\MercadopagoBundle\Entity\Payment $payments)
    {
        $this->payments->removeElement($payments);
    }

    /**
     * Get payments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPayments()
    {
        return $this->payments;
    }
}
