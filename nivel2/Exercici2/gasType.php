<?php
require_once 'BackedTraits.php';

enum gasType: string
{
    case GASOLINE = 'gasolina';
    case DIESEL = 'queroseno';
    case HIDROGEN = 'hidrogeno';
    case ELECTRIC = 'electrico';

    use BackedString;
}
