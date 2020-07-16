<?php


class User
{
    private $email;
    private $firstName;
    private $lastName;
    private $age;

    public function __construct(string $email,string $firstName, string $lastName, int $age)
    {
        $this->email = $email;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function isValid() {
        if (!empty($this->email) && !empty($this->firstName) && !empty($this->lastName) && !empty($this->age)) {
            if(filter_var($this->email, FILTER_VALIDATE_EMAIL) === false ) {
                throw new InvalidArgumentException('Email invalide');
            }
            if ($this->age < 13) {
                throw new InvalidArgumentException('Vous devez avoir 13 ans ou plus');
            }
        }
        else {
            throw new InvalidArgumentException('Un ou plusieurs champs sont vides');
        }
        return true;
    }

    /**
    * @return string
    */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
    * @return string
    */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }
}
