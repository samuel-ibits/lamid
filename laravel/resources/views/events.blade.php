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
        <link rel="stylesheet" href="Componets/popup/popup.css">
    <link rel="stylesheet" href="./styles/insight.css">
    <link rel="stylesheet" href="./styles/event.css">
    <script>
    function book(can) {
        var id= can.id;
 document.getElementById('eventId').value= id;

        var amount= 'amount'+id; 
var amountval= document.getElementById(amount).value;      
document.getElementById('amount').value= amountval;
   
    
var eventNumber= 'eventNumber'+id; 
var seatNumberval= document.getElementById(seatNumber).value;      
document.getElementById('seatNumber').value= seatNumberval;
 
var eventName= 'eventName'+id; 
var eventNameval= document.getElementById(eventName).value;      
document.getElementById('eventName').value= eventNameval;

var fullname= 'fullname'; 
var fullnameval= document.getElementById(fullname).value;      
document.getElementById('fullname').value= fullnameval;

var email= 'email'; 

var emailval= document.getElementById(email).value;      
document.getElementById('email').value= emailval;

var status= 'status'+id; 

var statusval= document.getElementById(status).value;      
document.getElementById('status').value= statusval;

       }
   </script>
    
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
                    <a href="biz.html">BIZ</a>
                </li>
                <li class="p-5">
                    <a href="hcd.html">HCD</a>
                </li>
                <li class="p-5">
                    <a href="sde.html">SDE</a>
                </li>

                <li class="p-5 active-menu-item">
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
           <form method="POST" action="/bookEvents" class="flex flex-col w-full" style="gap: 1rem;">
           @csrf
           <input type="text" name="name" id="fulname" placeholder="fullname" class="p-2 ">
               <input type="text" name="email" id="email" placeholder="Email" class="p-2">
               <input type="text" name="eventId" value="" id="eventId"   style="display:none" class="p-2">
               <input type="text" name="eventName" value="" id="eventName"  style="display:none" class="p-2">

               <input type="text" name="amount"  value="" id="amount" placeholder="amount" class="p-2">
               <input type="text" name="seatNumber" value="" id="seatNumber" placeholder="seatNumber"  style="display:none" class="p-2">
               <input type="text" name="seatNumber" value="" id="status" placeholder="seatNumber"  style="display:none" class="p-2">
              
               <button type="submit" class="default-btn">Confirm</button>
           </form>

       </div>
   </div>


    <div class="event-page">
    <?php  $event = DB::table('events')->get(); ?>

    @foreach($event as $event)

        <div class="feed-card">
            <div class="feed-card-image">
                <img src="./assets/bg/bg-1.jpg" alt="">
            </div>

            <div class="card-text">
                <div class="">
                    <h1 class="mb-4">{{ $event->name }}</h1>
                    <p class="about-event">{{ $event->description }}</p>

                    <p class="my-4">{{ $event->time }}</p>

                </div>
                <input type="text" value="{{$event->name}}" id="eventName{{$event->id}}"  style="display:none" >
               <input type="text"   value="{{$event->price}}" id="amount{{$event->id}}"  style="display:none" >
               <input type="text" value="{{$event->bookedSeats}}" id="seatNumber{{$event->id}}"   style="display:none" >
     
                <button id="{{ $event->id }}"class="buy-btn w-full" onclick="book(this)" >Reserve seat</button>

            </div>
        </div>
        @endforeach

@forelse ($event as $plan)

@empty
<p>No events available</p>
@endforelse
        <div class="feed-card">
            <div class="feed-card-image">
                <img src="./assets/bg/bg-1.jpg" alt="">
            </div>

            <div class="card-text">
                <div class="">
                    <h1 class="mb-4">Event Title</h1>
                    <p class="about-event">Lorem ipsum dolor seat amet consectetur adipisicing elit. Id eius saepe
                        commodi repellat, blanditiis vero
                        provident consequatur consectetur consequuntur officiis? Molestias perferendis libero
                        e quia exercitationem perspiciatis.</p>

                    <p class="my-4">21 august 2022</p>

                </div>

                <button class="buy-btn w-full">Reserve seat</button>

            </div>
        </div>

        <div class="feed-card">
            <div class="feed-card-image">
                <img src="./assets/bg/bg-1.jpg" alt="">
            </div>

            <div class="card-text">
                <div class="">
                    <h1 class="mb-4">Event Title</h1>
                    <p class="about-event">Lorem ipsum dolor seat amet consectetur adipisicing elit. Id eius saepe
                        commodi repellat, blanditiis vero
                        provident consequatur consectetur consequuntur officiis? Molestias perferendis libero
                        e quia exercitationem perspiciatis.</p>

                    <p class="my-4">21 august 2022</p>

                </div>

                <button class="buy-btn w-full">Reserve seat</button>

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
