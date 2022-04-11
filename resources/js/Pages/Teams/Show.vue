<template>
  <Layout>
    <h1>Details of {{ team.name }}</h1>

    <article>
      <div class="headings">
        <h2>{{ team.name }}</h2>
        <h3>{{ team.state }}</h3>
      </div>
      <table aria-label="Members list">
        <caption>{{ team.members.length }} members</caption>
        <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Captain</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="member in team.members">
          <td>{{ member.name }}</td>
          <td>{{ member.pivot.is_captain ? 'Yes' : 'No' }}</td>
        </tr>
        </tbody>
      </table>
    </article>
  </Layout>
</template>

<script>
import Layout from '../../Shared/Layout'

export default {
  name: 'Show',
  components: { Layout },
  props: {
    team: {
      type: Object,
      required: true,
    },
  },
}
</script>
