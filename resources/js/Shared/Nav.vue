<template>
  <nav>
    <ul>
      <li>
        <Link :href="$route('home')"><strong>CPNV</strong></Link>
      </li>
    </ul>
    <ul>
      <template v-if="$page.props.auth.user">
        <li>
          <Link :href="$route('members.teams.index', $page.props.auth.user.id)">My teams</Link>
        </li>
        <li>
          <Link :href="$route('members.index', { role: $page.props.enum.member.roles.MEM })">Members</Link>
        </li>
        <li>
          <Link :href="$route('members.index', { role: $page.props.enum.member.roles.MOD })">Moderators</Link>
        </li>
        <li>
          <Link :href="$route('auth.destroy')" as="button" class="outline" method="post" role="button">Log Out</Link>
        </li>
      </template>
      <li v-else>
        <Link :href="$route('auth.create')" role="button">Log In</Link>
      </li>
    </ul>
  </nav>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'

export default {
  name: 'Nav',
  components: { Link }
}
</script>
