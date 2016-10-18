# Développement Web
Slides à destination de l'IUT MMI de l'Université Savoie Mont Blanc. Cette présentation a été réalisée à l'aide du framework reveal.js.
Pour consulter les slides en ligne, rendez-vous à l'adresse : [http://jeromefath.github.io/iut-mmi-portfolio/](http://jeromefath.github.io/iut-mmi-portfolio/)

> Reaveal.js is a framework for easily creating beautiful presentations using HTML. [Check out the live demo](http://lab.hakim.se/reveal-js/).

## TP MMI - S3

Le site Web à réaliser sera un portfolio de votre travail effectué principalement au cours de vos années passées à l'IUT. Il comprendra entre autres les éléments suivants : 

1. Une page pour vous présenter (cv)
2. Une page de contact 
2. Un catalogue de réalisations

Le catalogue de réalisations sera organisé selon une arborescence de votre choix ainsi que les informations à stocker pour chaque réalisation. Le catalogue aura une partie backoffice pour ajouter, modifier et supprimer une réalisation. Vous devrez également offrir la possibilité d'associer une ou plusieurs images à une réalisation.

Afin de faciliter la navigation, un fil d'arianne représentant l'arborescence de vos catégories de manière linéaire devra être affichée sur le catalogue.

> Pour les utilisateurs de MAMP, vérifiez que le logiciel affiche bien les erreurs directement dans le navigateur. Pour cela, ouvrez la page d'accueil de MAMP puis cliquez sur l'onglet "phpinfo". Notez ensuite la valeur de la variable "Loaded Configuration File" puis édite ce fichier (php.ini) avec un éditeur de texte simple (TextWrangler ou autre). Changez les variables suivantes : display_errors = On (au lieu de Off), display_startup_errors = On (au lieu de Off) et log_errors = Off (au lieu de On). Sauvegardez vos modifications puis éteignez et relancez MAMP.

#### Module avancé

Un système de notation et de commentaire des réalisations pour les visiteurs sera ajouté. Par exemple, de 1 à 5 étoiles ou une note sur 20. 

Vous pourrez ensuite ajouter la possibilité de trier vos réalisations suivant différents critères : popularité (nombre de commentaires et notes), date de création,...

Pour terminer, rendez accessible vos réalisations par l'intermédiaire d'un flux RSS avec les formats ATOM 1.0 et RSS 2.0. Les entrées de votre flux RSS seront composées d'une date, d'un résumé, un texte en HTML et éventuellement d'une petite image.

> Pour tester votre flux RSS, vous aurez besoin d'un lecteur de flux. Vous pouvez installer une extension à votre navigateur ou bien installer une application indépendante. Pour Chrome, installez RSS Reader Extension; pour FireFox et Internet Explorer cette fonctionnalité est supportée nativement.