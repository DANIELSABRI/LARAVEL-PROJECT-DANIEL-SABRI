<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'variant' => 'gray',
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
    'variant' => 'gray',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
    $baseClasses = "inline-flex items-center px-2 py-0.5 rounded text-[11px] font-bold border leading-none transition-colors";
    
    $variants = [
        'blue' => "bg-brand-primary/10 text-brand-primary border-brand-primary/20",
        'indigo' => "bg-brand-primary/10 text-brand-primary border-brand-primary/20",
        'teal' => "bg-accent-soft text-accent border-accent/20",
        'green' => "bg-status-success/10 text-status-success border-status-success/20",
        'red' => "bg-status-error/10 text-status-error border-status-error/20",
        'amber' => "bg-status-warning/10 text-status-warning border-status-warning/20",
        'gray' => "bg-background text-text-muted border-border",
    ];

    $classes = $baseClasses . ' ' . ($variants[$variant] ?? $variants['gray']);
?>

<span <?php echo e($attributes->merge(['class' => $classes])); ?>>
    <?php echo e($slot); ?>

</span>
<?php /**PATH /Users/danielsabri/jobportal/resources/views/components/badge.blade.php ENDPATH**/ ?>