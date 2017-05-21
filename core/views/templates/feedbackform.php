<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 16.05.2017
 * Time: 22:30
 */
echo <<<html
<div class="container">
    <form action="/adding" method="post">
        <div class="form-group">
        <div class="row">
            <label for="title">Enter the Title Here</label>
            <input type="text" required="" class="form-control" id="title" placeholder="Title" name="title">
    </div>
    </div>
        <div class="form-group">
         <div class="row">
            <label for="body">Enter the Text Here</label>
            <textarea id="body" required class="form-control" placeholder="Enter Some Text" name="body"></textarea>
        </div>
        </div>
        <input type="submit" class=" btn btn-primary" value="Post">
    </form>
</div>
html;
