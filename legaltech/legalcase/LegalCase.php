<?php
/**
 * Created by PhpStorm.
 * User: michaelhunger
 * Date: 09/07/17
 * Time: 21:15
 */

namespace legaltech\legalcase;

use taurus\framework\db\Entity;

/**
 * Class LegalCase
 * @package legaltech\legalcase
 *
 * @Entity(table="legalcase")
 */
class LegalCase implements Entity
{
    /**
     * @var
     * @Column(name="id")
     * @Id
     */
    public $id;

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