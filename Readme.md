#Un tout petit blog

##Cahier des charges
Le blog affichera des articles dans une page selon un ordre chronologique inverse, du plus récent au plus ancien.

Chaque article pourra être associé à une et une seule catégorie (*pourra*, pas *devra*).

L’affichage d’un article contiendra : un titre ; un corps ; une date de publication ; une référence à une catégorie ; la signature de l’auteur.

Au clic sur le nom de la catégorie, seuls les articles de celle-ci sont affichés.

Une administration doit être possible (ajout et suppression). L’ajout doit se faire à l’aide d’un formulaire affiché à la fin de la liste des articles, comme dans le livre d’or fait en classe.

Dans ce formulaire, l’utilisateur doit pouvoir choisir la catégorie à associer à l’article (un `select` s’impose donc).

Une administration des catégories n’est pas demandée dans cet exercice. Elles pourront donc être insérées dans la base de données via un client de SGBD comme phpMyAdmin.

Au moment de la suppression d’un article, une confirmation doit être demandée à l’utilisateur.

Les articles qui ne sont pas associés à une catégorie doivent être affichés malgré tout.

##Base de données
Deux tables sont nécessaires, `posts` et `categories`. La relation est de type 1 à n, ce qui implique donc que la table `posts` doit contenir en plus des champs propres aux articles, un champ qui référence une catégorie.

La table `categories` ne contient que deux champs, `id` et `name`.

Pour récupérer en une fois les informations d’un article associées à celles d’une catégorie, vous allez devoir faire une jointure, comme montré à la fin du cours.

##Style
Cet exercice est voué à être développé plus tard. Pour l’instant, vous ne devez pas tenter de créer une apparence visuelle personnalisée. Une maquette fondée sur une utilisation de bootstrap suffit mais est un minimum.

Bon travail.
