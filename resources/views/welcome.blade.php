<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Music App</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            body {
                font-family: 'Figtree', sans-serif;
                margin: 0;
                padding: 0;
                background-color: #121212;
                color: white;
            }

            /* Header */
            .header {
                background-color: rgba(40, 44, 52, 0.8); /* Semi-transparent background */
                padding: 20px 40px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            }

            .header h1 {
                margin: 0;
                font-size: 36px;
                color: #61dafb;
                flex-grow: 1;
                text-transform: uppercase;
            }

            .header a {
                color: #61dafb;
                text-decoration: none;
                font-size: 18px;
                font-weight: 500;
                transition: color 0.3s;
                margin-left: 15px;
            }

            .header a:hover {
                color: #21a1f1;
            }

            /* Main Content */
            .content {
                padding: 60px 20px;
                text-align: center;
                background-image: url('{{ asset("images/m5.jpg") }}');
                min-height: 500px;
                background-size: cover;
                background-position: center;
                background-attachment: fixed;

            }

            .content h2 {
                font-size: 36px;
                margin-bottom: 15px;
                color: white;
                font-weight: 500;
            }

            .welcome-message {
                font-size: 22px;
                color: white;
                margin-top: 20px;
                font-weight: 300;
            }

            .buttons {
                margin-top: 30px;
            }

            .buttons a {
                display: inline-block;
                padding: 12px 25px;
                background-color: #61dafb;
                color: #333;
                text-decoration: none;
                border-radius: 30px;
                font-size: 16px;
                margin: 10px 20px;
                transition: background-color 0.3s;
            }

            .buttons a:hover {
                background-color: #21a1f1;
            }

            /* Footer */
            .footer {
                background-color: #282c34;
                color: white;
                padding: 20px 0;
                text-align: center;
            }

            .footer a {
                color: #61dafb;
                text-decoration: none;
                margin: 0 10px;
            }

            /* Responsive Design */
            @media (max-width: 768px) {
                .header {
                    flex-direction: column;
                    text-align: center;
                }

                .header h1 {
                    margin-bottom: 15px;
                }

                .header a {
                    margin-top: 10px;
                }
            }
        </style>
    </head>
    <body>
        <!-- Header -->
        <div class="header">
            <h1>Music App</h1>
            <nav>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                @endif
            </nav>
        </div>

        <!-- Main Content -->
        <div class="content">
            <h2>Welcome to Music App</h2>
            <div class="welcome-message">
                <p>Discover thousands of songs across all genres. Log in or register to start exploring!</p>
            </div>
            <!--<div class="buttons">
               <a href="{{ route('login') }}">Log in</a>
                <a href="{{ route('register') }}">Register</a>
            </div>-->
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>&copy; {{ date('Y') }} Music App. All rights reserved.</p>
            <p>
                <a href="#">Terms of Service</a> | 
                <a href="#">Privacy Policy</a>
            </p>
        </div>
    </body>
</html>
