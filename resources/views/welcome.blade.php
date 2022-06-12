<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CRS - Michael Aggerholm</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
        <script type="text/javascript" src="../js/app.js"></script>
    </head>
    <body class="has-background-dark has-text-white-ter hero is-fullheight">
        <div class="container">
            <!-- Navbar Starts here -->
            <nav class="navbar is-dark px-3" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>

                <div id="navbarBasicExample" class="navbar-menu">
                    <div class="navbar-start">
                        <a class="navbar-item" href="/">
                            Home
                        </a>

                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link">
                                Vehicle
                            </a>

                            <div class="navbar-dropdown">
                                <a class="navbar-item" href="/vehicleBrands">
                                    Brands
                                </a>
                                <a class="navbar-item" href="/vehicleModels">
                                    Models
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="navbar-end">
                        <a class="navbar-item">
                            Sign up
                        </a>
                        <a class="navbar-item">
                            log in
                        </a>
                    </div>
                </div>
            </nav>

            <div class="content mt-5">

                <h1>Hello!</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                    molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                    numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga</p>

            </div>

        </div>
    </body>
</html>
