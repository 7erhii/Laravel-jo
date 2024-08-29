<x-layout>
    <x-slot:heading>
        <h1 class="text-3xl font-bold mb-4">Jobs Page</h1>
    </x-slot:heading>

    <h2 class="text-xl font-semibold">{{ $job["title"] }}</h2>
    <p class="text-lg mt-2">This job pays <span class="font-medium text-green-500">{{ $job["salary"] }}</span></p>
</x-layout>
