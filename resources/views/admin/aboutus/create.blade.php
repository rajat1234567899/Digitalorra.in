@extends('admin.dashboard')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h4 fw-bold">Add New About Us Section</h1>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin.aboutus.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Section Name:</label>
                    <input type="text" name="section" class="form-control" value="{{ old('section') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Content:</label>
                    <textarea name="content" id="editor" class="form-control">{{ old('content') }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Save Section
                </button>
            </form>
        </div>
    </div>
</div>

<!-- CKEditor 5 -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'), {
            toolbar: [
                'heading', '|', 'bold', 'italic', 'underline', 'link', 'bulletedList', 'numberedList', 'undo', 'redo'
            ],
            heading: {
                options: [
                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                    { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                    { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                    { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                    { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                ]
            }
        })
        .catch(error => {
            console.error(error);
        });
</script>
@endsection
