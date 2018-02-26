<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="pass_UNIQUE", columns={"pass"}), @ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"})})
 * @ORM\Entity
 */
class User
{
    /**
     * @var string
     *
     * @ORM\Column(name="nameUser", type="string", length=45, nullable=true)
     */
    private $nameuser;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo", type="string", length=45, nullable=false)
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="pass", type="string", length=45, nullable=false)
     */
    private $pass;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="imgUser", type="string", length=45, nullable=true)
     */
    private $imguser;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    function getNameuser() {
        return $this->nameuser;
    }

    function getPseudo() {
        return $this->pseudo;
    }

    function getPass() {
        return $this->pass;
    }

    function getEmail() {
        return $this->email;
    }

    function getImguser() {
        return $this->imguser;
    }

    function getId() {
        return $this->id;
    }

    function setNameuser($nameuser) {
        $this->nameuser = $nameuser;
    }

    function setPseudo($pseudo) {
        $this->pseudo = $pseudo;
    }

    function setPass($pass) {
        $this->pass = $pass;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setImguser($imguser) {
        $this->imguser = $imguser;
    }

 


}

