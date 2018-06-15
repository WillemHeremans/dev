#!/bin/bash
######## mon 1er script version 1.0 ########
clear
echo -n "Tu choisis React ou Ionic ? (React = r / Ionic = i)" 
read ouinon
if [ "$ouinon" = "R" ] || [ "$ouinon" = "r" ]; then 
echo -e "\nReact (aussi appelé React.js ou ReactJS) est une bibliothèque JavaScript libre développée par Facebook depuis 2013. Le but principal de cette bibliothèque est de faciliter la création d'application web monopage, via la création de composants dépendant d'un état et générant une page (ou portion) HTML à chaque changement d'état."
echo -e "\nPresse la touche Entrée pour continuer"
read onsenfout
echo "React est une bibliothèque qui ne gère que l'interface de l'application, considéré comme la vue dans le modèle MVC. Elle peut ainsi être utilisée avec une autre bibliothèque ou un framework MVC comme AngularJS. La bibliothèque se démarque de ses concurrents par sa flexibilité et ses performances, en travaillant avec un DOM virtuel et en ne mettant à jour le rendu dans le navigateur qu'en cas de nécessité."
echo -e "\nPresse la touche Entrée pour continuer"
read onsenfout
echo "La bibliothèque est utilisée notamment par Netflix (côté serveur uniquement depuis le 25 octobre 2017 pour gagner 50% de performance), Yahoo, Airbnb, Sony, Atlassian ainsi que par les équipes de Facebook, appliquant le dogfooding sur le réseau social éponyme, Instagram ou encore WhatsApp. En fin 2015, WordPress.com annonce Calypso, une interface pour les administrateurs WordPress, développée en JavaScript avec node.js et React"
echo -e "\nPresse la touche Entrée pour continuer"
read onsenfout
compteur=1
while (($compteur<=13333)) #boucle réaction en chaine
do
echo -n "  React est super cool !!!"
echo -en "\033[1;31;40m React est super cool !!! \033[0m" #écrit en rouge
compteur=$(($compteur+1))
done
echo
elif [ "$ouinon" = "I" ] || [ "$ouinon" = "i" ]; then
echo -e "\nIonic est un framework open-source crée en 2013 par Max Lynch, Ben Sperry, et Adam Bradley. Deux versions distinctes sont disponibles, incompatibles entre elles : la première version, 1.3.3 se base sur AngularJS 1.5.3 tandis que la version 3.5.0 se base sur Angular 4.1.3 et TypeScript."
echo -e "\nPresse la touche Entrée pour continuer"
read onsenfout
echo "Basé initialement sur AngularJS et Apache Cordova, Ionic permet de créer un code multisupport en utilisant des outils Web comme HTML, CSS, JavaScript, afin de générer des applications iOS, Android, Chrome, Windows Phone et bien d'autres."
echo -e "\nPresse la touche Entrée pour continuer"
read onsenfout
echo "Dans sa version 2.0, ionic intègre Angular 2 qui est équipé d'un moteur de conversion TypeScript vers JavaScript, permettant au programmeur d'écrire son code en TypeScript. Cela permet aux programmeurs de mieux comprendre le code fait par quelqu'un d'autre. La performance d’Ionic 2 est nettement améliorée. Les applications sont beaucoup plus fluides que celles compilées par Ionic 1."
echo -e "\nPresse la touche Entrée pour continuer"
read onsenfout

compteur=1
while (($compteur<=13333)) #boucle réaction en chaine
do
echo -n "  Ionic est super cool !!!"
echo -en "\033[1;31;40m Ionic est super cool !!! \033[0m" #écrit en rouge
compteur=$(($compteur+1))
done
echo
else echo -en "\033[1;31;40m\nRépond par 'r' ou 'i' !!!\nBon, relance le script !!!\033[0m\n" 
fi

