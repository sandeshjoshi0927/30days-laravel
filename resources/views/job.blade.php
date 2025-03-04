<x-layout>
    <x-slot:heading>
        Job Page
    </x-slot:heading>

    <x-slot:title>
        Job
    </x-slot:title>

    Welcome to Job Page

    <h1 class="font-bold text-lg">{{ $job['title'] }}</h1>
    <p>{{ $job['salary'] }} per year.</p>
</x-layout>
