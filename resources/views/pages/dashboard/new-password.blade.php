<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Pass | Bidang Pembinaan Pendidikan Khusus | Disdikbud Provinsi Lampung</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/landing/prov-lampung2.svg">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />

    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

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
            justify-content: center;
        }

        .links a {
            margin: 5px 3px;
            font-size: 1em;
            color: #45f3ff;
            text-decoration: beige;
        }

        input[type="submit"] {
            border: none;
            outline: none;
            padding: 11px 11px;
            background: #FA8F21;
            cursor: pointer;
            border-radius: 4px;
            font-weight: 600;
            width: 200px;
            margin-top: 20px;
        }

        input[type="submit"]:active {
            opacity: 0.8;
        }

        .password-container {
            position: relative;
        }

        .eye-icon {
            display: inline-block;
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }

        #eye-close {
            display: none;
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Hide the eye-close-confirm icon on page load
            document.getElementById("eye-close-confirm").style.display = "none";
        });

        function togglePasswordVisibility(action, type) {
            var passwordInput;
            var eyeOpenIcon;
            var eyeCloseIcon;

            if (type === 'confirm') {
                passwordInput = document.getElementById("confirmPassword");
                eyeOpenIcon = document.getElementById("eye-open-confirm");
                eyeCloseIcon = document.getElementById("eye-close-confirm");
            } else {
                passwordInput = document.getElementById("password");
                eyeOpenIcon = document.getElementById("eye-open");
                eyeCloseIcon = document.getElementById("eye-close");
            }

            if (action === "open") {
                passwordInput.type = "text";
                eyeOpenIcon.style.display = "none";
                eyeCloseIcon.style.display = "block";
            } else {
                passwordInput.type = "password";
                eyeOpenIcon.style.display = "block";
                eyeCloseIcon.style.display = "none";
            }
        }
    </script>

</head>

<body>
    <div class="relative w-full min-h-screen bg-cover bg-no-repeat bg-center bg-[url({{ 'assets/landing/disdikbud.svg' }})]">
        <div class="absolute inset-0 bg-[#000000]/[0.10] bg-blend-overlay"></div>
        <div class="flex justify-between pl-10 pr-10 pt-10 absolute w-full">
            <div class="">
                <img src="assets/landing/prov-lampung2.svg" alt="" class="lg:w-[100px] lg:h-full">
            </div>
            <div class="flex items-start">
                <x-buttitle-landing ref="/admin-home-slb" color="#FA8F21" width="[10rem]" title="Home" extendClass="text-white text-center py-2 lg:py-3 hover:bg-[#D87815]" />
            </div>
        </div>
        <div class="box relative w-[400px] h-[520px] m-auto flex items-center m-auto mt-20">
            <form autocomplete="off" class="">
                <h2 class="mb-5">Selamat Datang
                    Di Dashboard SLB Bidang
                    Pembinaan Pendidikan Khusus</h2>
                <h2 class="mb-3 font-bold">Masukkan Password Baru</h2>
                <h3 class="text-center text-sm text-white">Gunakan minimal 8 karakter, Termasuk nomor dan
                    huruf kapital.</h3>
                <div class="inputBox relative w-[300px] mt-5">
                    <input type="password" name="password" id="password" oninvalid="this.setCustomValidity('Input your password, at least 6 character'); alertInputRequired()" oninput="this.setCustomValidity('')" minLength="6" maxlength="255" required />
                    <div class="eye-icon absolute right-4 top-[60%] z-50">
                        <button type="button" class="cursor-pointer" id="eye-open" onclick="togglePasswordVisibility('open')">
                            <svg id="eye-open" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill text-white" fill="white" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                            </svg>
                        </button>
                        <button type="button" class="" id="eye-close" onclick="togglePasswordVisibility('close')">
                            <svg id="eye-icon" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill text-black" fill="white" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z" />
                                <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z" />
                                <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z" />
                            </svg>
                        </button>
                    </div>
                    <span>Password Baru</span>
                    <i></i>
                </div>
                <div class="inputBox relative w-[300px] mt-5">
                    <input type="password" name="confirmPassword" id="confirmPassword" oninvalid="this.setCustomValidity('Input your password, at least 6 characters'); alertInputRequired()" oninput="this.setCustomValidity('')" minLength="6" maxlength="255" required />
                    <!-- Use the same set of eye icons for both password fields -->
                    <div class="eye-icon absolute right-4 top-[60%] z-50">
                        <button type="button" class="cursor-pointer" id="eye-open-confirm" onclick="togglePasswordVisibility('open', 'confirm')">
                            <svg id="eye-open" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill text-white" fill="white" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                            </svg>
                        </button>
                        <button type="button" class="" id="eye-close-confirm" onclick="togglePasswordVisibility('close', 'confirm')">
                            <svg id="eye-icon" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill text-black" fill="white" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z" />
                                <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z" />
                                <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z" />
                            </svg>
                        </button>
                    </div>
                    <span>Ulangi Password Baru</span>
                    <i></i>
                </div>
                <input type="submit" value="Simpan" class="text-white font-bold text-center w-full m-auto hover:bg-[#D87815]">
                <div class="links mt-5">
                    <div class="text-white text-[0.75em] text-decoration">Kembali ke
                        <a href="/login" class="hover:text-white text-[0.75em]">Sign In
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>