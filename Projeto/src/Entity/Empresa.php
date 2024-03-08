<?php

namespace App\Entity;

use App\Repository\EmpresaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: EmpresaRepository::class)]
class Empresa
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    private ?string $nomeEmpresa = null;

    #[ORM\ManyToMany(targetEntity: Socios::class, mappedBy: 'nomeEmpresa')]
    private Collection $nomeSocio;

    public function __construct()
    {
        $this->nomeSocio = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomeEmpresa(): ?string
    {
        return $this->nomeEmpresa;
    }

    public function setNomeEmpresa(string $nomeEmpresa): static
    {
        $this->nomeEmpresa = $nomeEmpresa;

        return $this;
    }

    /**
     * @return Collection<int, Socios>
     */
    public function getNomeSocio(): Collection
    {
        return $this->nomeSocio;
    }

    public function addNomeSocio(Socios $nomeSocio): static
    {
        if (!$this->nomeSocio->contains($nomeSocio)) {
            $this->nomeSocio->add($nomeSocio);
            $nomeSocio->addNomeEmpresa($this);
        }

        return $this;
    }

    public function removeNomeSocio(Socios $nomeSocio): static
    {
        if ($this->nomeSocio->removeElement($nomeSocio)) {
            $nomeSocio->removeNomeEmpresa($this);
        }

        return $this;
    }
}
