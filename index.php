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
        <?php show_card('img/profil.jpg','Engineer',$text,'...')?> 
        <?php //show_card('img/kite.jpg','Passionate',$text,'Last updated 4 mins ago')?>
      </div>

      <div id="experience" class="container category" style="display:none"> 
        <div class="row">
          <div class="col-md-5 col-lg-4">
            <?php $entries['Fablense']=[
              'id'=>'Fablense',
              'image'=>'fablense.jpg',
              'location'=>'Gold Coast, Australia',
              'title'=>'Founder',
              'content'=>'Develop a hardware/software tracking solution for manufacturing assets',
              'date-start'=>'2022',
              'date-end'=>'now'
            ];
            $entries['Sicame2']=[
              'id'=>'Sicame2',
              'image'=>'sicame.png',
              'location'=>'Brisbane, Australia',
              'title'=>'Industrial Engineer',
              'content'=>'Design, optimize, maintain manufacturing facilities',
              'date-start'=>'2016',
              'date-end'=>'2022'
            ];
            $entries['Sicame1']=[
              'id'=>'Sicame1',
              'image'=>'sicame.png',
              'location'=>'Brisbane, Australia',
              'title'=>'Product Engineer',
              'content'=>'Develop products for the electrical distribution network',
              'date-start'=>'2011',
              'date-end'=>'2016'
            ];
            $entries['ICAM']=[
              'id'=>'ICAM',
              'image'=>'icam.png',
              'location'=>'Nantes, France',
              'title'=>'Engineer Student',
              'content'=>'Generalist engineer school, Mechanical, Electrical, Electronic, Software',
              'date-start'=>'2006',
              'date-end'=>'2011'
            ];
            ?>            
            <?php show_entry_timeline($entries)?>
          </div>
          <div class="col-md-7 col-lg-8">
            <?php show_details_timeline($entries)?>
          </div>
        </div>
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
          //['Poker-Schedule.com','poker.png','Coco','Owner of this website','https://poker-schedule.com/'],
          //['Hendonmob','hendonmob.png','Corentin Hillion','Poker Player','https://pokerdb.thehendonmob.com/player.php?a=r&n=526022'],
          
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
