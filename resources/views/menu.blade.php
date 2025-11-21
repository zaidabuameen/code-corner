<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Code Corner Menu</title>
  <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <style>
    :root {
      --primary: #305569;
      --secondary: #a5c62b;
      --accent: #d4ed6b;
      --text: #f8f9fa;
      --light-bg: #3f6b7d;
      --card: linear-gradient(180deg, rgba(63,107,125,1), rgba(63,107,125,.92));
    }
    * { box-sizing: border-box; }
    html, body { height: 100%; }
    body {
      margin: 0; font-family: 'Almarai', system-ui, -apple-system, Segoe UI, Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif;
      background:
        radial-gradient(1200px 1200px at 0% 10%, rgba(165,198,43,.08), transparent 60%),
        radial-gradient(900px 900px at 100% 100%, rgba(165,198,43,.08), transparent 60%),
        var(--primary);
      color: var(--text); line-height: 1.65;
      -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;
    }

    /* ===== Topbar ===== */
    .topbar { position: sticky; top: 0; z-index: 1000; backdrop-filter: saturate(130%) blur(8px);
      background: linear-gradient(180deg, rgba(48,85,105,.95), rgba(48,85,105,.8)); border-bottom: 1px solid rgba(255,255,255,.08); }
    .topbar .wrap { max-width: 1280px; margin: 0 auto; padding: 10px 22px; display: flex; align-items: center; justify-content: space-between; gap: 16px; }
    .brand { display: flex; align-items: center; gap: 14px; }
    .logo-img { width: 58px; height: 58px; border-radius: 50%; object-fit: cover; border: 3px solid var(--secondary); box-shadow: 0 4px 16px rgba(165,198,43,.25); transition: transform .25s ease; }
    .logo-img:hover { transform: rotate(6deg) scale(1.02); }
    .brand h1 { margin: 0; font-size: 1.35rem; letter-spacing: .3px; color: var(--accent); }

    .nav { display: flex; align-items: center; gap: 10px; }
    .nav a { color: var(--accent); text-decoration: none; font-weight: 700; font-size: .98rem; padding: 10px 14px; border-radius: 999px; border: 1px solid rgba(212,237,107,.25); transition: all .25s ease; display: inline-flex; align-items: center; gap: 8px; }
    .nav a:hover { background: var(--secondary); color: var(--primary); transform: translateY(-1px); }

    /* ===== Layout: Sidebar + Content ===== */
    .shell { max-width: 1280px; margin: 26px auto; padding: 0 22px; display: grid; grid-template-columns: 280px 1fr; gap: 22px; align-items: start; }

    /* Sidebar */
    .sidebar { position: sticky; top: 86px; align-self: start; }
    .panel { background: var(--card); border: 1px solid rgba(255,255,255,.1); border-radius: 16px; padding: 16px; box-shadow: 0 10px 26px rgba(0,0,0,.25); }
    .panel h3 { margin: 0 0 12px; color: var(--accent); font-size: 1.1rem; }
    .search { display: flex; align-items: center; gap: 8px; background: rgba(63,107,125,.6); border: 1px solid rgba(255,255,255,.12); border-radius: 12px; padding: 10px 12px; }
    .search i { color: var(--accent); }
    .search input { width: 100%; border: 0; outline: none; background: transparent; color: var(--text); font-size: 1rem; }

    .cats { list-style: none; padding: 0; margin: 14px 0 0; display: grid; gap: 8px; }
    .cats a { display: flex; align-items: center; justify-content: space-between; gap: 10px; text-decoration: none; color: var(--text); padding: 10px 12px; border-radius: 10px; border: 1px dashed rgba(212,237,107,.35); background: rgba(212,237,107,.06); font-weight: 800; transition: all .2s ease; }
    .cats a:hover { background: rgba(212,237,107,.15); transform: translateY(-1px); }
    .cats a.active { background: var(--secondary); color: var(--primary); border-style: solid; }

    /* Content */
    .content { display: grid; gap: 22px; }
    .hero { background: linear-gradient(135deg, var(--light-bg), var(--primary)); border: 1px solid rgba(255,255,255,.08); border-radius: 18px; padding: 24px; box-shadow: 0 12px 32px rgba(0,0,0,.22); text-align: center; }
    .hero .headline { font-size: clamp(1.5rem, 2.6vw + .8rem, 2.4rem); margin: 6px 0 8px; color: var(--secondary); text-shadow: 0 2px 10px rgba(0,0,0,.22); }
    .hero .sub { color: #e9f1f5; opacity: .95; max-width: 780px; margin: 0 auto; }

    .section { scroll-margin-top: 90px; }
    .section h2 { display: flex; align-items: center; gap: 10px; margin: 10px 0 6px; color: var(--accent); font-size: 1.4rem; }

    .menu-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 22px; }
    .card { background: var(--card); border-radius: 18px; overflow: clip; position: relative; border: 1px solid rgba(255,255,255,.08); outline: 5px solid transparent; box-shadow: 0 10px 28px rgba(0,0,0,.25); transition: transform .35s ease, box-shadow .35s ease, outline-color .35s ease; animation: fadeIn .6s ease both; opacity: 0; }
    .card:hover { transform: translateY(-8px); box-shadow: 0 16px 40px rgba(0,0,0,.3); outline-color: rgba(165,198,43,.2); }
    .card-media { position: relative; height: 190px; overflow: hidden; }
    .card-media img { width: 100%; height: 100%; object-fit: cover; transform: scale(1.02); transition: transform .6s ease; }
    .card:hover .card-media img { transform: scale(1.07); }
    .badge { position: absolute; top: 14px; left: 14px; z-index: 2; padding: 6px 12px; border-radius: 999px; background: var(--secondary); color: var(--primary); font-weight: 900; font-size: .88rem; box-shadow: 0 6px 18px rgba(165,198,43,.35); }
    .ribbon { position: absolute; top: 10px; right: -38px; transform: rotate(35deg); color: var(--primary); background: linear-gradient(90deg, var(--accent), var(--secondary)); font-weight: 900; padding: 6px 54px; box-shadow: 0 8px 24px rgba(0,0,0,.25); }
    .card-body { padding: 18px 18px 6px; }
    .items { list-style: none; padding: 0; margin: 0; display: grid; gap: 10px; }
    .item { display: grid; grid-template-columns: 1fr auto; align-items: center; gap: 10px; padding-bottom: 10px; border-bottom: 1px dashed rgba(255,255,255,.12); }
    .item:last-child { border-bottom: 0; }
    .item-name { font-weight: 800; letter-spacing: .2px; }
    .item-price { justify-self: end; background: rgba(212,237,107,.12); color: var(--secondary); font-weight: 900; padding: 6px 10px; border-radius: 10px; border: 1px solid rgba(212,237,107,.4); min-width: 110px; text-align: center; }

    /* Feedback */
    .feedback { background: linear-gradient(135deg, var(--light-bg), var(--primary)); border-radius: 18px; border: 1px solid rgba(255,255,255,.08); padding: 24px; text-align: center; box-shadow: 0 12px 36px rgba(0,0,0,.22); }
    .feedback h3 { margin: 0 0 8px; color: var(--accent); font-size: 1.4rem; }
    .feedback a { display: inline-flex; align-items: center; gap: 8px; padding: 12px 22px; border-radius: 999px; text-decoration: none; font-weight: 900; background: var(--secondary); color: var(--primary); box-shadow: 0 6px 22px rgba(165,198,43,.35); border: 1px solid rgba(0,0,0,.1); }

    /* Back to top */
    .to-top { position: fixed; bottom: 18px; left: 18px; width: 44px; height: 44px; border-radius: 999px; display: grid; place-items: center; border: 1px solid rgba(212,237,107,.4); background: rgba(212,237,107,.15); color: var(--accent); cursor: pointer; backdrop-filter: blur(6px); box-shadow: 0 8px 22px rgba(0,0,0,.28); opacity: 0; visibility: hidden; transform: translateY(10px); transition: all .2s ease; }
    .to-top.show { opacity: 1; visibility: visible; transform: translateY(0); }

    /* Footer */
    .footer { text-align: center; padding: 26px; margin-top: 42px; background: rgba(0,0,0,.08); border-top: 1px solid rgba(255,255,255,.08); }
    .footer a { color: var(--accent); text-decoration: none; }
    .footer a:hover { color: var(--secondary); text-decoration: underline; }

    /* Anim */
    @keyframes fadeIn { from { opacity: 0; transform: translateY(16px) } to { opacity: 1; transform: translateY(0) } }

    /* Responsive */
    @media (max-width: 980px) { .shell { grid-template-columns: 1fr; } .sidebar { position: static; } }
  </style>
</head>
<body>
  <!-- Topbar -->
  <header class="topbar">
    <div class="wrap">
      <div class="brand">
        <img src="{{ asset('images/CODE CORNER LOGO1.jpg') }}" alt="Code Corner Logo" class="logo-img" loading="lazy" />
        <h1>Code Corner</h1>
      </div>
      <nav class="nav" aria-label="التنقل">
        <a href="{{ route('notes.index') }}"><i class="fa-solid fa-clipboard"></i><span>الملاحظات</span></a>
        <a href="{{ route('menu') }}"><i class="fa-solid fa-utensils"></i><span>المنيو</span></a>
        <!-- Instagram link in nav -->
        <a href="https://www.instagram.com/_codecorner?igsh=NGZraGQ4Z3hneXBs&utm_source=qr" target="_blank" rel="noopener" aria-label="انستغرام">
          <i class="fa-brands fa-instagram"></i><span>انستغرام</span>
        </a>
      </nav>
    </div>
  </header>

  <div class="shell">
    <!-- Sidebar: search + categories -->
    <aside class="sidebar">
      <div class="panel">
        <h3><i class="fa-solid fa-filter"></i> تصفّح سريع</h3>
        <label class="search" role="search">
          <i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>
          <input id="q" type="search" placeholder="ابحث عن صنف… (تشيز، V60، آيس كريم…)" aria-label="بحث عن صنف" />
        </label>
        <ul class="cats" id="cats">
          <!-- يُملأ تلقائيًا -->
        </ul>
      </div>
    </aside>

    <!-- Main content -->
    <main class="content">
      <section class="hero" aria-label="ترحيب">
        <h2 class="headline">نكهات تليق بمزاج الكل  😎☕</h2>
        <p class="sub">من القهوة المختصة للحلويات والميلك شيك – كل الأصناف بنفس ألوان Code Corner وبواجهة مرتبة وسريعة.</p>
      </section>

      @php
$menu = [
    [
        'title' => 'Code Corner Mixology',
        'img' => 'Mixology.jpeg',
        'items' => [
        
        ]
    ],

    [
        'title' => 'حلويات 🍰',
        'img' => 'IMG_1723.PNG',
        'items' => [
            ['name' => 'كيك كبير (تشيز كيك , لوتس , بستاشيو , تيراميسو, احمد الزامل)', 'price' => '2.5 JD'],
            ['name' => 'كيك صغير (تشيز كيك , لوتس , بستاشيو , تيراميسو, احمد الزامل)', 'price' => '2.0 JD'],
        ]
    ],

    [
        'title' => 'البوظة 🍦',
        'img' => 'Various_coloured_ice_cream_shutterstock_1678666684.jpg',
        'items' => [
            ['name' => 'شوكولاتة', 'price' => '1 JD / سكوب — 1.5 JD / سكوبين'],
            ['name' => 'فانيلا', 'price' => '1 JD / سكوب — 1.5 JD / سكوبين'],
            ['name' => 'فراولة', 'price' => '1 JD / سكوب — 1.5 JD / سكوبين'],
            ['name' => 'سنيكرز', 'price' => '1 JD / سكوب — 1.5 JD / سكوبين'],
            ['name' => 'رينبو', 'price' => '1 JD / سكوب — 1.5 JD / سكوبين'],
            ['name' => 'تشيز كيك', 'price' => '1 JD / سكوب — 1.5 JD / سكوبين'],
            ['name' => 'أوريو', 'price' => '1 JD / سكوب — 1.5 JD / سكوبين'],
            ['name' => 'عربيه', 'price' => '1 JD / سكوب — 1.5 JD / سكوبين'],
        ]
    ],

    [
        'title' => 'قهوة خاصة ☕',
        'img' => 'v60pic.jpg',
        'special' => true,
        'items' => [
            ['name' => 'V60 إثيوبي (ييرغاشيف)', 'price' => '2.0 JD'],
            ['name' => 'V60 كولومبي (هويلا)', 'price' => '2.0 JD'],
            ['name' => 'V60 برازيلي (سانتوس)', 'price' => '2.0 JD'],
            ['name' => 'ماتشا ( اورجينال , فراولة , فانيلا , مانجا )', 'price' => '2.5 JD'],
        ]
    ],

    [
        'title' => 'ميلك شيك 🍨',
        'img' => 'milkshake pics.jpg',
        'items' => [
            ['name' => 'ميلك شيك شوكولاتة - L', 'price' => '2.5 JD'],
            ['name' => 'ميلك شيك شوكولاتة - M', 'price' => '2.0 JD'],
            ['name' => 'ميلك شيك فانيلا - L', 'price' => '2.5 JD'],
            ['name' => 'ميلك شيك فانيلا - M', 'price' => '2.0 JD'],
            ['name' => 'ميلك شيك فراولة - L', 'price' => '2.5 JD'],
            ['name' => 'ميلك شيك فراولة - M', 'price' => '2.0 JD'],
            ['name' => 'ميلك شيك سنيكرز - L', 'price' => '2.5 JD'],
            ['name' => 'ميلك شيك سنيكرز - M', 'price' => '2.0 JD'],
            ['name' => 'ميلك شيك رينبو - L', 'price' => '2.5 JD'],
            ['name' => 'ميلك شيك رينبو - M', 'price' => '2.0 JD'],
            ['name' => 'ميلك شيك تشيز كيك - L', 'price' => '2.5 JD'],
            ['name' => 'ميلك شيك تشيز كيك - M', 'price' => '2.0 JD'],
            ['name' => 'ميلك شيك أوريو - L', 'price' => '2.5 JD'],
            ['name' => 'ميلك شيك أوريو - M', 'price' => '2.0 JD'],
            ['name' => 'ميلك شيك بستاشيو - L', 'price' => '2.5 JD'],
            ['name' => 'ميلك شيك بستاشيو - M', 'price' => '2.0 JD'],
        ]
    ],

    [
        'title' => 'فرابتشينو ☕️',
        'img' => 'frab2.jpeg',
        'items' => [
            ['name' => 'فرابتشينو فانيلا - L', 'price' => '2.0 JD'],
            ['name' => 'فرابتشينو فانيلا - M', 'price' => '1.5 JD'],
            ['name' => 'فرابتشينو بندق - L', 'price' => '2.0 JD'],
            ['name' => 'فرابتشينو بندق - M', 'price' => '1.5 JD'],
            ['name' => 'فرابتشينو شوكلت - L', 'price' => '2.0 JD'],
            ['name' => 'فرابتشينو شوكلت - M', 'price' => '1.5 JD'],
            ['name' => 'فرابتشينو كراميل - L', 'price' => '2.0 JD'],
            ['name' => 'فرابتشينو كراميل - M', 'price' => '1.5 JD'],


        ]
    ],

    [
        'title' => 'العصائر 🥤',
        'img' => 'karkadeh.jpeg',
        'items' => [
           ['name' => 'كركديه - L', 'price' => '1.0 JD'],
['name' => 'كركديه - M', 'price' => '0.75 JD'],
['name' => 'سموذي ليمون ونعنع - L', 'price' => '2.0 JD'],
['name' => 'سموذي ليمون ونعنع - M', 'price' => '1.5 JD'],
['name' => 'سموذي فراولة - L', 'price' => '2.0 JD'],
['name' => 'سموذي فراولة - M', 'price' => '1.5 JD'],
['name' => 'سموذي مانجا - L', 'price' => '2.0 JD'],
['name' => 'سموذي مانجا - M', 'price' => '1.5 JD'],
['name' => 'كوكتيل موز وحليب وفراولة - L', 'price' => '2.0 JD'],
['name' => 'كوكتيل موز وحليب وفراولة - M', 'price' => '1.5 JD'],
['name' => 'كوكتيل فراولة وحليب - L', 'price' => '2.0 JD'],
['name' => 'كوكتيل فراولة وحليب - M', 'price' => '1.5 JD'],
['name' => 'كوكتيل موز وحليب - L', 'price' => '2.0 JD'],
['name' => 'كوكتيل موز وحليب - M', 'price' => '1.5 JD'],
],
        
    ],

    [
        'title' => 'مشروبات لاتيه ☕️',
        'img' => 'espreso.jpg',
        'items' => [
            ['name' => 'لاتيه (سبانش , بستاشيو , لوتس , عادي) - L', 'price' => '2.0 JD'],
            ['name' => 'لاتيه (سبانش , بستاشيو , لوتس , عادي) - M ', 'price' => '1.5 JD'],
            ['name' => ' أمريكانو - L', 'price' => '1.5 JD'],
            ['name' => ' أمريكانو - M', 'price' => '1.0 JD'],
            ['name' => 'كراميل مكياتو  - L', 'price' => '2.0 JD'],
            ['name' => 'كراميل مكياتو  - M', 'price' => '1.5 JD'],
            ['name' => ' موكا (دارك , وايت) - L', 'price' => '2.0 JD'],
            ['name' => ' موكا (دارك , وايت) - M', 'price' => '1.5 JD'],
            ['name' => 'فلات وايت  ', 'price' => '1.5 JD'],
            ['name' => 'إسبريسو  ', 'price' => '1.0 JD'],
            ['name' => 'أميريكان  ', 'price' => '0.75 JD'],
            ['name' => 'هوت شوكلت  ', 'price' => '1.0 JD'],
            ['name' => 'هوت بستاشيو  ', 'price' => '2.0 JD'],
            ['name' => 'هوت لوتس  ', 'price' => '2.0 JD'],
            ['name' => 'كابتشينو  ', 'price' => '1.5 JD'],


        ]
    ],
];
@endphp


@foreach ($menu as $i => $item)
    @php $id = 'sec' . $i; @endphp
    <section id="{{ $id }}" class="section">
        <h2><i class="fa-solid fa-layer-group"></i> {{ $item['title'] }}</h2>

        <div class="menu-grid">
            <article class="card">

                @if (!empty($item['special']))
                    <div class="ribbon">✨ مميز</div>
                @endif

                <div class="card-media">
                    <img src="{{ asset('images/' . $item['img']) }}" 
                         alt="{{ $item['title'] }}" 
                         loading="lazy">

                    <div class="badge">{{ $item['title'] }}</div>
                </div>

                <div class="card-body">
                    <ul class="items">
                        @foreach ($item['items'] as $menuItem)
                            <li class="item">
                                <span class="item-name">{{ $menuItem['name'] }}</span>
                                <span class="item-price">{{ $menuItem['price'] }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </article>
        </div>
    </section>
@endforeach

      <section class="feedback">
        <h3>شاركنا رأيك!</h3>
        <p>رأيك يهمّنا لنحسّن تجربتك في Code Corner باستمرار 🙌</p>
        <a href="{{ route('notes.index') }}"><i class="fa-solid fa-comment-dots"></i> اضغط هنا لإبداء رأيك</a>
      </section>

      <button id="toTop" class="to-top" title="أعلى الصفحة"><i class="fa-solid fa-arrow-up"></i></button>
    </main>
  </div>

  <footer class="footer">
    <h4>© Developed by: 
      <a href="https://www.linkedin.com/in/zaid-abuameen-292070259/" target="_blank" rel="noopener">Zaid Abu Ameen</a>
    </h4>
    <div style="margin-top: 10px;">
      <a href="https://www.instagram.com/_codecorner?igsh=NGZraGQ4Z3hneXBs&utm_source=qr" target="_blank" rel="noopener" aria-label="انستغرام">
        <i class="fa-brands fa-instagram" style="font-size: 1.8rem;"></i>
      </a>
    </div>
  </footer>

  <script>
    (function () {
      const cats = document.getElementById('cats');
      const q = document.getElementById('q');
      const toTop = document.getElementById('toTop');

      // Build sidebar categories from sections
      const sections = Array.from(document.querySelectorAll('.section'));
      sections.forEach((sec) => {
        const name = sec.querySelector('h2').innerText.trim();
        const id = sec.id;
        const li = document.createElement('li');
        const a = document.createElement('a');
        a.href = `#${id}`;
        a.innerHTML = `<span>${name}</span> <i class='fa-solid fa-chevron-left'></i>`;
        li.appendChild(a);
        cats.appendChild(li);
      });

      // Smooth scroll & scrollspy highlight
      const links = cats.querySelectorAll('a');
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          const link = Array.from(links).find(a => a.getAttribute('href') === `#${entry.target.id}`);
          if (entry.isIntersecting) {
            links.forEach(a => a.classList.remove('active'));
            link && link.classList.add('active');
          }
        });
      }, { rootMargin: '-50% 0px -40% 0px', threshold: 0.01 });
      sections.forEach(s => observer.observe(s));

      // Search filter (filter items text across sections)
      function applySearch() {
        const text = (q.value || '').toLowerCase().trim();
        sections.forEach(sec => {
          const card = sec.querySelector('.card');
          const hay = card.textContent.toLowerCase();
          sec.style.display = (!text || hay.includes(text)) ? '' : 'none';
        });
      }
      q.addEventListener('input', applySearch);

      // Back to top button
      window.addEventListener('scroll', () => {
        (window.scrollY > 400) ? toTop.classList.add('show') : toTop.classList.remove('show');
      });
      toTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

      // Stagger animation for cards
      document.querySelectorAll('.card').forEach((c, i) => c.style.animationDelay = (0.06 * (i + 1)) + 's');
    })();
  </script>
</body>
</html>
