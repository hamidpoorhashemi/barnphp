<?php
spl_autoload_register( function ($class_name) {
  $CLASSES_DIR = "barn/core/";
    $file = $CLASSES_DIR . $class_name . '.php';
    if( file_exists( $file ) ) include $file;
} );


spl_autoload_register( function ($class_name) {
  $CLASSES_DIR = "model/";
    $file = $CLASSES_DIR . $class_name . '.php';
    if( file_exists( $file ) ) include $file;
} );


?>
