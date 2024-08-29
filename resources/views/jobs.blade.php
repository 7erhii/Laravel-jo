<x-layout>
    <x-slot:heading>
        <h1 class="text-3xl font-bold mb-6 text-center">Jobs Page</h1>
    </x-slot:heading>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach ($jobs as $job)
            <div class="bg-white shadow-lg rounded-lg p-6 hover:shadow-xl transition-shadow duration-300">
                <a href="/jobs/{{ $job['id']}}" class="block text-xl font-semibold text-blue-600 hover:text-blue-800">
                    {{ $job['title'] }}
                </a>
                <p class="text-gray-600 mt-2">Pays <span class="font-medium text-black">${{ $job['salary'] }}</span></p>
            </div>
        @endforeach
    </div>
</x-layout>
