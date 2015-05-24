<?php

namespace Grunch\MercadopagoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="mp_payment")
 */
class Payment
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     *
     */
    protected $id;
    /** @ORM\Column(type="integer") */
    protected $order_id = 0;
     /**
     * @ORM\ManyToOne(targetEntity="Grunch\MercadopagoBundle\Entity\Payer", inversedBy="payments")
     * @ORM\JoinColumn(name="payer_id", referencedColumnName="id")
     */
    protected $payer;
    /**
     * @ORM\Column(type="string", length=10)
     *
     */
    protected $status = '';
    /**
     * @ORM\Column(type="string", length=50)
     *
     */
    protected $status_detail = '';
    /**
     * @ORM\Column(type="string", length=15)
     *
     */
    protected $payment_type = '';
    /**
     * @ORM\Column(type="string", length=3)
     *
     */
    protected $currency_id = '';
    /** @ORM\Column(type="integer") */
    protected $transaction_amount = 0;
    /** @ORM\Column(type="integer") */
    protected $total_paid_amount = 0;
    /**
     * @ORM\Column(type="string", length=15)
     *
     */
    protected $operation_type = '';
    /**
     * @ORM\Column(type="string", length=10)
     *
     */
    protected $payment_method_id = '';
    /**
     * @ORM\Column(type="datetime", nullable=true)
     *
     * @Assert\DateTime
     */
    protected $date_created;
    /**
     * @ORM\Column(type="datetime", nullable=true)
     *
     * @Assert\DateTime
     */
    protected $last_modified;
    /**
     * @ORM\Column(type="datetime", nullable=true)
     *
     * @Assert\DateTime
     */
    protected $date_approved;
    /**
     * @ORM\Column(type="datetime")
     *
     * @Assert\DateTime
     */
    protected $created_at;

    public function __construct()
    {
        $this->created_at = new \DateTime(date('Y-m-d H:i:s'));
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
     * Set order_id
     *
     * @param  integer $orderId
     * @return Payment
     */
    public function setOrderId($orderId)
    {
        $this->order_id = $orderId;

        return $this;
    }

    /**
     * Get order_id
     *
     * @return integer
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * Set status
     *
     * @param  string  $status
     * @return Payment
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set status_detail
     *
     * @param  string  $statusDetail
     * @return Payment
     */
    public function setStatusDetail($statusDetail)
    {
        $this->status_detail = $statusDetail;

        return $this;
    }

    /**
     * Get status_detail
     *
     * @return string
     */
    public function getStatusDetail()
    {
        return $this->status_detail;
    }

    /**
     * Set payment_type
     *
     * @param  string  $paymentType
     * @return Payment
     */
    public function setPaymentType($paymentType)
    {
        $this->payment_type = $paymentType;

        return $this;
    }

    /**
     * Get payment_type
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->payment_type;
    }

    /**
     * Set currency_id
     *
     * @param  string  $currencyId
     * @return Payment
     */
    public function setCurrencyId($currencyId)
    {
        $this->currency_id = $currencyId;

        return $this;
    }

    /**
     * Get currency_id
     *
     * @return string
     */
    public function getCurrencyId()
    {
        return $this->currency_id;
    }

    /**
     * Set transaction_amount
     *
     * @param  integer $transactionAmount
     * @return Payment
     */
    public function setTransactionAmount($transactionAmount)
    {
        $this->transaction_amount = $transactionAmount;

        return $this;
    }

    /**
     * Get transaction_amount
     *
     * @return integer
     */
    public function getTransactionAmount()
    {
        return $this->transaction_amount;
    }

    /**
     * Set total_paid_amount
     *
     * @param  integer $totalPaidAmount
     * @return Payment
     */
    public function setTotalPaidAmount($totalPaidAmount)
    {
        $this->total_paid_amount = $totalPaidAmount;

        return $this;
    }

    /**
     * Get total_paid_amount
     *
     * @return integer
     */
    public function getTotalPaidAmount()
    {
        return $this->total_paid_amount;
    }

    /**
     * Set operation_type
     *
     * @param  string  $operationType
     * @return Payment
     */
    public function setOperationType($operationType)
    {
        $this->operation_type = $operationType;

        return $this;
    }

    /**
     * Get operation_type
     *
     * @return string
     */
    public function getOperationType()
    {
        return $this->operation_type;
    }

    /**
     * Set payment_method_id
     *
     * @param  string  $paymentMethodId
     * @return Payment
     */
    public function setPaymentMethodId($paymentMethodId)
    {
        $this->payment_method_id = $paymentMethodId;

        return $this;
    }

    /**
     * Get payment_method_id
     *
     * @return string
     */
    public function getPaymentMethodId()
    {
        return $this->payment_method_id;
    }

    /**
     * Set date_created
     *
     * @param  \DateTime $dateCreated
     * @return Payment
     */
    public function setDateCreated($dateCreated)
    {
        $this->date_created = $dateCreated;

        return $this;
    }

    /**
     * Get date_created
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->date_created;
    }

    /**
     * Set last_modified
     *
     * @param  \DateTime $lastModified
     * @return Payment
     */
    public function setLastModified($lastModified)
    {
        $this->last_modified = $lastModified;

        return $this;
    }

    /**
     * Get last_modified
     *
     * @return \DateTime
     */
    public function getLastModified()
    {
        return $this->last_modified;
    }

    /**
     * Set date_approved
     *
     * @param  \DateTime $dateApproved
     * @return Payment
     */
    public function setDateApproved($dateApproved)
    {
        $this->date_approved = $dateApproved;

        return $this;
    }

    /**
     * Get date_approved
     *
     * @return \DateTime
     */
    public function getDateApproved()
    {
        return $this->date_approved;
    }

    /**
     * Set created_at
     *
     * @param  \DateTime $createdAt
     * @return Payment
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set payer
     *
     * @param  \Grunch\MercadopagoBundle\Entity\Payer $payer
     * @return Payment
     */
    public function setPayer(\Grunch\MercadopagoBundle\Entity\Payer $payer = null)
    {
        $this->payer = $payer;

        return $this;
    }

    /**
     * Get payer
     *
     * @return \Grunch\MercadopagoBundle\Entity\Payer
     */
    public function getPayer()
    {
        return $this->payer;
    }
}
