<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 21.05.2017
 * Time: 12:11
 */

foreach ($_POST["feed"]as$v):
echo <<<html
<div class="container">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
    <h2>${v["Title"]}</h2>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <p>${v["Body"]}</p>
    </div>
</div>
html;
endforeach;