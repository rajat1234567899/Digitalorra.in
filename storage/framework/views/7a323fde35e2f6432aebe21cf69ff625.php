<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital ORRA Admin Panel</title>
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('images/fevicon.png')); ?>">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/admin-styles.css')); ?>">
    
</head>
<body>
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 text-white p-5">

        <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Logo" style="background-color:white;">            
        <nav>
                <ul>
                    <li class="mb-4"><a href="<?php echo e(route('admin.dashboard')); ?>" class="block p-2 hover:bg-gray-700 rounded">Dashboard</a></li>
                    <li class="mb-4"><a href="/admin/blogs" class="block p-2 hover:bg-gray-700 rounded">Blogs</a></li>
                    <li class="mb-4"><a href="/admin/courses" class="block p-2 hover:bg-gray-700 rounded">Courses</a></li>
                    <li class="mb-4"><a href="/admin/teams" class="block p-2 hover:bg-gray-700 rounded">Teams</a></li>
                    <li class="mb-4"><a href="/admin/students" class="block p-2 hover:bg-gray-700 rounded">Students</a></li>
                    <li class="mb-4"><a href="" class="block p-2 hover:bg-gray-700 rounded">Services</a></li>
                    <li class="mb-4"><a href="/admin/contents   " class="block p-2 hover:bg-gray-700 rounded">Home Content</a></li>
                    <li class="mb-4"><a href="/admin/aboutus   " class="block p-2 hover:bg-gray-700 rounded">About Content</a></li>
                    <li class="mb-4"><a href="/admin/seo" class="block p-2 hover:bg-gray-700 rounded">Seo Settings</a></li>
                    <li class="mb-4">
                        <!-- Logout Button -->
                        <form method="POST" action="<?php echo e(route('logout')); ?>">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="block w-full text-left p-2 hover:bg-gray-700 rounded">
                                Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\newdigitalorra\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>