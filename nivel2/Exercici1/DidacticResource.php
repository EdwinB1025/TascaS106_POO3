<?php

class DidacticResource
{
    private ?Topic $topic;
    private ?ResourceType $resourceType;
    public string $log = "";

    public function __construct(
        private string $name,
        string $topicName,
        string $ResouceName,
        private string $url,

    ) {
        $topicName = strtolower($topicName);
        $ResouceName = strtolower($ResouceName);
        $this->topic = Topic::tryFrom($topicName);
        $this->resourceType = ResourceType::tryFrom($ResouceName);
        switch (true) {
            case $this->topic === null:
                $this->log = "\n" . __FILE__ . ': ' . __METHOD__ . '(linea:' . __LINE__ . "): tema: $topicName incorrecto, intenta:\n" . Topic::caseNames() . "\n";
                break;
            case $this->resourceType === null:
                $this->log = __FILE__ . ': ' . __METHOD__ . '(linea:' . __LINE__ . "): recurso: $ResouceName incorrecto, intenta:\n" . ResourceType::caseNames() . "\n";
        }
    }
    public function setName(string $name): void
    {
        $firstName = $this->name;
        $this->name = $name;
        $this->log = "\n" . __FILE__ . ': ' . __METHOD__ . '(linea:' . __LINE__ . "): $firstName -> $name\n";
    }
    public function setUrl(string $url): void
    {
        $firstUrl = $this->url;
        $this->url = $url;
        $this->log = "\n" . __FILE__ . ': ' . __METHOD__ . '(linea:' . __LINE__ . "): $firstUrl -> $url\n";
    }
    public function setTopic(string $TopicName): void
    {
        if (Topic::tryFrom(strtolower($TopicName)) === null) {
            $this->log = "\n" . __FILE__ . ': ' . __METHOD__ . '(linea:' . __LINE__ . "): Tema: $TopicName tema incorrecto, intenta:\n" . Topic::caseNames() . "\n";
        } else {
            $this->topic = Topic::tryFrom(strtolower($TopicName));
        }
    }
    public function setResource(string $ResouceName): void
    {
        if (ResourceType::tryFrom(strtolower($ResouceName)) === null) {
            $this->log = "\n" . __FILE__ . ': ' . __METHOD__ . '(linea:' . __LINE__ . "): Recurso: $ResouceName incorrecto, intenta:\n" . ResourceType::caseNames() . "\n";
        } else {
            $this->resourceType = ResourceType::tryFrom(strtolower($ResouceName));
        }
    }
    public function __debugInfo()
    {
        return [
            'name' => $this->name,
            'topic' => $this->topic->name,
            'resourcType' => $this->resourceType->name,
            'url' => $this->url,
        ];
    }
}
