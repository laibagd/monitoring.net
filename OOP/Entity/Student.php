<?php
declare(strict_types=1);
namespace KSC\Entity;
class Student
{

    private $id;
    private $firstName;
    private $lasttName;
    private $birthdDate;
    private $group;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Student
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     * @return Student
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLasttName()
    {
        return $this->lasttName;
    }

    /**
     * @param mixed $lasttName
     * @return Student
     */
    public function setLasttName($lasttName)
    {
        $this->lasttName = $lasttName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBirthdDate()
    {
        return $this->birthdDate;
    }

    /**
     * @param mixed $birthdDate
     * @return Student
     */
    public function setBirthdDate($birthdDate)
    {
        $this->birthdDate = $birthdDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @param mixed $group
     * @return Student
     */
    public function setGroup($group)
    {
        $this->group = $group;
        return $this;
    }



}