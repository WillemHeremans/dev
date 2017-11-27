%title: Command line: go further!
%author: Willem Heremans
%date: 2017-11-28







	┌────────────────────────────────────────────────────────────────────────────────┐
	│╻  ┏━┓   ╻  ╻┏━╸┏┓╻┏━╸   ╺┳┓┏━╸   ┏━╸┏━┓┏┳┓┏┳┓┏━┓┏┓╻╺┳┓┏━╸    ┏━┓╻  ╻  ┏━╸┏━┓   │
	│┃  ┣━┫   ┃  ┃┃╺┓┃┗┫┣╸     ┃┃┣╸    ┃  ┃ ┃┃┃┃┃┃┃┣━┫┃┗┫ ┃┃┣╸ ╹   ┣━┫┃  ┃  ┣╸ ┣┳┛   │
	│┗━╸╹ ╹   ┗━╸╹┗━┛╹ ╹┗━╸   ╺┻┛┗━╸   ┗━╸┗━┛╹ ╹╹ ╹╹ ╹╹ ╹╺┻┛┗━╸╹   ╹ ╹┗━╸┗━╸┗━╸╹┗╸   │
	│┏━┓╻  ╻ ╻┏━┓   ╻  ┏━┓╻┏┓╻╻                                                      │
	│┣━┛┃  ┃ ┃┗━┓   ┃  ┃ ┃┃┃┗┫╹                                                      │
	│╹  ┗━╸┗━┛┗━┛   ┗━╸┗━┛╹╹ ╹╹                                                      │
	└────────────────────────────────────────────────────────────────────────────────┘

>  *Démystifier*
>> *Mieux comprendre*
>> *Avantages*
>>> *Exemples*


	< Go further! >
	 -------------
	    \
	     \
	    ^__^         /
	    (oo)\_______/  _________
	    (__)\       )=(  ____|_ \_____
	        ||----w |  \ \     \_____ |
	        ||     ||   ||           ||
	

---
	▛▀▖ ▞           ▐  ▗ ▗▀▖▗             
	▌ ▌▞▀▖▛▚▀▖▌ ▌▞▀▘▜▀ ▄ ▐  ▄ ▞▀▖▙▀▖      
	▌ ▌▛▀ ▌▐ ▌▚▄▌▝▀▖▐ ▖▐ ▜▀ ▐ ▛▀ ▌  ▗▖▗▖▗▖
	▀▀ ▝▀▘▘▝ ▘▗▄▘▀▀  ▀ ▀▘▐  ▀▘▝▀▘▘  ▝▘▝▘▝▘

---
	     	                   / \  //\
		    |\___/|      /   \//  \\
	            /0  0  \__  /    //  | \ \    
	           /     /  \/_/    //   |  \  \  
	           @_^_@'/   \/_   //    |   \   \ 
	           //_^_/     \/_ //     |    \    \
	        ( //) |        \///      |     \     \
	      ( / /) _|_ /   )  //       |      \     _\
	    ( // /) '/,_ _ _/  ( ; -.    |    _ _\.-~        .-~~~^-.
	  (( / / )) ,-{        _      `-.|.-~-.           .~         `.
	 (( // / ))  '/\      /                 ~-. _ .-~      .-~^-.  \
	 (( /// ))      `.   {            }                   /      \  \
	  (( / ))     .----~-.\        \-'                 .~         \  `. \^-.
	             ///.----..>        \             _ -~             `.  ^-`  ^-_
	               ///-._ _ _ _ _ _ _}^ - - - - ~                     ~-- ,.-~
	                                                                  /.-~
---



	< Hello becode >
	 --------------
	          \
	           \
	            \          __---__
	                    _-       /--______
	               __--( /     \ )XXXXXXXXXXX\v.
	             .-XXX(   O   O  )XXXXXXXXXXXXXXX-
	            /XXX(       U     )        XXXXXXX\
	          /XXXXX(              )--_  XXXXXXXXXXX\
	         /XXXXX/ (      O     )   XXXXXX   \XXXXX\
	         XXXXX/   /            XXXXXX   \__ \XXXXX
	         XXXXXX__/          XXXXXX         \__---->
	 ---___  XXX__/          XXXXXX      \__         /
	   \-  --__/   ___/\  XXXXXX            /  ___--/=
	    \-\    ___/    XXXXXX              '--- XXXXXX
	       \-\/XXX\ XXXXXX                      /XXXXX
	         \XXXXXXXXX   \                    /XXXXX/
	          \XXXXXX      >                 _/XXXXX/
	            \XXXXX--__/              __-- XXXX/
	             -XXXXXXXX---------------  XXXXXX-
	                \XXXXXXXXXXXXXXXXXXXXXXXXXX/
	                  ""VXXXXXXXXXXXXXXXXXXV""
	
---

# ligne de commande: avantage <=> interface graphique

Pour beaucoup de monde la ligne de commande est obscur, pour certains c'est [cmatrix]

	démystifié > ne pas avoir peur de la ligne de commande. Dans le monde unix, un utilisateur est par défaut... un simple utilisateur... Un utilisateur, tant qu'il reste utilisateur ne peut casser le système > sudo


	texte != pictogrammes

---

Mieux comprendre... le prompt: hello@nb42:~$ = nomUtilisateur@nomOrdinateur:EmplacementMode
exemple, si je crée un utilisateur via `adduser` et que je change d'utilisateur via `su nomUtilisateur` = le prompt change de nom.
Si je change d'emplacement, le prompt affiche le nouvel emplacement
Si je vais dans les fichiers système la tilde (~) disparaît, mais je ne suis pas root pour autant (je reste simple utilisateur)
Si je deviens root le mode change ($ -> #), non recommandé.

---

	La ligne de commande permet d'intéragir directement avec son ordinateur, en un sens lui parler, ou du moins lu donner des instructions directes. (->langage universel dans le monde unix)

	La ligne de commande permet une manipulation plus fine de son ordinateur et des programmes

	la ligne de commande est le mode "source", la méthode d'origine. Tandis que le mode graphique est le mode "compilé", la méthode "prémachée"... Ainsi, on peut utiliser un programme en graphique sans aucune connaissance de son mode "texte" -> ex: git peut être utilisé via des programmes en graphique

---

#Comprendre la ligne de commande:

	structure: [commande] [option], [[FILE]]
 	chaque commande est un programme installé sur l'ordinateur, les commandes ne sont donc pas en soi inhérentes au terminal. Un programme installé peu exister uniquement en mode console (on parle alors de programme en CLI), ou peu exister en mode console ET graphique... 

exemple de programme en CLI : cowsay...
Le terminal peut également intéragir avec des programmes en mode graphique (ex: google-chrome)

	chaque commande/programme vient généralement avec son manuel d'utilisation. On peut accéder au manuel d'un programme via la commande... man [programme]

	Connaître une fenêtre lancée en graphique = xwininfo
	commande whereis [programme] pour savoir où se trouve les fichiers exécutables de ce programme

---

Pour donner un exemple, sans choisir un programme obscur = google-chrome

# chaque commande est un programme, CLI, man,

# Historique... UNIX

#Exemples: manip fichiers, killall, xkill, sudo, mkdir, rmdir, rm, mv, wget, tar, unzip, nano, mysql (/opt/lampp/bin/mysql -u root), raccourcis clavier

#amusant: eyes

