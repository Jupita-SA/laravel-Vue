<!-- resources/js/App.vue -->

<template>
  <div id="app">
    <start-recording></start-recording>
  </div>
</template>

<script>
import StartRecording from "./StartRecording.vue";

export default {
  components: {
    "start-recording": StartRecording
  }
};
</script>

<style>
/* Add your styles here */
</style>
