<?php


// ATELIER 1 : FONCTION HYDRATE
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

// CORRECTION  ///////////////////////////

// public function hydrate(array $data)
// {
//     foreach($data as $key => $value)
//     {
//         //On récupère le nom du setter correspondant à l'attribut
//         $method = 'set'.ucfirst($key);
//         // Si le setter correspondant existe : 
//         if (method_exists($this, $method))
//         {
//             //On appelle le setter
//             $this->$method($value);
//         }
//     }
// }