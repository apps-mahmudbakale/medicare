<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<!-- Doctor Registration Split Page -->
<div class="min-h-screen grid grid-cols-1 md:grid-cols-2 bg-gray-50 dark:bg-gray-900">

    <!-- Left Side (Cover Image) -->
    <div class="hidden md:flex items-center justify-center bg-blue-600">
        <img src="https://images.unsplash.com/photo-1611095790444-1dfa35e37b52?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1742"
             alt="Patient Illustration" class="object-cover w-full h-full opacity-90">
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
            <h2 class="text-2xl font-bold text-center text-gray-800 dark:text-white mb-6">Patient Registration</h2>

            <form action="/register-patient" method="POST" class="space-y-6">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Column 1 -->
                    <div class="space-y-4">
                        <div>
                            <label class="block text-gray-700 dark:text-gray-300 mb-1">Full Name</label>
                            <input type="text" name="full_name" required
                                   class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600">
                        </div>

                        <div>
                            <label class="block text-gray-700 dark:text-gray-300 mb-1">Email Address</label>
                            <input type="email" name="email" required
                                   class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600">
                        </div>

                        <div>
                            <label class="block text-gray-700 dark:text-gray-300 mb-1">Phone Number</label>
                            <input type="tel" name="phone" required
                                   class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600">
                        </div>

                        <div>
                            <label class="block text-gray-700 dark:text-gray-300 mb-1">Date of Birth</label>
                            <input type="date" name="dob" required
                                   class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600">
                        </div>
                    </div>

                    <!-- Column 2 -->
                    <div class="space-y-4">
                        <div>
                            <label class="block text-gray-700 dark:text-gray-300 mb-1">Gender</label>
                            <select name="gender" required
                                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600">
                                <option value="">Select gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-gray-700 dark:text-gray-300 mb-1">Address</label>
                            <input name="address" required
                                      class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600">
                        </div>

                        <div>
                            <label class="block text-gray-700 dark:text-gray-300 mb-1">Emergency Contact Name</label>
                            <input type="text" name="emergency_contact_name"
                                   class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600">
                        </div>

                        <div>
                            <label class="block text-gray-700 dark:text-gray-300 mb-1">Emergency Contact Phone</label>
                            <input type="tel" name="emergency_contact_phone"
                                   class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600">
                        </div>
                    </div>
                </div>

                <!-- Password Section -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-2">
                    <div>
                        <label class="block text-gray-700 dark:text-gray-300 mb-1">Password</label>
                        <input type="password" name="password" required
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600">
                    </div>
                    <div>
                        <label class="block text-gray-700 dark:text-gray-300 mb-1">Confirm Password</label>
                        <input type="password" name="password_confirmation" required
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600">
                    </div>
                </div>

                <div class="pt-2">
                    <button type="submit"
                            class="w-full bg-purple-600 hover:bg-purple-700 text-white py-3 rounded-lg transition font-medium">
                        Create Patient Account
                    </button>
                </div>
            </form>

            <p class="text-center text-gray-500 dark:text-gray-400 mt-4">
                Already registered? <a href="/login" class="text-purple-600 hover:underline">Login</a>
            </p>
            <p class="text-center text-gray-400 mt-2">
                <a href="/register" class="hover:text-blue-600 underline">← Back to Category Selection</a>
            </p>
        </div>
    </div>
</div>
