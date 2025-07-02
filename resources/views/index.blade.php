<x-layout>
    <!-- Hero Section -->
    <x-hero/>
    <!-- Message -->
     <div class="bg-white p-6 rounded-lg shadow-lg my-10">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center">
        <!-- Principal's Image -->
        <div class="col-span-1">
            <img src="{{asset('images/director.jpg')}}" alt="Principal" class="rounded-full w-50 h-50 mx-auto shadow-md">
        </div>

        <!-- Principal's Message -->
        <div class="col-span-2">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Message from the Program Director</h2>
            <p class="text-lg text-gray-600 leading-relaxed mb-6">
            The Bachelor of Computer Applications (BCA) program at MMAMC is designed to equip students 
            with the essential skills and knowledge required to thrive in the dynamic field of information 
            technology. Our curriculum blends theoretical understanding with hands-on experience, ensuring that graduates are well-prepared to meet the demands of the digital age. At MMAMC, we are committed to fostering innovation, critical thinking, and practical problem-solving abilities. I invite all aspiring IT professionals to join this transformative 
            journey and become leaders in the ever-evolving world of technology.
            </p>

            <!-- Principal's Name and Designation -->
            <div class="text-right">
                <p class="text-lg font-semibold text-gray-800">Dr. [Achut Raj Katel]</p>
                <p class="text-sm text-gray-500">Director,BCA@MMAMC</p>
            </div>
        </div>
    </div>
</div>
<section>
    <!-- About Us Section -->
    <div class="bg-gray-100 p-6 rounded-lg shadow-lg my-10">
    <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">At a Glance</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Mission -->
        <div class="bg-white p-4 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold text-blue-600 mb-2">Mission</h3>
            <p class="text-gray-600">
                To provide a comprehensive education that nurtures the intellectual, physical, and emotional growth of each student, fostering lifelong learning and success.
            </p>
        </div>

        <!-- Vision -->
        <div class="bg-white p-4 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold text-blue-600 mb-2">Vision</h3>
            <p class="text-gray-600">
                To be a leading institution in academic excellence, innovation, and character development, preparing students for the challenges of the future.
            </p>
        </div>

        <!-- Values -->
        <div class="bg-white p-4 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold text-blue-600 mb-2">Core Values</h3>
            <ul class="list-disc pl-5 text-gray-600">
                <li>Respect</li>
                <li>Integrity</li>
                <li>Collaboration</li>
                <li>Excellence</li>
            </ul>
        </div>

        <!-- Facilities -->
        <div class="bg-white p-4 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold text-blue-600 mb-2">Facilities</h3>
            <ul class="list-disc pl-5 text-gray-600">
                <li>Modern Computer Labs</li>
                <li>Library & Research Center</li>
                <li>Sports Complex</li>
                <li>Seminars & Workshop</li>
            </ul>
        </div>
    </div>
</div>

</section>

</x-layout>