
<script>
import Layout from "@/layouts/main.vue";
import CardData from "@/components/Generics/CardData.vue";
import Button from "@/components/Generics/Button.vue";
import FormData from "@/components/Generics/FormData.vue";
export default {
 
  data() {
    return {
      List: [],
      title:"Editar Contacto"
    };
  },
  components: {
    Layout,
    CardData,
    FormData,
    Button,
  },
  methods: {
    async get() {
      const id = this.$route.params.id;
      const result = await axios.post("api/search-person", {
        id: id,
      });
      this.List = result.data.data;
    },
  },

  mounted() {
    this.get();
  },
};
</script>
<template>
  <Layout>
    <CardData :items="List" />
    <div
      class="
        container
        m-auto
        max-w-screen-lg
        shadow-lg
        bg-gray-100
        text-lg
        font-bold
        text-center
        rounded-lg
        row-span-2
        col-span-2
      "
    >
      <FormData class="mt-5" :items="List"  :title="title" />
    <!--   <Button class="my-5" :title="title"/> -->
    </div>
  </Layout>
</template>