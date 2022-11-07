<template>
  <v-container fill-height>
    <v-row justify="center" align="center">
      <v-col cols="12" sm="8" md="6">
        <v-form ref="form">
          <v-text-field
            v-model="form.email"
            label="Email"
            color="blue"
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

          <v-btn color="primary" class="m1-0" @click="login"> Login </v-btn>
        </v-form>
      </v-col>
    </v-row>
  </v-container>
</template>
<script>
export default {
  name: 'LoginPage',
  data() {
    return {
      form: {
        email: '',
        password: '',
      },
      passwordVisible: false,
    }
  },

  methods: {
    // the login method needs to be built
    // probably use an axios post here
    async login() {
      //   this.$axios
      //     .post({login-forms-details}, {
      //       Email: this.username,
      //       Password: this.password,
      //     })
      //     .then((response) => {
      //       localStorage.setItem('userName', this.username)
      //       this.isValid = true
      //     })
      //     .catch((error) => {
      //       this.isValid = false
      //     })
      //   this.showDialog = true
      //   this.$emit('update:loggedIn')
      // },
    },
  },
}
</script>
