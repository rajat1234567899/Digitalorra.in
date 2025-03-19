@extends('admin.dashboard')

@section('content')
<h1>Edit {{ ucfirst($content->section) }} Content</h1>

@if($errors->any())
    <p>{{ $errors->first() }}</p>
@endif

<form action="{{ route('admin.contents.update', $content->id) }}" method="POST">
    @csrf
    <label>Content:</label>
    <textarea name="content" id="editor">{{ $content->content }}</textarea>

    <button type="submit">Update</button>
</form>
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
