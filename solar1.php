<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
  <title>Solar1</title>

  <!-- Css Links -->
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
  <link href="https://unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/solar1.css">

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
      <div class="plant_structure mt-3 mb-3">
        <img src="images/planets.png">
        <div class="hoverDetail hidden-xs-only">
          <span class="dot" id="dot1"></span>
          <v-chip color="lime" text-color="white" disabled id="chip1">Pluto</v-chip>
          <v-card width=300px id="card1">
            <v-card-text>
              <p>Pluto’s orbit sometimes brings it closer to the Sun than Neptune.</p>
            </v-card-text>
          </v-card>
        </div>
        <div class="hoverDetail hidden-xs-only">
          <span class="dot" id="dot2"></span>
          <v-chip color="lime" text-color="white" disabled id="chip2">Saturn</v-chip>
          <v-card width=300px id="card2">
            <v-card-text>
              <p>Saturn is the second biggest planet, but it’s also the lightest planet. </p>
            </v-card-text>
          </v-card>
        </div>
        <div class="hoverDetail hidden-xs-only">
          <span class="dot" id="dot3"></span>
          <v-chip color="lime" text-color="white" disabled id="chip3">Mercury</v-chip>
          <v-card width=300px id="card3">
            <v-card-text>
              <p>Mercury takes 59 days to make a rotation but only 88 days to circle the Sun.</p>
            </v-card-text>
          </v-card>
        </div>
        <div class="hoverDetail hidden-xs-only">
          <span class="dot" id="dot4"></span>
          <v-chip color="lime" text-color="white" disabled id="chip4">Sun</v-chip>
          <v-card width=300px id="card4">
            <v-card-text>
              <p>The Sun is a yellow dwarf star at the center of our Solar System.</p>
            </v-card-text>
          </v-card>
        </div>
        <div class="hoverDetail hidden-xs-only">
          <span class="dot" id="dot5"></span>
          <v-chip color="lime" text-color="white" disabled id="chip5">Neptune</v-chip>
          <v-card width=300px id="card5">
            <v-card-text>
              <p>Neptune was discovered in 1846.</p>
            </v-card-text>
          </v-card>
        </div>
        <div class="hoverDetail hidden-xs-only">
          <span class="dot" id="dot6"></span>
          <v-chip color="lime" text-color="white" disabled id="chip6">Earth</v-chip>
          <v-card width=300px id="card6">
            <v-card-text>
              <p>Earth has more exposed water than land.</p>
            </v-card-text>
          </v-card>
        </div>
        <div class="hoverDetail hidden-xs-only">
          <span class="dot" id="dot7"></span>
          <v-chip color="lime" text-color="white" disabled id="chip7">Jupiter</v-chip>
          <v-card width=300px id="card7">
            <v-card-text>
              <p>Jupiter is the largest planet in the solar system.</p>
            </v-card-text>
          </v-card>
        </div>
        <div class="hoverDetail hidden-xs-only">
          <span class="dot" id="dot8"></span>
          <v-chip color="lime" text-color="white" disabled id="chip8">Venus</v-chip>
          <v-card width=300px id="card8">
            <v-card-text>
              <p>Venus is the brightest planet in our sky.</p>
            </v-card-text>
          </v-card>
        </div>
        <div class="hoverDetail hidden-xs-only">
          <span class="dot" id="dot9"></span>
          <v-chip color="lime" text-color="white" disabled id="chip9">Moon</v-chip>
          <v-card width=300px id="card9">
            <v-card-text>
              <p>The Moon is the Earth’s only natural satellite.</p>
            </v-card-text>
          </v-card>
        </div>
        <div class="hoverDetail hidden-xs-only">
          <span class="dot" id="dot10"></span>
          <v-chip color="lime" text-color="white" disabled id="chip10">Uranus</v-chip>
          <v-card width=300px id="card10">
            <v-card-text>
              <p>Uranus has the second most complex set of rings in our solar system.</p>
            </v-card-text>
          </v-card>
        </div>

        <!-- Hidden Expansion Panel -->
        <v-expansion-panel class="hidden-sm-and-up">
          <v-expansion-panel-content v-for="item in expansionParts" :key="item.title">
            <div slot="header" class="title">{{ item.title }}</div>
            <v-card>
              <v-card-text class="subheading">{{ item.description }}</v-card-text>
            </v-card>
          </v-expansion-panel-content>
        </v-expansion-panel>
      </div>
      <!--Plant Notes -->
      <div class="plant_note">
        <v-container fluid grid-list-xl>
          <v-layout row wrap>
            <!-- cards starts here-->
            <v-flex xs12>
              <v-card class="red lighten-4" flat>
                <v-layout row wrap>
                  <v-flex xs7>
                    <div style="font-size: 30px; font-weight: 500;" class="text-xs-right red--text mt-4">Some fun planets!</div>
                    <div class="subheading text-xs-right">(Hover on the pictures to learn about them.)</div>
                  </v-flex>
                  <v-flex xs4>
                    <img src="images/icon.png" height="90px"/>
                  </v-flex>
                </v-layout>
                <v-container fluid grid-list-xl>
                  <v-layout row wrap>
                    <v-flex xs12 sm4 class="card-flip">
                      <v-card class="card-content" hover>
                        <v-card-media src="images/1.png" height="400px" class="front"></v-card-media>
                        <v-card-text class="back yellow darken-3 white--text">
                          <div class="text-xs-center mb-3" style="font-size: 28px; font-weight: 500;">
                            Earth
                          </div>
                          <div style="font-size: 18px;">
                            <ul style="list-style: none;">
                            <li>Moons: 1</li>
                            <li>Mass: 5.97 x 10^24 kg</li>
                            <li>Diameter: 7926 miles</li>
                            <li>Year: 365.3 Days</li>
                            <li>Day: 23 hours and 56 minutes</li>
                            <li>Temperature: -125 to +130 degrees F</li>
                            <li>Distance from the Sun: 3rd planet from the sun, 93 million miles</li>
                            <li>Type of Planet: Terrestrial (has a hard rocky surface)</li>
                            </ul>
                          </div>
                        </v-card-text>
                      </v-card>
                    </v-flex>
                    <v-flex xs12 sm4 class="card-flip">
                      <v-card class="card-content" hover>
                        <v-card-media src="images/2.png" height="400px" class="front"></v-card-media>
                        <v-card-text class="back deep-orange darken-3 white--text">
                          <div class="text-xs-center mb-3" style="font-size: 28px; font-weight: 500;">
                            Mercury
                          </div>
                          <div style="font-size: 18px;">
                            <ul style="list-style: none;">
                              <li>Moons: 0</li>
                              <li>Mass: 5.5% of Earth</li>
                              <li>Diameter: 3031 miles</li>
                              <li>Year: 88 Earth days</li>
                              <li>Day: 58.7 Earth days</li>
                              <li>Temperature: -300 to +800 degrees F</li>
                              <li>Distance from the Sun: 1st planet from the sun, 36 million miles</li>
                              <li>Type of Planet: Terrestrial (has a hard rocky surface)</li>
                            </ul>
                          </div>
                        </v-card-text>
                      </v-card>
                    </v-flex>
                    <v-flex xs12 sm4 class="card-flip">
                      <v-card class="card-content" hover>
                        <v-card-media src="images/3.png" height="400px" class="front"></v-card-media>
                        <v-card-text class="back teal darken-1 white--text">
                          <div class="text-xs-center mb-3" style="font-size: 28px; font-weight: 500;">
                            Sun
                          </div>
                          <div style="font-size: 18px;">
                            <ul style="list-style: none;">
                              <li>Mass: 333 thousand times the mass of Earth</li>
                              <li>Diameter: 109 times the diameter of Earth</li>
                              <li>Temperature: 5,500 degrees C (10,000 degrees F) on the surface</li>
                              <li>Distance from Earth: 150 million kilometers (93 million miles)</li>
                              <li>Age: 4.5 billion years</li>
                            </ul>
                          </div>
                        </v-card-text>
                      </v-card>
                    </v-flex>
                    <v-flex xs12 sm4 class="card-flip">
                      <v-card class="card-content" hover>
                        <v-card-media src="images/4.png" height="400px" class="front"></v-card-media>
                        <v-card-text class="back red darken-1 white--text">
                          <div class="text-xs-center mb-3" style="font-size: 28px; font-weight: 500;">
                            Uranus
                          </div>
                          <div style="font-size: 18px;">
                          <ul style="list-style: none;">
                              <li>Moons: 21 (and growing)</li>
                              <li>Mass: 14.5 times the mass of Earth</li>
                              <li>Diameter: 31,763 miles</li>
                              <li>Year: 83.8 Earth years</li>
                              <li>Day: 17.2 hours</li>
                              <li>Temperature: -280 degrees F
                              <li>Distance from the Sun: 7th planet from the sun, 1.8 billion miles</li>
                              <li>Type of Planet: Ice Giant (gas surface with an interior composed of ices and rock)</li>
                          </ul>
                          </div>
                        </v-card-text>
                      </v-card>
                    </v-flex>
                    <v-flex xs12 sm4 class="card-flip">
                      <v-card class="card-content" hover>
                        <v-card-media src="images/5.png" height="400px" class="front"></v-card-media>
                        <v-card-text class="back lime  darken-1 white--text">
                          <div class="text-xs-center mb-3" style="font-size: 28px; font-weight: 500;">
                            Pluto
                          </div>
                          <div style="font-size: 18px;">
                            <ul style="list-style: none;">
                              <li>Moons: 3 known</li>
                              <li>Mass: .2% of Earth's mass</li>
                              <li>Diameter: 1450 miles</li>
                              <li>Year: 248 Earth years</li>
                              <li>Day: 6.4 Earth days</li>
                              <li>Temperature: -385 degrees F</li>
                              <li>Distance from the Sun: 3 - 5 billion miles from the sun.</li>
                            </ul>
                          </div>
                        </v-card-text>
                      </v-card>
                    </v-flex>
                    <v-flex xs12 sm4 class="card-flip">
                      <v-card class="card-content" hover>
                        <v-card-media src="images/6.png" height="400px" class="front"></v-card-media>
                        <v-card-text class="back pink darken-2 white--text">
                          <div class="text-xs-center mb-3" style="font-size: 28px; font-weight: 500;">
                            Saturn
                          </div>
                          <div style="font-size: 18px;">
                            <ul style="list-style: none;">
                              <li>Moons: 60 (and growing)</li>
                              <li>Mass: 95 times the mass of Earth</li>
                              <li>Diameter: 74,900 miles</li>
                              <li>Year: 29.4 Earth years</li>
                              <li>Day: 10.7 hours</li>
                              <li>Temperature: -215 degrees F</li>
                              <li>Distance from the Sun: 6th planet from the sun, 887 million miles</li>
                              <li>Type of Planet: Gas Giant (composed mostly of hydrogen and helium)</li>
                            </ul>
                          </div>
                        </v-card-text>
                      </v-card>
                    </v-flex>
                  </v-layout>
                </v-container>
              </v-card>
            </v-flex>
            <!--cards ends here-->
            <v-flex xs12><!-- rectangle starts here-->
              <v-card hover class="red lighten-4">
                <v-card-title style="font-size: 28px; font-weight: 500;">The Galaxy  <img src="images/al.png" height="65px" class="ml-3"/></v-card-title>
                <v-container fluid grid-list-lg>
                  <v-layout row wrap>
                    <v-flex xs6>
                      <v-card-media src="images/galaxy.png" class="rotate" height="300px" contain></v-card-media>
                      <v-card-text>
                        <div>
                          <h3 class="text-xs-center mb-3">What is the universe?</h3>
                          <p style="font-size: 18px;">The galaxy contains everything that exists including the Earth, planets, stars, space, and galaxies. This includes all matter, energy, and even time.</p>
                        </div>
                      </v-card-text>
                    </v-flex>
                    <v-flex xs6>
                      <v-card-media src="images/moon.png" class="rotate" height="300px" contain></v-card-media>
                      <v-card-text>
                        <div>
                          <h3 class="text-xs-center mb-3">How big is the universe? </h3>
                          <p style="font-size: 18px;">No one knows for sure just how big the universe is. It could be infinitely large. Scientists, however, measure the size of the universe by what they can see. They call this the "observable universe." The observable universe is around 93 billion light years across.</p>
                        </div>
                      </v-card-text>
                    </v-flex>
                  </v-layout>
                </v-container>
              </v-card>
            </v-flex><!--ends here-->
            <v-flex xs12 sm7>
              <v-layout row wrap>
                <v-flex xs12>
                  <v-card hover class="green lighten-5">
                    <v-card-title>
                      <div>
                        <div class="headline mb-3" style="font-weight: 500;" >Where do we live?</div>
                        <p style="font-size: 18px;">Beautiful Earth, home to plants, animals and humans, is the third planet from the Sun. It’s the fifth largest planet. Some of the other planets have atmospheres, seasons and even water, but only Earth combines all these elements in just the right way.</p>
                      </div>
                    </v-card-title>
                  </v-card>
              </v-flex>
              <v-flex xs12>
                <v-card hover class="red lighten-5">
                  <v-container fluid grid-list-xl>
                    <v-layout row wrap>
                      <v-flex xs9>
                        <div>
                          <h3 class="headline red--text mb-2" style="font-weight: 500;" >Fun Fact!</h3>
                          <p style="font-size: 18px;">The Earth is not an exact sphere; the diameter going round the North and South Poles is slightly less than the diameter round the Equator. </p>
                        </div>
                      </v-flex>
                      <v-flex xs3>
                        <v-card-media src="images/botanist.png" height="150px" width="200px" contain></v-card-media>
                      </v-flex>
                    </v-layout>
                  </v-container>
                </v-card>
              </v-flex>
              </v-layout>
            </v-flex>
            <v-flex xs12 sm5>
              <v-card hover class="red lighten-2">
                <v-card-title>
                  <v-icon>video_library</v-icon>
                  <div class="title ml-2">
                    Here is a video about solar system:
                  </div>
                </v-card-title>
                <v-card-media height="300px"><iframe width="100%" src="images/planets.mp4" frameborder="0" allowfullscreen></iframe></v-card-media>
              </v-card>
            </v-flex>

            <v-flex xs12>
              <v-card hover class="red lighten-2">
                <v-card-title style="font-size: 28px; font-weight: 500;">Interesting Corner!</v-card-title>
                <v-container fluid grid-list-xl>
                  <v-layout row wrap>
                    <v-flex xs12 sm4>
                      <v-card-media src="images/solar.gif" height="300px" contain></v-card-media>
                      <v-card-text>
                        <div>
                          <p style="font-size: 18px;">While we usually think of the Earth’s Moon there are many other moons in the Solar System. As of 2009, there were 336 moons in the Solar System. 168 of these orbit planets, 6 orbit dwarf planets, while the rest orbit asteroids and other Solar System objects (many yet to be classified).</p>
                        </div>
                      </v-card-text>
                    </v-flex>
                    <v-flex xs12 sm4>
                      <v-card-media src="images/spin.gif" height="300px" contain></v-card-media>
                      <v-card-text>
                        <div>
                          <p style="font-size: 18px;">Scientists still have a lot to learn about Jupiter. They know that its atmosphere is similar to that of the Sun – mostly hydrogen and helium. If it was larger, the planet might have become a star. They also know that it has a strong magnetic field, much stronger than the Earth’s. </p>
                        </div>
                      </v-card-text>
                    </v-flex>
                    <v-flex xs12 sm4>
                      <v-card-media src="images/gravity.gif" height="300px" contain></v-card-media>
                      <v-card-text>
                        <div>
                          <p style="font-size: 18px;">Uranus hits the coldest temperatures of any planet. With minimum atmospheric temperature of -224°C Uranus is nearly coldest planet in the solar system. While Neptune doesn’t get as cold as Uranus it is on average colder. </p>
                        </div>
                      </v-card-text>
                    </v-flex>
                  </v-layout>
                </v-container>
              </v-card>
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
          { title: 'Notes (Age 7 - 9)', disabled: false, link: 'notes.php'},
          { title: 'Planets', disabled: true}
        ],
        expansionParts: [
          { title: 'Pluto', description: 'Pluto’s orbit sometimes brings it closer to the Sun than Neptune.'},
          { title: 'Saturn', description: 'Saturn is the second biggest planet, but it’s also the lightest planet.'},
          { title: 'Mercury', description: 'Mercury takes 59 days to make a rotation but only 88 days to circle the Sun. '},
          { title: 'Sun', description: 'The Sun is a yellow dwarf star at the center of our Solar System.'},
          { title: 'Neptune', description: 'Neptune was discovered in 1846.'},
          { title: 'Earth', description: ' Earth has more exposed water than land.'},
          { title: 'Venus', description: 'Venus is the brightest planet in our sky.'},
          { title: 'Moon', description: 'The Moon is the Earth’s only natural satellite.'},
          { title: 'Uranus', description: 'Uranus has the second most complex set of rings in our solar system.'},
          { title: 'Jupiter', description: 'Jupiter is the largest planet in the solar system.'},
        ],
        suggestTopics: [
          {  title: 'Find out interesting facts about plants', image: 'images/plant.jpg', btncolor: 'green', btnlink: 'plants_notes.php' },
          {  title: 'Want To Know About Dinosaur?', image: 'images/dinosaur.jpg', btncolor: 'orange', btnlink: 'dino_page.php' },
          {  title: 'How do Weathers Form?', image: 'images/weather.jpg', btncolor: 'blue', btnlink: 'weathernote.php' },
        ],

      }

    })

  </script>

</body>

</html>
