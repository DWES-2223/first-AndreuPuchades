<?php
function major(...$nums): int
{
    $major = $nums[0];
    foreach ($nums as $num) {
        if ($num > $major) {
            $major = $num;
        }
    }
    return $major;
}

function concatenar(...$paraules): string
{
    return implode(' ', $paraules);
}
?>