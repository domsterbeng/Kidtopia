<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
  <title>Kidtopia</title>

  <!-- Css Links -->
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
  <link href="https://unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/weather3.css">


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

      <!--sun-->
      <v-container fluid grid-list-xl class="mb-0">
        <v-layout row wrap>
          <v-flex xs12 sm12 class="mb-0" style="padding: 0;">

            <div class="mt-0 pt-0 mb-0">
              <v-container fluid grid-list-xl class="mb-0">
                <v-layout row wrap class="mb-0">
                  <v-flex xs12 style="height:480px;" class="hidden-xs-only pl-3" >

                    <v-layout row wrap>
                      <v-flex xs7 class="mt-1" style="height: 470px; 	background: linear-gradient(0deg,#FFF,#BBDEFF,#64B1EE, #64B1EE, #64B1EE );">
                        <img :src="airballoon" id="airballoon" height=140px width=130px style="position: absolute; top: 420px; left:530px; ">
                        <img :src="url" id="cloudfact" height=90px width=80px style="position: absolute; top: 520px; left:130px; ">
                        <div class="cloudfact">
                          <h1 style="font-family:Times New Roman; font-size: 14px; position: relative;  left: 5px;padding: 8px; ">AMAZING FACTS</h1>
                          <p style="font-family:Times New Roman; font-size: 12px; padding: 10px; position:relative; bottom: 15px; clear:both;" align="justify"><b>
                          Every planet with an atmosphere has clouds. That includes the moon. About half the sky over the world is covered with cloud at any one time.

                        </b> </p>
                        </div>

                        <!--cloudimage-->
                        <div id="cloud"></div>
                        <div id="cloud1"></div>
                        <div id="cloud2"></div>
                        <div id="cloud3"></div>
                        <div id="cloud4"></div>
                        <!-- airplain -->
                        <div style="position: absolute; top: 200px; left: 24px;overflow:hidden; width: 860px; height: 70px; ">
                          <airplane class="airplane">
                            <div class="head"></div>
                            <div class="body">
                              <div class="window"></div>
                              <div class="window"></div>
                              <div class="window"></div>
                            </div>
                            <div class="lwing"></div>
                            <div class="rwing"></div>
                            <div class="tale"></div>
                          </airplane>
                        </div>
                        <!-- /airplain -->
                      </v-flex>
                      <!--cloudimage-->
                      <v-flex xs5 class="mt-1" style="height: 470px; background-color: white;">
                        <!--formation of cloud explanation-->
                        <v-flex xs12 class="pb-0" style="position:relative; bottom: 10px;">
                          <h1 style="font-family:Times New Roman; font-size: 22px;  ">What is Clouds?</h1>
                          <p style="font-family:Times New Roman; font-size: 16px;  padding-top: 7px ; padding-bottom: 10px ; " align="justify">
                            A cloud is a large collection of very tiny droplets of water or ice crystals. The droplets are so small and light that they can float in the air.
                          </p>
                        </v-flex>

                        <v-flex xs12 class="pt-0 pb-0" style="position:relative; bottom: 25px;">
                          <h1 style="font-family:Times New Roman; font-size: 22px;  ">Why do clouds float?</h1>
                          <p style="font-family:Times New Roman; font-size: 16px;  padding-top: 7px ; padding-bottom: 10px ;" align="justify">
                            A cloud is made up of liquid water droplets. A cloud forms when air is heated by the sun. As it rises, it slowly cools it reaches the saturation point and water condenses, forming a cloud. As long as the cloud and the air that its made of is warmer than
                            the outside air around it, it floats!
                          </p>
                        </v-flex>

                        <v-flex xs12 class="pt-0 pb-0" style="position:relative; bottom: 45px;">
                          <h1 style="font-family:Times New Roman; font-size: 22px;  ">Why do clouds form at different heights in the atmosphere?</h1>
                          <p style="font-family:Times New Roman; font-size: 16px;  padding-top: 7px ; padding-bottom: 10px ;" align="justify">
                            The characteristics of clouds are dictated by the elements available, including the amount of water vapor, the temperatures at that height, the wind, and the interplay of other air masses.
                          </p>
                        </v-flex>


                      </v-flex>
                      <!--formation of cloud explanation-->
                    </v-layout>

                  </v-flex>









                </v-layout>
              </v-container>




            </div>
            <!--close biggest cointaner-->

            <!--second row-->

            <v-container fluid grid-list-xs>

              <v-layout row wrap>

                <v-flex xs12 sm4>
                  <!--1st start-->
                  <v-flex xs12>


                    <v-card  height=520px class="mb-1 ">
                      <v-card-text>
                        <h1 style="font-family:Times New Roman; font-size: 22px;  right: 6px;">How are clouds formed?</h1>
                        <v-card-media src="images/cloudform.png" height="270px" contain style="position: relative; top: -10px; left:10px;"></v-card-media>


                        <p style="font-family:Times New Roman; font-size: 16px; position: absolute; bottom: -1px; right : 10px;padding: 10px ;" align="justify">
                          All air contains water, but near the ground it is usually in the form of an invisible gas called water vapor. When warm air rises, it expands and cools. Cool air can't hold as much water vapor as warm air, so some of the vapor condenses onto tiny pieces
                          of dust that are floating in the air and forms a tiny droplet around each dust particle. When billions of these droplets come together they become a visible cloud.
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
                              <h1 style="font-family:Times New Roman; font-size: 22px; position: relative;">Stormy Skies</h1>
                              <v-card-media src="images/stormysky.jpg" height="238px" style="	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.16); background-color: #f5f5f5;" contain></v-card-media>
                            </v-flex>



                            <p style="font-family:Times New Roman; font-size: 16px; position: relative; bottom: 5px; padding: 10px ;" align="justify">
                              A storm is a time of bad weather, often with black clouds, heavy rain or hail, thunder and lightning, and a very strong wind.
                              In cooler areas of the world storms usually happen along weather fronts. In hotter areas, storms develop because hot air rises and cools to make
                              clouds and rain. The worst storms are hurricanes, which form over the sea, and tornadoes, which from over the sea, and tornadoes, which
                              develop over land.



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
                                <h1 style="font-family:Times New Roman; font-size: 22px; position: relative; ">Rain and Snow</h1>
                              <v-card-media src="images/rainsnow.gif" height="248px"  contain></v-card-media>
                            </v-flex>



                            <p style="font-family:Times New Roman; font-size: 16px; position: relative;bottom:5px;padding-left: 10px ; padding-right: 10px;" align="justify">

                              Rain and snow fall to the Earth from clouds. This happens when drops of water or tiny bits of ice in the clouds grow too
                              big and heavy to hang in the air. The water or ice is pulled down to the ground by the Earth's gravity. Rain falls if the
                                air is very cold. Sometimes snow falls from clouds, then warms up and melts into rain on its way down.
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





            <!--third row-->

            <v-container fluid grid-list-mg class="mb-0 ml-0">

              <v-layout row wrap>

                <v-flex xs12 sm6>
                  <!--1st start-->
                  <v-card>
                    <v-card-text>
                        <v-layout row wrap>
                              <v-flex xs12 >
                                <h1 style="font-family:Times New Roman; font-size: 22px; ">What Is Severe Weather?</h1>
                                <p style="font-family:Times New Roman; font-size: 16px; margin:0;" align="justify">
                                Severe weather refers to any dangerous meteorological phenomena with the potential to cause damage, serious social disruption, or loss of human life.
                                Types of severe weather phenomena vary, depending on the latitude, altitude, topography, and atmospheric conditions.
                                </p>
                              </v-flex>
                              <v-flex xs12  class="pt-0 pb-0 ma-0">
                                <h1 style="font-family:Times New Roman; font-size: 22px; ">The Different Between Weather and Severe Weather</h1>
                              <v-card-media width=324px height=324px><video width="100%" frameborder="0"controls ><source src="images/severeweather.mp4" type="video/mp4"></v-card-media>

                              </v-flex>
                              <v-flex xs12 class="pb-0 ma-0">




                              </v-flex>
                        </v-layout>
                    </v-card-text>
                  </v-card>
                </v-flex>
                <!--1st card end-->
                <v-flex xs12 sm6>
                  <!--2nd start-->

                  <v-card class="pb-2" style="height:528px;">
                    <v-card-text>
                      <v-layout row wrap>
                          <v-flex xs12 class="pb-0 pt-2 ">
                              <h1 style="font-family:Times New Roman; font-size: 22px; ">Example of Severe Weather</h1>
                         </v-flex>

                         <v-flex xs6 style="position:relative; top:15px;" >
                             <v-flex  xs12 class="pb-2" style="background-color: #eaeff7;">
                               <v-card-media src="images/hurricane.jpg" height="200px" width="800px"></v-card-media>
                             </v-flex>
                             <v-flex xs12 class="pt-0 " style="background-color: #eaeff7;">
                               <h1 style="font-family:Times New Roman; font-size: 22px; ">Giant Whirl</h1>
                               <p style="font-family:Times New Roman; font-size: 16px; margin:0;" align="justify">
                                Hurricane, or typhoons, are huge stroms that form over warm, tropical oceans near the Equator.
                                Hot, moist air rises and cools to make clouds that spin in a giant whirl. Wind around the eye
                                of the storm gust to speeds up to 320km/h (200mph).
                               </p>
                             </v-flex>

                        </v-flex>
                        <v-flex xs6 style="position:relative; top:15px;" class="pb-2">
                            <v-flex  xs12 class="pb-2" style="background-color: #eaeff7;">
                              <v-card-media src="images/tornado.jpg" height="200px" width="800px"></v-card-media>
                            </v-flex>
                            <v-flex xs12 class="pt-0 " style="background-color: #eaeff7;">
                              <h1 style="font-family:Times New Roman; font-size: 22px; ">Spinning Column</h1>
                              <p style="font-family:Times New Roman; font-size: 16px; margin:0;" align="justify">
                               A tornado is a spinning column of air reaching out from the base of a thundercloud. Air in a tornado is set spinning by strong wind in the top part
                               of the cloud. The spinning speed of a tornado may reach up to 480km/h (300mph).
                              </p>
                            </v-flex>

                       </v-flex>




                     </v-layout>
                    </v-card-text>
                  </v-card>

                </v-flex>
                <!--2nd card end-->


              </v-layout>
            </v-container>
            <!--third row end-->

            <!--4th row-->

            <v-container fluid grid-list-mg class="mb-0 ml-0">

              <v-layout row wrap>

                <v-flex xs12 sm12 >
                  <!--outside container-->

                  <v-card  class="mb-2">
                    <!--card-->
                    <v-card-text>
                    <v-layout row wrap>
                      <v-flex xs9  >
                        <h1 style="font-family:Times New Roman; font-size: 22px; ">Climate of The World</h1>
                        <p style="font-family:Times New Roman; font-size: 16px; margin:0;" align="justify">
                        Climate is the description of the long-term pattern of weather in a particular area.
                        Some scientists define climate as the average weather for a particular region and time period, usually taken over 30-years. It's really an average pattern of weather for a particular region.
                        Climates are affected by other things, too, such as mountains, winds,
                        and ocean currents.
                        </p>
                        <h1 style="font-family:Times New Roman; font-size: 22px; margin-top:15px;">Curved Earth</h1>
                        <p style="font-family:Times New Roman; font-size: 16px; margin:0;" align="justify">
                        Different parts of the Earth receive different amounts of heat from the Sun. At the Equator, the Sun's
                        rays heat a small area, making regions there very hot. At the poles, the Sun's rays spread out over a
                        bigger area, making these regions cold. Areas in between have less extreme climates.
                        </p>
                      </v-flex>
                      <v-flex xs3 >
                              <v-card-media src="images/curveearth.jpg" height="230px" width="800px"></v-card-media>
                      </v-flex>

                      <v-flex xs12>
                        <h1 style="font-family:Times New Roman; font-size: 22px; ">World Climate Zones</h1>
                        <p style="font-family:Times New Roman; font-size: 16px; margin:0; padding-bottom:20px;" align="justify">
                      To define a climate region, geographers must make generalizations about what the typical weather conditions are like over many years in a location.
                      Geographers use a variety of methods to describe climate patterns. The most common method uses latitude to help define the climate.
                      World climates are generally divided into five large regions: tropical, dry, mid-latitude, high latitude, and highland.
                        </p>
                        <img src="images/climatezone.png" height="560px" style="border: 0.8px solid; position:relative; right:8px;">
                      </v-flex>



                    </v-layout>

                    </v-card-text>
                  </v-card>
                  <!--card-->

                </v-flex>
                <!--outside container-->


              </v-layout>
            </v-container>
            <!--4th row end-->


            <hr class="lineStyle mt-4 mb-1" style="border-top : 1px solid #357ff4;">
            <v-flex xs12>
              <h1 class="mb-3">Try some other Topics : </h1>
              <v-card class="white--text mb-4 headline" v-for="item in suggestTopics" :key="item.title">
                <v-card-media :src="item.image" height="70px">
                  <v-card-title>{{ item.title }}</v-card-title>
                  <v-spacer></v-spacer>
                  <v-btn fab dark :color="item.btncolor" class="mt-2 mr-4" v-bind:href="item.btnlink">
                    <v-icon dark>chevron_right</v-icon>
                  </v-btn>
                </v-card-media>
              </v-card>
            </v-flex>






          </v-flex>


        </v-layout>
      </v-container>

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
    new Vue({
      el: '#app',
      data: {
        url: 'images/cloudfact.png',
        airballoon: 'images/airballoon.png',
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
            title: 'Notes (Age 10 - 12)',
            disabled: false,
            link: 'notes.php'
          },
          {
            title: 'Weather',
            disabled: true
          }
        ],

        suggestTopics: [{
            title: 'Learn About The Mysterious Space.',
            image: 'images/space.jpg',
            btncolor: 'purple',
            btnlink: 'solar2.php'
          },
          {
            title: 'Want To Know About Dinosaur?',
            image: 'images/dinosaur.jpg',
            btncolor: 'orange',
            btnlink: 'dino2_page.php'
          },
          {
            title: 'Find out interesting facts about plants',
            image: 'images/plant.jpg',
            btncolor: 'green',
            btnlink: 'plants_notes_2.php'
          },
        ],

      }

    })
  </script>

</body>

</html>
