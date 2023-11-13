<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['user_id']) || !isset($_SESSION['role'])) {
   
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css\home_style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header class="header">
        <div class="paste-button">
            <button class="button">Menu &nbsp; ▼</button>
            <div class="dropdown-content">
                <a class="smooth-scroll" href="#recipes">Recipes</a>
                <a class="smooth-scroll" href="#PR">Products recomendations</a>
                <a class="smooth-scroll" href="#blog">Healty Hubb Blog</a>
                <a class="smooth-scroll" href="#FQ">Frequently asked questions</a>
                <a class="smooth-scroll" href="#cu">Contact Us</a>
            </div>
        </div>
        <script>
            document.querySelectorAll('.smooth-scroll').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
        
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        </script>
        <div class="logo">
            <img src="img\logoH.png">
        </div>
        <div class="perfil">
            <a href="profile_user.php">
                <img src="img\mujer.png">
            </a>
        </div>
    </header>

    <h2 class="bienvenida">¡Welcome to Healthy Hubb!</h2>
    


    <!--Primera parte-->
    <div id="recipes" class="recipes">
        <h1>Recipes</h1>
    </div>
    <section class="sw">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="imgBx">
                        <h1 class="nombre">Quinoa and Roasted Vegetable Salad </h1>
                        <img src="img\Salad1.jpg">
                    </div>
                    <div class="details">
                        <a href="recipe1.html">
                            <button class="button type1">
                                <span class="btn-txt">See</span>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="imgBx">
                        <h1 class="nombre">Lentil Soup </h1>
                        <img src="img\Salad2.jpg">
                    </div>
                    <div class="details">
                        <a href="recipe2.html">
                            <button class="button type1">
                                <span class="btn-txt">See</span>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="imgBx">
                        <h1 class="nombre">Grilled Salmon with Avocado Sauce</h1>
                        <img src="img\Salad3.jpg">
                    </div>
                    <div class="details">
                        <a href="recipe3.html">
                            <button class="button type1">
                                <span class="btn-txt">See</span>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="imgBx">
                        <h1 class="nombre">Chickpea and Cucumber Salad</h1>
                        <img src="img\Salad4.jpg">
                    </div>
                    <div class="details">
                        <a href="recipe4.html">
                            <button class="button type1">
                                <span class="btn-txt">See</span>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="imgBx">
                        <h1 class="nombre">Chicken Tacos with Yogurt Sauce</h1>
                        <img src="img\Salad5.jpg">
                    </div>
                    <div class="details">
                        <a href="recipe5.html">
                            <button class="button type1">
                                <span class="btn-txt">See</span>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="imgBx">
                        <h1 class="nombre">Fruit and Spinach Smoothie</h1>
                        <img src="img\Salad6.jpg">
                    </div>
                    <div class="details">
                        <a href="recipe6.html">
                            <button class="button type1">
                                <span class="btn-txt">See</span>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="imgBx">
                        <h1 class="nombre">Zucchini and Pesto Chicken Roll-Ups</h1>
                        <img src="img\Salad7.jpg">
                    </div>
                    <div class="details">
                        <a href="recipe7.html">
                            <button class="button type1">
                                <span class="btn-txt">See</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
    </section>
    </section>
    <script type="text/javascript" src="js\swiper.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            initialSlide: 1,
            loop: true,
            loopedSlides: 7,
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: '.swiper-pagination',
            },
        });
    </script>

    <!--Segunda parte-->
    <section class="secondPart">
        <div id="PR" class="PR">
            <h1>Products recomendations</h1>
        </div>
        <div class="swiper mySwiper container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-txt">
                        <h3>Lorem ipsum </h3>
                    </div>
                    <img src="img/1.jpg">
                    <a href="recipe2.html">
                        <button class="button type1">
                            <span class="btn-txt">See</span>
                        </button>
                    </a>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-txt">
                        <h3>Lorem ipsum </h3>
        
                    </div>
                    <img src="img/2.jpg">
                    <a href="recipe2.html">
                        <button class="button type1">
                            <span class="btn-txt">See</span>
                        </button>
                    </a>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-txt">
                        <h3>Lorem ipsum </h3>
                    </div>
                    <img src="img/3.jpg">
                    <a href="recipe2.html">
                        <button class="button type1">
                            <span class="btn-txt">See</span>
                        </button>
                    </a>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-txt">
                        <h3>Lorem ipsum </h3>
                    </div>
                    <img src="img/4.jpg">
                    <a href="recipe2.html">
                        <button class="button type1">
                            <span class="btn-txt">See</span>
                        </button>
                    </a>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-txt">
                        <h3>Lorem ipsum </h3>
                    </div>
                    <img src="img/5.jpg">
                    <a href="recipe2.html">
                        <button class="button type1">
                            <span class="btn-txt">See</span>
                        </button>
                    </a>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-txt">
                        <h3>Lorem ipsum </h3>
                    </div>
                    <img src="img/6.jpg">
                    <a href="recipe2.html">
                        <button class="button type1">
                            <span class="btn-txt">See</span>
                        </button>
                    </a>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-txt">
                        <h3>Lorem ipsum </h3>
                    </div>
                    <img src="img/7.jpg">
                    <a href="recipe2.html">
                        <button class="button type1">
                            <span class="btn-txt">See</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        grabCursor: true,
        loop: true, // Habilita el bucle infinito
        breakpoints: {
            991: {
                slidesPerView: 5
            }
        }
    });
        </script>
    </section>

            <section id="blog" class="blog">
                <h1>HEALTHY HUBB BLOG</h1>
                <section class="blog_texto">
                    <h2>Lorem ipsum dolor </h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam numquam debitis fugit quasi ex
                        alias reprehenderit assumenda maxime deserunt soluta nemo quidem, officiis ducimus dicta hic
                        corporis? Dicta, fugiat nam.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis natus obcaecati odio ea iste vero
                        in provident, ad eos voluptatum incidunt, deleniti distinctio minus, optio ullam iure nisi
                        consequatur dicta?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo maxime est neque soluta eveniet
                        enim totam quos culpa minus repudiandae facilis aut incidunt voluptas, vitae praesentium
                        explicabo, dolorem consequuntur tempore.
                    </p>
                    <h2>Lorem ipsum dolor </h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam numquam debitis fugit quasi ex
                        alias reprehenderit assumenda maxime deserunt soluta nemo quidem, officiis ducimus dicta hic
                        corporis? Dicta, fugiat nam.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis natus obcaecati odio ea iste vero
                        in provident, ad eos voluptatum incidunt, deleniti distinctio minus, optio ullam iure nisi
                        consequatur dicta?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo maxime est neque soluta eveniet
                        enim totam quos culpa minus repudiandae facilis aut incidunt voluptas, vitae praesentium
                        explicabo, dolorem consequuntur tempore.
                    </p>
                </section>
            </section>
            <!--BOTON-->
            <div class="buttons">
                <a>
                    <button>Envianos tu experiencia :></button>
                </a>
            </div>
            <section id="FQ" class="FQ">
                <div class="FQ_A">
                    <h1>FRECUENTLY ASKED QUESTIONS</h1>
                </div>
                <div class="contenedor">
                    <div class="caja">
                        <h2> How does online nutrition consultation work on your platform?</h2>
                        <p>Our platform offers a convenient and secure way to connect with qualified nutritionists. You
                            can start by creating an account, browsing through our nutritionist profiles, and selecting
                            a professional who fits your needs. Once you've chosen a nutritionist, you can schedule an
                            appointment, and your consultation will take place through our private chat system. It's
                            that easy!</p>
                    </div>
                    <div class="caja">
                        <h2>Is my personal information and data safe on your platform?</h2>
                        <p>Yes, your privacy and data security are our top priorities. We employ industry-standard
                            encryption and security measures to protect your information. We also comply with all
                            relevant data protection regulations to ensure your peace of mind.</p>
                    </div>
                    <div class="caja">
                        <h2>What qualifications do your nutritionists have?</h2>
                        <p>Our platform offers a convenient and secure way to connect with qualified nutritionists. You
                            can start by creating an account, browsing through our nutritionist profiles, and selecting
                            a professional who fits your needs. Once you've chosen a nutritionist, you can schedule an
                            appointment, and your consultation will take place through our private chat system. It's
                            that easy!
                        </p>
                    </div>
                    <div class="caja">
                        <h2>What types of nutrition services do you offer?</h2>
                        <p>Our nutritionists offer a wide range of services, including
                            but not limited to:</p>
                        <ol class="lista">
                            <li>Personalized dietary guidance</li>
                            <li> Weight management</li>
                            <li>Meal planning</li>
                            <li> Specialized diets (e.g., vegan, gluten-free)</li>
                            <li>Nutritional support for medical conditions</li>
                        </ol>
                    </div>
                </div>
            </section>
            <section id="cu" class="contenedor_u">
                <div class="tema">
                    <h2>CONTACT US</h2>
                    <p>Have questions or need assistance? Feel free to reach out to us at</p>
                </div>
                <ul>
                    <a href="https://www.facebook.com/" target="_blank">
                        <li style="--1:#a955ff;--j:#ea51ff;">
                            <span class="icon"><i class="fa fa-facebook"></i></span>
                            <span class="titulo">Facebook</span>
                            <link href="www.facebook.com">
                        </li>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank">
                        <li style="--1:#FFA9C6;--j:#F434E2;">
                            <span class="icon"><i class="fa fa-instagram"></i></span>
                            <span class="titulo">Instagram</span>
                        </li>
                    </a>
                    <a href="https://www.facebook.com/" target="_blank">
                        <li style="--1:#ff0000;--j:rgb(246, 202, 202);">
                            <span class="icon"><i class="fa fa-envelope-o"></i></span>
                            <span class="titulo">Email</span>
                            <link href="www.facebook.com">
                        </li>
                    </a>
                </ul>
            </section>
</body>
</html>