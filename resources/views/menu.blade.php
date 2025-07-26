<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Corner Menu</title>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #305569;
            --secondary: #a5c62b;
            --accent: #d4ed6b;
            --text: #f8f9fa;
            --light-bg: #3f6b7d;
        }
        
        body {
            margin: 0;
            padding: 0;
            font-family: 'Almarai', sans-serif;
            background-color: var(--primary);
            color: var(--text);
            min-height: 100vh;
            background-image: 
                radial-gradient(circle at 10% 20%, rgba(165, 198, 43, 0.1) 0%, transparent 20%),
                radial-gradient(circle at 90% 80%, rgba(165, 198, 43, 0.1) 0%, transparent 20%);
        }

        .logo-container {
            text-align: center;
            padding: 20px 0;
            position: relative;
        }

        .logo-container::before {
            content: "";
            position: absolute;
            bottom: 0;
            left: 25%;
            right: 25%;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--secondary), transparent);
        }

        .logo-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--secondary);
            box-shadow: 0 4px 20px rgba(165, 198, 43, 0.3);
            transition: transform 0.3s;
        }

        .logo-img:hover {
            transform: rotate(10deg);
        }

        nav {
            background-color: rgba(48, 85, 105, 0.9);
            backdrop-filter: blur(5px);
            padding: 15px;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.2);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        nav a {
            color: var(--accent);
            text-decoration: none;
            font-weight: 700;
            font-size: 18px;
            padding: 8px 15px;
            border-radius: 30px;
            transition: all 0.3s;
            position: relative;
        }

        nav a:hover {
            color: var(--primary);
            background-color: var(--secondary);
        }

        nav a::after {
            content: "";
            position: absolute;
            bottom: -5px;
            right: 15px;
            width: 0;
            height: 2px;
            background-color: var(--secondary);
            transition: width 0.3s;
        }

        nav a:hover::after {
            width: calc(100% - 30px);
        }

        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }

        h1 {
            text-align: center;
            color: var(--secondary);
            font-size: 2.8rem;
            margin: 30px 0;
            position: relative;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        h1::after {
            content: "";
            display: block;
            width: 150px;
            height: 4px;
            background: linear-gradient(to right, transparent, var(--secondary), transparent);
            margin: 20px auto;
            border-radius: 2px;
        }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .menu-card {
            background-color: var(--light-bg);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s, box-shadow 0.3s;
            border-right: 5px solid var(--secondary);
        }

        .menu-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.25);
        }

        .card-header {
            position: relative;
            height: 200px;
            overflow: hidden;
        }

        .card-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .menu-card:hover .card-img {
            transform: scale(1.05);
        }

        .card-category {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: var(--secondary);
            color: var(--primary);
            padding: 5px 15px;
            border-radius: 30px;
            font-weight: bold;
            font-size: 14px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .card-body {
            padding: 25px;
        }

        .card-title {
            font-size: 1.5rem;
            margin: 0 0 15px;
            color: var(--accent);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .menu-items {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .menu-item {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px dashed rgba(255, 255, 255, 0.1);
        }

        .menu-item:last-child {
            border-bottom: none;
        }

        .item-name {
            flex: 1;
        }

        .item-price {
            color: var(--secondary);
            font-weight: bold;
            min-width: 100px;
            text-align: left;
        }

        .special-card {
            position: relative;
            grid-column: 1 / -1;
        }

        .special-card::before {
            content: "✨ مميز";
            position: absolute;
            top: -15px;
            left: -15px;
            background-color: var(--secondary);
            color: var(--primary);
            padding: 5px 20px;
            border-radius: 30px;
            font-weight: bold;
            font-size: 16px;
            z-index: 1;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .feedback-section {
            background: linear-gradient(135deg, var(--light-bg), var(--primary));
            border-radius: 15px;
            padding: 40px;
            margin: 60px 0 30px;
            text-align: center;
            border-right: 5px solid var(--secondary);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .feedback-title {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: var(--accent);
        }

        .feedback-text {
            font-size: 1.1rem;
            margin-bottom: 30px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .feedback-btn {
            display: inline-block;
            background-color: var(--secondary);
            color: var(--primary);
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.1rem;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(165, 198, 43, 0.3);
        }

        .feedback-btn:hover {
            background-color: var(--accent);
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(165, 198, 43, 0.4);
        }

        .footer {
            text-align: center;
            padding: 30px;
            margin-top: 60px;
            background-color: rgba(0, 0, 0, 0.1);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .footer a {
            color: var(--accent);
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer a:hover {
            color: var(--secondary);
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .menu-grid {
                grid-template-columns: 1fr;
            }
            
            h1 {
                font-size: 2rem;
            }
            
            .nav-container {
                flex-direction: column;
                gap: 10px;
                align-items: center;
            }
            
            .menu-card {
                border-right-width: 3px;
            }
        }

        /* Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .menu-card {
            animation: fadeIn 0.6s ease-out forwards;
            opacity: 0;
        }

        .menu-card:nth-child(1) { animation-delay: 0.1s; }
        .menu-card:nth-child(2) { animation-delay: 0.2s; }
        .menu-card:nth-child(3) { animation-delay: 0.3s; }
        .menu-card:nth-child(4) { animation-delay: 0.4s; }
        .menu-card:nth-child(5) { animation-delay: 0.5s; }
        .menu-card:nth-child(6) { animation-delay: 0.6s; }
        .menu-card:nth-child(7) { animation-delay: 0.7s; }
    </style>
</head>
<body>
    <div class="logo-container">
        <img src="{{ asset('images/CODE CORNER LOGO1.jpg') }}" alt="Code Corner Logo" class="logo-img">
    </div>

    <nav>
        <div class="nav-container">
            <a href="{{ route('notes.index') }}"><i class="fas fa-notes"></i> الملاحظات</a>
            <a href="{{ route('menu') }}"><i class="fas fa-utensils"></i> المنيو</a>
        </div>
    </nav>

    <div class="container">
        <h1> Code Corner</h1>
        
        <div class="menu-grid">
            @php
                $menu = [
                   
                    [
                        "title" => "البوظة 🍦",
                        "img"   => "Various_coloured_ice_cream_shutterstock_1678666684.jpg",
                        "items" => [
                            ["name" => "شوكولاتة", "price" => "1 JD / سكوب — 1.5 JD / سكوبين"],
                            ["name" => "فانيلا", "price" => "1 JD / سكوب — 1.5 JD / سكوبين"],
                            ["name" => "فراولة", "price" => "1 JD / سكوب — 1.5 JD / سكوبين"],
                            ["name" => "سنيكرز", "price" => "1 JD / سكوب — 1.5 JD / سكوبين"],
                            ["name" => "رينبو", "price" => "1 JD / سكوب — 1.5 JD / سكوبين"],
                            ["name" => "تشيز كيك", "price" => "1 JD / سكوب — 1.5 JD / سكوبين"],
                            ["name" => "أوريو", "price" => "1 JD / سكوب — 1.5 JD / سكوبين"]
                        ]
                    ],
                  [
    "title" => "قهوة خاصة ☕",
    "img" => "v60pic.jpg",
    "items" => [
        ["name" => "V60 إثيوبي (ييرغاشيف)", "price" => "2.5 JD"],
        ["name" => "V60 كولومبي (هويلا)", "price" => "2.5 JD"],
        ["name" => "V60 برازيلي (سانتوس)", "price" => "2.5 JD"],
        ["name" => "كولد برو إثيوبي", "price" => "2.5 JD"],
        ["name" => "كولد برو كولومبي", "price" => "2.5 JD"]
    ]
],
            
                    [
                        "title" => "العصائر 🥤", 
                        "img" => "blender.jpg", 
                        "items" => [
                            ["name" => "ليمون ونعنع", "price" => "1.5 JD"],
                            ["name" => "ليمون", "price" => "1.5 JD"],
                            ["name" => "برتقال", "price" => "1.5 JD"]
                        ]
                    ],
                    
                    [
                        "title" => "ميلك شيك 🍨", 
                        "img" => "milkshake pics.jpg", 
                        "items" => [
                            ["name" => "ميلك شيك شوكولاتة", "price" => "2.0 JD"],
                            ["name" => "ميلك شيك فانيلا", "price" => "2.0 JD"],
                            ["name" => "ميلك شيك فراولة", "price" => "2.0 JD"],
                            ["name" => "ميلك شيك سنيكرز", "price" => "2.0 JD"],
                            ["name" => "ميلك شيك رينبو", "price" => "2.0 JD"],
                            ["name" => "ميلك شيك تشيز كيك", "price" => "2.0 JD"],
                            ["name" => "ميلك شيك أوريو", "price" => "2.0 JD"]
                        ]
                    ],
                    [
                        "title" => "Code Corner Mixology ✨", 
                        "img" => "special-mix.jpg", 
                        "items" => [
                            ["name" => "فانيلا + حليب + موز", "price" => "2.8 JD"],
                            ["name" => "فراولة + بوظة فانيلا + حليب", "price" => "2.8 JD"],
                            ["name" => "كيت كات + موز + شوكولاتة", "price" => "3.0 JD"]
                        ],
                        "special" => true
                    ]
                ];
            @endphp

            @foreach($menu as $item)
                <div class="menu-card @if(isset($item['special'])) special-card @endif">
                    <div class="card-header">
                        <img src="{{ asset('images/' . $item['img']) }}" alt="{{ $item['title'] }}" class="card-img">
                        <div class="card-category">{{ $item['title'] }}</div>
                    </div>
                    <div class="card-body">
                      
                        </h3>
                        <ul class="menu-items">
                            @foreach($item['items'] as $menuItem)
                                <li class="menu-item">
                                    <span class="item-name">{{ $menuItem['name'] }}</span>
                                    <span class="item-price">{{ $menuItem['price'] }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="feedback-section">
            <h2 class="feedback-title">شاركنا رأيك!</h2>
            <p class="feedback-text">نحن نقدّر ملاحظاتك لمساعدتنا في تحسين تجربتك في Code Corner</p>
            <a href="{{ route('notes.index') }}" class="feedback-btn">
                <i class="fas fa-comment-alt"></i> اضغط هنا لإبداء رأيك
            </a>
        </div>
    </div>

    <div class="footer">
<h4>© Developed by: <a href="https://www.linkedin.com/in/zaid-abuameen-292070259/" target="_blank">Zaid Abu Ameen</a></h4>
    </div>
</body>
</html>