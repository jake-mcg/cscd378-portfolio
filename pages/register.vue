<template>
  <v-container fill-height>
    <v-row justify="center" align="center">
      <v-col cols="12" sm="8" md="6">
        <v-card class="">
          <v-form ref="form">
            <v-text-field
              v-model="form.username"
              label="Username"
              color="primary"
              required
              outlined
            >
              <v-icon slot="prepend"> mdi-email </v-icon>
            </v-text-field>

            <v-text-field
              v-model="form.email"
              label="Email"
              color="primary"
              required
              outlined
            >
              <v-icon slot="prepend"> mdi-email </v-icon>
            </v-text-field>

            <v-text-field
              v-model="form.password"
              label="Password"
              required
              outlined
              :type="passwordVisible ? 'text' : 'password'"
              :append-icon="passwordVisible ? 'mdi-eye' : 'mdi-eye-off'"
              @click:append="passwordVisible = !passwordVisible"
            >
              <v-icon slot="prepend"> mdi-lock </v-icon></v-text-field
            >
            <v-text-field
              v-model="form.confirmpassword"
              label="Confirm Password"
              required
              outlined
              :type="confirmPasswordVisible ? 'text' : 'password'"
              :append-icon="confirmPasswordVisible ? 'mdi-eye' : 'mdi-eye-off'"
              @click:append="confirmPasswordVisible = !confirmPasswordVisible"
            >
              <v-icon slot="prepend"> mdi-lock </v-icon></v-text-field
            >

            <v-btn color="primary" class="m1-0" @click="register">
              Login
            </v-btn>
          </v-form>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>
<script>
export default {
  name: 'RegisterPage',
  data() {
    return {
      form: {
        username: '',
        email: '',
        password: '',
      },
      passwordVisible: false,
      confirmPasswordVisible: false,
    }
  },

  methods: {
    // the login method needs to be built
    // probably use an axios post here
    async register() {},
  },
}
</script>
