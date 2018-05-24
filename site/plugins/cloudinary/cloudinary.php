<?php

function cloudinary($url, $params = array()) {

  if(is_object($url)) {
    $url = $url->url();
  }

  $params  = array_merge(['q' => 'auto'], $params);
  $options = [];

  foreach ($params as $key => $value) {
    $options[] = $key . '_' . $value;
  }

  $url     = trim(str_replace(url(), 'https://getkirby.com', $url), '/');
  $options = implode(',', $options);

  return 'https://res.cloudinary.com/getkirby/image/fetch/' . $options . '/' . $url;

}
