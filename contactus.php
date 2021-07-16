<?php
  session_start();
  include "connection.php";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
  <title>Contact Us</title>

  <!-- Css Links -->
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
  <link href="https://unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/plants2.css">

</head>

<body>
  <div id="app">
    <v-app class="teal lighten-3">
      <v-navigation-drawer absolute temporary v-model="sideNav">
        <v-list>
          <v-list-tile @click="" v-for="item in menuItems" :key="item.title" v-bind:href="item.link">
            <v-list-tile-action>
              <v-icon>{{ item.icon }}</v-icon>
            </v-list-tile-action>
            <v-list-content>
              <v-list-tile-title>{{ item.title }}</v-list-tile-title>
            </v-list-content>
          </v-list-tile>
        </v-list>
      </v-navigation-drawer>
      <!-- Top Nav -->
      <v-toolbar dark class="teal lighten-1">
        <v-toolbar-side-icon @click.stop="sideNav = !sideNav" class="hidden-sm-and-up"></v-toolbar-side-icon>
        <v-toolbar-title class="ml-4">
          <a href="index.php" class="white--text">Kidtopia</a>
        </v-toolbar-title>
        <v-spacer></v-spacer>
        <v-toolbar-items class="hidden-xs-only">
          <v-btn flat v-for="item in menuItems" :key="item.title" class="mr-2" v-bind:href="item.link" >
            <v-icon left>{{ item.icon }}</v-icon>
            {{ item.title }}
          </v-btn>
        </v-toolbar-items>
      </v-toolbar>

      <div class="contact_us mt-5">
        <v-container fluid grid-list-lg>
          <v-layout row wrap>
            <!-- About us Section -->
            <v-flex xs12 sm4>
                <v-card class="teal lighten-1 white--text">
                <v-card-title>
                  <h1>A Little Intro of Kidtopia</h1>
                </v-card-title>
                <v-card-text>
                  <p style="font-size: 18px;">Kidtopia is a free of charge active learning website. The purpose of our website is to educated the younger children via the internet. We also want to prove that the internet could be way more useful than what people think. Its all about how the internet is used.</p>
                  <v-card-media src="images/cartoon_programer.jpg" height="300px" class="mt-5 mb-5"></v-card-media>
                </v-card-text>
              </v-card>
            </v-flex>
            <!-- Contact Section -->
            <v-flex xs12 sm8>
              <v-card class="teal lighten-1 white--text" dark>
                <v-card-title>
                  <h1>Our Contact Information</h1>
                </v-card-title>
                <v-layout row wrap>
                  <v-flex xs12 sm7>
                    <v-card-text>
                      <div style="font-size: 18px;">
                        <p class="ml-3"><v-icon right class="mr-2">location_on</v-icon>Adress :</p>
                        <p class="ml-3">1 Canal Street, <br> New Orleans, <br> United States Of America.</p>
                        <iframe class="ml-3 ma-2" width="450px" height="360px" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJZYIRslSkIIYRtNMiXuhbBts&key=AIzaSyAxhES_DZt4CdC-rul0moBiS0r-YOydNdY" allowfullscreen></iframe>
                      </div>
                    </v-card-text>
                  </v-flex>
                  <v-flex xs12 sm5>
                    <v-card-text>
                      <div style="font-size: 18px;">
                        <p  class="mb-4"><v-icon class="mr-2">phone</v-icon>Phone :  012-9798540</p>
                        <p class="mb-4"><v-icon class="mr-2">print</v-icon>Fax :  012-9798540</p>
                        <p class="mb-4"><v-icon class="mr-2">email</v-icon>Email :  kidtopia@gmail.com</p>
                      </div>
                    </v-card-text>
                  </v-flex>
                </v-layout>
              </v-card>
            </v-flex>
          </v-layout>
        </v-container>
        <!-- Feedback Section -->
        <v-container fluid grid-list-xs>
          <v-layout row>
            <v-flex xs12>
              <v-card>
                <v-parallax src="images/contactus_bg.jpg">
                  <div class="white--text pt-5 mt-2">
                    <h1 class="text-xs-center">Send Us Your Feedback</h1>
                  </div>
                  <v-form v-model="valid" ref="form" method="post" action="sendFeedback.php">
                    <v-container fluid grid-list-xl>
                      <v-layout row wrap style="margin-left: 19%">
                          <v-flex xs12 sm4>
                            <v-text-field box label="Name" name="nameInput" v-model="name" :rules="nameRules" required></v-text-field>
                            <v-text-field box label="Email" name="emailInput" v-model="email" :rules="emailRules" required></v-text-field>
                            <v-text-field box label="Subject" name="subjectInput" v-model="subject" :rules="subjectRules" :counter="20" required></v-text-field>
                          </v-flex>
                          <v-flex xs12 sm5>
                            <v-text-field multi-line box label="Message" name="messageInput" v-model="message" :rules="messageRules" required></v-text-field>
                            <div style="margin-left: 90px; margin-top: 30px;">
                              <v-btn large class="mr-3" color="success" type="submit">Submit</v-btn>
                              <v-btn @click="clear" large color="warning">Clear</v-btn>
                            </div>
                          </v-flex>
                      </v-layout>
                    </v-container>
                  </v-form>
                </v-parallax>
              </v-card>
            </v-flex>
          </v-layout>
        </v-container>
      </div>

      <footer id="main-footer" class="grid teal lighten-1" style="padding: 1em; background: #B53471;color: #fff;text-align: center;">
        <div>© 2018 Kidtopia Inc.</div>
        <div>All Rights Reserved</div>
      </footer>

    </v-app>
  </div>



  <!-- Javascript Links -->
  <script src="https://unpkg.com/vue/dist/vue.js"></script>
  <script src="https://unpkg.com/vuetify/dist/vuetify.js"></script>

  <script>
    new Vue ({
      el: '#app',
      data: {
        sideNav: false,
        valid: true,
        name: '',
        email: '',
        subject: '',
        message: '',
        nameRules: [
        v => !!v || 'Name is required',
        ],
        emailRules: [
        v => !!v || 'E-mail is required',
        v => /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/.test(v) || 'E-mail must be valid'
        ],
        subjectRules: [
        v => !!v || 'Subject is required',
        v => (v && v.length <= 20) || 'Subject must be less than 20 characters'
        ],
        messageRules: [
        v => !!v || 'Message is required',
        ],
        active: null,
        menuItems: [
          { title: 'Notes', icon: 'library_books', link: 'menu.php' },
          { title: 'Quiz', icon: 'question_answer', link: 'menu.php' },
          { title: 'Contact Us', icon: 'info', link: 'contactus.php' },
          { title: 'Profile', icon: 'account_box', link: 'profile.php' },
          { title: 'LogOut', icon: 'lock_open', link: 'logout.php' }
        ],

      },

      methods: {
        clear () {
          this.$refs.form.reset()
        },
      }

    })

  </script>

</body>

</html>
