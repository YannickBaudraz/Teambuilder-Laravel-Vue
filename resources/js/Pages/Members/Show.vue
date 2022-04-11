<template>
  <Layout>
    <h1>Member profil</h1>
    <article>
      <header>
        <h2>{{ member.name }}</h2>
        <template v-if="member.teams?.length">
          <dl v-if="member.captained_teams?.length">
            <dt>Captain of</dt>
            <dd v-for="team in member.captained_teams">
              <Link :href="$route('teams.show', team)">
                {{ team.name }}
              </Link>
            </dd>
          </dl>
          <dl v-if="member.not_captained_teams?.length">
            <dt>Member of</dt>
            <dd v-for="team in member.not_captained_teams">
              <Link :href="$route('teams.show', team)">
                {{ team.name }}
              </Link>
            </dd>
          </dl>
        </template>
        <template v-else>
          <p>This member has no teams.</p>
        </template>
      </header>
      <figure>
        <figcaption>Member details</figcaption>
        <table>
          <tr>
            <th scope="row">Role</th>
            <td>{{ member.role }}</td>
          </tr>
          <tr>
            <th scope="row">Status</th>
            <td>{{ member.status }}</td>
          </tr>
        </table>
      </figure>
      <footer>
        <div class="flex flex-end">
          <Link :href="$route('members.edit', member)" role="button">Edit mode</Link>
        </div>
      </footer>
    </article>
  </Layout>
</template>

<script>
import Layout from '../../Shared/Layout'
import { Link } from '@inertiajs/inertia-vue3'

export default {
  name: 'Show',
  components: { Layout, Link },
  props: {
    member: {
      type: Object,
      required: true
    }
  }
}
</script>

<style scoped>
th {
  font-weight: 500;
}
</style>
