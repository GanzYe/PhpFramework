<?php


namespace App\Models;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="books")
 */

class Book {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $name;

    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __get($name) {
        return $this->name;
    }
}