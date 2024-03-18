<?php include('header.php'); ?>

<!--app-content open-->
<div class="main-content pt-0 mt-0">
    <div class="side-app login-page ">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-6 d-none d-md-block login-page-img">
                        <!-- <a class="logo-horizontal " href="pending-neft.php">
                            <img src="assets/images/brand/logo-white.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src="assets/images/brand/logo-dark.png" class="header-brand-img light-logo1"
                                alt="logo">
                        </a> -->
                </div>
                <div class="col-lg-6 ps-0">
                    <div class="login-card card custom-card border-0 justify-content-center mb-0">
                        <div class="card-header border-0 common-heading line-heading">
                            <h1>Login</h1>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                            <label for="form-text" class="form-label fs-14 text-dark">Email*</label>
                            <input type="text" class="form-control" id="form-text" placeholder="mail@website.com">
                            </div>
                            <div class="mb-3">
                            <label for="form-password" class="form-label fs-14 text-dark">Password*</label>
                            <input type="password" class="form-control" id="form-password" placeholder="Min 8 character">
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="rememberCheck" checked="">
                                        <label class="form-check-label text-dark fw-bold" for="rememberCheck"> Remember me </label>
                                    </div>
                                </div>
                                <div class="col-auto">
                                        <a href="#" class="fw-bold text-primary text-decoration-none">Forgot Password?  </a>
                                </div>
                            </div>
                            <button class="btn btn-primary fw-bold btn-lg w-100 py-3 mt-3" type="submit">Submit</button>
                            <div class="login-footer text-muted mt-5 text-center">&copy;2024 Kias | All Right Reserved </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->

        </div>
        <!-- CONTAINER CLOSED -->

    </div>
</div>
<!--app-content closed-->
<?php include('footer.php'); ?>

<style>
.app-header.header.sticky, footer.footer {
    display: none;
}
</style>        
   
