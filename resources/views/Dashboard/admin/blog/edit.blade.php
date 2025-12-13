@extends("Layout.layouttwo")

@section("AdminContent")
@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css" rel="stylesheet">
@endpush
<style>
    .form-control,
    .form-select {
        height: 42px;
        padding: 8px 14px;
        border: 1px solid #ccc;
        transition: border-color 0.3s ease-in-out;
        border-radius: 5px;
    }

    .form-label {
        font-weight: 600;
        margin-bottom: 5px;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: #b10937;
        box-shadow: none;
    }

    .textarea-large {
        height: 140px; /* Increased height for better usability */
        resize: vertical; /* Allow vertical resizing */
    }

    .img-preview {
        width: 120px;
        height: 120px;
        border-radius: 8px;
        object-fit: cover;
        border: 1px solid #ddd;
        padding: 3px;
    }

    .custom-btn {
        font-size: 16px;
        padding: 10px 20px;
        border-radius: 6px;
    }

    .btn-danger {
        background-color: #b10937;
        border: none;
    }

    .btn-danger:hover {
        background-color: #8b072b;
    }

    .btn-secondary {
        background-color: #6c757d;
        border: none;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
    }

    .form-container {
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
</style>

<div class="container mt-4">
    <div class="form-container">
        <h1 class="text-center" style="font-size: 23px; font-weight: bolder;">Blogs</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ route('Dashboard.admin.blog.update', $customer->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Author</label>
                    <input type="text" class="form-control" name="author" value="{{ old('author', $customer->author) }}" required />
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Date</label>
                    <input type="date" class="form-control" name="date" value="{{ old('date', $customer->date) }}" required />
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" value="{{ old('title', $customer->title) }}" required />
                </div>



                <div class="col-md-6 mb-3">
                    <label class="form-label">Category</label>
                    <select name="category_id" class="form-select" required>
                        <option value="" disabled>-- Select Category --</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id', $customer->category_id) == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>



                <div class="col-12 mb-3">
                    <label class="form-label">Short Description</label>
                    <textarea name="short_description" class="form-control textarea-large" required>{{ old('short_description', $customer->short_description) }}</textarea>
                </div>




<div class="col-12 mb-3">
    <label class="form-label">Meta Title</label>
    <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title', $customer->meta_title) }}" placeholder="Enter meta title for SEO (max 60 characters)">
</div>

<div class="col-12 mb-3">
    <label class="form-label">Meta Description</label>
    <textarea name="meta_description" class="form-control textarea-large" rows="3" placeholder="Enter meta description for SEO (max 300 characters)">{{ old('meta_description', $customer->meta_description) }}</textarea>
</div>



                <div class="col-12 mb-3">
                    <label class="form-label">Content</label>
                    <textarea name="content" id="summernote" class="form-control" required>{{ old('content', $customer->content) }}</textarea>

                </div>

                <div class="col-12 mb-3">
                    <label>Featured Image (optional)</label>
                    <input type="file" name="featured_image" class="form-control" accept="image/*">
                    @if($customer->featured_image)
                        <img src="{{ asset($customer->featured_image) }}" class="img-preview mt-2" alt="Current Image">
                    @endif
                </div>
            </div>

            <div class="d-flex justify-content-end mt-3">
                <a href="{{ url('blog') }}" class="btn btn-secondary custom-btn">Cancel</a>
                <button type="submit" style="background-color:#1d3a7d ;color:white;" class="btn custom-btn ms-2">Update</button>
            </div>
        </form>


    </div>
</div>


@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>

    <script>
        // $(document).ready(function () {
        //     $('#summernote').summernote({
        //         height: 300,
        //         toolbar: [
        //             ['style', ['style']],
        //             ['font', ['bold', 'italic', 'underline', 'clear']],
        //             ['fontname', ['fontname']],
        //             ['fontsize', ['fontsize']],
        //             ['color', ['color']],
        //             ['para', ['ul', 'ol', 'paragraph']],
        //             ['table', ['table']],
        //             ['insert', ['link', 'picture', 'video']],
        //             ['view', ['fullscreen', 'codeview', 'help']]
        //         ]
        //     });
        // });


        $('#summernote').summernote({
    height: 300,
    toolbar: [
        ['style', ['style']], // 👈 Needed for headings
        ['font', ['bold', 'italic', 'underline', 'clear']],
        ['fontname', ['fontname']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
    ],
    styleTags: ['p', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'] // 👈 Add this line
});

    </script>
@endpush


@endsection
