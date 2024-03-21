<?php include('header.php'); ?>
<div class="autentication-bg">
   <div class="container-lg">
      <div class="row justify-content-center authentication authentication-basic align-items-center h-100">
         <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
            <div class="my-4 d-flex justify-content-center"> <a href="index.html"> <img src="assets/images/brand/icon-white.png" alt="logo"> </a> </div>
            <div class="card custom-card">
               <div class="card-body p-5">
                  <p class="h5 fw-semibold mb-2 text-center">Sign In</p>
                  <!-- <p class="mb-4 text-muted op-7 fw-normal text-center">Welcome back Jhon !</p> -->
                  <div class="row gy-3">
                     <div class="col-xl-12"> <label for="signin-username" class="form-label text-default">User Name</label> <input type="text" class="form-control form-control-lg" id="signin-username" placeholder="user name"> </div>
                     <div class="col-xl-12 mb-2">
                        <label for="signin-password" class="form-label text-default d-block">Password<a href="reset-password.html" class="float-end text-danger">Forget password ?</a></label> 
                        <div class="input-group"> <input type="password" class="form-control form-control-lg" id="signin-password" placeholder="password"> <button class="btn btn-light" type="button" onclick="createpassword('signin-password',this)" id="button-addon2"><i class="ri-eye-off-line align-middle"></i></button> </div>
                        <div class="mt-2">
                           <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="defaultCheck1"> <label class="form-check-label text-muted fw-normal" for="defaultCheck1"> Remember password ? </label> </div>
                        </div>
                     </div>
                     <div class="col-xl-12 d-grid mt-2"> <a href="index.html" class="btn btn-lg btn-primary">Sign In</a> </div>
                  </div>
                  <div class="text-center">
                     <p class="text-muted mt-3">Dont have an account? <a href="#" class="text-primary">Sign Up</a></p>
                  </div>
                  <div class="text-center my-3 authentication-barrier"> <span>OR</span> </div>
                  <div class="btn-list text-center"> <button type="button" aria-label="button" class="btn btn-icon btn-primary-transparent"> <i class="ri-facebook-fill"></i> </button> <button type="button" aria-label="button" class="btn btn-icon btn-primary-transparent"> <i class="ri-google-fill"></i> </button> <button type="button" aria-label="button" class="btn btn-icon btn-primary-transparent"> <i class="ri-twitter-fill"></i> </button> </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script>
    "use strict"

// for show password 
let createpassword = (type, ele) => {
    document.getElementById(type).type = document.getElementById(type).type == "password" ? "text" : "password"
    let icon = ele.childNodes[0].classList
    let stringIcon = icon.toString()
    if (stringIcon.includes("ri-eye-line")) {
        ele.childNodes[0].classList.remove("ri-eye-line")
        ele.childNodes[0].classList.add("ri-eye-off-line")
    }
    else {
        ele.childNodes[0].classList.add("ri-eye-line")
        ele.childNodes[0].classList.remove("ri-eye-off-line")
    }
}
</script>
<?php include('footer.php'); ?>
<style>
.app-header.header.sticky, footer.footer {
    display: none;
}
</style> 