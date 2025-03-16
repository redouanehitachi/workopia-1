<x-layout>
    <x-slot name="title">Create a job</x-slot>
    <h2>Create new Job</h2>
    <form action="/jobs" method="POST">
    @csrf
    <input type="text" name='title' placeholder="title">
    <input type="text" name="description" placeholder="description">
    <button type="submit">Add</button>
    </form>
</x-layout>
