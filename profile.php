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

             <form method="post" action="updateprofile.php">
                <v-layout wrap row align-center justify-center>
               <v-flex xs5>
                   <v-text-field name="fname" prepend-icon="person" label="Full Name"  :rules="fullnameRules" value="<?php echo $_SESSION['name']; ?>"></v-text-field>
               </v-flex>

                <v-flex xs5>
                   <v-text-field name="username" prepend-icon="face" label="Username"  :rules="nameRules" value="<?php echo $_SESSION['username']; ?>" disabled></v-text-field>
                 </v-flex>
                   <v-flex xs5>
                   <v-text-field name="useremail" prepend-icon="email" label="E-mail"  :rules="emailRules" Value ="<?php echo $_SESSION['email']; ?>"></v-text-field>
                 </v-flex>

                   <v-flex xs5>
                   <v-text-field name="userphone" prepend-icon="phone" label="Contact Number" :rules="contactRules" value ="<?php echo $_SESSION['contact_number']; ?>">  </v-text-field>
                 </v-flex>
                   <v-flex xs5>
                   <v-text-field name="password" prepend-icon="lock" label="Password" :rules="passwordRules" :append-icon="e2 ? 'visibility' : 'visibility_off'" :append-icon-cb="() => (e2 = !e2)" :type="e2 ? 'text' : 'password'" value="<?php echo $_SESSION['password']; ?>" ></v-text-field>
                 </v-flex>
                  <v-flex xs5>
                    <v-text-field name="roles" prepend-icon="mood" label="Role" value="<?php echo $_SESSION['role']; ?>" disabled></v-text-field>
                  </v-flex >
                    <v-flex xs5>

                        <v-text-field name="DOB" slot="activator" label="Date of Birth"   :rules="DOBrules" prepend-icon="event" value="<?php echo $_SESSION['dob']; ?>" disabled></v-text-field>

                  </v-flex>
                    <v-flex xs5>
                      <v-text-field name="country" prepend-icon="flag" label="Country Name"  value="<?php echo $_SESSION['country']; ?>"  :rules="countryRules"  ></v-text-field>
                        </v-layout>
                      </v-flex>
                      <v-flex xs12>
                        <v-layout wrap row align-center justify-center>
                        <input type="submit" name="update" value="Update Profile" style="padding: 15px 20px; background-color :#263238; border: none; color: white; cursor : pointer; font-size: 18px; margin-bottom: 30px;">
                        <a style="display: block; white-space: no-wrap; margin-left: 10px; background-color: #F44336; color: #fff; text-decoration: none; padding: 15px 20px; font-size: 18px; margin-bottom: 30px;" href="myquiz.php">View My Quiz</a>
                      </v-layout>
                      </v-flex>
                  </form>

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
        fullname: '',
        fullnameRules: [
          v => !!v || 'This field is required',
          v => /^[a-zA-Z]+$/.test(v) || 'Only Alphabets'
        ],
        name: '',
        nameRules: [
          v => !!v || 'Name is required',
          v => (v && v.length <= 10) || 'Name must be less than 10 characters'
        ],
        email: '',
        emailRules: [
          v => !!v || 'Email is required',
          v => /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/.test(v) || 'E-mail must be valid'
        ],

        contact: '',
        contactRules: [
          v => !!v || 'Contact is required',
          v => /^(([0-9]*)|(([0-9]*)\.([0-9]*)))$/.test(v) || 'Only Numeric Number'
        ],





        password: '',
        passwordRules: [
          (v) => !!v || 'Password is required',
        ],


        date: '',
        DOBrules: [
          v => !!v || 'Pick a date',
        ],

        country: '',
        countryRules: [
          v => !!v || 'This field is required',
        ],


        roleRules: [
          v => /^(?:parent|teacher|student)$/i.test(v) || 'Enter one role "Parent", "Teacher" or "Student" only'
        ],






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
            title: 'Profile',
            disabled: false,
            link: 'notes.php'
          },

        ],

      }


    })

  </script>

</body>

</html>
