<template>
  <Layout>
    <h1>My teams</h1>

    <figure>
      <table aria-label="Teams list">
        <caption>{{ teams?.length }} teams</caption>
        <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Number of members</th>
          <th scope="col">Captain</th>
          <th scope="col">State</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="team in teams">
          <td>
            <Link :href="$route('teams.show', team)">{{ team.name }}</Link>
          </td>
          <td>{{ team.members?.length }}</td>
          <td>{{ team.captain?.name }}</td>
          <td>{{ team.state }}</td>
        </tr>
        </tbody>
      </table>
    </figure>
  </Layout>
</template>

<script>
import Layout from '../../../Shared/Layout'
import { Link } from '@inertiajs/inertia-vue3'

export default {
  name: 'Index',
  components: { Layout, Link },
  props: {
    teams: {
      type: Array,
      required: true,
    },
  },
}
</script>
