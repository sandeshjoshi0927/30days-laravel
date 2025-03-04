<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <x-slot:title>
        Job
    </x-slot:title>

    Welcome to Jobs Page
    <ul>
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="text-blue-400 hover:underline">
                <li><strong>{{ $job['title'] }}:</strong> pays {{ $job['salary'] }} per year.</li>
            </a>
        @endforeach
    </ul>
</x-layout>
