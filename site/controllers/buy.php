<?php

function buyButton($license, $text, $attr = []) {
  return
    '<a data-fsc-action="Add,Checkout" ' . attr($attr) . ' data-fsc-item-path-value="kirby-2-' . $license . '" href="https://getkirby.onfastspring.com/kirby-2-' . $license . '">' .
      $text .
    '</a>';
}
