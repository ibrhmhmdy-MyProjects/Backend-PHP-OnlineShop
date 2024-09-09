<?php require_once "inc/header.php" ?>


<div class="container">
  <div class="row">
    <!-- Section: Design Block -->
    <section class="text-center">


      <div class="card mx-4 mx-md-5 my-5 shadow-5-strong">
        <div class="card-body py-5 px-md-5">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
              <h2 class="fw-bold mb-5">Sign up</h2>
              <form action="" method="">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div data-mdb-input-init class="form-outline">
                      <label class="form-label" for="form3Example1">First name</label>
                      <input type="text" id="form3Example1" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div data-mdb-input-init class="form-outline">
                      <label class="form-label" for="form3Example2">Last name</label>
                      <input type="text" id="form3Example2" class="form-control" />
                    </div>
                  </div>
                </div>

                <!-- Email input -->
                <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Email address</label>
                  <input type="email" id="form3Example3" class="form-control" />
                </div>

                <!-- Password input -->
                <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="form3Example4">Password</label>
                  <input type="password" id="form3Example4" class="form-control" />
                </div>
                <div class="row">
                  <div class="col-md-6">
                    I have My Account <a href="./Login.php">Login</a>
                  </div>
                  <div class="col-md-6">
                    <!-- Submit button -->
                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">
                      Sign up
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Design Block -->
  </div>
</div>