function one($a,$b)
{
    $c = range($a,$b);
    $c = implode($c);
    $arr = str_split($c);
    return array_count_values($arr)[1];
}
