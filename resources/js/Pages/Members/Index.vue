<template>
  <Layout>
    <h1>Members list</h1>

    <table aria-label="Members list">
      <caption>{{ members.length }} members</caption>
      <thead>
        <tr>
          <th scope="col">Member</th>
          <th scope="col">Team(s)</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="member in members">
          <td>
            <Link :href="$route('members.show', member)">{{ member.name }}</Link>
          </td>
          <td>
            <template v-for="(team, index) in member.teams">
              <Link :href="$route('teams.show', team)">{{ team.name }}</Link>
              <template v-if="index < member.teams.length - 1">,</template>
            </template>
          </td>
          <td>
            <Link
              v-if="!member.can.moderate && $page.props.auth.user.can.moderate"
              :href="$route('members.nominate', [member, 'MOD'])"
              method="post"
            >
              Nominate moderator
            </Link>
          </td>
        </tr>
      </tbody>
    </table>
  </Layout>
</template>

<script>
import Layout from '../../Shared/Layout'
import { Link } from '@inertiajs/inertia-vue3'

export default {
  name: 'Index',
  components: { Layout, Link },
  props: {
    members: {
      type: Array,
      required: true
    }
  },
  methods: {
    teamsWithComma (member) {
      let split = member.teams.map(team => team.name).join(',<xyz>').split('<xyz>')
      console.log(split)
      return split
    }
  }
}
</script>
