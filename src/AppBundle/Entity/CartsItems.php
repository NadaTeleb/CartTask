<?php
/**
 * Created by PhpStorm.
 * User: nada
 * Date: 04/11/15
 * Time: 01:30 م
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="CartsItems")
 */
class CartsItems {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $ItemID;


    /**
     * @ORM\Column(type="integer")
     */
    private $CartID;

    //====================== SETTERS & GETTERS =====================//
    /**
     * @return mixed
     */
    public function getCartID()
    {
        return $this->CartID;
    }

    /**
     * @param mixed $CartID
     */
    public function setCartID($CartID)
    {
        $this->CartID = $CartID;
    }
    //===========================================//
    /**
     * @return mixed
     */
    public function getItemID()
    {
        return $this->ItemID;
    }

    /**
     * @param mixed $ItemID
     */
    public function setItemID($ItemID)
    {
        $this->ItemID = $ItemID;
    }
    //===========================================//
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

} 