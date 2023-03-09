<?php

namespace App\Entity;

use App\Repository\ParticipantRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;

#[ORM\Entity(repositoryClass: ParticipantRepository::class)]
class Participant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank()]
    #[Assert\Regex( pattern: "/^[A-Z0-9]+$/", message: "Le cin d'participant ne peut contenir que des lettres et des chiffres")]
     private ?string $id_part = null;
   
    #[ORM\Column(length: 255)]
    #[Assert\NotBlank()]
    #[Assert\Regex( pattern: "/^[a-zA-Z]+$/", message: "Le nom du participant ne peut contenir que des lettres et des chiffres")]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank()]
    #[Assert\Regex( pattern: "/^[a-zA-Z]+$/", message: "Le nom d'evennement ne peut contenir que des lettres et des chiffres")]
    private ?string $name_event = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank()]
    #[Assert\Regex( pattern: "/^[a-zA-Z]+$/", message: "Le prenom du participant ne peut contenir que des lettres et des chiffres")]
    private ?string $prenom = null;

    #[ORM\ManyToMany(targetEntity: Back::class, inversedBy: 'participants')]
    private Collection $evenement;


    public function __construct()
    {
        $this->back = new ArrayCollection();
        $this->evenement = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getIdPart(): ?string
    {
        return $this->id_part;
    }

    public function setIdPart(string $id_part): self
    {
        $this->id_part = $id_part;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getNameEvent(): ?string
    {
        return $this->name_event;
    }

    public function setNameEvent(string $name_event): self
    {
        $this->name_event = $name_event;

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

    /**
     * @return Collection<int, back>
     */
    public function getBack(): Collection
    {
        return $this->back;
    }

    /**
     * @return Collection<int, Back>
     */
    public function getEvenement(): Collection
    {
        return $this->evenement;
    }

    public function addEvenement(Back $evenement): self
    {
        if (!$this->evenement->contains($evenement)) {
            $this->evenement->add($evenement);
        }

        return $this;
    }

    public function removeEvenement(Back $evenement): self
    {
        $this->evenement->removeElement($evenement);

        return $this;
    }


}
