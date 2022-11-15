<script>
export default {
  props: {
    valueWidth: {
      type: String,
      default: "200px",
    },
    valueHeight: {
      type: String,
      default: "64",
    },
  },
};
</script>

<template>
 
    <img
      src="@/assets/image/logo.png"
      class=""
      :width="valueWidth"
      :height="valueHeight"
      alt=""
    />

</template>