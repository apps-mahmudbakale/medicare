<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<!-- Doctor Registration Split Page -->
<div class="min-h-screen grid grid-cols-1 md:grid-cols-2 bg-gray-50 dark:bg-gray-900">

    <!-- Left Side (Cover Image) -->
    <div class="hidden md:flex items-center justify-center bg-blue-600">
        <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1740"
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

        <div class="">
            <div class="text-center mb-8">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-800 dark:text-white mb-2">Doctor Registration</h1>
                <p class="text-gray-600 dark:text-gray-300">Register as a doctor to manage your profile and schedule appointments.</p>
            </div>

            <form action="{{route('register.doctor')}}" method="POST" class="grid grid-cols-1 gap-4">
                @csrf

                <div>
                    <label class="block text-gray-700 dark:text-gray-300 mb-1">Full Name</label>
                    <input type="text" name="full_name" required
                           class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700 dark:text-gray-300 mb-1">Email</label>
                        <input type="email" name="email" required
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                    </div>
                    <div>
                        <label class="block text-gray-700 dark:text-gray-300 mb-1">Phone</label>
                        <input type="tel" name="phone" required
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700 dark:text-gray-300 mb-1">License Number</label>
                        <input type="text" name="license_number" required
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                    </div>
                    <div>
                        <label class="block text-gray-700 dark:text-gray-300 mb-1">Specialization</label>
                        <input type="text" name="specialization"
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700 dark:text-gray-300 mb-1">Experience (Years)</label>
                        <input type="number" name="experience" min="0"
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                    </div>
                    <div>
                        <label class="block text-gray-700 dark:text-gray-300 mb-1">Clinic / Hospital</label>
                        <input type="text" name="affiliation"
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                    </div>
                </div>

                <div>
                    <label class="block text-gray-700 dark:text-gray-300 mb-1">Address</label>
                    <input type="text" name="address" required
                           class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700 dark:text-gray-300 mb-1">Password</label>
                        <input type="password" name="password" required
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                    </div>
                    <div>
                        <label class="block text-gray-700 dark:text-gray-300 mb-1">Confirm Password</label>
                        <input type="password" name="password_confirmation" required
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                    </div>
                </div>

                <button type="submit"
                        class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 rounded-lg transition">
                    Create Account
                </button>
            </form>

            <p class="text-center text-gray-500 dark:text-gray-400 mt-4">
                Already registered? <a href="/login" class="text-blue-600 hover:underline">Login</a>
            </p>
            <p class="text-center text-gray-400 mt-2">
                <a href="/register" class="hover:text-blue-600 underline">← Back to Category Selection</a>
            </p>
        </div>
    </div>
</div>
