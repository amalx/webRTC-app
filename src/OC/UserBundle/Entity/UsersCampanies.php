<?php

namespace OC\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersCampanies
 *
 * @ORM\Table(name="users_campanies")
 * @ORM\Entity(repositoryClass="OC\UserBundle\Repository\UsersCampaniesRepository")
 */
class UsersCampanies
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
     * @var int
     *
     * @ORM\Column(name="nb_Agents", type="integer")
     */
    private $nbAgents;

	/**
			   * @ORM\ManyToOne(targetEntity="OC\UserBundle\Entity\Company")
			   * @ORM\JoinColumn(nullable=true)
			   */

    private $company;

	/**
			   * @ORM\ManyToOne(targetEntity="OC\UserBundle\Entity\User")
			   * @ORM\JoinColumn(nullable=true)
			   */

    private $user;


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
     * Set nbAgents
     *
     * @param integer $nbAgents
     *
     * @return UsersCampanies
     */
    public function setNbAgents($nbAgents)
    {
        $this->nbAgents = $nbAgents;

        return $this;
    }

    /**
     * Get nbAgents
     *
     * @return int
     */
    public function getNbAgents()
    {
        return $this->nbAgents;
    }
}

