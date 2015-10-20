<?php
/**
 * Created by PhpStorm.
 * User: kgurgul
 * Date: 2015-10-12
 * Time: 18:47
 */

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MockRepository")
 * @ORM\Table(name="mock")
 */
class Mock
{
    /**
     * @ORM\Column(type="integer", name="mockId")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $userId = 0;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $url;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $method;

    /**
     * @ORM\Column(type="integer")
     */
    protected $responseStatus;

    /**
     * @ORM\Column(type="text")
     */
    protected $body;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $createdAt;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $blocked = 0;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $deleted = 0;

    /**
     * @ORM\OneToMany(targetEntity="Header", mappedBy="mock", cascade={"persist"})
     **/
    protected $headers;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->headers = new ArrayCollection();
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Mock
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Mock
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get responseStatus
     *
     * @return integer
     */
    public function getResponseStatus()
    {
        return $this->responseStatus;
    }

    /**
     * Set responseStatus
     *
     * @param integer $responseStatus
     *
     * @return Mock
     */
    public function setResponseStatus($responseStatus)
    {
        $this->responseStatus = $responseStatus;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set body
     *
     * @param string $body
     *
     * @return Mock
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Mock
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get blocked
     *
     * @return boolean
     */
    public function getBlocked()
    {
        return $this->blocked;
    }

    /**
     * Set blocked
     *
     * @param boolean $blocked
     *
     * @return Mock
     */
    public function setBlocked($blocked)
    {
        $this->blocked = $blocked;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return Mock
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
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
     * Set id
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set method
     *
     * @param string $method
     *
     * @return Mock
     */
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * Add header
     *
     * @param \AppBundle\Entity\Header $header
     *
     * @return Mock
     */
    public function addHeader(\AppBundle\Entity\Header $header)
    {
        $this->headers[] = $header;

        return $this;
    }

    /**
     * Remove header
     *
     * @param \AppBundle\Entity\Header $header
     */
    public function removeHeader(\AppBundle\Entity\Header $header)
    {
        $this->headers->removeElement($header);
    }

    /**
     * Get headers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHeaders()
    {
        return $this->headers;
    }
}
