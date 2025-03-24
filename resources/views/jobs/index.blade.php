<x-layout>
    <h1>available Jobs</h1>
   
        
    <ul>
        @forelse($jobs as $job )
            
        <li>

            <a href="{{route('jobs.show',$job->id)}}">
            {{$job->title}}-{{$job->description}}</li></a>
        @empty
            <li>No job available</li>
        @endforelse
       
     </ul>
</x-layout>   
   
