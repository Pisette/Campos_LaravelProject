
 
  @section('title') About Us @endsection
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            height: 100%;
        }

        body {
          
            background-color: #0b0b28;
            color: #ffffff;
            overflow-x: hidden;

        }

        html::-webkit-scrollbar {
            width: 8px;
        }

        html::-webkit-scrollbar-thumb {
            background-color: #3b82f6;
            border-radius: 10px;
        }

        /* Hero Section */
        .hero {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: left;
            padding: 0 5%;
            position: relative;
            z-index: 0;
            
        }

        .hero-content {
            max-width: 40%;
        }

        .hero-content h1 {
            font-size: 4rem;
            font-weight: 600;
            white-space: nowrap;
            margin-top: -100px;
            margin-left: -80px;
        }

        .hero-content h1 span {
            background: linear-gradient(90deg, #3b82f6, #c084fc);
            -webkit-background-clip: text;
            color: transparent;


        }

        .hero-content p {
            font-size: 1.5rem;
            margin-left: -80px;
            margin-top: 10px;
            color: #90caf9;
        }

        .social-icons {
            margin-top: 20px;
            margin-left: -80px;
            display: flex;
            gap: 15px;
        }

        .social-icons a {
            text-decoration: none;
            color: #ffffff;
            font-size: 1.5rem;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background-color: #0b0b28;
            transition: box-shadow 0.3s, background-color 0.3s;
        }

        .social-icons a:hover {
            box-shadow: 0 0 15px #3b82f6;
            background-color: #3b82f6;
        }

        .hero-illustration {
            max-width: 600px;
            position: absolute;
            right: 10%;
            top: 20%;
        }

        .hero-illustration img {
            width: 100%;
            filter: drop-shadow(0px 5px 5px #0e4caf);
        }

        /* Background Animation */
        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background-color: #0b0b28;
            background: radial-gradient(#0b3d91, #0b0b28);
            overflow: hidden;
        }

        .background span {
            position: absolute;
            display: block;
            background: #ffffff;
            width: 4px;
            height: 4px;
            box-shadow: 0px 0px 5px 1px #ffffff;
            border-radius: 50%;
        }

        /* Floating Snowflake Animation */
        @keyframes float {
            0% {
                transform: translateY(0px) translateX(0px) rotate(0deg);
            }

            50% {
                transform: translateY(50vh) translateX(20px) rotate(180deg);
            }

            100% {
                transform: translateY(100vh) translateX(-20px) rotate(360deg);
            }
        }

        .snowflake {
            animation: float linear infinite;
        }

        /* Introduce Section */
        .introduce {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            height: 70vh;
            padding-left: 15%;
            padding-right: 15%;
            background-color: #0b0b28;
            box-shadow: 0px 25px 30px 6px rgba(0, 0, 0, 0.45);
            text-align: justify;
            color: #fff;
        }

        .introduce h2 {
            font-size: 2.5rem;
            font-weight: 600;

        }

        .introduce h2 span {
            background: linear-gradient(90deg, #3b82f6, #c084fc);
            -webkit-background-clip: text;
            color: transparent;
        }

        .introduce p {
            margin-top: 15px;
            font-size: 1.2rem;
            line-height: 1.8;
            color: #e4d9ff;
        }

        .introduce img {
            width: 370px;
            border-radius: 50%;
            border: 2px solidrgb(43, 83, 175);
            filter: drop-shadow(0 5px 5px rgba(192, 132, 252, 1));
        }

        .introduce-content {
            max-width: 60%;
        }


        .introduce p i {
            margin-right: 8px;
            color: #c084fc;
        }

        .know-me {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 50px 10%;
            background-color: rgb(11, 11, 40, 0.7);
            color: #fff;
            min-height: 100vh;

        }

        .know-me-content {
            max-width: 55%;
        }

        .know-me h2 {
            font-size: 3rem;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .know-me h2 span {
            background: linear-gradient(90deg, #3b82f6, #c084fc);
            -webkit-background-clip: text;
            color: transparent;
        }

        .know-me p {
            font-size: 1.1rem;
            margin-bottom: 20px;
            line-height: 1.6;
            color: #e4d9ff;
        }

        .activities {
            list-style: none;
            padding-left: 0;
            font-size: 1.1rem;
            line-height: 2;
        }

        .activities li {
            display: flex;
            align-items: center;
        }

        .know-me blockquote {
            font-style: italic;
            margin-top: 20px;
            color: #c084fc;
            font-size: 1.2rem;
        }

        .know-me-image img {
            width: 370px;
            border-radius: 50%;
            border: 2px solid #c084fc;
            filter: drop-shadow(0 5px 5px rgba(192, 132, 252, 1));
        }
        @keyframes fade-out {
            0% {
                opacity: 1;
                transform: scale(1);
            }

            100% {
                opacity: 0;
                transform: scale(2);
            }
        }
    </style>


<body>



    @extends('layout.generallayout')

   
        <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
        <script>
            AOS.init(); // Initialize AOS
        </script>

       

@section('content')
        <!-- Background -->
        <div class="background"></div>

        <!-- Hero Section -->
        <section id="hero" class="hero">
            <div class="hero-content">
                <h1>Hi There! 👋<br>I'M <span class="gradient-text">John Doe</span></h1>
                <p>Software Developer | Tech Enthusiast</p>
                <div class="social-icons">
                    <a href="https://github.com/johndoe" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="https://linkedin.com/in/johndoe" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="https://instagram.com/johndoe" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </section>

        <!-- Introduce Section -->
        <section id="introduce" class="introduce">
            <div class="introduce-content" data-aos="fade-right" data-aos-duration="1000">
                <h2>LET ME <span>INTRODUCE</span> MYSELF</h2>
                <p>
                    I am a passionate software developer with expertise in web and mobile app development.
                </p>
            </div>
            <div class="introduce-image" data-aos="fade-right" data-aos-duration="1000">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVxf8-QUEFaun4cs36JF5DKjc6XhuszgaYxA&s" alt="Avatar">
            </div>
        </section>

        <section id="know-me" class="know-me">
            <div class="know-me-image" data-aos="fade-left" data-aos-duration="1000">
                <img src="https://www.shutterstock.com/image-photo/cat-making-many-projects-260nw-2438809995.jpg" alt="Developer Illustration">
            </div>

            <div class="know-me-content" data-aos="fade-left" data-aos-duration="1000">
                <h2>KNOW MORE ABOUT <span>ME</span></h2>
                <p>
                    Hi Everyone, I am <span style="color: #c084fc;">John Doe</span> from
                    <span style="color: #c084fc;">San Francisco, USA</span>.<br>
                    My career objective is to build impactful and scalable software solutions.
                </p>
                <p>Some other activities that I love to do!</p>
                <ul class="activities">
                    <li><i class="fas fa-code"></i> &nbsp; Coding</li>
                    <li><i class="fas fa-music"></i> &nbsp; Playing Guitar</li>
                    <li><i class="fas fa-gamepad"></i> &nbsp; Gaming</li>
                </ul>
            </div>
        </section>

        @endsection

