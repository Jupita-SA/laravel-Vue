<template>
  <div class="fixed z-10 inset-0 overflow-y-auto" v-if="visible">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
      <!-- Background overlay -->
      <div class="fixed inset-0 transition-opacity" aria-hidden="true">
        <div class="absolute inset-0 bg-gray-900 opacity-75"></div>
      </div>

      <!-- Modal panel -->
      <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
      <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
        <div class="px-4 py-2 rounded-t-lg flex justify-between items-center">
          <h2 class="text-lg text-black font-semibold mb-2">New Recording</h2>
          <button @click="closeModal" class="text-gray-500 hover:text-gray-700">
            <i class="fas fa-times"></i>
          </button>
        </div>
        <hr>

        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4 mb-4">
          <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Save the recording in...</label>
            <select v-model="selectedSaveOption" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
              <option value="local">Local</option>
              <option value="cloud">Cloud</option>
            </select>
          </div>
      
  <div class="flex justify-space-between items-center mb-2">
      <div class="flex-1 text-gray-700 mr-4">Record screen</div>
      <label for="screenCheck" class="bg-gray-100 w-14 h-7 relative rounded-full cursor-pointer">
        <input type="checkbox" id="screenCheck" v-model="selectedPeripherals.screen" class="sr-only" @change="toggleCheckbox('screen')" />
        <span :class="{ 'bg-green-300 left-7': selectedPeripherals.screen, 'bg-gray-400': !selectedPeripherals.screen }" class="w-2/5 h-4/5 absolute rounded-full left-1 top-1 transition-all duration-500"></span>
      </label>
    </div>

    <div class="flex justify-space-between items-center mb-2">
      <div class="flex-1 text-gray-700 mr-4">Record camera</div>
      <label for="cameraCheck" class="bg-gray-100 w-14 h-7 relative rounded-full cursor-pointer">
        <input type="checkbox" id="cameraCheck" v-model="selectedPeripherals.camera" class="sr-only" @change="toggleCheckbox('camera')" />
        <span :class="{ 'bg-green-300 left-7': selectedPeripherals.camera, 'bg-gray-400': !selectedPeripherals.camera }" class="w-2/5 h-4/5 absolute rounded-full left-1 top-1 transition-all duration-500"></span>
      </label>
    </div>

    <div class="flex justify-space-between items-center mb-2">
      <div class="flex-1 text-gray-700 mr-4">Record mic</div>
      <label for="micCheck" class="bg-gray-100 w-14 h-7 relative rounded-full cursor-pointer">
        <input type="checkbox" id="micCheck" v-model="selectedPeripherals.mic" class="sr-only" @change="toggleCheckbox('mic')" />
        <span :class="{ 'bg-green-300 left-7': selectedPeripherals.mic, 'bg-gray-400': !selectedPeripherals.mic }" class="w-2/5 h-4/5 absolute rounded-full left-1 top-1 transition-all duration-500"></span>
      </label>
    </div>


         <div class="flex justify-center mt-4">
            <button @click="requestPermissions" class="bg-blue-500 text-white px-6 py-3 rounded-full">Start Recording</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["visible"],
   methods: {
    closeModal() {
      this.$emit("closeModal");
    }},
  data() {
    return {
      selectedPeripherals: {
        screen: false,
        camera: false,
        mic: false
      },
      selectedSaveOption: "local" // Default selected option
    };
  },
  methods: {
    requestPermissions() {
      // Emit an event to the parent component with selected peripherals and save option
      this.$emit("startRecording", {
        peripherals: this.selectedPeripherals,
        saveOption: this.selectedSaveOption
      });
    },
    closeModal() {
      // Add any logic needed to close the modal
      this.$emit("closeModal");
    }
  }
};
</script>

