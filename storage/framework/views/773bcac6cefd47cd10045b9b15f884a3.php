<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="h-full bg-background">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Admin Center | <?php echo e(config('app.name', 'JobPortal')); ?></title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="h-full bg-background text-text-primary antialiased overflow-hidden">

    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside id="sidebar" class="w-64 bg-brand flex-shrink-0 flex flex-col transition-all duration-300 z-50">
            <!-- Sidebar Header -->
            <div class="h-16 flex items-center px-6 bg-brand-primary/10 border-b border-white/5">
                <a href="<?php echo e(route('home')); ?>" class="flex items-center gap-3">
                    <div class="w-6 h-6 bg-brand-primary rounded-[4px] flex items-center justify-center text-white text-xs font-bold shadow-lg shadow-black/20">J</div>
                    <span class="text-white font-bold tracking-tight text-lg sidebar-text">AdminCenter</span>
                </a>
            </div>

            <!-- Navigation -->
            <nav class="flex-grow py-6 overflow-y-auto custom-scrollbar">
                <div class="px-4 mb-6">
                    <p class="text-[10px] font-black text-white/40 uppercase tracking-[0.2em] mb-4 px-2 sidebar-text">Main Menu</p>
                    <ul class="space-y-1">
                        <li>
                            <a href="<?php echo e(route('admin.dashboard')); ?>" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-bold transition-all <?php echo e(request()->routeIs('admin.dashboard') ? 'bg-brand-primary text-white shadow-lg shadow-black/20' : 'text-white/50 hover:text-white hover:bg-white/5'); ?>">
                                <svg class="w-5 h-5 opacity-70" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                                <span class="sidebar-text">Dashboard</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="px-4 mb-6">
                    <p class="text-[10px] font-black text-white/40 uppercase tracking-[0.2em] mb-4 px-2 sidebar-text">User Management</p>
                    <ul class="space-y-1">
                        <li>
                            <a href="<?php echo e(route('admin.users.index')); ?>" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-bold transition-all <?php echo e(request()->routeIs('admin.users.*') ? 'bg-brand-primary text-white shadow-lg shadow-black/20' : 'text-white/50 hover:text-white hover:bg-white/5'); ?>">
                                <svg class="w-5 h-5 opacity-70" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                                <span class="sidebar-text">All Users</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('admin.companies.index')); ?>" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-bold transition-all <?php echo e(request()->routeIs('admin.companies.*') ? 'bg-brand-primary text-white shadow-lg shadow-black/20' : 'text-white/50 hover:text-white hover:bg-white/5'); ?>">
                                <svg class="w-5 h-5 opacity-70" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                                <span class="sidebar-text">Employers</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="px-4 mb-6">
                    <p class="text-[10px] font-bold text-text-muted uppercase tracking-[0.2em] mb-4 px-2 sidebar-text">Recruitment</p>
                    <ul class="space-y-1">
                        <li>
                            <a href="<?php echo e(route('admin.jobs.index')); ?>" class="flex items-center gap-3 px-3 py-2 rounded-md text-sm font-medium transition-colors <?php echo e(request()->routeIs('admin.jobs.*') ? 'bg-white/10 text-white shadow-sm' : 'text-white/40 hover:text-white hover:bg-white/5'); ?>">
                                <svg class="w-5 h-5 opacity-75" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                <span class="sidebar-text">Manage Jobs</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('admin.applications.index')); ?>" class="flex items-center gap-3 px-3 py-2 rounded-md text-sm font-medium transition-colors <?php echo e(request()->routeIs('admin.applications.*') ? 'bg-white/10 text-white shadow-sm' : 'text-white/40 hover:text-white hover:bg-white/5'); ?>">
                                <svg class="w-5 h-5 opacity-75" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/></svg>
                                <span class="sidebar-text">Applications</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="px-4 mb-6">
                    <p class="text-[10px] font-bold text-text-muted uppercase tracking-[0.2em] mb-4 px-2 sidebar-text">System</p>
                    <ul class="space-y-1">
                        <li>
                            <a href="<?php echo e(route('admin.categories.index')); ?>" class="flex items-center gap-3 px-3 py-2 rounded-md text-sm font-medium transition-colors <?php echo e(request()->routeIs('admin.categories.*') ? 'bg-white/10 text-white shadow-sm' : 'text-white/40 hover:text-white hover:bg-white/5'); ?>">
                                <svg class="w-5 h-5 opacity-75" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 11h.01M7 15h.01M11 7h.01M11 11h.01M11 15h.01M15 7h.01M15 11h.01M15 15h.01"/></svg>
                                <span class="sidebar-text">Categories</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('admin.job-types.index')); ?>" class="flex items-center gap-3 px-3 py-2 rounded-md text-sm font-medium transition-colors <?php echo e(request()->routeIs('admin.job-types.*') ? 'bg-white/10 text-white shadow-sm' : 'text-white/40 hover:text-white hover:bg-white/5'); ?>">
                                <svg class="w-5 h-5 opacity-75" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0-4V8m0 2h12m-6 4v1m0 1a2 2 0 100 4m0-4a2 2 0 110 4m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0-4v2m0-6V4"/></svg>
                                <span class="sidebar-text">Job Types</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Sidebar Footer -->
            <div class="p-4 bg-black/20 border-t border-white/5">
                <form method="POST" action="<?php echo e(route('logout')); ?>">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="flex items-center gap-3 w-full px-3 py-2 rounded-md text-sm font-medium text-white/50 hover:text-status-error hover:bg-status-error/10 transition-colors">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                        <span class="sidebar-text">Logout</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col min-w-0 bg-background relative overflow-hidden">
            <!-- Header -->
            <header class="h-16 bg-surface border-b border-border flex items-center justify-between px-8 shrink-0 relative z-40 shadow-sm">
                <div class="flex items-center gap-4">
                    <button id="sidebarToggle" class="p-2 text-text-muted hover:bg-background rounded-lg transition-colors lg:hidden">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    </button>
                    <div class="text-[10px] font-bold text-text-muted uppercase tracking-widest px-1">Administrative Gateway</div>
                </div>

                <div class="flex items-center gap-6">
                    <div class="flex items-center gap-3">
                        <div class="text-right">
                            <p class="text-xs font-bold text-text-primary"><?php echo e(auth()->user()->name); ?></p>
                            <p class="text-[9px] font-bold text-brand uppercase tracking-widest"><?php echo e(auth()->user()->role); ?></p>
                        </div>
                        <div class="w-10 h-10 rounded-full bg-background border border-border flex items-center justify-center overflow-hidden">
                             <?php if(auth()->user()->avatar): ?>
                                <img src="<?php echo e(Storage::url(auth()->user()->avatar)); ?>" class="w-full h-full object-cover">
                            <?php else: ?>
                                <span class="text-xs font-bold text-text-muted"><?php echo e(substr(auth()->user()->name, 0, 1)); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </header>
            
            <!-- Scrollable Content -->
            <main class="flex-1 overflow-y-auto custom-scrollbar p-8">
                <!-- Session Notifications -->
                <?php if(session('success')): ?>
                    <div class="bg-surface border border-status-success/30 text-status-success px-5 py-4 rounded-xl text-xs font-black uppercase tracking-widest shadow-lg shadow-status-success/5 mb-8 flex items-center gap-4 transition-all" role="alert">
                        <div class="w-8 h-8 rounded-lg bg-status-success/10 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-status-success" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>

                <?php if(session('error')): ?>
                    <div class="bg-surface border border-status-error/30 text-status-error px-5 py-4 rounded-xl text-xs font-black uppercase tracking-widest shadow-lg shadow-status-error/5 mb-8 flex items-center gap-4 transition-all" role="alert">
                        <div class="w-8 h-8 rounded-lg bg-status-error/10 flex items-center justify-center shrink-0">
                             <svg class="w-5 h-5 text-status-error" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                        </div>
                        <?php echo e(session('error')); ?>

                    </div>
                <?php endif; ?>

                <?php echo $__env->yieldContent('content'); ?>
            </main>

        </div>
    </div>

    <script>
        // Simple Sidebar Toggle for Mobile
        const sidebar = document.getElementById('sidebar');
        const toggle = document.getElementById('sidebarToggle');
        
        if (toggle) {
            toggle.addEventListener('click', () => {
                sidebar.classList.toggle('-translate-x-full');
            });
        }

        // Handle window resize for mobile sidebar
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) {
                sidebar.classList.remove('-translate-x-full');
            } else {
                sidebar.classList.add('-translate-x-full');
            }
        });

        // Initialize mobile state
        if (window.innerWidth < 1024) {
            sidebar.classList.add('-translate-x-full');
            sidebar.classList.add('absolute');
        } else {
            sidebar.classList.remove('-translate-x-full');
            sidebar.classList.remove('absolute');
        }
    </script>

    <style>
        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #e2e8f0;
            border-radius: 10px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #cbd5e1;
        }
        
        @media (max-width: 1024px) {
            #sidebar.-translate-x-full {
                transform: translateX(-100%);
            }
            #sidebar {
                transition: transform 0.3s ease-in-out;
            }
        }
    </style>
</body>
</html>
<?php /**PATH /Users/danielsabri/jobportal/resources/views/layouts/admin.blade.php ENDPATH**/ ?>