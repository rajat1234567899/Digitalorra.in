<html lang="en">

<head>
    <title>Our Courses</title>
</head>

<?php echo $__env->make('header.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- header end -->
 <div class="contaier-fluid">
    <div class="st-column">
        <h1>
            Digital ORRA
        </h1>
        <h2>
             Welcome To Our Digital Marketing Academy
        </h2>
        <p>
            To meet individual needs, we train them as per industry requirements and 
            deliver the best possible results.
            Digital ORRA Academy has trained 500+ students for Digital Marketing Certification with 
            proven global standards.
        </p>
    </div> 
    <div class="nd-column">
        <img src="<?php echo e(asset('images/courseimg.png')); ?>" alt="">
    </div>
 </div>
<!-- header end -->
<div class="contaier-fluid-2nd">
    <div class="contaier-internal">
        <div class="column">
            <h2>
                Scholarship Facility
            </h2>
            <p>
                To meet individual needs, we train them as per industry requirements and deliver the best possible results. 
            </p>
        </div>
        <div class="column">
            <h2>
                Skilled Lecturers
 
            </h2>
            <p>
                Digital ORRA has a rich tradition of qualified, 
                committed, and experienced faculty who work 
                for the welfare and excellence of the academy
            </p>
        </div>
        <div class="column">
            <h2>
                Practical Training
             </h2>
            <p>
                Digital      has provided one-to-one practical training which 
                will help the students to learn effectively.
            </p>
        </div> 
    </div> 
 </div>
 <!-- bg-[#061F54] -->
 <section class="py-16 px-6 text-white">  
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-4xl font-bold text-[#CC036D] mb-10">Featured Courses</h2>
            <div class="grid md:grid-cols-3 sm:grid-cols-2 gap-8">
                <!-- Course 1 -->
                <?php
            $course = \App\Models\Course::find(1);
            ?>
            <?php if($course): ?>
                <div class="bg-white text-[#061F54] p-6 rounded-2xl course-card">
                    <h3 class="text-2xl font-semibold"><?php echo e($course->name); ?></h3>
                    <p class="mt-2"><?php echo e($course->description); ?></p>
                    <button class="mt-4 px-4 py-2 bg-[#CC036D] text-white rounded-full">Explore</button>
                </div>
                <?php endif; ?>
                <!-- Course 2 -->
                <?php
            $course = \App\Models\Course::find(2);
            ?>
            <?php if($course): ?>
                <div class="bg-white text-[#061F54] p-6 rounded-2xl course-card">
                    <h3 class="text-2xl font-semibold"><?php echo e($course->name); ?></h3>
                    <p class="mt-2"><?php echo e($course->description); ?></p>
                    <button class="mt-4 px-4 py-2 bg-[#CC036D] text-white rounded-full">Explore</button>
                </div>
                <?php endif; ?>
                <!-- Course 3 -->
                <?php
            $course = \App\Models\Course::find(3);
            ?>
            <?php if($course): ?>
                <div class="bg-white text-[#061F54] p-6 rounded-2xl course-card">
                    <h3 class="text-2xl font-semibold"><?php echo e($course->name); ?></h3>
                    <p class="mt-2"><?php echo e($course->description); ?></p>
                    <button class="mt-4 px-4 py-2 bg-[#CC036D] text-white rounded-full">Explore</button>
                </div>
                <?php endif; ?>
                <!-- Course 4 -->
                <?php
            $course = \App\Models\Course::find(4);
            ?>
            <?php if($course): ?>
                <div class="bg-white text-[#061F54] p-6 rounded-2xl course-card">
                    <h3 class="text-2xl font-semibold"><?php echo e($course->name); ?></h3>
                    <p class="mt-2"><?php echo e($course->description); ?></p>
                    <button class="mt-4 px-4 py-2 bg-[#CC036D] text-white rounded-full">Explore</button>
                </div>
                <?php endif; ?>
                <!-- Course 5 -->
                <?php
            $course = \App\Models\Course::find(5);
            ?>
            <?php if($course): ?>
                <div class="bg-white text-[#061F54] p-6 rounded-2xl course-card">
                    <h3 class="text-2xl font-semibold"><?php echo e($course->name); ?></h3>
                    <p class="mt-2"><?php echo e($course->description); ?></p>
                    <button class="mt-4 px-4 py-2 bg-[#CC036D] text-white rounded-full">Explore</button>
                </div>
                <?php endif; ?>
                <!-- Course 6 -->
                <?php
            $course = \App\Models\Course::find(6);
            ?>
            <?php if($course): ?>
                <div class="bg-white text-[#061F54] p-6 rounded-2xl course-card">
                    <h3 class="text-2xl font-semibold"><?php echo e($course->name); ?></h3>
                    <p class="mt-2"><?php echo e($course->description); ?></p>
                    <button class="mt-4 px-4 py-2 bg-[#CC036D] text-white rounded-full">Explore</button>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- learn -->
    <div class="contaier-fluid-learn bg-[#061F54]">
    <div class="contaier-learn">
        <div class="column">
            <h2>
                Build new skills with top educators
            </h2>
            <p>
                The automated process all your website tasks. 
                Discover tools and techniques to engage effectively 
                with vulnerable children and young people.
            </p>
            <ul>
                <li>
                    Active Listening – Show genuine interest in their thoughts and feelings.
                </li>
                <li>
                    Empathy & Understanding – Build trust by being compassionate and non-judgmental.
                </li>
                <li>
                    Safe & Supportive Environment – Create a space where they feel secure to express themselves
                </li>
                <li>
                    Interactive Communication – Use storytelling, art, and play to encourage expression.                
                </li>
                <li>
                    Consistency & Reliability – Be a stable and dependable presence in their lives.                
                </li>
            </ul>
        </div>
        <div class="column">
        <video autoplay="" muted="" loop="">
  <source src="<?php echo e(asset('videos/digitalorra.mp4')); ?>" type="video/mp4">
  Your browser does not support the video tag.
</video>
        </div>
         
    </div> 
 </div>
 <?php echo $__env->make('frontend.aboutussection', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <?php echo $__env->make('header.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newdigitalorra\resources\views/courses.blade.php ENDPATH**/ ?>