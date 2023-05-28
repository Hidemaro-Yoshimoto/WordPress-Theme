<?php

// ショートコード追加
function hukidashi($attr, $content) { 
  $html = '<div class="box2">' . $content . '</div>';
  return $html;
}
add_shortcode('hukidashi', 'hukidashi');

function point_commentary($attr, $content) { 
  $input_ttl = '<div class="box3_ttl">Point</div>';
  $input_content = '<div class="box3">' . $content . '</div>';

  $html = $input_ttl . $input_content;
  return $html;
}
add_shortcode('point_commentary', 'point_commentary');
