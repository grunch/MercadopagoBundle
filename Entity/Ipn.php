<?php

namespace Grunch\MercadopagoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="mp_ipn")
 */
class Ipn
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     *
     */
    protected $id;
    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank()
     *
     */
    protected $topic = '';
    /** @ORM\Column(type="integer") */
    protected $operation_id;
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
     * Set topic
     *
     * @param string $topic
     */
    public function setTopic($topic)
    {
        $this->topic = $topic;
    }

    /**
     * Get topic
     *
     * @return string
     */
    public function getTopic()
    {
        return $this->topic;
    }

   /**
     * Set operation id
     *
     * @param smallint $puntos
     */
    public function setOperationId($operation_id)
    {
        $this->operation_id = $operation_id;
    }

    /**
     * Get operation id
     *
     * @return smallint $operation_id
     */
    public function getOperationId()
    {
        return $this->operation_id;
    }

    public function __toString()
    {
        return $this->getTopic();
    }

    /**
     * Set created_at
     *
     * @param  \DateTime $createdAt
     * @return Ipn
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
}
