@props(['doctorant'])

@if(isset($doctorant))
<div class="fixed right-0 top-0 h-full flex z-40">
    <!-- Mobile-friendly toggle button -->
    <button id="toggleSidebar"
        class="fixed right-0 top-1/2 transform -translate-y-1/2 z-50 bg-indigo-600 dark:bg-indigo-700 text-white p-2 rounded-l-lg shadow-lg hover:bg-indigo-700 dark:hover:bg-indigo-800 transition-all duration-300 group md:p-3">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform group-hover:rotate-180 transition-transform md:h-6 md:w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
        <span class="sr-only">Toggle Documents</span>
    </button>

    <!-- Responsive sidebar with dark mode -->
    <aside id="sidebar"
           class="w-full sm:w-80 md:w-96 bg-white/95 dark:bg-gray-800/95 backdrop-blur-lg shadow-xl transform translate-x-full transition-transform duration-300 ease-in-out overflow-y-auto flex flex-col border-l border-gray-200/50 dark:border-gray-700">
        <div class="p-4 md:p-5 flex-1">
            <!-- Header with close button -->
            <div class="flex items-center justify-between mb-4 md:mb-6">
                <h2 class="text-lg font-bold text-gray-800 dark:text-gray-100 md:text-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline mr-2 text-indigo-500" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" clip-rule="evenodd" />
                    </svg>
                    {{ __('Documents & Procedures') }}
                </h2>
                <button id="closeSidebar" class="p-1 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 dark:text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Documents Section -->
            <div class="space-y-2 mb-4 md:space-y-3 md:mb-6">
                <h3 class="text-md font-semibold text-gray-700 dark:text-gray-300 mb-1 flex items-center gap-2 md:text-lg md:mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    <span>{{ __('Official Documents') }}</span>
                </h3>

                <!-- Document Cards with dark mode -->
                <a href="{{ route('doctorants.registration-certificate', ['id' => $doctorant->id]) }}"
                   class="flex items-center gap-2 p-2 bg-gradient-to-r from-indigo-50 to-blue-50 hover:from-indigo-100 hover:to-blue-100 dark:from-indigo-900/30 dark:to-blue-900/30 dark:hover:from-indigo-900/50 dark:hover:to-blue-900/50 rounded-lg text-indigo-800 dark:text-indigo-200 transition-all duration-200 shadow-sm hover:shadow-md border border-indigo-100 dark:border-indigo-800/50 md:gap-3 md:p-3 md:rounded-xl">
                    <div class="p-1 bg-indigo-100 dark:bg-indigo-800/50 rounded-md md:p-2 md:rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-indigo-600 dark:text-indigo-300 md:h-5 md:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <span class="text-sm font-medium md:text-base">{{ __('Registration Certificate') }}</span>
                </a>

                <a href="{{ route('doctorants.Success-Certificate', ['id' => $doctorant->id]) }}"
                   class="flex items-center gap-2 p-2 bg-gradient-to-r from-green-50 to-teal-50 hover:from-green-100 hover:to-teal-100 dark:from-green-900/30 dark:to-teal-900/30 dark:hover:from-green-900/50 dark:hover:to-teal-900/50 rounded-lg text-green-800 dark:text-green-200 transition-all duration-200 shadow-sm hover:shadow-md border border-green-100 dark:border-green-800/50 md:gap-3 md:p-3 md:rounded-xl">
                    <div class="p-1 bg-green-100 dark:bg-green-800/50 rounded-md md:p-2 md:rounded-lg">
                       <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-indigo-600 dark:text-indigo-300 md:h-5 md:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <span class="text-sm font-medium md:text-base">{{ __('Success Certificate') }}</span>
                </a>

                <button onclick="openWordExportModal()"
                   class="w-full flex items-center gap-2 p-2 bg-gradient-to-r from-red-50 to-pink-50 hover:from-red-100 hover:to-pink-100 dark:from-red-900/30 dark:to-pink-900/30 dark:hover:from-red-900/50 dark:hover:to-pink-900/50 rounded-lg text-red-800 dark:text-red-200 transition-all duration-200 shadow-sm hover:shadow-md border border-red-100 dark:border-red-800/50 ripple md:gap-3 md:p-3 md:rounded-xl">
                    <div class="p-1 bg-red-100 dark:bg-red-800/50 rounded-md md:p-2 md:rounded-lg">
                     <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-indigo-600 dark:text-indigo-300 md:h-5 md:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <span class="text-sm font-medium md:text-base">{{ __('Defense Announcement') }}</span>
                </button>

                <a href="{{ route('doctorants.generate', ['doctorant' => $doctorant->id, 'type' => 'rapport']) }}"
                   class="flex items-center gap-2 p-2 bg-gradient-to-r from-amber-50 to-yellow-50 hover:from-amber-100 hover:to-yellow-100 dark:from-amber-900/30 dark:to-yellow-900/30 dark:hover:from-amber-900/50 dark:hover:to-yellow-900/50 rounded-lg text-amber-800 dark:text-amber-200 transition-all duration-200 shadow-sm hover:shadow-md border border-amber-100 dark:border-amber-800/50 md:gap-3 md:p-3 md:rounded-xl">
                    <div class="p-1 bg-amber-100 dark:bg-amber-800/50 rounded-md md:p-2 md:rounded-lg">
                       <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-indigo-600 dark:text-indigo-300 md:h-5 md:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <span class="text-sm font-medium md:text-base">{{ __('Defense Report') }}</span>
                </a>
                  <a href="{{ route('doctorants.generate', ['doctorant' => $doctorant->id, 'type' => 'rapport']) }}"
                   class="flex items-center gap-2 p-2 bg-gradient-to-r from-amber-50 to-yellow-50 hover:from-amber-100 hover:to-yellow-100 dark:from-amber-900/30 dark:to-yellow-900/30 dark:hover:from-amber-900/50 dark:hover:to-yellow-900/50 rounded-lg text-amber-800 dark:text-amber-200 transition-all duration-200 shadow-sm hover:shadow-md border border-amber-100 dark:border-amber-800/50 md:gap-3 md:p-3 md:rounded-xl">
                    <div class="p-1 bg-amber-100 dark:bg-amber-800/50 rounded-md md:p-2 md:rounded-lg">
                       <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-indigo-600 dark:text-indigo-300 md:h-5 md:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <span class="text-sm font-medium md:text-base">{{ __('Defense Report') }}</span>
                </a>
                  <a href="{{ route('doctorants.generate', ['doctorant' => $doctorant->id, 'type' => 'rapport']) }}"
                   class="flex items-center gap-2 p-2 bg-gradient-to-r from-amber-50 to-yellow-50 hover:from-amber-100 hover:to-yellow-100 dark:from-amber-900/30 dark:to-yellow-900/30 dark:hover:from-amber-900/50 dark:hover:to-yellow-900/50 rounded-lg text-amber-800 dark:text-amber-200 transition-all duration-200 shadow-sm hover:shadow-md border border-amber-100 dark:border-amber-800/50 md:gap-3 md:p-3 md:rounded-xl">
                    <div class="p-1 bg-amber-100 dark:bg-amber-800/50 rounded-md md:p-2 md:rounded-lg">
                       <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-indigo-600 dark:text-indigo-300 md:h-5 md:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <span class="text-sm font-medium md:text-base">{{ __('Defense Report') }}</span>
                </a>
            </div>

            <!-- Invitation Section -->
            <div class="space-y-2 mb-4 md:space-y-3 md:mb-6">
                <a href="{{ route('doctorants.generate', ['doctorant' => $doctorant->id, 'type' => 'invitation']) }}"
                   class="flex items-center gap-2 p-2 bg-gradient-to-r from-purple-50 to-violet-50 hover:from-purple-100 hover:to-violet-100 dark:from-purple-900/30 dark:to-violet-900/30 dark:hover:from-purple-900/50 dark:hover:to-violet-900/50 rounded-lg text-purple-800 dark:text-purple-200 transition-all duration-200 shadow-sm hover:shadow-md border border-purple-100 dark:border-purple-800/50 md:gap-3 md:p-3 md:rounded-xl">
                    <div class="p-1 bg-purple-100 dark:bg-purple-800/50 rounded-md md:p-2 md:rounded-lg">
                       <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-indigo-600 dark:text-indigo-300 md:h-5 md:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <span class="text-sm font-medium md:text-base">{{ __('Defense Minutes') }}</span>
                </a>
            </div>
        </div>

        <!-- Bottom Navigation with dark mode -->
        <div class="bg-gray-50/80 dark:bg-gray-700/80 p-3 border-t dark:border-gray-600 flex justify-between backdrop-blur-sm md:p-4">
            <a href="{{ route('doctorants.show', $doctorant->id) }}"
               class="text-indigo-600 hover:text-indigo-800 dark:text-indigo-400 dark:hover:text-indigo-300 flex items-center gap-1 px-2 py-1 rounded-md hover:bg-indigo-50 dark:hover:bg-indigo-900/30 transition-colors text-sm md:gap-2 md:px-3 md:py-2 md:rounded-lg md:text-base">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 md:h-5 md:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                {{ __('Profile') }}
            </a>
            <a href="{{ route('doctorants.edit', $doctorant->id) }}"
               class="text-emerald-600 hover:text-emerald-800 dark:text-emerald-400 dark:hover:text-emerald-300 flex items-center gap-1 px-2 py-1 rounded-md hover:bg-emerald-50 dark:hover:bg-emerald-900/30 transition-colors text-sm md:gap-2 md:px-3 md:py-2 md:rounded-lg md:text-base">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 md:h-5 md:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
                {{ __('Edit') }}
            </a>
        </div>
    </aside>
</div>

<!-- Responsive Word Export Modal with dark mode -->
<div id="wordExportModal" class="hidden fixed inset-0 bg-gray-900/70 backdrop-blur-sm flex items-center justify-center z-50 p-2 sm:p-4">
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-xl w-full max-w-md overflow-hidden transform transition-all sm:rounded-xl">
        <!-- Modal Header -->
        <div class="flex justify-between items-center border-b dark:border-gray-700 p-4 bg-gradient-to-r from-indigo-600 to-blue-600 sm:p-5">
            <h3 class="text-lg font-semibold text-white sm:text-xl">{{ __('Defense Announcement') }}</h3>
            <button onclick="closeWordExportModal()" class="text-white/80 hover:text-white transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Modal Body -->
        <div class="p-4 sm:p-6">
            <form id="wordExportForm" action="{{ route('doctorant.annonce.generate') }}" method="POST">
                @csrf
                <input type="hidden" name="doctorant_id" value="{{ $doctorant->id }}">

                <!-- Language Selection Dropdown -->
                <div class="mb-4 sm:mb-5">
                    <label for="language" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1 sm:mb-2">{{ __('Language') }}</label>
                    <select id="language" name="language" required
                            class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-gray-200 transition-all sm:px-4 sm:py-2.5 sm:rounded-lg">
                        <option value="ar">{{ __('Arabic') }} (AR)</option>
                        <option value="fr">{{ __('French') }} (FR)</option>
                    </select>
                </div>

                <div class="mb-4 sm:mb-5">
                    <label for="exportDate" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1 sm:mb-2">{{ __('Defense Date') }}</label>
                    <input type="date" id="exportDate" name="date" required
                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-gray-200 transition-all sm:px-4 sm:py-2 sm:rounded-lg">
                </div>

                <div class="mb-4 sm:mb-5">
                    <label for="exportTime" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1 sm:mb-2">{{ __('Defense Time') }}</label>
                    <input type="time" id="exportTime" name="heure" required
                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-gray-200 transition-all sm:px-4 sm:py-2 sm:rounded-lg">
                </div>

                <div class="mb-4 sm:mb-5">
                    <label for="exportLocation" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1 sm:mb-2">{{ __('Defense Location') }}</label>
                    <input type="text" id="exportLocation" name="lieu" required
                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-gray-200 transition-all sm:px-4 sm:py-2 sm:rounded-lg"
                           placeholder="{{ __('Defense room') }}">
                </div>
            </form>
        </div>

        <!-- Modal Footer -->
        <div class="flex justify-end border-t dark:border-gray-700 p-3 bg-gray-50 dark:bg-gray-700 sm:p-4">
            <button onclick="closeWordExportModal()"
                class="px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-600 hover:bg-gray-100 dark:hover:bg-gray-500 rounded-md border border-gray-300 dark:border-gray-500 mr-2 transition-colors duration-200 shadow-sm sm:px-5 sm:py-2.5 sm:rounded-lg sm:mr-3">
                {{ __('Cancel') }}
            </button>
            <button onclick="submitWordExportForm()"
                class="px-4 py-2 text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 rounded-md shadow-sm transition-colors duration-200 flex items-center gap-1 ripple sm:px-5 sm:py-2.5 sm:rounded-lg sm:gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                </svg>
                {{ __('Download') }}
            </button>
        </div>
    </div>
</div>

<style>
    /* Ripple effect for buttons */
    .ripple {
        position: relative;
        overflow: hidden;
    }

    .ripple:after {
        content: "";
        display: block;
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        pointer-events: none;
        background-image: radial-gradient(circle, #fff 10%, transparent 10.01%);
        background-repeat: no-repeat;
        background-position: 50%;
        transform: scale(10, 10);
        opacity: 0;
        transition: transform .5s, opacity 1s;
    }

    .ripple:active:after {
        transform: scale(0, 0);
        opacity: .3;
        transition: 0s;
    }

    /* Smooth sidebar transitions */
    #sidebar {
        will-change: transform;
    }
</style>

<script>
    // Enhanced Sidebar functionality
    document.addEventListener('DOMContentLoaded', function() {
        const sidebar = document.getElementById('sidebar');
        const toggleButton = document.getElementById('toggleSidebar');
        const closeButton = document.getElementById('closeSidebar');

        // Toggle sidebar with animation
        function toggleSidebar() {
            sidebar.classList.toggle('translate-x-full');
            // Move toggle button with sidebar
            if (sidebar.classList.contains('translate-x-full')) {
                toggleButton.style.right = '0';
            } else {
                toggleButton.style.right = sidebar.offsetWidth + 'px';
            }
        }

        // Initialize button position
        toggleButton.style.right = '0';

        toggleButton.addEventListener('click', function(e) {
            e.stopPropagation();
            toggleSidebar();
        });

        closeButton.addEventListener('click', function() {
            sidebar.classList.add('translate-x-full');
            toggleButton.style.right = '0';
        });

        // Close sidebar when clicking outside
        document.addEventListener('click', function(event) {
            if (!sidebar.contains(event.target) && event.target !== toggleButton) {
                sidebar.classList.add('translate-x-full');
                toggleButton.style.right = '0';
            }
        });

        // Keyboard shortcut (Ctrl+Shift+X)
        document.addEventListener('keydown', function(event) {
            if (event.ctrlKey && event.shiftKey && event.key.toLowerCase() === 'x') {
                event.preventDefault();
                toggleSidebar();
            }
        });

        // Set default date to today in modal
        const today = new Date();
        const formattedDate = today.toISOString().substr(0, 10);
        document.getElementById('exportDate').value = formattedDate;

        // Set default time to 10:00
        document.getElementById('exportTime').value = '10:00';

        // Handle window resize
        window.addEventListener('resize', function() {
            if (!sidebar.classList.contains('translate-x-full')) {
                toggleButton.style.right = sidebar.offsetWidth + 'px';
            }
        });
    });

    // Word Export Modal functions
    function openWordExportModal() {
        document.getElementById('wordExportModal').classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    }

    function closeWordExportModal() {
        document.getElementById('wordExportModal').classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }

    function submitWordExportForm() {
        document.getElementById('wordExportForm').submit();
    }

    // Close modal when clicking outside
    window.addEventListener('click', function(event) {
        const modal = document.getElementById('wordExportModal');
        if (event.target === modal) {
            closeWordExportModal();
        }
    });
</script>
@else
<div class="p-3 bg-red-100/90 dark:bg-red-900/80 border border-red-200 dark:border-red-800 text-red-800 dark:text-red-200 rounded-lg backdrop-blur-sm shadow-sm sm:p-4">
    <div class="flex items-center gap-2 sm:gap-3">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500 dark:text-red-400 sm:h-6 sm:w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <p class="text-sm font-medium sm:text-base">{{ __('Error: Student data not loaded') }}</p>
    </div>
</div>
@endif
