<template>
    <view>
        <scroll-view class="scroll-view">
           //Todo: Create gif item and header
           <view class="loading-container" :style="{flex: 1, justifyContent: 'center'}" v-if="loading">
              <activity-indicator size="large" color="#0000ff"></activity-indicator>
            </view>         </scroll-view>
    </view>
</template>
<script>
  import Giphy from 'giphy-js-sdk-core';
  const client = Giphy('QR4SftkZRCsNcAufHDOjGYo90tBJ1KEf');

  export default {
    name: 'App',
    data() {
      return {
        gifs: [],
        loading: true,
      };
    },
    async created() {
      const response = await client.trending('gifs', {limit: 20});
      this.gifs = response.data;
    },
  };
</script>
<style>
    .scroll-view {
        padding-top: 20px;
        padding-bottom: 30px;
    }
    .loading-container {
        height: 600px;
    }
</style>