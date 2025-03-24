<x-layout>
    <x-slot name="title">Create a job</x-slot>
    <h2>Create new Job</h2>
    <form action="/jobs" method="POST">
    @csrf
    <div>

        <input type="text" name='title' placeholder="title">
        @error('title')
        <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
        @enderror
    </div>
    <div>

        <input type="text" name="description" placeholder="description">
        @error('description')
        <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
        @enderror
    </div>
    <button type="submit">Add</button>
    </form>
</x-layout>
