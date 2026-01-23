<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'JobPortal')); ?></title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="bg-background text-text-secondary antialiased flex flex-col min-h-screen">
    
    <!-- Navigation -->
    <nav class="bg-surface/80 backdrop-blur-md border-b border-border sticky top-0 z-50 h-16">
        <div class="max-w-[72rem] mx-auto px-4 sm:px-6 lg:px-8 h-full">
            <div class="flex justify-between h-full">
                <div class="flex items-center gap-8">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="<?php echo e(route('home')); ?>" class="text-xl font-bold text-text-primary tracking-tight flex items-center gap-2">
                            <div class="w-6 h-6 bg-brand rounded-[4px] flex items-center justify-center text-white text-xs font-bold">J</div>
                            <span>JobPortal</span>
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden sm:flex space-x-8 h-full items-center">
                        <a href="<?php echo e(route('home')); ?>" class="inline-flex items-center px-1 pt-1 text-sm font-bold text-text-secondary hover:text-brand-primary transition-all relative group <?php echo e(request()->routeIs('home') ? 'text-brand-primary' : ''); ?>">
                            Home
                            <?php if(request()->routeIs('home')): ?>
                                <span class="absolute bottom-0 left-0 w-full h-0.5 bg-brand-primary"></span>
                            <?php endif; ?>
                        </a>
                        <a href="<?php echo e(route('jobs.index')); ?>" class="inline-flex items-center px-1 pt-1 text-sm font-bold text-text-secondary hover:text-brand-primary transition-all relative group <?php echo e(request()->routeIs('jobs.*') ? 'text-brand-primary' : ''); ?>">
                            Browse Jobs
                            <?php if(request()->routeIs('jobs.*')): ?>
                                <span class="absolute bottom-0 left-0 w-full h-0.5 bg-brand-primary"></span>
                            <?php endif; ?>
                        </a>
                        <a href="<?php echo e(route('about')); ?>" class="inline-flex items-center px-1 pt-1 text-sm font-bold text-text-secondary hover:text-brand-primary transition-all relative group <?php echo e(request()->routeIs('about') ? 'text-brand-primary' : ''); ?>">
                            About
                            <?php if(request()->routeIs('about')): ?>
                                <span class="absolute bottom-0 left-0 w-full h-0.5 bg-brand-primary"></span>
                            <?php endif; ?>
                        </a>
                    </div>
                </div>
                
                <!-- Right Side Actions -->
                <div class="hidden sm:flex sm:items-center sm:ml-6 space-x-4">
                    <?php if(auth()->guard()->check()): ?>
                        <?php
                            $dashboardRoute = match(auth()->user()->role) {
                                'employer' => route('employer.dashboard'),
                                'admin' => route('admin.dashboard'),
                                default => route('dashboard'),
                            };
                            $dashboardLabel = match(auth()->user()->role) {
                                'employer' => 'Employer Panel',
                                'admin' => 'Admin Center',
                                default => 'Dashboard',
                            };
                        ?>
                        
                        <a href="<?php echo e($dashboardRoute); ?>" class="px-4 py-2 rounded-lg text-sm font-bold bg-brand-primary/5 text-brand-primary hover:bg-brand-primary hover:text-white transition-all shadow-sm">
                            <?php echo e($dashboardLabel); ?>

                        </a>

                        <span class="text-border">|</span>

                        <form method="POST" action="<?php echo e(route('logout')); ?>" class="inline">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="text-sm font-bold text-text-muted hover:text-status-error transition-colors cursor-pointer ml-2">
                                Log Out
                            </button>
                        </form>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>" class="text-sm font-bold text-text-secondary hover:text-brand-primary transition-colors">
                            Log in
                        </a>
                        <?php if(Route::has('register')): ?>
                            <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['variant' => 'primary','size' => 'sm','href' => ''.e(route('register')).'','class' => 'px-6 font-bold shadow-vibrant']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'primary','size' => 'sm','href' => ''.e(route('register')).'','class' => 'px-6 font-bold shadow-vibrant']); ?>
                                Establish Registry
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $attributes = $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $component = $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main class="flex-grow">
        <?php if(session('success')): ?>
            <div class="max-w-[72rem] mx-auto px-4 sm:px-6 lg:px-8 mt-6">
                <div class="bg-emerald-50 border border-emerald-200 text-emerald-700 px-4 py-3 rounded-lg text-sm shadow-sm" role="alert">
                    <?php echo e(session('success')); ?>

                </div>
            </div>
        <?php endif; ?>

        <?php if(session('error')): ?>
            <div class="max-w-[72rem] mx-auto px-4 sm:px-6 lg:px-8 mt-6">
                <div class="bg-rose-50 border border-rose-200 text-rose-700 px-4 py-3 rounded-lg text-sm shadow-sm" role="alert">
                    <?php echo e(session('error')); ?>

                </div>
            </div>
        <?php endif; ?>

        <?php echo $__env->yieldContent('content'); ?>
    </main>
    
    <!-- Footer -->
    <footer class="bg-surface border-t border-border mt-20 pt-12 pb-8">
        <div class="max-w-[72rem] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
                <div class="col-span-1 md:col-span-1">
                    <a href="<?php echo e(route('home')); ?>" class="text-lg font-bold text-text-primary tracking-tight flex items-center gap-2 mb-4">
                        <div class="w-5 h-5 bg-brand rounded-[3px] flex items-center justify-center text-white text-[10px] font-bold">J</div>
                        <span>JobPortal</span>
                    </a>
                    <p class="text-sm text-text-secondary leading-relaxed">
                        Connecting talent with opportunity globally.
                    </p>
                </div>
                <div>
                    <h4 class="text-sm font-bold text-text-primary mb-4">Platform</h4>
                    <ul class="space-y-2 text-sm text-text-secondary">
                        <li><a href="<?php echo e(route('jobs.index')); ?>" class="hover:text-brand transition-colors">Browse Jobs</a></li>
                        <li><a href="<?php echo e(route('about')); ?>" class="hover:text-brand transition-colors">About</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-sm font-bold text-text-primary mb-4">Support</h4>
                    <ul class="space-y-2 text-sm text-text-secondary">
                        <li><a href="<?php echo e(route('contact')); ?>" class="hover:text-brand transition-colors">Contact</a></li>
                        <li><a href="<?php echo e(route('terms')); ?>" class="hover:text-brand transition-colors">Terms</a></li>
                        <li><a href="<?php echo e(route('privacy')); ?>" class="hover:text-brand transition-colors">Privacy</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-sm font-bold text-text-primary mb-4">Start Now</h4>
                    <div class="flex flex-col gap-2">
                        <a href="<?php echo e(route('register')); ?>" class="text-sm font-semibold text-brand hover:text-brand-dark">Post a Job &rarr;</a>
                        <a href="<?php echo e(route('jobs.index')); ?>" class="text-sm font-semibold text-text-secondary hover:text-text-primary">Find a Job &rarr;</a>
                    </div>
                </div>
            </div>
            <div class="pt-8 border-t border-border flex flex-col md:flex-row justify-between items-center">
                <p class="text-[10px] font-bold text-text-muted uppercase tracking-widest">
                    &copy; <?php echo e(date('Y')); ?> JobPortal. Systems established.
                </p>
            </div>
        </div>
    </footer>

</body>
</html>
<?php /**PATH /Users/danielsabri/jobportal/resources/views/layouts/app.blade.php ENDPATH**/ ?>