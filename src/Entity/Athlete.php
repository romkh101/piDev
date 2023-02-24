<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\AthleteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AthleteRepository::class)]
class Athlete
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    #[Assert\Regex(pattern: '/^[a-zA-Z0-9\s]+$/u', message: 'Le titre ne doit pas contenir des caractères spéciaux.')]
    #[Assert\NotBlank(message:"name requis")]
    #[ORM\Column(length: 255)]
    private ?string $name = null;
    #[Assert\NotBlank(message:"prenom requis")]
    #[Assert\Regex(pattern: '/^[a-zA-Z0-9\s]+$/u', message: 'Le titre ne doit pas contenir des caractères spéciaux.')]
    #[ORM\Column(length: 255)]
    private ?string $prenom = null;
    #[Assert\NotBlank(message:"age requis")]
    #[Assert\Regex(pattern: '/^[0-9\s]+$/u', message: 'Le titre ne doit pas contenir des caractères spéciaux.')]
    #[ORM\Column]
    private ?int $Age = null;
    #[Assert\NotBlank(message:"poids requis")]
    #[Assert\Regex(pattern: '/^[0-9\s]+$/u', message: 'Le titre ne doit pas contenir des caractères spéciaux.')]
    #[ORM\Column]
    private ?float $poids = null;
    #[Assert\NotBlank(message:"taille requis")]
    #[Assert\Regex(pattern: '/^[.0-9\s]+$/u', message: 'Le titre ne doit pas contenir des caractères spéciaux.')]
    #[ORM\Column]
    private ?float $taille = null;

    #[ORM\OneToOne(mappedBy: 'athlete', cascade: ['persist', 'remove'])]
    private ?Competition $competition = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Competition $Competition = null;

   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->Age;
    }

    public function setAge(int $Age): self
    {
        $this->Age = $Age;

        return $this;
    }

    public function getPoids(): ?float
    {
        return $this->poids;
    }

    public function setPoids(float $poids): self
    {
        $this->poids = $poids;

        return $this;
    }

    public function getTaille(): ?float
    {
        return $this->taille;
    }

    public function setTaille(float $taille): self
    {
        $this->taille = $taille;

        return $this;
    }

    public function getCompetition(): ?Competition
    {
        return $this->competition;
    }
    
    public function setCompetition(?Competition $competition): self
    {
        // unset the owning side of the relation if necessary
        if ($competition === null && $this->competition !== null) {
            $this->competition->setAthlete(null);
        }

        // set the owning side of the relation if necessary
        if ($competition !== null && $competition->getAthlete() !== $this) {
            $competition->setAthlete($this);
        }

        $this->competition = $competition;

        return $this;
    }
    
}
   

