<?php

$fruits = [
  'apple' => 'Yummy',
  'banana' => 'I love banana',
  'grape' => 'wow, I love it',
  'plum' => 'nah not me'
];

$obj = new ArrayObject($fruits);
$it = $obj->getIterator();

echo "Iterating over: " . $obj->count() . " values".PHP_EOL;

## Iterated by using while loop
echo ''.PHP_EOL;
echo 'Iterated by using while loop '.PHP_EOL;
echo ''.PHP_EOL;

while ($it->valid()) {
  echo $it->key(). '=' .$it->current().PHP_EOL;
  $it->next();
}

echo ''.PHP_EOL;
echo 'Iterated by using foreach loop '.PHP_EOL;
echo ''.PHP_EOL;

foreach ($it as $key => $value) {
  echo $key. ' = ' .$value.PHP_EOL;
}
