<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'مدونتي')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Styles -->
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            padding-top: 20px;
        }
        
        .blog-header {
            border-bottom: 1px solid #e5e5e5;
            margin-bottom: 30px;
        }
        
        .blog-title {
            font-weight: 700;
            color: #4e54c8;
        }
        
        .blog-nav a {
            color: #6c757d;
            text-decoration: none;
            margin-left: 15px;
            transition: color 0.3s;
        }
        
        .blog-nav a:hover {
            color: #4e54c8;
        }
        
        .blog-footer {
            padding: 40px 0;
            color: #6c757d;
            text-align: center;
            border-top: 1px solid #e5e5e5;
            margin-top: 50px;
        }
        
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 25px;
            transition: transform 0.3s;
        }
        
        .card:hover {
            transform: translateY(-5px);
        }
        
        .sidebar {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }
        
        .sidebar-title {
            font-weight: 600;
            color: #4e54c8;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid #e9ecef;
        }
    </style>
    
    @yield('styles')
</head>
<body>
    <div class="container">
        <!-- Header -->
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <a class="link-secondary" href="#">الاشتراك في النشرة البريدية</a>
                </div>
                <div class="col-4 text-center">
                    <a class="blog-title h1" href="#">مدونتي</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="btn btn-sm btn-outline-secondary" href="#">تسجيل الدخول</a>
                </div>
            </div>
            
            <!-- Navigation -->
            <nav class="nav d-flex justify-content-center py-2 blog-nav">
                <a class="p-2 link-secondary" href="#">الرئيسية</a>
                <a class="p-2 link-secondary" href="#">المقالات</a>
                <a class="p-2 link-secondary" href="#">التصنيفات</a>
                <a class="p-2 link-secondary" href="#">عن المدونة</a>
                <a class="p-2 link-secondary" href="#">اتصل بنا</a>
            </nav>
        </header>

        <!-- Main Content -->
        <div class="row">
            <div class="col-md-8">
                <!-- Flash Messages -->
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Content -->
                {{-- @yield('content') --}}
                {{$slot}}
            </div>

            <!-- Sidebar -->
            <div class="col-md-4">
                <div class="sidebar mb-4">
                    <h4 class="sidebar-title">بحث</h4>
                    <form action="#" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="ابحث في المدونة..." name="q">
                            <button class="btn btn-outline-secondary" type="submit">ابحث</button>
                        </div>
                    </form>
                </div>
                
                <div class="sidebar mb-4">
                    <h4 class="sidebar-title">التصنيفات</h4>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none">التقنية (15)</a></li>
                        <li><a href="#" class="text-decoration-none">البرمجة (12)</a></li>
                        <li><a href="#" class="text-decoration-none">التصميم (8)</a></li>
                        <li><a href="#" class="text-decoration-none">التسويق (5)</a></li>
                    </ul>
                </div>
                
                <div class="sidebar">
                    <h4 class="sidebar-title">أحدث المقالات</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-decoration-none">كيفية إنشاء موقع ويب باستخدام Laravel</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none">أفضل أدوات التصميم لعام 2023</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none">نصائح لتحسين محركات البحث SEO</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none">كيفية إنشاء تطبيق جوال باستخدام Flutter</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="blog-footer">
        <p>مدونة بسيطة مبنية باستخدام <a href="https://laravel.com">Laravel</a> و <a href="https://getbootstrap.com/">Bootstrap</a>.</p>
        <p>
            <a href="#">العودة إلى الأعلى</a>
        </p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    @yield('scripts')
</body>
</html>