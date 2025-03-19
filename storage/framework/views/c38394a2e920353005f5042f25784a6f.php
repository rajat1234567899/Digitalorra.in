

<?php $__env->startSection('content'); ?>
<h1>Edit <?php echo e(ucfirst($content->section)); ?> Content</h1>

<?php if($errors->any()): ?>
    <p><?php echo e($errors->first()); ?></p>
<?php endif; ?>

<form action="<?php echo e(route('admin.contents.update', $content->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <label>Content:</label>
    <textarea name="content" id="editor"><?php echo e($content->content); ?></textarea>

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


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newdigitalorra\resources\views/admin/contents/edit.blade.php ENDPATH**/ ?>