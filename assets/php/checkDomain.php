<?php

  require_once('../assets/php/Unirest.php');

  // These code snippets use an open-source library. http://unirest.io/php
  $response = Unirest\Request::get("https://whois-v0.p.mashape.com/check?domain=dxweb.net",
  array("X-Mashape-Key" => "IBFYkKhyJbmshF56tvK2YhFJDMuAp1Ulqu0jsnzWvFYqtbO5UP", "Accept" => "application/json"));

  // decode object and convert to array
  $decode = json_decode($response->raw_body, true);
  $available = $decode['available'] == 1 || $decode['available'] == "true" ? true : false;

  if ($available){
    echo 'Yay! You found a domain that its available for your website!';
  } else { echo 'Unfortunately, that domain name is already registered by someone else. Please try again with another name.';}

?>
