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




	texte != pictogrammes

---

Mieux comprendre... le prompt: hello@nb42:~$ = nomUtilisateur@nomOrdinateur:EmplacementMode
exemple, si je crée un utilisateur via `adduser` et que je change d'utilisateur via `su nomUtilisateur` = le prompt change de nom.
Si je change d'emplacement, le prompt affiche le nouvel emplacement
Si je vais dans les fichiers système la tilde (~) disparaît, mais je ne suis pas root pour autant (je reste simple utilisateur)
Si je deviens root le mode change ($ -> #), non recommandé.

---

	 

	

---

#Comprendre la ligne de commande:

	Connaître une fenêtre lancée en graphique = xwininfo
	commande whereis [programme] pour savoir où se trouve les fichiers exécutables de ce programme

---

Pour donner un exemple, sans choisir un programme obscur = google-chrome

# chaque commande est un programme, CLI, man,


#Exemples: manip fichiers, killall, xkill, sudo, mkdir, rmdir, rm, mv, wget, tar, unzip, nano, mysql (/opt/lampp/bin/mysql -u root), raccourcis clavier


