<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sekolah Inklusi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />

    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Slick Carousel JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</head>

<body>
    <x-layout-landing>
        <x-hero-landing title="Dinas Pendidikan dan Kebudayaan 
Provinsi Lampung"
            desc="Bidang Pembinaan Pendidikan Khusus" ref="#section2"
            imgPath="{{ asset('assets/landing/bg-utama.png') }}" butTitle="Selengkapnya" />
        <div id="section1" class="w-full justify-center items-start bg-white pb-10 lg:pb-0 pt-10 lg:pt-0">
            <div class="lg:w-full lg:flex p-5 lg:p-20">
                <div class="lg:pl-16">
                    <div class="text-2xl lg:text-5xl font-bold text-black pb-5 lg:pb-10 text-center lg:text-center">
                        Alamat Sekolah Inklusi Provinsi Lampung</div>
                    <div class="text-base lg:text-lg font-thin text-black text-justify">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s,
                    </div>
                </div>
            </div>
        </div>
        <div id="section2" class="w-full justify-center items-start bg-white pb-10 lg:pb-0 pt-10 lg:pt-0">
            <div class="lg:w-full lg:flex p-5 lg:pl-20 lg:pr-20 lg:pb-20">
                <div class="w-full p-10 p-1 ring-4 ring-[#297785] dark:ring-[#297785]">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <div
                            class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
                            <div>
                                <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio"
                                    class="inline-flex items-center text-black bg-white border border-[#2F8386] focus:outline-none hover:bg-[#2F8386] focus:ring-4 focus:ring-[#2F8386] font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-white dark:text-black hover:text-white dark:border-[#2F8386] dark:hover:bg-[#2F8386] dark:hover:border-[#2F8386] dark:focus:ring-[#2F8386]"
                                    type="button">
                                    <svg class="w-3 h-3 text-gray-500 dark:text-gray-400 me-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z" />
                                    </svg>
                                    Last 30 days
                                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdownRadio"
                                    class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                                    data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top"
                                    style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
                                    <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownRadioButton">
                                        <li>
                                            <div
                                                class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                                <input id="filter-radio-example-1" type="radio" value=""
                                                    name="filter-radio"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="filter-radio-example-1"
                                                    class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last
                                                    day</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div
                                                class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                                <input checked="" id="filter-radio-example-2" type="radio"
                                                    value="" name="filter-radio"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="filter-radio-example-2"
                                                    class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last
                                                    7 days</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div
                                                class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                                <input id="filter-radio-example-3" type="radio" value=""
                                                    name="filter-radio"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="filter-radio-example-3"
                                                    class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last
                                                    30 days</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div
                                                class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                                <input id="filter-radio-example-4" type="radio" value=""
                                                    name="filter-radio"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="filter-radio-example-4"
                                                    class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last
                                                    month</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div
                                                class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                                <input id="filter-radio-example-5" type="radio" value=""
                                                    name="filter-radio"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="filter-radio-example-5"
                                                    class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last
                                                    year</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <label for="table-search" class="sr-only">Search</label>
                            <div class="relative">
                                <div
                                    class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input type="text" id="table-search"
                                    class="block p-2 ps-10 text-sm text-black border border-black rounded-lg w-80 bg-white focus:ring-[#2F8386] focus:border-[#2F8386] dark:bg-white dark:border-[#2F8386] dark:placeholder-[#2F8386] dark:text-black dark:focus:ring-[#2F8386] dark:focus:border-[#2F8386]"
                                    placeholder="Search for items">
                            </div>
                        </div>
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 bg-white">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-[#2F8386] dark:bg-[#2F8386] dark:text-white">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        No
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nama Sekolah
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Kab/Kota
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Kecamatan
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Alamat
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Jenis Ketunaan
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Website Sekolah
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    class="bg-white border-b dark:bg-white dark:border-gray-700 hover:bg-[#C4DDDE] dark:hover:bg-[#C4DDDE] text-black hover:text-white">
                                    <td class="px-6 py-4">
                                        1
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Link
                                            Website</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-white dark:border-gray-700 hover:bg-[#C4DDDE] dark:hover:bg-[#C4DDDE] text-black hover:text-white">
                                    <td class="px-6 py-4">
                                        1
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Link
                                            Website</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-white dark:border-gray-700 hover:bg-[#C4DDDE] dark:hover:bg-[#C4DDDE] text-black hover:text-white">
                                    <td class="px-6 py-4">
                                        1
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Link
                                            Website</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-white dark:border-gray-700 hover:bg-[#C4DDDE] dark:hover:bg-[#C4DDDE] text-black hover:text-white">
                                    <td class="px-6 py-4">
                                        1
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Link
                                            Website</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-white dark:border-gray-700 hover:bg-[#C4DDDE] dark:hover:bg-[#C4DDDE] text-black hover:text-white">
                                    <td class="px-6 py-4">
                                        1
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Link
                                            Website</a>
                                    </td>
                                </tr>

                                <tr
                                    class="bg-white border-b dark:bg-white dark:border-gray-700 hover:bg-[#C4DDDE] dark:hover:bg-[#C4DDDE] text-black hover:text-white">
                                    <td class="px-6 py-4">
                                        1
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Link
                                            Website</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-white dark:border-gray-700 hover:bg-[#C4DDDE] dark:hover:bg-[#C4DDDE] text-black hover:text-white">
                                    <td class="px-6 py-4">
                                        1
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Link
                                            Website</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-white dark:border-gray-700 hover:bg-[#C4DDDE] dark:hover:bg-[#C4DDDE] text-black hover:text-white">
                                    <td class="px-6 py-4">
                                        1
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Link
                                            Website</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-white dark:border-gray-700 hover:bg-[#C4DDDE] dark:hover:bg-[#C4DDDE] text-black hover:text-white">
                                    <td class="px-6 py-4">
                                        1
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Link
                                            Website</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-white dark:border-gray-700 hover:bg-[#C4DDDE] dark:hover:bg-[#C4DDDE] text-black hover:text-white">
                                    <td class="px-6 py-4">
                                        1
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        lorem
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Link
                                            Website</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div id="section3"
            class="bg-[url({{ 'assets/landing/disdikbud.png' }})] w-full min-h-screen bg-cover bg-no-repeat bg-[#000000]/[0.10] bg-blend-overlay flex justify-center items-center"
            style="background-size: 100% 100%;">
            <div class="lg:w-1/2 lg:p-10 relative">
                <div class="absolute inset-0 bg-white opacity-20 rounded-lg"></div>
                <div class="relative z-10 text-black text-[32px] items-center justify-center text-center font-bold">
                    Portal Pendataan Sekolah Inklusi DISDIKBUD Provinsi Lampung
                </div>
                <div class="relative flex items-center justify-center text-center">
                    <x-buttitle-landing ref="#" color="#FA8F21" width="[10rem]" title="Selengkapnya"
                        extendClass="text-white text-center mt-2 lg:mt-6 py-2 lg:py-3" />
                </div>
            </div>
        </div>
    </x-layout-landing>
</body>

</html>