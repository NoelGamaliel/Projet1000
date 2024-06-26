<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <title>NDtech - Consulting </title>
</head>
<body class="">
    <main class="container">
        <?php
            include 'header.php';
        ?>
		<br><br><br>
		
        <!-- hero section -->
        <section class="boxContainer">
            <div class="hero">
                <h1>Welcome to ND - Technologie...</h1>

                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque perspiciatis deleniti repellendus?
                </p>

                <a href="contact.php">Contact As</a>
            </div>
        </section>
		<!-- hero section -->

        <!-- About me -->
        <section class="boxContainer">
            <div class="aboutAs" id="aboutas">
                <div class="aboutAsTitle">
                    <br><br><br><br>
                    <h2>About As</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore deserunt eveniet corporis.
                    </p>
                    
                    <a href="#" class="btnAboutAs">
                        read more...
                    </a>
                </div>
                <div class="about_As_Img">
                    <img src="./img/startup.jpg" alt="startup" srcset="">                    
                </div>

            </div>
        </section>
        <!-- About me -->

        <!-- All services -->
        <section class="boxContainer">
            <div class="allServices">
                <div class="cardTitle">
                    <h2>My Services</h2>
                </div>
                <div class="card_services" id="myservices">
                    <a href="#" class="card_font">
                        <i class="fa-solid fa-terminal"></i>
                        <h1>Developpement Web</h1>
                        <p>
                          The web developer is to design, create, and maintain websites and web applications, ensuring they are functional, user-friendly, and meet the objectives of the project. Web developers play a crucial role in bringing a website or web application to life by writing code, implementing features, and optimizing performance.
                        </p>
                    </a>

                    <a href="./marketing.php" class="card_font">
                        <i class="fa-solid fa-magnifying-glass-chart"></i>
                        <h1>Marketing Digital</h1>
                        <p>
                            So if you want digital marketing is to leverage online channels, platforms, and technologies to promote products, services, or brands, and to connect with a target audience. Digital marketing encompasses a wide range of strategies and tactics aimed at achieving various business objectives.
                        </p>
                    </a>

                    <a href="#" class="card_font">
                        <i class="fa-solid fa-computer"></i>
                        <h1>Network & System OS</h1>
                        <p>
                            Our mission of a network administrator is to ensure the smooth and efficient operation of an organization's computer networks. Network administrators play a critical role in managing, maintaining, and securing the network infrastructure to support the organization's communication and information technology needs.
                        </p>
                    </a>

                    <a href="#" class="card_font">
                        <i class="fa-solid fa-bezier-curve"></i>
                        <h1>Design Graphic</h1>
                        <p>
                            The graphic design is to visually communicate a message, idea, or concept through the use of visual elements, typography, and layout. Graphic designers play a crucial role in creating visual content that is not only aesthetically pleasing but also effectively conveys information and elicits a desired response from the audience.
                        </p>
                    </a>
                </div>
            </div>
        </section>
        <!-- All services -->

        <!-- Teams -->
        <section class="boxContainer">
            <div class="Teams">
                <h1>Teams Worker</h1>
                <p>
                  We're a highly motivated team, dedicated to solving our customers' needs in a timely manner. So much experience in the field has allowed us to be focused on the result.
                </p>
            </div>
        </section>
        <!-- End Teams -->
        <br><br><br>

        <!-- Technologies -->
        <section class="boxContainer">
            <div class="technologies">
                <h1>Our Technologies</h1>
                <p>
                    We use the new technologie usualy for satisf the want these customers.
                </p>
                <div class="technologies_groupe">
                    <div class="items_technologies">
                        <i class="fa-brands fa-microsoft"></i>
                    </div>
                    <div class="items_technologies">
                        <i class="fa-brands fa-linux"></i>
                    </div>
                    <div class="items_technologies">
                        <i class="fa-solid fa-network-wired"></i>
                    </div>
                    <div class="items_technologies">
                        <i class="fa-brands fa-html5"></i>
                    </div>
                    <div class="items_technologies">
                        <i class="fa-brands fa-css3-alt"></i>
                    </div>
                    <div class="items_technologies">
                        <i class="fa-brands fa-php"></i>
                    </div>
                    <div class="items_technologies">
                        <i class="fa-brands fa-js"></i>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Technologies -->

        <br><br><br>
        <!-- footer of my page -->
        <?php
            include 'footer.php';
        ?>
        <!-- End footer of my page -->
    </main>

    <script src="./script.js"></script>
</body>
</html>