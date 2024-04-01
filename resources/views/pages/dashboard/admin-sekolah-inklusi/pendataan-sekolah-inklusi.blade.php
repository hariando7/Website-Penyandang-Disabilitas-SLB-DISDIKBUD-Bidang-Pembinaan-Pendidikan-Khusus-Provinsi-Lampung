<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendataan Sekolah Inklusi | Disdikbud Provinsi Lampung</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/landing/prov-lampung2.svg">
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

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-direction: column;
        }

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
            width: 845px;
            height: 680px;
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
            width: 845px;
            height: 880px;
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
            font-size: 32px
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

        .inputBox select {
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

        .inputBox select {
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

        .inputBox select:valid~span,
        .inputBox select:focus~span {
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

        .inputBox select:valid~i,
        .inputBox select:focus~i {
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
            width: 120px;
            margin-top: 10px;
        }

        input[type="submit"]:active {
            opacity: 0.8;
        }
    </style>

</head>

<body>
    <div
        class="relative w-full min-h-screen bg-cover bg-no-repeat bg-center bg-[url({{ 'assets/landing/disdikbud.svg' }})]">
        <div class="absolute inset-0 bg-[#000000]/[0.50] bg-blend-overlay"></div>
        <div class="flex justify-between pl-10 pr-10 pt-10 absolute w-full">
            <a class="" href="/">
                <img src="assets/landing/prov-lampung2.svg" alt="" class="w-[40px] lg:w-[100px] lg:h-full">
            </a>
            <div class="flex items-start">
                <x-notifikasi-sekolah-inklusi :notifications="$pengumuman" />
            </div>
        </div>
        <div
            class="box relative w-[300px] h-[500px] lg:w-[845px] lg:h-[820px] m-auto flex items-center m-auto mt-32 lg:mt-5 lg:mb-5">
            <!-- Konten div Anda -->
            <form method="POST" autocomplete="off" class="overflow-y-auto lg:overflow-hidden"> 
                @csrf
                <h2 class="mb-5 font-bold lg:text-[22px] text-[12px]">
                    Selamat Datang di Portal <br>
                    Pendataan Sekolah Inklusi <br>
                    Dinas Pendidikan Dan Kebudayaan Provinsi Lampung</h2>
                <div class="">
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <div class="inputBox relative w-full mt-5">
                                <input name="nama" class="relative" type="text" required="required">
                                <span>Nama Sekolah</span>
                                <i></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="lg:flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <div class="inputBox relative w-full mt-5">
                                <input name="npsn" class="relative" type="text" required="required">
                                <span>NPSN</span>
                                <i></i>
                            </div>
                        </div>
                        <div class="flex flex-col flex-1 mb-4">
                            <div class="inputBox relative w-full mt-5">
                                <select id="statusSekolah" name="statusSekolah" type="select" id="statusSekolah"
                                    required>
                                    <option value="pilih" hidden class="text-black">Pilih Negeri/Swasta</option>
                                    <option value="negeri" class="text-black">Negeri</option>
                                    <option value="swasta" class="text-black">Swasta</option>
                                </select>
                                <span>Status Sekolah</span>
                                <i></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="lg:flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <div class="inputBox relative w-full mt-5">
                                <input name="alamatSekolah" class="relative" type="text" required="required">
                                <span>Alamat Sekolah</span>
                                <i></i>
                            </div>
                        </div>
                        <div class="flex flex-col flex-1 mb-4">
                            <div class="inputBox relative w-full mt-5">
                                <select id="statusSekolah" name="kota" type="select" id="statusSekolah" required>
                                    <option value="pilih" hidden class="text-black">Pilih Kab/Kota</option>
                                    <option value="Kab. Lampung Tengah" class="text-black">Kab. Lampung Tengah</option>
                                    <option value="Kab. Lampung Timur" class="text-black">Kab. Lampung Timur</option>
                                    <option value="Kab. Lampung Selatan" class="text-black">Kab. Lampung Selatan</option>
                                    <option value="Kota Bandar Lampung" class="text-black">Kota Bandar Lampung</option>
                                    <option value="Kab. Tanggamus" class="text-black">Kab. Tanggamus</option>
                                    <option value="Kab. Lampung Utara" class="text-black">Kab. Lampung Utara</option>
                                    <option value="Kab. Way Kanan" class="text-black">Kab. Way Kanan</option>
                                    <option value="Kab. Pesawaran" class="text-black">Kab. Pesawaran</option>
                                    <option value="Kab. Tulang Bawang" class="text-black">Kab. Tulang Bawang</option>
                                    <option value="Kab. Pringsewu" class="text-black">Kab. Pringsewu</option>
                                    <option value="Kab. Lampung Barat" class="text-black">Kab. Lampung Barat</option>
                                    <option value="Kab. Tulang Bawang Barat" class="text-black">Kab. Tulang Bawang Barat</option>
                                    <option value="Kab. Mesuji" class="text-black">Kab. Mesuji</option>
                                    <option value="Kab. Pesisir Barat" class="text-black">Kab. Pesisir Barat</option>
                                    <option value="Kota Metro" class="text-black">Kota Metro</option>
                                </select>
                                <span>Kab/Kota</span>
                                <i></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="lg:flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <div class="inputBox relative w-full mt-5">
                                <input name="jumlahPDBK" class="relative" type="number" required="required">
                                <span>Jumlah PDBK</span>
                                <i></i>
                            </div>
                        </div>
                        <div class="flex flex-col flex-1 mb-4">
                            <div class="inputBox relative w-full mt-5">
                                <input name="namaPembimbing" class="relative" type="text" required="required">
                                <span class="">Nama Pembimbing PDBK</span>
                                <i></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="lg:flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <div class="inputBox relative w-full mt-5">
                                <select id="jenisKelamin" name="jenisKelamin" type="select" id="jenisKelamin"
                                    required>
                                    <option value="pilih" hidden class="text-black">Pilih Jenis Kelamin</option>
                                    <option value="l" class="text-black">Laki-Laki</option>
                                    <option value="p" class="text-black">Perempuan</option>
                                </select>
                                <span>Jenis Kelamin</span>
                                <i></i>
                            </div>
                        </div>
                        <div class="flex flex-col flex-1 mb-4">
                            <div class="inputBox relative w-full mt-5">
                                <input name="pangkat" class="relative" type="text" required="required">
                                <span>Pangkat/Golongan (Jika ASN)</span>
                                <i></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="lg:flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <div class="inputBox relative w-full mt-5">
                                <input name="alamatTinggal" class="relative" type="text" required="required">
                                <span>Alamat Tinggal</span>
                                <i></i>
                            </div>
                        </div>
                        <div class="flex flex-col flex-1 mb-4">
                            <div class="inputBox relative w-full mt-5">
                                <input name="nomorHP" class="relative" type="text" required="required">
                                <span>No HP </span>
                                <i></i>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="links">
                    <a href="/lupa-password-si" class="hover:text-white">Forgot Password ?</a>
                    <a href="/registrasi-si" class="hover:text-white">Signup</a>
                </div> --}}
                <input type="submit" value="Kirim"
                    class="text-white font-bold text-center w-full m-auto hover:bg-[#D87815]">
            </form>
        </div>
    </div>
</body>

</html>
