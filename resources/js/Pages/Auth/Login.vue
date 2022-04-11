<template>
  <Layout>
    <article>
      <div>
        <h1>Login</h1>
        <form name="login" @submit.prevent="submit">
          <input v-model="form.name"
                 aria-label="Name"
                 autocomplete="name"
                 autofocus
                 name="name"
                 placeholder="Name"
                 required
                 type="text"
          >

          <input v-model="form.password"
                 aria-label="Password"
                 name="password"
                 placeholder="Password"
                 required
                 type="password"
          >

          <fieldset>
            <legend></legend>
            <label for="remember_me">
              <input id="remember_me" v-model="form.rememberMe" name="remember_me" type="checkbox">
              Remember me
            </label>
          </fieldset>

          <button type="submit">Log In</button>
        </form>
      </div>
      <div></div>
    </article>
  </Layout>
</template>

<script>
import Layout from '../../Shared/Layout'
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'

export default {
  name: 'Login',
  components: { Layout },
  data () {
    return {
      form: reactive({
        name: '',
        password: '',
        rememberMe: false,
      }),
    }
  },
  methods: {
    submit () {
      Inertia.post(this.$route('auth.store'), this.form)
    },
  },
}
</script>
