<title>@yield('title')</title>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: 'Quicksand', sans-serif;
    }

    /* Navbar */
    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 10%;
        background: linear-gradient(90deg, #00204a, #005792);
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
        z-index: 999;

    }

    /* Logo aligned left */
    .logo {
        font-size: 22px;
        font-weight: bold;
        color: white;
        text-transform: uppercase;
    }

    /* Navigation container */
    .nav-container {
        display: flex;
        align-items: center;
        gap: 50px;
        margin-left: auto;
        /* Pushes the navigation to the right */
    }

    .nav__links {
        list-style: none;
        display: flex;
        gap: 50px;
    }

    .nav__links a {
        position: relative;
        text-decoration: none;
        color: white;
        font-weight: bold;
        padding: 5px 0;
        transition: color 0.3s ease-in-out;
    }

    .nav__links a::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -2px;
        /* Adjusts distance from text */
        width: 100%;
        height: 2px;
        background-color: white;
        /* Change color if needed */
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.3s ease-in-out;
    }

    .nav__links a:hover {
        color: rgb(180, 231, 255);
    }

    .nav__links a:hover::after {
        transform: scaleX(1);
    }

    .cta {
        padding: 10px 18px;
        background-color: white;
        color: #3a86ff;
        border-radius: 20px;
        font-weight: bold;
        text-decoration: none;
        transition: background 0.3s ease-in-out;
    }

    .cta:hover {
        background-color: rgba(142, 185, 255, 0.84);
        color: white;
    }

    /* Responsive Navbar */
    @media only screen and (max-width: 800px) {
        header {
            flex-direction: column;
            text-align: center;
            padding: 15px 5%;
        }

        .nav-container {
            flex-direction: column;
            text-align: center;
            margin-left: 0;
        }

        .nav__links {
            flex-direction: column;
            padding-top: 10px;
        }

        .cta {
            margin-top: 10px;
        }
    }

    .main-footer {
        background: linear-gradient(90deg, #00204a, #005792);
        color: white;
        padding: 30px 0;
        font-family: 'Quicksand', sans-serif;
    }

    .footer-container {
        display: flex;
        justify-content: space-around;
        align-items: flex-start;
        flex-wrap: wrap;
        padding: 20px;
        max-width: 1200px;
        margin: auto;
    }

    .footer-logo h2 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .footer-links ul {
        list-style: none;
        padding: 0;
    }

    .footer-links ul li {
        margin-bottom: 8px;
    }

    .footer-links ul li a {
        color: white;
        text-decoration: none;
        transition: 0.3s;
    }

    .footer-links ul li a:hover {
        text-decoration: underline;
        color: rgb(180, 231, 255);
    }

    .footer-contact p {
        margin: 5px 0;
    }

    .footer-bottom {
        text-align: center;
        padding: 15px;
        border-top: 1px solid rgba(255, 255, 255, 0.3);
        margin-top: 20px;
    }
</style>


<body>
    @section('navigation')
    <div class="header"> 
        <div class="logo">MEOW</div>
        <div class="nav-container">
            <nav>
                <ul class="nav__links">
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li><a href="/aboutus">About Us</a></li>
                    <li><a href="/controll">Control Structure</a></li>
                    <li><a  >Employee List</a></li>
                </ul>
            </nav>
            <a class="cta" href="/contactus">Contact Us</a>
        </div>
    </div>
    @show

    @yield('content')

    @section('footer')

    
    <div class="main-footer">
        <div class="footer-container">
            <div class="footer-logo">
                <h2>MEOW</h2>
                <p>Bringing the best experience for you.</p>
            </div>
            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h3>Contact Us</h3>
                <p>Email: contact@yourwebsite.com</p>
                <p>Phone: +123 456 7890</p>
                <p>Address: 123 Street, City, Country</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Your Website | All Rights Reserved.</p>
        </div>
    </div>


    @show
</body>

<script>
    const ctxMonthlySales = document.getElementById('monthlySalesChart').getContext('2d');
    new Chart(ctxMonthlySales, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Sales',
                data: [120, 350, 180, 280, 200, 190, 290, 110, 210, 390, 270, 100],
                backgroundColor: 'rgba(59, 130, 246, 0.8)',
                borderRadius: 50,
                barThickness: 25, // Adjust bar width without changing height
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            return `Sales: ${tooltipItem.raw}`;
                        }
                    }
                }
            },
            scales: {
                x: {
                    grid: {
                        display: false
                    },
                    categoryPercentage: 0.10, // Adjust space between bars
                    barPercentage: 1.0 // Increase individual bar width
                },
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 100
                    }
                }
            }
        }
    });
</script>
<script>
    const ctxSales = document.getElementById('salesChart').getContext('2d');
    new Chart(ctxSales, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
            datasets: [{
                    data: [200, 180, 160, 170, 180, 175, 190, 210, 230],
                    backgroundColor: 'rgba(59, 130, 246, 0.2)',
                    borderColor: 'rgba(59, 130, 246, 1)',
                    fill: true,
                    tension: 0.3
                },
                {
                    data: [40, 50, 60, 55, 70, 65, 90, 100, 120],
                    backgroundColor: 'rgba(59, 130, 246, 0.1)',
                    borderColor: 'rgba(59, 130, 246, 0.8)',
                    fill: true,
                    tension: 0.3
                }
            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                x: {
                    grid: {
                        display: false
                    }
                },
                y: {
                    beginAtZero: true,
                    suggestedMax: 250
                }
            }
        }
    });
</script>
<!-- Bottom Section -->


<script>
    const ctx = document.getElementById('gaugeChart').getContext('2d');
    new Chart(ctx, {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [75.55, 24.45],
                backgroundColor: ['#6366F1', '#E5E7EB'],
                borderWidth: 0,
                cutout: '80%',
                rotation: -90,
                circumference: 180
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    enabled: false
                }
            }
        }
    });
</script>