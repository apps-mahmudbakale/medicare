<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<!-- Doctor Registration Split Page -->
<div class="min-h-screen grid grid-cols-1 md:grid-cols-2 bg-gray-50 dark:bg-gray-900">

    <!-- Left Side (Cover Image) -->
    <div class="hidden md:flex items-center justify-center bg-blue-600">
        <img src="https://images.unsplash.com/photo-1586773860418-d37222d8fce3?auto=format&fit=crop&w=1200&q=80"
             alt="Doctor Illustration" class="object-cover w-full h-full opacity-90">
    </div>

    <!-- Right Side (Form Section) -->
    <div class="flex flex-col items-center justify-center px-6 py-10">
        <!-- Logo -->
        <div class="mb-6">
            <a href="/">
                <img src="{{asset('logo.png')}}" alt="Logo" class="h-40 w-auto mx-auto">
            </a>
        </div>

        <div class="" data-aos="fade-up">
            <div class="text-center mb-8">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-800 dark:text-white mb-2">Healthcare Institution Registration</h1>
                <p class="text-gray-600 dark:text-gray-300">Register your facility to manage staff, patients, and digital health services.</p>
            </div>
            <form action="{{route('register.hospital')}}" method="POST" class="space-y-6">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Column 1 -->
                    <div class="space-y-4">
                        <div>
                            <label class="block text-gray-700 dark:text-gray-300 mb-1">Facility / Institution Name</label>
                            <input type="text" name="facility_name" required
                                   class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
                        </div>

                        <div>
                            <label class="block text-gray-700 dark:text-gray-300 mb-1">Email Address</label>
                            <input type="email" name="email" required
                                   class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
                        </div>

                        <div>
                            <label class="block text-gray-700 dark:text-gray-300 mb-1">Phone Number</label>
                            <input type="tel" name="phone" required
                                   class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
                        </div>

                        <div>
                            <label class="block text-gray-700 dark:text-gray-300 mb-1">Institution Registration / License Number</label>
                            <input type="text" name="registration_number" required
                                   class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
                        </div>
                    </div>

                    <!-- Column 2 -->
                    <div class="space-y-4">
                        <div>
                            <label class="block text-gray-700 dark:text-gray-300 mb-1">Type of Institution</label>
                            <select name="institution_type" required
                                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
                                <option value="">Select type</option>
                                <option value="hospital">Hospital</option>
                                <option value="clinic">Clinic</option>
                                <option value="laboratory">Laboratory</option>
                                <option value="diagnostic_center">Diagnostic Center</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-gray-700 dark:text-gray-300 mb-1">Number of Beds / Capacity</label>
                            <input type="number" name="capacity" min="0"
                                   class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
                        </div>

                        <div>
                            <label class="block text-gray-700 dark:text-gray-300 mb-1">Address</label>
                            <input name="address" required
                                   class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
                        </div>

                        <div>
                            <label class="block text-gray-700 dark:text-gray-300 mb-1">Administrator / Contact Person</label>
                            <input type="text" name="contact_person" required
                                   class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
                        </div>
                    </div>
                </div>

                <!-- Full width password fields -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-gray-700 dark:text-gray-300 mb-1">Password</label>
                        <input type="password" name="password" required
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
                    </div>
                    <div>
                        <label class="block text-gray-700 dark:text-gray-300 mb-1">Confirm Password</label>
                        <input type="password" name="password_confirmation" required
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
                    </div>
                </div>

                <div class="pt-4">
                    <button type="submit"
                            class="w-full bg-green-600 hover:bg-green-700 text-white py-3 rounded-lg transition font-medium">
                        Create Institution Account
                    </button>
                </div>
            </form>

            <p class="text-center text-gray-500 dark:text-gray-400 mt-4">
                Already have an account? <a href="/login" class="text-green-600 hover:underline">Login</a>
            </p>
            <p class="text-center text-gray-400 mt-2">
                <a href="/register" class="hover:text-blue-600 underline">← Back to Category Selection</a>
            </p>
        </div>
    </div>
</div>
