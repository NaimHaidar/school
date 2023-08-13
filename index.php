
<!DOCTYPE html>
<html lang="en">

<head>
  <title>code labs</title>
  <meta property="og:title" content="code labs" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style data-tag="default-style-sheet">
    html {
      font-family: Inter;
      font-size: 16px;
    }

    body {
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      text-transform: none;
      letter-spacing: normal;
      line-height: 1.15;
      color: var(--dl-color-gray-black);
      background-color: var(--dl-color-gray-white);

    }
  </style>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
    data-tag="font" />
  <!--This is the head section-->
  <!-- <style> ... </style> -->
  <style data-section-id="dropdown">
    [data-thq="thq-dropdown"]:hover>[data-thq="thq-dropdown-list"] {
      display: flex;
    }

    [data-thq="thq-dropdown"]:hover>div [data-thq="thq-dropdown-arrow"] {
      transform: rotate(90deg);
    }
  </style>
  <link rel="stylesheet" href="./style.css" />
</head>

<body>
  <div>
    <link href="./index.css" rel="stylesheet" />

    <div class="home-container">
      <header data-thq="thq-navbar" class="home-navbar-interactive">
        <a href="index.php" class="home-navlink">
          <img alt="image" src="public/code%20labs-1500h.png" class="home-image" />
        </a>
        <div data-thq="thq-navbar-nav" data-role="Nav" class="home-desktop-menu">
          <nav data-thq="thq-navbar-nav-links" data-role="Nav" class="home-nav nav">
            <a href="about.php" class="home-navlink1 text">About</a>
            <span class="home-text text">Features</span>
            <span class="home-text1 text">Team</span>
            <span class="home-text2 text">Blog</span>
          </nav>
        </div>
        <div data-thq="thq-navbar-btn-group" class="home-btn-group">
          <a href="login.php" class="home-login text button">Login</a>
          <button class="text button">Register</button>
        </div>
        <div data-thq="thq-burger-menu" class="home-burger-menu">
          <svg viewBox="0 0 1024 1024" class="home-icon">
            <path
              d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z">
            </path>
          </svg>
        </div>
        <div data-thq="thq-mobile-menu" class="home-mobile-menu">
          <div data-thq="thq-mobile-menu-nav" data-role="Nav" class="home-nav1">
            <div class="home-container1">
              <img alt="image" src="public/code%20labs-1500h.png" class="home-image1" />
              <div data-thq="thq-close-menu" class="home-menu-close">
                <svg viewBox="0 0 1024 1024" class="home-icon02">
                  <path
                    d="M810 274l-238 238 238 238-60 60-238-238-238 238-60-60 238-238-238-238 60-60 238 238 238-238z">
                  </path>
                </svg>
              </div>
            </div>
            <nav data-thq="thq-mobile-menu-nav-links" data-role="Nav" class="home-nav2">
              <span class="home-text3 text">About</span>
              <span class="home-text4 text">Features</span>
              <span class="home-text5 text">Pricing</span>
              <span class="home-text6 text">Team</span>
              <span class="home-text7 text">Blog</span>
            </nav>
            <div class="home-container2">
              <a href="login.php" class="home-login1 button">Login</a>
              <a href="sign-up.php" class="home-register1 button">
                Register
              </a>
            </div>
          </div>
          <div class="home-icon-group">
            <svg viewBox="0 0 950.8571428571428 1024" class="home-icon04">
              <path
                d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z">
              </path>
            </svg><svg viewBox="0 0 877.7142857142857 1024" class="home-icon06">
              <path
                d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z">
              </path>
            </svg><svg viewBox="0 0 602.2582857142856 1024" class="home-icon08">
              <path
                d="M548 6.857v150.857h-89.714c-70.286 0-83.429 33.714-83.429 82.286v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571c0-144.571 88.571-223.429 217.714-223.429 61.714 0 114.857 4.571 130.286 6.857z">
              </path>
            </svg>
          </div>
        </div>
      </header>
    

    <div class="qa_container">
      <div class="col1">
        <div class="userimg"><img
            src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dXNlciUyMHByb2ZpbGV8ZW58MHx8MHx8&w=1000&q=80"
            alt="" srcset=""></i>
        </div>
        <div class="vote">
          <button class="upvote v"><i class="fa fa-sort-asc" aria-hidden="true"></i>
          </button>
          <div class="count">11</div>
          <button class="downvote v"><i class="fa fa-sort-desc" aria-hidden="true"></i>
          </button>
        </div>
      </div>
      <div class="col2">
        <div class="infobar cdw">
          <div class="name">Matine Hope</div>
          <div class="date">Asked : April 19, 2018</div>
        </div>
        <div class="heading">
          Is this statement , "i see him last night" can be understood as " i saw him last night" ?

        </div>
        <br>
        <div class="details">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia quisquam pariatur perspiciatis
          necessitatibus eligendi nemo adipisci voluptates eveniet, distinctio officiis et fugiat rerum, vel
          similique doloremque, esse nam. Reiciendis nihil quisquam vel tempora repudiandae aliquam rerum
          inventore, excepturi, doloribus obcaecati eligendi laboriosam pariatur ab. Eveniet enim maxime
          molestias minima quis vel! Deleniti non totam architecto in, praesentium nisi reiciendis repudiandae
          explicabo illum sapiente cumque nam modi ut inventore amet aliquid tempora qui voluptates est
          perspiciatis vero fugiat! Ad saepe unde rerum repellendus iusto. Aliquam in commodi tempora suscipit
          sint distinctio. Ipsam, corrupti sequi quibusdam magni autem magnam amet in exercitationem.
        </div>
        <div class="tags">
          <a class="dh" href="">English</a>
          <a class="dh" href=""> Language </a>
        </div>
      </div>
    </div></div>
  </div>
  <script data-section-id="navbar" src="https://unpkg.com/@teleporthq/teleport-custom-scripts"></script>
</body>

</html>