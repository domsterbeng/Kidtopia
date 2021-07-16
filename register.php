<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
  <link href="https://unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/vue"></script>
  <script src=" https://unpkg.com/vue/dist/vue.js"></script>
  <script src=" https://unpkg.com/vuetify/dist/vuetify.min.js"></script>
  <link rel="stylesheet" href="css/register.css">
</head>


<body>
  <div id="app">
    <v-app id="inspire">
      <v-container fluid class="pa-0">


        <v-parallax src="" height="820" class="gradientBkg" jumbotro>

          <ul class="bg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
          <v-layout row align-center justify-center>
            <!--container that hold the flexbox, size increase as flexbox increase-->

            <v-flex xs10 sm8 md6>

              <v-layout row wrap justify-center>

                <v-flex xs8 text-xs-center>
                  <img src="images/kidtopialogo.png" style="max-width:150px;" />
                </v-flex>


                <v-flex xs10 text-xs-center>
                  <h1 class="display-2" style=" font-family: 'Comfortaa', cursive;  color: white;"><strong>Kidtopia</strong></h1>
                </v-flex>

                <v-flex xs10 text-xs-center class="mt-2">
                  <!--form container-->
                  <v-form method="post" action="signup.php" v-model="valid" ref="form" lazy-validation>
                    <v-layout row wrap justify-center>

                      <v-flex xs10>
                        <v-tooltip right>
                        <v-text-field name="fname" prepend-icon="person" label="Full Name" v-model="fullname" :rules="fullnameRules" slot="activator" required></v-text-field>
                        <span>Enter your real name</span>
                        </v-tooltip>
                      </v-flex>

                      <v-flex xs10>
                        <v-tooltip right>
                        <v-text-field name="username" prepend-icon="face" label="Username" v-model="name" :rules="nameRules" slot="activator" :counter="10" required></v-text-field>
                        <span>Enter a nickname for your virtual account</span>
                        </v-tooltip>
                      </v-flex>

                      <v-flex xs10>
                          <v-tooltip right>
                        <v-text-field name="useremail" prepend-icon="email" label="E-mail" v-model="email" :rules="emailRules" slot="activator" required></v-text-field>
                        <span>Enter a valid email.</span>
                          </v-tooltip>
                      </v-flex>

                      <v-flex xs10>
                        <v-tooltip right>
                        <v-text-field name="userphone" prepend-icon="phone" label="Contact Number" v-model="contact" :rules="contactRules" slot="activator" required></v-text-field>
                        <span>Enter your phone number</span>
                        </v-tooltip>
                      </v-flex>

                      <v-flex xs10>
                        <v-tooltip right>
                        <v-text-field slot="activator" name="password" prepend-icon="lock" label="Password" v-model="password" :rules="passwordRules" :append-icon="e2 ? 'visibility' : 'visibility_off'" :append-icon-cb="() => (e2 = !e2)" :type="e2 ? 'text' : 'password'" required></v-text-field>
                        <span>Enter a password. Click on the eye icon to unlock visibility</span>
                        </v-tooltip>
                      </v-flex>

                      &nbsp;
                      <v-flex xs10>
                        <v-menu ref="menu" lazy :close-on-content-click="false" v-model="menu" transition="scale-transition" offset-y full-width :nudge-right="40" min-width="290px">
                          <v-text-field name="DOB" slot="activator" label="Date of Birth" v-model="date" :rules="DOBrules" prepend-icon="event"></v-text-field>
                          <v-date-picker ref="picker" v-model="date" @change="save" min="1950-01-01" :max="new Date().toISOString().substr(0, 10)"></v-date-picker>
                        </v-menu>
                      </v-flex>


                      <v-flex xs10>
                        <v-tooltip right>
                        <v-text-field name="country" prepend-icon="flag" label="Country Name" v-model="Country"slot="activator" :rules="countryRules" required></v-text-field>
                        <span>Enter your current located country</span>
                        </v-tooltip>
                      </v-flex>



                      <v-flex xs8>
                        <v-btn type="submit" name="signup" @click="submit" :disabled="!valid">
                          Sign up
                        </v-btn>




                        <v-btn @click="clear">clear</v-btn>
                        <v-btn href="index.php">Back</v-btn>
                      </v-flex>
                  </v-form>

                  </v-layout>


                </v-flex>


              </v-layout>


            </v-flex>

          </v-layout>

        </v-parallax>

      </v-container>



    </v-app>

  </div>

  <script>
    new Vue({
      el: '#app',



      data: () => ({

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
          v => (v && v.length <= 10) || 'Name must be less than or equal to 10 characters'
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

      }),





      methods: {
        submit() {
          if (this.$refs.form.validate()) {
            // Native form submission is not yet supported
            axios.post('/api/submit', {

              name: this.name,
              password: this.password,


            })
          }
        },
        clear() {
          this.$refs.form.reset()
        }
      }
    })
  </script>



</body>

</html>
