<?php
require_once 'gasType.php';
class Car
{
    private ?gasType $gasType;
    public string $gasName {
        set(string  $gasValue) {
            $this->gasName = $gasValue;
            $this->gasType = gasType::tryFrom(strtolower($gasValue));
        }
    }
    public function __construct(
        public string $brand,
        public string $numberPlate,
        string $gasValue,
        public int $maxSpeed,
    ) {
        $this->gasName = $gasValue;
    }

    public function getGasType(): ?string
    {
        return $this->gasType->name;
    }

    use Turbo;
}
