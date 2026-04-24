<?php
require_once 'gasType.php';
class Car
{
    private ?gasType $gasType;
    public string $gasName {
        set(string  $gasValue) {
            $this->gasName = $gasValue;
            $this->gasType = gasType::tryFrom(strtolower($gasValue));
            if ($this->gasType === null) {
                echo __FILE__ . ': ' . __METHOD__ . '(linea:' . __LINE__ . "): comustible: $gasValue incorrecto, intenta:\n" . gasType::caseNames() . "\n";
            }
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

    use CarTraits;
}
