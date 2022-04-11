<template>
  <Header/>
  <main class="container">
    <slot/>
  </main>
</template>

<script>
import Header from './Header'

export default {
  name: 'Layout',
  components: { Header },
}
</script>
