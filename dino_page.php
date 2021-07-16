<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Css Links -->
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
  <link href="https://unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/dino.css">


</head>

<body>
    
    <div id="app">
        <v-app class="cyan lighten-4">
          <!-- Top Nav -->
            <v-toolbar dark class="cyan lighten-1">
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
                        </v-tooqlbar-item>
            </v-toolbar>

        
        <!--Breacrumbs-->
        <v-breadcrumbs class="ml-3 mt-3">
        <v-icon slot="divider">chevron_right</v-icon>
        <v-breadcrumbs-item v-for="items in breadItems" :key="items.title" :disabled="items.disabled" class="title" v-bind:href="items.link">{{ items.title }}</v-breadcrumbs-item>
        </v-breadcrumbs>
        
        <!--Dinasour Notes-->
        <div class="dinosaur-note">
          <v-container fluid grid-list-xl>
            <v-layout row wrap>
              <v-flex xs12>
                <v-layout row wrap>
                  <v-flex xs12>
                    <v-card hover class ="blue-grey lighten-5">
                      <v-card-title>
                        <div>
                            <h1 class="mb-4">The largest Dinosaur in the world (Supersaurus) </h1>
                            <div class="dinosaur_structure mt-3 mb-3"></div>
                            <img src="images/largestdino.png" class="bigdino">
                            <div class="hoverDetail hidden-xs-only">
                                <span class="dot" id="dot1"></span>
                                <v-chip color="brown lighten-2" text-color="white" disabled id="chip1">Neck</v-chip>
                                <v-card width=300px id="card1" color="grey lighten-1">
                                  <v-card-text>
                                    <p>Long neck for grazing.</p>
                                  </v-card-text>
                                </v-card>
                              </div>
                              <div class="hoverDetail hidden-xs-only">
                                <span class="dot" id="dot2"></span>
                                <v-chip color="brown lighten-2" text-color="white" disabled id="chip2">Body</v-chip>
                                <v-card width=300px id="card2" color="grey lighten-1">
                                  <v-card-text>
                                    <p>Big gut for digestion of lots of plant material.</p>
                                  </v-card-text>
                                </v-card>
                              </div>
                              <div class="hoverDetail hidden-xs-only">
                                <span class="dot" id="dot3"></span>
                                <v-chip color="brown lighten-2" text-color="white" disabled id="chip3">Legs</v-chip>
                                <v-card width=300px id="card3" color="grey lighten-1">
                                  <v-card-text>
                                    <p>Four columnar legs</p>
                                  </v-card-text>
                                </v-card>
                              </div>
                              <div class="hoverDetail hidden-xs-only">
                                <span class="dot" id="dot4"></span>
                                <v-chip color="brown lighten-2" text-color="white" disabled id="chip4">Tail</v-chip>
                                <v-card width=300px id="card4" color="grey lighten-1">
                                  <v-card-text>
                                    <p>Tail for conterbalancing the long neck</p>
                                  </v-card-text>
                                </v-card>
                              </div>
                              <div class="hoverDetail hidden-xs-only">
                                <span class="dot" id="dot5"></span>
                                <v-chip color="brown lighten-2" text-color="white" disabled id="chip5">Head</v-chip>
                                <v-card width=300px id="card5" color="grey lighten-1">
                                  <v-card-text>
                                    <p>Tiny head and brain.</p>
                                  </v-card-text>
                                </v-card>
                              </div>
                            

                        </div>
                      </v-card-title>
                    </v-card>
                  </v-flex>
                </v-layout>
              </v-flex>
              <v-flex xs4 sm5>
                <v-card hover class="light-green lighten-4">
                  <v-container fluid grid-list-lg>
                    <v-layout row wrap>
                      
                      <v-flex xs12>
                        <v-card-title>
                          <v-icon>video_library</v-icon>
                            <div class="title ml-2">
                                Here is a video about different types of dinosaur:
                            </div>
                          </v-card-title>
                        <v-card-media height="490px"><iframe width="100%" src="images/dinosaurvideo.mp4" frameborder="0" allowfullscreen></iframe></v-card-media>
                      </v-flex>
                    </v-layout>
                  </v-container>
                </v-card>
              </v-flex>
              <v-flex xs12 sm7>
                  <v-layout row wrap>
                    <v-flex xs22>
                      <v-card hover class="green lighten-5">
                        <v-card-title>
                          <div>
                            <div class="headline mb-3" style="font-weight: 500;" >Where in the world did dinosaurs live?</div>
                            <p style="font-size: 18px;">Fossils of dinosaurs have now been found on every continent, almost everywhere that rocks of Late Triassic, Jurassic, or Cretaceous rocks are exposed on the Earth's surface. Because dinosaurs were (and in the form of birds still are) such a diverse group or animals, they probably lived in nearly every terrestrial environment. Their fossils, be they bones, teeth, or footprints, have been found in Mesozoic rocks that are geologically interpreted to have been deposited in deserts, savannahs, forests, beaches, and swamps.</p>
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
                              <h3 class="headline red--text mb-2" style="font-weight: 500;" >How dinosaur extinct?!</h3>
                              
                              <p style="font-size: 18px;">Dinosaur extinction theories have been the subject of much debate and controversy. A recent explanation, supported by many scientists, suggests that dinosaurs died out soon after a huge meteorite crashed to Earth near the Gulf of Mexico. A giant meteorite, they reason, could have landed with an impact that kicked up enough dust and debris to block out sunlight for a long time — leading to a deadly chain of events.</p>
                              
                            </div>
                          </v-flex>
                          <v-flex xs3>
                              <v-card-media src="images/meteorrock.gif" height="150px" contain></v-card-media>
                            </v-flex>
                        </v-layout>
                      </v-container>
                    </v-card>
                  </v-flex>
                  </v-layout>
                </v-flex>


                <!-- cards starts here-->
            <v-flex xs12>
              <v-card class="red lighten-4" flat>
                <v-layout row wrap>
                  <v-flex xs7>
                    <div style="font-size: 30px; font-weight: 500;" class="text-xs-right red--text mt-4">Dinosaurs</div>
                    <div class="subheading text-xs-right">How many dinosaurs do you know?</div>
                  </v-flex>
                  <v-flex xs4>
                    <img src="images/magnifyingglass.gif" height="100px"/>
                  </v-flex>
                </v-layout>
                <v-container fluid grid-list-xl>
                  <v-layout row wrap>
                    <v-flex xs12 sm4 class="card-flip">
                      <v-card class="card-content" hover>
                        <v-card-media src="images/dino1.png" height="400px" class="front"></v-card-media>
                        <v-card-text class="back yellow darken-3 white--text">
                          <div class="text-xs-center mb-3" style="font-size: 28px; font-weight: 500;">
                            Tyrannosaurus
                          </div>
                          <div style="font-size: 18px;">
                            <ul style="list-style: none;">
                              li><b>Pronunciation:</b> Tie-ran-owe-sore-uss</li>
                              <li><b>Size:</b> 40.00 feet 12.00 meters</li>
                              <li><b>Weight:</b> 12000.00 pounds 6000.00 kilograms</li>
                              <li><b>Class:</b> Theropoda</li>
                              <li><b>Food:</b> Large animals</li>
                              <li><b>Extinct time:</b> 65,000,000 Years Ago</li>
                              <li><b>Place can be found:</b> Arizona, Colorado, Kansas, Montana, North America, Utah, Wyoming</li>
                            </ul>
                          </div>
                        </v-card-text>
                      </v-card>
                    </v-flex>
                    <v-flex xs12 sm4 class="card-flip">
                      <v-card class="card-content" hover>
                        <v-card-media src="images/dino2.png" height="400px" class="front"></v-card-media>
                        <v-card-text class="back deep-orange darken-3 white--text">
                          <div class="text-xs-center mb-3" style="font-size: 28px; font-weight: 500;">
                            Ultrasauros
                          </div>
                          <div style="font-size: 18px;">
                            <ul style="list-style: none;">
                              <li><b>Pronunciation:</b> Ull-tra-sore-oss</li>
                                          <li><b>Size:</b> 115.00 feet 35.00 meters</li>
                                          <li><b>Weight:</b> 100000.00 pounds 50000.00 kilograms</li>
                                          <li><b>Class:</b> Sauropoda</li>
                                          <li><b>Food:</b> Plants</li>
                                          <li><b>Extinct time:</b> 100,000,000 Years Ago</li>
                                          <li><b>Place can be found:</b> Colorado and North America</li>
                            </ul>
                          </div>
                        </v-card-text>
                      </v-card>
                    </v-flex>
                    <v-flex xs12 sm4 class="card-flip">
                      <v-card class="card-content" hover>
                        <v-card-media src="images/dino3.png" height="400px" class="front"></v-card-media>
                        <v-card-text class="back teal darken-1 white--text">
                          <div class="text-xs-center mb-3" style="font-size: 28px; font-weight: 500;">
                            Mesosaurus
                          </div>
                          <div style="font-size: 18px;">
                            <ul style="list-style: none;">
                              <li><b>Pronunciation:</b> Mezz-owe-sore-uss</li>
                                  <li><b>Size:</b> 3.00 feet 1.00 meters</li>
                                  <li><b>Weight:</b> 30800.00 pounds 14000.00 kilograms</li>
                                  <li><b>Class:</b> Reptilia</li>
                                  <li><b>Food:</b> Small animals, such as shrimp and fish</li>
                                  <li><b>Extinct time:</b> 250,000,000 Years Ago</li>
                                  <li><b>Place can be found:</b> Permian</li>
                            </ul>
                          </div>
                        </v-card-text>
                      </v-card>
                    </v-flex>
                    <v-flex xs12 sm4 class="card-flip">
                      <v-card class="card-content" hover>
                        <v-card-media src="images/dino4.png" height="400px" class="front"></v-card-media>
                        <v-card-text class="back red darken-1 white--text">
                          <div class="text-xs-center mb-3" style="font-size: 28px; font-weight: 500;">
                            Pteranodon
                          </div>
                          <div style="font-size: 18px;">
                          <ul style="list-style: none;">
                            <li><b>Pronunciation:</b> Tear-ann-owe-don</li>
                            <li><b>Size:</b> 30.00 feet 9.00 meters</li>
                            <li><b>Weight:</b> 40.00 pounds 18.00 kilograms</li>
                            <li><b>Class:</b> Pterosauria</li>
                            <li><b>Food:</b> Fish, squid, small oceanic animals</li>
                            <li><b>Extinct time:</b> 75,000,000 Years Ago</li>
                            <li><b>Place can be found:</b> North America</li>
                          </ul>
                          </div>
                        </v-card-text>
                      </v-card>
                    </v-flex>
                    <v-flex xs12 sm4 class="card-flip">
                      <v-card class="card-content" hover>
                        <v-card-media src="images/dino5.png" height="400px" class="front"></v-card-media>
                        <v-card-text class="back lime  darken-1 white--text">
                          <div class="text-xs-center mb-3" style="font-size: 28px; font-weight: 500;">
                            Eoraptor
                          </div>
                          <div style="font-size: 18px;">
                            <ul style="list-style: none;">
                              <li><b>Pronunciation:</b> Ee-owe-rap-tore</li>
                              <li><b>Size:</b> 3.00 feet 1.00 meters</li>
                              <li><b>Weight:</b> 21.00 pounds 15.00 kilograms</li>
                              <li><b>Class:</b> Theropoda</li>
                              <li><b>Food:</b> Smaller animals</li>
                              <li><b>Extinct time:</b> 228,000,000 Years Ago</li>
                              <li><b>Place can be found:</b> South America</li>
                            </ul>
                          </div>
                        </v-card-text>
                      </v-card>
                    </v-flex>
                    <v-flex xs12 sm4 class="card-flip">
                      <v-card class="card-content" hover>
                        <v-card-media src="images/dino6.png" height="400px" class="front"></v-card-media>
                        <v-card-text class="back pink darken-2 white--text">
                          <div class="text-xs-center mb-3" style="font-size: 28px; font-weight: 500;">
                            Utahraptor
                          </div>
                          <div style="font-size: 18px;">
                            <ul style="list-style: none;">
                              <li><b>Pronunciation:</b> You-taw-rap-tore</li>
                              <li><b>Size:</b> 18.00 feet 5.50 meters</li>
                              <li><b>Weight:</b> 1100.00 pounds 500.00 kilograms</li>
                              <li><b>Class:</b> Theropoda</li>
                              <li><b>Food:</b> Larger animals</li>
                              <li><b>Extinct time:</b> 120,000,000 Years Ago</li>
                              <li><b>Place can be found:</b> North America and Utah</li>
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

  <footer id="main-footer" class="grid cyan lighten-1" style="padding: 1em; background: #B53471;color: #fff;text-align: center;">
    <div>© 2018 Kidtopia Inc.</div>
    <div>All Rights Reserved</div>
  </footer>
        </v-app>
    </div>
</body>


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
        { title: 'Dinosaur', disabled: true}
      ],
      suggestTopics: [
        {  title: 'Learn About The Mysterious Space.', image: 'images/space.jpg', btncolor: 'purple', btnlink: 'solar1.php' },
        {  title: 'Find out interesting facts about plants', image: 'images/plant.jpg', btncolor: 'green', btnlink: 'plants_notes.php' },
        {  title: 'How do Weathers Form?', image: 'images/weather.jpg', btncolor: 'blue', btnlink: 'weathernote.php' },
      ],

    }

  })

</script>


</html>