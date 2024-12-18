<x-layout>
    <x-slot:heading>
        Job 
    </x-slot:heading>
    
   <h2 class=" font-bold text-lg"> {{ $job['title'] }}</h2>
    <h1>This Job Pays {{  $job['salary'] }} Per Years</h1>
</x-layout>