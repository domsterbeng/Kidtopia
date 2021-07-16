<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
  <title>Solar2</title>

  <!-- Css Links -->
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
  <link href="https://unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/solar2.css">

</head>

<body>
  <div id="app">
    <v-app class="red accent-2">
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
      <v-toolbar dark class="red accent-3">
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

      <!--Breacrumbs-->
      <v-breadcrumbs class="ml-3 mt-3">
        <v-icon slot="divider">chevron_right</v-icon>
        <v-breadcrumbs-item v-for="items in breadItems" :key="items.title" :disabled="items.disabled" class="title" v-bind:href="items.link">{{ items.title }}</v-breadcrumbs-item>
      </v-breadcrumbs>
      <!-- Strucute of the plant -->

      <!--Plant Notes -->
      <div class="plant_note">
        <v-container fluid grid-list-xl>
          <v-layout row wrap>

            <v-flex xs12><!-- rectangle starts here-->
              <v-card hover class="red lighten-5">
                <v-card-title style="font-size: 28px; font-weight: 500;">The Galaxy<img src="images/ufo.png" height="65px" class="ml-3"/></v-card-title>
                <v-container fluid grid-list-lg>
                  <v-layout row wrap>
                    <v-flex xs6>
                      <v-card-media src="images/asteroid.gif" height="400px" contain></v-card-media>
                      <v-card-text>
                        <div>
                          <h3 class="text-xs-center mb-3">What is an asteroid?</h3>
                          <p style="font-size: 18px;">An asteroid is a chunk of rock and metal in outer space that is in orbit around the Sun. Asteroids vary in size from just a few feet across to hundreds of miles in diameter. Most asteroids are not round, but are lumpy and shaped like a potato. As they orbit the Sun, they tumble and spin. </p>
                        </div>
                      </v-card-text>
                    </v-flex>
                    <v-flex xs6>
                      <v-card-media src="images/eclipse.gif" height="400px" contain></v-card-media>
                      <v-card-text>
                        <div>
                          <h3 class="text-xs-center mb-3">What is an eclipse?</h3>
                          <p style="font-size: 18px;">An eclipse occurs when one object in space blocks an observer from seeing another object in space. From Earth there are two main types of eclipses: solar eclipses and lunar eclipses. </p>
                        </div>
                      </v-card-text>
                    </v-flex>

                    <v-flex xs6>
                      <v-card-media src="images/meteor.gif" height="400px" contain></v-card-media>
                      <v-card-text>
                        <div>
                          <h3 class="text-xs-center mb-3">What is a star?</h3>
                          <p style="font-size: 18px;">Stars are giant spheres of superhot gas made up mostly of hydrogen and helium. Stars get so hot by burning hydrogen into helium in a process called nuclear fusion. This is what makes them so hot and bright. Our Sun is a star. </p>
                        </div>
                      </v-card-text>
                    </v-flex>

                    <v-flex xs6>
                      <v-card-media src="images/star.gif" height="400px" contain></v-card-media>
                      <v-card-text>
                        <div>
                          <h3 class="text-xs-center mb-3">What is a meteor?</h3>
                          <p style="font-size: 18px;">Comets are lumps of ice, dust, and rock that orbit the Sun. The typical comet has a core that is a few kilometers in diameter. Comets are often called the "dirty snowballs" of the Solar System.</p>
                        </div>
                      </v-card-text>
                    </v-flex>

                  </v-layout>
                </v-container>
              </v-card>
            </v-flex><!--ends here-->


            <v-flex xs12><!-- rectangle2 starts here-->
              <v-card hover class="red accent-1">
                <v-card-title style="font-size: 28px; font-weight: 500;">Wanna be a young Scientist?<img src="images/mt.png" height="65px" class="ml-3"/></v-card-title>
                <v-container fluid grid-list-lg>
                  <v-layout row wrap>


                  <v-flex xs12>
                    <v-card hover class="white">
                      <v-container fluid grid-list-xl>
                        <v-layout row wrap>
                          <v-flex xs9>
                            <div>
                              <h3 class="headline red--text mb-2" style="font-weight: 500;" >A telescope!</h3>
                              <p style="font-size: 18px;">A telescope is an instrument used to see objects that are far away. Telescopes are often used to view the planets and stars. Some of the same optical technology that is used in telescopes is also used to make binoculars and cameras.</p>
                            </div>
                          </v-flex>
                          <v-flex xs3>
                            <v-card-media src="images/telescope.gif" height="200px" width="200px" contain></v-card-media>
                          </v-flex>
                        </v-layout>
                      </v-container>
                    </v-card>
                  </v-flex>

                  <v-flex xs12>
                    <v-card hover class="grey lighten-3">
                      <v-container fluid grid-list-xl>
                        <v-layout row wrap>
                          <v-flex xs3>
                            <v-card-media src="images/astronout.gif" height="200px" width="200px" contain></v-card-media>
                          </v-flex>
                          <v-flex xs9>
                            <div>
                              <h3 class="headline red--text mb-2" style="font-weight: 500;" >An astronout!</h3>
                              <p style="font-size: 18px;">An astronaut is a person who is specially trained to travel into outer space. Astronauts aboard a spacecraft may have different responsibilities. Typically there is a commander who leads the mission and a pilot. Other positions may include flight engineer, payload commander, mission specialist, and science pilot.</p>
                            </div>
                          </v-flex>
                        </v-layout>
                      </v-container>
                    </v-card>
                  </v-flex>

                  <v-flex xs12>
                    <v-card hover class="grey lighten-3">
                      <v-container fluid grid-list-xl>
                        <v-layout row wrap>
                          <v-flex xs9>
                            <div>
                              <h3 class="headline red--text mb-2" style="font-weight: 500;" >A rocket!</h3>
                              <p style="font-size: 18px;">Like most engines, rockets burn fuel. Most rocket engines turn the fuel into hot gas. The engine pushes the gas out its back. The gas makes the rocket move forward.</p>
                            </div>
                          </v-flex>
                          <v-flex xs3>
                            <v-card-media src="images/rocket.gif" height="200px" width="200px" contain></v-card-media>
                          </v-flex>
                        </v-layout>
                      </v-container>
                    </v-card>
                  </v-flex>

                  <v-flex xs12>
                    <v-card hover class="white">
                      <v-container fluid grid-list-xl>
                        <v-layout row wrap>
                          <v-flex xs3>
                            <v-card-media src="images/fly2.gif" height="200px" width="200px" contain></v-card-media>
                          </v-flex>
                          <v-flex xs9>
                            <div>
                              <h3 class="headline red--text mb-2" style="font-weight: 500;" >A robot!</h3>
                              <p style="font-size: 18px;">Sending a robot to space is also much cheaper than sending a human. Robots don’t need to eat or sleep or go to the bathroom. They can survive in space for many years and can be left out there—no need for a return trip!</p>
                            </div>
                          </v-flex>
                        </v-layout>
                      </v-container>
                    </v-card>
                  </v-flex>

                  <v-flex xs12>
                    <v-card hover class="white">
                      <v-container fluid grid-list-xl>
                        <v-layout row wrap>
                          <v-flex xs9>
                            <div>
                              <h3 class="headline red--text mb-2" style="font-weight: 500;" >A space station!</h3>
                              <p style="font-size: 18px;">A space station, also known as an orbital station or an orbital space station, is a spacecraft capable of supporting crewmembers, which is designed to remain in space for an extended period of time and for other spacecraft to dock.</p>
                            </div>
                          </v-flex>
                          <v-flex xs3>
                            <v-card-media src="images/lab.gif" height="200px" width="200px" contain></v-card-media>
                          </v-flex>
                        </v-layout>
                      </v-container>
                    </v-card>
                  </v-flex>

                  </v-layout>
                </v-container>
              </v-card>
            </v-flex><!--ends here-->

            <v-flex xs12 sm5>
              <v-card hover class="red lighten-2">
                <v-card-title>
                  <v-icon>video_library</v-icon>
                  <div class="title ml-2">
                    Here is a video about eclipse:
                  </div>
                </v-card-title>
                <v-card-media height="300px"><iframe width="100%" src="images/eclipse.mp4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></v-card-media>
              </v-card>
            </v-flex>

            <v-flex xs12 sm7>
              <v-layout row wrap>
                <v-flex xs12>
                  <v-card hover class="green lighten-5">
                    <v-card-title>
                      <div>
                        <div class="headline mb-3" style="font-weight: 500;" >Nuclear Energy</div>
                        <p style="font-size: 18px;">Nuclear energy is the energy stored inside an atom by the forces that hold together the nucleus of the atom. Scientists have learned how to capture large amounts of energy from these forces that can then be used to generate electricity. </p>
                      </div>
                    </v-card-title>

                    <v-card-title>
                      <div>
                        <div class="headline mb-3" style="font-weight: 500;" >Radioactive Waste</div>
                        <p style="font-size: 18px;">One of the byproducts of nuclear energy is radioactive waste. This is leftover material from the nuclear reaction. Radioactive material can be dangerous to humans and animal life.</p>
                      </div>
                    </v-card-title>
                  </v-card>
              </v-flex>
              </v-layout>
            </v-flex>





            <hr class="lineStyle mt-4 mb-1">
            <v-flex xs12>
              <h1 class="mb-3">Try some other Topics : </h1>
              <v-card class="white--text mb-4 headline" v-for="item in suggestTopics" :key="item.title" >
                <v-card-media :src="item.image" height="70px">
                  <v-card-title>{{ item.title }}</v-card-title>
                  <v-spacer></v-spacer>
                  <v-btn fab dark :color="item.btncolor" class="mt-2 mr-4" v-bind:href="item.btnlink">
                    <v-icon dark>chevron_right</v-icon>
                  </v-btn>
                </v-card-media>
              </v-card>
            </v-flex>
          </v-layout>
        </v-container>
      </div>

      <footer id="main-footer" class="grid red accent-3" style="padding: 1em; background: #B53471;color: #fff;text-align: center;">
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
          { title: 'About Us', icon: 'info', link: 'about.php' },
          { title: 'Profile', icon: 'account_box', link: 'profile.php' }
        ],
        breadItems: [
          { title: 'Notes (Age 10 - 12)', disabled: false, link: 'notes.php'},
          { title: 'Planets', disabled: true}
        ],

        suggestTopics: [
          {  title: 'Find out interesting facts about plants', image: 'images/plant.jpg', btncolor: 'green', btnlink: 'plants_notes_2.php' },
          {  title: 'Want To Know About Dinosaur?', image: 'images/dinosaur.jpg', btncolor: 'orange', btnlink: 'dino2_page.php' },
          {  title: 'How do Weathers Form?', image: 'images/weather.jpg', btncolor: 'blue', btnlink: 'weathernote2.php' },
        ],

      }

    })

  </script>

</body>

</html>
