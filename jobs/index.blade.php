@extends('layouts.app')

@section('title', 'Jobs')

@section('content')

<div class="container py-5">
    
    @if(session('success'))
        <div class="alert alert-success border-0 shadow-sm rounded-3 mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold text-dark mb-0">Latest Opportunities</h2>
                
                @if(Auth::check() && Auth::user()->role === 'admin')
                    <a href="{{ route('jobs.create') }}" class="btn btn-primary rounded-pill px-4 shadow-sm">
                        <i class="bi bi-plus-lg"></i> Post New Job
                    </a>
                @endif
            </div>

            <div class="row g-3">
                @forelse($jobs as $job)
                    <div class="col-12">
                        <div class="card border-0 shadow-sm rounded-4 p-4 hover-shadow transition">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h4 class="fw-bold mb-1">
                                        <span class="text-dark">{{ $job->title }}</span>
                                    </h4>
                                    <div class="mb-2 text-muted small">
                                        <span class="fw-bold text-primary">{{ $job->company }}</span>
                                        <span class="mx-2">•</span>
                                        <span>{{ $job->location }}</span>
                                        <span class="mx-2">•</span>
                                        <span>{{ $job->created_at->diffForHumans() }}</span>
                                    </div>
                                    <div class="text-muted mb-3">
                                        {{ Str::limit($job->description, 180) }}
                                    </div>
                                    <div class="d-flex gap-2">
                                        @if($job->job_type)
                                            <span class="badge bg-light text-primary border border-primary-subtle rounded-pill px-3">{{ $job->job_type }}</span>
                                        @endif
                                        @if($job->salary)
                                            <span class="badge bg-light text-success border border-success-subtle rounded-pill px-3">{{ $job->salary }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                                    @if(Auth::check() && Auth::user()->role === 'admin')
                                        <div class="d-flex justify-content-md-end gap-2">
                                            <a href="{{ route('jobs.edit', $job->id) }}" class="btn btn-light text-warning fw-bold border-0">Edit</a>
                                            <form action="{{ route('jobs.destroy', $job->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-light text-danger fw-bold border-0" onclick="return confirm('Delete this job?')">Delete</button>
                                            </form>
                                        </div>
                                    @elseif(Auth::check() && Auth::user()->role === 'job_seeker')
                                        <form action="{{ route('jobs.apply', $job) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-primary rounded-pill px-4 py-2 fw-semibold shadow-sm">Apply Now</button>
                                        </form>
                                    @elseif(Auth::guest())
                                        <a href="{{ route('login') }}" class="btn btn-primary rounded-pill px-4 py-2 fw-semibold shadow-sm">Apply Now</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="text-center py-5">
                            <h4 class="text-muted">No jobs posted yet.</h4>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>

@endsection
