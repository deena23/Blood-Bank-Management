<?php
$n=1;
function getName($n) {
    $characters = '+-';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $n; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
    $randomString = '';
}
echo "Result:".getName($n)."Ve\n";
if(getname($n)=='+')
{
    echo 'eligible <a href="doctorfun.php">Add</a>';
    $randomString='';
}
else
{
    echo 'Not Eligible For Donating Blood';
    $randomString='';
}
?>
