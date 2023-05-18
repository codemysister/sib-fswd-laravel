

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />

</head>
<body>



<div class="p-4">
   <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">

   <h1 class="text-3xl font-bold text-center mb-8 ">Detail Users</h1>
   <div class="h-screen">
    <div class="flex mx-auto justify-center mt-20 w-[80%] h-[80%] gap-4">
        <div class="w-[35%]">
            <img class="h-full h-44 w-64 rounded-md" src="{{asset('assets/img/irene (2).jpg')}}" alt="">
        </div>
        <div class="w-[65%] items-center">
            <div class="relative overflow-x-auto shadow-md rounded-md">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                    <thead>
                        <tr>
                            <td colspan="3" class="px-6 py-3 text-white text-center font-bold bg-red-600 rounded-md">
                                Biodata
                            </td>

                        </tr>
                    </thead>
                    <tbody class="">


                        <tr class="dark:bg-gray-800">
                            <td class="w-[30%] px-6 py-4 font-bold">
                                Nama
                            </td>
                            <td>:</td>
                            <td class="px-6 py-4">
                                Irene
                            </td>
                        </tr>

                        <tr class="dark:bg-gray-800">
                            <td class="w-[30%] px-6 py-4 font-bold">
                                Role
                            </td>
                            <td>:</td>
                            <td class="px-6 py-4">
                                Admin
                            </td>
                        </tr>

                        <tr class="dark:bg-gray-800">
                            <td class="w-[30%] px-6 py-4 font-bold">
                                Email
                            </td>
                            <td>:</td>
                            <td class="px-6 py-4">
                                irene@gmail.com
                            </td>
                        </tr>

                        <tr class="dark:bg-gray-800">
                            <td class="w-[30%] px-6 py-4 font-bold">
                                Telepon
                            </td>
                            <td>:</td>
                            <td class="px-6 py-4">
                                087617231263
                            </td>
                        </tr>

                        <tr class="dark:bg-gray-800">
                            <td class="w-[30%] px-6 py-4 font-bold">
                                Alamat
                            </td>
                            <td>:</td>
                            <td class="px-6 py-4">
                                Purwokerto, Jawa Tengah
                            </td>
                        </tr>



                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>

   </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>
</html>
