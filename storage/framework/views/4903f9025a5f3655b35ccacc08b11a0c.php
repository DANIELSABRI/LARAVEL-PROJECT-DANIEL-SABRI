<?php $__env->startSection('content'); ?>
<div class="bg-white min-h-screen py-32 px-4">
    <div class="max-w-4xl mx-auto">
        <?php if (isset($component)) { $__componentOriginal2ddbc40e602c342e508ac696e52f8719 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2ddbc40e602c342e508ac696e52f8719 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.badge','data' => ['variant' => 'gray','class' => 'mb-8']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'gray','class' => 'mb-8']); ?>Legal Agreement <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2ddbc40e602c342e508ac696e52f8719)): ?>
<?php $attributes = $__attributesOriginal2ddbc40e602c342e508ac696e52f8719; ?>
<?php unset($__attributesOriginal2ddbc40e602c342e508ac696e52f8719); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2ddbc40e602c342e508ac696e52f8719)): ?>
<?php $component = $__componentOriginal2ddbc40e602c342e508ac696e52f8719; ?>
<?php unset($__componentOriginal2ddbc40e602c342e508ac696e52f8719); ?>
<?php endif; ?>
        <h1 class="text-6xl font-black text-gray-900 mb-12 tracking-tighter">Terms & Conditions</h1>
        
        <div class="space-y-16">
            <section class="max-w-2xl">
                <h2 class="text-[10px] font-black text-blue-600 uppercase tracking-[0.3em] mb-6">01. Acceptance of Terms</h2>
                <div class="text-gray-500 font-medium leading-[1.8] opacity-80">
                    <p>Welcome to JobPortal. By accessing or using our website, you agree to comply with and be bound by these Terms and Conditions. If you do not agree to these terms, please do not use our services.</p>
                </div>
            </section>

            <section class="max-w-2xl">
                <h2 class="text-[10px] font-black text-blue-600 uppercase tracking-[0.3em] mb-6">02. Use of Services</h2>
                <div class="text-gray-500 font-medium leading-[1.8] opacity-80">
                    <p>Our platform is intended for individuals seeking employment and for employers or recruiters seeking candidates for employment. You agree to use the services only for lawful purposes.</p>
                </div>
            </section>

            <section class="max-w-2xl">
                <h2 class="text-[10px] font-black text-blue-600 uppercase tracking-[0.3em] mb-6">03. User Accounts</h2>
                <div class="text-gray-500 font-medium leading-[1.8] opacity-80">
                    <p>To access certain features, you must register for an account. You are responsible for maintaining the confidentiality of your account credentials and for all activities that occur under your account.</p>
                </div>
            </section>

            <section class="max-w-2xl">
                <h2 class="text-[10px] font-black text-blue-600 uppercase tracking-[0.3em] mb-6">04. Content Guidelines</h2>
                <div class="text-gray-500 font-medium leading-[1.8] opacity-80">
                    <p>Users are prohibited from posting false, misleading, or inappropriate content. We reserve the right to remove any content that violates our community standards or these terms.</p>
                </div>
            </section>

            <section class="max-w-2xl">
                <h2 class="text-[10px] font-black text-blue-600 uppercase tracking-[0.3em] mb-6">05. Disclaimer of Liability</h2>
                <div class="text-gray-500 font-medium leading-[1.8] opacity-80">
                    <p>JobPortal provides the platform "as is" and does not guarantee the accuracy of job postings or the suitability of candidates. We are not liable for any direct or indirect damages.</p>
                </div>
            </section>

            <div class="pt-12 border-t border-gray-100 italic">
                <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest">Last updated: January 16, 2026</p>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/danielsabri/jobportal/resources/views/pages/terms.blade.php ENDPATH**/ ?>