<!DOCTYPE html>
<html>
<head>
    <title>URL Shortener</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">URL Shortener</h1>
        <form method="POST" action="<?php echo e(route('shorten')); ?>" class="mt-4">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <input type="url" name="url" class="form-control" placeholder="Enter your URL" value="<?php echo e(old('url')); ?>">
                <?php $__errorArgs = ['url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <button type="submit" class="btn btn-primary">Shorten</button>
        </form>

        <?php if(session('short_url')): ?>
            <div class="alert alert-success mt-3">
                Shortened URL: <a href="<?php echo e(session('short_url')); ?>" target="_blank"><?php echo e(session('short_url')); ?></a>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
<?php /**PATH C:\laragon\www\shortener\resources\views/welcome.blade.php ENDPATH**/ ?>