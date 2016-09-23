<?php
require dirname(__DIR__) . '/config/bootstrap.php';

debug($_SERVER['PATH_INFO']);

// $test = [];
//
// $friends = [
//   ['name' => 'Manoj', 'age' => 25, 'movie' => 'Jatra'],
//   ['name' => 'Gaurav', 'age' => 24, 'movie' => 'Dagadi Chawl'],
//   ['name' => 'Abhijit', 'age' => 26, 'movie' => 'Megamind'],
//   ['name' => 'Rohan', 'age' => 25, 'movie' => 'Jatra'],
//   ['name' => 'Sandeep', 'age' => 24, 'movie' => 'Dagadi Chawl'],
//   ['name' => 'Sumit', 'age' => 26, 'movie' => 'Megamind'],
// ];
//
//
// foreach ($friends as $friendsKey => $friend) {
//   $request = new Request();
//   foreach ($friend as $key => $value) {
//     $request[$key] = $value;
//   }
//   $test[$friendsKey] = $request;
//
// }
//
//
// var_dump(json_encode($test));
// var_dump($test[0]->name);
