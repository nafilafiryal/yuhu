@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="bg-gradient-to-r from-lavender-100 to-white">
    <div class="container mx-auto px-4 py-16 md:py-24">
        <div class="flex flex-col items-center text-center max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-bold text-purple-700 mb-6">Welcome to FileEx!</h1>
            <p class="text-lg text-gray-700 mb-8 max-w-2xl">
                Solusi penyimpanan file yang aman dan mudah digunakan. Simpan, bagikan, dan kelola file Anda dengan mudah bray.
            </p>
            <a href="{{ route('register') }}" class="btn-register px-8 py-3 text-lg">
                Get Started
            </a>
        </div>
    </div>
    
    <div class="container mx-auto px-4 py-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <div class="text-3xl text-purple-500 mb-4">
                    <i class="fas fa-cloud-upload-alt"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Easy Upload</h3>
                <p class="text-gray-600">Upload File mu dengan mudah dan aman hanya disini ^_^</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <div class="text-3xl text-purple-500 mb-4">
                    <i class="fas fa-folder-open"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Smart Control</h3>
                <p class="text-gray-600">Organize File kamu dengan folder, tags, dan smart search.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <div class="text-3xl text-purple-500 mb-4">
                    <i class="fas fa-share-alt"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Secure Sharing</h3>
                <p class="text-gray-600">Share files dengan aman tanpa risau di hack dan sadap wow!</p>
            </div>
        </div>
    </div>
</div>
@endsection