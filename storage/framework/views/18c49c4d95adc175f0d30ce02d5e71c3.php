<?php $__env->startSection('content'); ?>
<!-- Skills Section -->
<section id="skills" class="pt-32 pb-32 min-h-screen relative z-10 overflow-hidden">
    <!-- Sci-fi grid and glow backdrops -->
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-brand-500/10 rounded-full blur-[120px] animate-pulse"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-purple-500/10 rounded-full blur-[120px] animate-pulse"></div>
        <!-- Futuristic background grid -->
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#0f172a_1px,transparent_1px),linear-gradient(to_bottom,#0f172a_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_50%,#000_70%,transparent_100%)] opacity-30"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Futuristic Section Header -->
        <div class="flex flex-col items-center mb-24 text-center">
            <div class="inline-flex items-center px-4 py-1.5 rounded-full border border-brand-500/30 bg-brand-500/10 text-brand-400 text-xs font-mono mb-6 tracking-widest uppercase">
                <span class="flex w-2 h-2 rounded-full bg-brand-500 mr-2 animate-ping"></span>
                System Diagnostics // Skill Arsenal
            </div>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-black text-white tracking-tight mb-6">
                Technical <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-400 via-indigo-400 to-purple-400">Capabilities</span>
            </h2>
            <p class="text-slate-400 max-w-2xl text-lg leading-relaxed font-sans">
                A quantitative representation of my core technical competencies, engineering capabilities, and tool proficiencies in high-performance computing and data science.
            </p>
        </div>

        <?php
            $categories = [
                [
                    'id' => 'languages',
                    'title' => 'Core Languages',
                    'subtitle' => 'System & Scripting',
                    'badge' => 'Engine Room',
                    'color' => 'brand',
                    'accent' => '#0ea5e9',
                    'bgGlow' => 'hover:shadow-[0_0_50px_rgba(14,165,233,0.15)]',
                    'skills' => [
                        ['name' => 'Python', 'level' => 95, 'desc' => 'Data Science, ML, scripting', 'status' => 'OPTIMIZED'],
                        ['name' => 'C++', 'level' => 85, 'desc' => 'OOP, DS & Algorithms, CP', 'status' => 'HIGH-PERF'],
                        ['name' => 'C', 'level' => 85, 'desc' => 'Hardware interface, low-level', 'status' => 'STABLE'],
                        ['name' => 'Java', 'level' => 80, 'desc' => 'Core concepts, application dev', 'status' => 'STABLE'],
                        ['name' => 'HTML & CSS', 'level' => 90, 'desc' => 'Modern layouts, UI engineering', 'status' => 'OPTIMIZED'],
                    ]
                ],
                [
                    'id' => 'data_science',
                    'title' => 'AI & Data Science',
                    'subtitle' => 'Intelligence & Processing',
                    'badge' => 'Cortex Core',
                    'color' => 'indigo',
                    'accent' => '#6366f1',
                    'bgGlow' => 'hover:shadow-[0_0_50px_rgba(99,102,241,0.15)]',
                    'skills' => [
                        ['name' => 'Machine Learning', 'level' => 90, 'desc' => 'Predictive modeling, regression', 'status' => 'OPTIMIZED'],
                        ['name' => 'Deep Learning', 'level' => 85, 'desc' => 'Neural Nets, CNNs, model design', 'status' => 'ACTIVE'],
                        ['name' => 'Data Science', 'level' => 88, 'desc' => 'Feature engineering, wrangling', 'status' => 'STABLE'],
                        ['name' => 'Data Analysis', 'level' => 92, 'desc' => 'Statistical analysis, insights', 'status' => 'OPTIMIZED'],
                    ]
                ],
                [
                    'id' => 'tools',
                    'title' => 'Systems & Tools',
                    'subtitle' => 'Pipelines & Operations',
                    'badge' => 'Control Deck',
                    'color' => 'purple',
                    'accent' => '#a855f7',
                    'bgGlow' => 'hover:shadow-[0_0_50px_rgba(168,85,247,0.15)]',
                    'skills' => [
                        ['name' => 'Competitive Programming', 'level' => 88, 'desc' => 'Rapid algorithm implementation', 'status' => 'ELITE'],
                        ['name' => 'IoT & ESP32', 'level' => 80, 'desc' => 'Embedded sensors, hardware integration', 'status' => 'ACTIVE'],
                        ['name' => 'Git & GitHub', 'level' => 90, 'desc' => 'Version control, devops workflows', 'status' => 'STABLE'],
                        ['name' => 'Web Development', 'level' => 85, 'desc' => 'Laravel, blade, frontend engines', 'status' => 'STABLE'],
                    ]
                ]
            ];
        ?>

        <div class="space-y-20">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="relative group">
                    <!-- Glass Container Panel -->
                    <div class="relative glass-card rounded-3xl p-8 lg:p-12 border border-slate-800/80 bg-slate-950/40 backdrop-blur-md transition-all duration-500 overflow-hidden <?php echo e($cat['bgGlow']); ?>">
                        
                        <!-- High tech HUD Corner Highlights -->
                        <div class="absolute top-0 left-0 w-8 h-8 border-t-2 border-l-2 border-slate-700/60 rounded-tl-3xl"></div>
                        <div class="absolute top-0 right-0 w-8 h-8 border-t-2 border-r-2 border-slate-700/60 rounded-tr-3xl"></div>
                        <div class="absolute bottom-0 left-0 w-8 h-8 border-b-2 border-l-2 border-slate-700/60 rounded-bl-3xl"></div>
                        <div class="absolute bottom-0 right-0 w-8 h-8 border-b-2 border-r-2 border-slate-700/60 rounded-br-3xl"></div>

                        <!-- Side Status Strip -->
                        <div class="absolute top-0 right-10 px-4 py-1.5 bg-slate-900 border-x border-b border-slate-800/60 rounded-b-xl flex items-center gap-2">
                            <span class="relative flex h-2 w-2">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full opacity-75" style="background-color: <?php echo e($cat['accent']); ?>"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2" style="background-color: <?php echo e($cat['accent']); ?>"></span>
                            </span>
                            <span class="text-[10px] font-mono text-slate-500 tracking-wider uppercase"><?php echo e($cat['badge']); ?></span>
                        </div>

                        <!-- Top Title Info -->
                        <div class="mb-12 border-b border-slate-800/50 pb-6 flex flex-col md:flex-row justify-between items-start md:items-end gap-4">
                            <div>
                                <span class="text-xs font-mono tracking-widest uppercase" style="color: <?php echo e($cat['accent']); ?>"><?php echo e($cat['subtitle']); ?></span>
                                <h3 class="text-3xl font-extrabold text-white mt-1"><?php echo e($cat['title']); ?></h3>
                            </div>
                            <div class="text-slate-500 font-mono text-xs uppercase tracking-widest">
                                Diagnostics: Pass // Engine: Online
                            </div>
                        </div>

                        <!-- High Tech Circular Speedometers Grid -->
                        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                            <?php $__currentLoopData = $cat['skills']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="flex flex-col items-center justify-between p-6 bg-slate-900/30 border border-slate-800/60 rounded-2xl hover:border-slate-700/50 hover:bg-slate-900/50 transition-all duration-300 group/meter relative overflow-hidden">
                                    
                                    <!-- Inner HUD Grid -->
                                    <div class="absolute inset-0 bg-[radial-gradient(#1e293b_1px,transparent_1px)] [background-size:16px_16px] opacity-10 group-hover/meter:opacity-20 pointer-events-none"></div>

                                    <!-- Top Status -->
                                    <div class="text-[9px] font-mono text-slate-500 tracking-wider mb-4 border border-slate-800/50 rounded-full px-2.5 py-0.5 group-hover/meter:text-white transition-colors duration-300">
                                        <?php echo e($skill['status']); ?>

                                    </div>

                                    <!-- Circular Radial Gauge -->
                                    <div class="relative w-28 h-28 flex items-center justify-center mb-4">
                                        <!-- Soft Ambient Glow behind circle -->
                                        <div class="absolute inset-2 rounded-full opacity-0 group-hover/meter:opacity-10 transition-opacity duration-300" style="box-shadow: 0 0 30px <?php echo e($cat['accent']); ?>"></div>
                                        
                                        <svg class="w-full h-full transform -rotate-90">
                                            <!-- Track Circle -->
                                            <circle cx="56" cy="56" r="46" stroke="#1e293b" stroke-width="4px" fill="transparent" />
                                            <!-- Value Circle -->
                                            <circle cx="56" cy="56" r="46" stroke="<?php echo e($cat['accent']); ?>" stroke-dasharray="289" stroke-dashoffset="<?php echo e(289 - (289 * $skill['level']) / 100); ?>" stroke-width="5px" fill="transparent" class="transition-[stroke-dashoffset] duration-1000 ease-out" />
                                        </svg>
                                        <!-- Center Text -->
                                        <div class="absolute flex flex-col items-center justify-center">
                                            <span class="text-2xl font-black text-white font-mono leading-none"><?php echo e($skill['level']); ?></span>
                                            <span class="text-[9px] font-mono text-slate-500 mt-0.5">%</span>
                                        </div>
                                    </div>

                                    <!-- Label & Info -->
                                    <div class="text-center w-full mt-2">
                                        <h4 class="text-base font-bold text-white group-hover/meter:scale-105 transition-transform duration-300"><?php echo e($skill['name']); ?></h4>
                                        <p class="text-[11px] text-slate-500 mt-1.5 leading-relaxed font-sans line-clamp-2"><?php echo e($skill['desc']); ?></p>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/zabir/my-app/resources/views/skills.blade.php ENDPATH**/ ?>