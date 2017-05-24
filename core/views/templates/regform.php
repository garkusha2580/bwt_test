<?php
echo <<<html
<div class="conteiner">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 formBlock">
        <form role="form" action="/register/begin" method="post">
            <div id="loginPole" class="form-group">
                <label class="control-label" for="login">Enter your Login here</label>
                <input name="login" required="" placeholder="Login" id="Login" class="form-control" type="text" aria-describedby="errName">
                <span class="help-block" id="errName">This name was registered</span>
            </div>
            <div class="form-group">
                 <label for="Email">Enter your Email here</label>
                <input name ="email"  required="" placeholder="Email" id="Email" class="form-control" type="email">
            </div>
            <div class="form-group">
                 <label for="Pass">Enter your Pass here</label>
                <input name="pass"  required="" placeholder="Password" id="Pass" class="form-control" type="text">
            </div>
            
             <label for="">Check your Male</label>
              <div class="radio">
                 <label>
                  <input type='radio' name="male" value="Man">Man
                  </label>
                  </div>
                   <div class="radio">
                  <label>
                  <input type='radio' name="male" value="Woman">Woman
                    </label>
                    </div>
                    <div class="form-group">
                 <label for="Date">Enter your birth date</label>
                <input name="birth"  placeholder="date" id="date" class="form-control" type="date">
            </div>
             <input type="submit" class="btn btn btn-primary" value="Register">
        </form>
            </div>
</div>
html;
