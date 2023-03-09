<?php

namespace App\Entity;

use App\Repository\BackRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: BackRepository::class)]
class Back
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank()]
    #[Assert\Regex( pattern: "/^[a-zA-Z]+$/", message: "Le cin d'participant ne peut contenir que des lettres et des chiffres")]
    private ?string $name = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $time = null;

    #[ORM\Column]
    private ?int $nb_max_part = 2;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank()]
    
    private ?string $description = null;

    #[ORM\ManyToMany(targetEntity: Participant::class, mappedBy: 'evenement')]
    private Collection $participants;

    #[ORM\Column(nullable: true)]
    private ?int $nb_part = 0;

   

    public function __construct()
    {
        $this->participants = new ArrayCollection();
    }

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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getTime(): ?\DateTimeInterface
    {
        return $this->time;
    }

    public function setTime(\DateTimeInterface $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getNbMaxPart(): ?int
    {
        return $this->nb_max_part;
    }

    public function setNbMaxPart(int $nb_max_part): self
    {
        $this->nb_max_part = $nb_max_part;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, Participant>
     */
    public function getParticipants(): Collection
    {
        return $this->participants;
    }

    public function countParticipants(): int
{
    $count = 0;
    foreach ($this->participants as $participant) {
        if ($participant->getNameEvent() === $this) {
            $count++;
        }
    }

    return $count;
}

public function addParticipant(Participant $participant): self
{
    if (!$this->participants->contains($participant) && $this->participantCount < $this->NbMaxPart) {
        $this->participants[] = $participant;
        $participant->setNameEvent($this);

        // Update the number of participants for the event
        $this->participantCount = $this->countParticipants();
    }

    return $this;
}



    public function removeParticipant(Participant $participant): self
    {
        if ($this->participants->removeElement($participant)) {
            // Decrement the number of participants for the event
            $this->numParticipants--;
            // set the owning side to null (unless already changed)
            if ($participant->getEvenement() === $this) {
                $participant->setNameEvent(null);
            }
        }

        return $this;
    }

    public function getNbPart(): ?int
    {
        return $this->nb_part;
    }

    public function setNbPart(?int $nb_part): self
    {
        $this->nb_part = $nb_part;

        return $this;
    }
}
