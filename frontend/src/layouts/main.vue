<script>
import Vertical from "./vertical";
export default {
  components: {
    Vertical,
  },
  data() {
    return {};
  },
};
</script>
<template>
  <div>
    <Vertical>
      <slot />
    </Vertical>
  </div>
</template>
    