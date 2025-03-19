@extends('admin.dashboard')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h4 fw-bold">Edit "{{ ucfirst($content->section) }}" Content</h1>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin.aboutus.update', $content->id) }}" method="POST">
                @csrf
                @method('PUT') <!-- Important: Ensures Laravel treats this as a PUT request -->

                <div class="mb-3">
                    <label class="form-label">Content:</label>
                    <textarea name="content" id="editor" class="form-control">{{ $content->content }}</textarea>
                </div>

                <button type="submit" class="btn btn-success">
                    <i class="fas fa-save"></i> Update Content
                </button>
            </form>
        </div>
    </div>
</div>

<!-- CKEditor 5 -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection
