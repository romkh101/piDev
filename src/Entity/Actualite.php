<?php

namespace App\Entity;
use App\Entity\Categorie;
use App\Repository\CategorieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\ActualiteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ActualiteRepository::class)]
#[ORM\Table(name: "actualite")]
#[ORM\Index(columns: ["Titre", "Contenu"], flags: ["fulltext"])]
class Actualite 
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Titre requis")]
    #[Assert\Regex(pattern: '/^[a-zA-Z0-9\s]+$/u', message: 'Le titre ne doit pas contenir des caractères spéciaux.')]
    private ?string $Titre = null;

    #[ORM\Column(length: 255)]
    private ?string $Image = null;

    #[ORM\Column(length: 255)]
    #[Assert\Length(min:50)]
    #[Assert\NotBlank(message:"Contenu requis")]
    private ?string $Contenu = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Auteur requis")]
    #[Assert\Regex(pattern: '/^[a-zA-Z0-9\s]+$/u', message: 'Auteur ne doit pas contenir des caractères spéciaux.')]
    private ?string $Auteur = null;

    #[ORM\Column(type: Types::DATETIMETZ_MUTABLE)]
    #[Assert\NotBlank(message:"Date requis")]
    #[Assert\LessThanOrEqual("now", message:"La date ne doit pas être postérieure à aujourd'hui")]
    private ?\DateTimeInterface $Date = null;

    #[ORM\ManyToOne(inversedBy: 'actualites')]
    private ?Categorie $categorie = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->Titre;
    }

    public function setTitre(string $Titre): self
    {
        $this->Titre = $Titre;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->Image;
    }

    public function setImage(string $Image): self
    {
        $this->Image = $Image;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->Contenu;
    }

    public function setContenu(string $Contenu): self
    {
        $this->Contenu = $Contenu;

        return $this;
    }

    public function getAuteur(): ?string
    {
        return $this->Auteur;
    }

    public function setAuteur(string $Auteur): self
    {
        $this->Auteur = $Auteur;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }
    
   
}
