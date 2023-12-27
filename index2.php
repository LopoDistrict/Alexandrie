<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alexandrie</title>
    <link rel="stylesheet" href="style5.css">
    <link rel="icon" type="image/x-icon" href="favicon.png">
</head>
<body>
<div class="title" style="background-color: black;height: 100px;border-radius: 15px;">
    <h1>Alexandrie</h1>
</div>
    
        <h2 style="margin-top: 3em;">Le site est mise à jour quotidiennement. <mark>N'oubliez pas de partager ce site dans votre groupe de classe, amis etc...</mark></h2>
    <p style="font-family: 'Ubuntu', sans-serif;">Vous souhaitez un autre format? <a href="https://www.ilovepdf.com/fr/pdf_en_word"> Rendez vous ici pour convertir les fichiers. </a>
    </p>
    
    <div class="container">
    
    <script>
        function myFunction() {
        // Declare variables
        var input, filter, table, tr, td, i, j, l, txtValue, tr2, tr3, table2, table3;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        table2 = document.getElementById("myTable2");
        table3 = document.getElementById("myTable3");        
        tr = table.getElementsByTagName("tr");
        tr2 = table2.getElementsByTagName("tr");
        tr3 = table3.getElementsByTagName("tr");



        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
            }
        }


        // 2e table
        for (j = 0; j < tr2.length; j++) {
            td2 = tr2[j].getElementsByTagName("td")[0];
            if (td2) {
            txtValue = td2.textContent || td2.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr2[j].style.display = "";
            } else {
                tr2[j].style.display = "none";
            }
            }
        }

        // 3e table
        for (l = 0; l < tr3.length; l++) {
            td3 = tr3[l].getElementsByTagName("td")[0];
            if (td3) {
            txtValue = td3.textContent || td3.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr3[l].style.display = "";
            } else {
                tr3[l].style.display = "none";
            }
            }
        }

        }
        
        
    </script>
    <div class="nb_rssces">
        <h2>Nombre de ressources, fichiers et liens : 131.</h2>
    </div>
    
    <div class="button">
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Rechercher...">
    </div>
    
    
    <div class="all-table">
    <div class="first">
        <div class="second">
        </div><table id="myTable" style="float: left; margin-right: 15px; ">
            <thead>
                <tr class="header">
                    <th colspan="1">Francais - 1ere + Bac</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="doc/fr/Question grammaire.docx">Question de Grammaire</a></td>
                </tr>
                <tr>
                    <td><a href="doc/fr/Evasion DG - explication.pdf">Abbé Prevost, Manon Lescaut, Evasion de des Grieux</a></td>
                </tr>
                <tr>
                    <td><a href="doc/fr/Corneille - Horace - explication linéaire.pdf">Corneille - Horace - explication linéaire</a></td>
                </tr>
                <tr>
                    <td><a href="doc/fr/La cravate et la montre - lecture linéaire de la cravate.pdf">La cravate et la montre - lecture linéaire de la cravate</a></td>
                </tr>
                <tr>
                    <td><a href="doc/fr/Lecture linéaire - Les Colchiques - élève.pdf">Lecture linéaire - Les Colchiques - élève</a></td>
                </tr>
                <tr>
                    <td><a href="doc/fr/LL I, 8 Juste la fin du monde.pdf">LL I, 8 Juste la fin du monde</a></td>
                </tr>
                <tr>
                    <td><a href="doc/fr/LL II, 2 Juste la fin du monde V2.pdf">LL II, 2 Juste la fin du monde V2</a></td>
                </tr>
                <tr>
                    <td><a href="doc/fr/tartuffe.pdf">tartuffe - Oeuvre complète</a></td>
                </tr>
                <tr>
                    <td><a href="doc/fr/Dissertation DDFC.pdf">Dissertation DDFC</a></td>
                </tr>
                <tr>
                    <td><a href="doc/fr/louise Michel - Memoires.pdf">louise Michel - Memoires - Eplication</a></td>
                </tr>
                <tr>
                    <td><a href="doc/fr/JLFDM - Explication Prologue.pdf">JLFDM - Explication Prologue</a></td>
                </tr>
                <tr>
                    <td><a href="doc/fr/vocabulaire argumentation.pdf">vocabulaire argumentation</a></td>
                </tr>
                <tr>
                    <td><a href="doc/fr/DDFC - Homme es tu ....pdf">DDFC - Homme es tu ...</a></td>
                </tr>
                <tr>
                    <td><a href="https://commentairecompose.fr/">Commentaire résumé + exemples</a></td>
                </tr>
                <tr>
                    <td><a href="doc/fr/Bac 2023 corrigé.odt">Bac 2023 corrigé</a></td>
                </tr>
                <tr>
                    <td><a href="doc/fr/Alcools - Zone -Explication linéaires.odt">Alcools - Zone -Explication linéaires</a></td>
                </tr>
                <tr>
                    <td><a href="doc/fr/DDFC - Postambule explication linéaire.odt">DDFC - Postambule explication linéaire</a></td>
                </tr>
                 <tr>
                    <td><a href="doc/fr/Connecteur logique.pdf">Connecteur logique</a></td>
                </tr>
                <tr>
                    <td><a href="doc/fr/Methode Commentaire.pdf">Methode Commentaire</a></td>
                </tr>
                <tr>
                    <td><a href="doc/fr/connecteurs_logiques.pdf">Connecteurs logiques</a></td>
                </tr>
                 <tr>
                    <td><a href="doc/fr/IMG_1838.HEIC">Analyse lineaire les fleurs du mal</a></td>
                </tr>
                 <tr>
                    <td><a href="doc/fr/IMG_1839.HEIC">Analyse lineaire les fleurs du mal</a></td>
                </tr>
                 <tr>
                    <td><a href="doc/fr/IMG_1840.HEIC">Analyse lineaire les fleurs du mal</a></td>
                </tr>
                 <tr>
                    <td><a href="doc/fr/IMG_1841.HEIC">Analyse lineaire les fleurs du mal</a></td>
                </tr>
                 <tr>
                    <td><a href="doc/fr/IMG_1842.HEIC">Analyse lineaire les fleurs du mal</a></td>
                </tr>
    
                <tr>
                    <td><a href="doc/fr/IMG_1845.HEIC">Analyse lineaire les fleurs du mal</a></td>
                </tr>
                <tr>
                    <td><a href="doc/fr/IMG_1846.HEIC">Analyse lineaire les fleurs du mal</a></td>
                </tr>

                
            </tbody>
            <thead>
                <tr>
                    <th colspan="1">1ere - NSI</th>
                </tr>
                
            </thead>
                <tbody>
                    <tr class="header">
                        <td><a href="https://glassus.github.io/premiere_nsi/">Corrigé exos - NSI 1ere</a></td>
                    </tr>
                    <tr class="header">
                        <td><a href="https://capytale2.ac-paris.fr/web/code/3c61-761206">Controle Fonction [corrigé]</a></td>
                    </tr>
            </tbody>

            <thead>
                <tr>
                    <th colspan="1">Maths 2nd/1ere/Tle</th>
                </tr>
                
            </thead>
                <tbody>
                    <tr class="header">
                        <td><a href="doc/mathematiques/1ere  - Controle Suite 1.pdf">1ere  - Controle Suite 1</a></td>
                    </tr>
                     <tr class="header">
                        <td><a href="doc/mathematiques/1ere - Controle étude de fonction.pdf">1ere - Controle étude de fonction</a></td>
                    </tr>
                     <tr class="header">
                        <td><a href="doc/mathematiques/1ere - Controle Etude de fonction2.pdf">1ere - Controle Etude de fonction2</a></td>
                    </tr>
                     <tr class="header">
                        <td><a href="doc/mathematiques/2nd - Controle ens de nombre.pdf">2nd - Controle ens de nombre</a></td>
                    </tr>
                     <tr class="header">
                        <td><a href="doc/mathematiques/1ere - Controle suite2.pdf">1ere - Controle suite2</a></td>
                    </tr>
                    <tr class="header">
                        <td><a href="https://www.annales2maths.com/">exos maths pour entrainement</a></td>
                    </tr>
                    <tr class="header">
                        <td><a href="doc/mathematiques/IMG_1741.HEIC">[2nd]fiche Proba1</a></td>
                    </tr>
                     <tr class="header">
                        <td><a href="doc/mathematiques/IMG_1742.HEIC">[2nd]fiche Proba2</a></td>
                    </tr>
                     <tr class="header">
                        <td><a href="doc/mathematiques/IMG_1743.HEIC">[2nd]fiche Proba3</a></td>
                    </tr>
                     <tr class="header">
                        <td><a href="doc/mathematiques/IMG_1744.HEIC">[2nd]fiche Proba4</a></td>
                    </tr>

                    <tr class="header">
                        <td><a href="doc/mathematiques/IMG_1749.HEIC">[2nd]fiche 2nd produit scalaire 1</a></td>
                    </tr>
                    <tr class="header">
                        <td><a href="doc/mathematiques/IMG_1750.HEIC">[2nd]fiche 2nd produit scalaire 2</a></td>
                    </tr>
                    <tr class="header">
                        <td><a href="doc/mathematiques/IMG_17351.HEIC">[2nd]fiche 2nd produit scalaire 3</a></td>
                    </tr>
                    <tr class="header">
                        <td><a href="doc/mathematiques/IMG_1753.HEIC">[2nd]fiche 2nd produit scalaire 4</a></td>
                    </tr>
                    
            </tbody>

            <thead>
                <tr>
                    <th colspan="1">STID2 - 1ere</th>
                </tr>
            </thead>
                <tbody>
                    <tr>
                        <td><a href="doc/maths sti2d 1ere/SCN_0001.pdf">Corrigés Maths 1</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/maths sti2d 1ere/SCN_0002.pdf">Corrigés Maths 2</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/maths sti2d 1ere/SCN_0003.pdf">Corrigés Maths 3</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/maths sti2d 1ere/SCN_0004.pdf">Corrigés Maths 4</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/maths sti2d 1ere/SCN_0005.pdf">Corrigés Maths 5</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/maths sti2d 1ere/SCN_0006.pdf">Corrigés Maths 6</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/maths sti2d 1ere/SCN_0007.pdf">Corrigés Maths 7</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/maths sti2d 1ere/SCN_0008.pdf">Corrigés Maths 8</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/maths sti2d 1ere/SCN_0009.pdf">Corrigés Maths 9</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/maths sti2d 1ere/SCN_00010.pdf">Corrigés Maths 10</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/maths sti2d 1ere/SCN_00011.pdf">Corrigés Maths 11</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/maths sti2d 1ere/SCN_00012.pdf">Corrigés Maths 12</a></td>
                    </tr>

                   
                </tbody>
            
    





    </table><table id="myTable2" style="float: left;">
                <thead>
                    <tr class="header">
                        <th colspan="1">Bac + Divers</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="doc/sujet grand oral.txt">200 idées de sujet de Grand Oral, toute spé + STI2D, STL</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/grand oral sujets exemples ses.txt">Sujets grand oral SES </a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/sujet grand oral 2.txt">Sujets grand oral toute spé + ST2S</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/1984.docx">Exposée sur le livre 1984</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/fr/bac-francais-conseil-recap.pdf">bac francais conseil+recap</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.apmep.fr/Annales-Terminale-Generale">Annale maths terminale + corrigé</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.sujetdebac.fr/annales/specialites/spe-mathematiques/2023/">Sujet/corrigé de bac dans plein de matières</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/Histoire/Bac HGGSP - Plan des thèmes.pdf">Sujet/corrigé de bac dans plein de matières</a></td>
                    </tr>
        </tbody>

        <thead>
                    <tr class="header">
                        <th colspan="1">Philo Cours</th>
                    </tr>
                </thead>
                <tbody>
                     <tr>
                        <td><a href="doc/philo/Competence_pour_un_devoir_de_philo_OK-1.pdf">Competence pour reussir un devoir de philo.</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/philo/Fiche_de_revision_Methodologie_de_l_explication_de_texte_OK.pdf">Methodologie de l'explication de texte.</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/philo/fiche_de_revision_Methodologie_de_la_dissertation_OK.pdf">[Complet]Methodologie de la dissertation.</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/philo/Méthodologie de la dissertation.pdf">[Resume]Methodologie de la dissertation.</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/philo/Competence_pour_un_devoir_de_philo_OK.pdf">Bien reussir un devoir de philo.</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/philo/Fiche_de_revision_La_liberte_OK.pdf">Fiche sur le cours sur la liberté.</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/philo/Fiche_de_revision_La_nature_OK.pdf">Fiche sur le cours sur la nature.</a></td>
                    </tr>

                    <tr>
                        <td><a href="doc/philo/Fiche_de_revision_La_science_OK.pdf">Fiche sur le cours sur la science.</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/philo/Fiche_de_revision_La_technique_OK.pdf">Fiche sur le cours sur la technique.</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/philo/Fiche_de_revision_Le_devoir_OK.pdf">Fiche sur le cours sur le devoir.</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/philo/Fiche_de_revision_Le_temps_OK.pdf">Fiche sur le cours sur le temps.</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/philoFiche_de_revision_philo_le_bonheur_OK.pdf">Fiche sur le bonheur.</a></td>
                    </tr>
                     <tr>
                        <td><a href="doc/philo/Fiche_de_revision_Verite_et_raison_OK.pdf">Fiche sur la vérité et la raison.</a></td>
                    </tr>
                     <tr>
                        <td><a href="doc/philo/Fiche_de_revisions_L_ETAT_OK.pdf">Fiche sur le cours sur l'etat'.</a></td>
                    </tr>
                     <tr>
                        <td><a href="doc/philo/Fiche_de_revisions_Le_langage_OK.pdf">Fiche sur le cours sur le language.</a></td>
                    </tr>
                     <tr>
                        <td><a href="doc/philo/Fiche_de_revsion_L_art_OK-1.pdf">Fiche sur le cours sur l'art'.</a></td>
                    </tr>
                    
                    
                </tbody>
                <thead>
                <tr class="header">
                        <th colspan="1">Maths Complementaires</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="doc/maths_complementaire/Calculs d_intégrales.docx">Calculs d'intégrales</a></td>
                    </tr>
                     <tr>
                        <td><a href="doc/maths_complementaire/Calculs de dérivées + inéquations.docx">Calculs de dérivées + inéquations</a></td>
                    </tr>
                     <tr>
                        <td><a href="doc/maths_complementaire/Calculs de limites.docx">Calculs de limites</a></td>
                    </tr>
                     <tr>
                        <td><a href="doc/maths_complementaire/DS fonctions + logarithme.docx">DS fonctions + logarithme</a></td>
                    </tr>
                     <tr>
                        <td><a href="doc/maths_complementaire/DS fonctions.docx">DS fonctions</a></td>
                    </tr>
                     <tr>
                        <td><a href="doc/maths_complementaire/DS limite + suite.docx">DS limite + suite</a></td>
                    </tr>
                     <tr>
                        <td><a href="doc/maths_complementaire/DS loi de probabilité.docx">DS loi de probabilité</a></td>
                    </tr>
                     <tr>
                        <td><a href="doc/maths_complementaire/DS suite + fonctions.docx">DS suite + fonctions</a></td>
                    </tr>
                     <tr>
                        <td><a href="doc/maths_complementaire/DS un peu de tout.docx">DS un peu de tout</a></td>
                    </tr>

                
                
                </tbody>

        </table>



        <table id="myTable3" style="float: left; margin-left:10px;">
            <thead>
                <tr>
                    <th colspan="1">ES - 1ere / Tle</th>
                </tr>
            </thead>
                <tbody>
                    <tr>
                        <td><a href="doc/es/Appareil auditif.pdf">1ere SVT Appareil auditif [Corrigé]</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/es/bilan radiatif terrestre.pdf">1ere SVT Bilan radiatif terrestre [Corrigé]</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/es/Chapitre 3 - Le climat du futur - fiches.docx.pdf">TleChapitre 3 - Le climat du futur</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/es/Chapitre 1 - Deux siècles d’énergie électrique - fiches.docx">Chapitre 1 Physique Terminale Energie</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/es/rayonnement solaire 1.jpg">Fiche rayonnement solaire 1</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/es/rayonnement solaire 2.jpg">Fiche rayonnement solaire 2</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/es/Énergie solaire et photosynthèse 1.jpg"> Fiche Énergie solaire et photosynthèse 1</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/es/Énergie solaire et photosynthèse 2.jpg">Fiche Énergie solaire et photosynthèse 2</a></td>
                    </tr>
                </tbody>
            <thead>
                <tr>
                    <th colspan="1">Francais 2nd + Notion </th>
                </tr>
            </thead>
                <tbody>
                    <tr>
                        <td><a href="doc/fr 2nd/Méthodologie du commentaire composé trame élève.docx">Methodo commentaire</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/fr 2nd/Séance 1 Majoritée supprimée.odt">Majorité supprimé</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/fr 2nd/Séquence 4 Le Tartuffe Séance- 2 contexte du XVIIème siècle élève 2022.doc">Seq4 Se1 contexte XVIIe s</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/fr 2nd/SEQUENCE 4 séance 5 comparaison de mises en scène de la scène d'expo élève.docx">comparaison de mises en scène de la scène</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/fr 2nd/sq 1 féministes sé outils 1 les_figures_de_style. élève2021.doc">Figure de Style</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/fr 2nd/sq 3 oral présentation oeuvre et entretien.doc">oral présentation oeuvre et entretien</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/fr 2nd/Sq 5 sé 3 Blason du beau tétin.docx">Sq 5 sé 3[Corrigé]</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/fr 2nd/Travaille sur la Tresse.pdf">Travaille sur la Tresse</a></td>
                    </tr>
                    
                </tbody>
            <thead>
                <tr>
                    <th colspan="1">Anglais</th>
                </tr>
            </thead>
                <tbody>
                    <tr>
                        <td><a href="doc/anglais 2nd/révisions grammaire.pdf">Révisions grammaire</a></td>
                    </tr>
                </tbody>

            <thead>
                <tr>
                    <th colspan="1">SES - 2nd - 1ere - Tle</th>
                </tr>
            </thead>
                <tbody>
                    <tr>
                        <td><a href="doc/ses - 2nd/2nde chapitre1_elève cours.pdf">2nde chapitre1 [corrigé]</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/ses - 2nd/2nde_chapitre3_elève.pdf">2nde_chapitre3 [corrigé]</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/ses - 2nd/2nde_Chapitre6-elèves.pdf">2nde_Chapitre6 [corrigé]</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/ses - 2nd/Chapitre5_elèves.pdf">Chapitre5 [corrigé]</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/ses - 2nd/SES_FICHE_REVISIONS_MUTATIONS_DU_TRAVAIL_ET_DE_L_EMPLOI.pdf">Tle - Mutations du travail et de l'emploi</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/ses - 2nd/Fiche_de_revisions_Crises_et_regulation_financieres_OK.pdf">Tle - Crises et régulations financières</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/ses - 2nd/Fiche_de_revision_Commerce_international_OK.pdf">Tle - Commerce international</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/ses - 2nd/FICHE_REVISIONS_LES_SOURCES_ET_LES_DEFIS_DE_LA_CROISSANCE_ECONOMIQUE.pdf">Tle - Sources et défis croissance econ.</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/ses - 2nd/SES_comment_lutter_contre_le_chomage.pdf">Tle - Comment lutter contre le chommage</a></td>
                    </tr>
                </tbody>
            
            <thead>
                <tr>
                    <th colspan="1">Histoire / HGGSP / Géo</th>
                </tr>
            </thead>
                <tbody>
                    <tr>
                        <td><a href="doc/Histoire/Etude Bangladesh.docx">Etude Bangladesh</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/Histoire/tableau_synthese_hggsp.pdf">Synthese HGGSP</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/Histoire/1ere  - Controle III Republique.pdf">1ere  - Controle III Republique</a></td>
                    </tr>
                     <tr>
                        <td><a href="doc/Histoire/1ere - Geo - Controle Industrie Aeronotique.pdf">1ere - Geo - Controle Industrie Aeronotique</a></td>
                    </tr>

                    <tr>
                        <td><a href="doc/Histoire/diaporama_edc_ormuz.pdf">Detroit Ormuz + golfe arabo persique</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.maxicours.com/se/cours/le-golfe-arabo-persique-un-espace-maritime-vecteur-de-la-mondialisation/">Grand resume golfe arabo persique</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.youtube.com/watch?v=TDW0Ed3UOvA">[video 4min] Detroit de Malacca</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.youtube.com/watch?v=tjRAwSSuj4k">[video 11min] Petrole et gaz enjeux</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/Histoire/TOUT LE COURS RÉDIGÉ.pdf">[Tle]Cours Redigée sur le thème3(l'environnement entre exploitaition et protection) HGGSP</a></td>
                    </tr>
                     <tr>
                        <td><a href="doc/Histoire/Axe 1 - fiches.docx">[Tle]Fiche1 thème3 (l'environnement entre exploitaition et protection) HGGSP</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/Histoire/Axe 2 - fiches.docx">[Tle]Fiche2 thème3 (l'environnement entre exploitaition et protection) HGGSP</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/Histoire/OTC - fiches.docx">[Tle]Resumé thème3 (l'environnement entre exploitaition et protection) HGGSP</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/Histoire/Axe 1 - fiches2.docx">[Tle]Fiche1 thème4(Histoire et mémoire) HGGSP</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/Histoire/Axe 2 - fiches2.docx">[Tle]Fiche2 thème4 (Histoire et mémoire) HGGSP</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/Histoire/OTC - fiches2.docx">[Tle]Resumé thème4 (Histoire et mémoire) HGGSP</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/Histoire/DS étude de doc Guerre Froide.docx">[Tle]Chapitre 2 Histoire - Ds guerre froide</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/Histoire/Ch. 1 - fiches.docx">[Tle]Chapitre 2 Histoire - Cours et résumé</a></td>
                    </tr>
                </tbody>

            <thead>
                <tr>
                    <th colspan="1">SNT</th>
                </tr>
            </thead>
                <tbody>
                    <tr>
                        <td><a href="doc/snt/Chercher dans un CSV.pdf">Chercher dans un CSV [Corrigé]</a></td>
                    </tr>
                    <tr>
                        <td><a href="doc/snt/SNT Question.docx">SNT Question p60 [corrigé]</a></td>
                    </tr>
                </tbody>
        </table>
    </div>

</div></div>
    
    
    <div class="explication">
        <h2 style="font-size:22px;margin-top: -5em;">Suivez nous/ Envoyer nous vos cours : </h2>
        <a href="https://www.instagram.com/demetriusphalerum/" style="height:100px; width:100px"><img src="instag.png" style="height: 100px;margin-top: -em;margin-left: 20%;/*! padding-bottom: 20%; *//*! float: right; *//*! item-align: center; */margin-left: 30%;"></a>

        <a href="email_txt.txt" style="height:100px; width:100px"><img src="email.png" style="height: 100px;margin-top: -em;margin-left: 20%;/*! padding-bottom: 20%; *//*! float: right; *//*! item-align: center; */margin-left: 30%;"></a>
    </div>
        </body></html>