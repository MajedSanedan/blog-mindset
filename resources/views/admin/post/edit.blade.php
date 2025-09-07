<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إنشاء منشور جديد</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 20px;
        }

        .header {
            background: linear-gradient(to right, #4e54c8, #8f94fb);
            color: white;
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 10px;
            text-align: center;
        }

        .form-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-bottom: 30px;
        }

        .form-title {
            color: #4e54c8;
            font-weight: 700;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid #e9ecef;
        }

        .form-label {
            font-weight: 600;
            color: #495057;
            margin-bottom: 10px;
        }

        .form-control {
            border-radius: 8px;
            padding: 12px 15px;
            border: 2px solid #e1e5eb;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: #4e54c8;
            box-shadow: 0 0 0 0.25rem rgba(78, 84, 200, 0.25);
        }

        textarea.form-control {
            min-height: 150px;
        }

        .btn-primary {
            background: linear-gradient(to right, #4e54c8, #8f94fb);
            border: none;
            padding: 12px 25px;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(78, 84, 200, 0.4);
        }

        .btn-secondary {
            background: #6c757d;
            border: none;
            padding: 12px 25px;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s;
        }

        .btn-secondary:hover {
            background: #5a6268;
        }

        .image-preview {
            width: 100%;
            height: 200px;
            border: 2px dashed #dee2e6;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
            overflow: hidden;
        }

        .image-preview img {
            max-width: 100%;
            max-height: 100%;
            display: flex;
        }

        .footer {
            text-align: center;
            padding: 20px;
            color: #6c757d;
        }

        .alert {
            border-radius: 10px;
            border: none;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 768px) {
            .form-container {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1><i class="fas fa-plus-circle me-2"></i>تعديل منشور </h1>
            <p class="mb-0">استخدم هذا النموذج لتعديل منشور في المدونة</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- رسائل التنبيه -->
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fas fa-exclamation-circle me-2"></i>
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fas fa-check-circle me-2"></i>
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="form-container">
                    <h3 class="form-title"><i class="fas fa-edit me-2"></i>نموذج تعديل منشور</h3>

                    <form action="/admin/post/update/{{$post->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                     

                        <div class="mb-4">
                            <label for="title" class="form-label">عنوان المنشور <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="title" name="title"
                                value="{{ $post->title }}" placeholder="أدخل عنوان المنشور" required>
                        </div>

                        <div class="mb-4">
                            <label for="content" class="form-label">محتوى المنشور <span
                                    class="text-danger">*</span></label>
                            <textarea class="form-control" id="content" name="content" rows="6" placeholder="أدخل محتوى المنشور هنا..."
                                required>{{ $post->content }}</textarea>
                        </div>

                        <div class="mb-3">
                            <div class="mb-3">
                                <label for="categories" class="form-label">Select Categories</label>
                                <select name="categories[]" class="form-control" multiple required>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $post->categories->contains($category->id) ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <small class="text-muted">Hold CTRL (Windows) or CMD (Mac) to select multiple</small>
                            </div>


                            @error('category_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-4">
                            <label for="image" class="form-label">صورة المنشور</label>
                            <input type="file" class="form-control" id="image" name="image" accept="image/*"
                                onchange="previewImage(this)">
                            <div class="form-text">يُفضل صورة بحجم 1200x630 بكسل للعرض الأمثل</div>

                            {{-- <img src="{{ asset('storage/' . $post->image) }}" alt="صورة المنشور" style="width: 60px; height: 60px; object-fit: cover; border-radius: 5px;"> --}}
                            <div class="image-preview mt-3">
                                <img id="imagePreview" src="{{ asset('storage/' . $post->image) }}" alt="معاينة الصورة">
                                <span id="previewText" class="text-muted">معاينة الصورة ستظهر هنا</span>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-right me-2"></i>العودة للقائمة
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-2"></i>تعديل المنشور
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        © 2023 نظام المدونة - جميع الحقوق محفوظة
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // دالة لعرض معاينة الصورة
        function previewImage(input) {
            const preview = document.getElementById('imagePreview');
            const previewText = document.getElementById('previewText');

            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                    previewText.style.display = 'none';
                }

                reader.readAsDataURL(input.files[0]);
            } else {
                preview.style.display = 'none';
                previewText.style.display = 'block';
            }
        }

        // التحقق من صحة النموذج قبل الإرسال
        document.querySelector('form').addEventListener('submit', function(e) {
            const title = document.getElementById('title').value.trim();
            const content = document.getElementById('content').value.trim();

            if (!title) {
                e.preventDefault();
                alert('يرجى إدخال عنوان للمنشور');
                document.getElementById('title').focus();
                return;
            }

            if (!content) {
                e.preventDefault();
                alert('يرجى إدخال محتوى للمنشور');
                document.getElementById('content').focus();
                return;
            }
        });
    </script>
</body>

</html>
