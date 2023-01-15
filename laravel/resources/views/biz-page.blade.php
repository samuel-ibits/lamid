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
            var id = can.id;
            var amount = 'amount' + id;

            var amountval = document.getElementById(amount).value;
            document.getElementById('amount').value = amountval;
            document.getElementById('planid').value = id;
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

    <div class="biz-section-1">
        <p class="big-text-white">Creating wealth for <br><span class="bold-text">socio-economic</span> transformation
        </p>
    </div>

    <section class="section-6 flex justify-around items-center my-6">

        <div class="section-6-sub text-white sm:w-2/3 justify-around items-center">
            <div class="flex items-start">
                <p class="big-txt-sub-2 section-4-text my-8">
                    We have developed Business Innovation Zone (BIZ), the first one-stop knowledge factory that produces
                    and nurtures Africa’s best entrepreneurs to deliver exceptional value on a digital marketplace –
                    BIZphere, which links sellers of goods and services with buyers.
                </p>
            </div>

        </div>
        <div class="image1-holder-container sm:w-1/3 flex justify-around items-center">
            <div class="image1-holder">
                <img src="img/img/happy-cheerful-business-people-posing-office-hallway.png" alt=""
                    class="w-full h-full">
            </div>
        </div>

    </section>

    <section class="section-6 flex justify-around items-center sm:my-6">
        <div class="image1-holder-container sm:w-1/3 flex justify-around items-center">
            <div class="image1-holder">
                <img src="img/img/happy-cheerful-business-people-posing-office-hallway.png" alt=""
                    class="w-full h-full">
            </div>
        </div>

        <div class="section-6-sub text-white sm:w-2/3 justify-around items-center">
            <div class="flex items-start">
                <p class="big-txt-sub-2 section-4-text my-8">
                    BIZ is bridging the wealth creation divide through affordable, bottom-line-oriented,
                    technology-enabled entrepreneurial knowledge management services, with financial access.
                </p>
            </div>

        </div>


    </section>
    <section class="section-6 flex justify-around items-center sm:my-6">

        <div class="section-6-sub text-white sm:w-2/3 justify-around items-center">
            <div class="flex items-start">
                <p class="big-txt-sub-2 section-4-text my-8">
                    Backed by our UNDP certification, we have shown leadership in successful enterprise creation and
                    expansion in Africa – 3000+ SMEs benefitted in over two decades.
                </p>
            </div>

        </div>
        <div class="image1-holder-container sm:w-1/3 flex justify-around items-center">
            <div class="image1-holder">
                <img src="img/img/happy-cheerful-business-people-posing-office-hallway.png" alt=""
                    class="w-full h-full">
            </div>
        </div>

    </section>

    <section class="section-6  my-6">

        <p class="big-text-white-title">Business Innovation <span class="thin">Zone</span></p>

        <p class="plain-text">
            Since inception, we have defined our clear range of expertise and decided to stick to doing what we know
            best, not to be all things to all people. Re-setting globalization to rightly integrate and position MSMEs
            and start-ups for wealth and job creation is what we do best. LAMID’s <br><br> The BIZ brands offer the
            combined benefits in business know-how, digital transformation, and a powerful communiity to huddle on, and
            leap frog to create real impact. <br><br> Grow your business with the BIZ brands.
        </p>

        <p class="important-Text">BEST (Business Extension Services & Tools)</p>
    </section>

    <div class="section-6  my-6 flex sm:flex-row justify-around gap-4">
        <div class="p-4 sm:w-1/2 plain-text">
            Since inception, we have defined our clear range of expertise and decided to stick to doing what we know
            best, not to be all things Access credit, growth finance and investors, and dominate markets with LAMID’s
            Business Expansion Strategy and Tools (BEST) – guaranteed to build capacity and trust in your structure,
            systems, and processes.
            <br><br>
            Using its digital capability, LAMID’s BEST creates a lean organization that executes
            all activities around only the customer, and uses innovative solutions to sustainably attract, and grow
            obsessive customers, enlarging your reach with all the benefits.
            <br><br>
            We curate a pathway for growth renewal and
            acceleration through: market research to explore viable opportunities, bankable business plans, marketing
            and branding, accounting and finance access, HR services, and inventory management.
            <br><br>
            LAMID’s BEST averts
            crisis, and rescues distressed businesses by diagnosing health challenges, backed by fresh innovation and
            hand-holding by a professional advisor pointing out how to dominate the competition.
            <br><br>
            You will be able to
            spend a decent time per cycle with your business analyst and counsellor, carefully selected, with the right
            skills and expertise, specially trained to work with you and your business, at nominal periodic retention
            fees.
            <br><br>


        </div>
        <div class="p-4 p-4 sm:w-1/2  plain-text">
            Book an appointment now. Our consultants can assist you in person, or via zoom.
            <br><br>
            To find out how we can help you access credit, and achieve consistent profit to grow and create impact,
            contact us now.to all
            people. Re-setting globalization to rightly integrate and position MSMEs and start-ups for wealth and job
            creation is what we do best. LAMID’s
            <br><br>
            The BIZ brands offer the combined benefits in business know-how,
            digital transformation, and a powerful communiity to huddle on, and leap frog to create real impact.
            <br><br>
            Grow your business with the BIZ brands.
        </div>


    </div>


    <div class="section-6  my-1 ">
        <p class="important-Text">Technologies</p>
    </div>

    <section class="section-6 flex justify-around items-center my-1">
        <div class="section-6-sub text-white w-full justify-around items-center">
            <div class="flex flex-col gap-4">
                <p class="strong-2">BIZspace</p>
                <p class="big-txt-sub-2 section-4-text my-4">
                    Provides a platform to meet, network, and exchange ideas and information for continuous innovation
                    and increased African SME B2B, B2C, trade and investment; backed by a state-of-the-art information
                    highway, and business management knowledge portal.
                </p>
            </div>
        </div>
    </section>
    <section class="section-6  my-6">

        <p class="big-text-white-title">Human <span class="thin">Capital</span></p>

        <p class="plain-text">
            Recruitment is an essential function in the human capital planning and development of an organization. It is
            a meticulous process of attracting the best ahead-of-the-curve candidates – scheduling interviews and
            hiring.
        </p>

        <div class="flex flex-row gap-8">
            <p class="important-Text">Training</p>
            <p class="important-Text">Recruitment</p>

        </div>
    </section>


    <div class="section-6  my-6 ">

        <p class="big-text-white-title"> Building bridges:<span class="thin"> Re-setting globalization for </span>social
            inclusion</p>
        <div class="section-6  my-6 flex sm:flex-row justify-around gap-4">
            <div class="p-4 sm:w-1/2 plain-text">
                BIZ is bridging the wealth creation divide using affordable, accessible, bottom-line-oriented
                entrepreneurial knowledge management services to create jobs with high growth-traction.
                <br><br>
                After credit
                access, the next challenge our SME clients face -unemployability – is tackled head-long, to retain
                African talents, and stem the relentless brain drain.
                <br><br>
                The BIZ brands have increased the potential for
                earning foreign income from exporting to new markets, with a clear pathway for making BIZ alumni
                dominate the African Free Continental Trade Area (AfTA).
                <br><br>
                BIZphere, our business linkage and information
                portal makes a rich array of products globally accessible, with a secure e-payment system driven by
                cutting edge technology.
                <br><br>
                Launch out and connect to join the BIZphere community now, click here.

            </div>
            <div class="p-4 p-4 sm:w-1/2  plain-text">
                Social Impact by Cooperatives 
                <br><br>
                Women & Youth Development
                <br><br>
                We have learnt that cooperative formation and
                development with entrepreneurial and financial management capacity are very strategic and intentional
                means of improving access into the middle and upper class; particularly access to the needed resources
                for improved economic activity and quality of life.
                <br><br>
                We facilitate the Sustainable Development Goals,
                (SDGs) with gender equality and women’s empowerment being crucial to accelerating overall national
                development. We tackle unemployability to retain young African talents, and stem the relentless brain
                drain. These strategies inform how we achieve real social inclusion.
                <br><br>
                LAMID’s 25 years+ impact enabling
                inclusive, sustainable human development adopts a private-sector-led multi-stakeholder approach using
                innovation, technology, trade and investment. It has created and accelerated several cooperatives owned
                and led by women and youths.
                <br><br>
                Our BIZ model has proven how members can successfully pool resources,
                access financing and investments to purchase goods and services, scale, and sustain growth to protect
                their interests for mutual gains.
                <br><br>
                We equip members with skills in cooperative management and business
                development as the first step in preparing and hand-holding them for successful business practice, and
                attractive financing making them own, and achieve their socio-economic transformation.
                <br><br>
                Niger Delta stakeholders are in consensus that the BIZ model has produced record-breaking and strengthened capacity
                for conflict prevention and management, improved civic participation, greater environmental and social
                governance with enhanced community livelihood.
            </div>
        </div>
    </div>

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
