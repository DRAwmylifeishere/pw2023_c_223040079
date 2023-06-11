<?php

define('BASE_URL', '/pw2023_223040079/kuliah/peetemuan9/');
function dd($values)
{
  echo "<pre>";
  var_dump($values);
  echo ("</pre>");
  die();
};

function uriIs($uri)
{
  return ($_SERVER["REQUEST_URI"] === BASE_URL . $uri) ? 'active' : '';
}
