<x-layout>
    <x-slot:heading>
        Job Page
    </x-slot:heading>
    <h1>Hello This Is Contact Page </h1>
   <div class="space-y-4">

       @foreach ($jobs as $job)
       
       <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200">
       <div class="font-bold text-blue-500">{{ $job->employer->name }}</div>
        <div>
           <strong>{{ $job["title"] }}:</strong> Pays {{$job['salary'] }} Per Years 
        </div>
    </a>
    @endforeach

    
        {{ $jobs->links() }}
    
</div>
</x-layout>