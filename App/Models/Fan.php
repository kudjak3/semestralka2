<?php
namespace App\Models;
use \App\Core\Model;
class Fan extends \App\Core\Model
{
    protected $id;
    protected $name;
    protected $password;
    protected $favPlayer;

    /**
     * Fans constructor.
     * @param string $name
     * @param string $password
     * @param string $favPlayer
     */
    public function __construct($name = "", $password = "", $favPlayer = "")
    {
        $this->name = $name;
        $this->password = $password;
        $this->favPlayer = $favPlayer;
    }

    static public function setDbColumns()
    {
       return ['id', 'name', 'password', 'favPlayer'];
    }

    static public function setTableName()
    {
        return 'fan';
    }

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

    /**
     * @return mixed|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed|string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed|string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed|string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed|string
     */
    public function getFavPlayer()
    {
        return $this->favPlayer;
    }

    /**
     * @param mixed|string $favPlayer
     */
    public function setFavPlayer($favPlayer)
    {
        $this->favPlayer = $favPlayer;
    }


}