@php
    $user = [
        'name' => 'Dadda Hicham',
        'username' => 'daddasoft',
        'avatar_url' => 'https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8YXZhdGFyfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60',
        'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ];

    $experiences = [
        [
            'title' => 'Senior UI/UX Designer',
            'company' => 'Acme Inc.',
            'duration' => 'Jan 2020 - Present',
            'description' => 'Leading the design team and creating beautiful user experiences.'
        ],
        [
            'title' => 'Frontend Developer',
            'company' => 'Tech Solutions',
            'duration' => 'Mar 2018 - Dec 2019',
            'description' => 'Developed responsive web applications using modern JavaScript frameworks.'
        ]
    ];

    $skills = ['Developer', 'Design', 'Management', 'Projects'];
    $skillColors = [
        'bg-blue-100 text-blue-800',
        'bg-green-100 text-green-800',
        'bg-yellow-100 text-yellow-800',
        'bg-purple-100 text-purple-800'
    ];
@endphp
<script src="https://cdn.tailwindcss.com"></script>
<x-filament-panels::page>
    <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <!-- Header with gradient background -->
        <div class="h-32 bg-gradient-to-r from-blue-500 to-blue-700 w-full"></div>

        <div class="px-6 py-4">
            <!-- Profile Picture and Basic Info -->
            <div class="flex flex-col items-center -mt-20">
                <div class="relative">
                    <div class="h-32 w-32 rounded-full border-4 border-white shadow-lg overflow-hidden">
                        <img
                            src="{{ $user['avatar_url'] }}"
                            alt="{{ $user['name'] }}'s profile picture"
                            class="h-full w-full object-cover"
                            loading="lazy"
                        >
                    </div>
                </div>

                <div class="mt-4 text-center">
                    <h2 class="text-2xl font-bold text-gray-900">{{ $user['name'] }}</h2>
                    <p class="text-gray-600">{{ '@' . $user['username'] }}</p>
                </div>

                <!-- Skills -->
                <div class="flex flex-wrap justify-center gap-2 mt-3">
                    @foreach($skills as $index => $skill)
                        <span class="px-3 py-1 text-xs font-semibold rounded-full {{ $skillColors[$index % count($skillColors)] }}">
                            {{ $skill }}
                        </span>
                    @endforeach
                </div>

                <!-- Action Buttons -->
                <div class="flex gap-3 mt-4">
                    <button type="button" class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Send Message
                    </button>
                    <button type="button" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Add to projects
                    </button>
                </div>
            </div>

            <!-- About Section -->
            <div class="mt-6 border-t border-gray-200 pt-6">
                <h3 class="text-lg font-medium text-gray-900 mb-2">About</h3>
                <p class="text-gray-600">
                    {{ $user['bio'] }}
                </p>
            </div>

            <!-- Experience Section -->
            <div class="mt-8">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Experience</h3>

                <div class="space-y-4">
                    @foreach($experiences as $experience)
                        <div class="flex items-start gap-4 p-4 rounded-lg border border-gray-200 hover:bg-gray-50 transition-colors">
                            <div class="flex-shrink-0 mt-1">
                                <svg class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M12 18h.01" />
                                </svg>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h4 class="text-base font-medium text-gray-900">{{ $experience['title'] }}</h4>
                                <p class="text-sm text-gray-600">{{ $experience['company'] }}</p>
                                <p class="text-sm text-gray-500 mt-1">{{ $experience['duration'] }}</p>
                                @if(!empty($experience['description']))
                                    <p class="mt-2 text-sm text-gray-600">{{ $experience['description'] }}</p>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-filament-panels::page>
