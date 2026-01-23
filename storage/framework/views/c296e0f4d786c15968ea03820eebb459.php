<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'variant' => 'primary',
    'href' => null,
    'size' => 'md',
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
    'variant' => 'primary',
    'href' => null,
    'size' => 'md',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
    $baseClasses = "inline-flex items-center justify-center border border-transparent rounded-md font-medium transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 active:scale-[0.98] disabled:opacity-50 disabled:pointer-events-none";
    
    $sizes = [
        'xs' => 'px-2.5 py-1.5 text-[11px] uppercase tracking-wider font-bold',
        'sm' => 'px-3 py-2 text-xs',
        'md' => 'px-4 py-2 text-sm',
        'lg' => 'px-6 py-3 text-base',
    ];

    $sizeClass = $sizes[$size] ?? $sizes['md'];
    
    $variants = [
        'primary' => "bg-brand-primary text-white shadow-vibrant hover:bg-brand focus:ring-brand-primary",
        'secondary' => "bg-white text-text-primary border-border shadow-md hover:border-brand-primary/30 hover:bg-brand-soft focus:ring-brand-primary/20",
        'outline' => "bg-transparent border border-border text-text-primary font-bold hover:border-brand-primary hover:text-brand-primary focus:ring-brand-primary/20",
        'danger' => "bg-status-error text-white shadow-md hover:bg-status-error/90 focus:ring-status-error",
        'ghost' => "bg-transparent text-text-secondary font-bold hover:bg-brand-soft hover:text-brand-primary",
        'link' => "bg-transparent text-brand-primary font-bold hover:underline px-0 py-0 h-auto",
    ];

    $classes = "{$baseClasses} {$sizeClass} " . ($variants[$variant] ?? $variants['primary']);
?>

<?php if($href): ?>
    <a href="<?php echo e($href); ?>" <?php echo e($attributes->merge(['class' => $classes])); ?>>
        <?php echo e($slot); ?>

    </a>
<?php else: ?>
    <button <?php echo e($attributes->merge(['type' => 'submit', 'class' => $classes])); ?>>
        <?php echo e($slot); ?>

    </button>
<?php endif; ?>
<?php /**PATH /Users/danielsabri/jobportal/resources/views/components/button.blade.php ENDPATH**/ ?>