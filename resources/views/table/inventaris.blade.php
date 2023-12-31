@extends('navigate.navigate')
@section('content')
    <div class="h-screen w-screen flex">
        <div class="h-full w-full mx-10 flex">
            <div class="w-[70%]">

                <div class="flex flex-col justsify-between w-full my-10">
                    <h3>Inventaris</h3>
                    <div class="relative mt-1">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 light:text-white" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" id="table-search"
                            class="block p-2 pl-10 text-sm border border-white rounded-lg w-80 bg-white focus:ring-primary focus:border-primary light:bg-gray-700 light:border-gray-600 light:placeholder-gray-400 text-black light:focus:ring-primary light:focus:border-primary"
                            placeholder="Search for items">
                    </div>
                </div>
                <div class="bg-gray-500">
                    <table class="w-full text-sm text-left text-gray-500 light:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 light:bg-gray-700 light:text-gray-400">

                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    No
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Id Inventaris
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Id Studio
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama Barang
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Kondisi
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $dt)
                                <tr class="bg-white border-b light:bg-gray-900 light:border-gray-700">
                                    <td scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap light:text-white">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $dt->id_inventaris }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $dt->id_studio }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $dt->nama_barang }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $dt->kondisi }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu d-absolute z-3">
                                                <a class="dropdown-item"
                                                    href="/dashboard/edit-produk/{{ $dt->id_inventaris }}"><i
                                                        class="bx bx-edit-alt me-1"></i> Edit</a>

                                                <a class="dropdown-item"
                                                    href="lihat-produk/dltProduk/{{ $dt->id_inventaris }}"><i
                                                        class="bx bx-trash me-1"></i> Delete</a>
                                            </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="flex flex-col w-[30%] my-10 mx-20">
                <p class="text-center font-semibold uppercase text-3xl">Tambah Inventaris</p>
                <div class="my-5 flex flex-col">
                    <label for="nama_band">Nama Band</label>
                    <div class="flex flex-col">
                        <input type="text" class="w-full rounded-xl hover:ring-button placeholder:ring-button my-5"
                            name="nama_band" placeholder="Masukkan">
                    </div>
                    <label for="jam">Jam</label>
                    <div class="flex flex-col">
                        <input type="time" class="w-full rounded-xl hover:ring-button placeholder:ring-button my-5"
                            name="jam" placeholder="Masukkan">
                    </div>

                    <button
                        class="w-full rounded-xl bg-button hover:bg-emerald-200 placeholder:ring-button my-5 p-2">Submit</button>
                </div>

            </div>

        </div>
    </div>
@endsection
