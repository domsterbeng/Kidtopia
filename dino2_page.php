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
  <link rel="stylesheet" type="text/css" href="css/dino2.css">

</head>

<body>
        <div id="app">
                <v-app class="teal lighten-4">
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
                            <v-card hover class ="green lighten-5">
                              <v-card-title>
                                <div>
                                    <h1 class="mb-4">Fossils of dinosaur found in different counties </h1>
                                    <div class="dinosaur_structure mt-3 mb-3"></div>
                                    <img src="images/dinoworld.gif"  class="dinoworld" contain style="position: relative; top: 10px; left:0px;">

                                </div>
                              </v-card-title>
                            </v-card>
                          </v-flex>
                        </v-layout>
                      </v-flex>
                      <v-flex xs12 sm7>
                          <v-layout row wrap>
                            <v-flex xs22>
                              <v-card hover class="green lighten-5">
                                <v-card-title>
                                  <div>
                                    <div class="headline mb-3" style="font-weight: 500;" >What are fossils?</div>
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
                                      <h3 class="headline red--text mb-2" style="font-weight: 500;" >How old are fossils?</h3>
                                      
                                      <p style="font-size: 18px;">It can be difficult to determine the age of fossils (date the fossils). Because fossil bones aren’t made from the right kind of rocks, you can’t really run scientific tests on fossils to determine their age. Scientists can use scientific tests to determine the age of rocks near the fossils. The types of tests are called radiometric dating. There are certain types of elements that are radioactive. Radioactive elements fall apart overtime and slowly change into another element that is not radioactive.</p>
                                      
                                    </div>
                                  </v-flex>
                                  <v-flex xs3>
                                      <v-card-media src="images/dino6.gif" height="300px" contain></v-card-media>
                                    </v-flex>
                                </v-layout>
                              </v-container>
                            </v-card>
                          </v-flex>
                          </v-layout>
                        </v-flex>
                        <v-flex xs4 sm5><!-- rectangle starts here-->
                            <v-card hover class="red lighten-4">
                              <v-container fluid grid-list-lg>
                                <v-layout row wrap>
                                  
                                  <v-flex xs12>
                                    <v-card-title>
                                      <v-icon>video_library</v-icon>
                                        <div class="title ml-2">
                                            Here is a video about fossils:
                                        </div>
                                      </v-card-title>
                                    <v-card-media height="490px"><iframe width="100%" src="images/fossil.mp4" frameborder="0" allowfullscreen></iframe></v-card-media>
                                  </v-flex>
                                </v-layout>
                              </v-container>
                            </v-card>
                          </v-flex>

                          <v-container fluid grid-list-xs>

                                <v-layout row wrap>
                  
                                  <v-flex xs12 sm4>
                                    <!--1st start-->
                                    <v-flex xs12>
                  
                  
                                      <v-card  height=520px class="mb-1 ">
                                        <v-card-text>
                                          <h1 style="font-family:Times New Roman; font-size: 22px;  right: 6px;">What is Paleontology?</h1>
                                          
                                          <v-card-media src="images/dino3.gif" height="140px" contain style="position: relative; top: 10px; left:0px;"></v-card-media>
                  
                  
                                          <p style="font-family:Times New Roman; font-size: 16px; position: absolute; bottom: -1px; right : 10px;padding: 10px ;" align="justify">
                                                Paleontology is the study of the history of life. Scientists who study paleontology are called paleontologists. Paleontologists use fossils to try to figure out three main things about fossils: Identity and origin of the fossil, the fossil’s environment, and what the fossil can tell us about the history of the earth. Because paleontologists are interested in finding out about all life on earth, they study all kinds of fossils, not just dinosaur bones. There are many different types of paleontologists. Some study fossil plants, some study fossil fish, some study fossil mammals, and some study dinosaurs. Pick a type of fossil and there’s bound to be a paleontologist that studies that type of fossil.
                                          </p>
                                        </v-card-text>
                                      </v-card>
                  
                  
                                    </v-flex>
                  
                                  </v-flex>
                                  <!--1st card end-->
                  
                  
                                  <v-flex xs12 sm4 >
                                    <!--2nd start-->
                                    <v-flex  xs12>
                  
                  
                  
                                      <v-card  height=520px class="ml-1" >
                                        <v-card-text>
                                          <!--card start-->
                                          <v-layout row wrap>
                  
                                              <!--1st content-->
                  
                                              <v-flex xs12>
                                                <h1 style="font-family:Times New Roman; font-size: 22px; position: relative;">The smallest brain.</h1>
                                                <v-card-media src="images/dino7.gif" height="140px" contain style="position: relative; top: 10px; left:0px;"></v-card-media>
                                              </v-flex>
                  
                  
                  
                                              <p style="font-family:Times New Roman; font-size: 16px; position: relative; bottom: 5px; padding: 10px ;" align="justify">
                                                Stegosaurus had a brain the size of a walnut - only 3 centimetres long and weighing 75 grams. However,comparing brain size to body size sauropodomorphs, like Plateosaurus, were probably one of thedumbest dinosaurs.Stegosaurus is a dinosaur that lived around 155 million years ago—during the Jurassic Period—in the Western portion of North America and parts of Europe. It was an herbivorous quadruped known for its rounded back and its double row of back plates that end with a a double pair of spikes on this dinosaur’s tail. Because this dinosaur had armored plates that seemed shingled, it was given the name Stegosaurus, which means “roofed lizard”.
                  
                  
                  
                                              </p>
                  
                  
                  
                                          </v-layout>
                                        </v-card-text>
                                      </v-card>
                                      <!--card end-->
                  
                  
                  
                                    </v-flex>
                  
                                  </v-flex>
                                  <!--2nd card end-->
                  
                  
                                  <v-flex xs12 sm4 class="pl-0">
                                    <!--3rd card start rainsnow-->
                                    <v-flex  xs12>
                  
                  
                  
                                      <v-card height=520px style="background-color: white;">
                                        <v-card-text>
                                          <!--card start-->
                                          <v-layout row wrap>
                  
                                              <!--1st content-->
                  
                                              <v-flex xs12>
                                                  <h1 style="font-family:Times New Roman; font-size: 22px; position: relative; ">How many types of dinosaur were there?</h1>
                                                  <v-card-media src="images/dino5.gif" height="140px" contain style="position: relative; top: 10px; left:0px;"></v-card-media>
                                              </v-flex>
                  
                  
                  
                                              <p style="font-family:Times New Roman; font-size: 16px; position: relative;bottom:5px;padding-left: 10px ; padding-right: 10px;" align="justify">
                  
                                                At present over 700 different species of dinosaurs have been identified and named. However palaeontologists believe that there are many more new and different dinosaur species still to be discovered.So far 108 species of dinosaurs have been discovered in Britain. Britain was an important area during much of the Mesozoic Era acting as a 'land bridge' between North America and Eurasia. It became a hotspot for dinosaur evolution and migration. British dinosaurs include Megalosaurus, Iguanodon, Neovenator, Eotyrannus, and Cetiosaurus. The dinosaur Museum has the skeleton of a Megalosaurus and the skull of an Iguanodon on display.

                                              </p>
                  
                  
                  
                                          </v-layout>
                                        </v-card-text>
                                      </v-card>
                                      <!--card end-->
                  
                  
                  
                                    </v-flex>
                  
                                  </v-flex>
                                  <!--3rd card end-->
                  
                  
                  
                  
                  
                                </v-layout>
                              </v-container>
                          
        
        
                        <!-- cards starts here-->
            
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

                <footer id="main-footer" class="grid teal lighten-1" style="padding: 1em; background: #B53471;color: #fff;text-align: center;">
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
        { title: 'Notes (Age 10 - 12)', disabled: false, link: 'notes.php'},
        { title: 'Dinosaur', disabled: true}
      ],
      suggestTopics: [
        {  title: 'Learn About The Mysterious Space.', image: 'images/space.jpg', btncolor: 'purple', btnlink: 'solar2.php' },
        {  title: 'Find out interesting facts about plants', image: 'images/plant.jpg', btncolor: 'green', btnlink: 'plants_notes_2.php' },
        {  title: 'How do Weathers Form?', image: 'images/weather.jpg', btncolor: 'blue', btnlink: 'weathernote2.php' },
      ],

    }

  });

</script>

</html>