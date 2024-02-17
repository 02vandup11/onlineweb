<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"  rel="stylesheet" />

    <title> Jewelry Shop</title>
    
</head>
<body class="">

   <?php
    // include("./layout/header/header.php");
   ?>

    <!-- Background Image Section 
    <div class="bg-cover bg-center p-4 m-2 flex items-center relative" style="background-image: url('jewel1.jpg')">
         Overlay for text 
        <div class="absolute inset-0 bg-black opacity-50"></div>

         Content Container 
        <div class="container mx-auto text-white relative z-10 text-center">
             Description in the center 
            <div class=" bg-white text-yellow-800 border-4 border-yellow-800 mx-20 my-2 p-2">
                <h1 class="text-4xl font-extrabold ">Timeless Ethnic Elegance</h1> <br>
                <p class="text-lg  font-serif ">Step into sophistication with our ethnic jewelry. Each piece is a statement of simplicity and style, effortlessly blending tradition with contemporary allure. Discover the joy of minimalistic charm and elevate your everyday elegance with our curated collection. Explore now for a touch of timeless allure.</p>
            </div>
        </div>
    </div>
-->
    
  


<!-- component -->


<div x-data="{ cartOpen: false , isOpen: false }" class="bg-white">
   
    
    <main class="mt-20">
        <div class="container mx-auto px-6">
            <div class="h-64 rounded-md overflow-hidden bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1611540280958-dc93ce74f8d5?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fGpld2VsbGVyeSUyMGJhY2tncm91bmR8ZW58MHwwfDB8fHwy')">
                <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                    <div class="px-10 max-w-xl">
                        <h2 class="text-2xl text-white font-semibold">Ethnic Jewelry</h2>
                        <p class="mt-2 text-gray-400">Elevate your style with our timeless ethnic jewels – where tradition meets sophistication. Explore heritage-inspired craftsmanship for the modern connoisseur. Embrace elegance, celebrate culture.</p>
                        <button class="flex items-center mt-4 px-3 py-2 bg-yellow-600 text-white text-sm uppercase font-medium rounded hover:bg-yellow-500 focus:outline-none focus:bg-yellow-500">
                            <span>Shop Now</span>
                            <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="md:flex mt-8 md:-mx-4">
                <div class="w-full h-64 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:w-1/2" style="background-image: url('https://media.istockphoto.com/id/1198714412/photo/bangles-made-of-gold.jpg?s=612x612&w=0&k=20&c=fvlLFQegczkC87aBXXuJli0XszW5O0DG_VBOKVXB2Lg=')">
                    <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                        <div class="px-10 max-w-xl">
                            <h2 class="text-2xl text-white font-semibold">Captivating Elegance</h2>
                            <p class="mt-2 text-gray-400">Embrace Tradition with Our Ethnic Bangles Collection. Adorn Your Wrists with Timeless Craftsmanship and Cultural Splendor. Unveil the Artistry of Heritage.</p>
                            <button class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                                <span>Shop Now</span>
                                <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:mt-0 md:w-1/2" style="background-image: url('https://media.istockphoto.com/id/599908966/photo/gold-jewelry.jpg?s=612x612&w=0&k=20&c=eN8YsGoySwpKRTn3RBYZ5vQWKp1waCHDUC8C3DehjNQ=')">
                    <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                        <div class="px-10 max-w-xl">
                            <h2 class="text-2xl text-white font-semibold">Radiance Refined</h2>
                            <p class="mt-2 text-gray-400">Elevate your style with our stunning rings, where tradition meets modern elegance. Discover the perfect blend of craftsmanship and sophistication.</p>
                            <button class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                                <span>Shop Now</span>
                                <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-16">
                <h3 class="text-gray-600 text-2xl font-medium">Fashions</h3>
                <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
                    <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                        <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://media.istockphoto.com/id/1126858679/photo/ethnic-jewellery-in-low-light.jpg?s=612x612&w=0&k=20&c=_3mrKI_BxBtN4Sz4qRWfZaIcGi_yCrwlOGRKV5Faq7w=')">
                            <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </button>
                        </div>
                        <div class="px-5 py-3">
                            <h3 class="text-gray-700 uppercase">Necklace</h3>
                            <span class="text-gray-500 mt-2">Rs.279</span>
                        </div>
                    </div>
                    <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                        <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://media.istockphoto.com/id/1319681623/photo/closeup-of-golden-earrings.jpg?s=612x612&w=0&k=20&c=1IdfGqS3rMVHfs1-aA93H4aPB7prwQo8CbSMRegXVnw=')">
                            <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </button>
                        </div>
                        <div class="px-5 py-3">
                            <h3 class="text-gray-700 uppercase">Earing</h3>
                            <span class="text-gray-500 mt-2">Rs.179</span>
                        </div>
                    </div>
                    <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                        <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://media.istockphoto.com/id/1203787084/photo/elegant-white-gold-necklace-with-diamonds.jpg?s=612x612&w=0&k=20&c=eE6gSF7ltRtym_sakdU1nrEiknbUGb1Ab4zAFcIz4FE=')">
                            <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </button>
                        </div>
                        <div class="px-5 py-3">
                            <h3 class="text-gray-700 uppercase">Chains</h3>
                            <span class="text-gray-500 mt-2">Rs.199</span>
                        </div>
                    </div>
                    <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                        <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://media.istockphoto.com/id/658096268/photo/wedding-wedding-day-luxury-bracelet-on-the-brides-hand-close-up-hands-of-the-bride-before.jpg?s=612x612&w=0&k=20&c=HuYyxt8c3pJguIdFBhBFx-Sg_hnABP-lTqietT8_yVI=')">
                            <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </button>
                        </div>
                        <div class="px-5 py-3">
                            <h3 class="text-gray-700 uppercase">Bracelet</h3>
                            <span class="text-gray-500 mt-2">Rs.229</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-16 mb-4">
                <h3 class="text-gray-600 text-2xl font-medium">Combo Sets</h3>
                <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
                    <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                        <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://media.istockphoto.com/id/862017286/photo/necklace-set.jpg?s=612x612&w=0&k=20&c=VnvPGLDDGYZqT_nlnPe2L0wl38focExITSElmAMlVvo=')">
                            <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </button>
                        </div>
                        <div class="px-5 py-3">
                            <h3 class="text-gray-700 uppercase">Ethnic Set</h3>
                            <span class="text-gray-500 mt-2">Rs.499</span>
                        </div>
                    </div>
                    <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                        <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://media.istockphoto.com/id/1306053377/photo/chic-accessories-set.jpg?s=612x612&w=0&k=20&c=d_CVNHJCWFS7WRgr6uw6gHCZZ2ZDJlSPuYSTmJMDNxE=')">
                            <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </button>
                        </div>
                        <div class="px-5 py-3">
                            <h3 class="text-gray-700 uppercase">Elegant Mix</h3>
                            <span class="text-gray-500 mt-2">Rs.299</span>
                        </div>
                    </div>
                    <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                        <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://media.istockphoto.com/id/154960096/photo/six-diamond-rings-isolated-on-white.jpg?s=612x612&w=0&k=20&c=tP4CZ6RqoSdQ2TEwb7M5Lwlyq1MIB5vBAGrhRqWucKo=')">
                            <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </button>
                        </div>
                        <div class="px-5 py-3">
                            <h3 class="text-gray-700 uppercase">Classic Rings</h3>
                            <span class="text-gray-500 mt-2">Rs.199</span>
                        </div>
                    </div>
                    <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                        <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://media.istockphoto.com/id/1316835779/photo/modern-accessories.jpg?s=612x612&w=0&k=20&c=4scPLucrVhB2PubVXIZYx8yuTCdBKBdCChlIrejns54=')">
                            <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </button>
                        </div>
                        <div class="px-5 py-3">
                            <h3 class="text-gray-700 uppercase">Pearl mix</h3>
                            <span class="text-gray-500 mt-2">Rs.149</span>
                        </div>
                    </div>
                </div>
            </div>

            

            

            <div class="md:flex mt-8 md:-mx-4">
                <div class="w-full h-64 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:w-1/2" style="background-image: url('https://media.istockphoto.com/id/1198714412/photo/bangles-made-of-gold.jpg?s=612x612&w=0&k=20&c=fvlLFQegczkC87aBXXuJli0XszW5O0DG_VBOKVXB2Lg=')">
                    <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                        <div class="px-10 max-w-xl">
                            <h2 class="text-2xl text-white font-semibold">Captivating Elegance</h2>
                            <p class="mt-2 text-gray-400">Embrace Tradition with Our Ethnic Bangles Collection. Adorn Your Wrists with Timeless Craftsmanship and Cultural Splendor. Unveil the Artistry of Heritage.</p>
                            <button class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                                <span>Shop Now</span>
                                <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:mt-0 md:w-1/2" style="background-image: url('https://media.istockphoto.com/id/599908966/photo/gold-jewelry.jpg?s=612x612&w=0&k=20&c=eN8YsGoySwpKRTn3RBYZ5vQWKp1waCHDUC8C3DehjNQ=')">
                    <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                        <div class="px-10 max-w-xl">
                            <h2 class="text-2xl text-white font-semibold">Radiance Refined</h2>
                            <p class="mt-2 text-gray-400">Elevate your style with our stunning rings, where tradition meets modern elegance. Discover the perfect blend of craftsmanship and sophistication.</p>
                            <button class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                                <span>Shop Now</span>
                                <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
    
<?php
    include("./layout/footer/footer.php");
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>