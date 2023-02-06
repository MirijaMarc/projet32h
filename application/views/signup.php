<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sign Up</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/bootstrap/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href=<?php echo base_url("assets/assets/css/Login-Form-Basic-icons.css"); ?>>

</head>

<body>
    <section class="position-relative py-4 py-xl-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 style="color: wheat;">Sign Up</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-5"  style="background-color: #ffffff0d;">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4"  style="background-color: lightseagreen;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20" fill="none">
                                    <path d="M8 9C9.65685 9 11 7.65685 11 6C11 4.34315 9.65685 3 8 3C6.34315 3 5 4.34315 5 6C5 7.65685 6.34315 9 8 9Z" fill="currentColor"></path>
                                    <path d="M8 11C11.3137 11 14 13.6863 14 17H2C2 13.6863 4.68629 11 8 11Z" fill="currentColor"></path>
                                    <path d="M16 7C16 6.44772 15.5523 6 15 6C14.4477 6 14 6.44772 14 7V8H13C12.4477 8 12 8.44771 12 9C12 9.55228 12.4477 10 13 10H14V11C14 11.5523 14.4477 12 15 12C15.5523 12 16 11.5523 16 11V10H17C17.5523 10 18 9.55228 18 9C18 8.44772 17.5523 8 17 8H16V7Z" fill="currentColor"></path>
                                </svg></div>
                            <form class="text-center" method="post">
                                <div class="mb-3"><input class="form-control" type="text" name="nom" placeholder="Username"></div>
                                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                                <div class="mb-3"><input class="form-control" type="text" name="birth"  onfocus="(this.type='date')" placeholder="Birth's date"></div>
                                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                                <div class="mb-3"><input class="form-control" type="password" name="passwordConf" placeholder="Confirm your password"></div>
                                <div class="mb-3"><button class="btn btn-primary d-block w-100" style="background-color: lightseagreen;" type="submit">Register</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="bg"></div>
    <div class="star-field">
    <div class="layer"></div>
    <div class="layer"></div>
    <div class="layer"></div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>