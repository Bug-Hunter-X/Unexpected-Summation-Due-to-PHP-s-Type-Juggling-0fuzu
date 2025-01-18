```php
function calculate_sum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += (float)$number; //Explicit type casting for safety
    } else {
      //Handle non-numeric input appropriately, e.g., throw an exception
      throw new InvalidArgumentException('Array element is not numeric');
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4'];
try {
  $sum = calculate_sum($numbers);
echo "Sum: " . $sum; 
} catch (InvalidArgumentException $e) {
  echo "Error: " . $e->getMessage();
}
```