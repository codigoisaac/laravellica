<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>

    @foreach ($jobs as $job)
        <li>
            <a href="/jobs/{{ $job['id'] }}" class="text-cyan-500 hover:underline">
                <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
            </a>
        </li>
    @endforeach
</x-layout>
