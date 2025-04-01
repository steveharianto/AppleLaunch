@extends('layouts.app')

@section('title', 'Tambah Produk Baru - AppleLaunch.id')

@section('content')
    <div class="bg-white rounded-lg shadow-lg p-8">
        <h1 class="text-3xl font-bold mb-6">Tambah Produk Baru</h1>

        <form action="{{ route('promotions.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-6">
                <label for="title" class="block text-gray-700 font-bold mb-2">Judul Produk</label>
                <input type="text" name="title" id="title" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="{{ old('title') }}" required>
                @error('title')
                    <p class="text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="description" class="block text-gray-700 font-bold mb-2">Deskripsi</label>
                <textarea name="description" id="description" rows="6" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="image" class="block text-gray-700 font-bold mb-2">Gambar Produk</label>
                <input type="file" name="image" id="image" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
                @error('image')
                    <p class="text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="flex gap-4">
                <button type="submit" class="bg-black text-white px-6 py-3 rounded-md hover:bg-gray-800 transition">
                    Simpan
                </button>
                <a href="{{ route('home') }}" class="bg-gray-200 text-black px-6 py-3 rounded-md hover:bg-gray-300 transition">
                    Batal
                </a>
            </div>
        </form>
    </div>
@endsection
