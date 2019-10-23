<?php

namespace TauxSF;

class Model
{
    public function getSupervisionRate(int $children): array
    {
        // Get rate
        $supervisionRate = array();

        // Total
        $leader = (int) ceil($children / 12);

        // Qualified
        $qualified = (int) ceil($leader / 2);

        // Unqualified max
        $unqualifiedMax = (int) ceil((20 * $leader) / 100);

        // 1 unqualified limit condition
        if ($leader == 3 || $leader == 4) {
            $unqualifiedMax = 1;
        }

        // No unqualified condition
        if (($leader / 2) == 1) {
            $unqualifiedMax = 0;
        }

        $unqualified = 0;

        while ($unqualified <= $unqualifiedMax) {
            // Trainee can not less than 0
            if (($leader - $qualified - $unqualified) < 0) {
                break;
            }

            $supervisionRate[] = array(
                'children' => $children,
                'director' => 1,
                'leader' => $leader,
                'qualified' => $qualified,
                'trainee' => $leader - $qualified - $unqualified,
                'unqualified' => $unqualified,
                'total' => $leader + 1,
            );

            $unqualified++;
        }

        return $supervisionRate;
    }
}
