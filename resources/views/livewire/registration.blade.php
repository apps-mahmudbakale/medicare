<!-- Page Container -->
<div class="min-h-screen bg-gray-50 dark:bg-gray-900 flex flex-col items-center justify-center py-10">

    <!-- Logo -->
    <div class="mb-10" data-aos="fade-down">
        <img src="{{asset('logo.png')}}" alt="Medicare Logo" class="h-40 w-auto mx-auto">
    </div>

    <!-- Title -->
    <h2 class="text-3xl font-bold text-center text-gray-800 dark:text-white mb-8">
        Choose Your Category
    </h2>

    <!-- Cards Section -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 w-full max-w-6xl px-4">

        <!-- Doctor Card -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 text-center hover:shadow-2xl transition" data-aos="fade-up" data-aos-delay="100">
            <img src="{{asset('doctor.svg')}}" alt="Doctor Icon" class="h-16 w-auto mx-auto mb-4">
            <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">Doctor</h3>
            <p class="text-gray-500 dark:text-gray-400 mb-6">
                Join as a verified medical practitioner and manage patient records efficiently.
            </p>
            <a href="{{ route('register.doctor.form') }}"
               class="block w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-lg transition text-center">
                Sign Up as Doctor
            </a>
        </div>

        <!-- Hospital / Institution Card -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 text-center hover:shadow-2xl transition" data-aos="fade-up" data-aos-delay="200">
            <img src="{{asset('hospital.svg')}}" alt="Hospital Icon" class="h-16 w-auto mx-auto mb-4">
            <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">Hospital / Healthcare Institution</h3>
            <p class="text-gray-500 dark:text-gray-400 mb-6">
                Register your facility to manage staff, patients, and digital health services.
            </p>
            <a href="{{ route('register.hospital.form') }}"
               class="block w-full bg-green-600 hover:bg-green-700 text-white font-medium py-3 px-6 rounded-lg transition text-center">
                Register Institution
            </a>
        </div>

        <!-- Patient Card -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 text-center hover:shadow-2xl transition" data-aos="fade-up" data-aos-delay="300">
            <img src="{{asset('patient.svg')}}" alt="Patient Icon" class="h-16 w-auto mx-auto mb-4">
            <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">Patient</h3>
            <p class="text-gray-500 dark:text-gray-400 mb-6">
                Create your personal account to access healthcare services and medical records.
            </p>
            <a href="{{ route('register.patient.form') }}"
               class="block w-full bg-purple-600 hover:bg-purple-700 text-white font-medium py-3 px-6 rounded-lg transition text-center">
                Sign Up as Patient
            </a>
        </div>

    </div>
</div>
