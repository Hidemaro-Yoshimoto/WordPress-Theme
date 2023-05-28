<?php

$function_files = [
  'functions/init.php',
  'functions/post.php',
  'functions/breadcrump.php',
  '/libs/shortcode.php',
  '/libs/quicktag.php',
];

foreach ($function_files as $file) {
  if (file_exists(__DIR__) . $file) {
    locate_template($file, true, true);
  } else {
    trigger_error("`$file`ファイルが見つかりません", E_USER_ERROR);
  }
};

// add_filter('cfs_field_types', 'my_custom_field_type');
// function my_custom_field_type($field_types)
// {
//   $field_types['checkbox'] = get_theme_root() . 'functions/cfs_checkbox.php'; //cfs_checkbox.phpのURLを記述
//   return $field_types;
// };