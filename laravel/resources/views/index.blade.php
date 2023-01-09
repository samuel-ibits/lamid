<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lamid Consulting </title>

    <link href="css/foundation.css" rel="stylesheet" type="text/css" />
    <link href="css/twentytwenty.css" rel="stylesheet" type="text/css" />
    <link href="css/foundation.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="Componets/menu/menu.css">
    <link rel="stylesheet" href="styles/home.css">
    <link rel="stylesheet" href="./globalStyle.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="Componets/popup/popup.css">
    <script>
    function buyplan(can) {
        var id= can.id;
        var amount= 'amount'+id; 

     var amountval= document.getElementById(amount).value;      
     document.getElementById('amount').value= amountval;
     document.getElementById('planid').value= id;
       }
   </script>


</head>

<body>
    <nav class="items-center w-screen place-content-around  text-sm nav-holder">
        <div class="top-div">
            <div class="logo-holder">
                <img src="assets/logo/lamids.png" alt="Logo" class="w-full">
            </div>

            <button class="menu-icon openmenu">
                <i class="bi bi-list  text-white"></i>
            </button>
            <button class="menu-icon closemenu">
            <i class="bi bi-x text-white"></i>
            </button>
        </div>


        <div id="menuList" class="list-holder-top ">
            <ul class="text-white flex place-content-around items-center menu-list">
                <li class="p-5 active-menu-item">
                    <a href="index.html">Home</a>
                </li>
                <li class="p-5">
                    <a href="biz.html">BIZ</a>
                </li>
                <li class="p-5">
                    <a href="hcd.html">HCD</a>
                </li>
                <li class="p-5">
                    <a href="sde.html">SDE</a>
                </li>

                <li class="p-5">
                    <a href="events.html">Events</a>
                </li>
                <li class="p-5">
                    <a href="insight.html">Insights</a>
                </li>
                <li class="p-5">
                    <a href="contactus.html">Contact</a>
                </li>
            </ul>

            <ul class="text-white flex items-center place-content-around menu-list">
               
                <li class="p-3">
                <a href='./adminindex.html'> <button class="outline-btn"> Admin</button> </a>
                </li>
                <li class="p-3">
                    <button class="filled-button">View all jobs</button>
                </li>

            </ul>

        </div>
    </nav>

    <div class="popup-holder">
       
        <div class="form-holder flex flex-col items-start">
        <span class='remove-pop-up cursor-pointer'><i class="bi bi-x"></i></span>
            <form method="POST" action="/buyPlans" class="flex flex-col w-full" style="gap: 1rem;">
            @csrf
            <input type="text" name="name" id="name" required placeholder="fullname" class="p-2 ">
                <input type="text" name="email" required id="email" placeholder="Email" class="p-2">
                <input type="text" name="planid" value="" id="planid" placeholder="planid"   style="display:none;" class="p-2">
                <input type="text" name="amount"  value="" id="amount" placeholder="amount" style="display:none;" class="p-2">

                <button type="submit" class="default-btn">Confirm</button>
            </form>

        </div>
    </div>

    <section class="section-1 flex  justify-around items-center ">
    <div class="sm:w-2/5 flex justify-around ">
       <p class='big-txt'>We source and <br> recruit visionary leaders <br> and talaents with a singular purpose.</p>

        <p class='big-txt-sub'>to Create continuous innovation and disruption for  customer advantage.</p>

        <button class='defaultBtn sm:px-7 sm:py-4'>join our job club</button>

    


        </div>
        <div class="w-1/3 flex justify-around items-center">
            <img src="assets/image1/na_may_29.png" class="image1" alt="">
        </div>
    </section>


    <p class="text-4xl bold mt-8">Business plans</p>
    <section class="w-full business-card-scroll-container  flex flex-col ">
        <section class="business-card-holder  h-full flex ">
     
            <div class="card flex flex-col justify-between"> 
                <div>
                 
                    <p class="card-Hatchling Plan">Business plan title </p>
                    <p class="discount">60% discount</p>
                    <ul class="card-list">
                        <li>plan priviledge</li>
                        <li>plan priviledge</li>
                        <li>plan priviledge</li>
                        <li>plan priviledge</li>
                        <li>plan priviledge</li>
                    </ul>
                </div>
                

                <div>
                    <p class="card-price">N 60,000</month</p>
                <input style="display:none;"   />
                    <button class="buy-btn w-full"  onclick="buyplan(this)" >Buy now</button>
                </div>
            </div>

            <div class="card flex flex-col justify-between"> 
                <div>
                 
                    <p class="card-Hatchling Plan">Business plan title </p>
                    <p class="discount">60% discount</p>
                    <ul class="card-list">
                        <li>plan priviledge</li>
                        <li>plan priviledge</li>
                        <li>plan priviledge</li>
                        <li>plan priviledge</li>
                        <li>plan priviledge</li>
                    </ul>
                </div>
                

                <div>
                    <p class="card-price">N 60,000</month</p>
                <input style="display:none;"   />
                    <button class="buy-btn w-full"  onclick="buyplan(this)" >Buy now</button>
                </div>
            </div>
     
            <div class="card flex flex-col justify-between"> 
                <div>
                 
                    <p class="card-Hatchling Plan">Business plan title </p>
                    <p class="discount">60% discount</p>
                    <ul class="card-list">
                        <li>plan priviledge</li>
                        <li>plan priviledge</li>
                        <li>plan priviledge</li>
                        <li>plan priviledge</li>
                        <li>plan priviledge</li>
                    </ul>
                </div>
                

                <div>
                    <p class="card-price">N 60,000</month</p>
                <input style="display:none;"   />
                    <button class="buy-btn w-full"  onclick="buyplan(this)" >Buy now</button>
                </div>
            </div>
            <div class="card flex flex-col justify-between"> 
                <div>
                 
                    <p class="card-Hatchling Plan">Business plan title </p>
                    <p class="discount">60% discount</p>
                    <ul class="card-list">
                        <li>plan priviledge</li>
                        <li>plan priviledge</li>
                        <li>plan priviledge</li>
                        <li>plan priviledge</li>
                        <li>plan priviledge</li>
                    </ul>
                </div>
                

                <div>
                    <p class="card-price">N 60,000</month</p>
                <input style="display:none;"   />
                    <button class="buy-btn w-full"  onclick="buyplan(this)" >Buy now</button>
                </div>
            </div>
            <div class="card flex flex-col justify-between"> 
                <div>
                 
                    <p class="card-Hatchling Plan">Business plan title </p>
                    <p class="discount">60% discount</p>
                    <ul class="card-list">
                        <li>plan priviledge</li>
                        <li>plan priviledge</li>
                        <li>plan priviledge</li>
                        <li>plan priviledge</li>
                        <li>plan priviledge</li>
                    </ul>
                </div>
                

                <div>
                    <p class="card-price">N 60,000</month</p>
                <input style="display:none;"   />
                    <button class="buy-btn w-full"  onclick="buyplan(this)" >Buy now</button>
                </div>
            </div>
            <div class="card flex flex-col justify-between"> 
                <div>
                 
                    <p class="card-Hatchling Plan">Business plan title </p>
                    <p class="discount">60% discount</p>
                    <ul class="card-list">
                        <li>plan priviledge</li>
                        <li>plan priviledge</li>
                        <li>plan priviledge</li>
                        <li>plan priviledge</li>
                        <li>plan priviledge</li>
                    </ul>
                </div>
                

                <div>
                    <p class="card-price">N 60,000</month</p>
                <input style="display:none;"   />
                    <button class="buy-btn w-full"  onclick="buyplan(this)" >Buy now</button>
                </div>
            </div>
            <div class="card flex flex-col justify-between"> 
                <div>
                 
                    <p class="card-Hatchling Plan">Business plan title </p>
                    <p class="discount">60% discount</p>
                    <ul class="card-list">
                        <li>plan priviledge</li>
                        <li>plan priviledge</li>
                        <li>plan priviledge</li>
                        <li>plan priviledge</li>
                        <li>plan priviledge</li>
                    </ul>
                </div>
                

                <div>
                    <p class="card-price">N 60,000</month</p>
                <input style="display:none;"   />
                    <button class="buy-btn w-full"  onclick="buyplan(this)" >Buy now</button>
                </div>
            </div>
            <div class="card flex flex-col justify-between"> 
                <div>
                 
                    <p class="card-Hatchling Plan">Business plan title </p>
                    <p class="discount">60% discount</p>
                    <ul class="card-list">
                        <li>plan priviledge</li>
                        <li>plan priviledge</li>
                        <li>plan priviledge</li>
                        <li>plan priviledge</li>
                        <li>plan priviledge</li>
                    </ul>
                </div>
                

                <div>
                    <p class="card-price">N 60,000</month</p>
                <input style="display:none;"   />
                    <button class="buy-btn w-full"  onclick="buyplan(this)" >Buy now</button>
                </div>
            </div>



           
        </section>
    </section>

    <section class="section-2 flex text-white justify-around items-center rounded-lg py-16 px-5">
        <div class="sm:w-1/2 flex flex-rol justify-center input-holder-div items-center ">
            <input type="search" placeholder="Search Job" class="p-5 w-4/5 mx-5 my-3 rounded outline-none text-black">
            <button class='search-btn p-5'> <i class="bi bi-search" style='color:#D3202E'></i></button>
         </div>
        <div class="sm:w-1/2">
            <p class="section-two-txt">
                Careers at  LAMID Consulting
            </p>
        </div>
    </section>

    <section class="section-3 rounded-lg">

        <div class="opac flex text-white justify-around items-center w-full h-full" style="opacity:.2">

        </div>

        <div class="flex text-white justify-around items-center w-full h-full">
            <p class="section-3-text text-center">
                Attracting and retaining the right talents at the right time <br> remains the key factor that can thwart
                your
                vision,
                and capacity <br> to compete on innovation, strategy, processes and all other <br> customer-focused
                solutions -
                it is the
                singular make or break <br> issue that can define any organization’s success.
            </p>
        </div>


    </section>

    <section class="section-4 text-white justify-around items-center rounded-lg py-5 px-5 my-10">
        <p class="headerText">Expore Categories</p>

        <p class="section-4-text sm:text-center">
            Recruitment is an essential function in the human capital planning and development of an organization. World
            class
            organizations and business management consultants cannot over emphasize the need to recruit right. It is a
            meticulous process of attracting the best ahead-of-the-curve candidates - scheduling interviews and hiring
            the
            most suitable people with set competencies that fit into the organization’s need and culture.
        </p>

        <ul class="flex justify-around items-center w-full my-0 text-center section-4-list">
            <li class="flex justify-center items-center  flex-col">
                <img src="assets/buld/Asset 1@3x.png" alt="">
                <p>Engineering</p>
            </li>
            <li class="flex justify-center items-center flex-col">
                <img src="assets/chat/Asset 3@3x.png" alt="">
                <p>Consultancy</p>
            </li>
            <li class="flex justify-center items-center flex-col">
                <img src="assets/customerCare/Asset 1@3x.png" alt="">
                <p>Customer service</p>
            </li>
            <li class="flex justify-center items-center flex-col">
                <img src="assets/customerService//Asset 2@3x.png" alt="">
                <p>Customer service</p>
            </li>
        </ul>

        <button class="defaultBtn-2 sm:px-9 sm:py-5 ">
            See all opening
        </button>
    </section>

    <section class="section-5 rounded-lg text-black">
        <p class="big-black-txt text-black">Your Dream Jobs Are Waiting</p>
        <p class="section-5-text text-black">over 1 million interactions, 50,000 success <br> stories Make yours now.
        </p>

        <div class="my-4">
            <button class="outline-btn text-black sm:p-6 sm:px-16">
                Search jobs
            </button>
            <button class="filled-button text-white   sm:p-6 sm:px-16">
                Join our jobs club
            </button>
        </div>
    </section>

    <section class="section-4 text-white flex flex-col justify-around items-center rounded-lg py-16 px-5 sm:my-24">
        <p class="headerText text-center">Featured Jobs</p>
        <p class="section-4-text text-center">
            Know your worth and find the job that qualify your life
        </p>
        <button class="defaultBtn-2-outline px-9 py-5 ">
            Browse for jobs
        </button>
    </section>

    <section class="section-6 flex justify-around items-center">

        <div class="section-6-sub text-white sm:w-2/3 justify-around items-center">
            <div class="flex items-start">
                <p class="big-txt-sub-2 section-4-text my-8">We understand that there is a tightening supply of high
                    talent <br> personnel due to
                    the
                    increasing shortage of leadership, <br> entrepreneurial management and technical knowledge, despite
                    the
                    prevalent
                    high unemployment. <br><br> This is also a result of the rapid economic and technological changes
                    around the
                    world.</p>
            </div>

        </div>
        <div class="image1-holder-container sm:w-1/3 flex justify-around items-center">
            <div class="image1-holder">

            </div>
        </div>

    </section>


    <p class="text-4xl bold mt-8">Testimonials</p>
    <section class="w-full business-card-scroll-container flex flex-col">
        <section class="business-card-holder gap-2rem  items-center h-full flex ">

            <div class="row mx-4" style="width:17rem">
                <div class="h-full">
                    <div class="twentytwenty-container">
                        <img src="img/1_1.jpg" />
                        <img src="img/1_2.jpg" />
                    </div>

                    <div class="">
                        <p class="testimonial-text font-thin italic">
                            "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod assumenda, blanditiis
                            commodi
                            placeat quos alias debitis exercitationem doloremque quo. Odit nostrum id consequatur a
                            ipsa, libero excepturi numquam quod voluptatibus."</p>

                        <br>
                        <p class="testimonial-user-name text-red-500">John Doe</p>
                    </div>
                </div>
            </div>

            <div class="row mx-4" style="width:17rem">
                <div class="h-full">
                    <div class="twentytwenty-container">
                        <img src="img/1_1.jpg" />
                        <img src="img/1_2.jpg" />
                    </div>

                    <div class="">
                        <p class="testimonial-text font-thin italic">
                            "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod assumenda, blanditiis
                            commodi
                            placeat quos alias debitis exercitationem doloremque quo. Odit nostrum id consequatur a
                            ipsa, libero excepturi numquam quod voluptatibus."</p>

                        <br>
                        <p class="testimonial-user-name text-red-500">John Doe</p>
                    </div>
                </div>
            </div>

            <div class="row mx-4" style="width:17rem">
                <div class="h-full">
                    <div class="twentytwenty-container">
                        <img src="img/1_1.jpg" />
                        <img src="img/1_2.jpg" />
                    </div>

                    <div class="">
                        <p class="testimonial-text font-thin italic">
                            "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod assumenda, blanditiis
                            commodi
                            placeat quos alias debitis exercitationem doloremque quo. Odit nostrum id consequatur a
                            ipsa, libero excepturi numquam quod voluptatibus."</p>

                        <br>
                        <p class="testimonial-user-name text-red-500">John Doe</p>
                    </div>
                </div>
            </div>

            <div class="row mx-4" style="width:17rem">
                <div class="h-full">
                    <div class="twentytwenty-container">
                        <img src="img/1_1.jpg" />
                        <img src="img/1_2.jpg" />
                    </div>

                    <div class="">
                        <p class="testimonial-text font-thin italic">
                            "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod assumenda, blanditiis
                            commodi
                            placeat quos alias debitis exercitationem doloremque quo. Odit nostrum id consequatur a
                            ipsa, libero excepturi numquam quod voluptatibus."</p>

                        <br>
                        <p class="testimonial-user-name text-red-500">John Doe</p>
                    </div>
                </div>
            </div>

            <div class="row mx-4" style="width:17rem">
                <div class="h-full">
                    <div class="twentytwenty-container">
                        <img src="img/1_1.jpg" />
                        <img src="img/1_2.jpg" />
                    </div>

                    <div class="">
                        <p class="testimonial-text font-thin italic">
                            "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod assumenda, blanditiis
                            commodi
                            placeat quos alias debitis exercitationem doloremque quo. Odit nostrum id consequatur a
                            ipsa, libero excepturi numquam quod voluptatibus."</p>

                        <br>
                        <p class="testimonial-user-name text-red-500">John Doe</p>
                    </div>
                </div>
            </div>

            

           

          

        </section>
    </section>


    <footer class="flex w-full">
        <div>
            <img src="assets/logo/lamids.png" alt="">
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
        <img src="assets/whatsapp/images1.png" alt="">
    </div>
    <script src="Componets/menu/menu.js"></script>
    <script src="Componets/menu/menu.js
    "></script>
    <script src="Componets/whatsappwidget/whatsappwidget.js"></script>
    
    <script src="js/jquery.event.move.js"></script>
    <script src="js/jquery.twentytwenty.js"></script>
    <script>

        $(".buy-btn").click(function () {
            $(".popup-holder").fadeToggle('slow');
          });

           $(".remove-pop-up").click(function () {
            $(".popup-holder").fadeToggle('slow');
          });
          
          $(".popup-holder").hide(.0000005);

        $(function () {
            $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({
                default_offset_pct: 0.7
            });
            $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({
                default_offset_pct: 0.3,
                orientation: 'vertical'
            });
        });

    </script>
</body>

</html>
