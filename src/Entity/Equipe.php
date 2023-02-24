<?php

namespace App\Entity;
use App\Repository\EquipeRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Form\FormView ;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: EquipeRepository::class)]
class Equipe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("equipe")]
    private ?int $id = null;


    #[ORM\Column(length: 30)]
    #[Assert\NotBlank (message :'nom is required')]
    #[Groups("equipe")]
    private ?string $Nom = null;

    #[Assert\NotBlank (message :'Pays is required')]
    #[ORM\Column(length: 30)]
    #[Groups("equipe")]
    public ?string $Pays = null;

    #[ORM\Column(length: 255)]
    #[Groups("equipe")]
    private ?string $Logo = null;

    #[Assert\NotBlank (message :'Ligue is required')]
    #[ORM\Column(length: 30)]
    #[Groups("equipe")]
    private ?string $Ligue = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }
    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function setLogo(string $Logo): self
    {
        $this->Logo = $Logo;

        return $this;
    }


    public function getPays(): ?string
    {
        return $this->Pays;
    }
    public function getLogo(): ?string
    {
        return $this->Logo;
    }

    

    public function setPays(string $Pays): self
    {
        $this->Pays = $Pays;

        return $this;
    }

    public function getLigue(): ?string
    {
        return $this->Ligue;
    }

    public function setLigue(string $Ligue): self
    {
        $this->Ligue = $Ligue;

        return $this;
    }
}
