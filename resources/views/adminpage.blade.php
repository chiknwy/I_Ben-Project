<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js" integrity="sha512-XKa9Hemdy1Ui3KSGgJdgMyYlUg1gM+QhL6cnlyTe2qzMCYm4nAZ1PsVerQzTTXzonUR+dmswHqgJPuwCq1MaAg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>adminpage</title>
</head>

<body>

    <section class="flex">
        <!-- Sidebar -->
        <aside class="bg-indigo-900 px-3 text-gray-300 w-1/10 min-h-screen">
            <div class="flex flex-col items-stretch w-[50%] max-md:w-full max-md:ml-0">
                <img loading="lazy" src="{{URL('img/maps/iben-4-removebg-preview-5.png')}}" class="aspect-[1.33] object-contain object-center w-full overflow-hidden shrink-0 max-w-full grow max-md:mt-10" />
            </div>
            
        </aside>

        <!-- Main Content -->
        <main class="w-4/5 p-6 mb-4">
            <div class="bg-gradient-to-r from-slat-500 shadow-md rounded-md p-4">
                <h1 class="text-3xl  me-2 mb-2 font-semibold mb-4">Set Center Point</h1>
            </div>

            

            <div>
                
                <div class="mb-4 flex justify-end"> <!-- Menambahkan 'flex justify-end' untuk menempatkan elemen ke kanan -->
                    <!-- Tombol untuk Create Data -->
                    <a href="/adminmap" class="px-5 py-2 mt-3 text-xl rounded text-white bg-gray-800 font-semibold border border-purple-200  hover:bg-zinc-800  focus:outline-none">Create Data</a>
                </div>

                <table class="min-w-full divide-y divide-gray-200" id="myTable">
                    <div class="text-gray-500">
                        Show <select class="px-2 py-1 border rounded">
                            <option>10</option>
                            <option>25</option>
                            <option>50</option>
                            <option>100</option>
                        </select> entries
                        <div class="flex justify-end">
                            <input type="text" id="searchInput" placeholder="Search..." class="border  px-2 py-2 rounded-md ">
                        </div>
            
                    </div>
                    
                    <thead class="bg-gray-50">
                        <tr class="text-ce">
                            <th scope="col" class="px-5 py-2 text-justify text-xs font-medium text-gray-500 uppercase tracking-wider">
                                ID
                            </th>
                            <th scope="col" class="px-5 py-2 text-justify text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Titik Koordinat
                            </th>
                            <th scope="col" class="px-5 py-2 text-justify text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Action
                            </th>
                        </tr>
                    </thead>

                    <tbody class="bg-white divide-y divide-gray-200 ">
                        <!-- Anda perlu memasukkan data Anda di sini -->
                        <!-- Contoh baris tabel -->
                        <tr>
                            <td class="px-5 py-2">1</td>
                            <td class="px-5 py-2">Titik Koordinat</td>
                            
                            <td>
                                <form action="#" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="#" class=" px-2 py-2 rounded text-white bg-yellow-400 font-semibold   ">Edit</a>
                                    <button class=" px-2 py-2 rounded text-white bg-red-700 font-semibold   " onclick="return confirm('Anda Yakin ?')" type="submit">Delete</button>
                                   
                                </form>
                                
                            </td>
                        </tr>
                        <!-- Anda dapat menambahkan baris lainnya di sini -->
                    </tbody>
                   
                    
                </table>
            </div>
            
            <div class="flex justify-between items-center mt-4">
                <!-- Informasi Showing -->
                <div class="text-gray-500">
                    Showing 1 to 1 of <span class="font-semibold">entries 1</span>
                </div>
            
                <!-- Bagian Pagination -->
                <div id="paginationSection">
                    <!-- Pagination akan ditambahkan di sini -->
                    <!-- Misalnya: -->
                    <button class="px-3 py-1 bg-blue-500 text-white rounded">Previous</button>
                    <button class="px-3 py-1 bg-blue-500 text-white rounded">Next</button>
                </div>
            </div>
            
        </main>
    </section>
    <footer>
        <div class="bg-teal-300 flex flex-col items-stretch px-20 py-12 max-md:px-5">
            <div class="flex justify-between gap-5 ml-3 mr-4 items-start max-md:max-w-full max-md:flex-wrap max-md:mr-2.5">
              <div class="flex basis-[0%] flex-col items-start">
                <div class="text-blue-500 text-lg whitespace-nowrap ml-5 max-md:ml-2.5">I-Ben</div>
                <div class="text-indigo-700 text-lg font-medium whitespace-nowrap">
                  We help you <br /> find your fuel
                </div>
                <div class="items-stretch self-stretch flex justify-between gap-5 mt-6 max-md:justify-center">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/24db9dfd36834c72b5fc22234af8dbc82dc62ef521e4321acb50e1301b7e563c?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&" class="aspect-square object-contain object-center w-12 overflow-hidden shrink-0 max-w-full" />
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/ac5e3c6f95d20709af43aaa037a7f5261980a784ffa36d8707b1399bb29e2648?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&" class="aspect-square object-contain object-center w-12 overflow-hidden shrink-0 max-w-full" />
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/0e54f8105bdec6035c906c787f6083e8e6eadcb5beeaae996df977cf21bb2bf4?apiKey=202a2f9440ce4307ad5d7fcb6782a3df&" class="aspect-square object-contain object-center w-12 overflow-hidden shrink-0 max-w-full" />
                </div>
              </div>
              <div class="self-stretch max-md:max-w-full">
                <div class="gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0">
                  <div class="flex flex-col items-stretch w-[31%] max-md:w-full max-md:ml-0">
                    <div class="items-stretch flex grow flex-col max-md:mt-10">
                      <div class="text-stone-900 text-lg font-bold whitespace-nowrap">Information</div>
                      <div class="text-indigo-700 text-lg whitespace-nowrap mt-6">About</div>
                      <div class="text-indigo-700 text-lg whitespace-nowrap mt-6">Product</div>
                      <div class="text-indigo-700 text-lg whitespace-nowrap mt-6">Blog</div>
                    </div>
                  </div>
                  <div class="flex flex-col items-stretch w-[30%] ml-5 max-md:w-full max-md:ml-0">
                    <div class="items-stretch flex grow flex-col max-md:mt-10">
                      <div class="text-stone-900 text-lg font-bold whitespace-nowrap">Company</div>
                      <div class="text-indigo-700 text-lg whitespace-nowrap mt-6">Community</div>
                      <div class="text-indigo-700 text-lg whitespace-nowrap mt-6">Career</div>
                      <div class="text-indigo-700 text-lg whitespace-nowrap mt-6">Our story</div>
                    </div>
                  </div>
                  <div class="flex flex-col items-stretch w-[39%] ml-5 max-md:w-full max-md:ml-0">
                    <div class="items-stretch flex grow flex-col max-md:mt-10">
                      <div class="text-stone-900 text-lg font-bold whitespace-nowrap">Contact</div>
                      <div class="text-indigo-700 text-lg whitespace-nowrap mt-6">Getting Started</div>
                      <div class="text-indigo-700 text-lg whitespace-nowrap mt-6">Pricing</div>
                      <div class="text-indigo-700 text-lg whitespace-nowrap mt-6">Resources</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </footer>
</body>

</html>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Kode sebelumnya untuk search...
        
        // Pagination logic
        const table = document.getElementById('myTable');
        const rowsPerPage = 10;  // Ubah sesuai kebutuhan
        let currentPage = 1;

        function showPage(page) {
            const rows = table.querySelectorAll('tbody tr');
            const start = (page - 1) * rowsPerPage;
            const end = start + rowsPerPage;

            rows.forEach((row, index) => {
                if (index >= start && index < end) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }

        function renderPagination() {
            const totalRows = table.querySelectorAll('tbody tr').length;
            const totalPages = Math.ceil(totalRows / rowsPerPage);

            let paginationHtml = `
                <ul class="pagination">
                    <li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
                        <a class="page-link" href="#" onclick="changePage(${currentPage - 1})">Previous</a>
                    </li>
            `;

            for (let i = 1; i <= totalPages; i++) {
                paginationHtml += `
                    <li class="page-item ${currentPage === i ? 'active' : ''}">
                        <a class="page-link" href="#" onclick="changePage(${i})">${i}</a>
                    </li>
                `;
            }

            paginationHtml += `
                    <li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
                        <a class="page-link" href="#" onclick="changePage(${currentPage + 1})">Next</a>
                    </li>
                </ul>
            `;

            document.getElementById('paginationSection').innerHTML = paginationHtml;
        }

        function changePage(page) {
            currentPage = page;
            showPage(currentPage);
            renderPagination();
        }

        // Inisialisasi pagination
        showPage(currentPage);
        renderPagination();
    });
</script>
