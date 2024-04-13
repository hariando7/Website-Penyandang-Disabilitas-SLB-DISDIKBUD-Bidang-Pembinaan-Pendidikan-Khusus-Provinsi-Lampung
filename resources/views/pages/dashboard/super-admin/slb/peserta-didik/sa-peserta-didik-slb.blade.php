<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data SLB | Peserta Didik</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/landing/prov-lampung2.svg">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Include SheetJS library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js"></script>
    <style>
        .hide-scrollbar {
            scrollbar-width: thin;
            scrollbar-color: transparent transparent;
            overflow: hidden;
        }

        .hide-scrollbar::-webkit-scrollbar {
            width: 6px;
        }

        .hide-scrollbar::-webkit-scrollbar-thumb {
            background-color: transparent;
        }
    </style>
    <style>
        @keyframes moving-border {
            0% {
                border-color: white;
            }

            50% {
                border-color: #297785;
            }

            100% {
                border-color: white;
            }
        }

        #moving-border {
            animation: moving-border 3s infinite;
        }
    </style>
</head>

<body class="bg-white z-10">
    <div>
        <x-dashboard-side-bar-sa />
        <div class="pl-[280px] h-screen pt-2 pr-5 pb-[85px] full-height">
            <div class="flex justify-between pb-2">
                <div class="text-center items-center justify-center text-[#297785] font-bold text-[32px]">Peserta Didik
                    SLB Provinsi Lampung
                </div>
                <div class="">
                    <x-buttitle-landing ref="/sa-statistik-peserta-didik" color="#FA8F21" width="[13rem]"
                        title="Statistik Peserta Didik SLB"
                        extendClass="text-white text-center py-2 lg:py-2 hover:bg-[#D87815]" />
                </div>
            </div>
            <div class="rounded shadow-lg h-full border-solid border-4 border-[#297785] pt-5 pl-5 pr-3 pb-1"
                id="moving-border">
                <div class="max-h-[calc(100%-1rem)] overflow-y-auto overflow-x-auto hide-scrollbar">
                    {{-- isi konten disini --}}
                    <form class="flex flex-row gap-2">
                        <div class="basis-[20%]">
                            <select name="filterSekolah" id="filterSekolah"
                                class="z-10 inline-flex items-center py-2.5 w-full pl-2 text-sm font-medium text-center text-[#297785] border-2 border-[#297785] dark:border-[#297785] focus:border-[#FA8F21] dark:text-[#297785] rounded-lg focus:ring-none"
                                onchange="cariSekolah(this)">
                                <option value="">semua</option>
                                @foreach ($sekolah as $data)
                                    <option value="{{ $data->id }}"
                                        @if (isset($_GET['filterSekolah'])) @if ($_GET['filterSekolah'] == $data->id) selected @endif
                                        @endif>{{ $data->nama }}</option>
                                @endforeach
                            </select>
                            <script>
                                function cariSekolah(e) {
                                    console.log(e.value);
                                    if (e.value === '') {
                                        window.location.href = window.location.origin + window.location.pathname;
                                    } else {
                                        e.form.submit();
                                    }
                                }
                            </script>
                            {{-- <div class="relative">
                                    <button id="dropdown-button" data-dropdown-toggle="dropdown"
                                        class="z-10 inline-flex items-center py-2.5 w-full pl-2 text-sm font-medium text-center text-[#297785] border-2 border-[#297785] dark:border-[#297785] focus:border-[#FA8F21] dark:text-[#297785] rounded-lg focus:ring-none"
                                        type="button" onclick="toggleDropdown()">Filter Nama Sekolah
                                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>
                                    <div id="dropdown"
                                        class="absolute z-20 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-[#FA8F21] top-full mt-1">
                                        <ul class="py-2 text-sm text-gray-200 dark:text-gray-200"
                                            aria-labelledby="dropdown-button">
                                            <li>
                                                <a href="#" onclick="filterGender('All')"
                                                    class="block px-4 py-2 hover:bg-[#D87815] dark:hover:bg-[#D87815] dark:hover:text-white hover:text-white">Bina
                                                    Insani</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> --}}
                        </div>
                        <div class="basis-[70%]">
                            <div class="flex items-center mx-auto my-auto">
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                        <x-svg-search />
                                    </div>
                                    <input type="text" name="pencarian" id="simple-search"
                                        class="mx-auto border-2 border-[#297785] dark:border-[#297785] text-black text-sm rounded-lg focus:border-[#FA8F21] block w-full ps-10 p-2.5 dark:hover:text-black hover:text-black dark:placeholder-gray-400 placeholder-gray-400 dark:focus:ring-[#FA8F21] focus:ring-[#FA8F21]"
                                        placeholder="Search..." oninput="cekKosong(this)"
                                        value="{{ isset($_GET['pencarian']) ? $_GET['pencarian'] : '' }}" />
                                    <script>
                                        function cekKosong(e) {
                                            if (e.value === '') {
                                                window.location.href = window.location.origin + window.location.pathname;
                                            }
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="basis-[10%]">
                            <button id="print-button" type="button" onclick="showModal()"
                                class="inline-flex w-full items-center gap-2 rounded-md border border-[#FA8F21] bg-[#FA8F21] px-5 py-2 text-center text-center text-sm font-medium text-white hover:bg-[#D87815] focus:outline-none focus:ring-2 focus:ring-[#FA8F21] dark:border-[#FA8F21] dark:bg-[#FA8F21] dark:text-white dark:hover:bg-[#D87815] dark:focus:ring-[#FA8F21]">
                                <x-svg-print />
                                Print
                            </button>
                            <!-- Main modal -->
                            <div id="modal-print" tabindex="-1" aria-hidden="true"
                                class="fixed bottom-0 left-[260px] right-0 top-0 z-50 flex hidden items-center justify-center bg-opacity-50 backdrop-blur-sm">
                                <div class="relative max-h-full w-full max-w-md p-4">
                                    <!-- Modal content -->
                                    <div class="relative rounded-lg bg-[#297785] shadow dark:bg-[#297785]">
                                        <!-- Modal header -->
                                        <div
                                            class="flex items-center justify-between rounded-t border-b border-white p-4 dark:border-white md:p-5">
                                            <div class="div">
                                                <h3 class="text-lg font-semibold text-white dark:text-white">
                                                    Cetak Data<br>
                                                </h3>
                                                <h5 class="text-white">
                                                    <x-time-saat-ini />
                                                </h5>
                                            </div>
                                            <button type="button"
                                                class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-white hover:bg-[#D87815] hover:text-white dark:hover:bg-[#D87815] dark:hover:text-white"
                                                data-modal-close="modal-print" onclick="hideModal()">
                                                <svg class="h-3 w-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 14 14">
                                                    <path stroke="white" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal footer -->
                                        <div
                                            class="m-auto flex items-center justify-center gap-5 rounded-b border-t border-gray-200 p-4 text-center dark:border-gray-600 md:p-5">
                                            <button data-modal-hide="static-modal" type="button" id="downloadExcel"
                                                class="btn rounded-lg border-none bg-[#FA8F21] px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-[#D87815] hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300">Download
                                                Excel</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="relative overflow-x-auto overflow-y-auto shadow-sm sm:rounded-lg mt-5">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 bg-white">
                            <thead class="text-xs text-white uppercase bg-[#2F8386] dark:bg-[#2F8386] dark:text-white">
                                <tr>
                                    <th scope="col" class="px-3 py-2">
                                        No
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Tahun
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Nama Sekolah
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Nama Siswa
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        JK
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Jenis Ketunaan
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Kelas
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Romble
                                    </th>
                                </tr>
                            <tbody>
                                <?php
                                // $dummyData = [
                                //     [
                                //         'id' => 1,
                                //         'tahun' => '2023',
                                //         'namaSiswa' => 'Rizkyaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                                //         'jenisKelamin' => 'Laki-laki',
                                //         'jenisKetunaan' => 'Tuna Rungu',
                                //         'kelas' => 'XII-A',
                                //         'romble' => '1A',
                                //     ],
                                // ];
                                ?>
                                <?php foreach ($dummyData as $index => $data): ?>
                                <tr
                                    class="bg-white border-b dark:bg-white dark:border-gray-700 border-gray-700 hover:bg-[#C4DDDE] dark:hover:bg-[#C4DDDE] text-black hover:text-whitee">
                                    <td class="px-3 py-2">{{ ($DATA->currentPage() - 1) * 10 + $index + 1 }}</td>
                                    <td class="px-3 py-2"><?= $data['tahun'] ?></td>
                                    <td class="px-3 py-2"><?= $data['namaSekolah'] ?></td>
                                    <td class="px-3 py-2">
                                        <?php
                                        $namaSiswa = $data['namaSiswa'];
                                        echo strlen($namaSiswa) > 15 ? substr($namaSiswa, 0, 15) . '...' : $namaSiswa;
                                        ?>
                                    </td>
                                    <td class="px-3 py-2"><?= $data['jenisKelamin'] ?></td>
                                    <td class="px-3 py-2"><?= $data['jenisKetunaan'] ?></td>
                                    <td class="px-3 py-2"><?= $data['kelas'] ?></td>
                                    <td class="px-3 py-2"><?= $data['romble'] ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="relative flex justify-between mt-5">
                        <div class="font-bold text-black">Jumlah : {{ $DATA->total() }}</div>
                        <div class="">
                            {{ $DATA->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('downloadExcel').addEventListener('click', async function() {
                let data = await fetch('/api/peserta-didik');
                let allData = await data.json();

                function createExcel(data) {
                    const header = [
                        'No',
                        'Tahun',
                        'Nama Sekolah',
                        'Nama Siswa',
                        'JK',
                        'Jenis Ketunaan',
                        'Kelas',
                        'Romble'
                    ];

                    const excelData = [header];
                    data.forEach(function(item, index) {
                        const rowData = [
                            index + 1, // No
                            item.tahun,
                            item.namaSekolah,
                            item.namaSiswa,
                            item.jenisKelamin,
                            item.jenisKetunaan,
                            item.kelas,
                            item.romble
                        ];
                        excelData.push(rowData);
                    });

                    const ws = XLSX.utils.aoa_to_sheet(excelData);
                    const wb = XLSX.utils.book_new();
                    XLSX.utils.book_append_sheet(wb, ws, 'PesertaDidik-SLB');

                    XLSX.writeFile(wb, 'PesertaDidik-SLB.xlsx');
                }

                createExcel(allData);
            });
        });


        function showModal() {
            // Dapatkan modal
            var modal = document.getElementById("modal-print");
            // Tampilkan modal
            modal.classList.remove("hidden");
            modal.setAttribute("aria-hidden", "false");
        }
        // Close modal
        function hideModal() {
            // Dapatkan modal
            var modal = document.getElementById("modal-print");
            // Sembunyikan modal
            modal.classList.add("hidden");
            modal.setAttribute("aria-hidden", "true");
        }
    </script>
</body>

</html>
