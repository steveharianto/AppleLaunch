@extends('layouts.app')

@section('title', 'AppleLaunch.id - Produk Apple Terbaru')

@section('content')
    <div class="relative overflow-hidden bg-gradient-to-r from-gray-900 to-black text-white rounded-xl mb-12 shadow-2xl">
        <img src="{{ asset('storage/hero-banner.jpg') }}" alt="Apple Products" class="w-full h-72 md:h-[32rem] object-cover opacity-40 mix-blend-overlay">
        <div class="absolute inset-0 flex flex-col items-center justify-center">
            <div class="text-center px-6 max-w-4xl mx-auto">
                <h1 class="text-4xl md:text-6xl font-bold mb-4 tracking-tight">Produk Apple Terbaru</h1>
                <p class="text-xl md:text-2xl mb-8 font-light max-w-2xl mx-auto">Temukan inovasi terbaru dari Apple di AppleLaunch.id</p>
                <div class="mt-2">
                    <a href="#products" class="bg-white text-black px-8 py-3 rounded-full font-medium hover:bg-gray-100 transition duration-300 inline-block">
                        Lihat Semua Produk
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-8">
        <h2 id="products" class="text-3xl font-bold mb-6 text-gray-800 border-b pb-2">Koleksi Produk Terbaru</h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
        @foreach($promotions as $promotion)
            <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col h-full transform hover:-translate-y-1">
                <div class="bg-gray-50 p-4 flex items-center justify-center h-56">
                    <img src="{{ $promotion->image_url }}" alt="{{ $promotion->title }}" class="h-48 object-contain">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h2 class="text-xl font-bold mb-3 text-gray-800">{{ $promotion->title }}</h2>
                    <p class="text-gray-600 mb-5 flex-grow">{{ Str::limit($promotion->description, 120) }}</p>
                    <div class="flex justify-between items-center pt-2 border-t border-gray-100">
                        <a href="{{ route('promotions.show', $promotion) }}" class="bg-black text-white px-5 py-2 rounded-lg hover:bg-gray-800 transition-colors duration-300 inline-flex items-center">
                            <span>Lihat Detail</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                        <a href="{{ route('promotions.edit', $promotion) }}" class="text-gray-500 hover:text-black transition-colors duration-300 flex items-center">
                            <span>Edit</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="bg-gray-50 rounded-xl p-8 shadow-inner mb-12">
        <div class="max-w-4xl mx-auto text-center">
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Ingin Menambahkan Produk Baru?</h3>
            <p class="text-gray-600 mb-6">Tambahkan produk Apple terbaru ke katalog kami dengan mudah.</p>
            <a href="{{ route('promotions.create') }}" class="bg-black text-white px-6 py-3 rounded-lg hover:bg-gray-800 transition-colors duration-300 inline-block">
                Tambah Produk Baru
            </a>
        </div>
    </div>
@endsection
