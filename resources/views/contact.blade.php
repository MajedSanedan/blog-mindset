<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اتصل بنا - Mindset Training</title>
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
            background: linear-gradient(rgba(78, 84, 200, 0.8), rgba(143, 148, 251, 0.8)), url('https://images.unsplash.com/photo-1516387938699-a93567ec168e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 80px 0;
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
        
        .contact-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            padding: 30px;
            margin-bottom: 30px;
            transition: all 0.3s;
            height: 100%;
            text-align: center;
        }
        
        .contact-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }
        
        .contact-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 20px;
        }
        
        .contact-form {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            padding: 40px;
        }
        
        .form-control {
            border-radius: 10px;
            padding: 15px;
            border: 2px solid #e9ecef;
            transition: all 0.3s;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(78, 84, 200, 0.25);
        }
        
        textarea.form-control {
            min-height: 150px;
        }
        
        .btn-primary {
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            border: none;
            padding: 15px 30px;
            font-weight: 600;
            border-radius: 10px;
            transition: all 0.3s;
            width: 100%;
        }
        
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(78, 84, 200, 0.4);
        }
        
        .map-container {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            margin-bottom: 40px;
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }
        
        .social-links a {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--light-bg);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
            text-decoration: none;
            transition: all 0.3s;
            font-size: 1.2rem;
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
        
        .contact-info-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .contact-info-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--light-bg);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
            font-size: 1.2rem;
            margin-left: 15px;
        }
        
        @media (max-width: 768px) {
            .hero-section {
                padding: 60px 0;
            }
            
            .contact-form {
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
                        <a class="nav-link" href="#">من نحن</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">الدورات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">اتصل بنا</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- قسم البطل -->
    <section class="hero-section">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">اتصل بنا</h1>
            <p class="lead">نحن هنا للإجابة على جميع استفساراتك ومساعدتك في رحلة تطوير عقليتك</p>
        </div>
    </section>

    <!-- المحتوى الرئيسي -->
    <div class="container">
        <!-- معلومات التواصل -->
        <div class="row mb-5">
            <div class="col-md-4 mb-4">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>عنواننا</h3>
                    <p>الرياض، حي الصحافة<br>شارع الملك فهد، المملكة العربية السعودية</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3>هاتفنا</h3>
                    <p>+966 12 345 6789</p>
                    <p>السبت - الخميس: 8 صباحاً - 6 مساءً</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>البريد الإلكتروني</h3>
                    <p>info@mindset-training.com</p>
                    <p>support@mindset-training.com</p>
                </div>
            </div>
        </div>

        <!-- نموذج الاتصال -->
        <div class="row mb-5">
            <div class="col-lg-8 mb-4">
                <div class="contact-form">
                    <h2 class="section-title">أرسل لنا رسالة</h2>
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">الاسم الكامل *</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">البريد الإلكتروني *</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">الموضوع *</label>
                            <input type="text" class="form-control" id="subject" required>
                        </div>
                        <div class="mb-4">
                            <label for="message" class="form-label">الرسالة *</label>
                            <textarea class="form-control" id="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-paper-plane me-2"></i>إرسال الرسالة
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="contact-info">
                    <h2 class="section-title">معلومات التواصل</h2>
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h4>العنوان</h4>
                            <p>الرياض، حي الصحافة، شارع الملك فهد</p>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <h4>الهاتف</h4>
                            <p>+966 12 345 6789</p>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h4>البريد الإلكتروني</h4>
                            <p>info@mindset-training.com</p>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <h4>ساعات العمل</h4>
                            <p>السبت - الخميس: 8 ص - 6 م</p>
                            <p>الجمعة: مغلق</p>
                        </div>
                    </div>
                    
                    <div class="social-links mt-4">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- الخريطة -->
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="section-title">موقعنا على الخريطة</h2>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3622.208032771005!2d46.67538231500026!3d24.774296984095536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2ee3e9c3a1e3f1%3A0x6e3b3c3e3e3e3e3e!2sRiyadh%2C%20Saudi%20Arabia!5e0!3m2!1sen!2sus!4v1633600000000!5m2!1sen!2sus" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>

        <!-- الأسئلة الشائعة -->
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="section-title">أسئلة متكررة</h2>
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                كيف يمكنني التسجيل في دوراتكم؟
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                يمكنك التسجيل في دوراتنا من خلال زيارة صفحة الدورات على موقعنا واختيار الدورة المناسبة لك، ثم اتباع خطوات التسجيل والدفع الإلكتروني.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                ما هي طرق الدفع المتاحة؟
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                نوفر عدة طرق للدفع تشمل: البطاقات الائتمانية (فيزا، ماستركارد)، التحويل البنكي، وخدمات الدفع الإلكتروني مثل Apple Pay وMada.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                هل تقدمون استشارات فردية؟
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                نعم، نقدم استشارات فردية في تطوير العقلية والنمو الشخصي. يمكنك حجز موعد من خلال التواصل معنا عبر البريد الإلكتروني أو الهاتف.
                            </div>
                        </div>
                    </div>
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
        
        // التحقق من صحة النموذج
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const subject = document.getElementById('subject').value.trim();
            const message = document.getElementById('message').value.trim();
            
            if (!name || !email || !subject || !message) {
                alert('يرجى ملء جميع الحقول الإلزامية');
                return;
            }
            
            // هنا يمكنك إضافة كود إرسال النموذج
            alert('تم إرسال رسالتك بنجاح! سنتواصل معك قريباً.');
            this.reset();
        });
    </script>
</body>
</html>