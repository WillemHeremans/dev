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
>>> *En pratique*
>>>> *_remarque:_ N'hésitez pas à ouvrir votre terminal durant la présentation ;-)*


		< Go further! >
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
	

	< Don't panic! >
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


>  *La ligne de commande fait peur et fascine*
>> *Pour beaucoup c'est un outil obscur*
>>> *Et pourtant...*
>>>> *La plupart des bêtises qui peuvent être faites en ligne de commande*
>>>>> *... pourraient l'être aussi en mode graphique!*


---





	
		 ⢎⡑ ⡇⢸ ⡏⢱ ⡎⢱   ⢎⡑ ⡇⢸ ⡏⢱ ⡎⢱   ⢎⡑ ⡇⢸ ⡏⢱ ⡎⢱   ⢎⡑ ⡇⢸ ⡏⢱ ⡎⢱
		 ⠢⠜ ⠣⠜ ⠧⠜ ⠣⠜   ⠢⠜ ⠣⠜ ⠧⠜ ⠣⠜   ⠢⠜ ⠣⠜ ⠧⠜ ⠣⠜   ⠢⠜ ⠣⠜ ⠧⠜ ⠣⠜
	
				▞▀▖▌ ▌▛▀▖▞▀▖ ▞▀▖▌ ▌▛▀▖▞▀▖ ▞▀▖▌ ▌▛▀▖▞▀▖ ▞▀▖▌ ▌▛▀▖▞▀▖
				▚▄ ▌ ▌▌ ▌▌ ▌ ▚▄ ▌ ▌▌ ▌▌ ▌ ▚▄ ▌ ▌▌ ▌▌ ▌ ▚▄ ▌ ▌▌ ▌▌ ▌
				▖ ▌▌ ▌▌ ▌▌ ▌ ▖ ▌▌ ▌▌ ▌▌ ▌ ▖ ▌▌ ▌▌ ▌▌ ▌ ▖ ▌▌ ▌▌ ▌▌ ▌
				▝▀ ▝▀ ▀▀ ▝▀  ▝▀ ▝▀ ▀▀ ▝▀  ▝▀ ▝▀ ▀▀ ▝▀  ▝▀ ▝▀ ▀▀ ▝▀ 
	
						ＳＵＤＯ  ＳＵＤＯ  ＳＵＤＯ  ＳＵＤＯ
	
> *Dans le monde UNIX (Mac, Linux, BSD), un utilisateur est... juste un utilisateur*
>> *Un utilisateur, tant qu'il reste utilisateur, ne peut casser le système*
>>> *Le danger n'est donc pas une commande en soi mais son contexte d'utilisation*
>>>> *Le vrai danger serait donc plutôt l'interface chaise/clavier*
>>>>> *On verra plus loin les utilisations à éviter, notamment la commande _sudo_*

---
	
	
		
		       
                                            ^    /^
                                           / \  // \
                             |\___/|      /   \//  .\
                             /O  O  \__  /    //  | \ \           *----*
                            /     /  \/_/    //   |  \  \          \   |
                            @___@`    \/_   //    |   \   \         \/\ \
                           0/0/|       \/_ //     |    \    \         \  \
                       0/0/0/0/|        \///      |     \     \       |  |
                    0/0/0/0/0/_|_ /   (  //       |      \     _\     |  /
                 0/0/0/0/0/0/`/,_ _ _/  ) ; -.    |    _ _\.-~       /   /
                             ,-}        _      *-.|.-~-.           .~    ~
            \     \__/        `/\      /                 ~-. _ .-~      /
             \____(oo)           *.   }            {                   /
             (    (--)          .----~-.\        \-`                 .~
             //__\\  \__ Ack!   ///.----..<        \             _ -~
            //    \\               ///-._ _ _ _ _ _ _{^ - - - - ~

> *les avantages:*
>> *la ligne de commande permet d'intéragir directement avec son ordinateur*
>>> *Les commandes shell sont quasi universelles dans le monde UNIX (MAC,BSD,LINUX... Bash on Windows)*
>>>> *La ligne de commande permet souvent une manipulation plus fine de son ordinateur et des programmes*

---
	
	< Too much slides! >
	
	                              .       .
	                             / `.   .' " 
	                     .---.  <    > <    >  .---.
	                     |    \  \ - ~ ~ - /  /    |
	         _____          ..-~             ~-..-~
	        |     |   \~~~\.'                    `./~~~/
	       ---------   \__/                        \__/
	      .'  O    \     /               /       \  " 
	     (_____,    `._.'               |         }  \/~~~/
	      `----.          /       }     |        /    \__/
	            `-.      |       /      |       /      `. ,~~|
	                ~-.__|      /_ - ~ ^|      /- _      `..-'   
	                     |     /        |     /     ~-.     `-. _  _  _
	                     |_____|        |_____|         ~ - . _ _ _ _ _>
	
	
> *En résumé, la ligne de commande est un peu le mode "source"*
>> *Tandis que la méthode graphique est un peu le mode "pré-compilé"*
>>> *Ainsi, on peut utiliser un programme en graphique sans aucune connaissance de ses commandes*
>>>> *Mais connaître les commandes d'un programme permettra toujours de l'utiliser en graphique*
>>>>> *... Et même de mieux le comprendre*
>>>>>> *Exemple: _git_*

---

*_En pratique:_*

> *Le prompt*
>> *De simple utilisateur au mode admin (ROOT)*
>>> *sudo = attention!*
>>>> *structure d'une commande: [commande] [option], [PATH, FILE]*
>>>>> *Chaque commande est un programme installé sur l'ordinateur*
>>>>>> *Un programme installé peut exister uniquement en mode console (on parle alors de programme en CLI)*
>>>>>>> *CLI = command line interface*
>>>>>>>> *Exemple: la commande cmatrix*
>>>>>>>>> *chaque commande/programme vient généralement avec son manuel d'utilisation*
>>>>>>>>>> *Taper man + nomDuProgramme (ex: man cmatrix)*
>>>>>>>>>>> *_Quelques astuces:_*
>>>>>>>>>>>> *Le raccourcis clavier CTRL+R permet une recherche dans l'historique des commandes*
>>>>>>>>>>>>> *Renommé un fichier/dossier via la commande mv*
>>>>>>>>>>>>>> *Créer et écrire dans un fichier via une seule commande: cat << EOF > MonFichier.txt*
 
---



	
	
	
	
	
		
		< it's done! >
		 ------------
		        \   ^__^
		         \  (oo)\_______
		            (__)\       )\/\
		                ||----w |
		                ||     ||
	
	

---






