@extends('layouts.app')

@section('content')
<template>
  <div id="app">
    <nav class="bg-white sticky-top">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-12">
        <div class="flex items-center">
          <a href="#" class="text-gray-800 flex text-lg font-semibold">
            <!-- <img class="w-16" src="@/assets/logo.png" alt="" /> -->
            <p class="mt-4">Adilo</p>
          </a>
        </div>
        <div class="flex items-center space-x-4">
          <!-- Add basic menu items without motion.div and router-link -->
          <div class="text-gray-800 hover:text-gray-300 px-3 py-2 rounded-md text-sm font-medium">
            <a href="#">Projects</a>
          </div>
        <div class="relative" @mouseover="openDropdown = true" @mouseout="openDropdown = false">
            <a href="#" class="text-gray-800 hover:text-gray-300 px-3 py-2 rounded-md text-sm font-medium">
              Tools & App
            </a>
            <div v-show="openDropdown" class="absolute mt-2 bg-white shadow-md rounded-md py-2" @mouseover="openDropdown = true" @mouseout="openDropdown = false">
              <a href="#" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-200">Sub Item 1</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-200">Sub Item 2</a>
            </div>
          </div>
          <div class="text-gray-800 hover:text-gray-300 px-3 py-2 rounded-md text-sm font-medium">
            <a href="#">Channels</a>
          </div>
          <div class="text-gray-800 hover:text-gray-300 px-3 py-2 rounded-md text-sm font-medium">
            <a href="#">Contacts</a>
          </div>
          <div class="text-gray-800 hover:text-gray-300 px-3 py-2 rounded-md text-sm font-medium">
            <a href="#">Analytics</a>
          </div>
          <div class="text-gray-800 hover:text-gray-300 px-3 py-2 rounded-md text-sm font-medium">
            <a href="#">Settings</a>
          </div>
        </div>
        <div class="flex items-center ">
            <div class="text-gray-800 hover:text-gray-300 px-3 py-2 rounded-md text-sm font-medium">
            <a href="#">Help</a>
          </div>
          <div class="border-l border-gray-300 h-8 mx-2">
            <!-- Add your user account information here -->
           <div class="topRight pl-4">
             <img
              class="topImg"
              src="/path/to/your/default/image.jpg"
              alt=""
              style="border-radius: 50%; width: 40px; height: 40px; object-fit: cover;"
            />
           </div>
          </div>
        </div>
      </div>
    </div>

  </nav>
  <hr class="border-t border-gray-300">

    <!-- Grid Section -->
    <div class="">
      <div class="grid grid-cols-4 gap-16">
        <!-- First Column with a width of 3 -->
        <div class="col-span-2 md:col-span-1 justify-center h-screen bg-gray-100">
          <!-- List of Items -->
          <ul class="list-disc pl-4">
            <!-- My Recordings with video icon -->
            <li
              class="flex items-center mb-2 cursor-pointer"
              @click="showContent('recordings')"
              :class="{ 'bg-gray-200 rounded-md p-2': activeTab === 'recordings' }"
            >
              <span class="mr-2">
                <!-- Add your video icon here, e.g., Font Awesome -->
                <i class="fas fa-video"></i>
              </span>
              My Recordings
            </li>

            <!-- Requested with share icon -->
            <li
              class="flex items-center cursor-pointer"
              @click="showContent('requested')"
              :class="{ 'bg-gray-200': activeTab === 'requested' }"
            >
              <span class="mr-2">
                <!-- Add your share icon here, e.g., Font Awesome -->
                <i class="fas fa-share"></i>
              </span>
              Requested
            </li>
          </ul>
        </div>

        <!-- Second Column with a width of 7 -->
        <div class="col-span-2 md:col-span-3">
           <div>
            <start-recording></start-recording>
           </div>
          <!-- Content for the second column -->
          <div v-if="activeTab === 'recordings'">
            <!-- Content for My Recordings -->
            <!-- You can include your specific content here -->
            <table class="min-w-full">
      <thead>
        <tr>
          <th class="py-2">Recording</th>
          <th class="py-2">Title</th>
          <th class="py-2">Views</th>
          <th class="py-2">Size</th>
          <th class="py-2">Last Modified</th>
          <th class="py-2"></th>
        </tr>
      </thead>
      <tbody>
        <!-- Mock JSON Data -->
        <tr v-for="recording in mockRecordings" :key="recording.id">
          <td class="py-2">{{ recording.recording }}</td>
          <td class="py-2">{{ recording.title }}</td>
          <td class="py-2">{{ recording.views }}</td>
          <td class="py-2">{{ recording.size }}</td>
          <td class="py-2">{{ recording.lastModified }}</td>
          <td class="py-2">
            <!-- Add actions or buttons for each recording -->
           
          </td>
        </tr>
      </tbody>
    </table>
          </div>
          <div v-else-if="activeTab === 'requested'">
            <!-- Content for Requested -->
            <!-- You can include your specific content here -->
            <h1>Requested Content</h1>
          </div>
          <div v-else>
            <!-- Default content when no tab is selected -->
            <h1>Select a tab to view content</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
 data() {
    return {
      openDropdown: false,
      activeTab: 'recordings',
      mockRecordings: [
        {
          id: 1,
          recording: 'Recording 1',
          title: 'Title 1',
          views: 100,
          size: '50 MB',
          lastModified: '2022-01-01',
        },
        {
          id: 2,
          recording: 'Recording 1',
          title: 'Title 2',
          views: 340,
          size: '150 MB',
          lastModified: '2023-01-01',
        },
        // Add more recordings as needed
      ],
    };
  },
  methods: {
    showContent(tab) {
      this.activeTab = tab;
    },
  },
};
</script>
  <!-- Include Vue.js and your compiled assets -->
  import App from '{{ mix('../app.js') }}?vue&type=script&lang=js&external';

@endsection
