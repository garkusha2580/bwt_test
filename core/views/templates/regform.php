<?php
echo <<<html
<div class="conteiner">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 formBlock">
        <form role="form" action="/register/begin" method="post">
            <div class="form-group">
                <label for="login">Enter your Login here</label>
                <input name="login" required="" placeholder="Login" id="Login" class="form-control" type="text">
            </div>
            <div class="form-group">
                 <label for="Email">Enter your Email here</label>
                <input name ="email"  required="" placeholder="Email" id="Email" class="form-control" type="email">
            </div>
            <div class="form-group">
                 <label for="Pass">Enter your Pass here</label>
                <input name="pass"  required="" placeholder="Password" id="Pass" class="form-control" type="text">
            </div>
             <input type="submit" class="btn btn btn-primary" value="Register">
        </form>
            </div>
</div>
html;
