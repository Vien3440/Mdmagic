<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Deckcard
 *
 * @ORM\Table(name="deckCard", indexes={@ORM\Index(name="fk_deck_has_card_deck_idx", columns={"deck_id"})})
 * @ORM\Entity
 */
class Deckcard
{
    /**
     * @var integer
     *
     * @ORM\Column(name="card_id", type="integer", nullable=false)
     */
    private $cardId;

    /**
     * @var integer
     *
     * @ORM\Column(name="number", type="integer", nullable=false)
     */
    private $number;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Deck
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Deck")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="deck_id", referencedColumnName="id")
     * })
     */
    private $deck;

    
    function getCardId() {
        return $this->cardId;
    }

    function getNumber() {
        return $this->number;
    }

    function getId() {
        return $this->id;
    }

    function getDeck(): \AppBundle\Entity\Deck {
        return $this->deck;
    }

    function setCardId($cardId) {
        $this->cardId = $cardId;
    }

    function setNumber($number) {
        $this->number = $number;
    }


    function setDeck(\AppBundle\Entity\Deck $deck) {
        $this->deck = $deck;
    }



}

