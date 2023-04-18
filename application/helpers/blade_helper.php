<?php

use Jenssegers\Blade\Blade;

function view($view, $data = []){
$views = VIEWPATH;
$canche = APPPATH . 'canche';
$blade = new Blade($views, $canche);

echo $blade->make($view, $data)->render();
}