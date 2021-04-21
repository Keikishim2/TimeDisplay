<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$views = 0;
$visitors_file='count.php';

if(file_exists($visitors_file)){
    $views = (int)file_get_contents($visitors_file);
}
$views++;
file_put_contents($visitors_file, $views);

?>