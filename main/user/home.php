<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />
    
    <title>Jewelry Shop</title>
 

  
   

</head>
<body>


    <?php
    include("./layout/header/header.php");
    ?>

    <div class="mt-20 p-2">
    <form>   
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
        <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-yellow-100 border border-white-300 rounded-lg bg-white-50 focus:ring-amber-500 focus:border-amber-500 dark:bg-orange-950 dark:border-white-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500" placeholder="Search Products, Categories ..." required>
        <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-amber-700 hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-amber-700 dark:hover:bg-amber-600 dark:focus:ring-amber-800">Search</button>
    </div>
    </form>
    </div>    

<div id="gallery" class="relative w-full m-2" data-carousel="slide" >
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item style="z-index: 1">
            <img src="https://media.istockphoto.com/id/1198714412/photo/bangles-made-of-gold.jpg?s=612x612&w=0&k=20&c=fvlLFQegczkC87aBXXuJli0XszW5O0DG_VBOKVXB2Lg=" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 " alt="">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active" style="z-index: 1">
            <img src="https://media.istockphoto.com/id/1276740597/photo/indian-traditional-gold-necklace.jpg?s=612x612&w=0&k=20&c=OYp1k0OVJObYq9hqVK_r6NwYa_W54km4nya1R-ovIUY=" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 " alt="">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item style="z-index: 1">
            <img src="https://media.istockphoto.com/id/1126858679/photo/ethnic-jewellery-in-low-light.jpg?s=612x612&w=0&k=20&c=_3mrKI_BxBtN4Sz4qRWfZaIcGi_yCrwlOGRKV5Faq7w=" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 " alt="">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item style="z-index: 1">
            <img src="https://images.unsplash.com/photo-1589674781759-c21c37956a44?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8cmluZ3N8ZW58MHwwfDB8fHwy" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 " alt="">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item style="z-index: 1">
            <img src="https://images.unsplash.com/photo-1641290748359-1d944fc8359a?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8ZWFyaW5nfGVufDB8MHwwfHx8Mg%3D%3D" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 " alt="">
        </div>
    </div>

    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>


<!-- category -->
<div class="container mx-auto">
        <h1 class="text-5xl italic text-center font-bold text-amber-800 m-8">Categories</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 m-4">
            <!-- Blog Post Card 1 -->
            <div class="max-w-sm bg-cover bg-center bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700"
                style="background-image: url('https://images.unsplash.com/photo-1600862754152-80a263dd564f?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzJ8fG5lY2tsYWNlfGVufDB8MHwwfHx8MA%3D%3D');">
                <a href="#">
                    <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">NECKLACE</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Explore necklaces</p>
                    <a href="#"
                        class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-amber-700 rounded-lg hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-300 dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">
                        Explore
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Blog Post Card 2 -->
            <div class="max-w-sm bg-cover bg-center bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700"
                style="background-image: url('https://media.istockphoto.com/id/1162902447/photo/fancy-designer-golden-earrings-pair-for-woman-fashion.jpg?s=612x612&w=0&k=20&c=nJz0NRqK9gaPOts9muQ7m1hZub7npHxrn9olzii6teA=');">
                <a href="#">
                    <img class="rounded-t-lg" src="/docs/images/blog/image-2.jpg" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">EARINGS</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Explore earrings</p>
                    <a href="#"
                        class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-amber-700 rounded-lg hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-300 dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">
                        Explore
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Blog Post Card 3 -->
            <div class="max-w-sm bg-cover bg-center bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700"
                style="background-image: url('https://media.istockphoto.com/id/865506324/photo/jewelry-ring-witht-big-blue-sapphir-on-black-coal-background.jpg?s=612x612&w=0&k=20&c=yRmzTQU8fyl_a6FNthYNHY9JLoTAhb5pQjELfDzd8Qs=');">
                <a href="#">
                    <img class="rounded-t-lg" src="/docs/images/blog/image-3.jpg" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">RINGS</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Explore rings</p>
                    <a href="#"
                        class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-amber-700 rounded-lg hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-300 dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">
                        Explore
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Blog Post Card 1 -->
            <div class="max-w-sm bg-cover bg-center bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700"
                style="background-image: url('https://images.unsplash.com/photo-1600862754152-80a263dd564f?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzJ8fG5lY2tsYWNlfGVufDB8MHwwfHx8MA%3D%3D');">
                <a href="#">
                    <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">NECKLACE</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Explore necklaces</p>
                    <a href="#"
                        class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-amber-700 rounded-lg hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-300 dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">
                        Explore
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Blog Post Card 2 -->
            <div class="max-w-sm bg-cover bg-center bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700"
                style="background-image: url('https://media.istockphoto.com/id/1162902447/photo/fancy-designer-golden-earrings-pair-for-woman-fashion.jpg?s=612x612&w=0&k=20&c=nJz0NRqK9gaPOts9muQ7m1hZub7npHxrn9olzii6teA=');">
                <a href="#">
                    <img class="rounded-t-lg" src="/docs/images/blog/image-2.jpg" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">EARINGS</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Explore earrings</p>
                    <a href="#"
                        class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-amber-700 rounded-lg hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-300 dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">
                        Explore
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Blog Post Card 3 -->
            <div class="max-w-sm bg-cover bg-center bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700"
                style="background-image: url('https://media.istockphoto.com/id/865506324/photo/jewelry-ring-witht-big-blue-sapphir-on-black-coal-background.jpg?s=612x612&w=0&k=20&c=yRmzTQU8fyl_a6FNthYNHY9JLoTAhb5pQjELfDzd8Qs=');">
                <a href="#">
                    <img class="rounded-t-lg" src="/docs/images/blog/image-3.jpg" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">RINGS</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Explore rings</p>
                    <a href="#"
                        class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-amber-700 rounded-lg hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-300 dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">
                        Explore
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Repeat similar structure for other cards -->

        </div>

        <!-- Our Best Sales -->
        <h1 class="text-5xl italic text-center font-bold text-amber-800 m-8">Our Best Sales</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 m-4">
            <!-- Product Card 1 -->
            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="p-8 rounded-t-lg" src="https://images.unsplash.com/photo-1641290748359-1d944fc8359a?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGVhcmluZ3xlbnwwfDB8MHx8fDA%3D"
                        alt="product image" />
                </a>
                <div class="px-5 pb-5">
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Gold Hoop Earrings with Diamonds</h5>
                    </a>
                    <div class="flex items-center mt-2.5 mb-5">
                        <!-- Rating stars and badge -->
                        <div class="flex items-center space-x-1 rtl:space-x-reverse">
                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    <!-- Add more stars as needed  -->
                </div>
                <!-- // Rating badge  -->
                <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-800 ms-3">5.0</span>
                    </div>
                    <!-- Price and Add to Cart button -->
                    <div class="flex items-center justify-between">
                        <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
                        <a href="#"
                            class="text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                            Add to cart
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="p-8 rounded-t-lg" src="https://images.unsplash.com/photo-1613945407943-59cd755fd69e?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fHJpbmd8ZW58MHwwfDB8fHww"
                        alt="product image" />
                </a>
                <div class="px-5 pb-5">
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Diamond Engagement Ring</h5>
                    </a>
                    <div class="flex items-center mt-2.5 mb-5">
                        <!-- Rating stars and badge -->
                        <div class="flex items-center space-x-1 rtl:space-x-reverse">
                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    <!-- Add more stars as needed  -->
                </div>
                <!-- // Rating badge  -->
                <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-800 ms-3">5.0</span>
                    </div>
                    <!-- Price and Add to Cart button -->
                    <div class="flex items-center justify-between">
                        <span class="text-3xl font-bold text-gray-900 dark:text-white">$999</span>
                        <a href="#"
                            class="text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                            Add to cart
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="p-8 rounded-t-lg" src="https://plus.unsplash.com/premium_photo-1681276168529-fec94bbf342d?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTN8fG5lY2tsYWNlfGVufDB8MHwwfHx8MA%3D%3D"
                        alt="product image" />
                </a>
                <div class="px-5 pb-5">
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Sapphire Pendant Necklace</h5>
                    </a>
                    <div class="flex items-center mt-2.5 mb-5">
                        <!-- Rating stars and badge -->
                        <div class="flex items-center space-x-1 rtl:space-x-reverse">
                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    <!-- Add more stars as needed  -->
                </div>
                <!-- // Rating badge  -->
                <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-800 ms-3">5.0</span>
                    </div>
                    <!-- Price and Add to Cart button -->
                    <div class="flex items-center justify-between">
                        <span class="text-3xl font-bold text-gray-900 dark:text-white">$799</span>
                        <a href="#"
                            class="text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                            Add to cart
                        </a>
                    </div>
                </div>
            </div>

            <!-- Repeat similar structure for other cards -->

        </div>
    </div>



<!-- category
<h1 class="text-5xl italic text-center font-bold text-amber-800 m-12">Categories</h1>

<div class="grid grid-cols-3 gap-4 m-4">
  // Blog Post Card 1 
        <div class="max-w-sm bg-cover bg-center bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700" style="background-image: url('data:image/jpeg;base64,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');">
            <a href="#">
                <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">NECKLACE</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Explore necklaces</p>
                <a href="#"
                    class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-amber-700 rounded-lg hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-300 dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">
                    Explore
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>

        // Blog Post Card 2 
        <div class="max-w-sm bg-cover bg-center bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700" style="background-image: url('https://media.istockphoto.com/id/1162902447/photo/fancy-designer-golden-earrings-pair-for-woman-fashion.jpg?s=612x612&w=0&k=20&c=nJz0NRqK9gaPOts9muQ7m1hZub7npHxrn9olzii6teA=');">
            <a href="#">
                <img class="rounded-t-lg" src="/docs/images/blog/image-2.jpg" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">EARINGS</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Explore earings</p>
                <a href="#"
                    class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-amber-700 rounded-lg hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-300 dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">
                    Explore
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>

        // Blog Post Card 3 
        <div class="max-w-sm bg-cover bg-center bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700" style="background-image: url('https://media.istockphoto.com/id/865506324/photo/jewelry-ring-witht-big-blue-sapphir-on-black-coal-background.jpg?s=612x612&w=0&k=20&c=yRmzTQU8fyl_a6FNthYNHY9JLoTAhb5pQjELfDzd8Qs=');">
            <a href="#">
                <img class="rounded-t-lg" src="/docs/images/blog/image-3.jpg" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">RINGS</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Explore rings</p>
                <a href="#"
                    class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-amber-700 rounded-lg hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-300 dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">
                    Explore
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>

        // Blog Post Card 4 
        <div class="max-w-sm bg-cover bg-center bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700" style="background-image: url('https://media.istockphoto.com/id/1163145560/photo/fancy-designer-bracelets-jewelry-for-woman-fashion.jpg?s=612x612&w=0&k=20&c=PcONJpu5bEmvcv5x1OCHV5BmgM9T-K_scye7C8zdH-c=');">
            <a href="#">
                <img class="rounded-t-lg" src="/docs/images/blog/image-3.jpg" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">BRACELETS</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Explore bracelets</p>
                <a href="#"
                    class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-amber-700 rounded-lg hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-300 dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">
                    Explore
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>

        // Blog Post Card 5 
        <div class="max-w-sm bg-cover bg-center bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700" style="background-image: url('https://media.istockphoto.com/id/1313436116/photo/woman-wearing-luxury-wristwatch-near-mirror-closeup.jpg?s=612x612&w=0&k=20&c=4J3dQWBsG6Dim5W52VIFLBQ5iakcnvx6odPvkbsR72I=');">
            <a href="#">
                <img class="rounded-t-lg" src="/docs/images/blog/image-3.jpg" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">WATCHES</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Explore watches</p>
                <a href="#"
                    class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-amber-700 rounded-lg hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-300 dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">
                    Explore
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>

        // Blog Post Card 6 
        <div class="max-w-sm bg-cover bg-center bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700" style="background-image: url('https://media.istockphoto.com/id/543562666/photo/happy-little-girl-with-big-sunglasses-looking-at-the-sun.jpg?s=612x612&w=0&k=20&c=aIsTCj5SC7hsODfT2B1sX0TOtEW_6oWIxjWeX4IfToo=');">
            <a href="#">
                <img class="rounded-t-lg" src="/docs/images/blog/image-3.jpg" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">SUNGLASSES</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Explore sunglasees</p>
                <a href="#"
                    class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-amber-700 rounded-lg hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-300 dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">
                    Explore
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>

        // Repeat the above structure for more cards if needed 

</div>







// product card 
<h1 class="text-5xl italic text-center font-bold text-amber-800 m-12">Our Best Sales
</h1>

<div class="grid grid-cols-3 gap-8 m-4">

    // Product Card 1 
    <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="p-8 rounded-t-lg" src="/docs/images/products/apple-watch.png" alt="product image" />
        </a>
        <div class="px-5 pb-5">
            <a href="#">
                <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Gold Hoop Earrings with Diamonds</h5>
            </a>
            <div class="flex items-center mt-2.5 mb-5">
                // Rating stars 
                <div class="flex items-center space-x-1 rtl:space-x-reverse">
                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    // Add more stars as needed 
                </div>
                // Rating badge 
                <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-800 ms-3">5.0</span>
            </div>
            // Price and Add to Cart button 
            <div class="flex items-center justify-between">
                <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
                <a href="#" class="text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">Add to cart</a>
            </div>
        </div>
    </div>

    // Product Card 2 
    <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="p-8 rounded-t-lg" src="/docs/images/products/product2.png" alt="product image" />
        </a>
        <div class="px-5 pb-5">
            <a href="#">
                <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Emerald and Diamond Bracelet</h5>
            </a>
            <div class="flex items-center mt-2.5 mb-5">
                // Rating stars 
                <div class="flex items-center space-x-1 rtl:space-x-reverse">
                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    // Add more stars as needed 
                </div>
                // Rating badge 
                <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-800 ms-3">4.5</span>
            </div>
            // Price and Add to Cart button 
            <div class="flex items-center justify-between">
                <span class="text-3xl font-bold text-gray-900 dark:text-white">$449</span>
                <a href="#" class="text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">Add to cart</a>
            </div>
        </div>
    </div>

    // Product Card 3 
    <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="p-8 rounded-t-lg" src="/docs/images/products/product3.png" alt="product image" />
        </a>
        <div class="px-5 pb-5">
            <a href="#">
                <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Gemstone Beaded Layered Necklace</h5>
            </a>
            <div class="flex items-center mt-2.5 mb-5">
                // Rating stars 
                <div class="flex items-center space-x-1 rtl:space-x-reverse">
                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    // Add more stars as needed 
                </div>
                // Rating badge 
                <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-800 ms-3">4.8</span>
            </div>
            // Price and Add to Cart button 
            <div class="flex items-center justify-between">
                <span class="text-3xl font-bold text-gray-900 dark:text-white">$799</span>
                <a href="#" class="text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">Add to cart</a>
            </div>
        </div>
    </div> 
</div> -->
  
    <?php
    include("./layout/footer/footer.php");
    ?>

    
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

</body>
</html>