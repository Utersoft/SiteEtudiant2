<?php
    session_start();
    
    //On appelle la base de donnée que l'on va utiliser pour les requêtes
    try{
        $databaseStudents = new PDO("mysql:host=localhost;dbname=student", "root", "");
        $databaseStudents->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    
    //On gère l'affichage des erreurs
    catch(exception $e){
        die('ERROR : '.$e->getMessage());
    }
    
    $requete = $databaseStudents->prepare("select Libelle_Matiere, Nom, Prenom, Libelle_Examens, Note from Eleves, Matieres, Examens, Resultats where Resultats.ID_Eleve = Eleves.ID_Eleve and Resultats.ID_Examen = Examens.ID_Examen and Examens.ID_Matiere = Matieres.Id_Matiere order by Nom, Libelle_Matiere;");
    $requete->execute();
    $resultat = $requete->fetchAll();
    //var_dump($resultat);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="/css/Index.css" rel="stylesheet">
        <script type="text/javascript" src="/JS/Index.js"></script>
        <title>Accueil</title>
    </head>
    <body>
        <header>
            <h1>Ecole Imaginaire Intranet</h1>
        </header>
        <div id="tableau">
            <?php
                $i = 0;
                echo "<script>";
                echo "initTab();";
                foreach($resultat as $row){
                    echo "addRow($i);";
                    echo "addElement('".$row['Libelle_Matiere']."', $i);";
                    echo "addElement('".$row['Prenom']." ".$row['Nom']."', $i);";
                    //echo "addElement(".$row['Libelle_Examen'].", $i);";
                    echo "addElement('".$row['Note']."', $i);";
                    $i++;
                }
                echo "</script>";
             ?>
        </div>
        <!--<div>
            <table>
                <thead>
                    <tr>
                        <td><h2>Matières</h2></td>
                        <td><h2>Elèves</h2></td>
                        <td><h2>Moyennes</h2></td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        /*$requete2 = $databaseStudents->prepare("select Libelle_Matiere, Nom, Prenom, AVG(Note) as moyenne from Eleves, Matieres, Examens, Resultats where Resultats.ID_Eleve = Eleves.ID_Eleve and Resultats.ID_Examen = Examens.ID_Examen and Examens.ID_Matiere = Matieres.Id_Matiere group by Nom, Libelle_Matiere order by Nom, Libelle_Matiere;");
                        $requete2->execute();
                        $resultat2 = $requete2->fetchAll();
                        foreach($resultat2 as $row){
                            echo "<tr><td>".$row['Libelle_Matiere']."</td><td>".$row['Prenom']." ".$row['Nom']."</td><td>".$row['moyenne']."</td></tr>";
                        }*/
                    ?>
                </tbody>
            </table>-->
        
        </div>
    </body>
</html>

