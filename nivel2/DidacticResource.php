<?php

class DidacticResource
{
    private ?Topic $topic;
    private ?ResourceType $resourceType;

    public function __construct(
        private string $name,
        string $topicName,
        string $ResouceName,
        private string $url,

    ) {
        $this->topic = Topic::tryFrom(strtolower($topicName));
        $this->resourceType = ResourceType::tryFrom(strtolower($ResouceName));
        switch (true) {
            case $this->topic === null:
                echo __FILE__ . ': ' . __METHOD__ . '(linea:' . __LINE__ . "): tema incorrecto intenta\n";
                echo var_dump(Topic::cases());
                break;
            case $this->resourceType === null:
                echo __FILE__ . ': ' . __METHOD__ . '(linea:' . __LINE__ . "): tema incorrecto intenta" . ResourceType::cases() . "\n";
                echo var_dump(ResourceType::cases());
        }
    }
    public function setName(string $name): void
    {
        $firstName = $this->name;
        $this->name = $name;
        echo __FILE__ . ': ' . __METHOD__ . '(linea:' . __LINE__ . "): $firstName -> $name\n";
    }
    public function setUrl(string $url): void
    {
        $firstUrl = $this->url;
        $this->url = $url;
        echo __FILE__ . ': ' . __METHOD__ . '(linea:' . __LINE__ . "): $firstUrl -> $url\n";
    }
    public function setTopic(string $TopicName): void
    {
        if (Topic::tryFrom(strtolower($TopicName)) === null) {
            echo __FILE__ . ': ' . __METHOD__ . '(linea:' . __LINE__ . "): tema incorrecto intenta\n";
            echo var_dump(Topic::cases());
        } else {
            $this->topic = Topic::tryFrom(strtolower($TopicName));
        }
    }
    public function setResource(string $ResouceName): void
    {

        if (ResourceType::tryFrom(strtolower($ResouceName)) === null) {
            echo __FILE__ . ': ' . __METHOD__ . '(linea:' . __LINE__ . "): tema incorrecto intenta\n";
            echo var_dump(ResourceType::cases());
        } else {
            $this->resourceType = ResourceType::tryFrom(strtolower($ResouceName));
        }
    }
}
