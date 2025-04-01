@extends('layouts.app')

@section('title', 'AppleLaunch.id - Produk Apple Terbaru')

@section('content')
    <div class="relative overflow-hidden bg-gray-900 text-white rounded-lg mb-8">
        <img src="{{ asset('storage/hero-banner.jpg') }}" alt="Apple Products" class="w-full h-64 md:h-96 object-cover opacity-50">
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center px-4">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Produk Apple Terbaru</h1>
                <p class="text-xl md:text-2xl mb-6">Temukan inovasi terbaru dari Apple di AppleLaunch.id</p>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($promotions as $promotion)
            <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                <img src="{{ $promotion->image_url }}" alt="{{ $promotion->title }}" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-bold mb-2">{{ $promotion->title }}</h2>
                    <p class="text-gray-700 mb-4">{{ Str::limit($promotion->description, 100) }}</p>
                    <div class="flex justify-between items-center">
                        <a href="{{ route('promotions.show', $promotion) }}" class="bg-black text-white px-4 py-2 rounded hover:bg-gray-800 transition">
                            Lihat Detail
                        </a>
                        <a href="{{ route('promotions.edit', $promotion) }}" class="text-gray-600 hover:text-black">
                            Edit
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
