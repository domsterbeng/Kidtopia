<?php
  session_start();
  include "connection.php";
  include "sessions.php";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
  <title>Menu</title>

  <!-- Css Links -->
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
  <link href="https://unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/plants2.css">

</head>

<body>
  <div id="app">
    <v-app class="red lighten-3">
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
      <v-toolbar dark class="red lighten-1">
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

      <!-- Notes menu -->
      <div class="mt-5">
        <v-container  grid-list-xl>
          <v-layout row wrap>
            <v-flex xs12>
              <h1 class="mb-4">Select What You Would Like To Do :</h1>
              <v-card class="grey lighten-2">
                <v-card-title style="font-size: 28px; font-weight: 500; ">Notes : </v-card-title>
                <v-container fluid grid-list-xl>
                  <v-layout row wrap>
                    <v-flex xs12 sm4  v-for="item in noteItems" :key="item.title">
                      <v-card  class="text-xs-center white--text">
                        <v-card-media :src="item.image" height="180px"></v-card-media>
                        <v-card-text :class="item.bgcolor" style="font-size: 30px; padding-bottom: 4px; padding-top: 8px;">{{ item.title }}
                          <v-container fluid style="padding-bottom: 8px;">
                            <v-layout row wrap :class="item.bgcolor">
                              <v-flex xs12 sm6>
                                <v-btn dark :color="item.btncolor" v-bind:href="item.btnlink" block style="height: 35px; font-size: 24px; font-weight: 400; margin-top:0;">7 - 9</v-btn>
                              </v-flex>
                              <v-flex xs12 sm6>
                                <v-btn dark :color="item.btncolor" v-bind:href="item.btnlink2" block style="height: 35px; font-size: 24px; font-weight: 400; margin-top:0;">10 - 12</v-btn>
                              </v-flex>
                            </v-layout>
                          </v-container>
                        </v-card-text>
                      </v-card>
                    </v-flex>
                  </v-layout>
                </v-container>
              </v-card>
            </v-flex>
          </v-layout>
        </v-container>
      </div>
      <!-- Quiz menu -->
      <div class="mb-5">
        <v-container  grid-list-xl>
          <v-layout row wrap>
            <v-flex xs12>
              <v-card class="grey lighten-2">
                <v-card-title style="font-size: 28px; font-weight: 500; ">Quiz : </v-card-title>
                <v-container fluid grid-list-xl>
                  <v-layout row wrap>
                    <v-flex xs12 sm4  v-for="item in quizItems" :key="item.title">
                      <v-card  class="text-xs-center white--text">
                        <v-card-media :src="item.image" height="180px"></v-card-media>
                        <v-card-text :class="item.bgcolor" style="font-size: 30px; padding-bottom: 4px; padding-top: 8px;">{{ item.title }}
                          <v-container fluid style="padding-bottom: 8px;">
                            <v-layout row wrap :class="item.bgcolor">
                              <v-flex xs12 sm6>
                                <v-btn dark :color="item.btncolor" v-bind:href="item.btnlink" block style="height: 35px; font-size: 24px; font-weight: 400; margin-top:0;">7 - 9</v-btn>
                              </v-flex>
                              <v-flex xs12 sm6>
                                <v-btn dark :color="item.btncolor" v-bind:href="item.btnlink2" block style="height: 35px; font-size: 24px; font-weight: 400; margin-top:0;">10 - 12</v-btn>
                              </v-flex>
                            </v-layout>
                          </v-container>
                        </v-card-text>
                      </v-card>
                    </v-flex>
                  </v-layout>
                </v-container>
              </v-card>
            </v-flex>
          </v-layout>
        </v-container>
      </div>

      <footer id="main-footer" class="grid red lighten-1" style="padding: 1em; background: #B53471;color: #fff;text-align: center;">
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
        menuItems: [
          { title: 'Notes', icon: 'library_books', link: 'menu.php' },
          { title: 'Quiz', icon: 'question_answer', link: 'menu.php' },
          { title: 'Contact Us', icon: 'info', link: 'contactus.php' },
          { title: 'Profile', icon: 'account_box', link: 'profile.php' },
          { title: 'LogOut', icon: 'lock_open', link: 'logout.php' }
        ],
        noteItems: [
          { title: 'Plants', bgcolor: 'teal accent-4', image: 'images/cuteplant.jpg', btncolor: 'deep-purple lighten-1', btnlink: "plants_notes.php", btnlink2: "plants_notes_2.php" },
          { title: 'Weathers', bgcolor: 'blue darken-2', image: 'images/cuteweather.jpg', btncolor: 'red darken-1', btnlink: "weathernote.php", btnlink2: "weathernote2.php" },
          { title: 'Space', bgcolor: 'blue-grey darken-1', image: 'images/cutespace.jpg', btncolor: 'yellow darken-3', btnlink: "solar1.php", btnlink2: "solar2.php" },
          { title: 'Dinosaur', bgcolor: 'orange darken-3', image: 'images/cutedinosaur.jpg', btncolor: 'brown darken-1', btnlink: "dino_page.php", btnlink2: "dino2_page.php" },
        ],
        quizItems: [
          { title: 'Plants', bgcolor: 'deep-purple lighten-1', image: 'images/plantsquiz.jpg', btncolor: 'teal accent-4', btnlink: "quiz.php?id=1", btnlink2: "quiz.php?id=2" },
          { title: 'Weathers', bgcolor: 'light-blue darken-1', image: 'images/weatherquiz.jpg', btncolor: 'yellow darken-3', btnlink: "quiz.php?id=8", btnlink2: "quiz.php?id=9" },
          { title: 'Space', bgcolor: 'indigo darken-1', image: 'images/spacequiz.jpg', btncolor: 'pink darken-1', btnlink: "quiz.php?id=6", btnlink2: "quiz.php?id=7" },
          { title: 'Dinosaur', bgcolor: 'green darken-1', image: 'images/dinosaurquiz.jpg', btncolor: 'orange darken-3', btnlink: "quiz.php?id=3", btnlink2: "quiz.php?id=4" },
        ],

      },

    })

  </script>

</body>

</html>
