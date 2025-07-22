<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Code Corner Menu</title>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Almarai', sans-serif;
            background-color: #305569;
            color: #fff;
            min-height: 100vh;
        }

        nav {
            text-align: center;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.1);
        }

        nav a {
            color: #a5c62b;
            margin: 0 15px;
            text-decoration: none;
            font-weight: 500;
            font-size: 18px;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #d4ed6b;
        }

        .container {
            max-width: 900px;
            margin: auto;
            padding: 30px 20px;
        }

        h1 {
            text-align: center;
            color: #a5c62b;
            font-size: 36px;
            margin: 30px 0;
            position: relative;
        }

        h1::after {
            content: "";
            display: block;
            width: 150px;
            height: 3px;
            background: #a5c62b;
            margin: 15px auto;
        }

        .section {
            background-color: #3f6b7d;
            border-right: 6px solid #a5c62b;
            border-radius: 16px;
            padding: 25px;
            margin-bottom: 30px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.15);
            display: flex;
            flex-direction: column;
        }

        .section-content {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 25px;
        }

        .section-text {
            flex: 1;
            min-width: 250px;
        }

        .section-img {
            flex: 1;
            min-width: 250px;
            text-align: center;
        }

        .section-img img {
            max-width: 100%;
            height: auto;
            max-height: 200px;
            border-radius: 10px;
            object-fit: cover;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            border: 3px solid #a5c62b;
        }

        .section h2 {
            font-size: 24px;
            color: #ffffff;
            margin-bottom: 15px;
            padding-bottom: 8px;
            border-bottom: 2px solid #a5c62b;
        }

        .section ul {
            list-style-type: none;
            padding: 0;
            font-size: 18px;
        }

        .section ul li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px dashed rgba(255,255,255,0.2);
            padding: 8px 0;
        }

        .price {
            color: #a5c62b;
            font-weight: bold;
            font-size: 16px;
        }

        .highlight {
            color: #a5c62b;
            font-weight: bold;
        }

        .footer {
            text-align: center;
            margin-top: 50px;
            font-size: 14px;
            color: #aaa;
        }

        .feedback-link {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #a5c62b;
            color: #1e2b30;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: all 0.3s;
        }

        .feedback-link:hover {
            background-color: #91b626;
            transform: translateY(-2px);
        }

        .special-note {
            background: rgba(165, 198, 43, 0.1);
            padding: 15px;
            border-radius: 8px;
            margin-top: 15px;
            border-right: 3px solid #a5c62b;
        }

        .feedback-section {
            background-color: #3f6b7d;
            border-right: 6px solid #a5c62b;
            border-radius: 16px;
            padding: 25px;
            margin: 30px 0;
            box-shadow: 0 6px 15px rgba(0,0,0,0.15);
            text-align: center;
        }

        .feedback-section h2 {
            color: #ffffff;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .feedback-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }

        @media (max-width: 768px) {
            .section-content {
                flex-direction: column;
            }

            .section-img {
                order: -1;
                margin-bottom: 20px;
            }

            h1 {
                font-size: 28px;
            }

            .section h2 {
                font-size: 22px;
            }
        } 
         .logo-corner {
        position: fixed;              /* يثبّت الشعار بمكانه */
        top: 20px;                    /* المسافة من الأعلى */
        left: 20px;                   /* المسافة من اليسار */
        z-index: 9999;                /* فوق كل شي */
        background-color: rgba(255, 255, 255, 0.1); /* خلفية شفافة خفيفة */
        border-radius: 50%;
        padding: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.25);
        backdrop-filter: blur(4px);   /* يعطيه فخامة */
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .logo-corner:hover {
        transform: scale(1.08);
        box-shadow: 0 6px 25px rgba(0, 0, 0, 0.4);
    }

    .logo-corner img {
        height: 85px;
        width: 85px;
        border-radius: 50%;
        object-fit: cover;
    }
    </style>
</head>
<body>
<nav>
   <nav>
    <a href="{{ route('notes.index') }}">الملاحظات</a>
    <a href="{{ route('menu') }}">المنيو</a>
</nav>
</nav>
<div class="logo-corner">
    <img src="{{ asset('images\CODE CORNER LOGO1.jpg') }}" alt="Code Corner Logo">
</div>
<div class="container">
    <h1>Code Corner</h1>

    @php
        $menu = [
            ["title" => "حلويات 🍰", "img" => "sweets.jpg", "items" => [
                ["name" => " تشيز كيك توت", "price" => "2.0 JD"],
                ["name" => "تيراميسو", "price" => "2.0 JD"],
                ["name" => " ريد فيلفت", "price" => "2.5 JD"],
                ["name" => " تشيز أوريو", "price" => "1.8 JD"],
                ["name" => " شوكو جار", "price" => "2.2 JD"],
                ["name" => " تشيز لوتس", "price" => "1.5 JD"],
                ["name" => " هبة البستاشيو", "price" => "1.5 JD"],
                ["name" => " ليزا كات", "price" => "2.0 JD"],
            
            ]],
            ["title" => "٧ أنواع بوظة 🍦", "img" => "Various_coloured_ice_cream_shutterstock_1678666684.jpg", "items" => [
                ["name" => "شوكولاتة", "price" => "1.5 JD"],
                ["name" => "فانيلا", "price" => " 1.5 JD"],
                ["name" => "فراولة", "price" => " 1.5 JD"],
                ["name" => " سنيكرز ", "price" => " 1.5 JD"],
                ["name" => "رينبو", "price" => " 1.5 JD"],
                ["name" => " تشيز كيك ", "price" => " 1.5 JD"],
                ["name" => "أوريو", "price" => " 1.5 JD"]
            ]],
            ["title" => "٣ أنواع سلش 🧊", "img" => "WhatsApp Image 2025-06-04 at 20.21.31_3c502a52.jpg", "items" => [
                ["name" => "ليمون نعنع", "price" => "1.0 JD"],
                ["name" => "فراولة", "price" => "1.0 JD"],
                ["name" => "بلو بيري", "price" => "1.0 JD"]
            ]],
          /*  ["title" => "فواكه موسمية 🍉", "img" => "fruit-cups.jpg", "items" => [
                ["name" => "بطيخ", "price" => "1.2 JD"],
                ["name" => "شمام", "price" => "1.2 JD"],
                ["name" => "موز", "price" => "1.2 JD"],
                ["name" => "حسب الموسم", "price" => "متغير"]
            ]],
            */
            ["title" => "العصائر 🥤", "img" => "blender.jpg", "items" => [
                ["name" => "ليمون ونعنع", "price" => "1.5 JD"],
                ["name" => "ليمون", "price" => " 1.5 JD"],
                ["name" => "برتقال", "price" => " 1.5 JD"]
            ]],
            ["title" => "كوكتيلات فواكه 🍹", "img" => "Fruit_Drinks_.webp", "items" => [
                ["name" => "كوكتيل موز", "price" => "2.0 JD"],
                ["name" => "كوكتيل فراولة", "price" => "2.0 JD"],
                ["name" => "كوكتيل مانجو", "price" => "2.0 JD"]
            ]],
            ["title" => " milkshakes 🍨", "img" => "milkshakes.jpg", "items" => [
               ["name" => "ميلك شيك شوكولاتة", "price" => "2.0 JD"],
    ["name" => "ميلك شيك فانيلا", "price" => "2.0 JD"],
    ["name" => "ميلك شيك فراولة", "price" => "2.0 JD"],
    ["name" => "ميلك شيك سنيكرز ", "price" => "2.0 JD"],
    ["name" => "ميلك شيك رينبو", "price" => "2.0 JD"],
    ["name" => "ميلك شيك تشيز كيك", "price" => "2.0 JD"],
    ["name" => "ميلك شيك أوريو", "price" => "2.0 JD"]
]], 
            ["title" => "Code Corner Mixology ✨", "img" => "special-mix.jpg", "items" => [
                ["name" => "فانيلا + حليب + موز", "price" => "2.8 JD"],
                ["name" => "فراولة + بوظة فانيلا + حليب", "price" => "2.8 JD"],
                ["name" => "كيت كات + موز + شوكولاتة", "price" => "3.0 JD"]
            ]]
        ];
    @endphp

    @foreach($menu as $section)
        <div class="section">
            <div class="section-content">
                <div class="section-text">
                    <h2>{{ $section['title'] }}</h2>
                    <ul>
                        @foreach($section['items'] as $item)
                            <li>{{ $item['name'] }} <span class="price">{{ $item['price'] }}</span></li>
                        @endforeach
                    </ul>
                    @if($section['title'] === 'Code Corner Mixology ✨')
                        <div class="special-note">
                            <p class="highlight">✨ ابتكارات جديدة وحصرية كل أسبوع! ✨</p>
                            <p>كوكتيلات لا تلاقيها بأي مكان ثاني 😋</p>
                        </div>
                    @endif
                </div>
                <div class="section-img">
                    <img src="{{ asset('images/' . $section['img']) }}" alt="{{ $section['title'] }}">
                </div>
            </div>
        </div>
    @endforeach

    <!-- قسم الملاحظات الجديد المستقل -->
    <div class="feedback-section">
        <h2>شاركونا آرائكم</h2>
        <div class="feedback-content">
            <p>نرحب بملاحظاتكم وآرائكم لمساعدتنا في تحسين تجربتكم</p>
            <a href="{{ route('notes.index') }}" class="feedback-link">اضغطوا هنا لإبداء رأيكم</a>
            
        </div>
    </div>

    <div class="footer">
<h4>© Developed by: <a href="https://www.linkedin.com/in/zaid-abuameen-292070259/" target="_blank">Zaid Abu Ameen</a></h4>
    </div>
</div>
</body>
</html> 