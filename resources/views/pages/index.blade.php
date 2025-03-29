<x-layout>
    <h2 class="text-center text mb-4 font-bold border border-gray-300 p-3">Welcome to Workopia</h2>
    <div class="grid grid-cols-1 gap-4 md:grid-cols-3 mb-6">

            
        @forelse($jobs as $job )
        <x-job-card :job="$job"></x-job-card>
        
        @empty
        <p>No job available</p>
        @endforelse
    </div>
   <a href="{{route('jobs.index')}}" class="block text-xl text-center">
    <i class="fa fa-arrow-alt-circle-right"></i>Show All jobs
   </a>
    <x-bottom-banner/>
</x-layout>