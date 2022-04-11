<template>
  <header class="container" style="padding-top: 0; padding-bottom: 0">
    <Nav/>
    <div class="headings">
      <h1>Team Builder</h1>
      <h2>Application for CPNV joutes</h2>
    </div>
    <p v-if="$page.props.auth.user">Logged as :
      <Link :href="$route('members.show', $page.props.auth.user)">{{ $page.props.auth.user.name }}</Link>
    </p>
  </header>
</template>

<script>
import Nav from './Nav'
import { Link } from '@inertiajs/inertia-vue3'

export default {
  name: 'Header',
  components: { Nav, Link }
}
</script>
