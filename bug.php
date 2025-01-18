```php
function calculate_sum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    $sum += $number;
  }
  return $sum;
}

$numbers = [1, 2, 3, '4']; //Notice the string '4'
$sum = calculate_sum($numbers);
echo "Sum: " . $sum; //Unexpected result due to type juggling
```