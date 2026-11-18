<?php $__env->startSection('title', 'Feedback · Seerat Club for Kids'); ?>

<?php $__env->startSection("Content"); ?>

<style>
.feedback-page{background:#f4f6f1;padding:72px 0 96px}.feedback-shell{width:min(1160px,calc(100% - 32px));margin:auto;display:grid;grid-template-columns:1.05fr .95fr;overflow:hidden;border-radius:34px;background:#fff;box-shadow:0 28px 80px rgba(22,50,42,.12)}.feedback-form-side{padding:clamp(32px,5vw,64px)}.feedback-kicker{color:#a68139;font-size:11px;font-weight:800;letter-spacing:.16em;text-transform:uppercase}.feedback-form-side h1{margin:12px 0 14px;color:#16322a;font-size:clamp(42px,5vw,64px);line-height:1}.feedback-intro{max-width:620px;color:#63706b;line-height:1.8}.feedback-grid{display:grid;grid-template-columns:1fr 1fr;gap:18px;margin-top:30px}.feedback-field{display:grid;gap:8px}.feedback-field.full{grid-column:1/-1}.feedback-field label{color:#263a33;font-size:12px;font-weight:800}.feedback-field input,.feedback-field select,.feedback-field textarea{width:100%;border:1px solid #d9ded6;border-radius:14px;background:#fbfcf9;padding:14px 15px;color:#1e312a;outline:none}.feedback-field textarea{min-height:150px;resize:vertical}.feedback-field input:focus,.feedback-field select:focus,.feedback-field textarea:focus{border-color:#b99852;box-shadow:0 0 0 4px rgba(185,152,82,.12)}.rating-row{display:flex;gap:8px;flex-wrap:wrap}.rating-row input{position:absolute;opacity:0;pointer-events:none}.rating-row label{display:flex;align-items:center;justify-content:center;width:48px;height:48px;border:1px solid #d9ded6;border-radius:50%;cursor:pointer;background:#fff;font-size:18px}.rating-row input:checked+label{background:#16322a;color:#f2d99a;border-color:#16322a}.feedback-check{display:flex;gap:10px;align-items:flex-start;color:#63706b;font-size:13px}.feedback-check input{margin-top:4px}.feedback-submit{display:inline-flex;align-items:center;gap:10px;border:0;border-radius:999px;background:#16322a;color:#fff;padding:15px 24px;font-weight:800;cursor:pointer}.feedback-submit:hover{background:#b99852;color:#16322a}.feedback-visual{position:relative;display:flex;align-items:flex-end;justify-content:center;min-height:720px;padding:54px 42px;background:radial-gradient(circle at 65% 20%,rgba(241,216,156,.45),transparent 30%),linear-gradient(145deg,#193c32,#102a23);overflow:hidden}.feedback-visual:before,.feedback-visual:after{content:"";position:absolute;border:1px solid rgba(232,203,130,.18);border-radius:50%}.feedback-visual:before{width:420px;height:420px;right:-170px;top:-80px}.feedback-visual:after{width:280px;height:280px;left:-140px;bottom:100px}.kid-3d{position:relative;z-index:2;width:min(100%,390px);text-align:center}.kid-head{width:164px;height:164px;margin:0 auto -16px;border-radius:48% 48% 46% 46%;background:linear-gradient(145deg,#d79c69,#b97549);box-shadow:inset -18px -16px 28px rgba(93,50,26,.18),0 18px 32px rgba(0,0,0,.18);position:relative}.kid-hair{position:absolute;left:12px;right:12px;top:-4px;height:62px;border-radius:50% 50% 38% 42%;background:#24201d}.kid-eye{position:absolute;top:80px;width:10px;height:12px;border-radius:50%;background:#231e1a}.kid-eye.left{left:48px}.kid-eye.right{right:48px}.kid-smile{position:absolute;left:62px;top:112px;width:42px;height:18px;border-bottom:4px solid #7d3f31;border-radius:0 0 40px 40px}.kid-body{position:relative;width:260px;height:310px;margin:auto;border-radius:90px 90px 50px 50px;background:linear-gradient(145deg,#e6c565,#c79a39);box-shadow:inset -28px -22px 40px rgba(111,77,24,.18),0 26px 46px rgba(0,0,0,.16)}.kid-body:before{content:"SEERAT";position:absolute;top:85px;left:0;right:0;color:#16322a;font-weight:900;letter-spacing:.12em}.kid-book{position:absolute;left:50%;bottom:52px;transform:translateX(-50%);width:180px;height:104px;border-radius:12px;background:linear-gradient(90deg,#fff 49%,#e5e1d8 50%,#fff 51%);box-shadow:0 14px 28px rgba(0,0,0,.18)}.visual-copy{position:relative;z-index:2;margin-top:28px;color:#fff}.visual-copy h2{color:#f2d99a;margin-bottom:12px}.visual-copy p{color:rgba(255,255,255,.74);line-height:1.7}.feedback-alert{margin:20px 0 0;padding:14px 16px;border-radius:14px;background:#edf7ee;color:#245b36}.feedback-errors{margin:20px 0 0;padding:14px 16px;border-radius:14px;background:#fff0ef;color:#8a302c}@media(max-width:900px){.feedback-shell{grid-template-columns:1fr}.feedback-visual{min-height:560px}.feedback-grid{grid-template-columns:1fr}.feedback-field.full{grid-column:auto}}@media(max-width:520px){.feedback-page{padding:35px 0 60px}.feedback-form-side{padding:28px 20px}.feedback-visual{min-height:500px;padding:35px 20px}.kid-body{width:220px;height:270px}.kid-head{width:145px;height:145px}}

.feedback-visual {
    position: relative;
    display: flex;
    align-items: flex-end;
    justify-content: center;
    min-height: 720px;
    padding: 54px 42px;
    background:
        radial-gradient(
            circle at 65% 20%,
            rgba(241,216,156,.45),
            transparent 30%
        ),
        linear-gradient(
            145deg,
            #193c32,
            #102a23
        );
    overflow: hidden;
}

.feedback-visual::before,
.feedback-visual::after {
    content: "";
    position: absolute;
    border: 1px solid rgba(232,203,130,.18);
    border-radius: 50%;
}

.feedback-visual::before {
    width: 420px;
    height: 420px;
    right: -170px;
    top: -80px;
}

.feedback-visual::after {
    width: 280px;
    height: 280px;
    left: -140px;
    bottom: 100px;
}

.feedback-visual-content {
    position: relative;
    z-index: 2;
    width: min(100%, 440px);
    text-align: center;
}

.feedback-child-wrap {
    position: relative;
    display: flex;
    align-items: flex-end;
    justify-content: center;
    width: 100%;
    min-height: 455px;
}

.feedback-child-wrap::after {
    content: "";
    position: absolute;
    left: 50%;
    bottom: 6px;
    width: 70%;
    height: 35px;
    transform: translateX(-50%);
    border-radius: 50%;
    background: rgba(0,0,0,.20);
    filter: blur(16px);
    z-index: 0;
}

.feedback-child-image {
    position: relative;
    z-index: 1;
    display: block;
    width: min(100%, 390px);
    max-height: 500px;
    object-fit: contain;
    object-position: center bottom;
    filter: drop-shadow(
        0 24px 28px rgba(0,0,0,.18)
    );
}

.visual-copy {
    position: relative;
    z-index: 3;
    margin-top: 26px;
    color: #fff;
}

.visual-copy .feedback-kicker {
    color: #c9a24d;
}

.visual-copy h2 {
    margin: 10px 0 12px;
    color: #f2d99a;
    font-family:
        "Baloo 2",
        "SC Arabic",
        sans-serif;
    font-size: clamp(30px, 3vw, 40px);
    line-height: 1.1;
}

.visual-copy p {
    max-width: 380px;
    margin: 0 auto;
    color: rgba(255,255,255,.74);
    line-height: 1.7;
}

@media (max-width:900px) {

    .feedback-visual {
        min-height: 620px;
    }

    .feedback-child-wrap {
        min-height: 390px;
    }

    .feedback-child-image {
        max-height: 430px;
    }
}

@media (max-width:520px) {

    .feedback-visual {
        min-height: 540px;
        padding: 35px 20px;
    }

    .feedback-child-wrap {
        min-height: 340px;
    }

    .feedback-child-image {
        width: min(100%, 310px);
        max-height: 360px;
    }

    .visual-copy h2 {
        font-size: 30px;
    }
}

</style>

<section class="feedback-page">
    <div class="feedback-shell">
        <div class="feedback-form-side">
            <span class="feedback-kicker">YOUR VOICE MATTERS</span>
            <h1>Help us make Seerat Club even better.</h1>
            <p class="feedback-intro">Share your experience, suggestions or a memorable moment. Your feedback helps us create more meaningful learning experiences for children and families.</p>

            <?php if(session('success')): ?><div class="feedback-alert"><?php echo e(session('success')); ?></div><?php endif; ?>
            <?php if($errors->any()): ?><div class="feedback-errors">Please check the highlighted fields and submit again.</div><?php endif; ?>

            <form action="<?php echo e(route('feedback.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="feedback-grid">
                    <div class="feedback-field"><label for="name">Your Name *</label><input id="name" name="name" value="<?php echo e(old('name')); ?>" required></div>
                    <div class="feedback-field"><label for="relationship">You are a *</label><select id="relationship" name="relationship" required><option value="">Choose one</option><option value="parent" <?php if(old('relationship')==='parent'): echo 'selected'; endif; ?>>Parent / Guardian</option><option value="student" <?php if(old('relationship')==='student'): echo 'selected'; endif; ?>>Student</option><option value="volunteer" <?php if(old('relationship')==='volunteer'): echo 'selected'; endif; ?>>Volunteer</option><option value="visitor" <?php if(old('relationship')==='visitor'): echo 'selected'; endif; ?>>Visitor</option><option value="other" <?php if(old('relationship')==='other'): echo 'selected'; endif; ?>>Other</option></select></div>
                    <div class="feedback-field"><label for="email">Email</label><input id="email" type="email" name="email" value="<?php echo e(old('email')); ?>"></div>
                    <div class="feedback-field"><label for="phone">Phone</label><input id="phone" name="phone" value="<?php echo e(old('phone')); ?>"></div>
                    <div class="feedback-field full"><label>Overall Experience *</label><div class="rating-row"><?php for($i=1;$i<=5;$i++): ?><input type="radio" id="rating<?php echo e($i); ?>" name="rating" value="<?php echo e($i); ?>" <?php if((int)old('rating')===$i): echo 'checked'; endif; ?> required><label for="rating<?php echo e($i); ?>"><?php echo e($i); ?>★</label><?php endfor; ?></div></div>
                    <div class="feedback-field full"><label for="topic">What is your feedback about?</label><input id="topic" name="topic" value="<?php echo e(old('topic')); ?>" placeholder="e.g. Event, registration, website, volunteer experience"></div>
                    <div class="feedback-field full"><label for="message">Your Feedback *</label><textarea id="message" name="message" required placeholder="Tell us what you enjoyed and what we can improve..."><?php echo e(old('message')); ?></textarea></div>
                    <div class="feedback-field full"><label class="feedback-check"><input type="checkbox" name="permission_to_share" value="1" <?php if(old('permission_to_share')): echo 'checked'; endif; ?>><span>You may share my feedback as a testimonial without publishing my contact details.</span></label></div>
                    <div class="feedback-field full"><button class="feedback-submit" type="submit">Send Feedback <i class="fas fa-arrow-right"></i></button></div>
                </div>
            </form>
        </div>

        


        <aside
    class="feedback-visual"
    aria-label="Seerat Club child illustration"
>
    <div class="feedback-visual-content">

        <div class="feedback-child-wrap">

            <img
                class="feedback-child-image"
                src="<?php echo e(asset('assets/images/feedback.webp')); ?>"
                alt="Young Muslim child holding an open book"
                decoding="async"
            >

        </div>

        <div class="visual-copy">

            <span class="feedback-kicker">
                LEARN · REFLECT · GROW
            </span>

            <h2>
                Every voice helps us grow.
            </h2>

            <p>
                Thank you for helping us build a welcoming,
                meaningful Seerah journey for young hearts.
            </p>

        </div>

    </div>
</aside>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("Layout.layout", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Seerat-Club\resources\views/Home/feedback.blade.php ENDPATH**/ ?>