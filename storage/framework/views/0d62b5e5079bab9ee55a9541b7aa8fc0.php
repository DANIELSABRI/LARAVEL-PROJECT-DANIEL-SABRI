<?php $__env->startSection('content'); ?>
<div class="bg-slate-50 min-h-screen py-10 px-4">
    <div class="max-w-[72rem] mx-auto">
        
        <!-- Breadcrumbs -->
        <nav class="flex text-xs font-medium text-slate-500 mb-8 overflow-x-auto whitespace-nowrap pb-2">
            <a href="<?php echo e(route('home')); ?>" class="hover:text-slate-900 transition-colors">Home</a>
            <span class="mx-2 text-slate-300">/</span>
            <a href="<?php echo e(route('jobs.index')); ?>" class="hover:text-slate-900 transition-colors">Opportunities</a>
            <span class="mx-2 text-slate-300">/</span>
            <span class="text-slate-900 truncate max-w-[200px]"><?php echo e($job->title); ?></span>
        </nav>
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Header Card -->
                <div class="bg-white border border-slate-200 rounded-lg p-6 md:p-8 shadow-card relative overflow-hidden">
                    <div class="relative z-10 flex flex-col md:flex-row gap-6 items-start">
                        <div class="shrink-0">
                            <div class="w-16 h-16 md:w-20 md:h-20 bg-slate-50 rounded-lg border border-slate-100 flex items-center justify-center overflow-hidden">
                                <?php if($job->company && $job->company->logo): ?>
                                    <img src="<?php echo e(asset($job->company->logo)); ?>" class="w-full h-full object-cover">
                                <?php else: ?>
                                    <span class="text-2xl font-bold text-slate-300 uppercase"><?php echo e(substr($job->company->name, 0, 1)); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <div class="flex-1 min-w-0">
                             <div class="flex items-center gap-3 mb-3 flex-wrap">
                                 <h1 class="text-2xl md:text-3xl font-bold text-slate-900 tracking-tight leading-tight"><?php echo e($job->title); ?></h1>
                                 <?php if($job->is_featured): ?>
                                     <?php if (isset($component)) { $__componentOriginal2ddbc40e602c342e508ac696e52f8719 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2ddbc40e602c342e508ac696e52f8719 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.badge','data' => ['variant' => 'amber']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'amber']); ?>Featured <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2ddbc40e602c342e508ac696e52f8719)): ?>
<?php $attributes = $__attributesOriginal2ddbc40e602c342e508ac696e52f8719; ?>
<?php unset($__attributesOriginal2ddbc40e602c342e508ac696e52f8719); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2ddbc40e602c342e508ac696e52f8719)): ?>
<?php $component = $__componentOriginal2ddbc40e602c342e508ac696e52f8719; ?>
<?php unset($__componentOriginal2ddbc40e602c342e508ac696e52f8719); ?>
<?php endif; ?>
                                 <?php endif; ?>
                             </div>
                             
                             <div class="flex flex-wrap items-center gap-4 text-sm text-slate-500 font-medium">
                                 <div class="flex items-center gap-1.5 text-slate-900">
                                     <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                     <?php echo e($job->company->name); ?>

                                 </div>
                                 <div class="flex items-center gap-1.5">
                                     <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                                     <?php echo e($job->location ?? 'Remote'); ?>

                                 </div>
                                 <div class="flex items-center gap-1.5">
                                     <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                     Posted <?php echo e($job->created_at->diffForHumans()); ?>

                                 </div>
                             </div>
                        </div>
                    </div>
                </div>

                <!-- Description -->
                <div class="bg-white border border-slate-200 rounded-lg p-6 md:p-8 shadow-card">
                    <h2 class="text-sm font-bold text-slate-900 uppercase tracking-wide mb-6">Job Description</h2>
                    <div class="prose prose-slate prose-sm max-w-none text-slate-600 leading-relaxed">
                        <?php echo nl2br(e($job->description)); ?>

                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-6 lg:sticky lg:top-24">
                
                <!-- Apply Card -->
                <div class="bg-white border border-slate-200 rounded-lg p-6 shadow-float">
                    <?php if(auth()->guard()->check()): ?>
                        <?php if(auth()->user()->isJobSeeker()): ?>
                            <h3 class="text-sm font-bold text-slate-900 mb-6">Apply for this position</h3>
                            <form action="<?php echo e(route('jobs.apply', $job)); ?>" method="POST" enctype="multipart/form-data" class="space-y-4">
                                <?php echo csrf_field(); ?>
                                <div class="space-y-3">
                                    <label class="block text-xs font-medium text-slate-700 uppercase tracking-wide">Resume (PDF/DOC)</label>
                                    <input type="file" name="resume" class="block w-full text-xs text-slate-500
                                      file:mr-4 file:py-2 file:px-4
                                      file:rounded-md file:border-0
                                      file:text-xs file:font-semibold
                                      file:bg-slate-50 file:text-slate-700
                                      hover:file:bg-slate-100
                                    "/>
                                </div>
                                <div class="space-y-3">
                                    <label for="cover_letter" class="block text-xs font-medium text-slate-700 uppercase tracking-wide">Cover Letter</label>
                                    <textarea id="cover_letter" name="cover_letter" rows="4" class="w-full rounded-md border-slate-200 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" placeholder="Why are you a good fit?"></textarea>
                                </div>
                                <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['variant' => 'primary','size' => 'md','class' => 'w-full justify-center']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'primary','size' => 'md','class' => 'w-full justify-center']); ?>
                                    Submit Application
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
                            </form>
                            <form action="<?php echo e(route('jobs.save', $job)); ?>" method="POST" class="mt-3">
                                <?php echo csrf_field(); ?>
                                <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['variant' => 'outline','size' => 'md','class' => 'w-full justify-center']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'outline','size' => 'md','class' => 'w-full justify-center']); ?>
                                    <?php echo e(auth()->user()->savedJobs->contains($job->id) ? 'Remove from Saved' : 'Save for Later'); ?>

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
                            </form>
                        <?php elseif(auth()->user()->isEmployer()): ?>
                            <div class="bg-slate-50 rounded-md p-4 text-center border border-slate-200">
                                <p class="text-xs font-medium text-slate-500">Employers cannot apply to jobs.</p>
                            </div>
                        <?php endif; ?>
                    <?php else: ?>
                        <div class="text-center">
                            <h3 class="text-sm font-bold text-slate-900 mb-2">Interested?</h3>
                            <p class="text-sm text-slate-500 mb-6">Create an account to apply.</p>
                            <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['variant' => 'primary','size' => 'md','href' => ''.e(route('login')).'','class' => 'w-full justify-center mb-3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'primary','size' => 'md','href' => ''.e(route('login')).'','class' => 'w-full justify-center mb-3']); ?>
                                Log in to Apply
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
                            <a href="<?php echo e(route('register')); ?>" class="text-xs text-blue-600 hover:underline font-medium">Create an account</a>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Job Overview -->
                <div class="bg-white border border-slate-200 rounded-lg p-6 shadow-card">
                    <h3 class="text-xs font-bold text-slate-900 uppercase tracking-wide mb-6">Role Overview</h3>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 bg-emerald-50 rounded-lg flex items-center justify-center text-emerald-600 shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div>
                                <p class="text-xs text-slate-500 mb-0.5">Salary Range</p>
                                <p class="text-sm font-semibold text-slate-900">
                                    <?php if($job->salary_min): ?>
                                        $<?php echo e(number_format($job->salary_min/1000, 0)); ?>k - $<?php echo e(number_format($job->salary_max/1000, 0)); ?>k
                                    <?php else: ?>
                                        Not disclosed
                                    <?php endif; ?>
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 bg-blue-50 rounded-lg flex items-center justify-center text-blue-600 shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                            </div>
                            <div>
                                <p class="text-xs text-slate-500 mb-0.5">Location</p>
                                <p class="text-sm font-semibold text-slate-900"><?php echo e($job->location ?? 'Remote'); ?></p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 bg-indigo-50 rounded-lg flex items-center justify-center text-indigo-600 shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                            </div>
                            <div>
                                <p class="text-xs text-slate-500 mb-0.5">Type</p>
                                <p class="text-sm font-semibold text-slate-900 capitalize"><?php echo e(str_replace('_', ' ', $job->type)); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/danielsabri/jobportal/resources/views/pages/jobs/show.blade.php ENDPATH**/ ?>