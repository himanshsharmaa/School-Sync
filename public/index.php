<?php include 'header.php'; ?>

<!-- Main Content -->
<main class="container mx-auto mt-10 p-4">
    <!-- Hero Section -->
    <section class="relative h-screen bg-cover bg-center" style="background-image: url('images/hero-bg.jpg');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white">
            <h2 class="text-5xl font-bold mb-4 animate__animated animate__fadeInDown">Welcome to School Sync</h2>
            <p class="text-xl mb-8 animate__animated animate__fadeInUp">A comprehensive student management system designed for educational institutions.</p>
            <a href="#" class="bg-blue-600 text-white px-6 py-3 rounded-full shadow-md hover:bg-blue-700 transition duration-300 animate__animated animate__fadeInUp">Get Started</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-gray-900 text-white">
        <div class="container mx-auto text-center">
            <h3 class="text-4xl font-bold mb-12">Features</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <h4 class="text-2xl font-bold mb-2">Secure Authentication</h4>
                    <p>Role-based login for students, teachers, and admins.</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <h4 class="text-2xl font-bold mb-2">Student Records Management</h4>
                    <p>Store and manage student details including roll number, name, course enrolled, date of admission, and date of passing.</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <h4 class="text-2xl font-bold mb-2">Teacher Dashboard</h4>
                    <p>Teachers can view and manage student records.</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <h4 class="text-2xl font-bold mb-2">Admin Dashboard</h4>
                    <p>Administrators have full control over the system, including user management and site settings.</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <h4 class="text-2xl font-bold mb-2">Interactive UI</h4>
                    <p>Modern, responsive design using HTML, Tailwind CSS, and JavaScript.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Parallax Section -->
    <section class="relative h-screen bg-fixed bg-cover bg-center" style="background-image: url('images/parallax-bg.jpg');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white">
            <h2 class="text-5xl font-bold mb-4 animate__animated animate__fadeInDown">Empowering Education</h2>
            <p class="text-xl mb-8 animate__animated animate__fadeInUp">Innovative solutions for modern educational institutions.</p>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-20 bg-blue-600 text-white">
        <div class="container mx-auto text-center">
            <h3 class="text-4xl font-bold mb-4">Ready to Get Started?</h3>
            <p class="text-xl mb-8">Join us today and transform your educational experience.</p>
            <a href="#" class="bg-white text-blue-600 px-6 py-3 rounded-full shadow-md hover:bg-gray-200 transition duration-300">Sign Up Now</a>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>