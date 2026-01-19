@extends('layouts.app')

@section('title', 'Post a Job')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow border-0">
                <div class="card-header bg-white border-0 py-3">
                    <h2 class="h4 fw-bold mb-0">Post a New Job</h2>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('jobs.store') }}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="title" class="form-label fw-bold">Job Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" required>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="company" class="form-label fw-bold">Company Name</label>
                                <input type="text" class="form-control @error('company') is-invalid @enderror" id="company" name="company" value="{{ old('company') }}" required>
                                @error('company')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="location" class="form-label fw-bold">Location</label>
                                <input type="text" class="form-control @error('location') is-invalid @enderror" id="location" name="location" value="{{ old('location') }}" required>
                                @error('location')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="salary" class="form-label fw-bold">Salary (Optional)</label>
                                <input type="text" class="form-control @error('salary') is-invalid @enderror" id="salary" name="salary" value="{{ old('salary') }}">
                                @error('salary')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="job_type" class="form-label fw-bold">Job Type</label>
                                <select class="form-select @error('job_type') is-invalid @enderror" id="job_type" name="job_type" required>
                                    <option value="" selected disabled>Select Type</option>
                                    <option value="Full Time" {{ old('job_type') == 'Full Time' ? 'selected' : '' }}>Full Time</option>
                                    <option value="Part Time" {{ old('job_type') == 'Part Time' ? 'selected' : '' }}>Part Time</option>
                                    <option value="Contract" {{ old('job_type') == 'Contract' ? 'selected' : '' }}>Contract</option>
                                    <option value="Freelance" {{ old('job_type') == 'Freelance' ? 'selected' : '' }}>Freelance</option>
                                    <option value="Internship" {{ old('job_type') == 'Internship' ? 'selected' : '' }}>Internship</option>
                                </select>
                                @error('job_type')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="description" class="form-label fw-bold">Job Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="6" required>{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('admin.dashboard') }}" class="btn btn-light border">Cancel</a>
                            <button type="submit" class="btn btn-primary px-4">Post Job</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
