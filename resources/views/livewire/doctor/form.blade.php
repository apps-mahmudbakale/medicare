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

            <form action="{{route('register.doctor')}}" method="POST" class="grid grid-cols-1 gap-4" enctype="multipart/form-data">
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
                        <input type="number" name="experience_years" min="0"
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

                <div>
                    <label class="block text-gray-700 dark:text-gray-300 mb-1">Profile Picture</label>
                    <div class="mt-1 flex items-center">
                        <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100 dark:bg-gray-700">
                            <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </span>
                        <label class="ml-5">
                            <span class="px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 cursor-pointer">
                                Change
                                <input type="file" name="profile_picture" class="sr-only" accept="image/*">
                            </span>
                        </label>
                    </div>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">JPG, PNG, or GIF (max. 2MB)</p>
                </div>

                <div>
                    <label class="block text-gray-700 dark:text-gray-300 mb-2">Clinical Days</label>
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-2">
                        @php
                            $days = [
                                'monday' => 'Monday',
                                'tuesday' => 'Tuesday',
                                'wednesday' => 'Wednesday',
                                'thursday' => 'Thursday',
                                'friday' => 'Friday',
                                'saturday' => 'Saturday',
                                'sunday' => 'Sunday'
                            ];
                        @endphp
                        @foreach($days as $key => $day)
                            <label class="flex items-center">
                                <input type="checkbox" name="clinical_days[]" value="{{ $key }}"
                                       class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                <span class="ml-2 text-gray-700 dark:text-gray-300">{{ $day }}</span>
                            </label>
                        @endforeach
                    </div>
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
