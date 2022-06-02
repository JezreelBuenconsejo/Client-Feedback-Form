
<div class="row register-form">
    <div class="col-md-8 offset-md-2">
        <form class="custom-form" method="post" action="<?php echo base_url() ?>Data/register">
            <h1>Front Desk Account Registration</h1>
            <div class="row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Name </label></div>
                <div class="col-sm-6 input-column"><input class="form-control" name="fname" id="fname" type="text" required></div>    
            </div>
            <div class="row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Username</label></div>
                <div class="col-sm-6 input-column"><input class="form-control" name="username" id="username" type="text" required></div>
            </div>
            <div class="row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Password </label></div>
                <div class="col-sm-6 input-column"><input class="form-control" onkeyup="myFunction()" name="password" id="password" type="password" required></div>
            </div>
            <div class="row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label"   for="repeat-pawssword-input-field">Repeat Password </label></div>
                <div class="col-sm-6 input-column"><input class="form-control"  onkeyup="myFunction()" name="confirm_password" id="confirm_password" type="password" required><span id='message'></span></div>
            </div><button class="btn btn-light submit-button" type="submit" id="submit" name="submit">Register</button>
            
        </form>
        <?php echo $this->session->flashdata('message') ?>
        <?php echo $this->session->flashdata('error') ?>
    </div>
</div>

<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<script>
function myFunction()
{
    var pass = document.getElementById("password").value;
    var confirm = document.getElementById("confirm_password").value;
    if(pass == confirm)
    {
        document.getElementById("submit").disabled = false;
        document.getElementById("message").innerHTML = "";
    }
    else if(pass != confirm)
    {
        document.getElementById("submit").disabled = true;
        document.getElementById("message").innerHTML = "Password doesn't match";
    }
}
</script>
