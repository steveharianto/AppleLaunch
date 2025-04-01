@extends('layouts.app')

@section('title', $promotion->title . ' - AppleLaunch.id')

@section('content')
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="md:flex">
            <div class="md:w-1/2">
                <img src="{{ $promotion->image_url }}" alt="{{ $promotion->title }}" class="w-full h-64 md:h-full object-cover">
            </div>
            <div class="p-8 md:w-1/2">
                <h1 class="text-3xl font-bold mb-4">{{ $promotion->title }}</h1>
                <div class="prose max-w-none">
                    <p class="mb-6">{{ $promotion->description }}</p>
                </div>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="{{ route('home') }}" class="bg-gray-200 text-black px-4 py-2 rounded hover:bg-gray-300 transition">
                        Kembali ke Beranda
                    </a>
                    <a href="{{ route('promotions.edit', $promotion) }}" class="bg-black text-white px-4 py-2 rounded hover:bg-gray-800 transition">
                        Edit Produk
                    </a>
                    <form action="{{ route('promotions.destroy', $promotion) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition" 
                                onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                            Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
