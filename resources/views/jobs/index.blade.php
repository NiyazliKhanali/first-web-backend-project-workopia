<x-layout>
<h1>Available Jobs</h1>
@if(!empty($jobs))
<ul>
    @foreach($jobs as $job)
    <li>
        <a href = "{{route('jobs.show', $job->id)}}">{{$job->title}}</a>-{{$job->description}}
    </li>
    @endforeach
</ul>
@else
    <p>No jobs available</p>
@endif
</x-layout>