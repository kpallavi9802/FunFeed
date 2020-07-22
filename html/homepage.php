<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>FunFeed-A video Streaming website</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!--linking CSS file-->
    <link rel="stylesheet" type=text/css href="../css/homepage.css">


    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
</head>

<body>

    <!-- Navigation starts here -->
    <?php require '../partial/_nav.php' ?>

    <!-- slider starts here -->
    <div id="carouselCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselCaptions" data-slide-to="1"></li>
            <li data-target="#carouselCaptions" data-slide-to="2"></li>
            <li data-target="#carouselCaptions" data-slide-to="3"></li>
            <li data-target="#carouselCaptions" data-slide-to="4"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img style="height:550px;" src="../asset/bg.png" class="d-block w-100" alt="background">
                <div class="carousel-caption d-none d-md-block">
                    <!-- login page start -->
                    
                    <!--ends here-->
                </div>
            </div>
            <div class="carousel-item ">
                <img style="height:550px;" src="../asset/asur.PNG" class="d-block w-100" alt="background">
                
            </div>
            <div class="carousel-item">
                <img style="height:550px;" src="../asset/broken .jpg" class="d-block w-100" alt="background">
            </div>
            <div class="carousel-item">
                <img style="height:550px;" src="../asset/girlcity.jpg" class="d-block w-100" alt="background">
            </div>
            <div class="carousel-item">
                <img style="height:550px;" src="../asset/13reasonsWhy.jpg" class="d-block w-100" alt="background">
            </div>

            <a class="carousel-control-prev" href="#carouselCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- slider ends here -->

    <!-- about section starts here -->
    <div class="container px-5 py-10 mx-auto">
        <div class="flex flex-wrap -mx-4 -mb-10 text-center">
            <div class="sm:w-1/2 mb-10 px-4">
                <div class="rounded-lg h-64 overflow-hidden">
                    <img alt="content" class="object-cover object-center h-full w-full" src="../asset/feature2.jpg">
                </div>
                <h2 class="title-font text-2xl font-large text-gray-900 mt-6 mb-3" style="color:yellowgreen;">Watch Anywhere Anywhere</h2>
                <p class="leading-relaxed text-base" style="color:white">Enjoy Unlimited fun,Drama,Romance,Suspense,Thriller based Series at
                    your own Place.</p>
                <a style="text-decoration:none" href="login.php"><button
                    class="flex mx-auto mt-6 text-white bg-green-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded">Getting
                    Started</button></a>
            </div>
            <div class="sm:w-1/2 mb-10 px-4">
                <div class="rounded-lg h-64 overflow-hidden">
                    <img alt="content" class="object-cover object-center h-full w-full" src="../asset/feature3.jpg">
                </div>
                <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3" style="color: yellowgreen;">See What's Next</h2>
                <p class="leading-relaxed text-base" style="color:white">Get updates with the upcoming Tv shows and Web Series,Just in one
                    click.</p>
                    <a style="text-decoration:none" href="login.php"><button
                    class="flex mx-auto mt-6 text-white bg-orange-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded">Join
                    Us For FREE</button></a>
            </div>
        </div>
    </div>
    <!-- <hr style="border: 2px solid white;width:50%;align:center;padding-left:100px;" /> -->
    <div id="about" class="container px-5 py-20 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
            <h2 style="font-size:40px" class="text-lg text-indigo-700 tracking-widest font-medium title-font mb-1" >About Us</h2>
            <h1 style="color:white" class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white-900">A Video Streaming Popular Website
            </h1>
            <p style="color:white" class="lg:w-2/3 mx-auto leading-relaxed text-base">Getting Bored??Here,We have some interesting to explore..Enjoy Our Channel and enjoy unlited Fun with Friends,Family and collegues from your own place.</p>
        </div>
        <div class="flex flex-wrap">
            <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200">
                <h2 style="color:#FFC312" class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Ease of access</h2>
                <p style="color:white" class="leading-relaxed text-base mb-4">Watch it once ,you'll stick to it alwasys</p>
                <a style="background-color:seagreen;color:black;height:30px;text-align:center;border-radius:2px" class="text-indigo-500 inline-flex items-center">Learn More
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
            <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200">
                <h2 style="color:#FFC312" class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Ease of use</h2>
                <p style="color:white" class="leading-relaxed text-base mb-4">Watch your Favourites Series with some clicks only</p>
                <a style="background-color:seagreen;color:black;height:30px;text-align:center;border-radius:2px" class="text-indigo-500 inline-flex items-center">Learn More
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
            <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200">
                <h2 style="color:#FFC312" class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Better Quality</h2>
                <p style="color:white" class="leading-relaxed text-base mb-4">It provides Better Audio and Video Quality for your better vision</p>
                <a style="background-color:seagreen;color:black;height:30px;text-align:center;border-radius:2px" class="text-indigo-500 inline-flex items-center">Learn More
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
            <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-Blue-200">
                <h2 style="color:#FFC312" class="text-lg sm:text-xl text-White-900 font-medium title-font mb-2">Enjoy 24 x 7</h2>
                <p style="color:white" class="leading-relaxed text-base mb-4">Enjoy anytime when you want to.</p>
                <a style="background-color:seagreen;color:black;height:30px;text-align:center;border-radius:2px" class="text-indigo-500 inline-flex items-center">Learn More
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
        <a style="text-decoration:none;" href="login.php"><button
            class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Join
            Today</button></a>
    </div>

    <!-- about section ends here -->

    

    <!-- footer starts here -->
    <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
        <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full"
                viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span style="color: #FFC312;" class="ml-3 text-xl">FunFeed</span>
        </a>
        <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2020
            FunFeed —
            <a style="text-decoration:none" href="homepage.php" class="text-gray-600 ml-1" rel="noopener noreferrer"
                target="_self">@UnlimitedFun</a>
        </p>
</div>
    <!-- footer ends here -->


    <!-- Optional JavaScript -->
    <script type="text/javascript" href="../js/particles.min.js"></script>
    <script type="text/javascript" href="../js/app.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>


</body>

</html>