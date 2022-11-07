<template>
  <v-app dark>
    <v-app-bar :clipped-left="clipped" fixed app>
      <v-toolbar-title>
        <v-btn nuxt to="/">
          <v-icon large left>mdi-hexagon-multiple-outline</v-icon>
          {{ title }}
        </v-btn>
      </v-toolbar-title>
      <v-spacer />
      <v-btn icon @click.stop="rightDrawer = !rightDrawer">
        <v-icon>mdi-menu</v-icon>
      </v-btn>
    </v-app-bar>
    <v-main>
      <Nuxt />
    </v-main>
    <v-navigation-drawer v-model="rightDrawer" :right="right" temporary fixed>
      <v-list nav dense>
        <v-list-item>
          <v-btn text block nuxt to="/">
            <v-spacer></v-spacer>
            <!-- Logo linked to homepage -->
            <v-icon large>mdi-hexagon-multiple-outline</v-icon>
            <v-spacer></v-spacer>
          </v-btn>
        </v-list-item>

        <!-- use v-if to check if not logged in -->
        <v-list-item>
          <v-btn text block nuxt to="/login">
            <v-spacer></v-spacer>
            Login
            <v-icon right>mdi-login</v-icon>
            <v-spacer></v-spacer>
          </v-btn>
        </v-list-item>

        <!-- use v-if to check if not logged in -->
        <v-list-item>
          <v-btn text block nuxt to="/register">
            <v-spacer></v-spacer>
            Register
            <v-icon right>mdi-account-plus</v-icon>
            <v-spacer></v-spacer>
          </v-btn>
        </v-list-item>

        <v-list-item>
          <v-btn text block nuxt to="/team">
            <v-spacer></v-spacer>
            The Team
            <!-- we don't have to use multiple icons here, just couldn't make up my mind -->
            <v-icon right>mdi-drama-masks</v-icon>
            <v-icon right>mdi-emoticon-cool-outline</v-icon>
            <v-icon right>mdi-robot-excited-outline</v-icon>
            <v-spacer></v-spacer>
          </v-btn>
        </v-list-item>

        <v-list-item>
          <v-btn text block nuxt to="/about">
            <v-spacer></v-spacer>
            About
            <v-icon right>mdi-information-outline</v-icon>
            <v-spacer></v-spacer>
          </v-btn>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>
    <v-footer app>
      <span>&copy; {{ new Date().getFullYear() }}</span>
    </v-footer>
  </v-app>
</template>

<script>
export default {
  name: 'DefaultLayout',
  data() {
    return {
      clipped: false,
      right: true,
      rightDrawer: false,
      title: '378Project',
    }
  },
}
</script>
