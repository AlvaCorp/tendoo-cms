Tendoo-cms
=========
v.0.9.7
---------
MAJ 0.9.7
	- Sur l'item "..theme_handler::define->blogPost()" information "COMMENTS" ajout� afin d'afficher le nombre de commentaires
		d'une publication.
	- D�sactivation de l'option "Enable CSRF Protection" sur la classe INPUT. afin d'autoriser l'utilisation de certains
		caract�res autrefois interdit tels que "<>#{}" etc.
	- R�duction et d�but d'annotation du code.
	- Individualisation des param�tres. d�sormais le changement de th�mes, de l'affichage ou non des statistiques sont individuels et propre � chaque utilisateur.
	- Ajout raccourcis vers application Tendoo
	- Ajout de nouveaux jeux de couleurs (5 jeux de couleurs sont d�sormais disponible).
	- Acc�s aux param�tres acc�sibles � tous les utilisateurs, certains param�tres leur sont masqu�s et interdit. Sont autoris�s :
		- la modification du th�me pour les simples administrateurs ou utilisateur ayant un privil�ge qui permet l'acc�s � 
		l'espace administration.
	- Ajout de deux nouvelles m�thodes dans la classe "file".
		- js_push_if_not_exists() // ajoute un fichier js � la liste des js css charg�s si ce fichier n'a pas encore �t� charg�.
		- css_push_if_not_exists() // ajoute un fichier css � la liste des fichiers css charg�s si ce fichier n'a pas encore �t� charg�.