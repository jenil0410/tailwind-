<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/demo.js') }}"></script>



</head>

<body>
    <header>
        <nav>
            <div class="container mx-auto py-6 max-md:py-5 max-lg:py-4 max-sm:py-[10px]">
                <div class="flex flex-wrap items-center">

                    <div
                        class="flex w-[233px] h-20 me-auto items-center max-md:w-48 max-xl:px-4 max-lg:w-[175px] max-sm:h-14">
                        <img class=""
                            src="https://www.thedentallounges.com/wp-content/uploads/2022/01/TDLBrandingMAIN.svg"
                            alt="">
                    </div>
                    <div
                        class="flex flex-wrap place-items-center space-x-2 w-[58%] max-2xl:w-[68%] max-xl:w-[54%] max-lg:w-[73%] max-sm:w-[28%] max-[376px]:w-[33%]">
                        <div class="">
                            <a class="bg-[#CEAB94] hover:bg-[#3B3E3E] text-white py-4 px-6 text-[18px] font-bold font-pop max-md:text-sm flex max-xl:text-[14px] max-lg:px-6 max-lg:py-3 max-sm:hidden"
                                href="tel:020 3034 4044"><i
                                    class="fa-solid fa-phone mr-1 place-items-center"></i>Wimbledon <span
                                    class="xl:block hidden">: 020 3034 4044</span></a>
                        </div>
                        <div>
                            <a class="bg-[#CEAB94] hover:bg-[#3B3E3E] text-white py-4 px-6 text-[18px] font-bold font-pop max-md:text-sm flex max-xl:text-[14px] max-lg:px-6 max-lg:py-3 max-sm:hidden"
                                href="tel:020 8879 7004"><i class="fa-solid fa-phone mr-1"></i>Earlsfield <span
                                    class="xl:block hidden">: 020 8879 7004</span></a>
                        </div>
                        <div>
                            <a class="bg-[#3B3E3E] hover:bg-[#CEAB94] text-white py-4 px-6 text-[18px] font-bold font-pop max-md:text-sm max-xl:text-[14px] max-lg:px-6 max-lg:py-3 max-sm:hidden"
                                href="#">BOOK APPOINTMENT</a>
                        </div>
                        <div>
                            <a href="#"
                                class="flex bg-[#CEAB94] px-[10px] py-[9px] text-[17px] text-white max-sm:block hidden"><i
                                    class="fa-solid fa-calendar-days"></i></a>
                        </div>
                        <div>
                            <button class="xl:hidden text-6xl font-medium flex items-center pb-3">&#8801;</button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="space-x-8 justify-center hidden max-sm:flex min-[376px]:space-x-4">
                <div class="">
                    <a class="bg-[#CEAB94] hover:bg-[#3B3E3E] text-white py-[8px] px-[10px] text-[12px] font-bold font-pop  flex "
                        href="tel:020 3034 4044"><i class="fa-solid fa-phone mr-1 place-items-center"></i>Wimbledon
                        <span class="xl:block hidden">: 020 3034 4044</span></a>
                </div>
                <div>
                    <a class="bg-[#CEAB94] hover:bg-[#3B3E3E] text-white py-[8px] px-[10px] text-[12px] font-bold font-pop flex"
                        href="tel:020 8879 7004"><i class="fa-solid fa-phone mr-1"></i>Earlsfield <span
                            class="xl:block hidden">: 020 8879 7004</span></a>
                </div>
            </div>
        </nav>
    </header>
    <section>
        <nav>
            <nav class=" bg-[#3B3E3E] xl:h-[60px] xl:block hidden">
                <div class="container mx-auto">
                    <div class="flex items-center justify-center xl:h-[60px]">
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline">
                                <a href="#"
                                    class="text-[#CEAB94] hover:bg-white font-semibold font-pop py-5 px-5 inline-flex items-center ">ABOUT
                                    US</a>

                                <div class="relative">
                                    <!-- Trigger button -->
                                    <button
                                        class=" text-[#CEAB94] hover:bg-white font-semibold font-pop py-5 px-5 inline-flex items-center">
                                        <span>TREATMENTS</span>
                                        <svg class="fill-current h-4 w-4 ml-2" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path d="M10 12l-6-6h12l-6 6z" />
                                        </svg>
                                    </button>

                                    <!-- Dropdown menu items -->
                                    <div class="absolute hidden bg-gray-100 text-gray-700 pt-1 shadow-lg">
                                        <a href="#"
                                            class="block px-4 py-2 text-sm capitalize hover:bg-blue-500 hover:text-white">Item
                                            1</a>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm capitalize hover:bg-blue-500 hover:text-white">Item
                                            2</a>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm capitalize hover:bg-blue-500 hover:text-white">Item
                                            3</a>
                                    </div>
                                </div>


                                <a href="#"
                                    class="text-[#CEAB94] hover:bg-white font-semibold font-pop py-5 px-5 inline-flex items-center">BEFORE
                                    & AFTER</a>

                                <div class="relative">
                                    <!-- Trigger button -->
                                    <button
                                        class="text-[#CEAB94] hover:bg-white font-semibold font-pop py-5 px-5 inline-flex items-center">
                                        <span>PRICING</span>
                                        <svg class="fill-current h-4 w-4 ml-2" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path d="M10 12l-6-6h12l-6 6z" />
                                        </svg>
                                    </button>

                                    <!-- Dropdown menu items -->
                                    <div class="absolute hidden bg-gray-100 text-gray-700 pt-1 shadow-lg">
                                        <a href="#"
                                            class="block px-4 py-2 text-sm capitalize hover:bg-blue-500 hover:text-white">Item
                                            1</a>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm capitalize hover:bg-blue-500 hover:text-white">Item
                                            2</a>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm capitalize hover:bg-blue-500 hover:text-white">Item
                                            3</a>
                                    </div>
                                </div>

                                <div class="relative">
                                    <!-- Trigger button -->
                                    <button
                                        class="text-[#CEAB94] hover:bg-white font-semibold font-pop py-5 px-5 inline-flex items-center">
                                        <span>PRACTICES</span>
                                        <svg class="fill-current h-4 w-4 ml-2" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path d="M10 12l-6-6h12l-6 6z" />
                                        </svg>
                                    </button>

                                    <!-- Dropdown menu items -->
                                    <div class="absolute hidden bg-gray-100 text-gray-700 pt-1 shadow-lg">
                                        <a href="#"
                                            class="block px-4 py-2 text-sm capitalize hover:bg-blue-500 hover:text-white">Item
                                            1</a>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm capitalize hover:bg-blue-500 hover:text-white">Item
                                            2</a>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm capitalize hover:bg-blue-500 hover:text-white">Item
                                            3</a>
                                    </div>
                                </div>


                                <a href="#"
                                    class="text-[#CEAB94] hover:bg-white font-semibold font-pop py-5 px-5 inline-flex items-center">BLOG</a>
                                <a href="#"
                                    class="text-[#CEAB94] hover:bg-white font-semibold font-pop py-5 px-5 inline-flex items-center">CAREERS</a>
                                <a href="#"
                                    class="text-[#CEAB94] hover:bg-white font-semibold font-pop py-5 px-5 inline-flex items-center">CONTACT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

        </nav>
    </section>

    <section>
        <div
            class="container mx-auto xl:py-[70px] lg:py-0 lg:pt-10 sm:pt-[30px] max-md:px-[15px] max-md:pt-[30px] max-md:pb-[10px]">
            <div class="text-center text-7xl font-Mistral max-lg:text-5xl max-md:text-4xl">
                <h1>Welcome To The Dental Lounge</h1>
            </div>
            <div
                class="text-center font-pop text-3xl px-[200px] font-light leading-[53px] text-[#3B3E3E] mb-4 xl:text-2xl xl:leading-10 sm:text-xl sm:px-[30px] sm:mb-5 max-md:text-sm max-md:px-0">
                <p>Our goal is to give you an attractive and healthy smile which is accomplished via coordinated care,
                    personalised treatment and outstanding oral health advice.</p>
            </div>

            <div class="flex mx-auto lg:mx-[15px] lg:mt-10 sm:mb-[15px] sm:py-0 max-lg:flex-wrap lg:flex-nowrap">
                <div
                    class="bg-[#3B3E3E] mx-[15px] pb-[30px] max-xl:mr-[10px] max-xl:ml-0 max-lg:mx-[10px] max-lg:mb-[30px] max-md:mx-[17px] max-md:mb-[15px]">
                    <div class="mb-[35px]">
                        <img src="https://www.thedentallounges.com/wp-content/uploads/elementor/thumbs/Finance-q49jq5xehsu5np4o7rhyz5d1cmh1lvijy5rvbyxubw.jpg"
                            alt="">
                    </div>

                    <div class="text-center text-xl font-pop mb-[35px] text-white font-semibold md:text-[16px]">
                        <span>Flexible Finance Options</span>
                    </div>
                    <div class="flex justify-center">
                        <button
                            class="text-center text-white font-semibold font-pop text-[18px] py-4 px-5 border-solid border-white border-2 hover:bg-[#CEAB94] hover:border-[#CEAB94] max-xl:text-sm">READ
                            MORE</button>
                    </div>
                </div>

                <div
                    class="bg-[#3B3E3E] mx-[15px] pb-[30px] max-xl:mr-[10px] max-xl:ml-0 max-lg:mx-[10px] max-lg:mb-[30px] max-md:mx-[17px] max-md:mb-[15px]">
                    <div class="mb-[35px]">
                        <img src="https://www.thedentallounges.com/wp-content/uploads/elementor/thumbs/Pricing-q49jq5xehsu5np4o7rhyz5d1cmh1lvijy5rvbyxubw.jpg"
                            alt="">
                    </div>

                    <div class="text-center text-xl font-pop mb-[35px] text-white font-semibold md:text-[16px]">
                        <span>Treatment Pricing</span>
                    </div>
                    <div class="flex justify-center">
                        <button
                            class="text-center text-white font-semibold font-pop text-[18px] py-4 px-5 border-solid border-white border-2 hover:bg-[#CEAB94] hover:border-[#CEAB94] max-xl:text-sm">SEE
                            DETAILS</button>
                    </div>
                </div>

                <div
                    class="bg-[#3B3E3E] mx-[15px] pb-[30px] max-xl:mr-[10px] max-xl:ml-0 max-lg:mx-[10px] max-lg:mb-[30px] max-md:mx-[17px] max-md:mb-[15px]">
                    <div class="mb-[35px]">
                        <img src="https://www.thedentallounges.com/wp-content/uploads/elementor/thumbs/LocationsHome-q49jq5xehsu5np4o7rhyz5d1cmh1lvijy5rvbyxubw.jpg"
                            alt="">
                    </div>

                    <div class="text-center text-xl font-pop mb-[35px] text-white font-semibold md:text-[16px]">
                        <span>Locations</span>
                    </div>
                    <div class="flex justify-center">
                        <button
                            class="text-center text-white font-semibold font-pop text-[18px] py-4 px-5 border-solid border-white border-2 hover:bg-[#CEAB94] hover:border-[#CEAB94] max-xl:text-sm">SEE
                            MORE</button>
                    </div>
                </div>

                <div
                    class="bg-[#3B3E3E] mx-[15px] pb-[30px] max-xl:mx-0 max-xl:ml-0 max-lg:mx-[10px] max-lg:mb-[30px] max-md:mx-[17px] max-md:mb-[15px]">
                    <div class="mb-[35px]">
                        <img src="https://www.thedentallounges.com/wp-content/uploads/elementor/thumbs/Gallery-q49jq5xehsu5np4o7rhyz5d1cmh1lvijy5rvbyxubw.jpg"
                            alt="">
                    </div>

                    <div class="text-center text-xl font-pop mb-[35px] text-white font-semibold md:text-[16px]">
                        <span>Before & After Gallery</span>
                    </div>
                    <div class="flex justify-center">
                        <button
                            class="text-center text-white font-semibold font-pop text-[18px] py-4 px-5 border-solid border-white border-2 hover:bg-[#CEAB94] hover:border-[#CEAB94] max-xl:text-sm">View
                            MORE</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="bg-[#E7D5C9]">
            <div class="container mx-auto pt-[130px] pb-[110px]">
                <div class="font-Mistral text-[80px] text-[#CEAB94] text-center font-normal">
                    Our Treatments
                </div>
            </div>
        </div>
    </section>


</body>

</html>
