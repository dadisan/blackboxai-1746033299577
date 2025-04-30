<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Wisata Kota Semarang</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    <div class="min-h-screen flex flex-col">
        <header class="bg-white shadow">
            <div class="container mx-auto px-4 py-4 flex items-center justify-between">
                <a href="/" class="flex items-center space-x-3">
                    <img src="https://wissemar.semarangkota.go.id:443/cc-content/themes/theme-v1/asset/img/logo/wissemar-hd.png" alt="Wis Semar Logo" class="h-12" />
                    <span class="text-xl font-semibold">Wisata Kota Semarang</span>
                </a>
            </div>
        </header>
        <main class="flex-grow container mx-auto px-4 py-8">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
        <footer class="bg-white border-t text-center py-4 text-sm text-gray-500">
            &copy; <?php echo e(date('Y')); ?> Wisata Kota Semarang. All rights reserved.
        </footer>
    </div>
</body>
</html>
<?php /**PATH /project/sandbox/user-workspace/web-magang/resources/views/layouts/app.blade.php ENDPATH**/ ?>