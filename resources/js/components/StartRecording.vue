<template>
  <div>
    <!-- Start Recording Section -->
    <div>
      <span class="pb-8 text-sm">Snapbyte > My Recording</span>    
    </div>
    <!-- My Recordings Section -->
    <div class="grid grid-cols-4 gap-16">
      <!-- Left Part: My Recordings 25 -->
      <div class="col-span-2 md:col-span-1">
        <h2 class="text-xl font-semibold">My Recordings 25</h2>
      </div>

      <!-- Right Part: Buttons with Icons -->
      <div class="flex gap-4 col-span-2 md:col-span-3">
        <div class="border border-gray-200 rounded-full">
            <button @click="shuffleByDate" class="px-4 py-2">
          <i class="fas fa-random mr-2"></i>
          by Date
        </button>
        </div>

        <div class="border border-gray-200 rounded-full">
            <button @click="applyFilter" class="px-4 py-2">
          <i class="fas fa-filter mr-2"></i>
          Add Filter
        </button>
        </div>

        <div class="bg-blue-400 text-white rounded-full">
            <button @click="createNewRequest" class="px-4 py-2">
          <i class="fas fa-plus mr-2"></i>
          New Request
        </button>
        </div>

        <div class="bg-red-400 text-white rounded-full">
            <button @click="openRecordingModal" class="px-4 py-2">
        <i class="fas fa-microphone mr-2"></i>
        Start Recording
      </button>
      <RecordingModal :visible="showRecordingModal" @startRecording="startRecording" @closeModal="closeRecordingModal" />
    
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import RecordingModal from "./RecordingModal.vue";

export default {
  data() {
    return {
      showRecordingModal: false
    };
  },
  methods: {
    openRecordingModal() {
      this.showRecordingModal = true;
    },
    startRecording(selectedPeripherals) {
      console.log("Recording started with peripherals:", selectedPeripherals);
      // Close the modal
      this.showRecordingModal = false;
    },
    closeRecordingModal() {
      // Handle the close modal event
      this.showRecordingModal = false;
    },
    shuffleByDate() {
      // Implement shuffle by date logic
    },
    applyFilter() {
      // Implement filter logic
    },
    createNewRequest() {
      // Implement logic for creating a new request
    }
  },
  components: {
    RecordingModal
  }
};
</script>

<style scoped>
/* Add your custom styles here */
.icon-btn {
  padding: 8px;
  background-color: #3490dc;
  color: #ffffff;
  border: none;
  cursor: pointer;
  border-radius: 4px;
}
</style>
