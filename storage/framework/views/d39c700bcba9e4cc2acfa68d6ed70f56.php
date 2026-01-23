<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title' => null,
    'padding' => 'p-6',
    'hover' => false,
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'title' => null,
    'padding' => 'p-6',
    'hover' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div <?php echo e($attributes->merge(['class' => "bg-surface border border-border rounded-xl shadow-md overflow-hidden " . ($hover ? "hover:shadow-lg hover:-translate-y-1 hover:border-brand-primary/20 transition-all duration-300" : "transition-all duration-300")])); ?>>
    <?php if($title): ?>
        <div class="px-8 py-5 border-b border-border flex justify-between items-center bg-background/30">
            <h3 class="text-sm font-bold text-text-primary tracking-tight uppercase"><?php echo e($title); ?></h3>
            <?php if(isset($headerActions)): ?>
                <div class="flex items-center gap-2">
                    <?php echo e($headerActions); ?>

                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <div class="<?php echo e($padding); ?>">
        <?php echo e($slot); ?>

    </div>

    <?php if(isset($footer)): ?>
        <div class="px-8 py-5 bg-background border-t border-border">
            <?php echo e($footer); ?>

        </div>
    <?php endif; ?>
</div>
<?php /**PATH /Users/danielsabri/jobportal/resources/views/components/card.blade.php ENDPATH**/ ?>