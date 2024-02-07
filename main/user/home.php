<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

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

<div id="gallery" class="relative w-full m-2 z-0" data-carousel="slide" >
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
<div class="container mx-auto" >
        <h1 class="text-5xl italic text-center font-bold text-amber-800 m-8" id="category">Categories</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 m-4">
            <!-- Blog Post Card 1 -->
            <div class="max-w-sm bg-cover bg-center bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700"
                style="background-image: url('https://images.pexels.com/photos/1323712/pexels-photo-1323712.jpeg?auto=compress&cs=tinysrgb&w=600');">
                <a href="#">
                    <img class="rounded-t-lg" src="https://media.istockphoto.com/id/1132212338/photo/artificial-golden-necklace-on-a-black-background.jpg?s=612x612&w=0&k=20&c=KVPn6T6-U0dV7ZWC2Wa9SdAkV88f_KZdh_2gwG5N3_A=" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">NECKLACE</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Explore Necklaces</p>
                    <a href="#"
                        class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-amber-700 rounded-lg hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-600 dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">
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
            style="background-image: url('https://images.pexels.com/photos/1323712/pexels-photo-1323712.jpeg?auto=compress&cs=tinysrgb&w=600');">
                <a href="#">
                    <img class="rounded-t-lg" src="https://media.istockphoto.com/id/1131972355/photo/fancy-designer-golden-earrings-closeup-macro-image-on-red-background.jpg?s=612x612&w=0&k=20&c=GsLgW4nU2P5LF1F_2WO1H3kvd5a_KsQeGX36GfNqOik=" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">EARINGS</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Explore Earrings</p>
                    <a href="#"
                        class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-amber-700 rounded-lg hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-600 dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">
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
            style="background-image: url('https://images.pexels.com/photos/1323712/pexels-photo-1323712.jpeg?auto=compress&cs=tinysrgb&w=600');">
                <a href="#">
                    <img class="rounded-t-lg" src="https://media.istockphoto.com/id/121119171/photo/antique-diamond-ring.jpg?s=612x612&w=0&k=20&c=R6lbTTISOhWnTSrSOTO3RWG0QCP2uaK90zWu4koDgHE=" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">RINGS</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Explore Rings</p>
                    <a href="#"
                        class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-amber-700 rounded-lg hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-600 dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">
                        Explore
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Blog Post Card 4 -->
            <div class="max-w-sm bg-cover bg-center bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700"
            style="background-image: url('https://images.pexels.com/photos/1323712/pexels-photo-1323712.jpeg?auto=compress&cs=tinysrgb&w=600');">
                <a href="#">
                    <img class="rounded-t-lg" src="https://media.istockphoto.com/id/1195942083/photo/woman-neck-with-hand-with-many-bracelets.jpg?s=612x612&w=0&k=20&c=QYn_gwsnn3Nn6o8IoqVDMsg894rxdruQwddrCN9xZ2k=" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">BRACELETS</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Explore Bracelets</p>
                    <a href="#"
                        class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-amber-700 rounded-lg hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-600 dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">
                        Explore
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Blog Post Card 5 -->
            <div class="max-w-sm bg-cover bg-center bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700"
            style="background-image: url('https://images.pexels.com/photos/1323712/pexels-photo-1323712.jpeg?auto=compress&cs=tinysrgb&w=600');">
                <a href="#">
                    <img class="rounded-t-lg" src="https://media.istockphoto.com/id/1277309201/photo/have-fun-with-it.jpg?s=612x612&w=0&k=20&c=897ynnYb7aNpOZeaOo9uTzy6TAwW96XsiHk8MhVQsuM=" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">HAIR ACCESSORIES</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Explore Hair Accessories</p>
                    <a href="#"
                        class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-amber-700 rounded-lg hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-600 dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">
                        Explore
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Blog Post Card 6 -->
            <div class="max-w-sm bg-cover bg-center bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700"
            style="background-image: url('https://images.pexels.com/photos/1323712/pexels-photo-1323712.jpeg?auto=compress&cs=tinysrgb&w=600');">
                <a href="#">
                    <img class="rounded-t-lg" src="https://media.istockphoto.com/id/917505132/photo/gold-women-wristwatch.jpg?s=612x612&w=0&k=20&c=J2_IwWirLeS-MnC22tLp_euPCDIk6bejtlr2F59Mx-M=" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">WATCHES</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Explore Watches</p>
                    <a href="#"
                        class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-amber-700 rounded-lg hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-600 dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">
                        Explore
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>

             <!-- Blog Post Card 7 -->
             <div class="max-w-sm bg-cover bg-center bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700"
             style="background-image: url('https://images.pexels.com/photos/1323712/pexels-photo-1323712.jpeg?auto=compress&cs=tinysrgb&w=600');">
                <a href="#">
                    <img class="rounded-t-lg" src="https://media.istockphoto.com/id/1126858679/photo/ethnic-jewellery-in-low-light.jpg?s=612x612&w=0&k=20&c=_3mrKI_BxBtN4Sz4qRWfZaIcGi_yCrwlOGRKV5Faq7w=" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">JEWELRY SETS</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Explore Jewelry Sets</p>
                    <a href="#"
                        class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-amber-700 rounded-lg hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-600 dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">
                        Explore
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Blog Post Card 8 -->
            <div class="max-w-sm bg-cover bg-center bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700"
            style="background-image: url('https://images.pexels.com/photos/1323712/pexels-photo-1323712.jpeg?auto=compress&cs=tinysrgb&w=600');">
                <a href="#">
                    <img class="rounded-t-lg" src="https://media.istockphoto.com/id/1277517088/photo/fancy-designer-antique-golden-bracelets-for-woman-fashion.jpg?s=612x612&w=0&k=20&c=n49O0S5rIgzxJX5bU1YjwRHfou0DYPcmsv-N5JAAM14=" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">BANGLES</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Explore Bangles</p>
                    <a href="#"
                        class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-amber-700 rounded-lg hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-600 dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">
                        Explore
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>

             <!-- Blog Post Card 9 -->
             <div class="max-w-sm bg-cover bg-center bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700"
             style="background-image: url('https://images.pexels.com/photos/1323712/pexels-photo-1323712.jpeg?auto=compress&cs=tinysrgb&w=600');">
                <a href="#">
                    <img class="rounded-t-lg" src="https://media.istockphoto.com/id/1465816268/photo/indian-traditional-jewellery-displayed-in-a-street-shop-for-sale-in-pune-maharashtra-indian.jpg?s=612x612&w=0&k=20&c=fZRX47XkS9VWEXoALByl_lr-W4T0R2xgii26wmtUwiE=" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">OXIDIZED JEWELRY</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Explore Oxidized jewelry</p>
                    <a href="#"
                        class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-amber-700 rounded-lg hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-600 dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">
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




<!-- chatbot -->

<div class="fixed bottom-0 right-0 mb-4 mr-2 ">
        <button id="open-chat" class="border-2 border-black-600 bg-amber-700 text-white  rounded-lg hover:bg-amber-600 transition duration-300 flex items-center">
        
        <svg fill="#050505" width="60px" height="50px" viewBox="-2.4 -2.4 28.80 28.80" id="conversation-alt" data-name="Flat Line" xmlns="http://www.w3.org/2000/svg" class="icon flat-line" transform="matrix(1, 0, 0, 1, 0, 0)" stroke="#050505"><g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(0,0), scale(1)"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="1.44"><path id="secondary" d="M17,4v8a1,1,0,0,1-1,1H7L3,17V4A1,1,0,0,1,4,3H16A1,1,0,0,1,17,4Z" style="fill: #c9b21d; stroke-width:1.08;"></path><path id="primary" d="M8,17h9l4,4V7a1,1,0,0,0-1-1H17" style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width:1.08;"></path><path id="primary-2" data-name="primary" d="M17,4v8a1,1,0,0,1-1,1H7L3,17V4A1,1,0,0,1,4,3H16A1,1,0,0,1,17,4Z" style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width:1.08;"></path></g><g id="SVGRepo_iconCarrier"><path id="secondary" d="M17,4v8a1,1,0,0,1-1,1H7L3,17V4A1,1,0,0,1,4,3H16A1,1,0,0,1,17,4Z" style="fill: #c9b21d; stroke-width:1.08;"></path><path id="primary" d="M8,17h9l4,4V7a1,1,0,0,0-1-1H17" style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width:1.08;"></path><path id="primary-2" data-name="primary" d="M17,4v8a1,1,0,0,1-1,1H7L3,17V4A1,1,0,0,1,4,3H16A1,1,0,0,1,17,4Z" style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width:1.08;"></path></g></svg>        
        
    </button>
        
    </div>
    <div id="chat-container" class="hidden fixed bottom-16 right-4 w-96">
        <div class="bg-white shadow-md rounded-lg max-w-lg w-full">
            <div class="p-4 border-b bg-amber-800 text-white rounded-t-lg flex justify-between items-center">
                <p class="text-lg font-semibold">Chat with us...</p>
                <button id="close-chat" class="text-gray-300 hover:text-gray-400 focus:outline-none focus:text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div id="chatbox" class="p-4 h-80 overflow-y-auto">
              <!-- Chat messages will be displayed here -->
              <div class="mb-2 text-right">
                <p class="bg-amber-800 text-white rounded-lg py-2 px-4 inline-block">hello</p>
              </div>
              <div class="mb-2">
                <p class="bg-gray-200 text-gray-700 rounded-lg py-2 px-4 inline-block">This is a response from the chatbot.</p>
              </div>
              <div class="mb-2 text-right">
                <p class="bg-amber-800 text-white rounded-lg py-2 px-4 inline-block">this example of chat</p>
              </div>
              <div class="mb-2">
                <p class="bg-gray-200 text-gray-700 rounded-lg py-2 px-4 inline-block">This is a response from the chatbot.</p>
              </div>
              <div class="mb-2 text-right">
                <p class="bg-amber-800 text-white rounded-lg py-2 px-4 inline-block">design with tailwind</p>
              </div>
              <div class="mb-2">
                <p class="bg-gray-200 text-gray-700 rounded-lg py-2 px-4 inline-block">This is a response from the chatbot.</p>
              </div>
            </div>
            <div class="p-4 border-t flex">
                <input id="user-input" type="text" placeholder="Type a message" class="w-full px-3 py-2 border rounded-l-md focus:outline-none focus:ring-2 focus:ring-amber-600">
                <button id="send-button" class="bg-amber-700 text-white px-4 py-2 rounded-r-md hover:bg-amber-600 transition duration-300">Send</button>
            </div>
        </div>
    </div>
    <script>
        const chatbox = document.getElementById("chatbox");
const chatContainer = document.getElementById("chat-container");
const userInput = document.getElementById("user-input");
const sendButton = document.getElementById("send-button");
const openChatButton = document.getElementById("open-chat");
const closeChatButton = document.getElementById("close-chat");

let isChatboxOpen = true; // Set the initial state to open

// Function to toggle the chatbox visibility
function toggleChatbox() {
    chatContainer.classList.toggle("hidden");
    isChatboxOpen = !isChatboxOpen; // Toggle the state
}

// Add an event listener to the open chat button
openChatButton.addEventListener("click", toggleChatbox);

// Add an event listener to the close chat button
closeChatButton.addEventListener("click", toggleChatbox);

// Add an event listener to the send button
sendButton.addEventListener("click", function () {
    const userMessage = userInput.value;
    if (userMessage.trim() !== "") {
        console.log(userMessage);
        addUserMessage(userMessage);
        // respondToUser(userMessage);
        userInput.value = "";
    }
});

userInput.addEventListener("keyup", function (event) {
    if (event.key === "Enter") {
        const userMessage = userInput.value;
        addUserMessage(userMessage);
        // respondToUser(userMessage);
        userInput.value = "";
    }
});

function addUserMessage(message) {
    const messageElement = document.createElement("div");
    messageElement.classList.add("mb-2", "text-right");
    messageElement.innerHTML = `<p class="bg-amber-800 text-white rounded-lg py-2 px-4 inline-block">${message}</p>`;
    chatbox.appendChild(messageElement);
    chatbox.scrollTop = chatbox.scrollHeight;
    $.ajax({
                type: 'POST',
                url: '../ajax/chatbotajax.php',
                data:'value='+message,
                success: function(data) {
                    console.log(data);
                    addBotMessage(data);
                },
                error: function() {
                    console.log(response.status);
                },
            })
}

function addBotMessage(message) {
    const messageElement = document.createElement("div");
    messageElement.classList.add("mb-2");
    messageElement.innerHTML = `<p class="bg-gray-200 text-gray-700 rounded-lg py-2 px-4 inline-block">${message}</p>`;
    chatbox.appendChild(messageElement);
    chatbox.scrollTop = chatbox.scrollHeight;
}

// function respondToUser(userMessage) {
//     // Replace this with your chatbot logic
//     setTimeout(() => {
//         addBotMessage("This is a response from the chatbot.");
//     }, 500);
// }

// Automatically open the chatbox on page load
// toggleChatbox();

        </script>
  
    <?php
    include("./layout/footer/footer.php");
    ?>

    
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

</body>
</html>