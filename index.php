<html>
  <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cyber-School</title>
  <link href="accueil.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    
   <nav>
        <ul>
        <li><a href="#"><h2>Home</h2></a></li>
        <li><a href="formation.html"><h2>Formations</h2></a></li>
        <li><a href="formulaire.html"><h2>Informations</h2></a></li>
        <li><a href="inscription.html"><h2>Inscription</h2></a></li>
        <li><a href="propos.html"><h2>About us</h2></a></li> 
        </ul>
   </nav>
    <img src="index.jpeg" width="100%"/>
    <form action="verification.php" method="post">
      <fieldset style="width:25%;" border=1>
      <?php
    if (isset($_GET['error']) && $_GET['error'] == 1) {
        echo "<p style='color: red;'>Erreur de connexion. Veuillez vérifier votre nom d'utilisateur et votre mot de passe.</p>";
    }?>
        <legend>Espace étudiant</legend>
       <div>
         <label for="username">User name:</label>
        <input type="text" id="username" name="username">
       </div>
        <div>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password">
        </div><br>
        <input style="margin-left:20px" type="submit" value="Se connecter">
        
      </fieldset>
    </form>
    <h1 width="100px"><b><u>Cyber-School</u>: Le paradis de la Cyber-securité</b></h1>
   <h1><u>Présentation</u>:</h1><br>
   <p><b>Bienvenue à Cyber-School, la faculté de cyber sécurité de premier choix en Tunisie, située au cœur de la Cyber Valley. Notre établissement offre une formation en alternance qui combine une éducation de haute qualité avec une expérience professionnelle concrète.

En choisissant Cyber-School, vous aurez l'opportunité de devenir un expert en cyber sécurité dans un contexte où la demande de professionnels qualifiés dans ce domaine est en constante augmentation. En effet, la pénurie de talents en cyber sécurité est un défi majeur dans le monde actuel, avec l'augmentation exponentielle de la surface d'attaque due à la prolifération des objets connectés, de l'intelligence artificielle, de la blockchain et d'autres technologies émergentes.

Notre approche en alternance vous permettra d'acquérir une solide expérience pratique tout en suivant des cours théoriques dispensés par notre équipe d'enseignants hautement qualifiés. Vous serez ainsi préparé à relever les défis complexes et en constante évolution du domaine de la cyber sécurité, et à répondre à la demande croissante du marché du travail en matière d'experts qualifiés dans ce domaine.

Les diplômés de Cyber-School sont hautement recherchés par les employeurs nationaux et internationaux en raison de leur formation approfondie et de leur expérience professionnelle concrète. En rejoignant notre communauté d'étudiants et de professionnels passionnés, vous aurez accès à des ressources pédagogiques de pointe et à des opportunités de réseautage avec des experts de l'industrie, ce qui vous permettra de vous démarquer sur le marché du travail.

Rejoignez Cyber-School, la meilleure faculté de cyber sécurité en Tunisie, pour acquérir les compétences nécessaires afin de devenir un expert en cyber sécurité et contribuer à relever les défis complexes et en constante évolution du domaine de la cyber sécurité dans un contexte de pénurie de talents et d'augmentation de la surface d'attaque due à l'émergence de nouvelles technologies.Pour plus d'informations, cliquer 
<a style="color:yellow;" href="alternance.html">ici</a>
   </b> </p>
    <hr>
    <footer>
      <h1><u>Contactez nous sur</u>:</h1>
     <b> <a href="https://www.facebook.com/tidiano.odglecharo?mibextid=LQQJ4d"><i class="fa-brands fa-facebook"></i></a>
      <a href="https://instagram.com/tidianoodg?igshid=YmMyMTA2M2Y="><i class="fa-brands fa-square-instagram"></i></a>
      <a href="http://linkedin.com/in/tidjène-ouédraogo-783587244"><i class="fa-brands fa-linkedin"></i></a>
      <a href="https://twitter.com/tidjene"><i class="fa-brands fa-square-twitter"></i></a>
     </b>
    </footer>

    <!-- Le badge qui donne l'accès au code souce -->
    
    <script src="https://replit.com/public/js/replit-badge.js" theme="green" defer></script> 
  </body>
</html>