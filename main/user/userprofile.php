<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Jewelry Shop</title>
    <script src="https://jsuites.net/v4/jsuites.js"></script>
    <link rel="stylesheet" href="https://jsuites.net/v4/jsuites.css" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />

</head>

<body class="">

    <!-- Navigation Bar -->
    <?php
    include("./layout/header/header.php");
    ?>

  <!-- profile -->

<div class="mx-auto ring ring-amber-500 ring-offset-8 shadow-2xl  w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-24 mb-8">
    <div class="flex justify-end px-4 pt-4">
        <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
            <span class="sr-only">Open dropdown</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
            </svg>
        </button>
        <!-- Dropdown menu -->
        <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2" aria-labelledby="dropdownButton">
            <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete Account</a>
            </li>
            </ul>
        </div>
    </div>
    <div class="flex flex-col items-center pb-10">
        <img class="ring ring-amber-700 ring-offset-8 shadow-2xl shadow-amber-400/50 w-24 h-24 mb-3 rounded-full shadow-lg object-cover" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUVFRgVFRUZGBIVGBgaGBgYGBgYGRgYGBgZGRgYGBgcIS4lHB4rIRgYJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QGBISGDEdGB0xMTExMTExMTExMTE/NDE/PzQxPzExNDQxMTQ0PzE0NDQxMTExMTE0MTExNDExNDExMf/AABEIAKgBLAMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAADBAIFBgABB//EADgQAAIBAgQEAwYFAwUBAQAAAAECAAMRBCExQQUSUWFxgZEGEyIyobEUQsHR8FJi4QcVcpLxglP/xAAZAQADAQEBAAAAAAAAAAAAAAAAAQIDBAX/xAAgEQEBAQEAAQUBAQEAAAAAAAAAARECEgMTITFBUQQi/9oADAMBAAIRAxEAPwBLC0+VB6wSfFU7CPMth2EUwCfMZChqzWGWsJSNxnFmbmfsIxXawsNTEabCJcRwa1F0ztrHEvbPWemAfP8AG4NqbWI85YcFLMCL5CaDiWAFQZjO0R4XgjTB5hnn6QNIG0MjwbrnJosm0DI80/B8WbCxsw/bSZcLLzBE8otYKNdjeVzU1ocZw1MSvMhC1bb6NbrMxicO9NuV1Kna/wChl9hq7IQyg23zl0FTEJy1F5ht1U9jKwMGtSFV5d4/2fan8SAvSNsxqviIuvC2zy3/AFi8aNJe8yHheTSpLQcGc2+HXTtYbx3DezbXuxsNpXjS1QrUhke01FHgdIa5nc2ka/AARdT5SsTrPLVhkqy0pezpv8RFvEa7CEPAbaG/7R82hX4bijp8rkDpqPSSxvGHqCzMLDZch59Yy3A2Fst89JGrwU/y0YVBr3PeRqVgBa2e5/QRutgCm132voP8nP0itekRrfPe36Sbpwu9SR95DHCa5aQD4cjtItp48apBNUj2E4PVqfIht1bIesvcJ7NU0HxnnfoPlHbvCS02URC2Sgk9hLbCcAqPm9kHfM+gmno4ZEFkUAdh957VrqupAEqcyErsLwaihvbnPVtB5RPj3EgiFEtnrbQdZ7xDilxZMh1MzGJJYxXo8KO0EzQzJBOknTCYwd4RkkPdmGhY402Txg8Olk+8nj9Qu0lXWyZQItg0uSYSrm4HT9obBU7L3Jkaa3djASoV9QOsJe2RnjLdx2i+MJvYbRGaZbxaos8wuJuOU6iFqCAJMkmiSYWEVJKkRTjdO5AF7WkEWHpLnnpHCWWHc8oANz3EtMBVOl8/taVtCqAthmfSWPDqZa+Wm4+kuF+LmnimIteeJroLSAoEbi/hCDKaIFWpJLiDbwEDtIIcjFaQ9GrC/iD94kjaSVd89ZOjBvfE7yQrZRA1dtpJWlShZPWBilapnlJIs8annKAHviciLjvO9wjfMp8oZqQytIM1jvAPGw6acuUnRo0UuQgJ75xRsV+sQrcRubWyO8VuKk1cVuJW8Om1pXvxU32Fr3lXUxRJP8tFamJQC1yx6DbuTIvTTnlbVOKkiwNjEXxDNmTcwKC4vJhZO6OsL1G2izJHWSDZIkkWpwTJH2SCZIAgySHJHHSC5IBD3yM/zLbxELjqq5AMPWYhcMnT0JnHDKd2/wCxm/tVl5PoNIqE1HrBUrWJ7zDpRsPnf/u37ySIwyDuB/yJivp0eUbKjmxMUxD/ABmZtFcaVX9Z77up/wDq30i9un5xqVwwOds5JxlM2lWqNKpnVsZVUXLk+Qivp9H5xoEEKgmawvEarDJsupAjQx9YfmX0i9ro/ONCixmlT87zNjiFcC9lt1HWaL2ZqtWb4za2wEPbo82h4VgVYXZcu8vKYRBZQBEquICC19pVYjixzsRlKmQtXlXE2gFxanWZ5+IOx1kDiSRfeK08aWtilC5GL0cSWzMyyYl+Y3l9hq3wgdYhYsFqkwVWtn9IL3gsTvK7E4qxgSzaqFtfQGHw+LU3mQr49idZBMY40MUp43Bxa7nTaQGLBOsyiYnq2stMKwOjeUqdFmL734OV54KgMR0HjBVqttJWjDtbD3G0osbQ5ATfxOg8BG1xtv8A2HrItZDf5rdTFflXNxjnxNyemmX6wlBxcZRbjNL3bWGVsrbxbA1ze/Sc/VsrpnzzrXpTsot6TrRlMwD2B+kiyS59Ofq/JRkg2SNssEyxlpVlgmWNOsE6xGUdILljbJBckAyHNe1lXL6yRp3/ACC8fXCpsBDfg16fWd8jl1T/AIVjoFI8DPPwrf0L9Zo8OpUWAEZW9swIZg1llwrf0D1k0whP5T5Gagd1FvCHpotvlEcufhWMquC/5eohDwxWFizD0mrFNP6BPfwyHVPQyp3P4zvN/rL0+DqoAFTytKrFMyOVBDAbnIzUcQosgLKABtczF1qpZmJ6zLvqfka8c39O08Y9goUWvfI7nKfSvZGkwo85W2W+t5834NRR3XmO+2s+wUmVKSqunKLfzrMrWsjL8bx1mIYzN4ziQXRsv5rLTi7XqajWUvtDh+VbrqRmZlrSFKntIwyUA269Izh+M1HR3svIhAK3+LP8wG8y66y0CUgKRRmNVucVBbJc/g5T1MrA1nCcaKq7C2sszX5SM8hMlgKTU6yqUKXW7Bsr/wBwHpNM4uPtJNb0K/MIDE4e+e8DhDDu5ECxXNgz0inEXFJSf54S8DTKcdBqMwvkguRf7dYsNX/72xIAAuTvkPWEw3tU6NmoNjbI/aVSIqVFNRT7v4SRpzJfO3jBcTdDUc015aZPwruo6EyvEm+4f7To4tmCNm1j5x3NleYDg/Dy7XHTIaZTV0qISwuSfGIYslJ6ZGO4SryntK6hU6mFV4QheOcM96OZcjbO1sz3mVaiUflOo/mZm64fWByMaxdJOXNRn2h1zKfPdnwr+G392nNqR/5DkRXC4o35Gyt8vhHCJMF+QmWCdYwwgXgRdlgmWMsIJlgZdlgeWMuIK0DYDAY6ozhea9zn4TUquWn1Eznsxhudydl3msGF6H6Tq5txzSAqvj9IdWt/5PRhT29JL8M38Jj2ninxfHAjlOTmtvJJ7RpujfeBxPs3Udy3MMzAH2Zq/wBpk3rpNi1T2ipHZh5GGTj9E6sR/wDJlC3s/XH5fQwLcHrD8hi8uk5VxxviKPTuhuM885iy00HF6fu6CIRZmNzM5eFutOfpd+z5vUWxtYjX9J9RxdcgEZEBR9tp8u9nkLVUyB+IZGfQeJYgqSLbfpJ6XGZ4pUs9yMvrJVwKyC2qixH6QuIpl9r5SFDAlDlceGkzaRlsXwl1N1vbvC4DAvrY3m5w2G5h8S38Y3+EQbWhtNl6GHqO/PUJYgWBY6DKX5UAQr0gfCLYmpYeEAJTeT577xJKkOpvFpnQPhymVxuHf3hKjP7jcTT0XuJKnRW+mcRMlVwvOE9+tR1phgoQqOVG+Irn/dY+UXxfD6TlRTR0A+Yu3Mz9zlYepm8q4ZbfLcdJT45SbgKFF/AytBLDqtNNQNvGw2gFxPM9wb9rwGJpkmzHIaZyVBFU5DOBVa06vrGUfrrEaKneNDKLSNYevYy0OL5hrKENCrUMJcI1iLH4hqvrLmhZ0DDoJnzUhOFYs84W9lvbyiPFy47QLRuoIu6R4AGEE0OynpBOsMMB4KFcQdojZP2cqpTT4jZid+kvqeMp/wBY9ZWUCigKbXGRusZRKbHRT5Tq/GKzSqp3HqIVWHWVJwaa2HkZVlyGy5gBfrDywNaiwlpjRiao0dvOFTiVYD5pn7kPxbILOYWF5l6fGKo6R3B8VdzysotbMxzuUrzYy/tliOaqFH5RM/HONV+es7d7ekRlYUWHDavI6tzWKm4n0CvX50V9eZQTafM6L2Omc3eFqF6CEArYWsfvI6VzRXpjW9p7SqEakWgVdgLHOR97bbzmbRcU8SIw1YEayiFfOTFQnK9hALVqso+IYr4rRgORlfzlPjxzPlrtJ1UPJXvDribaytw+JAyOokzU5xYaxNM+F5gMRePpU3/xM3g25WGdrx58RqL5do5WdXhxAtrFq1Tm2v5Stp1u8m1fufKURfEoS2Sr6T1MODmR6QyAHeTItpJtKogTmnt5G0VD0CcTPZA5wKvS2UDSex5tLZwjaGL1HyhRGx4RxBKgCt8wEt2CD8t5geF4nlcE5CbalWuotneVzS6j0VEO0XxNNTpYRl6QbsYliqZGolUoraq+HlAWjLqIC0nFqZAvYwqUl15Yg+RAtYdYdXIF7zrxzrFUE73KnURehXG942i3zDQvO/hIHDp0nn4FDtG0Q7wy04e3z/B8/wBV3+2IdpDEYRaCO4P5TvLZqI6Sh9s6/JhyAc2IWT4SfQ2/186YFiTbUnMm2pnqIvUnsP3MF5+s4vtpK8VadTEqvyi3dcz5k/pNzwmuHw4I1U55TDYXCNbnchKezNv/AMV1M2vsriUKOtMMVFru/X/jt4aye+fg+fsxY9/GKYimdj9JZ4lWJvcm380ETqNec7ZV5qczlDrUB8J7iKN8/wCd7xTnIPbtAzd175QOIqKct+tpEvff94FzFhwB1vcg26w2GbltnmbwfIb/AOJxpMImm/B+kVtbwz+kKhW2piVNiIdGjjOmkYSSpeDQE6RtBaMk0a0J7xT2/naQ5L5jz/ms5Lrt65j1kWgQ0+mfnI2k15T/AGn6SRy1zHWLQGdIMN0k3T0kVW0YRc5RNoxWaAMAkhmk4JjDblOomcQGWPC6nK8qJrUnEnYRijUuMxEkcjOFoVgx85pEV2M4ffNdekrKmAe+QNpeo+djJnm2OUMOPnxptllfLOFWmSM1yEPRYFR1O3SMKk32s7CXuV3UiGp0ul44iQqrDyqcBpKdL5RpAZELCqI9CYXKYP8A1Bri9NPFreRE3oE+Ye19QPiWJ+VQFFtW3PL0HePn5KqCnTLaDzOQHiY2gSnZiOZ9rjLfOx2y1OfrIocgzEBfyIoLXPUj94Snyglzkb5sw5yCNh1bsNJfiNSoYZ6787n4RYktkeXoqzR8I4hSpuEBOlgo+VR3P8J3maxOLJUKLjnzb+or+UM3TewitJrZnIbDr/iK8aflj6e9TnGuXQaRZklD7O8VJPIxAGwH7zTMnpOPvnxro562K+oInUpA52zlqyRd0kaeKt6Y7ySUQI29OR5IjDWkNZP3YtJinJ+77wPQDQBzkqVADwhhT7z0JAhKdvy6yYIOvwnrtBqvSEVL66/fxk6ElpkZ+hGkItTrvIJUt4dp6SD272+4/aSEiANJ6lT03EHyldf8GTK5ZQCTdQfGDdhaRDWgqz7iOUA1Gzgua85iD4z1BKA9Ne0ZTLODUZQhEcTV/hCHXMy2p4YBRaZbBYjkyJmhweMJWxt2P6S+anBzYa6yH4vuIvWfnle+Ce8sK+igFgIygmew/tNh2sea30lxg+I0nICODfuJrqD6CEE8USaiIJLCIJ4o7QiiVEo1zyqTpYT41i3NWs7E5Fib9AN/CfWfaTEcmHdv7SB5z5FSHwksbKxztqbbDz+xmvpc6jqpswHxW+HQdT0C9B3i7uWt0GQGgA2AE8qNzZ+VtgOk5FzE6Jyi0StbmN9BYDygCx3hKzXZvGRUekJyNTouVYEG1j9Zu+B8TFUcu4H2mAVb72m9/wBO+H3dn1AG42nP6/EzWnp9fK1dYB1l3xTCBTzDeVTJPOsdculHSR5YyVnQPC4WT5ITlnoWIYCqSQWTIkWMA4Ty88M6QTjJIZ5aerACq1vDcH9JFhuug1HSRP1galTpqOkcD2rUvFGqHy3nNUDdm36Hw6Tw5+cVDzO8MkEveGSOFTdMaQhkaPhJPlLSDzWa95c4KuCBYXMpKkJgMVY+ccFazD4U6kw/KIHBYoOoG8neaSp18gxPsrWB+HlI8ZYeyPBKiVy9RCoUG3e+UsqHtih+eiR4GWOG9o8I2rFD32m3jGerZaZ1B0kkDRelj6DC61l8LiO0irfK4N9MxHhaYorCqsGiGM25VzzMeDWQ/wBQK1qIS9uZhfwGs+aVmuQNlGQ8dfObH/UPFM1REOigm0xrzs9Hj/lj118oGdeezpv4I167XN+s8E6dK8S14us+qf6dLaizZC5ny6nrrafVPYNh+HOdzf8AgnH/AKZnLf0vtdcUzlCzS7x5uJRuM55Vrs5eSJWeieMZK8eTzmnSDmB4mZEiAV885Nmk6WJm064geaR54tGGbiDdxBM8CXi0sEatA1HJFx/DBkzkNvA5Whp44D/MJr4/frPCLdxPVhCEA33hEEiBCosqFTNGGKZXg0kncdZpEFqixZDYxqrAcpvDAteGYgqwO28vhUvnMphnzt3l5Tr2FpUD5p/t4OhtIPgWB10nTp1MEEwrAi4uI8lXlzDMvmZ06TTOUOMVlsFrNn1zjKe2ddGswV7eU6dFPsX6UPGse2JqGowsSLWG0rjSnTp3ej3cY9cxA0557udOnVLWPTzknck6dNYlEJn3n1H2IYe46Z2nTpwf6/p0ej9rjGaSnrDMzp08jp38gXnhM9nSVvCZBp06BF36yQaeTpBvCbyInToqA2eRJnToUgp6pnTojEXOSWdOjiRVjCCdOlRNGWekTp0uEgySPu55OlE5FsYz762U6dEH/9k=" alt="Bonnie image"/>
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Bonnie Green</h5>
        <span class="text-sm text-gray-500 dark:text-gray-400">Visual Designer</span>
        <!-- <div class="flex mt-4 md:mt-6">
            <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-amber-700 rounded-lg hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-300 dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">Add friend</a>
            <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700 ms-3">Message</a>
        </div> -->
    </div> 
</div>


    <!-- Footer -->
    <?php
    include("./layout/footer/footer.php");
    ?>
   

   

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>


</body>

</html>
