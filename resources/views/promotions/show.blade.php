@extends('layouts.app')

@section('title', $promotion->title . ' - AppleLaunch.id')

@section('content')
    <div class="max-w-6xl mx-auto mb-12">
        <nav class="mb-6 text-sm text-gray-500">
            <ol class="list-none p-0 inline-flex items-center">
                <li class="flex items-center">
                    <a href="{{ route('home') }}" class="hover:text-black transition-colors">Beranda</a>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </li>
                <li class="text-gray-900 font-medium">{{ $promotion->title }}</li>
            </ol>
        </nav>

        <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-8">
            <div class="md:flex">
                <div class="md:w-1/2 bg-gray-50 flex items-center justify-center p-8">
                    <img src="{{ $promotion->image_url }}" alt="{{ $promotion->title }}" class="max-h-96 object-contain transition-all duration-300 hover:scale-105">
                </div>
                <div class="p-8 md:p-12 md:w-1/2">
                    <h1 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900">{{ $promotion->title }}</h1>
                    
                    <div class="flex items-center mb-6">
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Apple Product</span>
                        <span class="text-gray-400 text-sm ml-4">Ditambahkan pada {{ $promotion->created_at->format('d M Y') }}</span>
                    </div>
                    
                    <div class="border-t border-b border-gray-100 py-6 my-6">
                        <h2 class="text-lg font-semibold mb-4 text-gray-800">Deskripsi Produk</h2>
                        <div class="prose prose-lg max-w-none text-gray-600">
                            <p>{{ $promotion->description }}</p>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-3 mt-8">
                        <a href="{{ route('home') }}" class="inline-flex items-center justify-center px-6 py-3 border border-gray-300 rounded-lg text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                            </svg>
                            Kembali ke Beranda
                        </a>
                        <a href="{{ route('promotions.edit', $promotion) }}" class="inline-flex items-center justify-center px-6 py-3 bg-black text-white rounded-lg hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                            Edit Produk
                        </a>
                        <form action="{{ route('promotions.destroy', $promotion) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                class="inline-flex items-center justify-center px-6 py-3 bg-red-600 text-white rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-colors duration-300" 
                                onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-gray-50 rounded-xl p-8 shadow-inner">
            <div class="flex flex-col md:flex-row items-center justify-between max-w-4xl mx-auto">
                <div class="mb-6 md:mb-0">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Ingin melihat produk lainnya?</h3>
                    <p class="text-gray-600">Kembali ke halaman utama untuk melihat semua produk Apple terbaru</p>
                </div>
                <a href="{{ route('home') }}" class="bg-black text-white px-6 py-3 rounded-lg hover:bg-gray-800 transition-colors duration-300 inline-flex items-center">
                    <span>Lihat Semua Produk</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
@endsection
