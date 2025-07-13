<x-layout>
<x-slot name="title">Create Job</x-slot>
    <form action="/jobs" method="POST">
        @csrf
        <input type="text" id="title" name="title" placeholder="title" required><br><br>
        <textarea id="description" name="description" placeholder="description" rows="4" cols="50" required></textarea><br><br>

        <button type="submit">Submit</button>
    </form>
</x-layout>