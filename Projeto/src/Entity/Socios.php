<?php

namespace App\Entity;

use App\Repository\SociosRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: SociosRepository::class)]
class Socios
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    private ?string $nomeSocio = null;

    #[ORM\ManyToMany(targetEntity: Empresa::class, inversedBy: 'nomeSocio')]
    private Collection $nomeEmpresa;

    public function __construct()
    {
        $this->nomeEmpresa = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomeSocio(): ?string
    {
        return $this->nomeSocio;
    }

    public function setNomeSocio(string $nomeSocio): static
    {
        $this->nomeSocio = $nomeSocio;

        return $this;
    }

    /**
     * @return Collection<int, Empresa>
     */
    public function getNomeEmpresa(): Collection
    {
        return $this->nomeEmpresa;
    }
    public function setNomeEmpresa(Collection $nomeEmpresa): static
    {
        $this->nomeEmpresa = $nomeEmpresa;
        return $this;
    }

    public function addNomeEmpresa(Empresa $nomeEmpresa): static
    {
        if (!$this->nomeEmpresa->contains($nomeEmpresa)) {
            $this->nomeEmpresa->add($nomeEmpresa);
        }

        return $this;
    }

    public function removeNomeEmpresa(Empresa $nomeEmpresa): static
    {
        $this->nomeEmpresa->removeElement($nomeEmpresa);

        return $this;
    }
}
