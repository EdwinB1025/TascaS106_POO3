<?php
enum ResourceType: string
{
    use BackedString;

    case File = 'fichero';
    case Website = 'web';
    case Video = 'video';
}
