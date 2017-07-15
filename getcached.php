<?php

function getCached($url, $expires = 3600) {

  // Don't redeclare $kirby unless we need to
  if (!isset($kirby)) $kirby = kirby();

  // Define path to cached file
  $cachePath = $kirby->roots()->cache() . DS . str::slug($url) . '.txt';

  // Check for valid cached file
  if (f::isReadable($cachePath) and ((time() - f::modified($cachePath)) < $expires)) {
    return f::read($cachePath);
  }

  // Cached file is expired or doesn't exist; pull content from original source and save a new cache
  $content = f::read($url);
  f::write($cachePath, $content);
  return $content;
}

?>