<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Notes</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #305569;
            color: #fff;
            min-height: 100vh;
            line-height: 1.6;
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
            margin: 0 auto;
            padding: 30px 20px;
        }
        .app-header {
            text-align: center;
            margin-bottom: 40px;
        }
        .logo {
            max-width: 250px;
            height: auto;
            margin-bottom: 20px;
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            color: #ffffff;
        }
        h2 {
            font-size: 1.8rem;
            margin: 30px 0 20px;
            color: #ffffff;
        }
        .card {
            background-color: #3f6b7d;
            border-left: 6px solid #a5c62b;
            border-radius: 16px;
            padding: 30px;
            margin-bottom: 40px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
        .form-group { margin-bottom: 25px; }
        label {
            display: block;
            margin-bottom: 8px;
            color: #eee;
            font-size: 18px;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            background: #447289;
            color: #fff;
            outline: none;
            transition: all 0.3s;
        }
        input[type="text"]:focus, textarea:focus {
            box-shadow: 0 0 0 3px rgba(165, 198, 43, 0.3);
        }
        input::placeholder, textarea::placeholder {
            color: #cfd8dc;
            opacity: 0.7;
        }
        .error {
            color: #ff6b6b;
            font-size: 14px;
            margin-top: 5px;
        }
        .btn {
            background-color: #a5c62b;
            color: #1e2b30;
            border: none;
            padding: 15px 35px;
            font-size: 18px;
            font-weight: 600;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s;
            display: block;
            margin: 30px auto 0;
        }
        .btn:hover {
            background-color: #91b626;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        .note {
            background: #3f6b7d;
            border-left: 6px solid #a5c62b;
            padding: 25px;
            border-radius: 12px;
            margin-bottom: 25px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s;
        }
        .note:hover { transform: translateY(-3px); }
        .note-title {
            font-size: 22px;
            color: #ffffff;
            margin-bottom: 10px;
        }
        .note-content {
            margin: 15px 0;
            color: #dddddd;
            font-size: 16px;
        }
        .note-date {
            color: #cccccc;
            font-style: italic;
            font-size: 14px;
        }
        .empty-notes {
            text-align: center;
            color: #a5c62b;
            font-size: 18px;
            margin: 40px 0;
        }
        footer {
            text-align: center;
            margin-top: 50px;
            padding: 20px;
            color: rgba(255, 255, 255, 0.7);
            font-size: 14px;
        }
        @media (max-width: 768px) {
            .container { padding: 20px 15px; }
            .card { padding: 20px; }
            h1 { font-size: 2rem; }
            h2 { font-size: 1.5rem; }
            .logo { max-width: 200px; }
        }
    </style>
</head>
<body>
    <nav>
     <nav>
       <a href="<?php echo e(route('notes.index')); ?>">الملاحظات</a>
    <a href="<?php echo e(route('menu')); ?>">المنيو</a>
</nav>
    </nav>

    <div class="container">
        <div class="app-header">
            <img src="<?php echo e(asset('images/code corner logo.jpg')); ?>" alt="Code Corner Logo" class="logo">
            <h1>My Notes App</h1>
        </div>

        <div class="card">
            <form method="POST" action="<?php echo e(route('notes.store')); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="title">عنوان الملاحظة</label>
                    <input type="text" name="title" id="title" placeholder="أدخل عنوان الملاحظة..." required>
                    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="error"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <label for="content">محتوى الملاحظة</label>
                    <textarea name="content" id="content" rows="6" placeholder="اكتب ملاحظتك هنا..."></textarea>
                    <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="error"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <button type="submit" class="btn">حفظ الملاحظة</button>
            </form>
        </div>

        <h2>جميع الملاحظات</h2>
        <?php $__empty_1 = true; $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="note">
                <div class="note-title"><?php echo e($note->title); ?></div>
                <div class="note-content"><?php echo e($note->content); ?></div>
                <div class="note-date"><?php echo e($note->created_at->format('Y-m-d H:i')); ?></div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="empty-notes">لا توجد ملاحظات متاحة</div>
        <?php endif; ?>
    </div>

    <footer>
        © Developed by: Zaid Abu Ameen
    </footer>
</body>
</html>
<?php /**PATH C:\Users\wmutl\notes-app\resources\views\notes\index.blade.php ENDPATH**/ ?>