<?php
class User {
    public $name;
    protected $age;
    protected $address;
    protected $phone;

    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->age = $data['age'];
        $this->address = $data['address'];
        $this->phone = $data['phone'];
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }


    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

}