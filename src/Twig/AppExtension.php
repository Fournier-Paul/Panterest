<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{

    public function getFunctions(): array
    {
        return [
            new TwigFunction('pluralize', [$this, 'pluralize']),
        ];
    }

    public function pluralize(int $count, string $singulier, ?string $pluriel = null) : string
    {
        //$pluriel = $pluriel ?? $singulier . 's';
        $pluriel ??= $singulier . 's';
        $str = $count === 1 ? $singulier : $pluriel;
        return "$count $str";
    }
}
