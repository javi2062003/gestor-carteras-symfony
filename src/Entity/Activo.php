<?php
class Activo
{

    #[ORM\Column]
    private ?float $valor = null;

    // ... getters y setters para id, nombre, tipo ...

    public function getValor(): ?float
    {
        return $this->valor;
    }

    public function setValor(float $valor): static
    {
        $this->valor = $valor;
        return $this;
    }

    // ... y la propiedad $cartera con su getter/setter para la relación inversa ...
    #[ORM\ManyToOne(inversedBy: 'activos')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Cartera $cartera = null;

    public function getCartera(): ?Cartera
    {
        return $this->cartera;
    }

    public function setCartera(?Cartera $cartera): static
    {
        $this->cartera = $cartera;
        return $this;
    }
}
?>