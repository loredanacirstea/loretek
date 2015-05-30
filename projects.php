<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Loretek</title>

     <!-- Bootstrap -->
    <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link rel="icon" type="image/png" href="images/favicon.ico">

    <script type="text/javascript" src="js/scripts.js"></script>
  </head>
  <body>
    <div class="container">
  <div class="row clearfix">
    <div class="col-md-12 column">
      <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
        <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="index.php">Loretek</a>
        </div>
        
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li>
              <a href="projects.php">Projects</a>
            </li>
            <li>
              <a href="docs/CVLoredanaCirsteaEJ.pdf" target="_blank">CV</a>
            </li>
            <li>
              <a href="edu.php">Academics</a>
            </li>
            <li>
              <a href="hobbies.php">Hobbies</a>
            </li>
            <li>
              <a href="contact.php">Contact</a>
            </li>       
          </ul> 
        </div>
      </nav>

      <div class="row_p">
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail thumb">
            <img src="images/projects/oroboro-spiral2.png" class="img_table" data-src="holder.js/300x300" alt="...">
            <div class="caption">
              <h3>Orobo.ro</h3>
              <p>Pre-pre-alpha live-collaboration SVG editor with cloud support, in MeteorJs.</p>
              <p>Mega open source project, combining powerful SVG editing features (from basic operations to using mathematical equations and symmetry in order to create complex designs), with creating and maintaining an online database for sharing, showcasing works, live-collaboration on projects and even creating and performing tutorials and presentations.</p>
              <p>My contribution in short:
                <ul>
                  <li>implemented to UML specifications</li>
                  <li>major features implemented:
                    <ul>
                      <li>client-side API</li>
                      <li>server-side API</li>
                      <li>visual data entry with live feedback</li>
                      <li>algorithms for symmetry and other engines</li>
                      <li>vectorial and raster image server on Node.js</li>
                    </ul>
                  </li>
                  <li>ensured live collaboration through MongoDB synch system and webSockets</li>
                </ul>

              <p>Implemented, tested, debugged, deployed the software and data on multiple platforms by virtual machines. </p>
              <p>All the communication related to the project is in English.</p>
              <p>SVG, MeteorJS, MongoDB, JavaScript, jQuery, server-side API, virtual machine testing</p>
              <p><a href="http://orobo.ro" target="_blank" class="btn btn-primary" role="button">Orobo.ro</a> <a href="https://github.com/oro8oro/oroboro" target="_blank" class="btn btn-default" role="button">GitHub</a></p>
            </div>
          </div>
        </div>
        <!--</div>-->
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail thumb">
            <img src="images/projects/connectable2.png" class="img_table" data-src="holder.js/300x300" alt="...">
            <div class="caption">
              <h3>svg.connectable.js fork</h3>
              <p>A JavaScript library for connecting SVG elements with algorithm for choosing the nearest path point for attaching the connector and algorithm for creating curved connectors.<p>

              <p>Different from original jilix library:
              <ul>
                <li>the connector can be any SVG Path element defined through use() (usually connectors are reused).</li>
                <li>you can define the type of attachment (center, perifery) separate for source and target</li>
                <li>you can have straight/curved connectors - available for the 'default' connector.</li>
                <li>functions for changing the connection settings after initializing it.</li>
                <li>padEllipse function is used automatically for ellipses ('perifery' attachment).</li>
              </ul>
              <p>SVG, JavaScript</p>
              <p><a href="http://jsfiddle.net/L2sjjc3b/11/" target="_blank" class="btn btn-primary" role="button">Test It!</a> <a href="https://github.com/loredanacirstea/svg.connectable.js" target="_blank" class="btn btn-default" role="button">GitHub</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail thumb">
            <img src="images/projects/simple-filter.png" class="img_table" data-src="holder.js/300x300" alt="...">
            <div class="caption">
              <h3>meteor-tabular-filter</h3>
              <p>Meteor package for providing a database filter for the client-side which outputs a Javascript object query for MongoDB. It supports multiple subsequent queries.</p>
              <p>Meteor, JavaScript, MongoDB, Bootstrap, HTML, CSS</p>
              <p><a href="https://atmospherejs.com/loredanacirstea/meteor-tabular-filter" target="_blank" class="btn btn-primary" role="button">Meteor package</a> <a href="https://github.com/loredanacirstea/meteor-tabular-filter" target="_blank" class="btn btn-default" role="button">GitHub</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail thumb">
            <img src="images/projects/subjectrawl_tools.png" class="img_table" data-src="holder.js/300x300" alt="...">
            <div class="caption">
              <h3>SubjectRaw</h3>
              <p>SubjectRaw is thought as an interface between ontology creators and the actual users who want to index, organize and link their data. It provides tools for integrating semantic content into the Web.</p>
              <p>Meteor, Semantic UI, JavaScript, MongoDB, HTML, CSS</p>
              <p><a href="http://subjectraw.meteor.com" target="_blank" class="btn btn-primary" role="button">SubjectRaw</a> <a href="https://github.com/loredanacirstea/subjectrawl" target="_blank" class="btn btn-default" role="button">GitHub</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail thumb">
            <img src="images/projects/ontobrowse_tree.png" class="img_table" data-src="holder.js/300x300" alt="...">
            <div class="caption">
              <h3>Ontobrowse</h3>
              <p>R package ver.0.3 for browsing and maintaining ontologies, deployed on OpenCPU.</p>
              <p>Demo for the SubjectR project, which brings ontologies at the fingertips of data researchers and offers a way to standardize data labeling. With the emergence of R servers, R data is ready to be crowdsourced and indexed.</p>
              <p>OpenCPU, Bootstrap, R language, Javascript, HTML, CSS</p>
              <p><a href="https://public.opencpu.org/ocpu/github/loredanacirstea/ontobrowse/www/" target="_blank" class="btn btn-primary" role="button">Ontobrowse</a> <a href="https://github.com/loredanacirstea/ontobrowse/wiki" target="_blank" class="btn btn-default" role="button">GitHub</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail thumb">
            <img src="images/projects/plot.png" class="img_table" data-src="holder.js/300x300" alt="...">
            <div class="caption">
              <h3>Graduation Thesis</h3>
              <p>Algorithm of translation in the Romanian language for the Terminologia Histologica and APIs for a controlled vocabulary.</p>
              <p>My open and transparent Graduation Thesis (Doctor of Medicine) tackling Semantic Bioinformatics and Semantic Web in Medicine. Algorithm for creating a computable translation in a new language</p>
              <p>R language</p>
              <p><a href="https://github.com/loredanacirstea/thRoTrans" target="_blank" class="btn btn-primary" role="button">thRoTrans</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail thumb">
            <img src="images/projects/nav2Dwhite.png" class="img_table" data-src="holder.js/300x300" alt="...">
            <div class="caption">
              <h3>Sapiens Mapping Project</h3>
              <p>Volunteer-based medical project.</p><p>My contribution: English presentations to professors and volunteers, creation of controlled medical vocabularies, Romanian translation for FIPAT terminologies and other medical terms, database and site maintenance, documentation and video demonstrations.</p>
              <p>Bootstrap, PHP, MySQL, HTML, CSS, Javascript</p>
              <p><a href="http://sliced.ro/blog" target="_blank" class="btn btn-primary" role="button">SMP</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail thumb">
            <img src="images/projects/TH.png" class="img_table" data-src="holder.js/300x300" alt="...">
            <div class="caption">
              <h3>Terminologia Histologica App</h3>
              <p>The app has browsing and searching capabilities for the Terminologia Histologica terms. Done for the Sapiens Mapping Project.</p>
              <p>Titanium, Javascript, SQLite</p>
              <p><a href="https://itunes.apple.com/us/app/terminologia-histologica/id729055746?mt=8" target="_blank" class="btn btn-primary" role="button">iOS App</a> <a href="https://play.google.com/store/apps/details?id=com.sliced.termhisto&hl=en" target="_blank" class="btn btn-default" role="button">Android App</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail thumb">
            <img src="images/projects/TH.png" class="img_table" data-src="holder.js/300x300" alt="...">
            <div class="caption">
              <h3>Terminologia Embryologica App</h3>
              <p>The app has browsing and searching capabilities for the Terminologia Embryologica terms. Done for the Sapiens Mapping Project.</p>
              <p>Titanium, Javascript, SQLite</p>
              <p><a href="https://itunes.apple.com/us/app/terminologia-embryologica/id729055535?mt=8" target="_blank" class="btn btn-primary" role="button">iOS App</a> <a href="https://play.google.com/store/apps/details?id=com.sliced.termembryo&hl=en" target="_blank" class="btn btn-default" role="button">Android App</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
          <div class="thumbnail thumb">
            <img src="images/projects/thesapiens.png" class="img_table" data-src="holder.js/300x300" alt="...">
            <div class="caption">
              <h3>The Sapiens Presentation</h3>
              <p>This is a demo for an SVG and Javascript based website.</p>
              <p>My contribution: SVG image creation and editing. It is part of a volunteering project.</p>
              <p>SVG-edit, SVG</p>
              <p><a href="http://thesapiens.ro/" target="_blank" class="btn btn-primary" role="button">TheSapiens</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail thumb">
            <img src="images/projects/cstrip.png" class="img_table" data-src="holder.js/300x300" alt="...">
            <div class="caption">
              <h3>ComicStrip</h3>
              <p>PHP project done for attesting my qualifications as a computer operator and intermediary level programmer in high school. It had an easy user interface for creating comic strips, with options for data handling - insert, update, delete, browse.</p>
              <p>PHP, MySQL, Smarty, HTML, CSS.</p>
              <p><a href="http://sourceforge.net/projects/cstrip/" target="_blank" class="btn btn-primary" role="button">Repository</a></p>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
  </div>
</div>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://w3resource.com/twitter-bootstrap/twitter-bootstrap-v2/js/bootstrap-tooltip.js"></script>
    <script src="http://w3resource.com/twitter-bootstrap/twitter-bootstrap-v2/js/bootstrap-popover.js"></script>

  </body>
</html>