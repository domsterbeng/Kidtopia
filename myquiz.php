<?php
session_start();
include "sessions.php";
include "connection.php";
 ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <title>Kidtopia</title>

    <!-- Css Links -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
    <link href="https://unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src=" https://unpkg.com/vue/dist/vue.js"></script>
    <script src=" https://unpkg.com/vuetify/dist/vuetify.min.js"></script>
    




  </head>

  <body>
    <div id="app">
      <v-app class="blue-grey lighten-1">
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
        <v-toolbar dark class="blue-grey darken-4">
          <v-toolbar-side-icon @click.stop="sideNav = !sideNav" class="hidden-sm-and-up"></v-toolbar-side-icon>
          <v-toolbar-title class="ml-4">
            <a href="index.php" class="white--text">Kidtopia</a>
          </v-toolbar-title>
          <v-spacer></v-spacer>
          <v-toolbar-items class="hidden-xs-only">
            <v-btn flat v-for="item in menuItems" :key="item.title" class="mr-2" v-bind:href="item.link">
              <v-icon left>{{ item.icon }}</v-icon>
              {{ item.title }}
            </v-btn>
          </v-toolbar-items>
        </v-toolbar>

        <!--Breacrumbs-->
        <v-breadcrumbs class="ml-3 mt-3">
          <v-icon slot="divider">chevron_right</v-icon>
          <v-breadcrumbs-item v-for="items in breadItems" :key="items.title" :disabled="items.disabled" class="title" v-bind:href="items.link">{{ items.title }}</v-breadcrumbs-item>
        </v-breadcrumbs>


        <!--form container-->
        <v-container fluid grid-list-xl class="mb-0">
          <v-flex xs12 primary>
            <v-card>


              <!--container that hold the flexbox, size increase as flexbox increase-->
              <v-flex xs12>

                <div class="table-wrapper">
                  <table class="table">
                    <thead>
                      <tr style="text-align: left;">
                        <th>#</th>
                        <th>Topic</th>
                        <th>Age</th>
                        <th>Total Questions Answered</th>
                        <th>Total Answer Correct</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $userId = $_SESSION['userid'];
                        $q = "SELECT quiz.Topic, quiz.Age, results.* FROM results INNER JOIN quiz ON results.QuizId = quiz.ID WHERE UserId = " . $userId . ";";
                        $query = mysqli_query ($conn, $q);

                        $counter = 0;
                        while($rows = mysqli_fetch_array($query)){
                          $counter++;
                      ?>
                        <tr>
                          <td><?=$counter?></td>
                          <td><?=$rows['Topic']?></td>
                          <td><?=$rows['Age']?></td>
                          <td><?=$rows['TotalAnswered']?></td>
                          <td><?=$rows['TotalCorrect']?></td>
                          <td>
                            <a href="downloadresults.php?id=<?=$rows['ID']?>" class="btn">Download</a>
                          </td>
                        </tr>
                      <?php
                        }
                      ?>
                    </tbody>
                  </table>
                </div>

              </v-flex>


            </v-card>
          </v-flex>
        </v-container>


        <footer id="main-footer" class="grid blue-grey darken-4" style="padding: 1em; background: #B53471;color: #fff;text-align: center;">
          <div>© 2018 Kidtopia Inc.</div>
          <div>All Rights Reserved</div>
        </footer>

      </v-app>
    </div>





    <script>
      new Vue({
        el: '#app',
        data: {
          date: null,
          menu: false,
          e2: false,
          e3: false,
          valid: false,
          sideNav: false,
          menuItems: [{
              title: 'Notes',
              icon: 'library_books',
              link: 'menu.php'
            },
            {
              title: 'Quiz',
              icon: 'question_answer',
              link: 'menu.php'
            },
            {
              title: 'Contact Us',
              icon: 'info',
              link: 'contactus.php'
            },
            {
              title: 'Profile',
              icon: 'account_box',
              link: 'profile.php'
            },
            {
              title: 'LogOut',
              icon: 'lock_open',
              link: 'logout.php'
            }
          ],
          breadItems: [{
              title: 'All My Quiz',
              disabled: false,
              link: 'myquiz.php'
            },

          ],

        }


      })
    </script>

  </body>

  </html>