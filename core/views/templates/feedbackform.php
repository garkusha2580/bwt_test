<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 16.05.2017
 * Time: 22:30
 */

echo <<<html
<script src='https://www.google.com/recaptcha/api.js'></script>
<script type="text/javascript" src=${ROOT}"/core/views/libs/js/captchaVerify.js"></script>
<div class="container">
    <form action="/adding" method="post">
        <div class="form-group">
            <label for="title">Enter the your name here</label>
            <input type="text" minlength="5" required="" class="form-control" id="title" placeholder="name" name="name">
    </div>
    <div class="form-group">
            <label for="title">Enter your Email here</label>
            <input type="email" required="" class="form-control" id="title" placeholder="email" name="email">
    </div>
        <div class="form-group">
      
            <label for="body">Enter the Text Here</label>
            <textarea id="body" minlength="30" required class="form-control" placeholder="Enter Some Text" name="body"></textarea>
        </div>
        <div class="form-group">
        <label for="captchaBlock">Checking</label>
       <div id="captchaBlock" class="g-recaptcha" data-sitekey="6LcjyCIUAAAAAKajTr_T8eGLHohKqCTJjymLPfEJ"></div>
       </div>
        <input type="submit" class=" btn btn-primary"  value="Post">
    </form>
</div>
html;
