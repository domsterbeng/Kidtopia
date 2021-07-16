<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
  <title>Kidtopia</title>

  <!-- Css Links -->
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
  <link href="https://unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/weather.css">
  <link rel="stylesheet" type="text/css" href="css/weather2.css">
  <link rel="stylesheet" type="text/css" href="css/earthweather.css">
  <link rel="stylesheet" type="text/css" href="css/spaceman.css">

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
            <v-layout row wrap style="background-image:url(images/star.jpg); background-size: 100%; border: 10px solid white;" class="mb-0">
              <v-flex xs6 style="height:200px;" class="hidden-xs-only">
                <div class="sun-container">
                  <div class="ray-container">
                    <div class="ray">
                      <div class="ray-inner"></div>
                    </div>
                    <div class="ray">
                      <div class="ray-inner"></div>
                    </div>
                    <div class="ray">
                      <div class="ray-inner"></div>
                    </div>
                  </div>
                  <div class="face">
                    <div class="eye-container">
                      <div class="eye"></div>
                      <div class="eye"></div>
                    </div>
                    <div class="mouth-container">
                      <div class="mouth"></div>
                    </div>
                  </div>
                </div>
              </v-flex>
              <!--Note1-->
              <v-flex xs6 style="height:200px; " class="hidden-xs-only">
                <div class="slideContainer">
                  <div class="bubble"><img src="images/idea.png" width=40px height=40px style="float:left; margin-left: 5px;">
                    <h1 style="font-family:Times New Roman; font-size: 20px; position: relative; bottom: 20px; left: 5px;padding: 10px; ">What Makes the Weather?</h1>
                    <p style="font-family:Times New Roman; font-size: 16px; padding: 20px 20px 20px 15px; position:relative; bottom: 45px; clear:both;" align="justify">
                      The Sun makes the Earth's weather. It heat up the atmosphere, making the air move as currents or winds. It also drive the Earth's water cycle and the world's occean currents. Together, the currents, winds, and water cycle keep heat and water moving around
                      the Earth, making the world's climates, or weather pattern.

                    </p>
                  </div>

                </div>
              </v-flex>

              <!--Earth-->
              <v-flex xs7 style=" height:260px;" class="hidden-xs-only">
                <div class="mouse_scroll">


                  <div>
                    <span class="m_scroll_arrows ar1"></span>
                    <span class="m_scroll_arrows ar2"></span>
                    <span class="m_scroll_arrows ar3"></span>
                    <span class="m_scroll_arrows ar4"></span>
                    <span class="m_scroll_arrows ar5"></span>
                    <span class="m_scroll_arrows ar6"></span>
                    <span class="m_scroll_arrows ar7"></span>
                    <span class="m_scroll_arrows ar8"></span>
                  </div>
                </div>

                <div id="earth">
                  <div id="earth-surface">
                    <div id="surface-1" class="surface"></div>
                    <div id="surface-2" class="surface"></div>
                    <div id="surface-3" class="surface"></div>
                    <div id="surface-4" class="surface"></div>
                    <div id="surface-5" class="surface"></div>
                    <div id="surface-6" class="surface"></div>
                    <div id="surface-7" class="surface"></div>
                    <div id="surface-8" class="surface"></div>
                  </div>
                  <div id="earth-surface-end">
                    <div id="surface-end-1" class="surface"></div>
                    <div id="surface-end-2" class="surface"></div>
                    <div id="surface-end-3" class="surface"></div>
                    <div id="surface-end-4" class="surface"></div>
                    <div id="surface-end-5" class="surface"></div>
                    <div id="surface-end-6" class="surface"></div>
                    <div id="surface-end-7" class="surface"></div>
                    <div id="surface-end-8" class="surface"></div>
                  </div>
                  <div id="earth-cloud">
                    <div id="cloud-1" class="cloud"></div>
                    <div id="cloud-2" class="cloud"></div>
                    <div id="cloud-3" class="cloud"></div>
                    <div id="cloud-4" class="cloud"></div>
                    <div id="cloud-5" class="cloud"></div>
                    <div id="cloud-6" class="cloud"></div>
                  </div>
                  <div id="earth-cloud-end">
                    <div id="cloud-end-1" class="cloud"></div>
                    <div id="cloud-end-2" class="cloud"></div>
                    <div id="cloud-end-3" class="cloud"></div>
                    <div id="cloud-end-4" class="cloud"></div>
                  </div>

                </div>



              </v-flex>
              <!--Spaceman-->
              <v-flex xs5 class="hidden-xs-only">
                <div class="spaceman">
                  <div class="head">
                    <div class="face"></div>
                  </div>
                  <div class="arm left"></div>
                  <div class="arm right"></div>
                  <div class="leg left"></div>
                  <div class="leg right"></div>
                  <div class="torso"></div>
                </div>

              </v-flex>




            </v-layout>
          </v-container>




        </div>
        <!--close biggest cointaner-->

        <!--second row-->

        <v-container fluid grid-list-sm >

          <v-layout row wrap>

            <v-flex xs12 sm7 class="pr-0 pt-0"><!--1st start-->
             <v-flex xs12 >



              <v-card height=350px ><!--card start-->
                <img src="images/weather.png" height=60px width=70px style="position: absolute; top: -2px; left:130px;">

                <v-flex xs12 style=" height: 60px;"> <!--title-->
                  <v-card-text>
                     <h1 style="font-family:Times New Roman; font-size: 28px; position: absolute; top: 15px; left: 15px;">Weather</h1>
                     </v-card-text>
                </v-flex><!--title end-->

                <v-flex xs12>    <!--flip card container-->
                      <v-layout row wrap>
                  <v-flex xs2 class="card-flip ">  <!--weather card 1-->
                    <v-card class="card-content" hover>
                      <v-card-media src="images/sunny.png" height="100px" class="front"></v-card-media>
                      <v-card-text class="back light-blue darken-1 white--text">
                        <div class="text-xs-center mt-4" style="font-size: 15px; font-weight: 500;">
                          Sunny
                        </div>

                      </v-card-text>
                    </v-card>
                  </v-flex>   <!--weather card 1-->

                  <v-flex xs2 class="card-flip">  <!--weather card 2-->
                    <v-card class="card-content" hover>
                      <v-card-media src="images/sunshower.png" height="100px" class="front"></v-card-media>
                      <v-card-text class="back light-blue  darken-1 white--text">
                        <div class="text-xs-center mt-3" style="font-size: 15px; font-weight: 500;">
                          Sun Shower
                        </div>
                      </v-card-text>
                    </v-card>
                  </v-flex>   <!--weather card 2-->

                  <v-flex xs2 class="card-flip">  <!--weather card 3-->
                    <v-card class="card-content" hover>
                      <v-card-media src="images/cloudy.png" height="100px" class="front"></v-card-media>
                      <v-card-text class="back light-blue darken-1 white--text">
                        <div class="text-xs-center mt-4" style="font-size: 15px; font-weight: 500;">
                          Cloudy
                        </div>

                      </v-card-text>
                    </v-card>
                  </v-flex>   <!--weather card 3-->

                  <v-flex xs2 class="card-flip">  <!--weather card 4-->
                    <v-card class="card-content" hover>
                      <v-card-media src="images/rain.png" height="100px" class="front"></v-card-media>
                      <v-card-text class="back light-blue darken-1 white--text">
                        <div class="text-xs-center mt-4" style="font-size: 15px; font-weight: 500;">
                          Rainy
                        </div>

                      </v-card-text>
                    </v-card>
                  </v-flex>   <!--weather card 4-->

                  <v-flex xs2 class="card-flip">  <!--weather card 5-->
                    <v-card class="card-content" hover>
                      <v-card-media src="images/thunderstorm.png" height="100px" class="front"></v-card-media>
                      <v-card-text class="back light-blue darken-1 white--text">
                        <div class="text-xs-center mt-3" style="font-size: 15px; font-weight: 500;">
                          Thunder Storm
                        </div>

                      </v-card-text>
                    </v-card>
                  </v-flex>   <!--weather card 5-->

                  <v-flex xs2 class="card-flip">  <!--weather card 6-->
                    <v-card class="card-content" hover>
                      <v-card-media src="images/snow.png" height="100px" class="front"></v-card-media>
                      <v-card-text class="back light-blue darken-1 white--text">
                        <div class="text-xs-center mt-4" style="font-size: 15px; font-weight: 500;">
                          Snowy
                        </div>

                      </v-card-text>
                    </v-card>
                  </v-flex>   <!--weather card 6-->


                </v-layout>
                </v-flex> <!--flip card container end-->


                <v-flex xs12>  <!-- card  text container-->
                <v-card-text>

                  <p style="font-family:Times New Roman; font-size: 16px; position: absolute; bottom: -1px; right : 10px;padding: 10px ;" align="justify">
                      Weather is what the sky and the air outside are like such as cold and cloudy. The weather is more than just wind or rain, but also includes some
                      stunning effecs in the sky like rainbows and flashes of lightning. Our lives can be affected by the weather. The weather can affect what we wear and
                      we decide to do, such as going to beach on a sunny day. Some people, like farmers, who grow crops, have to know about the weather to make a living.
                      At it worst, weather can destroy homes and causes death. The pattern of weather that a place usually has over a year is called the climate.
                  </p>

                </v-card-text>
              </v-flex>    <!-- card  text container-->


              </v-card><!--card end-->



             </v-flex>

            </v-flex><!--1st card end-->

            <v-flex xs12 sm5 class="ml-0 pl-0 pt-0 "><!--2nd start-->
             <v-flex xs12 >



              <v-card  height=350px>
                <v-card-text>
                    <h1 style="font-family:Times New Roman; font-size: 22px; position: relative; margin-bottom:10px; ">Weather vs Climate</h1>
                    <v-card-media width=324px height=265px><video width="100%" frameborder="0"controls ><source src="images/weather.mp4" type="video/mp4"></video></v-card-media>

                </v-card-text>
              </v-card>



             </v-flex>

           </v-flex><!--2nd card end-->


          </v-layout>
        </v-container>





        <!--third row-->

        <v-container fluid grid-list-mg class="mb-0 ml-0">

          <v-layout row wrap>

            <v-flex xs12 sm3 ><!--1st start-->
              <v-card  height=420px class="mb-2">
                <v-card-text>

                  <v-card-media src="images/bandwinds.jpg" height="300px" contain style="position: relative; top: -40px;"></v-card-media>
                  <img src="images/water.gif" height=75px width=100px style="position: absolute; top: 200px; right:5px;" id="windballon">
                  <h1 style="font-family:Times New Roman; font-size: 22px; position: relative; top: -75px; right: 8px;">The World's Wind</h1>
                  <p style="font-family:Times New Roman; font-size: 16px; position: absolute; bottom: -1px; right : 10px;padding: 10px ;" align="justify">
                    Wind influences the weather. There are three main bands of winds around the Earth: trade winds blow toward the Equator; easterlies blow from the east; and westerlies blow from the west.
                  </p>
                </v-card-text>
              </v-card>
            </v-flex><!--1st card end-->
            <v-flex xs12 sm5><!--2nd start-->

              <v-card height=420px id="worldwind">
                <v-flex xs12 >
                      <img src="images/watercycle.jpg" height=225px width=300px>
                      <img src="images/teaching.png" height=75px width=70px style="position: absolute; top: 160px; right:220px;">
                      <img src="images/water.png" height=120px width=110px style="position: absolute; top: 160px; right:0px;">
                      <div class="watercyclefact">
                        <div class="fact">
                          <h1 style="font-family:Times New Roman; font-size: 14px; position: relative; bottom: 20px; left: 5px;padding: 10px; ">AMAZING FACTS</h1>
                          <p style="font-family:Times New Roman; font-size: 12px; padding: 20px 20px 20px 15px; position:relative; bottom: 45px; clear:both;" align="justify"><b>
                          The amount of water on the Earth stays the same and never changes. It just moves around and around through the water cycle.

                        </b>  </p>
                        </div>

                      </div>
                </v-flex>
                <v-flex xs12>
                  <v-card-text>

                    <h1 style="font-family:Times New Roman; font-size: 22px; position: relative; bottom: 140px; right: 20px;">Water Everywhere</h1>
                    <p style="font-family:Times New Roman; font-size: 16px; position: absolute; bottom: -1px; right : 10px;padding: 10px ;" align="justify">
                      The water cycle is the movement of water from the Earth, up into the sky and back down again. It works when the Sun heats water on land or in the sea, making the water turn into water vapor - an invisible gas in the air. High in the sky, the water vapor
                      cools and turns into water droplets and ice crystals that collect into clouds.
                    </p>

                  </v-card-text>
                </v-flex>

              </v-card>

            </v-flex><!--2nd card end-->

            <v-flex xs12 sm4 ><!--third start-->

              <v-card height=420px style="margin-left: 15px;">
                <v-flex xs12 >
                      <img src="images/weatherpressure.gif" height=225px width=345px>
                      <img src="images/balloon.gif" height=75px width=100px style="position: absolute; top: 20px; right:5px;">
                </v-flex>
                <v-flex xs12>
                  <v-card-text>

                    <h1 style="font-family:Times New Roman; font-size: 22px; position: relative; bottom: 77px; right: 10px;">High and Low Pressure</h1>
                    <p style="font-family:Times New Roman; font-size: 16px; position: absolute; bottom: -1px; right : 10px;padding: 10px ;" align="justify">
                     Warm air rises, making low air pressure areas. Cold air is heavier and sinks down, making high air pressure areas. Winds blow from high pressure to low pressure areas.
                     Low pressure areas usually bring wet and windy weather, while high pressure areas bring dry and settled weather.
                    </p>

                  </v-card-text>
                </v-flex>

              </v-card>
            </v-flex><!--third card end-->

          </v-layout>
        </v-container> <!--third row end-->

        <!--4th row-->

        <v-container fluid grid-list-mg class="mb-0 ml-0">

          <v-layout row wrap>

            <v-flex xs12 sm12 class="pt-0"><!--outside container-->

              <v-card height=420px class="mb-2"><!--card-->

                <v-layout row >

                    <v-flex xs6 style="height:420px;"><!--card container 1 left-->
                         <v-flex xs12 class="pb-0"> <!--pic container-->
                            <v-card-media src="images/forecast.png" height="220px" contain ></v-card-media>
                         </v-flex> <!--pic container-->
                         <v-flex xs12 class="pt-0"> <!--content container-->
                           <v-card-text>

                             <h1 style="font-family:Times New Roman; font-size: 22px; ">Forecasting the Weather</h1>
                             <p style="font-family:Times New Roman; font-size: 16px; margin:0;" align="justify">
                               A weather forecast tells people what the weather is going to like. Coumputers work out the forecast from measurements of rain, wind, air pressure and
                               pressure, and temperature, and from information about what the weather has been like in the past.
                             </p>

                           </v-card-text>
                         </v-flex> <!--content container-->

                    </v-flex><!--card container 1 left-->

                    <v-flex xs6  style="height:420px;"><!--card container 2 right-->
                      <v-flex xs12 class="pb-0"> <!--pic container-->
                         <v-card-media src="images/satellite.png" height="220px" contain ></v-card-media>
                      </v-flex> <!--pic container-->
                      <v-flex xs12 class="pt-0"> <!--content container-->
                        <v-card-text>

                          <h1 style="font-family:Times New Roman; font-size: 22px;">Weather Satellite</h1>
                          <p style="font-family:Times New Roman; font-size: 16px; margin:0;" align="justify">
                              The Earth's weather is watched from land, sea and sky, as well as by satellites in Space. Weather satellies sends pictures of cloud patterns
                              and can measure temperatures all over the Earth.
                          </p>

                        </v-card-text>
                      </v-flex> <!--content container-->

                    </v-flex><!--card container 2 right-->

                </v-layout>


              </v-card> <!--card-->

            </v-flex> <!--outside container-->


          </v-layout>
        </v-container> <!--4th row end-->


        <hr class="lineStyle mt-4 mb-1" style="border-top : 1px solid #357ff4;">
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
            title: 'Notes (Age 7 - 9)',
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
            btnlink: 'solar1.php'
          },
          {
            title: 'Want To Know About Dinosaur?',
            image: 'images/dinosaur.jpg',
            btncolor: 'orange',
            btnlink: 'dino_page.php'
          },
          {
            title: 'Find out interesting facts about plants',
            image: 'images/plant.jpg',
            btncolor: 'green',
            btnlink: 'plants_notes.php'
          },
        ],

      }

    })
  </script>

</body>

</html>
