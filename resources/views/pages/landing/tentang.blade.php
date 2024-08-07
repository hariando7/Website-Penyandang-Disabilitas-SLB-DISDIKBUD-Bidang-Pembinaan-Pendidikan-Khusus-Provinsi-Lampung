<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tentang | Bidang Pembinaan Pendidikan Khusus | Disdikbud Provinsi Lampung</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="/assets/landing/prov-lampung2.svg">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />

    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Slick Carousel JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

        .box {
            border-radius: 8px;
            overflow: hidden;
        }

        .box::before {
            content: '';
            z-index: 1;
            position: absolute;
            top: -50%;
            left: -50%;
            width: 380px;
            height: 420px;
            transform-origin: bottom right;
            background: linear-gradient(0deg, transparent, #45f3ff, #45f3ff);
            animation: animate 6s linear infinite;
        }

        .box::after {
            content: '';
            z-index: 1;
            position: absolute;
            top: -50%;
            left: -50%;
            width: 380px;
            height: 420px;
            transform-origin: bottom right;
            background: linear-gradient(0deg, transparent, #45f3ff, #45f3ff);
            animation: animate 6s linear infinite;
            animation-delay: -3s;
        }

        @keyframes animate {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        form {
            position: absolute;
            inset: 5px;
            background: #494A4C;
            padding: 50px 40px;
            border-radius: 8px;
            z-index: 2;
            display: flex;
            flex-direction: column;
        }

        h2 {
            color: #45f3ff;
            font-weight: 500;
            text-align: center;
            letter-spacing: 0.1em;
        }

        .inputBox input {
            width: 100%;
            padding: 20px 10px 10px;
            background: transparent;
            outline: none;
            box-shadow: none;
            border: none;
            color: white;
            font-size: 1em;
            letter-spacing: 0.05em;
            transition: 0.5s;
            z-index: 10;
        }

        .inputBox input {
            position: relative;
            width: 100%;
            padding: 20px 10px 10px;
            background: transparent;
            outline: none;
            box-shadow: none;
            border: none;
            color: white;
            font-size: 1em;
            letter-spacing: 0.05em;
            transition: 0.5s;
            z-index: 10;
        }

        .inputBox span {
            position: absolute;
            left: 0;
            padding: 20px 0px 10px;
            pointer-events: none;
            font-size: 1em;
            color: white;
            letter-spacing: 0.05em;
            transition: 0.5s;
        }

        .inputBox input:valid~span,
        .inputBox input:focus~span {
            color: #45f3ff;
            transform: translateX(0px) translateY(-34px);
            font-size: 0.75em;
        }

        .inputBox i {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 2px;
            background: #FA8F21;
            border-radius: 4px;
            overflow: hidden;
            transition: 0.5s;
            pointer-events: none;
            z-index: 9;
        }

        .inputBox input:valid~i,
        .inputBox input:focus~i {
            height: 44px;
        }

        .links {
            display: flex;
            justify-content: space-between;
        }

        .links a {
            margin: 10px 0;
            font-size: 0.75em;
            color: #45f3ff;
            text-decoration: beige;
        }

        input[type="submit"] {
            border: none;
            outline: none;
            padding: 11px 25px;
            background: #FA8F21;
            cursor: pointer;
            border-radius: 4px;
            font-weight: 600;
            width: 100px;
            margin-top: 10px;
        }

        input[type="submit"]:active {
            opacity: 0.8;
        }
    </style>
</head>

<body>
    <x-layout-landing>
        <x-hero-landing title="Bidang Pembinaan Pendidikan Khusus"
            desc="Dinas Pendidikan dan Kebudayaan Provinsi Lampung Jl. Drs. Warsito No. 72 Teluk Betung Bandar Lampung, 35215"
            ref="#section2" imgPath="{{ asset('/assets/landing/bg-utama.png') }}" butTitle="Selengkapnya" />
        {{-- <div id="section1" class="w-full justify-center items-start bg-[#C4DDDE] pb-10 lg:pb-0 pt-10 lg:pt-0">
            <div class="lg:w-full lg:flex p-5 lg:p-20">
                <img src="assets/landing/prov-lampung2.svg" alt=""
                    class="w-[40%] h-[40%] m-auto items-center lg:w-[25%] lg:h-[35%] mb-5 lg:mb-0">
                <div class="lg:pl-16">
                    <div class="text-2xl lg:text-3xl font-bold text-black pb-5 lg:pb-5 text-center lg:text-left">
                        Dinas Pendidikan dan Kebudayaan Provinsi Lampung</div>
                    <div class="text-base lg:text-lg font-thin text-black text-justify">
                        <div class="mx-auto max-w-3xl my-8">
                            <p class="mb-4">Dinas Pendidikan dan Kebudayaan Provinsi Lampung berdiri pada tanggal 2
                                Mei 1945, dengan dasar Peraturan Pemerintahan No. 65 Tahun 1951 tentang pelaksanaan
                                penyerahan sebagian dari pada urusan pemerintah pusat dalam lapangan, pendidikan,
                                pengajar, dan kebudayaan kepada Provinsi.</p>
                        </div>
                        <div class="mx-auto max-w-3xl my-8">
                            <p class="mb-4">Dinas memiliki tugas menyelenggarakan sebagian urusan pemerintahan
                                provinsi di bidang pendidikan dan kebudayaan berdasarkan asas otonomi yang menjadi
                                kewenangan, tugas dekonsentrasi, dan tugas pembantuan yang diberikan pemerintah kepada
                                Gubernur serta tugas lain sesuai dengan kebijakan yang ditetapkan oleh Gubernur
                                berdasarkan peraturan perundang-undangan yang berlaku.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-end justify-end text-right mr-5 lg:mr-20 lg:-mt-20 lg:pb-20">
                <x-buttitle-landing ref="https://disdikbud.lampungprov.go.id/" color="#FA8F21" width="[10rem]"
                    title="Selengkapnya" extendClass="text-white text-center mt-2 lg:mt-6 py-2 lg:py-3" />
            </div>
        </div> --}}
        <div id="section_profile">
            <div class="hero min-h-screen bg-[#C4DDDE] pb-10 lg:pb-0 pt-10 lg:pt-0">
                <div class="hero-content flex-col lg:flex-row lg:w-full lg:flex p-5 lg:p-20 gap-10">
                    <div class="image-container relative">
                        <img src="assets/landing/prov-lampung2.svg" class="rounded-lg w-[300px] h-[300px] image-zoom" />
                    </div>
                    <div>
                        <h1 class="text-2xl lg:text-4xl text-center lg:text-left font-bold text-black">Sekapur Sirih
                            Kepala Bidang Pembinaan Pendidikan Khusus Provinsi Lampung</h1>
                        <p class="py-6 text-black">Bidang Pembinaan Pendidikan Khusus memiliki tugas melaksanakan
                            penyusunan bahan perumusan dan pelaksanaan kebijakan di bidang pendidikan khusus.</p>
                        <x-buttitle-landing ref="" color="#FA8F21" width="[10rem]" title="Selengkapnya"
                            extendClass="text-white text-center mt-2 lg:mt-6 py-2 lg:py-3" />
                    </div>
                </div>
            </div>
        </div>
        <div id="section2" class="w-full justify-center items-start bg-[#EEEFF4]">
            <div class="w-full p-5 lg:p-20 pt-10 pb-10">
                <div class="text-center items-center">
                    <div class="text-2xl lg:text-3xl font-bold text-black pb-5">Bidang Pembinaan Pendidikan
                        Khusus</div>
                    <div class="text-base lg:text-lg font-thin text-black text-justify">
                        <div class="mx-auto max-w-4xl my-8">
                            <p class="mb-4">Berdasarkan peraturan Gubernur Lampung nomor 30 tahun 2019 Pasal 14
                                dijelaskan bahwa:</p>
                            <ol class="list-decimal pl-6 mb-4">
                                <li>Bidang Pembinaan Pendidikan Khusus memiliki tugas melaksanakan penyusunan bahan
                                    perumusan dan pelaksanaan kebijakan di bidang pendidikan khusus.</li>
                                <li>Untuk menyelenggarakan tugas sebagaimana dimaksud pada ayat (1), Bidang Pembinaan
                                    Pendidikan Khusus memiliki fungsi:</li>
                                <ol class="list-decimal pl-6">
                                    <li>Penyusunan bahan perumusan dan koordinasi pelaksanaan kebijakan di bidang
                                        kurikulum dan penilaian, kelembagaan dan sarana prasarana, serta peserta didik
                                        dan pembangunan karakter pendidikan khusus.</li>
                                    <li>Pembinaan pelaksanaan kebijakan di bidang kurikulum dan penilaian, kelembagaan
                                        dan sarana prasarana, serta peserta didik dan pembangunan karakter pendidikan
                                        khusus.</li>
                                    <li>Penyusunan bahan penetapan kurikulum muatan lokal pendidikan khusus.</li>
                                    <li>Penyusunan bahan penerbitan izin pendirian, penataan, dan penutupan satuan
                                        pendidikan khusus.</li>
                                    <li>Penyusunan bahan pembinaan pelaksanaan kurikulum dan penilaian, kelembagaan dan
                                        sarana prasarana, serta peserta didik dan pembangunan karakter pendidikan
                                        khusus.</li>
                                    <li>Pelaksanaan pemantauan dan evaluasi di bidang kurikulum dan penilaian,
                                        kelembagaan dan sarana prasarana, serta peserta didik dan pembangunan karakter
                                        pendidikan khusus.</li>
                                    <li>Pelaporan di bidang kurikulum dan penilaian, kelembagaan dan sarana prasarana,
                                        serta peserta didik dan pembangunan karakter pendidikan khusus.</li>
                                    <li>Pelaksanaan fungsi lain yang diberikan oleh atasan.</li>
                                </ol>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center text-center pb-5 lg:mr-20 lg:-mt-20 lg:pb-20">
                <x-buttitle-landing ref="https://drive.google.com/file/d/1AV_l9oi2m_jN1ooSWIFBpOxbWi50XDMH/preview"
                    color="#FA8F21" width="[10rem]" title="Selengkapnya"
                    extendClass="text-white text-center mt-2 lg:mt-6 py-2 lg:py-3" />
            </div>
        </div>
        <div id="section3" class="w-full justify-center items-start bg-[#C4DDDE]">
            <div class="lg:w-full p-5 lg:p-20 pt-10 pb-10">
                <div class="text-center items-center">
                    <div class="text-2xl lg:text-3xl text-center lg:text-center font-bold text-black pb-5 lg:pb-10">
                        Struktur Bidang
                        Pembinaan Pendidikan Khusus</div>
                    <img src="assets/landing/strukturDinas.svg" alt="">
                </div>
            </div>
        </div>
        <div id="section4">
            <div class="w-full flex flex-col justify-center items-center pt-20 pb-20 bg-white">
                <div class="w-[80%] bg-[#2E707B] p-10 rounded-lg">
                    <h1 class="lg:text-5xl md:text-4xl sm:text-3xl font-bold text-white text-center">SLB PROVINSI
                        LAMPUNG
                    </h1>
                    <p
                        class="text-sm md:text-base font-thin text-white text-justify md:text-center mt-4 m-2 md:m-8 pl-0 md:pl-24 md:pr-24">
                        Sekolah Luar Biasa Dinas Pendidikan Kebudayaan Provinsi Lampung <br>
                        Bidang Pembinaan Pendidikan Khusus <span><a href="/sekolah-luar-biasa"
                                target="_blank">Selengkapnya</a></span>
                    </p>
                    <x-carousel-home />
                </div>
            </div>
        </div>
        {{-- <div id="section5"
            class="bg-[url({{ '/assets/landing/disdikbud.png' }})] w-full h-[500px] lg:min-h-screen bg-cover bg-no-repeat bg-[#000000]/[0.50] bg-blend-overlay flex justify-center items-center"
            style="background-size: 100% 100%;">
            <div class="lg:w-1/2 lg:p-5 relative">
                <div class="absolute inset-0 bg-white opacity-20 rounded-lg"></div>
                <div class="box relative w-[350px] h-[250px] lg:w-[600px] lg:h-[300px] m-auto flex items-center m-auto">
                    <form autocomplete="off" class="">
                        <h2 class="mb-5 text-md lg:text-2xl font-bold">Portal Pendataan Sekolah Inklusi Dinas Pendidikan dan
                            Kebudayaan Provinsi
                            Lampung
                        </h2>
                        <x-buttitle-landing ref="/pendataan-sekolah-inklusi" color="#FA8F21" width="[10rem]"
                            title="Selengkapnya"
                            extendClass="text-white text-center m-auto mt-2 lg:mt-6 py-2 lg:py-3" />
                    </form>
                </div>
            </div>
        </div> --}}
    </x-layout-landing>
</body>

</html>
