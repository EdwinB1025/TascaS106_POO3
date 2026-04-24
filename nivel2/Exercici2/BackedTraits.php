<?php

trait CarTraits
{
    public function boost(): void
    {
        echo "Ha iniciado el tubooo!";
    }
}

trait BackedString
{
    private static function composeCases($case, int &$count): string
    {
        $count++;
        return "\n $count. Para {$case->name} -> usar  '$case->value'";
    }
    public static function caseNames(): string
    {
        $cases = static::cases();
        $count = 0;
        $names = array_map(
            function ($case) use (&$count) {
                return self::composeCases($case, $count);
            },
            $cases
        );
        return implode($names);
    }
}
