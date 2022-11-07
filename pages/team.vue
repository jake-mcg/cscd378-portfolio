<template>
  <v-container>
    <v-row justify="center">
      <v-col cols="12">
        <v-card flat color="transparent">
          <v-card-title class="justify-center">
            <h1>Team Members</h1>
          </v-card-title>
        </v-card>
      </v-col>

      <!-- Dakota -->
      <v-col cols="8">
        <v-card>
          <div class="d-flex align-center">
            <v-avatar size="150" class="ma-6">
              <v-img src="/dakota.webp" />
            </v-avatar>
            <v-container fluid>
              <v-card flat>
                <v-card-title class="justify-left">
                  Dakota Condos
                </v-card-title>
                <v-card-text>
                  EWU Computer Science Major - Senior
                  <v-spacer />
                  <small
                    ><em>
                      "Obviously we will remove the stock photos before this
                      goes live, maybe..."
                    </em>
                    <br />
                    - Dakota</small
                  >
                </v-card-text>
                <v-card-actions>
                  <v-btn color="primary" nuxt to="/dakota"> Profile </v-btn>
                </v-card-actions>
              </v-card>
            </v-container>
          </div>
        </v-card>
      </v-col>

      <!-- Ethan Howe -->
      <v-col cols="8">
        <v-card>
          <div class="d-flex align-center">
            <v-avatar size="150" class="ma-6">
              <v-img src="/ethan.webp" />
            </v-avatar>
            <v-container fluid>
              <v-card flat>
                <v-card-title class="justify-left"> Ethan Howe </v-card-title>
                <v-card-text>
                  EWU Computer Science Major - Senior
                  <v-spacer />
                  <small
                    ><em>
                      "Obviously we will remove the stock photos before this
                      goes live, maybe..."
                    </em>
                    <br />
                    - Ethan</small
                  >
                </v-card-text>
                <v-card-actions>
                  <v-btn color="primary" nuxt to="/ethan"> Profile </v-btn>
                </v-card-actions>
              </v-card>
            </v-container>
          </div>
        </v-card>
      </v-col>

      <!-- Keith Stack -->
      <v-col cols="8">
        <v-card>
          <div class="d-flex align-center">
            <v-avatar size="150" class="ma-6">
              <v-img src="/keith.webp" />
            </v-avatar>
            <v-container fluid>
              <v-card flat>
                <v-card-title class="justify-left"> Keith Stack </v-card-title>
                <v-card-text>
                  EWU Computer Science Major - Senior
                  <v-spacer />
                  <small
                    ><em>
                      "Ill keep my nickname lowercase in the discord..."
                    </em>
                    <br />
                    - keith</small
                  >
                </v-card-text>
                <v-card-actions>
                  <v-btn color="primary" nuxt to="/keith"> Profile </v-btn>
                </v-card-actions>
              </v-card>
            </v-container>
          </div>
        </v-card>
      </v-col>

      <!-- Jake McGillicuddy -->
      <v-col cols="8">
        <v-card>
          <div class="d-flex align-center">
            <v-avatar size="150" class="ma-6">
              <v-img src="/jake.webp" />
            </v-avatar>
            <v-container fluid>
              <v-card flat>
                <v-card-title class="justify-left">
                  Jake McGillicuddy
                </v-card-title>
                <v-card-text>
                  EWU Computer Science Major - Senior
                  <v-spacer />
                  <small
                    ><em> "Clean. Code. Enthusiasts." </em>
                    <br />
                    - Jake</small
                  >
                </v-card-text>
                <v-card-actions>
                  <v-btn color="primary" nuxt to="/jake"> Profile </v-btn>
                </v-card-actions>
              </v-card>
            </v-container>
          </div>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>
<script>
export default {
  name: 'TeamPage',
}
</script>
