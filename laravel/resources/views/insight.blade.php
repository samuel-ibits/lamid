<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/home.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./Componets/menu/menu.css">
    <link rel="stylesheet" href="./globalStyle.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="./styles/insight.css">

</head>

<body>
    <nav class="items-center w-screen place-content-around  text-sm nav-holder">
        <div class="top-div">
            <div class="logo-holder">
                <img src="./assets/logo/lamids.png" alt="Logo" class="w-full">
            </div>

            <button class="menu-icon openmenu">
                <i class="bi bi-list  text-white"></i>
            </button>
            <button class="menu-icon closemenu">
            <i class="bi bi-x text-white"></i>
            </button>
        </div>

        <div id="menuList" class="list-holder-top">
            <ul class="text-white flex place-content-around items-center menu-list">
                <li class="p-5 ">
                    <a href="index.html">Home</a>
                </li>
                <li class="p-5">
                    <a href="#">Talent management</a>
                </li>
                <li class="p-5">
                    <a href="events.html">Events</a>
                </li>
                <li class="p-5 active-menu-item">
                    <a href="insight.html">Insights</a>
                </li>
                <li class="p-5">
                    <a href="contactus.html">Contact</a>
                </li>
            </ul>

            <ul class="text-white flex items-center place-content-around menu-list">
               
                  <li class="p-3">
                  <a href='./adminPortal/index.blade.php'> <button class="outline-btn"> Admin</button> </a>
                </li>
                <li class="p-3">
                    <button class="filled-button">View all jobs</button>
                </li>

            </ul>

        </div>
    </nav>
    <div class="search-holder w-full p-10 flex justify-center  items-center">
        <button class="searchBtn p-1 rounded px-3 outline-none">Search</button>
        <input type="text" class="sm:w-2/3 p-1 rounded outline-none text-black px-3">
    </div>
    <div class="flex page-holder sm:mx-14">

        <div class="page-card-holder sm:w-3/5 sm:mx-10">
            <div class="card-outline w-full my-5  p-5 flex justify-around item-center rounded-lg">
                <img src="./assets/image1/na_may_29.png" class="image-one" alt="">
                <div class="flex justify-around item-center flex-col mx-3">
                    <p class="title-text">Tips to getting jobs</p>
                    <p class="details">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora accusantium porro fugiat
                        commodi incidunt inventore architecto! Incidunt sequi quibusdam a accusamus consequatur odio
                        earum neque. Suscipit animi quia natus porro?
                    </p>

                    <button class="defaultBtn-2 px-4 py-1">
                        Learn more
                    </button>
                </div>
            </div>
        </div>
        <div class="div-two sm:w-4/12 flex  flex-col">

            <ul class="pagination-component my-5">
                <li class="active-list">1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
                <li>5</li>
                <li>6</li>
            </ul>

            <div class="w-full">

                <div class="side-card">
                    <p class="side-text-decoration-header">Recent Post</p>

                    <ul class="list-disc mx-4">
                        <li>Hello world</li>
                        <li>Hello world</li>
                        <li>Hello world</li>
                        
                    </ul>
                </div>

                <div class="side-card">
                    <p class="side-text-decoration-header">Recent Post</p>

                    <ul class="list-disc mx-4">
                        <li>Hello world</li>
                        <li>Hello world</li>
                        <li>Hello world</li>
                        
                    </ul>
                </div>
                <div class="side-card">
                    <p class="side-text-decoration-header">Recent Post</p>

                    <ul class="list-disc mx-4">
                        <li>Hello world</li>
                        <li>Hello world</li>
                        <li>Hello world</li>
                        
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <footer class="flex w-full">
        <div>
            <img src="./assets/logo/lamids.png" alt="">
            <ul class="flex justify-around">
                <li>
                    <a href="http://www.facebook.com/"><i class='bx bxl-facebook'></i></a>
                </li>
                <li>
                    <a href="http://www.linkedin.com/"><i class='bx bxl-linkedin'></i></a>
                </li>
                <li>
                    <a href=""><i class="bi bi-instagram"></i></a>
                </li>
                <li>
                    <a href="http://www.twitter.com/"><i class="bi bi-twitter"></i></a>
                </li>
            </ul>
        </div>
    </footer>

    <div class="widget-holder">
        <div class="chat-text-holder">
            <div class="system">
                Hi
            </div>
    
            <div class="client">
                I'm Good today and you
            </div>
    
            <div class="client">
                I'm Good today and you, can you help me with my Lamid account.
            </div>
    
        </div>
        <div class="text-box-holder">
            <input type="text" placeholder="Text message">
            <button><i class="bi bi-arrow-up-short"></i></button>
        </div>
    </div>
    
    <div class="widget-toggler">
        <img src="./assets/whatsapp/images1.png" alt="">
    </div>
<script src="./Componets/menu/menu.js"></script>    
  <script src="./Componets/whatsappwidget/whatsappwidget.js"></script>
</body>

</html>