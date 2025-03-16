<x-layout>
    <h1>{{$title}}</h1>
   
        
    <ul>
        @forelse($jobs as $job )
            
        <li>{{$job}}</li>
        @empty
            <li>No job availbale</li>
        @endforelse
       
     </ul>
</x-layout>   
   
