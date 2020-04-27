<?php

class Character
{
    private $id;
    private $name;

    public function hydrate(array $data)
    {
        if (isset($data['id'])) {
            $this->setId($data['id']);
        }

        if (isset($data['nom'])) {
            $this->setName($data['nom']);
        }
    }

    private function setId(int $id)
    {
        $this->id = $id;
        return $this;
    }

    private function setName(int $name)
    {
        $this->name = $name;
        return $this;
    }
}
