<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>من نحن - Mindset Training</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #4e54c8;
            --secondary-color: #8f94fb;
            --accent-color: #ff6b6b;
            --light-bg: #f8f9fa;
            --dark-text: #343a40;
        }
        
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #343a40;
            line-height: 1.8;
        }
        
        .navbar {
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        }
        
        .hero-section {
            background: linear-gradient(rgba(78, 84, 200, 0.8), rgba(143, 148, 251, 0.8)), url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-title {
            color: var(--primary-color);
            font-weight: 700;
            margin-bottom: 30px;
            position: relative;
            padding-bottom: 15px;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            border-radius: 2px;
        }
        
        .about-content {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            padding: 40px;
            margin-bottom: 40px;
        }
        
        .mission-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            padding: 30px;
            transition: all 0.3s;
            height: 100%;
            border-top: 5px solid var(--primary-color);
        }
        
        .mission-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }
        
        .mission-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 20px;
        }
        
        .team-member {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .team-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 20px;
            border: 5px solid white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .values-list {
            list-style: none;
            padding: 0;
        }
        
        .values-list li {
            padding: 15px;
            margin-bottom: 15px;
            background: var(--light-bg);
            border-radius: 10px;
            border-right: 4px solid var(--primary-color);
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }
        
        .social-links a {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: var(--light-bg);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .social-links a:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-5px);
        }
        
        .footer {
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 40px 0;
            margin-top: 60px;
        }
        
        .back-to-top {
            position: fixed;
            bottom: 30px;
            left: 30px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--primary-color);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
            z-index: 1000;
        }
        
        .back-to-top:hover {
            background: var(--secondary-color);
            transform: translateY(-5px);
        }
        
        @media (max-width: 768px) {
            .hero-section {
                padding: 60px 0;
            }
            
            .about-content {
                padding: 25px;
            }
        }
    </style>
</head>
<body>
    <!-- شريط التنقل -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-brain me-2"></i>Mindset Training
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">المدونة</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">من نحن</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">الدورات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">اتصل بنا</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- قسم البطل -->
    <section class="hero-section">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">من نحن في Mindset Training</h1>
            <p class="lead">نحو عقلية نمو متطورة ونجاح مستدام</p>
        </div>
    </section>

    <!-- المحتوى الرئيسي -->
    <div class="container">
        <!-- عن المدونة -->
        <div class="about-content">
            <h2 class="section-title">عن Mindset Training</h2>
            <p>مرحبًا بكم في مدونة Mindset Training، منصة متخصصة في تطوير العقلية والنمو الشخصي. نحن نؤمن بأن تطوير العقلية هو الأساس لتحقيق النجاح في جميع مجالات الحياة.</p>
            <p>تأسست مدونتنا في عام 2020 بهدف مساعدة الأفراد على تحويل تفكيرهم من عقلية ثابتة إلى عقلية نمو، مما يمكنهم من تحقيق إمكاناتهم الكاملة والتغلب على التحديات التي تواجههم.</p>
            <p>نقدم محتوىً قيماً يشمل مقالات متخصصة، دراسات حالة، مقابلات مع خبراء، ونصائح عملية يمكن تطبيقها في الحياة اليومية.</p>
        </div>

        <!-- رسالتنا ورؤيتنا -->
        <div class="row mb-5">
            <div class="col-md-6 mb-4">
                <div class="mission-card">
                    <div class="mission-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>رسالتنا</h3>
                    <p>تمكين الأفراد من تطوير عقلية النمو التي تمكنهم من تحقيق أهدافهم الشخصية والمهنية، من خلال تقديم محتوى قيم وموارد عملية تساعدهم على تجاوز التحديات وتحقيق إمكاناتهم الكاملة.</p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="mission-card">
                    <div class="mission-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>رؤيتنا</h3>
                    <p>أن نكون المنصة الرائدة في العالم العربي في مجال تطوير العقلية والنمو الشخصي، وأن نساهم في خلق مجتمع من الأفراد الواعين والقادرين على تحقيق النجاح المستدام والتأثير الإيجابي في محيطهم.</p>
                </div>
            </div>
        </div>

        <!-- قيمنا -->
        <div class="about-content">
            <h2 class="section-title">قيمنا</h2>
            <ul class="values-list">
                <li>
                    <h4>النمو المستمر</h4>
                    <p>نؤمن بأن التعلم والتطور عملية مستمرة طوال الحياة، ونسعى لتشجيع ثقافة التحسين المستمر.</p>
                </li>
                <li>
                    <h4>الأصالة والموثوقية</h4>
                    <p>نحرص على تقديم محتوى أصيل وموثوق يعتمد على الأبحاث العلمية والخبرات العملية.</p>
                </li>
                <li>
                    <h4>التأثير الإيجابي</h4>
                    <p>نسعى لخلق تأثير إيجابي في حياة أفراد مجتمعنا ومساعدتهم على تحقيق تحول حقيقي.</p>
                </li>
                <li>
                    <h4>الشمولية</h4>
                    <p>نقدم محتوىً متنوعاً يلبي احتياجات مختلف الفئات والاهتمامات في رحلة النمو الشخصي.</p>
                </li>
            </ul>
        </div>

        <!-- فريقنا -->
        <div class="about-content">
            <h2 class="section-title">فريقنا</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="team-member">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="مؤسس المدونة" class="team-img">
                        <h4>أحمد الشمري</h4>
                        <p>مؤسس Mindset Training</p>
                        <p>أخصائي تدريب وتطوير ذو خبرة 10 سنوات في مجال تطوير العقلية والنمو الشخصي.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=688&q=80" alt="كاتبة محتوى" class="team-img">
                        <h4>سارة العبدالله</h4>
                        <p>كاتبة محتوى متخصصة</p>
                        <p>متخصصة في علم النفس الإيجابي وتطبيقاته في الحياة اليومية والعملية.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member">
                        <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="مدرب" class="team-img">
                        <h4>خالد الفهد</h4>
                        <p>مدرب معتمد</p>
                        <p>خبير في تدريب العقلية وتطوير المهارات القيادية والذكاء العاطفي.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- احصائيات -->
        <div class="about-content text-center">
            <h2 class="section-title text-center">أرقامنا</h2>
            <div class="row">
                <div class="col-md-3 col-6 mb-4">
                    <h3 class="text-primary">500+</h3>
                    <p>مقالة منشورة</p>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <h3 class="text-primary">50,000+</h3>
                    <p>قارئ شهري</p>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <h3 class="text-primary">20+</h3>
                    <p>دورة تدريبية</p>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <h3 class="text-primary">5,000+</h3>
                    <p>متدرب</p>
                </div>
            </div>
        </div>
    </div>

    <!-- الفوتر -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h4>Mindset Training</h4>
                    <p>منصة متخصصة في تطوير العقلية والنمو الشخصي لتحقيق النجاح المستدام.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h4>روابط سريعة</h4>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">الرئيسية</a></li>
                        <li><a href="#" class="text-white">المدونة</a></li>
                        <li><a href="#" class="text-white">من نحن</a></li>
                        <li><a href="#" class="text-white">اتصل بنا</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4">
                    <h4>اتصل بنا</h4>
                    <p>البريد الإلكتروني: info@mindset-training.com</p>
                    <p>الهاتف: 966123456789+</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-4 bg-light">
            <p class="text-center mb-0">© 2023 Mindset Training. جميع الحقوق محفوظة.</p>
        </div>
    </footer>

    <!-- زر العودة للأعلى -->
    <a href="#" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // زر العودة للأعلى
        const backToTopButton = document.querySelector('.back-to-top');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.style.display = 'flex';
            } else {
                backToTopButton.style.display = 'none';
            }
        });
        
        backToTopButton.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>
</body>
</html>