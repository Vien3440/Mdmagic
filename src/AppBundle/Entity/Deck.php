<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Deck
 *
 * @ORM\Table(name="deck", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"}), @ORM\UniqueConstraint(name="nameDeck_UNIQUE", columns={"nameDeck"})}, indexes={@ORM\Index(name="fk_deck_user1_idx", columns={"user_id"})})
 * @ORM\Entity
 */
class Deck
{
    /**
     * @var string
     *
     * @ORM\Column(name="nameDeck", type="string", length=45, nullable=false)
     */
    private $namedeck;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    
    function getNamedeck() {
        return $this->namedeck;
    }

    function getId() {
        return $this->id;
    }

    function getUser(): \AppBundle\Entity\User {
        return $this->user;
    }

    function setNamedeck($namedeck) {
        $this->namedeck = $namedeck;
    }


    function setUser(\AppBundle\Entity\User $user) {
        $this->user = $user;
    }


}

