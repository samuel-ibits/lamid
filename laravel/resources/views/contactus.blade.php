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
    <link rel="stylesheet" href="./styles/contactus.css">

</head>

<body>
    <nav class="items-center w-screen place-content-around  text-sm nav-holder">
        <div class="top-div">
            <div class="logo-holder">
                <img src="./assets/logo/lamids.png" alt="Logo" class="w-full">
            </div>

            <button class="menu-icon">
                <i class="bi bi-list  text-white"></i>
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
                <li class="p-5">
                    <a href="insight.html">Insights</a>
                </li>
                <li class="p-5  active-menu-item">
                    <a href="contactus.html">Contact</a>
                </li>
            </ul>

            <ul class="text-white flex items-center place-content-around menu-list">
                <li class="p-3">
                    <a href="#">Signin</a>
                </li>
                <li class="p-3">
                    <button class="outline-btn">Signin</button>
                </li>
                <li class="p-3">
                    <button class="filled-button">View all jobs</button>
                </li>

            </ul>

        </div>
    </nav>
    <div class="contact-us-top  w-full flex sm:flex-rol justify-center item-center" style="height: 70vh;">
        <div class="w-1/2  flex justify-center item-center flex-col p-10 sm:h-full">
            <p class="title-header sm:text-center">Contact us</p>
            <p class="normal-text sm:text-center">
                LAMID Consulting provides you with the necessary support <br> you need to grow and achieve the desired
                dream.
            </p>
        </div>
        <div class="w-1/2 hide-on-small-screen">
            <img src="./assets//contactUsimage/contactusimage.png" style="width:100;" alt="">
        </div>
    </div>
    <form method="POST" action="/contact" class="flex flex-col " style="gap: 1rem;">
     @csrf
    <div class="contact-holder flex flex-col justify-center item-center">
        <div class="flex sm:flex-rol my-3">
            <input type="text" placeholder="Name" name="name" class="rounded mr-5 w-2/3 p-4 text-black outline-none">
            <input type="text" placeholder="Email" name="email" class="rounded  w-1/2 p-4 outline-none text-black">
        </div>

        <input type="text" name="subject" placeholder="Subject" class="rounded  w-full mb-3 p-4 outline-none text-black">
        <textarea name="message" placeholder="Type your message" class="rounded  w-full mb-3 p-4 outline-none text-black" id=""
            cols="30" rows="10"></textarea>
    </div>

</form>
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