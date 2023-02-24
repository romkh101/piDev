<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\CompetitionRepository;
use Doctrine\ORM\Mapping as ORM;
     

     
#[ORM\Entity(repositoryClass: CompetitionRepository::class)]
class Competition
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    #[Assert\NotBlank(message:"nbrtrophet requis")]
    #[Assert\Regex(pattern: '/^[0-9\s]+$/u', message: 'Le titre ne doit pas contenir des caractères spéciaux.')]
    #[ORM\Column]
    private ?int $nbrTrophet = null;

    
    #[Assert\NotBlank(message:"nbrParticipation requis")]
    #[Assert\Regex(pattern: '/^[0-9\s]+$/u', message: 'Le titre ne doit pas contenir des caractères spéciaux.')]
    #[ORM\Column]
    private ?int $nbrParticipationInternational = null;
    #[Assert\NotBlank(message:"classement requis")]
    #[Assert\Regex(pattern: '/^[0-9\s]+$/u', message: 'Le titre ne doit pas contenir des caractères spéciaux.')]
    #[ORM\Column]
    private ?int $ClassementMondial = null;
    #[Assert\NotBlank(message:"niveau requis")]
    #[Assert\Regex(pattern: '/^[a-zA-Z0-9\s]+$/u', message: 'Le titre ne doit pas contenir des caractères spéciaux.')]
    #[ORM\Column(length: 255)]
    private ?string $Niveau = null;

    #[ORM\OneToOne(inversedBy: 'competition', cascade: ['persist', 'remove'])]
    private ?Athlete $athlete = null;

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbrTrophet(): ?int
    {
        return $this->nbrTrophet;
    }

    public function setNbrTrophet(int $nbrTrophet): self
    {
        $this->nbrTrophet = $nbrTrophet;

        return $this;
    }

    
    public function getNbrParticipationInternational(): ?int
    {
        return $this->nbrParticipationInternational;
    }

    public function setNbrParticipationInternational(int $nbrParticipationInternational): self
    {
        $this->nbrParticipationInternational = $nbrParticipationInternational;

        return $this;
    }

    public function getClassementMondial(): ?int
    {
        return $this->ClassementMondial;
    }

    public function setClassementMondial(int $ClassementMondial): self
    {
        $this->ClassementMondial = $ClassementMondial;

        return $this;
    }

    public function getNiveau(): ?string
    {
        return $this->Niveau;
    }

    public function setNiveau(string $Niveau): self
    {
        $this->Niveau = $Niveau;

        return $this;
    }


    public function getAthlete(): ?Athlete
    {
        return $this->athlete;
    }
    
    public function setAthlete(?Athlete $athlete): self
    {
        $this->athlete = $athlete;

        return $this;
    }

  
}
