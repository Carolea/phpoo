<?php

require './Animal/Elephant.php';
require './Animal/Continent/Africa/Elephant.php';
require './Animal/Continent/Asia/Elephant';

use Animal\Continent\Africa\Elephant;
//use Animal\Continent\Africa
use Animal\Continent\Asia\Elephant as AsianElephant;

$elephant = new Elephant();