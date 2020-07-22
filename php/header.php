<?php
<nav class="navbar navbar-expand-md ">
            <a class="navbar-brand" href="#"
                style="color:#FFC312;font-size:30px;text-shadow: darksalmon;font-weight: bold;">FunFeed</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Explore</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">About Us</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" action="login.html">

                    <button class="btn btn-outline-success my-2 my-sm-0" id="loginbtn" onclick="clicked(loginForm)">login</button>
                 </form> 
                 

            </div>
        </nav>

?>