<?php

namespace PirateBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\Mapping as ORM;

/**
 * JobSubmission
 *
 * @ORM\Table(name="job_submission")
 * @ORM\Entity(repositoryClass="PirateBundle\Repository\JobSubmissionRepository")
 */
class JobSubmission
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
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     * 
     */
    private $status;
    

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
     * Set email
     *
     * @param string $email
     * @return JobSubmission
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
     * Set title
     *
     * @param string $title
     * @return JobSubmission
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return JobSubmission
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    
    
    /**
     * Set status
     *
     * @param string $status
     * @return JobSubmission
     */
    public function setStatus($status)
    {
    	$this -> status = $status;
        
    	return $this;
    }
    
    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
    	return $this -> status;
    }
    
    
}
