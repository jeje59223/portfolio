

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
</head>
<body>
    <nav id="navigation">
        <a href="#accueil">Accueil</a>
        <a href="#presentation">Mon histoire</a>
        <a href="#competences">Compétences</a>
        <a href="#experiences">Expériences</a>
        <a href="#formation">Formation</a>
        <a href="#portfolio">PortFolio</a>        
        <a href="#hire">Contact</a>
    </nav>
        <header id="accueil">        
        <h1>Hello, I'm Jérôme ! <br/>
        Développeur PHP / SYMFONY</h1>
        <img id="moi" src="sources/images/moi.jpg" alt="Photo de Jérôme Cnockaert">
    </header>
    <section id="presentation">
            <h2>Mon histoire !</h2>
        <div class="container">            
            <div class="text">
                Bonjour, j'ai découvert le plaisir de coder en manipulant des cartes 
                arduino et raspberry, j'y ai pris goût et ai décidé de me reconvertir 
                vers un métier qui fait appel à ce type de compétence, c'est à dire développeur 
                concepteur d'applications. J'ai beaucoup appris par moi-même via des cours sur 
                le net et en intégrant M2I je souhaite aller plus loin, vivre ma passion et 
                réussir ma reconversion. 
                <br/>            
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, 
                recusandae corrupti excepturi ab laborum, sequi quia perspiciatis sint 
                impedit ex voluptates accusantium maiores doloribus ipsam mollitia quam 
                voluptatum dolorem tempore!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum deleniti 
                ad magnam ducimus temporibus. Tempora adipisci minima provident unde magni 
                non quis distinctio quo culpa iusto omnis sapiente, libero voluptates?
                <br/>            
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, 
                recusandae corrupti excepturi ab laborum, sequi quia perspiciatis sint 
                impedit ex voluptates accusantium maiores doloribus ipsam mollitia quam 
                voluptatum dolorem tempore!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum deleniti 
                ad magnam ducimus temporibus. Tempora adipisci minima provident unde magni 
                non quis distinctio quo culpa iusto omnis sapiente, libero voluptates?
            </div>
            <div class="image_presentation">
                <img src="sources/images/coding.png" alt="" style="height: 350px;">
            </div>
        </div>        
    </section>
    <section id="competences">
        <div class="heading">
            <h2>Compétences</h2>
        </div>
            <div id="mes_competences">
            <div id="conteneur_competences1">                               
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                        <h5>HTML 85 %</h5>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                        <h5>CSS 85 %</h5>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                        <h5>JAVASCRIPT 30 %</h5>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                        <h5>JQUERY 30 %</h5>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                        <h5>NODE.JS 30 %</h5>
                    </div>
                </div>
            </div>        
            <div id="conteneur_competences2">           
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                        <h5>PHP 50 %</h5>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                        <h5>SYMFONY 50 %</h5>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                        <h5>BOOTSTRAP 60 %</h5>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                        <h5>SQL 60 %</h5>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        <h5>JAVA 20 %</h5>
                    </div>
                </div>
            </div>
        </div>       
    </section>
    <section id="experiences" class="timeline">
        <h2>Expériences professionnelles</h2>
        <ul>
            <li>
                <div>
                <time><span style="text-align:center;" <i class="fas fa-briefcase fa-2x"></i></span> Juillet - Octobre 2019</time>
                <h3>IT ROOM à Hem</h3>
                <h4>Développeur PHP SYMFONY Junior</h4>
                <p>
                Développement d'une application permettant la surveillance de l'ensemble d'un parc applicatif<br/>
                Maintenance d'applications<br/>
                Développement d'API (ApiPlatform)<br/>
                </p> 
                </div>
            </li>
            <li>
                <div>
                <time><span style="text-align:center;" <i class="fas fa-briefcase fa-2x"></i></span> Depuis 2003</time>
                <h3>LEROY MERLIN Villeneuve d'Ascq</h3>
                <h4>Conseiller de vente expert</h4>
                <p>
                Suivi des indicateurs pour atteindre les objectifs de ventes<br/>
                Contact avec les fournisseurs<br/>
                Force de proposition en centrale d'achat(nouveautés, services,...)<br/>
                Elaboration et suivi de stratégies en équipe "débriefing en réunion de secteur"<br/>
                </p>
                </div>
            </li>
            <li>
                <div>
                <time><span style="text-align:center;" <i class="fas fa-briefcase fa-2x"></i></span> 2002 - 2003</time>
                <h3>LEROY MERLIN Tourcoing</h3>
                <h4>Logisticien</h4>
                <p>
                Assurer la gestion et la tenue du magasin de stockage pour garantir la disponibilité des produits<br/>
                Préparer les commandes des clients afin d'être au rendez vous sur la satisfaction clients<br/>
                Fiabilisation des stocks et du taux de rupture<br/>
                </p>
                </div>
            </li>               
        </ul>
    </section>
    <section id="formation" class="timeline">
        <h2>Formation</h2>
        <ul>
            <li>
                <div>
                <time><span style="text-align:center;" <i class="fas fa-graduation-cap fa-2x"></i></span>Février - Octobre 2019</time>
                <h3>M2I Formation Villeneuve d'Ascq</h3>
                <h4>Concepteur développeur d'applications (Bac+3/Bac+4 : Niveau II)</h4>               
                </div>
            </li>
            <li>
                <div>
                <time><span style="text-align:center;" <i class="fas fa-graduation-cap fa-2x"></i></span>2002</time>
                <h3>LICP Tourcoing</h3>
                <h4>Diplôme du Baccalauréat Professionnel spécialité commerce</h4>               
                </div>
            </li>
            <li>
                <div>
                <time><span style="text-align:center;" <i class="fas fa-graduation-cap fa-2x"></i></span>2001</time>
                <h3>CREPS de Wattignies</h3>
                <h4>Certificat d'initiateur de football 1er niveau (éducateur sportif)</h4>                
                </div>
            </li>
            <li>
                <div>                
                <time><span style="text-align:center;" <i class="fas fa-graduation-cap fa-2x"></i></span>2000</time>
                <h3>LICP Tourcoing</h3>
                <h4>Brevet D'études Professionnelles métiers de la comptabilité</h4>                
                </div>
            </li>                
        </ul>
    </section>

    <section id="portfolio">
        <h2>Mon Portfolio</h2>
        <div class="cards">
            <div class="card">
                <a href="#">
                    <!-- Image à la une -->
                    <div class="card-image"><img src="sources/images/burger.png" alt="Orange" /></div>
                    <!-- Fin de l'image à la une -->
            
                    <!-- Corp de notre carte -->
                    <div class="card-body">
            
                        <!-- Date de publication de l'article-->
                        <div class="card-date">
                            <time>Novembre 2019</time>
                        </div>
            
                        <!-- Titre de l'article -->
                        <div class="card-title">
                            <h3>BurgerCode</h3>
                        </div>
                        <!-- Extrait de l'article -->
                        <div class="card-excerpt">
                            <p> Site pour afficher les menus d'un restaurant avec une partie administrateur afin d'ajouter, de modifier ou de supprimmer un menu.
                                Il a été développé en HTML, CSS, Bootstrap et PHP.
                            </p>
                        </div>
            
                    </div>
                    <!-- Fin du corp de notre carte -->
                </a>
            </div>
            <div class="card">
                <a href="#">
                    <!-- Image à la une -->
                    <div class="card-image"><img src="sources/images/julo.png" alt="Orange" /></div>
                    <!-- Fin de l'image à la une -->
            
                    <!-- Corp de notre carte -->
                    <div class="card-body">
            
                        <!-- Date de publication de l'article-->
                        <div class="card-date">
                            <time>Septembre 2019</time>
                        </div>
            
                        <!-- Titre de l'article -->
                        <div class="card-title">
                            <h3>Julo Photo</h3>
                        </div>
                        <!-- Extrait de l'article -->
                        <div class="card-excerpt">
                            <p> Site pour un photographe développé en septembre 2019, il a été développé en HTML, CSS, Bootstrap, JavaScript et PHP.</p>
                        </div>
            
                    </div>
                    <!-- Fin du corp de notre carte -->
                </a>
            </div>
            <div class="card">
                <a href="#">
                    <!-- Image à la une -->
                    <div class="card-image"><img src="sources/images/travel.png" alt="Orange" /></div>
                    <!-- Fin de l'image à la une -->
            
                    <!-- Corp de notre carte -->
                    <div class="card-body">
            
                        <!-- Date de publication de l'article-->
                        <div class="card-date">
                            <time>Août 2019</time>
                        </div>
            
                        <!-- Titre de l'article -->
                        <div class="card-title">
                            <h3>Travel Agency</h3>
                        </div>
                        <!-- Extrait de l'article -->
                        <div class="card-excerpt">
                            <p> Site de réservation de vacances. Uniquement partie front-end, développé en HTML et CSS</p>
                        </div>
            
                    </div>
                    <!-- Fin du corp de notre carte -->
                </a>
            </div>
        </div>
    </section>
    <section id="hire">
    <?php

date_default_timezone_set('Europe/Paris');

if(isset($_POST['mail'])){
    $to = "jcnockaert@hotmail.fr";
    $from = $_POST['mail'];
    $object = $_POST['object'];

    $message = "
    <html>
        <head>
            <title>Message sur formulaire de contact de votre portfolio !</title>
        </head>
        <body>
            <h2 style='color:red';>Mon Portfolio</h2>
            <p style='font-size:2rem';> Nom et Prénom: <strong style='color:red';> " . $_POST['name'] . " " . $_POST['firstname'] . "</strong><br/>
            Email: " . $_POST['mail'] . " <br/> 
            Telephone: " . $_POST['phone']  . "<br/>
            En date du: "  .date('d-m-Y à H:i:s') ."<br/> 
            Message: " . $_POST['msg'] . "<br/>
            </h3>
        </body>
    </html>                   
    ";

    $headers = "From: " . $from  . "\n";
    $headers .= "Reply-To: My PortFolio \n";
    $headers .= "Content-Type: text/html; charset=utf8\n";
    
    mail($to, $object, $message, $headers);
?>
    <div class="alert">    
        <strong>Votre message a bien été envoyé !</strong><span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        
    </div>
<?php } ?>

        <h2>Contact Me</h2>
        
        <form method="POST" action="#hire">
              <div class="field object-box">
                    <input type="text" id="object" name="object" placeholder="what is the subject of the message?"/>
                    <label for="object">Object</label>
                    <span class="ss-icon">check</span>
              </div>

              <div class="field name-box">
                    <input type="text" id="name" name="name" placeholder="What Is Your Name?"/>
                    <label for="name">Name</label>
                    <span class="ss-icon">check</span>
              </div>

              <div class="field firstname-box">
                <input type="text" id="firstname" name="firstname" required placeholder="What Is Your Firstname?"/>
                <label for="firstname">Firstname</label>
                <span class="ss-icon">check</span>
              </div>

              <div class="field phone-box">
                <input type="tel" id="phone" name="phone" pattern="[0-9]{2}.[0-9]{2}.[0-9]{2}.[0-9]{2}.[0-9]{2}" required placeholder="What Is Your Phone Number? (00.00.00.00.00)"/>
                <label for="phone">Phone</label>
                <span class="ss-icon">check</span>
              </div>
    
              <div class="field email-box">
                    <input type="text" id="mail" name="mail" placeholder="name@email.com"/>
                    <label for="mail">Email</label>
                    <span class="ss-icon">check</span>
              </div>
    
              <div class="field msg-box">
                    <textarea id="msg" rows="4" name="msg" placeholder="Your message goes here..."></textarea>
                    <label for="msg">Msg</label>
                    <span class="ss-icon">check</span>
              </div>
    
              <input class="button" type="submit" value="Send" />
      </form>
    </section>
    <footer>
       <p>Copyright ©CNOCKAERT Jérôme 2019</p>
       <a href="https://www.linkedin.com/in/jerome-cnockaert-359a20181/" target="_blank"><img src="sources/images/linkedin.png" alt="logo linkedin"></a>
       <a href="https://twitter.com/Jeje59223" target="_blank"><img src="sources/images/twitter2.png" alt="logo twitter"></a>
       <a href="https://github.com/jeje59223" target="_blank"><img src="sources/images/github.png" alt="logo github"></a>
    </footer>
    <script type="text/javascript" src="public/js/js.js"></script>
</body>
</html>