<?php $__env->startSection('content'); ?>
<div class="bg-background">
    <!-- Section 1: Hero -->
    <section class="relative pt-32 pb-16 overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(37,99,235,0.08),transparent_50%),radial-gradient(circle_at_bottom_left,rgba(34,197,94,0.05),transparent_50%)]"></div>
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <?php if (isset($component)) { $__componentOriginal2ddbc40e602c342e508ac696e52f8719 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2ddbc40e602c342e508ac696e52f8719 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.badge','data' => ['variant' => 'indigo','class' => 'mb-8 px-4 py-1.5 bg-brand-primary/10 border-brand-primary/20 text-brand-primary font-bold uppercase tracking-widest text-[10px]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'indigo','class' => 'mb-8 px-4 py-1.5 bg-brand-primary/10 border-brand-primary/20 text-brand-primary font-bold uppercase tracking-widest text-[10px]']); ?>
                🚀 Join 10,000+ top-tier professionals
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2ddbc40e602c342e508ac696e52f8719)): ?>
<?php $attributes = $__attributesOriginal2ddbc40e602c342e508ac696e52f8719; ?>
<?php unset($__attributesOriginal2ddbc40e602c342e508ac696e52f8719); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2ddbc40e602c342e508ac696e52f8719)): ?>
<?php $component = $__componentOriginal2ddbc40e602c342e508ac696e52f8719; ?>
<?php unset($__componentOriginal2ddbc40e602c342e508ac696e52f8719); ?>
<?php endif; ?>
            <h1 class="text-5xl md:text-7xl font-bold text-text-primary mb-8 leading-[1.05] tracking-tight">
                Engineering the <span class="text-brand-primary">Future</span> <br class="hidden md:block">of the Workspace.
            </h1>
            <p class="text-xl text-text-secondary font-medium mb-12 leading-relaxed max-w-2xl mx-auto">
                Connect with mission-driven companies and secure your place in the next generation of industry excellence.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4 mb-12">
                <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['variant' => 'primary','size' => 'lg','href' => ''.e(route('jobs.index')).'','class' => 'px-10 h-14 text-base shadow-vibrant']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'primary','size' => 'lg','href' => ''.e(route('jobs.index')).'','class' => 'px-10 h-14 text-base shadow-vibrant']); ?>
                    Initiate Career Search
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
                <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['variant' => 'outline','size' => 'lg','href' => ''.e(route('about')).'','class' => 'px-10 h-14 text-base border-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'outline','size' => 'lg','href' => ''.e(route('about')).'','class' => 'px-10 h-14 text-base border-2']); ?>
                    Platform Protocol
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
            </div>
        </div>
    </section>

    <!-- Section 2: Search Bar -->
    <section class="pb-32 px-4">
        <div class="max-w-5xl mx-auto">
            <div class="bg-surface p-2 rounded-2xl shadow-lg border-2 border-brand-primary/10 hover:border-brand-primary/30 transition-all duration-300 transform -translate-y-4">
                <form action="<?php echo e(route('jobs.index')); ?>" method="GET" class="flex flex-col md:flex-row items-stretch gap-2">
                    <div class="flex-1 relative group bg-background/50 rounded-xl">
                        <div class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-text-muted group-focus-within:text-brand-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </div>
                        <input type="text" name="search" placeholder="Job title or core skills..." class="w-full pl-12 pr-4 py-5 bg-transparent border-none focus:ring-0 font-bold text-text-primary placeholder-text-muted/60 text-sm">
                    </div>
                    <div class="w-px h-8 bg-border self-center hidden md:block opacity-60"></div>
                    <div class="flex-1 relative group bg-background/50 rounded-xl">
                        <div class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-text-muted group-focus-within:text-brand-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                        </div>
                        <input type="text" name="location" placeholder="City or Global Remote..." class="w-full pl-12 pr-4 py-5 bg-transparent border-none focus:ring-0 font-bold text-text-primary placeholder-text-muted/60 text-sm">
                    </div>
                    <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['variant' => 'primary','class' => 'px-10 h-15 rounded-xl font-bold uppercase tracking-widest text-xs']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'primary','class' => 'px-10 h-15 rounded-xl font-bold uppercase tracking-widest text-xs']); ?>Execute Search <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $attributes = $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $component = $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
                </form>
            </div>
            <div class="flex flex-wrap justify-center gap-8 mt-12 text-[10px] font-bold text-text-muted uppercase tracking-[0.2em]">
                <span class="text-text-secondary opacity-50">High-Demand:</span>
                <a href="<?php echo e(route('jobs.index', ['search' => 'Engineer'])); ?>" class="hover:text-brand-primary transition-colors hover:translate-y-[-1px] transform">Engineering</a>
                <a href="<?php echo e(route('jobs.index', ['search' => 'Design'])); ?>" class="hover:text-brand-primary transition-colors hover:translate-y-[-1px] transform">Creative</a>
                <a href="<?php echo e(route('jobs.index', ['search' => 'Marketing'])); ?>" class="hover:text-brand-primary transition-colors hover:translate-y-[-1px] transform">Strategy</a>
                <a href="<?php echo e(route('jobs.index', ['search' => 'Data'])); ?>" class="hover:text-brand-primary transition-colors hover:translate-y-[-1px] transform">Intelligence</a>
            </div>
        </div>
    </section>
</div>

<!-- Section 3: Key Benefits -->
<section class="py-24 bg-surface">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-[10px] font-bold uppercase tracking-[0.2em] text-brand mb-3">Empowering Careers</h2>
            <h3 class="text-3xl font-bold text-text-primary tracking-tight">Your success is our priority.</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="text-center group">
                <div class="w-16 h-16 bg-brand/5 rounded-2xl flex items-center justify-center mx-auto mb-6 text-brand group-hover:bg-brand group-hover:text-white transition-all duration-500">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h4 class="text-lg font-bold text-text-primary mb-3 tracking-tight">Verified Companies</h4>
                <p class="text-sm text-text-secondary leading-relaxed max-w-[280px] mx-auto">Every employer on our platform is manually verified by our team to ensure safety and quality.</p>
            </div>
            <div class="text-center group">
                <div class="w-16 h-16 bg-status-success/5 rounded-2xl flex items-center justify-center mx-auto mb-6 text-status-success group-hover:bg-status-success group-hover:text-white transition-all duration-500">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h4 class="text-lg font-bold text-text-primary mb-3 tracking-tight">Fast Hiring</h4>
                <p class="text-sm text-text-secondary leading-relaxed max-w-[280px] mx-auto">Apply directly and get responses within 48 hours from top local and global companies.</p>
            </div>
            <div class="text-center group">
                <div class="w-16 h-16 bg-brand-soft rounded-2xl flex items-center justify-center mx-auto mb-6 text-brand group-hover:bg-brand group-hover:text-white transition-all duration-500">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h4 class="text-lg font-bold text-text-primary mb-3 tracking-tight">Career Growth</h4>
                <p class="text-sm text-text-secondary leading-relaxed max-w-[280px] mx-auto">Access exclusive roles and career advice to help you reach your full potential in the industry.</p>
            </div>
        </div>
    </div>
</section>

<!-- Section 4: Featured Jobs -->
<section class="py-24 bg-background border-y border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
            <div class="max-w-xl">
                <h2 class="text-[10px] font-black uppercase tracking-[0.3em] text-brand-primary mb-4 ml-1">Latest Opportunities</h2>
                <h3 class="text-4xl font-bold text-text-primary tracking-tight">Featured Job Openings</h3>
            </div>
            <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['variant' => 'ghost','href' => ''.e(route('jobs.index')).'','class' => 'text-brand-primary group font-bold uppercase tracking-widest text-[11px]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'ghost','href' => ''.e(route('jobs.index')).'','class' => 'text-brand-primary group font-bold uppercase tracking-widest text-[11px]']); ?>
                Browse Registry <span class="group-hover:translate-x-1 transition-transform ml-2">→</span>
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
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php $__currentLoopData = $featuredJobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginal53747ceb358d30c0105769f8471417f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53747ceb358d30c0105769f8471417f6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card','data' => ['padding' => 'p-0','class' => 'flex flex-col h-full group','hover' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['padding' => 'p-0','class' => 'flex flex-col h-full group','hover' => 'true']); ?>
                    <div class="p-8 flex-grow text-left">
                        <div class="flex justify-between items-start mb-6">
                            <div class="w-12 h-12 bg-white shadow-sm border border-border rounded-xl flex items-center justify-center overflow-hidden transition-transform group-hover:scale-105">
                                <?php if($job->company->logo): ?>
                                    <img src="<?php echo e(asset('storage/' . $job->company->logo)); ?>" alt="<?php echo e($job->company->name); ?>" class="w-full h-full object-cover p-2">
                                <?php else: ?>
                                    <span class="text-lg font-bold text-text-muted uppercase"><?php echo e(substr($job->company->name, 0, 1)); ?></span>
                                <?php endif; ?>
                            </div>
                            <?php if (isset($component)) { $__componentOriginal2ddbc40e602c342e508ac696e52f8719 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2ddbc40e602c342e508ac696e52f8719 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.badge','data' => ['variant' => ''.e($job->is_featured ? 'amber' : 'indigo').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => ''.e($job->is_featured ? 'amber' : 'indigo').'']); ?>
                                <?php echo e($job->jobType->name ?? 'Full-time'); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2ddbc40e602c342e508ac696e52f8719)): ?>
<?php $attributes = $__attributesOriginal2ddbc40e602c342e508ac696e52f8719; ?>
<?php unset($__attributesOriginal2ddbc40e602c342e508ac696e52f8719); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2ddbc40e602c342e508ac696e52f8719)): ?>
<?php $component = $__componentOriginal2ddbc40e602c342e508ac696e52f8719; ?>
<?php unset($__componentOriginal2ddbc40e602c342e508ac696e52f8719); ?>
<?php endif; ?>
                        </div>
                        <a href="<?php echo e(route('jobs.show', $job->slug)); ?>" class="block text-lg font-bold text-text-primary mb-1.5 group-hover:text-brand transition-colors tracking-tight">
                            <?php echo e($job->title); ?>

                        </a>
                        <p class="text-[11px] font-bold text-text-muted uppercase tracking-widest mb-6"><?php echo e($job->company->name); ?></p>
                        
                        <div class="flex flex-wrap gap-4 text-[11px] font-medium text-text-secondary uppercase tracking-tight">
                            <div class="flex items-center">
                                <svg class="w-3.5 h-3.5 mr-1 text-text-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                                <?php echo e($job->location); ?>

                            </div>
                            <?php if($job->salary_min && $job->salary_max): ?>
                                <div class="flex items-center text-status-success font-semibold">
                                    <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    $<?php echo e(number_format($job->salary_min/1000, 1)); ?>k+
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="px-8 py-4 bg-background border-t border-border flex justify-between items-center group-hover:bg-surface transition-colors">
                        <p class="text-[10px] font-medium uppercase tracking-tight text-text-muted">
                            <?php echo e($job->created_at->diffForHumans()); ?>

                        </p>
                        <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['variant' => 'link','size' => 'sm','href' => ''.e(route('jobs.show', $job->slug)).'','class' => 'text-xs font-bold uppercase tracking-wide']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'link','size' => 'sm','href' => ''.e(route('jobs.show', $job->slug)).'','class' => 'text-xs font-bold uppercase tracking-wide']); ?>Audit Node → <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $attributes = $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $component = $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
                    </div>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $attributes = $__attributesOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__attributesOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $component = $__componentOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__componentOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<!-- Section 5: Categories -->
<section class="py-24 bg-surface">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-[10px] font-bold uppercase tracking-[0.2em] text-brand mb-3">Categorized Search</h2>
            <h3 class="text-3xl font-bold text-text-primary tracking-tight">Browse Popular Categories</h3>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('jobs.index', ['category' => $category->slug])); ?>" class="group block p-8 rounded-xl border border-border hover:border-brand/20 hover:bg-background hover:shadow-md transition-all duration-300 text-center">
                    <div class="w-14 h-14 bg-background rounded-xl flex items-center justify-center mx-auto mb-6 group-hover:bg-brand group-hover:text-white transition-all duration-500 text-text-muted">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <h4 class="text-base font-bold text-text-primary mb-1.5 leading-tight tracking-tight group-hover:text-brand transition-colors"><?php echo e($category->name); ?></h4>
                    <span class="text-[10px] font-bold text-text-muted uppercase tracking-widest"><?php echo e($category->jobs_count); ?> Positions</span>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<!-- Section 6: Action CTA -->
<section class="py-24 bg-text-primary overflow-hidden relative border-t border-white/5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-left">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Employer CTA -->
            <div class="bg-surface/5 p-12 rounded-2xl border border-white/5 hover:border-white/10 transition-all duration-500 flex flex-col items-start h-full">
                <h3 class="text-3xl font-bold text-white mb-4 leading-tight tracking-tight">Employers:<br>Build your dream team.</h3>
                <p class="text-text-muted mb-8 text-sm font-medium leading-relaxed max-w-sm">Reach thousands of qualified experts and scale your business with the industry's best talent.</p>
                <div class="mt-auto">
                    <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['variant' => 'primary','size' => 'lg','href' => ''.e(route('register', ['role' => 'employer'])).'','class' => 'px-10 shadow-lg shadow-black/20']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'primary','size' => 'lg','href' => ''.e(route('register', ['role' => 'employer'])).'','class' => 'px-10 shadow-lg shadow-black/20']); ?>
                        Establish Presence
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
                </div>
            </div>
            <!-- Seeker CTA -->
            <div class="bg-brand p-12 rounded-2xl shadow-xl shadow-brand/10 hover:shadow-brand/20 transition-all duration-500 flex flex-col items-start h-full">
                <h3 class="text-3xl font-bold text-white mb-4 leading-tight tracking-tight">Job Seekers:<br>Unlock your potential.</h3>
                <p class="text-brand-soft/70 mb-8 text-sm font-medium leading-relaxed max-w-sm">Unlock access to exclusive roles and top-tier companies. Your journey to excellence starts here.</p>
                <div class="mt-auto">
                    <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['variant' => 'secondary','size' => 'lg','href' => ''.e(route('jobs.index')).'','class' => 'px-10 border-transparent shadow-lg shadow-black/10']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'secondary','size' => 'lg','href' => ''.e(route('jobs.index')).'','class' => 'px-10 border-transparent shadow-lg shadow-black/10']); ?>
                        Browse Careers
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
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/danielsabri/jobportal/resources/views/pages/home.blade.php ENDPATH**/ ?>