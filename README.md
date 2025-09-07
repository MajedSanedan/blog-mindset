
# Student Information
### Name: Majed Sunedan


# Laravel Blog Project

## وصف المشروع

هذا المشروع عبارة عن **منصة مدونة (Blog Platform)** مبنية باستخدام Laravel.  
تتيح المنصة للمستخدمين التسجيل وتسجيل الدخول، وعرض المقالات، بينما يمكن للمستخدمين الذين لديهم دور **'admin'** إدارة المحتوى من خلال لوحة تحكم آمنة.

---

## المميزات

- تسجيل المستخدمين وتسجيل الدخول وإدارة الصلاحيات.
- لوحة تحكم للمشرفين لإدارة **المقالات (Posts)** و**الأقسام (Categories)**.
- CRUD كامل للمقالات والأقسام.
- رفع الصور للمقالات وإدارتها باستخدام **Storage** في Laravel.
- علاقات **Many-to-Many** بين المقالات والأقسام.
- التحقق من صحة البيانات باستخدام **Form Requests**.
- واجهة مستخدم نظيفة ومتجاوبة باستخدام **Blade وBootstrap**.

---

## المتطلبات

- PHP 8 أو أعلى
- Laravel 10
- MySQL
- Composer
- Node.js و npm

---

## طريقة التثبيت

1. استنساخ المستودع:

```bash
git clone <repository-url>
cd <project-folder>
````

2. تثبيت الاعتمادات:

```bash
composer install
npm install
npm run dev
```

3. إعداد ملف البيئة:

```bash
cp .env.example .env
php artisan key:generate
```

ثم تحديث معلومات قاعدة البيانات في `.env`.

4. تنفيذ المايجريشنز والـ Seeders:

```bash
php artisan migrate --seed
```

5. تشغيل السيرفر المحلي:

```bash
php artisan serve
```

---

## قاعدة البيانات

**الجداول الرئيسية:**

* **users**: مع عمود `role_id` لربط المستخدم بالدور.
* **roles**: لتحديد الأدوار (`admin`, `user`).
* **posts**: لتخزين المقالات.
* **categories**: لتخزين الأقسام.
* **category\_post**: جدول pivot لربط المقالات بالأقسام.

**العلاقات:**

* User `hasMany` Posts
* Post `belongsTo` User
* Post `belongsToMany` Categories
* Category `belongsToMany` Posts
* User `belongsTo` Role

---

## لوحة التحكم للمشرف (Admin Panel)

* يمكن للمشرفين فقط إدارة المقالات والأقسام.
* رفع الصور مرتبط بكل مقالة ويُحفظ في `public/posts/`.
* حذف المقالة يقوم أيضًا بحذف الصورة المرتبطة بها.

---

## قواعد التحقق من البيانات (Validation)

**المقالات (Posts):**

* `title`: مطلوب، نص، أقصى طول 255
* `content`: مطلوب
* `image`: اختياري، صورة، حجم أقصى 2MB
* `categories`: مطلوب، مصفوفة، ويجب أن تكون موجودة في جدول الأقسام

**الأقسام (Categories):**

* `name`: مطلوب، نص، فريد، أقصى طول 100

---

## الاستخدام

* المستخدمون العاديون يمكنهم مشاهدة المقالات والأقسام.
* المشرفون يمكنهم تسجيل الدخول للوصول إلى لوحة التحكم وإدارة المقالات والأقسام.

---

## التقنيات المستخدمة

* Laravel 10
* PHP 8+
* MySQL
* Blade Templates
* Bootstrap 5
* Laravel Factories & Seeders

---

## الترخيص

هذا المشروع مفتوح المصدر بموجب ترخيص **MIT**.

```

---

إذا أحببت، أقدر أيضًا أصنع لك **نسخة محسنة مع Table of Contents وروابط داخلية لكل قسم** لتسهيل التصفح عند عرض الملف على GitHub.  

هل تريد أن أفعل ذلك؟
```
