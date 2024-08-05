<!-- resources/views/certifications/show.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Certification Details') }}
        </h2>
    </x-slot>

    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold">{{ $certification->title }}</h1>
        <p class="mt-2">Organization: {{ $certification->organization }}</p>
        <p class="mt-2">Date: {{ date('d-m-Y', strtotime($certification->date)) }}</p>
        <p class="mt-2">Credential ID: {{ $certification->credential_id }}</p>
        <p class="mt-2">Credential URL: <a href="{{ $certification->credential_url }}" class="text-blue-500">{{ $certification->credential_url }}</a></p>
    </div>
</x-app-layout>
