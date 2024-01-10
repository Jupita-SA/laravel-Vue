<!-- resources/js/components/RecordingPage.vue -->

<template>
    <div>
        <h1>Start Recording</h1>
        <button @click="openRecordingModal">Start Recording</button>
        <recording-modal v-if="showRecordingModal" @startRecording="startRecording" />
    </div>
</template>

<script>
import RecordingModal from "./RecordingModal.vue";
import axios from "axios";

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
            // Implement recording logic or send an AJAX request to start recording
            console.log("Recording started with peripherals:", selectedPeripherals);
            // Close the modal
            this.showRecordingModal = false;
        }
    },
    components: {
        RecordingModal
    }
};
</script>

<style scoped>
/* Add your styles here */
</style>
