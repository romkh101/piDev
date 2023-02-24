<?php

namespace App\Twig;
use App\Twig\AppExtension;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('time_diff', [$this, 'getTimeDiffInDays']),
        ];
    }

public function getTimeDiffInDays($date1, $date2)
{
    if (!$date1 instanceof \DateTime) {
        $date1 = new \DateTime($date1);
    }
    if (!$date2 instanceof \DateTime) {
        $date2 = new \DateTime($date2);
    }

    // Compare les dates pour déterminer laquelle est la plus récente
   

    $diff = $date2->diff($date1);

    if ($diff->days == 0) {
        return 'aujourd\'hui';
    } elseif ($diff->days == 1) {
        return 'hier';
    } else {
        return 'il y a ' . $diff->days . ' jours';
    }
}
}