<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- component -->
    <div>
        <div class="flex flex-col flex-auto flex-shrink-0 min-h-screen antialiased text-black bg-zinc-100 ">
            <?php
            include('./include/sidebar.php');

            ?>
            <div class="relative flex flex-col justify-center w-full h-full overflow-hidden antialiased text-gray-800 sm:py-12">
                <section class="text-white ">
                    <div class="max-w-screen-xl px-4 mx-auto sm:py-12 sm:px-6 lg:px-8">
                        <div class="max-w-lg mx-auto text-center">
                            <h2 class="text-3xl font-bold sm:text-4xl text-amber-400">Complaint Numbers</h2>

                            <!-- <p class="mt-4 text-gray-300">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur
                                aliquam doloribus nesciunt eos fugiat. Vitae aperiam fugit consequuntur
                                saepe laborum.
                            </p> -->
                        </div>

                        <div class="grid grid-cols-1 gap-8 mt-8 md:grid-cols-2 lg:grid-cols-3">
                            <a class="block p-8 transition bg-gray-800 border border-gray-800 shadow-xl rounded-xl hover:border-bg-amber-500/10 hover:shadow-amber-500/10" href="/services/digital-campaigns">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                    <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                </svg>
                                <?php

                                $date = date_default_timezone_set("Asia/Kolkata");



                                echo "The time is " . date("h:i:sa");



                                // 2012-07-05 10:43AM

                                ?>
                                <h2 class="mt-4 text-xl font-bold text-white">Complaints not Process yet</h2>

                                <p class="mt-1 text-sm text-gray-300">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo
                                    possimus adipisci distinctio alias voluptatum blanditiis laudantium.
                                </p>
                            </a>

                            <a class="block p-8 transition bg-gray-800 border border-gray-800 shadow-xl rounded-xl hover:border-bg-amber-500/10 hover:shadow-amber-500/10" href="/services/digital-campaigns">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                    <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                </svg>

                                <h2 class="mt-4 text-xl font-bold text-white">Complaints Status in process</h2>

                                <p class="mt-1 text-sm text-gray-300">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo
                                    possimus adipisci distinctio alias voluptatum blanditiis laudantium.
                                </p>
                            </a>

                            <a class="block p-8 transition bg-gray-800 border border-gray-800 shadow-xl rounded-xl hover:border-bg-amber-500/10 hover:shadow-amber-500/10" href="/services/digital-campaigns">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                    <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                </svg>

                                <h2 class="mt-4 text-xl font-bold text-white">Complaint has been closed</h2>

                                <p class="mt-1 text-sm text-gray-300">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo
                                    possimus adipisci distinctio alias voluptatum blanditiis laudantium.
                                </p>
                            </a>
                        </div>

                        <div class="max-w-lg mx-auto mt-8 text-center">
                            <h2 class="text-3xl font-bold sm:text-4xl text-amber-400 ">Requirement Numbers</h2>

                            <!-- <p class="mt-4 text-gray-300">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur
                                aliquam doloribus nesciunt eos fugiat. Vitae aperiam fugit consequuntur
                                saepe laborum.
                            </p> -->
                        </div>

                        <div class="grid grid-cols-1 gap-8 mt-8 md:grid-cols-2 lg:grid-cols-3">
                            <a class="block p-8 transition bg-gray-800 border border-gray-800 shadow-xl rounded-xl hover:border-bg-amber-500/10 hover:shadow-amber-500/10" href="/services/digital-campaigns">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                    <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                </svg>

                                <h2 class="mt-4 text-xl font-bold text-white">Requirement not Process yet</h2>

                                <p class="mt-1 text-sm text-gray-300">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo
                                    possimus adipisci distinctio alias voluptatum blanditiis laudantium.
                                </p>
                            </a>

                            <a class="block p-8 transition bg-gray-800 border border-gray-800 shadow-xl rounded-xl hover:border-bg-amber-500/10 hover:shadow-amber-500/10" href="/services/digital-campaigns">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                    <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                </svg>

                                <h2 class="mt-4 text-xl font-bold text-white">Requirement Status in process</h2>

                                <p class="mt-1 text-sm text-gray-300">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo
                                    possimus adipisci distinctio alias voluptatum blanditiis laudantium.
                                </p>
                            </a>

                            <a class="block p-8 transition bg-gray-800 border border-gray-800 shadow-xl rounded-xl hover:border-bg-amber-500/10 hover:shadow-amber-500/10" href="/services/digital-campaigns">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                    <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                </svg>

                                <h2 class="mt-4 text-xl font-bold text-white">Requirement has been closed</h2>

                                <p class="mt-1 text-sm text-gray-300">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo
                                    possimus adipisci distinctio alias voluptatum blanditiis laudantium.
                                </p>
                            </a>
                        </div>

                        <!-- <div class="mt-12 text-center">
                            <a href="#" class="inline-block px-12 py-3 text-sm font-medium text-white transition bg-pink-600 rounded hover:bg-pink-700 focus:outline-none focus:ring focus:ring-yellow-400">
                                Get Started Today
                            </a>
                        </div> -->
                    </div>
                </section>


            </div>
        </div>

</body>

</html>