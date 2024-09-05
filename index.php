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
      <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active category" data-bs-interval="1000000">
            <div id="about-me" class="container">  
              <?php $text="Founder of the startup <a href=\"https://fablense.com\" target=\"blank\">FabLense</a> with over 10 years of experience in manufacturing as an engineer.<br>
                I’m a self-taught programmer with a passion for problem-solving through coding.<br> 
                In my 20s, I began by selling custom Excel spreadsheets using VBA, which evolved into developing PHP web applications. I’m a quick learner, highly adaptable, and capable of mastering new software or programming languages as needed.";
              ?>    
              <?php show_card('img/profil.jpg','Engineer',$text,'')?>
              <?php $text="Very active, I love any water sport and kitesurf in particular.<br>
                I have been involved in local soccer club for 13 years.";
              ?>  
              <?php show_card('img/kite.jpg','Passionate',$text,'')?>
            </div>
          </div>
          <div class="carousel-item category" data-bs-interval="1000000">
            <div id="experience" class="container " style="display:block"> 
              <div class="row">
                <div class="col-md-12 col-lg-12">
                  <?php $entries['Fablense']=[
                    'id'=>'Fablense',
                    'active'=>'active',
                    'company'=>'Fablense',
                    'image'=>'fablense.jpg',
                    'location'=>'Gold Coast, Australia',
                    'title'=>'Founder',
                    'content'=>'Created a Hardware/Software solution to gather manufacturing data',
                    'details'=>[
                      'Created a Hardware/Software solution to gather manufacturing data',
                      'Build a electronic tracking device using a Raspberry Pi base, custom PCB, custom interface, and firmware in Python.',
                      'Build a web application on Laravel/MySQL, and deployed the application for each new customer on Private or Cloud based Linux server.',
                      'The web application is managing the devices/ storing the data collected/ analysing the data/ creating dashboard and tools to view the data or analysis.',
                      'Build an android app to manage and install the device.',
                      'Identifying potential clients and developed strategies to generate leads.',
                      'Engaging with prospective customers to demonstrate product capabilities and benefits.',
                      'Managing customer relationships and provided ongoing support to ensure satisfaction and product success.',
                    ],
                    'date-start'=>'2022',
                    'date-end'=>'now'
                  ];
                  $entries['Sicame2']=[
                    'id'=>'Sicame2',
                    'company'=>'Sicame',
                    'image'=>'sicame.png',
                    'location'=>'Brisbane, Australia',
                    'title'=>'Industrial Engineer',
                    'content'=>'Redesign and Built of process/assembly lines to optimize production efficiency',
                    'details'=>[
                      'Redesigned and Built of process/assembly lines to optimize production efficiency.',
                      'Redesigned of products to optimize cost of material and cost of manufacturing.',
                      'Reorganised Factory to optimise material/product flows.',
                      'Designed and Built a new line for Solar Farm Connector.',
                      'Built and Deployed a web application to track labour hour (using barcode reader)/ manage quality control/ manage production planning/ track Work Health and Safety issues.',
                      'Web application built on naked PHP/SQL and linked to the ERP software (Sybiz) used in house.',


                    ],'date-start'=>'2016',
                    'date-end'=>'2022'
                  ];
                  $entries['Sicame1']=[
                    'id'=>'Sicame1',
                    'company'=>'Sicame',
                    'image'=>'sicame.png',
                    'location'=>'Brisbane, Australia',
                    'title'=>'Product Engineer',
                    'content'=>'Design, Development and Introduction of new products for low and medium voltage overhead connectors',
                    'details'=>[
                      'Designed, Developed and introduced of new products for low and medium voltage overhead connectors.',
                      'Tested new Product to ANSI/IEC/AS Standards (American/European/Australian) in our in-house NATA laboratory.',
                      'Responsible of every stages of the development of the MechaSplice, an overhead connector patented in the USA. Stages included design, testing, patent application, industrialization and customer training.',
                      'Maintained and improved our procedure following the ISO 9001:2015 and ISO 14001:2015 whithin the engineering office and test laboratories.',
                      'Customer support and training (utilities and solar farms).',
                    ],'date-start'=>'2011',
                    'date-end'=>'2016'
                  ];
                  $entries['ICAM']=[
                    'id'=>'ICAM',
                    'company'=>'ICAM',
                    'image'=>'icam.png',
                    'location'=>'Nantes, France',
                    'title'=>'Engineer Student',
                    'content'=>'Generalists/multidisciplinary engineers school',
                    'details'=>[
                      'Generalists/multidisciplinary engineers school',
                    ],'date-start'=>'2006',
                    'date-end'=>'2011'
                  ];
                  ?>            
                  <?php show_entry_timeline($entries)?>
                </div>
                <div class="col-md-7 col-lg-8">
                  <?php //show_details_timeline($entries)?>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item category" data-bs-interval="1000000">
            <div id="skills" class="container " style="display:block">
              <?php $engineering_skills=[
                  ['Product Development','product.png',5,''],
                  ['Project Management','project.png',5,''],
                  ['SolidWorks','sw.png',5,''],
                  ['Lean Manufacturing','lean.png',4,''],
                  ['AutoCad','cad.png',3,''],
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
                  ['Spanish','spain.png',1,''],
                  ['German','germany.png',1,''],
                ]
              ?>
              <div class="row">
                <div class="col-md-3 col-lg-4"><?php show_skill_table($engineering_skills,'Engineering')?></div>
                <div class="col-md-6 col-lg-4"><?php show_skill_table($dev_skills,'Development')?></div>
                <div class="col-md-3 col-lg-4"><?php show_skill_table($lang_skills,'Language')?></div>
              </div>
            </div>
          </div>
          <div class="carousel-item category" data-bs-interval="1000000">
            <div id="contact" class="container " style="display:block">  
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
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon">test</span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" >test</span>
          <span class="visually-hidden">Next</span>
        </button>
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
