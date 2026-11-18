<!doctype html>
<html lang="en">
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Admin Login · Seerat Club</title>
<style>
*{box-sizing:border-box}body{margin:0;font-family:Inter,system-ui,sans-serif;color:#173b31}.login-page{min-height:100vh;display:grid;place-items:center;background:radial-gradient(circle at top,#eef3ed,#f8f5ed 52%,#eef1ec)}.card{width:min(440px,calc(100% - 30px));padding:32px;background:#fffdf8;border:1px solid #dce3dd;border-radius:24px;box-shadow:0 24px 70px rgba(22,54,46,.12)}.mark{width:48px;height:48px;border-radius:15px;background:#173b31;color:white;display:grid;place-items:center;font-weight:900}.card h1{font-family:Georgia,serif;font-size:34px;margin:18px 0 7px}.card p{color:#69766f;margin:0 0 23px}.field{margin-bottom:15px}.field label{display:block;font-weight:700;font-size:12px;margin-bottom:7px}.input{width:100%;padding:12px 13px;border:1px solid #ccd7cf;border-radius:12px;font:inherit}.btn{width:100%;padding:12px;border:0;border-radius:12px;background:#173b31;color:white;font-weight:800;font-size:14px}.error{background:#fae7e5;color:#8b3932;padding:11px 13px;border-radius:12px;margin-bottom:16px}.row{display:flex;justify-content:space-between;align-items:center;gap:10px;font-size:12px;color:#6d7974}
</style></head>
<body class="login-page">
<form class="card" method="POST" action="<?php echo e(route('admin.login.store')); ?>">
    <?php echo csrf_field(); ?>
    <div class="mark">SC</div>
    <h1>Welcome back.</h1>
    <p>Sign in to manage Seerat Club.</p>
    <?php if($errors->any()): ?><div class="error"><?php echo e($errors->first()); ?></div><?php endif; ?>
    <div class="field"><label for="email">Email address</label><input class="input" id="email" name="email" type="email" value="<?php echo e(old('email')); ?>" autocomplete="email" required autofocus></div>
    <div class="field"><label for="password">Password</label><input class="input" id="password" name="password" type="password" autocomplete="current-password" required></div>
    <div class="row" style="margin-bottom:18px"><label><input type="checkbox" name="remember" value="1"> Remember me</label><a href="<?php echo e(route('Home.welcome')); ?>">Back to website</a></div>
    <button class="btn" type="submit">Sign in</button>
</form>
</body></html>
<?php /**PATH C:\xampp\htdocs\Seerat-Club\resources\views/admin/auth/login.blade.php ENDPATH**/ ?>