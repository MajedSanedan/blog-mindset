<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة الفئات</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding-bottom: 50px;
        }
        
        .header {
            background: linear-gradient(to right, #4e54c8, #8f94fb);
            color: white;
            padding: 20px 0;
            margin-bottom: 30px;
            border-radius: 0 0 15px 15px;
        }
        
        .page-title {
            font-weight: 700;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }
        
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            border: none;
            margin-bottom: 20px;
        }
        
        .card-header {
            background: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);
            color: white;
            border-radius: 10px 10px 0 0 !important;
            font-weight: 600;
            padding: 15px 20px;
        }
        
        .table th {
            background-color: #eaf2ff;
            color: #4e54c8;
            font-weight: 600;
            border-top: none;
            padding: 15px;
        }
        
        .table td {
            padding: 15px;
            vertical-align: middle;
        }
        
        .btn-add {
            background: linear-gradient(to right, #4e54c8, #8f94fb);
            color: white;
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            font-weight: 600;
            transition: all 0.3s;
        }
        
        .btn-add:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(78, 84, 200, 0.4);
        }
        
        .btn-edit {
            background: linear-gradient(to right, #3498db, #2980b9);
            color: white;
            border: none;
            border-radius: 6px;
            padding: 6px 12px;
            transition: all 0.3s;
        }
        
        .btn-edit:hover {
            transform: translateY(-2px);
            box-shadow: 0 3px 8px rgba(52, 152, 219, 0.3);
        }
        
        .btn-delete {
            background: linear-gradient(to right, #ff6b6b, #ff9e7d);
            color: white;
            border: none;
            border-radius: 6px;
            padding: 6px 12px;
            transition: all 0.3s;
        }
        
        .btn-delete:hover {
            transform: translateY(-2px);
            box-shadow: 0 3px 8px rgba(255, 107, 107, 0.3);
        }
        
        .alert {
            border-radius: 10px;
            border: none;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }
        
        .badge-count {
            background: linear-gradient(to right, #4e54c8, #8f94fb);
            color: white;
            padding: 5px 10px;
            border-radius: 15px;
        }
        
        .footer {
            text-align: center;
            padding: 20px;
            color: #6c757d;
            margin-top: 40px;
        }
        
        .action-buttons {
            display: flex;
            gap: 8px;
        }
        
        .empty-state {
            text-align: center;
            padding: 40px 0;
            color: #6c757d;
        }
        
        .empty-state i {
            font-size: 5rem;
            margin-bottom: 20px;
            color: #dee2e6;
        }
        
        @media (max-width: 768px) {
            .table-responsive {
                overflow-x: auto;
            }
            
            .action-buttons {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="header text-center">
        <div class="container">
            <h1 class="page-title"><i class="fas fa-folder-tree me-2"></i>إدارة المنشورات</h1>
            <p class="lead">عرض وإدارة جميع المنشورات في النظام</p>
        </div>
    </div>

    <div class="container">
        <!-- رسائل التنبيه -->
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle me-2"></i>
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fas fa-exclamation-circle me-2"></i>
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="m-0">قائمة المنشورات</h3>
            <a href="{{ route('admin.categories.create') }}" class="btn btn-add">
                <i class="fas fa-plus me-2"></i>إضافة منشور جديد
            </a>
             <a href="{{ route('admin.dashboard') }}" class="btn btn-add">
                <i class=""></i>  العودة 
            </a>
        </div>

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span><i class="fas fa-list me-2"></i>المنشورات</span>
                <span class="badge-count">{{ $posts->count() }} منشور</span>
            </div>
            <div class="card-body">
                @if($posts->count() > 0)
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th> عنوان المنشور</th>
                                <th>تاريخ الإضافة</th>
                                <th>المحتوى</th>
                                <th>الصورة</th>
                                <th>الناشر</th>
                                <th>الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                            <i class="fas fa-folder"></i>
                                        </div>
                                        <div>
                                            <strong>{{ $post->name }}</strong>
                                            <div class="text-muted small">ID: {{ $post->id }}</div>
                                        </div>
                                    </div>
                                </td>
                              
                                <td>{{ $post->created_at->format('Y-m-d') }}</td>
                                <td>{{ Str::limit($post->content, 50) }}</td>
                                <td>
                                    @if($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="صورة المنشور" style="width: 60px; height: 60px; object-fit: cover; border-radius: 5px;">
                                    @else
                                    <span class="text-muted">لا توجد صورة</span>
                                    @endif
                                
                                <td>
                                    <div class="action-buttons">
                                        <a href="/admin/category/edit/{{$post}}" class="btn btn-edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="/admin/category/delete/{{$post->id}}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-delete" onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذه الفئة؟')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <div class="empty-state">
                    <i class="fas fa-folder-open"></i>
                    <h4>لا توجد منشورات</h4>
                    <p>لم يتم إضافة أي منشور حتى الآن. يمكنك البدء بإضافة منشور جديدة.</p>
                    <a href="{{ route('admin.posts.create') }}" class="btn btn-add mt-3">
                        <i class="fas fa-plus me-2"></i>إضافة منشور جديدة
                    </a>
                </div>
                @endif
            </div>
        </div>
    </div>

    <div class="footer">
        © 2023 نظام الإدارة - جميع الحقوق محفوظة
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // دالة التأكيد على الحذف
        function confirmDelete(categoryId, categoryName) {
            if (confirm(`هل أنت متأكد من رغبتك في حذف الفئة "${categoryName}"؟`)) {
                document.getElementById(`delete-form-${categoryId}`).submit();
            }
        }
    </script>
</body>
</html>