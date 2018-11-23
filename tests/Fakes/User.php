<?php

namespace Tests\Fakes;

class User
{
    private $name;
    private $age;

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }
}
