<?php
require_once 'gasType.php';
class Car
{

    public function __construct(
        public string $brand,
        public string $numberPlate,
        private gasType $gasType,
        public int $maxSpeed,
    ) {}

    public function getGasType(): ?string
    {
        return $this->gasType->name;
    }
    public function setGasType(gasType $type): void
    {
        $this->gasType = $type;
    }

    use Turbo;
}
