<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Resume Corentin Hillion">
    <meta name="author" content="Corentin Hillion">
    <meta name="generator" content="Coco 1.0.0">
    <title>Corentin Hillion - Resume</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <?php include("function.php")?>
  </head>
  <body>
    <!-- Navbar -->
    <header data-bs-theme="dark">
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Corentin Hillion</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">About Me</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Experiences</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Skills Matrix</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
            </ul>
            <!-- <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
          </div>
        </div>
      </nav>
    </header>
    <!-- Main Body -->
    <main style="padding-top: 70px;">
      <div id="about-me" class="container category">  
        <?php $text="Something short and leading about the collection below—its contents, the creator, etc. 
        Make it short and sweet, but not too short so folks don’t simply skip over it entirely.";
        $text="";  ?>    
        <?php show_card('img/profil.jpg','Engineer',$text,'Last updated 4 mins ago')?> 
        <?php show_card('img/kite.jpg','Passionate',$text,'Last updated 4 mins ago')?>
      </div>

      <div id="experience" class="container category" style="display:none"> 
        <div class="row">
          <div class="col">
              <div class="timeline-steps aos-init aos-animate" data-aos="fade-up">
                  <div class="timeline-step">
                      <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2003">
                          <div class="inner-circle"></div>
                          <p class="h6 mt-3 mb-1">2011</p>
                          <p class="h6 text-muted mb-1">Nantes, France</p>
                          <p class="h6 text-muted mb-0 mb-lg-0">Graduate from ICAM Engineering School</p>
                      </div>
                  </div>
                  <div class="timeline-step">
                      <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2004">
                          <div class="inner-circle"></div>
                          <p class="h6 mt-3 mb-1">2011</p>
                          <p class="h6 text-muted mb-1">Brisbane</p>
                          <p class="h6 text-muted mb-0 mb-lg-0">Started at Sicame Australia</p>
                      </div>
                  </div>
                  <div class="timeline-step">
                      <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2005">
                          <div class="inner-circle"></div>
                          <p class="h6 mt-3 mb-1">2022</p>
                          <p class="h6 text-muted mb-1">Gold Coast</p>
                          <p class="h6 text-muted mb-0 mb-lg-0">Launched FabLense</p>
                      </div>
                  </div>
                </div>
              </div>
          </div>
          <style>
            body{margin-top:20px;}
            .timeline-steps {
                display: flex;
                justify-content: center;
                flex-wrap: wrap
            }

            .timeline-steps .timeline-step {
                align-items: center;
                display: flex;
                flex-direction: column;
                position: relative;
                margin: 1rem
            }

            @media (min-width:768px) {
                .timeline-steps .timeline-step:not(:last-child):after {
                    content: "";
                    display: block;
                    border-top: .25rem dotted #3b82f6;
                    width: 3.46rem;
                    position: absolute;
                    left: 7.5rem;
                    top: .3125rem
                }
                .timeline-steps .timeline-step:not(:first-child):before {
                    content: "";
                    display: block;
                    border-top: .25rem dotted #3b82f6;
                    width: 3.8125rem;
                    position: absolute;
                    right: 7.5rem;
                    top: .3125rem
                }
            }

            .timeline-steps .timeline-content {
                width: 10rem;
                text-align: center
            }

            .timeline-steps .timeline-content .inner-circle {
                border-radius: 1.5rem;
                height: 1rem;
                width: 1rem;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                background-color: #3b82f6
            }

            .timeline-steps .timeline-content .inner-circle:before {
                content: "";
                background-color: #3b82f6;
                display: inline-block;
                height: 3rem;
                width: 3rem;
                min-width: 3rem;
                border-radius: 6.25rem;
                opacity: .5
            }
          </style>
      </div>

      <div id="skills" class="container category" style="display:none">
          <?php $engineering_skills=[
              ['Product Development','product.png',5,''],
              ['Project Management','project.png',5,''],
              ['Lean Manufacturing','lean.png',4,''],
            ]
          ?>
          <?php $dev_skills=[
              ['Office','office.jpg',5,''],
              ['PHP','php.jpg',5,''],
              ['Laravel','laravel.png',4,''],
              ['HTML & CSS','htmlcss.png',4,''],
              ['RestAPI','restapi.png',4,''],
              ['Javascript','javascript.jpg',3,''],
              ['Mysql','mysql.png',3,''],
              ['SQL','sql.jpg',3,''],
              ['PowerBI','powerbi.jpg',3,''],
              ['Python','python.jpg',3,''],
              ['Android Studio','android.png',3,''],
              ['C C#','c.png',2,''],
            ]
          ?>
          <?php $lang_skills=[
              ['English','england.png',5,''],
              ['French','france.png',5,''],
              ['Spanish','spain.png',2,''],
              ['German','germany.png',2,''],
            ]
          ?>
        <div class="row">
          <div class="col-md-3 col-lg-4"><?php show_skill_table($engineering_skills,'Engineering')?></div>
          <div class="col-md-6 col-lg-4"><?php show_skill_table($dev_skills,'Development')?></div>
          <div class="col-md-3 col-lg-4"><?php show_skill_table($lang_skills,'Language')?></div>
        </div>
      </div>
      <div id="contact" class="container category" style="display:none">  
        <?php $socials=[
          ['GitHub','git.jpg','Cocololco','','https://github.com/Cocololco'],
          ['Instagram','insta.png','Cocololco','','https://www.instagram.com/cocololco/'],
          ['Twitter','twitter.png','Coc00z','','https://twitter.com/C0c00z'],
          ['Facebook','facebook.png','Corentin Hillion','','https://www.facebook.com/corentin.hillion'],
          ['Poker-Schedule.com','poker.png','Coco','Owner of this website','https://poker-schedule.com/'],
          ['Hendonmob','hendonmob.png','Corentin Hillion','Poker Player','https://pokerdb.thehendonmob.com/player.php?a=r&n=526022'],
          
        ];?>
        <?php show_cards_social($socials)?>
      </div>
      
      <!-- FOOTER
      <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        
      </footer> -->
    </main>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/function.js"></script>
    
  </body>
</html>
