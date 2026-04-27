<?php
class Example
{

    private bool $status;
    private int $numStudents;

    public function __construct(
        private string $name,
        private string $topic,
    ) {
        $this->numStudents = 22;
        $this->status = true;
        echo __FILE__ . ': ' . __METHOD__ . '(linea:' . __LINE__ . "): se ha ejecutado correctamente.\n";
    }
    public function setName(string $name): void
    {
        $firstName = $this->name;
        $this->name = $name;
        echo __FILE__ . ': ' . __METHOD__ . '(linea:' . __LINE__ . "): $firstName -> $name\n";
    }
    public function setNumStudents(int $num): void
    {
        $firstNum = $this->name;
        $this->numStudents = $num;
        echo __FILE__ . ': ' . __METHOD__ . '(linea:' . __LINE__ . "): $firstNum -> $num\n";
    }
    public function setTopic(string $topic): void
    {
        $firstTopic = $this->topic;
        $this->topic = $topic;
        echo __FILE__ . ': ' . __METHOD__ . '(linea:' . __LINE__ . "): $firstTopic -> $topic\n";
    }
    public function __invoke(): void
    {
        $this->status = !$this->status;
        echo __FILE__ . '/' . __METHOD__ . '(linea:' . __LINE__ . "): " . $this->__toString();
    }
    public function __debugInfo()
    {
        return [
            'Decription' => $this->__toString(),
        ];
    }
    public function __toString(): string
    {
        $status = $this->status ? "activo" : "inactivo";
        return "Hola soy un(a) $this->name, tengo $this->numStudents estudiantes registrados y aculmente me en encuentro $status.\nMi temario es: $this->topic\n";
    }
}
