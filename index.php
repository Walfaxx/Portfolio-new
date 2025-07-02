<?php
require_once('./snipets/header.php');
require_once('./includes/conatact.php');
require_once 'conn.php';
?>
<body>
    <nav class="navbar">
        <div class="container">
            <a href="#" class="logo">Louis Vienne</a>
            <ul class="nav-links">
                <li><a href="#about-me">Qui suis-je ?</a></li>
                <li><a href="#education">Parcours scolaire</a></li>
                <li><a href="#experience">Expérience</a></li>
                <li><a href="#skills">Compétences</a></li>
                <li><a href="./paf.php">Vidéo Boxe</a></li>
            </ul>
        </div>
    </nav>

    <header class="hero">
        <div class="container">
            <h1>Bienvenue dans mon Portfolio</h1>
            <p>Découvrez mon parcours, mes compétences et mes projets.</p>
            <a href="#contact" class="btn">Me contacter</a>
        </div>
    </header>

    <section id="about-me" class="section">
        <div class="container">
            <h2 class="section-title">Qui suis-je ?</h2>
            <div class="about-content">
                <div class="about-text">
                    <ul>
                        <li><strong>Nom :</strong> Louis Vienne</li>
                        <li><strong>Date de naissance :</strong> 27/04/2006 (19 ans)</li>
                        <li><strong>Permis :</strong> Permis B</li>
                    </ul>
                </div>
                <div class="about-image">
                    
                </div>
            </div>
        </div>
    </section>

    
    <section id="education" class="section bg-light">
        <div class="container">
            <h2 class="section-title">Parcours scolaire</h2>
            <img src="./img/image1.png" alt="Parcours scolaire" style="float: right; max-width: 40%; margin-left: 20px; margin-bottom: 20px; margin-top: 0;" />
            <ul>
                <?php
    $sql = "SELECT * FROM parcours";
    $stmt = $pdo->query($sql);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<li>" . htmlspecialchars($row['nom']) . "</li>";
    }
    ?>
            </ul>
        </div>
    </section>

    
    <section id="experience" class="section">
        <div class="container">
            <h2 class="section-title">Expériences</h2>
            <ul>
                <?php
    $sql = "SELECT * FROM experiences";
    $stmt = $pdo->query($sql);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<li>" . htmlspecialchars($row['nom']) . "</li>";
    }
    ?>
            </ul>
        </div>
    </section>

    
    <section id="skills" class="section bg-light">
        <div class="container">
            <h2 class="section-title">Compétences</h2>
            <a href="competences.php">Modifier</a>
           <ul class="skills-list">
    <?php

    $sql = "SELECT * FROM competences";
    $stmt = $pdo->query($sql);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<li>" . htmlspecialchars($row['nom']) . "</li>";
    }
    ?>
        </div>
    </section>

    
        <div class="container">
            <h2 class="section-title">Mes Photos</h2>
                <div class="realisation-grid">
                    <img src="./img/image4.avif" alt="Projet 1" class="realisation-img">
                    <img src="./img/image5.jpg" alt="Projet 2" class="realisation-img"> 
                </div>
        </div>
    </section>

    
    <section id="contact" class="section">
        <div class="container">
            <h2 class="section-title">Contactez-moi</h2>
            <form action="" method="post" class="contact-form">
                <div class="form-group">
                    <label for="fname">Prénom</label>
                    <input type="text" id="fname" name="fname" placeholder="Votre prénom" required>
                </div>
                <div class="form-group">
                    <label for="lname">Nom</label>
                    <input type="text" id="lname" name="lname" placeholder="Votre nom" required>
                </div>
                <div class="form-group">
                    <label for="subject">Sujet</label>
                    <textarea id="subject" name="subject" placeholder="Votre message..." rows="6" required></textarea>
                </div>
                <button type="submit" class="btn">Envoyer</button>
            </form>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <p>&copy;</p>
        </div>
    </footer>
</body>
</html>
