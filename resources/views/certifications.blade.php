<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="w-full md:w-1/2">
        <form class="flex items-center">
            <label for="search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>
                </div>
                <input type="text" id="search" name="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required="">
            </div>
        </form>
    </div>

    <div class="flex flex-col min-h-screen bg-white dark:bg-gray-900">
        @forelse ( $certifications as $certification )
        <article class="py-20 max-w-screen-md border-b border-grey-500 pb-1">
            <a href="{{ $certification['credential_url'] }}" target="_blank">
                <h2 class="mb-1 text-3xl tracking-tighter font-bold text-gray-900 dark:text-primary-50">{{ $certification['title'] }}</h2>
            </a>
            <p class="dark:text-primary-50">Organization : {{ $certification['organization'] }}</p>
            <p class="my-4 font-lioght dark:text-primary-50">Credential ID : {{ $certification['credential_id'] }}</p>
            <p class="my-4 font-light dark:text-primary-50">Issue date : {{ date('d-m-Y', strtotime($certification['date'])) }}</p>
            <a href="{{ $certification['credential_url'] }}" target="_blank" class="font-mediu text-blue-500 hover:underline">Show Detail &raquo;</a>
        </article>

        @empty
        <div class="flex items-center justify-center h-screen">
            <h1 class="text-primary-950 dark:text-white font-bold text-4xl md:text-4xl">No certifications available</h1>
        </div>




        @endforelse ( $certifications as $certification )

    </div>
    <div class="mt-10">
        {{ $certifications->links() }}
    </div>

</x-layout>