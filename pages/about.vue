<template>
  <v-container>
    <v-card>
      <!-- style this card title with some CSS -->
      <v-card-title> Final Project Specifications</v-card-title>
      <v-expansion-panels popout>
        <v-expansion-panel>
          <v-expansion-panel-header>
            1. You must use a javascript library (jquery is a great choice)
            (10%)</v-expansion-panel-header
          >
          <v-expansion-panel-content>
            We are using X,Y,Z...
          </v-expansion-panel-content>
        </v-expansion-panel>

        <v-expansion-panel>
          <v-expansion-panel-header
            >2. You must use a stylesheet to style your site
            (10%)</v-expansion-panel-header
          >
          <v-expansion-panel-content>
            We are using X,Y,Z...
          </v-expansion-panel-content>
        </v-expansion-panel>

        <v-expansion-panel>
          <v-expansion-panel-header
            >3. You must have a database with data, you will need (10%) to
            provide a creation script with instructions so I can run your final
            project on my local machine</v-expansion-panel-header
          >
          <v-expansion-panel-content>
            We are using X,Y,Z...
          </v-expansion-panel-content>
        </v-expansion-panel>

        <v-expansion-panel>
          <v-expansion-panel-header
            >4. You must provide a login functionality with admin (10%)
            features</v-expansion-panel-header
          >
          <v-expansion-panel-content>
            We are using X,Y,Z...
          </v-expansion-panel-content>
        </v-expansion-panel>

        <v-expansion-panel>
          <v-expansion-panel-header
            >5. You will need to use cookies to manage state and visits (10%)
            and present a different page/message for returning users vs.
            new</v-expansion-panel-header
          >
          <v-expansion-panel-content>
            We are using X,Y,Z...
          </v-expansion-panel-content>
        </v-expansion-panel>

        <v-expansion-panel>
          <v-expansion-panel-header
            >6. You must implement logging and write logs to your database (10%)
            this will be used for error management and site usage and any thing
            else you deem neccesary
          </v-expansion-panel-header>
          <v-expansion-panel-content>
            We are using X,Y,Z...
          </v-expansion-panel-content>
        </v-expansion-panel>

        <v-expansion-panel>
          <v-expansion-panel-header
            >7. You are required to use git and provide your repo info so I
            (10%) can view check in's etc
          </v-expansion-panel-header>
          <v-expansion-panel-content>
            We are using X,Y,Z...
          </v-expansion-panel-content>
        </v-expansion-panel>

        <v-expansion-panel>
          <v-expansion-panel-header
            >8. You will need to provide a writeup at the end with the following
            information (20%)</v-expansion-panel-header
          >
          <v-expansion-panel-content>
            <p>a. initial goals written out, so what you want to accomplish</p>
            <p>
              b. milestones met and milestones not met, you should write out why
              anything was not met, for milestones met you need to provide
              lessons learned meaning what did you takeaway from accomplishing
              the milestone
            </p>
            <p>
              c. post mortem, if I had to do it all over again this is what I
              would do differently
            </p>
            <p>
              d. user guide for the website explaining features and how to use
              the different sections
            </p>

            <p>Just putting all this here for now -Dakota</p>
          </v-expansion-panel-content>
        </v-expansion-panel>
      </v-expansion-panels>
    </v-card>
  </v-container>
</template>
<script>
export default {
  name: 'AboutPage',
}
</script>
