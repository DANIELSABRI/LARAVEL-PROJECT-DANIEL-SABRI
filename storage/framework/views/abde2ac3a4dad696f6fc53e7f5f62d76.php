<?php $__env->startSection('content'); ?>
<div class="bg-white min-h-screen">
    <!-- Header Section -->
    <section class="py-40 bg-soft-gradient px-4 border-b border-gray-100/50">
        <div class="max-w-4xl mx-auto text-center">
            <?php if (isset($component)) { $__componentOriginal2ddbc40e602c342e508ac696e52f8719 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2ddbc40e602c342e508ac696e52f8719 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.badge','data' => ['variant' => 'blue','class' => 'mb-8']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'blue','class' => 'mb-8']); ?>About JobPortal <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2ddbc40e602c342e508ac696e52f8719)): ?>
<?php $attributes = $__attributesOriginal2ddbc40e602c342e508ac696e52f8719; ?>
<?php unset($__attributesOriginal2ddbc40e602c342e508ac696e52f8719); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2ddbc40e602c342e508ac696e52f8719)): ?>
<?php $component = $__componentOriginal2ddbc40e602c342e508ac696e52f8719; ?>
<?php unset($__componentOriginal2ddbc40e602c342e508ac696e52f8719); ?>
<?php endif; ?>
            <h1 class="text-6xl md:text-7xl font-black text-gray-900 mb-10 tracking-tighter leading-tight">Empowering Your <br><span class="text-gradient">Career Journey</span></h1>
            <p class="text-xl text-gray-500 font-medium leading-relaxed max-w-2xl mx-auto opacity-80">JobPortal is a bridge between world-class talent and industry-leading companies, focused on building the future of work.</p>
        </div>
    </section>

    <!-- Mission & Stats -->
    <section class="py-40 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
                <div class="max-w-xl">
                    <h2 class="text-[10px] font-black uppercase tracking-[0.3em] text-blue-600 mb-6">Our Mission</h2>
                    <h3 class="text-4xl font-black text-gray-900 mb-8 tracking-tighter">Connecting talent with <br>purpose and passion.</h3>
                    <div class="space-y-6 text-gray-500 font-medium leading-relaxed opacity-80">
                        <p>We believe that everyone deserves to find a job they love. Our mission is to simplify the hiring process through innovative technology and a human-centric approach.</p>
                        <p>Since our inception, we've helped thousands of professionals land their dream roles at some of the world's most exciting startups and established enterprises.</p>
                    </div>
                </div>
                <div class="bg-gray-950 rounded-[3rem] p-16 shadow-2xl shadow-blue-900/10 border border-white/5">
                    <div class="grid grid-cols-2 gap-y-16 gap-x-12">
                        <div>
                            <div class="text-5xl font-black text-white mb-2 tracking-tighter">10k+</div>
                            <div class="text-[9px] font-bold uppercase tracking-[0.2em] text-blue-500">Jobs Posted</div>
                        </div>
                        <div>
                            <div class="text-5xl font-black text-white mb-2 tracking-tighter">5k+</div>
                            <div class="text-[9px] font-bold uppercase tracking-[0.2em] text-blue-500">Companies</div>
                        </div>
                        <div>
                            <div class="text-5xl font-black text-white mb-2 tracking-tighter">20k+</div>
                            <div class="text-[9px] font-bold uppercase tracking-[0.2em] text-blue-500">Talent</div>
                        </div>
                        <div>
                            <div class="text-5xl font-black text-white mb-2 tracking-tighter">95%</div>
                            <div class="text-[9px] font-bold uppercase tracking-[0.2em] text-blue-500">Success Rate</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-40 bg-gray-50/50 border-y border-gray-100/50 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-24">
                <h2 class="text-[10px] font-black uppercase tracking-[0.3em] text-blue-600 mb-4 opacity-80">Cultural Fabric</h2>
                <h3 class="text-4xl font-black text-gray-900 tracking-tighter">Our Core Values</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <?php if (isset($component)) { $__componentOriginal53747ceb358d30c0105769f8471417f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53747ceb358d30c0105769f8471417f6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card','data' => ['class' => 'group border-none bg-white p-12 text-center','hover' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'group border-none bg-white p-12 text-center','hover' => 'true']); ?>
                    <div class="w-20 h-20 bg-blue-50 rounded-3xl flex items-center justify-center mx-auto mb-10 group-hover:bg-blue-600 group-hover:text-white transition-all duration-500 text-blue-600">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h4 class="text-xl font-black text-gray-900 mb-4 tracking-tight">Innovation</h4>
                    <p class="text-sm text-gray-500 font-medium leading-relaxed opacity-70">Constantly improving the hiring experience through pioneering technology and data-driven insights.</p>
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
                <?php if (isset($component)) { $__componentOriginal53747ceb358d30c0105769f8471417f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53747ceb358d30c0105769f8471417f6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card','data' => ['class' => 'group border-none bg-white p-12 text-center','hover' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'group border-none bg-white p-12 text-center','hover' => 'true']); ?>
                    <div class="w-20 h-20 bg-emerald-50 rounded-3xl flex items-center justify-center mx-auto mb-10 group-hover:bg-emerald-600 group-hover:text-white transition-all duration-500 text-emerald-600">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <h4 class="text-xl font-black text-gray-900 mb-4 tracking-tight">Trust</h4>
                    <p class="text-sm text-gray-500 font-medium leading-relaxed opacity-70">Building a safe, verified, and transparent environment for companies and candidates to flourish.</p>
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
                <?php if (isset($component)) { $__componentOriginal53747ceb358d30c0105769f8471417f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53747ceb358d30c0105769f8471417f6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card','data' => ['class' => 'group border-none bg-white p-12 text-center','hover' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'group border-none bg-white p-12 text-center','hover' => 'true']); ?>
                    <div class="w-20 h-20 bg-indigo-50 rounded-3xl flex items-center justify-center mx-auto mb-10 group-hover:bg-indigo-600 group-hover:text-white transition-all duration-500 text-indigo-600">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h4 class="text-xl font-black text-gray-900 mb-4 tracking-tight">Community</h4>
                    <p class="text-sm text-gray-500 font-medium leading-relaxed opacity-70">Supporting the collective growth and continuous development of our global talent ecosystem.</p>
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
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/danielsabri/jobportal/resources/views/pages/about.blade.php ENDPATH**/ ?>