<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="header-2">

        <nav class="bg-white py-2 md:py-4">
            <div class="container px-4 mx-auto md:flex md:items-center">

                <div class="flex justify-between items-center">
                    <a href="#" class="font-bold text-xl text-indigo-600">FWR</a>
                    <button class="border border-solid border-gray-600 px-3 py-1 rounded text-gray-600 opacity-50 hover:opacity-75 md:hidden" id="navbar-toggle">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>

                <div class="hidden md:flex flex-col md:flex-row md:ml-auto mt-3 md:mt-0" id="navbar-collapse">
                    <a href="#" class="p-2 lg:px-4 md:mx-2 text-white rounded bg-indigo-600">Home</a>
                    <a href="#" class="p-2 lg:px-4 md:mx-2 text-gray-600 rounded hover:bg-gray-200 hover:text-gray-700 transition-colors duration-300">About</a>
                    <a href="#" class="p-2 lg:px-4 md:mx-2 text-gray-600 rounded hover:bg-gray-200 hover:text-gray-700 transition-colors duration-300">Features</a>
                    <a href="#" class="p-2 lg:px-4 md:mx-2 text-gray-600 rounded hover:bg-gray-200 hover:text-gray-700 transition-colors duration-300">Pricing</a>
                    <a href="#" class="p-2 lg:px-4 md:mx-2 text-gray-600 rounded hover:bg-gray-200 hover:text-gray-700 transition-colors duration-300">Contact</a>
                    <a href="#" class="p-2 lg:px-4 md:mx-2 text-indigo-600 text-center border border-transparent rounded hover:bg-indigo-100 hover:text-indigo-700 transition-colors duration-300">Login</a>
                    <a href="#" class="p-2 lg:px-4 md:mx-2 text-indigo-600 text-center border border-solid border-indigo-600 rounded hover:bg-indigo-600 hover:text-white transition-colors duration-300 mt-1 md:mt-0 md:ml-1">Signup</a>
                </div>
            </div>
        </nav>

        <div class="bg-indigo-100 py-6 md:py-12">
            <div class="container px-4 mx-auto">

                <div class="text-center max-w-2xl mx-auto">
                    <h1 id="h1" class="text-3xl md:text-4xl font-medium mb-2">Get the header you needed for your awesome website.</h1>
                    <button id="start-btn" class="bg-indigo-600 text-white py-2 px-6 rounded-full text-xl mt-6">Get Started</button>
                    <div id="questions-container" class="mt-4 hidden">
                        <h3 class="text-gray-600 text-center">questions</h3>
                        <p id="question-number"></p>
                        <span class="font-bold text-red-500" id="timer"></span>
                        <div class="font-bold">
                            <label id="question-label"></label>
                            <div id="answers-container" class="text-gray-500 flex flex-col mt-4">
                                <div><input id="answer1" class="mr-2" type="checkbox"><label for="answer1" id="answer-one"></label></div>
                                <div><input id="answer2" class="mr-2" type="checkbox"><label for="answer2" id="answer-two"></label></div>
                                <div><input id="answer3" class="mr-2" type="checkbox"><label for="answer3" id="answer-three"></label></div>
                            </div>
                        </div>
                        <button id="next-btn" class="rounded bg-blue-500 hover:bg-blue-700 py-2 px-4 text-white mt-4">next</button>
                    </div>
                </div>

                <div class="md:flex md:flex-wrap md:-mx-4 mt-6 md:mt-12">

                    <div class="md:w-1/3 md:px-4 xl:px-6 mt-8 md:mt-0 text-center">
                        <span class="w-20 border-t-2 border-solid border-indigo-200 inline-block mb-3"></span>
                        <h5 class="text-xl font-medium uppercase mb-4">Fresh Design</h5>
                        <p class="text-gray-600">FWR blocks bring in an air of fresh design with their creative layouts and blocks, which are easily customizable</p>
                    </div>

                    <div class="md:w-1/3 md:px-4 xl:px-6 mt-8 md:mt-0 text-center">
                        <span class="w-20 border-t-2 border-solid border-indigo-200 inline-block mb-3"></span>
                        <h5 class="text-xl font-medium uppercase mb-4">Clean Code</h5>
                        <p class="text-gray-600">FWR blocks are the cleanest pieces of HTML blocks, which are built with utmost care to quality and usability.</p>
                    </div>

                    <div class="md:w-1/3 md:px-4 xl:px-6 mt-8 md:mt-0 text-center">
                        <span class="w-20 border-t-2 border-solid border-indigo-200 inline-block mb-3"></span>
                        <h5 class="text-xl font-medium uppercase mb-4">Perfect Tool</h5>
                        <p class="text-gray-600">FWR blocks is a perfect tool for designers, developers and agencies looking to create stunning websites in no time.</p>
                    </div>

                </div>

            </div>
        </div>

    </div>



    <script src="./js/app.js"></script>
</body>

</html>