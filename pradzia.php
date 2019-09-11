<?php declare(strict_types=1);
function sandauga (int $a, int $b): int {

    return $a * $b;
}
echo sandauga(2, 2);
echo sandauga(sandauga(3,3), 3);