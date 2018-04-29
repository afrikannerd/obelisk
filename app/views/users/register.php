<?php $this->setSiteTitle("Register"); ?>
<?php $this->start("body"); ?>
<div class="col col-xs-12 col-sm-8 col-md-5 col-lg-4 col-lg-offset-4">
    <form>
        <h3 class="text-center "><small>Sign Up</small></h3>
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter Name">
            
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1"><small>Keep Me Signed In</small></label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php $this->end(); ?>

