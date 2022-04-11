<template>
  <Layout>
    <h1>Member profil edition</h1>

    <article>
      <h2>Edition Form</h2>
      <form name="member.update" @submit.prevent="submit">
        <div class="grid">
          <label for="name">
            Name
            <input id="name"
                   v-model="form.name"
                   :disabled="$page.props.auth.user.id !== member.id"
                   name="name"
                   required
                   type="text"
            >
          </label>
        </div>

        <div class="grid">
          <label for="role">Role
            <select id="role"
                    v-model="form.role"
                    :disabled="!$page.props.auth.user.can.moderate"
                    name="role"
                    required
            >
              <option v-for="role in $page.props.enum.member.roles"
                      :selected="member.role === role"
                      :value="role"
              >
                {{ role }}
              </option>
            </select>
          </label>

          <label for="status">Status
            <select id="status"
                    v-model="form.status"
                    :disabled="!$page.props.auth.user.can.moderate"
                    name="status"
                    required
            >
              <option v-for="status in $page.props.enum.member.status"
                      :selected="member.status === status"
                      :value="status"
              >
                {{ status }}
              </option>
            </select>
          </label>
        </div>

        <button type="submit">Save</button>
      </form>
    </article>
  </Layout>
</template>

<script>
import Layout from '../../Shared/Layout'
import { Inertia } from '@inertiajs/inertia'
import { reactive } from 'vue'

export default {
  name: 'Edit',
  components: { Layout },
  props: {
    member: {
      type: Object,
      required: true
    }
  },
  data () {
    return {
      form: reactive({
        name: this.member.name,
        role: this.member.role,
        status: this.member.status
      })
    }
  },
  methods: {
    submit () {
      Inertia.put(this.$route('members.update', this.member), this.form)
    }
  }
}
</script>
