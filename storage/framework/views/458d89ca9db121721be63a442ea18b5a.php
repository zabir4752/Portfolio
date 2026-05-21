<?php $__env->startSection('content'); ?>
<!-- Contact Section -->
            <section id="contact" class="pt-32 pb-24 min-h-screen relative z-10 border-t border-slate-800/50">
                <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-6">Get In Touch</h2>
                    <p class="text-slate-400 text-lg mb-6 max-w-2xl mx-auto">
                        Whether you have a question, a project idea, or just want to discuss AI, ML, and the future of automotive tech, my inbox is always open.
                    </p>
                    <a href="mailto:siddiquezabir2020@gmail.com" class="inline-flex items-center gap-2 text-brand-400 hover:text-brand-300 transition-colors text-sm font-mono mb-10">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        siddiquezabir2020@gmail.com
                    </a>
                    
                    <!-- Success Message Alert -->
                    <?php if(session('success')): ?>
                        <div class="mb-8 p-4 rounded-xl border border-emerald-500/30 bg-emerald-500/10 text-emerald-400 text-sm flex items-center max-w-2xl mx-auto">
                            <span class="flex w-2.5 h-2.5 rounded-full bg-emerald-500 mr-3"></span>
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>

                    <div class="glass-card rounded-2xl p-8 md:p-12 text-left max-w-2xl mx-auto border border-slate-700/50 shadow-2xl">
                        <form action="<?php echo e(route('contact.store')); ?>" method="POST" class="space-y-6">
                            <?php echo csrf_field(); ?>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-slate-300 mb-2">Name</label>
                                    <input type="text" name="name" id="name" value="<?php echo e(old('name')); ?>" class="w-full bg-slate-900/50 border <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500/50 focus:border-red-500 focus:ring-red-500 <?php else: ?> border-slate-700 focus:border-brand-500 focus:ring-brand-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> rounded-lg px-4 py-3 text-white focus:outline-none focus:ring-1 transition-colors" placeholder="John Doe">
                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="mt-1 text-xs text-red-400"><?php echo e($message); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-slate-300 mb-2">Email</label>
                                    <input type="email" name="email" id="email" value="<?php echo e(old('email')); ?>" class="w-full bg-slate-900/50 border <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500/50 focus:border-red-500 focus:ring-red-500 <?php else: ?> border-slate-700 focus:border-brand-500 focus:ring-brand-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> rounded-lg px-4 py-3 text-white focus:outline-none focus:ring-1 transition-colors" placeholder="john@example.com">
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="mt-1 text-xs text-red-400"><?php echo e($message); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div>
                                <label for="message" class="block text-sm font-medium text-slate-300 mb-2">Message</label>
                                <textarea name="message" id="message" rows="4" class="w-full bg-slate-900/50 border <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500/50 focus:border-red-500 focus:ring-red-500 <?php else: ?> border-slate-700 focus:border-brand-500 focus:ring-brand-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> rounded-lg px-4 py-3 text-white focus:outline-none focus:ring-1 transition-colors resize-none" placeholder="Hello Zabir, I'd like to talk about..."><?php echo e(old('message')); ?></textarea>
                                <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="mt-1 text-xs text-red-400"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <button type="submit" class="w-full bg-brand-600 hover:bg-brand-500 text-white font-medium py-3.5 rounded-lg transition-colors flex items-center justify-center cursor-pointer">
                                Send Message
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                            </button>
                        </form>
                    </div>
                </div>
            </section>
        </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/zabir/my-app/resources/views/contact.blade.php ENDPATH**/ ?>