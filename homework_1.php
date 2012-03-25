<?

function is_prime($x)
{
  for($i = 2; $i <= sqrt($x); $i++)
    if(($x % $i) == 0) return false;
  return true;
}

$number=$_GET["number"];
if(!is_numeric($number)) echo '<font color="red">The parameter is not a number!</font>';
else
{
  if($number < 0 || $number > 19999) echo '<font color="red">The parameter is not within the range [0,19999]!</font>';
  else
  {
    if(is_prime($number)) echo 'The number '.$number.' is prime!';
      else echo '<font color="blue">The number '.$number.' is NOT prime!</font>';
  }
}
?>