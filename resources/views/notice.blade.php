<x-layout>
<section>
<div class="bg-gray-100 p-6 rounded-lg shadow-lg my-10">
    <h2 class="text-4xl font-bold text-gray-800 mb-8 text-center">Latest Notices</h2>

    <!-- Notices List -->
    <div class="space-y-6">
        <!-- Example Notice 1 -->
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
            <h3 class="text-2xl font-semibold text-blue-600 mb-2">Notice Title 1</h3>
            <p class="text-sm text-gray-500 mb-4">Published on: <span class="font-semibold">October 1, 2024</span></p>
            <p class="text-gray-600 mb-4">
                A brief summary of the notice goes here. This could be an important announcement or update for students and faculty members.
            </p>
            <a href="{{ route('notice', ['id' => 1]) }}" class="text-white bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg transition-colors duration-200">Read More</a>
        </div>

        <!-- Example Notice 2 -->
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
            <h3 class="text-2xl font-semibold text-blue-600 mb-2">Notice Title 2</h3>
            <p class="text-sm text-gray-500 mb-4">Published on: <span class="font-semibold">September 28, 2024</span></p>
            <p class="text-gray-600 mb-4">
                Another brief notice description. This could be about an upcoming event, deadline, or other significant updates.
            </p>
            <a href="{{ route('notice', ['id' => 2]) }}" class="text-white bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg transition-colors duration-200">Read More</a>
        </div>

        <!-- Add more notices similarly -->

    </div>
</div>
</section>

</x-layout>