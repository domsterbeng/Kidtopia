<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
  <title>Plants</title>

  <!-- Css Links -->
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
  <link href="https://unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/plants2.css">

</head>

<body>
  <div id="app">
    <v-app class="blue lighten-4">
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
      <v-toolbar dark class="blue lighten-1">
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

      <!--Plant Notes -->
      <div class="plant_notes">
        <v-container fluid grid-list-xl>
          <v-layout row wrap>
            <v-flex xs12>
              <v-card hover class="green lighten-5">
                <v-card-title>
                  <div>
                    <div class="mb-3"  style="font-size: 28px; font-weight: 500;">
                      Introduction to Plants
                    </div>
                    <p style="font-size: 18px;"> Plants are living organisms such as trees, herbs, grasses, ferns, mosses, and flowers. They provide us with food materials, wood and also convert carbon monoxide into oxygen. We couldn't live without plants as they make air fit for us to breathe. Plant plays a very important role in our life and its important for us to grow them.</p>
                  </div>
                </v-card-title>
              </v-card>
            </v-flex>
            <v-flex xs12 class="mt-2 mb-2">
              <v-card hover class="green lighten-5">
                <v-layout row wrap>
                  <v-flex xs12 sm5>
                    <v-card-title>
                      <div>
                        <div class="mb-3"  style="font-size: 28px; font-weight: 500;">
                          Photosynthesis
                        </div>
                        <p style="font-size: 18px;">
                          Food-making process for plants is called Photosynthesis. Inside leaves are millions of tiny structures called chloroplasts. They are the plant's "food factories" where sunlight joins carbon dioxide and water together. This process produces glucose and sucrose which are food for plants.
                        </p>
                      </div>
                    </v-card-title>
                    <div class="chloroplast">
                      <v-card-media src="images/chloroplasts.jpg" height="200px"></v-card-media>
                      <h3 class="text-xs-center">Chloroplasts inside a leaf</h3>
                      <div class="chlorophyll">
                        <div class="chlorophyll_line"></div>
                        <p><b>Chloroplasts contains</b> chlorophyll, a green color that traps in the sunlight.</p>
                      </div>
                    </div>
                  </v-flex>
                  <v-flex xs12 sm7>
                    <div class="sunflower">
                      <v-card-media src="images/sunflower2.png" height="500px" contain></v-card-media>
                      <div class="arrow-out"><img src="images/arrow.png" height="100px" /></div>
                      <div class="arrow-in"><img src="images/arrow.png" height="100px" /></div>
                      <div class="co2">
                        <div class="co2-line"></div>
                        <p><b>Carbon Dioxide enters</b> the leaves through stomata which is located under the leaves.</p>
                      </div>
                      <div class="glucose">
                        <div class="glucose-line"></div>
                        <p><b>Glucose is made and</b> stored in the leaves. Sucrose is carried from leaves to feed the whole plant.</p>
                      </div>
                      <div class="o2">
                        <div class="o2-line"></div>
                        <p><b>Oxygen escapes through</b> the stomata.</p>
                      </div>
                      <div class="sunlight">
                        <div class="sunlight-line"></div>
                        <p><b>Leaves capture sunlight</b> energy through the action of chloroplasts.</p>
                      </div>
                    </div>
                  </v-flex>
                </v-layout>
              </v-card>
            </v-flex>
            <v-flex xs12 sm5>
              <v-card hover class="green lighten-5">
                <v-card-title>
                  <v-icon>video_library</v-icon>
                  <div class="title ml-2">
                    Watch this video on how plants transport food :
                  </div>
                </v-card-title>
                <v-card-media height="420px"><video src="images/transportation.mp4" width="100%" controls poster="images/transportationposter.jpg"></video></v-card-media>
              </v-card>
            </v-flex>
            <v-flex xs12 sm7>
              <v-layout row wrap>
                <v-flex xs12>
                  <v-card hover class="green lighten-5">
                    <v-card-title>
                      <div>
                        <h3 class="mb-2"  style="font-size: 28px; font-weight: 500;">
                          Transportation of Food
                        </h3>
                        <p style="font-size: 18px;">To grow, plant must move food and water to all of it's parts and this could be done with the help of xylem and phloem.
                          <br>
                          <br>
                          - <b>Phloem</b> carries food and xylem carries water and minerals.
                          <br>
                          <br>
                          - <b>Xylem and phloem</b> are called vascular tissues.</p>
                      </div>
                    </v-card-title>
                  </v-card>
                </v-flex>
                <v-flex xs12>
                  <v-card  hover class="red lighten-5">
                    <v-container fluid grid-list-xl>
                      <v-layout row wrap>
                        <v-flex xs9>
                          <div>
                            <h3 class="headline red--text mb-2" style="font-weight: 500;">Bottle Trees</h3>
                            <p style="font-size: 18px;">The <b>Baobab tree</b> is found in Africa, India and Australia. Its trunk holds water the same way as a sponge. Its called bottle tree because its shaped like a bottle. </p>
                          </div>
                        </v-flex>
                        <v-flex xs3>
                          <v-card-media src="images/bottletree.jpg" height="150px" contain></v-card-media>
                        </v-flex>
                      </v-layout>
                    </v-container>
                  </v-card>
                </v-flex>
              </v-layout>
            </v-flex>
            <div class="reproduction_plant mt-3 mb-3">
              <v-flex xs12>
                <v-card class="blue lighten-4" flat>
                  <h3 class="text-xs-center pt-2" style="font-size: 28px; font-weight: 500;"><u>Reproduction of Plants</u></h3>
                </v-card>
              </v-flex>
              <img src="images/plant_reproduction.png">
              <div class="hoverDetail hidden-xs-only" v-for="items in reproductionParts" :key="items.name" style="height: 0px;">
                <span class="dot" :id="items.dotid"></span>
                <v-chip color="red" text-color="white" disabled :id="items.chipid">{{ items.name }}</v-chip>
                <v-card width=300px :id="items.cardid">
                  <v-card-text>
                    <p>{{ items.description }}</p>
                  </v-card-text>
                </v-card>
              </div>
              <!-- Hidden Expansion Panel -->
              <v-expansion-panel class="hidden-sm-and-up">
                <v-expansion-panel-content v-for="items in reproductionParts" :key="items.name">
                  <div slot="header" class="title">{{ items.name }}</div>
                  <v-card>
                    <v-card-text class="subheading">{{ items.description }}</v-card-text>
                  </v-card>
                </v-expansion-panel-content>
              </v-expansion-panel>
            </div>
            <v-flex xs12>
              <v-card hover class="green lighten-5">
                <v-card-text style="font-size: 18px;">
                  <b>Flowers</b> play an important role in sexual reproduction of plants. Flowers produce male and female sex cells. These cells will meet through a process called pollination. Below contains 3 Phases (<i>Click on them</i>) that displays the reproduction process:
                </v-card-text>
                <v-container fluid grid-list-xl>
                  <v-layout row wrap>
                    <v-flex xs12 sm8>
                      <div>
                        <v-tabs color="pink darken-1" dark centered slider-color="yellow"  v-model="active">
                          <v-tab  v-for="n in 3":key="n">Phase {{ n }}</v-tab>
                          <v-tab-item v-for="items in phases" :key="items.description">
                            <v-card>
                              <v-card-media :src="items.image" height="200px" contain></v-card-media>
                              <v-card-text style="font-size: 18px;">{{ items.description }}</v-card-text>
                            </v-card>
                          </v-tab-item>
                        </v-tabs>
                      </div>
                    </v-flex>
                    <v-flex xs12 sm4>
                      <v-card-text style="font-size: 18px;">
                        <b>After fertilisation</b>, the female parts of the flower develop into a fruit:
                        <br><br>
                        - the <b>ovule</b> becomes seeds.
                        <br><br>
                        - the <b>ovary</b> wall becomes the rest of the fruit.
                      </v-card-text>
                    </v-flex>
                  </v-layout>
                </v-container>
              </v-card>
            </v-flex>
            <v-flex xs12>
              <v-card class="green lighten-5" hover>
                <v-card-title class="mb-2" style="font-size: 28px; font-weight: 500;">Structure of a Seed</v-card-title>
                <v-container fluid grid-list-xl>
                  <v-layout row wrap>
                    <v-flex xs12 sm4>
                      <v-card-media src="images/seed.jpg" height="200px" contain></v-card-media>
                    </v-flex>
                    <v-flex xs12 sm8>
                      <div style="font-size: 18px;">
                        <p>The Figure on the left displays the structure of a plant's seed. Below are the details of each part of the seed:
                          <br><br>
                          <b>Embryo</b> - This is the tiny plant inside the seed which will develop into the adult plant. It consists of the young root and shoot of the plant.
                          <br><br>
                          <b>Food Store</b> - These are food stored by the parent plant. Young plant uses this stored food until it is large enough to make its own food by the process of photosynthesis.
                          <br><br>
                          <b>Seed Coat</b> - This is the hard protective outer covering around the embryo and the food store in which it is used to protect.
                        </p>
                      </div>
                    </v-flex>
                  </v-layout>
                </v-container>
              </v-card>
            </v-flex>
            <v-flex xs12>
              <v-card class="blue lighten-4" flat>
                <div style="font-size: 30px; font-weight: 500;" class="text-xs-center mt-4"><u>Germination Of A Seed</u></div>
                <v-container fluid grid-list-xl>
                  <v-layout row wrap>
                    <v-flex xs12 sm4  v-for="item in germinationStep" :key="item.image">
                      <v-card class="green lighten-5 mb-4">
                        <img :src="item.image" height="250px" width="150px" style="margin-left: 150px;" class="pa-2 mt-4">
                        <v-card-text style="font-size: 18px;">{{ item.description }}</v-card-text>
                        <img class="hidden-xs-only" :id="item.arrowid" src="images/arrow.png" height="100px" style="position: absolute;">
                      </v-card>
                    </v-flex>
                  </v-layout>
                </v-container>
              </v-card>
            </v-flex>

            <hr class="lineStyle mb-1">

            <!-- Topic suggestions -->
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

      <footer id="main-footer" class="grid blue lighten-1" style="padding: 1em; background: #B53471;color: #fff;text-align: center;">
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
        active: null,
        menuItems: [
          { title: 'Notes', icon: 'library_books', link: 'menu.php' },
          { title: 'Quiz', icon: 'question_answer', link: 'menu.php' },
          { title: 'Contact Us', icon: 'info', link: 'contactus.php' },
          { title: 'Profile', icon: 'account_box', link: 'profile.php' },
          { title: 'LogOut', icon: 'lock_open', link: 'logout.php' }
        ],
        breadItems: [
          { title: 'Notes (Age 10 - 12)', disabled: false, link: 'notes.php'},
          { title: 'Plants', disabled: true}
        ],
        reproductionParts: [
          {name: 'Anther', dotid: 'dot1', cardid: 'card1', chipid: 'chip1', description: 'Produce male sex cells (pollen grains).'},
          {name: 'Stigma', dotid: 'dot2', cardid: 'card2',chipid: 'chip2', description: 'The top of the female part of the flower which collects pollen grains.'},
          {name: 'Ovary', dotid: 'dot3', cardid: 'card3',chipid: 'chip3', description: 'Produces the female sex cells (contained in the ovules).'},
          {name: 'Petals', dotid: 'dot4', cardid: 'card4',chipid: 'chip4', description: 'May be brightly coloured to attract insects.'},
          {name: 'Sepal', dotid: 'dot5', cardid: 'card5',chipid: 'chip5', description: 'Protect the unopened flower.'},
        ],
        phases: [
          { image: 'images/phase1.png', description: 'A pollen grain is transferred from one flower to another. A pollen tube grows from the stigma to the ovary.'},
          { image: 'images/phase2.png', description: 'The nucleus of the pollen grain passes through the pollen tube and joins with the egg cell inside an ovule in the ovary.'},
          { image: 'images/phase3.png', description: 'The fertilised egg cell develops into an embryo.'}
        ],
        germinationStep: [
          { image: 'images/germination_01.gif', description: 'The seed starts to take in water. As water is taken in, the seed swells bigger and bigger until the coat slipts apart.', arrowid: 'a1'},
          { image: 'images/germination_02.gif', description: 'Air can then get in to help the baby plant burn the food packed in the seed. Burning food produces energy which help the baby plant grow.', arrowid: 'a2'},
          { image: 'images/germination_03.gif', description: 'Then, a tiny root will start to grow downward whereas a shoot begins to grow upward.', arrowid: 'a3'},
          { image: 'images/germination_06.gif', description: 'The primary root grows longer and thicker together with the secondary roots. In the end, the leaves and shoot will keep on growing until and the plant will grow bigger.', arrowid: 'a4'},
          { image: 'images/germination_05.gif', description: 'Tiny leaves sprout at the shoot letting photosynthesis to take place. The leaves give the baby plant energy, until it gets its own green leaves for photosynthesise.', arrowid: 'a5'},
          { image: 'images/germination_04.gif', description: 'The cotyledon later become the first leaves of the seedling when the seed germinates.', arrowid: 'a6'},
        ],
        suggestTopics: [
          {  title: 'Learn About The Mysterious Space.', image: 'images/space.jpg', btncolor: 'purple', btnlink: 'solar2.php' },
          {  title: 'Want To Know About Dinosaur?', image: 'images/dinosaur.jpg', btncolor: 'orange', btnlink: 'notes.php' },
          {  title: 'How do Weathers Form?', image: 'images/weather.jpg', btncolor: 'blue', btnlink: 'weathernote2.php' },
        ],

      }

    })

  </script>

</body>

</html>
