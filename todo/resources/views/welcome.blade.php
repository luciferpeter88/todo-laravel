<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div style="background-image: url('https://images.unsplash.com/photo-1605184861733-be9f5814095e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=995&q=80')"
        class="relative min-h-screen bg-purple-100 backdrop-blur flex justify-center items-center bg-texture bg-cover py-28 sm:py-0">
        <div class="p-4 sm:p-8 flex-1 ">
            <div class="max-w-[420px] min-w-[320px] bg-white rounded-b-3xl mx-auto">
                <div class="relative h-auto">
                    <svg class="absolute -top-20 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path fill="#fff" fill-opacity="1"
                            d="M0,64L48,80C96,96,192,128,288,128C384,128,480,96,576,85.3C672,75,768,85,864,122.7C960,160,1056,224,1152,245.3C1248,267,1344,245,1392,234.7L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                        </path>
                    </svg>
                </div>
                <div class="px-10 pt-4 pb-8 rounded-3xl shadow-xl">
                    <div class="mx-auto text-center">
                        <h1 class="text-4xl text-gray-800">Register</h1>
                    </div>
                    <form action="" method="POST">
                        <div class="relative">
                            <input id="email" name="email" type="text"
                                class="peer w-full px-0.5 border-0 border-b-2 border-gray-300 placeholder-transparent outline-none py-1"
                                placeholder="">
                            <label for="email"
                                class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-purple-600 peer-focus:text-sm">Email
                            </label>
                        </div>
                        <div class="mt-10 relative">
                            <input id="password" type="password" name="password"
                                class="peer w-full px-0.5 border-0 border-b-2 border-gray-300 placeholder-transparent outline-none py-1"
                                placeholder="Password" />
                            <label for="password"
                                class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-purple-600 peer-focus:text-sm">Password
                            </label>
                        </div>

                        <button type="button"
                            class="w-full mt-14 py-4 text-lg text-white font-semibold text-center rounded-full bg-purple-500 transition-all hover:bg-purple-600 focus:outline-none">Sign
                            up</button>
                        <p class="text-center text-sm text-gray-400 mt-4">Have an account ? <a href="#"
                                class="font-semibold text-purple-600 hover:underline">Log in</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
