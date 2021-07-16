<?php
  session_start();
  include "connection.php";
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/index.css" type="text/css">
    <title>Kidtopia</title>

    <script>
    function asd(a)
  {
      if(a==1)
      document.getElementById("asd").style.display="none";
      else
      document.getElementById("asd").style.display="block";

  }
  </script>

  <script>
  function asd(a)
  {
    if(document.getElementById("asd").style.display="block"){document.getElementById("show-button").style.display="none";}

  }
  </script>


  </head>
  <body>
        <!-- header Showcase-->
        <header id="showcase" class="grid">
          <div class="bgimage">
                  <div class="sun">
                    <img src="images/sun1.png" alt="">
                  </div>
                  <div class="cloud">
                    <img src="images/cl1.png" alt="">
                  </div>
                  <div class="clouds">
                    <img src="images/cl1.png" alt="">
                  </div>
                  <div class="hot">
                    <img src="images/hot.png" alt="">
                  </div>
          </div>
          <div class="content-wrap">
  
              <h1>
                <span>k</span>
                <span>i</span>
                <span>d</span>
                <span>t</span>
                <span>o</span>
                <span>p</span>
                <span>i</span>
                <span>a</span>
              </h1>






          </div>
        </header>

        <!--Main Area-->
        <main id="main">
          <!--Section A-->

          <section id="sectiona" class="grid">
            <div class="content-wrap">

              <div id="show">

                <button class="btn" onclick="asd(2)" id="show-button">Login</button>

              </div>
                  <div class="form" id="asd">
                            <form method="post" action="login.php">
                              <label>Username:
                                  <input type="text" id="user" name="user" placeholder="Enter your username" required="required"/>
                              </label>
                              <label>Password:
                                  <input type="password" id="pass" name="pass" placeholder="Enter your password" required="required" />
                              </label>
                            <button class="loginnbut" type="submit">Login</button>
                            </form>
                            <form method="post">
                            <button onclick="asd(1)" id="hide-button" name="hide" class="hideebut" formnovalidate>Cancel</button>

                            </form>

                  </div>
              </div>
            </div>
          </section>

          <!--Section B-->
          <section id="sectionb" class="grid">

            <ul>


              <div class="red">
              <li>
                <div class="card">
                  <img src="images/register.png" alt="">
                </div>
              </li>
              <div>
                  <a href="register.php">
                <button class="btn2">Register</button>
              </a>
              </div>
              </div>

              <div class="green">
              <li>
                <div class="card">
                  <img src="images/about.png" alt="">
                </div>
              </li>
              <div>
                <a href="contactus.php">
                <button class="btn2">Contact Us</button></a>
              </div>
              </div>

              <div class="orange">
              <li>
                <div class="card">
                  <img src="images/note.png" alt="">
                </div>
              </li>
              <div>
                <a href="menu.php">
                <button class="btn2">Learn</button>
                </a>
              </div>
              </div>

              <div class="yellow">
              <li>
                <div class="card">
                  <img src="images/game.png" alt="">
                </div>
              </li>
              <div>
                <a href="menu.php">
                <button class="btn2">Quiz</button>
                </a>
              </div>
              </div>


            </ul>

          </section>

<!--Section C-->
<!--

-->
<!--Section D-->
            <section id="sectiond" class="grid">
              <div class="box">
                <h2 class="conten-title"></h2>
              </div>
            <div class="box">
              <a href="contactus.php"><h2 class="content-title">Contact Us</h2></a>
              <p>
              Kidtopia understands learning new skills can sometimes be daunting, so we have made our App for kids extremely fun and easy-to-use. Our unique characters help children on their journey of learning.</p>
            </div>

            </section>
        </main>

        <!--Footer-->
        <footer id="main-footer" class="grid">
          <div>© 2018 Kidtopia Inc.</div>
          <div>All Rights Reserved</div>
        </footer>
  </body>
</html>
