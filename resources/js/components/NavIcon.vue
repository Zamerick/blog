<template>
  <div @mouseover="toggleShow()" @mouseout="toggleShow()" class="flex flex-row justify-center">
    <a class="w-12 h-12 flex flex-col justify-center text-white active:text-blue hover:text-blue" :href="this.href">
      <slot></slot>
      <span class="-ml-2 text-sm nav-text" v-if="this.hasText && this.show">{{text}}</span>
    </a>
  </div>
</template>
<script>
export default {
    name: "NavIcon",
    props: ["text", "href"],
    data() {
        return {
            show: false
        }
    },
    computed: {
        hasText: function () {
            return this.text != null && this.text !== '';
        }
    },
    methods: {
        toggleShow () {
            if (this.hasText) {
            this.show = !this.show;
            }
        }
    }
}
</script>
<style lang="stylus">
*:focus {
  border: none;
}

.nav-text {
  font-variant: small-caps;
  font-style: normal;
}

svg, svg:focus {
  all: inherit;
  border: none;
}
</style>
