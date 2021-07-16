<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
  <title>Plants</title>

  <!-- Css Links -->
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
  <link href="https://unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/plants1.css">

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
      <!-- Strucute of the plant -->
      <div class="plant_structure mt-3 mb-3">
        <img src="images/plant.png">
        <div class="hoverDetail hidden-xs-only">
          <span class="dot" id="dot1"></span>
          <v-chip color="red" text-color="white" disabled id="chip1">Flower</v-chip>
          <v-card width=300px id="card1">
            <v-card-text>
              <p>The flower grows on a stalk – a thin node – which supports it. Inside the part of the flower has parts which produce seeds.</p>
            </v-card-text>
          </v-card>
        </div>
        <div class="hoverDetail hidden-xs-only">
          <span class="dot" id="dot2"></span>
          <v-chip color="red" text-color="white" disabled id="chip2">Leaf</v-chip>
          <v-card width=300px id="card2">
            <v-card-text>
              <p>A plant’s leaves collect energy from the Sun and make food for the plant using a process called photosynthesis.</p>
            </v-card-text>
          </v-card>
        </div>
        <div class="hoverDetail hidden-xs-only">
          <span class="dot" id="dot3"></span>
          <v-chip color="red" text-color="white" disabled id="chip3">Stalk</v-chip>
          <v-card width=300px id="card3">
            <v-card-text>
              <p>A slender leaf stalk attaches the leaf to the plant’s stem.</p>
            </v-card-text>
          </v-card>
        </div>
        <div class="hoverDetail hidden-xs-only">
          <span class="dot" id="dot4"></span>
          <v-chip color="red" text-color="white" disabled id="chip4">Stem</v-chip>
          <v-card width=300px id="card4">
            <v-card-text>
              <p>A plant’s stem transports water through the plant.It also keeps the plants upright.</p>
            </v-card-text>
          </v-card>
        </div>
        <div class="hoverDetail hidden-xs-only">
          <span class="dot" id="dot5"></span>
          <v-chip color="red" text-color="white" disabled id="chip5">Flower Bud</v-chip>
          <v-card width=300px id="card5">
            <v-card-text>
              <p>A flower bud is the sign that a flower is about to bloom. Once the flower has opened, its brightly colored petals attract insects that pollinate the flower.</p>
            </v-card-text>
          </v-card>
        </div>
        <div class="hoverDetail hidden-xs-only">
          <span class="dot" id="dot6"></span>
          <v-chip color="red" text-color="white" disabled id="chip6">Root</v-chip>
          <v-card width=300px id="card6">
            <v-card-text>
              <p>Roots take in minerals and water and anchor the plant in soil.</p>
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
            <v-flex xs12 sm7>
              <v-layout row wrap>
                <v-flex xs12>
                  <v-card hover class="green lighten-5">
                    <v-card-title>
                      <div>
                        <div class="headline mb-3" style="font-weight: 500;" >What are plants?</div>
                        <p style="font-size: 18px;">Plants are living things that grow on land or in water. Plants can be divided into two groups: flowering plants, for example, sunflowers and orchids. The other group is nonflowering plants, which includes mosses and ferns. All plants make their own food by taking energy from sunlight. Plants cannot move from place to place as they are rooted in the ground. </p>
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
                          <p style="font-size: 18px;">The scientific study of plant life is known as botany. The person who is an expert in this field is called a botanist or plant scientist. Botanical research increase and improve our supply of medicines, foods, building materials, and other plant products.</p>
                        </div>
                      </v-flex>
                      <v-flex xs3>
                        <v-card-media src="images/botanist.jpg" height="150px" contain></v-card-media>
                      </v-flex>
                    </v-layout>
                  </v-container>
                </v-card>
              </v-flex>
              </v-layout>
            </v-flex>
            <v-flex xs12 sm5>
              <v-card hover class="green lighten-5">
                <v-card-title>
                  <v-icon>video_library</v-icon>
                  <div class="title ml-2">
                    Here is a video about plants :
                  </div>
                </v-card-title>
                <v-card-media height="375px"><video src="images/plantsvid.mp4" width="100%" controls poster="images/plantsposter.jpg"></video></v-card-media>
              </v-card>
            </v-flex>
            <v-flex xs12>
              <v-card hover class="green lighten-5">
                <v-card-title style="font-size: 28px; font-weight: 500;">Type of Plants <img src="images/pooh.gif" height="65px" class="ml-3"/></v-card-title>
                <v-container fluid grid-list-lg>
                  <v-layout row wrap>
                    <v-flex xs6>
                      <v-card-media src="images/sunflower.png" height="300px" contain></v-card-media>
                      <v-card-text>
                        <div>
                          <h3 class="text-xs-center mb-3">Flowering Plants</h3>
                          <p style="font-size: 18px;"><b>Flowering plants</b> are the largest, most popular group of plants. Most of the trees along with every type of flower belong to this group. Flowering plants produce seeds, fruits, and flowers. A flower’s petals are often brightly colored so they can attract insects for pollination.</p>
                        </div>
                      </v-card-text>
                    </v-flex>
                    <v-flex xs6>
                      <v-card-media src="images/fern.png" height="300px" contain></v-card-media>
                      <v-card-text>
                        <div>
                          <h3 class="text-xs-center mb-3">Non-Flowering Plants</h3>
                          <p style="font-size: 18px;"><b>Non-flowering plants</b> are divided into two main groups—those that reproduce with dustlike particles called spores and those that use seeds to reproduce. Spore bearing plants release thousands of tiny spores, which are spread by wind or water. The second group of nonflowering plants which produce seeds such as pine tree. </p>
                        </div>
                      </v-card-text>
                    </v-flex>
                  </v-layout>
                </v-container>
              </v-card>
            </v-flex>
            <v-flex xs12>
              <v-card hover class="green lighten-5">
                <v-card-title style="font-size: 28px; font-weight: 500;">How do plants pollinate?</v-card-title>
                <v-container fluid grid-list-xl>
                  <v-layout row wrap>
                    <v-flex xs12 sm4>
                      <v-card-media src="images/bee.png" height="70px" contain class="slide-in-left hidden-xs-only"></v-card-media>
                      <v-card-media src="images/halfflower.jpg" height="300px" contain></v-card-media>
                      <v-card-text>
                        <div>
                          <p style="font-size: 18px;">Plant reproduce by pollinating. Pollination happens when pollen created from one plant move into another plant. These pollens need the help of animals such as bees to transport their pollen to another plant.</p>
                        </div>
                      </v-card-text>
                    </v-flex>
                    <v-flex xs12 sm4>
                      <v-card-media class="mt-5 hidden-sm-and-up" src="images/bee.png" height="200px" contain></v-card-media>
                      <v-card-text class="mt-5">
                        <div>
                          <p style="font-size: 18px;">Insects such as bees go from one flower to another to collect nectar ( sugary drink ) which are food for them. As the bees pass through, these pollens sticks on the bees' legs.</p>
                        </div>
                      </v-card-text>
                    </v-flex>
                    <v-flex xs12 sm4>
                      <v-card-media class="mt-5" src="images/halfflower2.png" height="300px" contain></v-card-media>
                      <v-card-text>
                        <div>
                          <p style="font-size: 18px;">Then, when the bees go to another flower to collect more nectar, some of the pollen that was stuck on the bees' legs will fall off. The pollen then enters the flower to make pollination.</p>
                        </div>
                      </v-card-text>
                    </v-flex>
                  </v-layout>
                </v-container>
              </v-card>
            </v-flex>
            <v-flex xs12>
              <v-card class="blue lighten-4" flat>
                <v-layout row wrap>
                  <v-flex xs7>
                    <div style="font-size: 30px; font-weight: 500;" class="text-xs-right red--text mt-4">Fun plants to grow at home!</div>
                    <div class="subheading text-xs-right">(Hover on the pictures to learn about them.)</div>
                  </v-flex>
                  <v-flex xs4>
                    <img src="images/poohplanting.gif" height="90px"/>
                  </v-flex>
                </v-layout>
                <v-container fluid grid-list-xl>
                  <v-layout row wrap>
                    <v-flex xs12 sm4 class="card-flip">
                      <v-card class="card-content" hover>
                        <v-card-media src="images/sunflower.jpg" height="500px" class="front"></v-card-media>
                        <v-card-text class="back yellow darken-3 white--text">
                          <div class="text-xs-center mb-3" style="font-size: 28px; font-weight: 500;">
                            Sunflower
                          </div>
                          <div style="font-size: 18px;">
                            Sunflowers come in a variety of sizes and colors which kids would love! There are common yellow sunflowers, or you can grow red and orange varieties, such as ‘Velvet Queen’ and ‘Terracotta.’ Regardless of the type, kids will be fascinated by its sun-chasing characteristics, not to mention the scrumptious seeds that follow.
                          </div>
                        </v-card-text>
                      </v-card>
                    </v-flex>
                    <v-flex xs12 sm4 class="card-flip">
                      <v-card class="card-content" hover>
                        <v-card-media src="images/marigold.jpg" height="500px" class="front"></v-card-media>
                        <v-card-text class="back deep-orange darken-3 white--text">
                          <div class="text-xs-center mb-3" style="font-size: 28px; font-weight: 500;">
                            Marigold
                          </div>
                          <div style="font-size: 18px;">
                            If you’re needing a no fuss plant, look into planting Marigolds. They have very bright and beautiful colour which will make your garden look beatiful. These easy care, bright blooms are often used as Mother’s Day gifts and growing projects at schools. Even now, you can be growing marigold flowers in your own garden.
                          </div>
                        </v-card-text>
                      </v-card>
                    </v-flex>
                    <v-flex xs12 sm4 class="card-flip">
                      <v-card class="card-content" hover>
                        <v-card-media src="images/mint.jpg" height="500px" class="front"></v-card-media>
                        <v-card-text class="back teal darken-1 white--text">
                          <div class="text-xs-center mb-3" style="font-size: 28px; font-weight: 500;">
                            Mint
                          </div>
                          <div style="font-size: 18px;">
                            Mint is an amazing herb to have at your garden. While they’re most often used for flavoring dishes or as garnishes, many types of mint are also grown for their unique aromas. This would make ur surrounding smell good and kids would feel more relaxed.
                          </div>
                        </v-card-text>
                      </v-card>
                    </v-flex>
                    <v-flex xs12 sm4 class="card-flip">
                      <v-card class="card-content" hover>
                        <v-card-media src="images/cherrytomato.jpg" height="500px" class="front"></v-card-media>
                        <v-card-text class="back red darken-1 white--text">
                          <div class="text-xs-center mb-3" style="font-size: 28px; font-weight: 500;">
                            Cherry Tomatoes
                          </div>
                          <div style="font-size: 18px;">
                            Tomatoes are one of the most popular plant to grow in a garden especially cherry tomatoes. Kids will love watching the vines creep and crawl over the railings as they turn into beatiful red tiny tomatoes. Kids enjoy eating cherry tomatoes and what is better than having them fresh at your own garden.
                          </div>
                        </v-card-text>
                      </v-card>
                    </v-flex>
                    <v-flex xs12 sm4 class="card-flip">
                      <v-card class="card-content" hover>
                        <v-card-media src="images/lambsear.jpg" height="500px" class="front"></v-card-media>
                        <v-card-text class="back light-blue darken-1 white--text">
                          <div class="text-xs-center mb-3" style="font-size: 28px; font-weight: 500;">
                            Lamb's Ear
                          </div>
                          <div style="font-size: 18px;">
                            The name of the plant sounds weird but its actually a very nice plant to have. The leaves of these are silvered in colour and it feels very fuzzy and wooly. Kids would really love to touch them. Lamb's ear will also produce spiky pink to purple flowers which makes it look even better.
                          </div>
                        </v-card-text>
                      </v-card>
                    </v-flex>
                    <v-flex xs12 sm4 class="card-flip">
                      <v-card class="card-content" hover>
                        <v-card-media src="images/venus.jpg" height="500px" class="front"></v-card-media>
                        <v-card-text class="back pink darken-2 white--text">
                          <div class="text-xs-center mb-3" style="font-size: 28px; font-weight: 500;">
                            Venus Fly Trap
                          </div>
                          <div style="font-size: 18px;">
                            Kids always say that this is one of the coolest plant on Earth. Venus Fly Trap can be grown outdoors or even indoors in a small vase. If outside, it will come by its food naturally. At indoors, small insects hiding in homes will be good enough.
                          </div>
                        </v-card-text>
                      </v-card>
                    </v-flex>
                  </v-layout>
                </v-container>
              </v-card>
            </v-flex>
            <v-flex xs12>
              <v-card class="green lighten-5" style="padding-bottom: 300px;">
                <div class="text-xs-center pt-4" style="font-size: 28px; font-weight: 500;">
                  Origin of some common plants
                </div>
                <v-card-media src="images/worldmap.png" height="600px" contain style="margin-top: 300px;"></v-card-media>
                <v-flex xs2 style="position: absolute" id="commonplant1">
                  <div class="line1"></div>
                  <v-card flat>
                    <v-card-media src="images/tomato.jpg" height="120px"></v-card-media>
                    <div class="pa-2 deep-orange darken-1 white--text">
                      Tomatoes were originated from Mexico and the early wild tomatoes were the size of grapes.
                    </div>
                  </v-card>
                </v-flex>
                <v-flex xs2 style="position: absolute"  id="commonplant2">
                  <div class="line2"></div>
                  <v-card flat>
                    <v-card-media src="images/tulip.jpg" height="120px"></v-card-media>
                    <div class="pa-2 purple lighten-2 white--text">
                      Tulips originally came from Turkey and were taken to Europe in the 1500s.
                    </div>
                  </v-card>
                </v-flex>
                <v-flex xs2 style="position: absolute" id="commonplant3">
                  <div class="line3"></div>
                  <v-card flat>
                    <v-card-media src="images/wheat.jpg" height="120px"></v-card-media>
                    <div class="pa-2 light-green lighten-1 white--text">
                      Wheat was first grown thousands of years ago in China and India.
                    </div>
                  </v-card>
                </v-flex>
                <v-flex xs2 style="position: absolute" id="commonplant4">
                  <div class="line4"></div>
                  <v-card flat>
                    <v-card-media src="images/tea.jpg" height="120px"></v-card-media>
                    <div class="pa-2 light-green lighten-1 white--text">
                      Tea plants grew in southern China and Cambodia and were first used as medicine.
                    </div>
                  </v-card>
                </v-flex>
                <v-flex xs2 style="position: absolute" id="commonplant5">
                  <div class="line5"></div>
                  <v-card flat>
                    <v-card-media src="images/watermelon.jpg" height="120px"></v-card-media>
                    <div class="pa-2 yellow darken-2 white--text">
                      Watermelons appeared in South Africa 5000 years ago.
                    </div>
                  </v-card>
                </v-flex>
                <v-flex xs2 style="position: absolute" id="commonplant6">
                  <div class="line6"></div>
                  <v-card flat>
                    <v-card-media src="images/coffee.jpg" height="120px"></v-card-media>
                    <div class="pa-2 yellow darken-2 white--text">
                      Coffee plants first grew in Ethiopia in eastern Africa.
                    </div>
                  </v-card>
                </v-flex>
                <v-flex xs2 style="position: absolute" id="commonplant7">
                  <div class="line7"></div>
                  <v-card flat>
                    <v-card-media src="images/potato.jpg" height="120px"></v-card-media>
                    <div class="pa-2 lime accent-2 black--text">
                      Potatoes were first grown high in the Andes Mountain in South America.
                    </div>
                  </v-card>
                </v-flex>
                <v-flex xs2 style="position: absolute" id="commonplant8">
                  <div class="line8"></div>
                  <v-card flat>
                    <v-card-media src="images/chili.jpg" height="120px"></v-card-media>
                    <div class="pa-2 lime accent-2 black--text">
                      Chilies and milder peppers first grew in Central and South America.
                    </div>
                  </v-card>
                </v-flex>
              </v-card>
            </v-flex>
            <hr class="lineStyle mt-4 mb-1">

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
        menuItems: [
          { title: 'Notes', icon: 'library_books', link: 'menu.php' },
          { title: 'Quiz', icon: 'question_answer', link: 'menu.php' },
          { title: 'Contact Us', icon: 'info', link: 'contactus.php' },
          { title: 'Profile', icon: 'account_box', link: 'profile.php' },
          { title: 'LogOut', icon: 'lock_open', link: 'logout.php' }
        ],
        breadItems: [
          { title: 'Notes (Age 7 - 9)', disabled: false, link: 'notes.php'},
          { title: 'Plants', disabled: true}
        ],
        expansionParts: [
          { title: 'Flower', description: 'Most plants have flowers. The flower grows on a stalk – a thin node – which supports it. Inside the part of the flower has parts which produce seeds.'},
          { title: 'Leaf', description: 'A plant’s leaves collect energy from the Sun and make food for the plant using a process called photosynthesis.'},
          { title: 'Stalk', description: 'A slender leaf stalk attaches the leaf to the plant’s stem.'},
          { title: 'Stem', description: 'A plant’s stem transports water through the plant.It also keeps the plants upright.'},
          { title: 'Flower Bud', description: 'A flower bud is the sign that a flower is about to bloom. Once the flower has opened, its brightly colored petals attract insects that pollinate the flower.'},
          { title: 'Root', description: 'Roots take in minerals and water and anchor the plant in soil.'}
        ],
        suggestTopics: [
          {  title: 'Learn About The Mysterious Space.', image: 'images/space.jpg', btncolor: 'purple', btnlink: 'solar1.php' },
          {  title: 'Want To Know About Dinosaur?', image: 'images/dinosaur.jpg', btncolor: 'orange', btnlink: 'dino_page.php' },
          {  title: 'How do Weathers Form?', image: 'images/weather.jpg', btncolor: 'blue', btnlink: 'weathernote.php' },
        ],

      }

    })

  </script>

</body>

</html>
