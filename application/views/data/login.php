<section class="login-clean" style="width: 100%;height: 100%;font-style: italic;background: rgb(255,255,255);">
    <form method="post" action="<?php echo base_url() ?>Data/login_validation">
        <h2 class="visually-hidden">Login Form</h2>
        <div class="illustration"><img src="assets/img/logo.png" style="width: 150px;"></div>
        <div class="mb-3"><input class="form-control" id="username" name="username" placeholder="username" required></div>
        <div class="mb-3"><input class="form-control" id="password" type="password" name="password" placeholder="password" required></div>
        <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" style="background: rgb(244,144,71);color: rgb(0,0,0);font-weight: bold;">Log In</button>
        <?php echo $this->session->flashdata('error') ?>
        </div><a class="forgot" onclick="forgot()">Forgot your email or password?</a>
    </form>
</section>

<script>
    function forgot()
    {
        alert("contact your administrator");
    }
</script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>