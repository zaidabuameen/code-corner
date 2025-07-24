<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Code Corner Menu</title>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
<div style="text-align:center; margin: 40px 0;">
<img src="{{ asset('images/CODE CORNER LOGO1.jpg') }}" alt="Code Corner Logo"

style="width: 90px; border-radius: 50%; box-shadow: 0 4px 12px rgba(0,0,0,0.3);">
</div>

<nav>
   <nav>
    <a href="{{ route('notes.index') }}">الملاحظات</a>
    <a href="{{ route('menu') }}">المنيو</a>
</nav>
</nav>
<!--<div class="logo-corner">
    <img src="{{ asset('images\CODE CORNER LOGO1.jpg') }}" alt="Code Corner Logo">
</div>-->
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
[
    "title" => "البوظة 🍦",
    "img"   => "Various_coloured_ice_cream_shutterstock_1678666684.jpg",
    "items" => [
        [
            "name"  => "شوكولاتة",
            "price" => "1 JD / سكوب — 1.5 JD / سكوبين"
        ],
        [
            "name"  => "فانيلا",
            "price" => "1 JD / سكوب — 1.5 JD / سكوبين"
        ],
        [
            "name"  => "فراولة",
            "price" => "1 JD / سكوب — 1.5 JD / سكوبين"
        ],
        [
            "name"  => "سنيكرز",
            "price" => "1 JD / سكوب — 1.5 JD / سكوبين"
        ],
        [
            "name"  => "رينبو",
            "price" => "1 JD / سكوب — 1.5 JD / سكوبين"
        ],
        [
            "name"  => "تشيز كيك",
            "price" => "1 JD / سكوب — 1.5 JD / سكوبين"
        ],
        [
            "name"  => "أوريو",
            "price" => "1 JD / سكوب — 1.5 JD / سكوبين"
        ]
    ]
]
,

  [
    "title" => "Cooffe ☕",
    "img" => "v60pic.jpg",
    "items" => [
        ["name" => "V60",         "price" => "2.5 JD"],
        ["name" => "كولد برو",    "price" => "2.5 JD"]
    ]
],


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
            ["title" => " milkshakes 🍨", "img" => "milkshake pics.jpg", "items" => [
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