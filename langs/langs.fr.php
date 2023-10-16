<?php
/**
 * Bel-CMS [Content management system]
 * @version 3.0.0 [PHP8.2]
 * @link https://bel-cms.dev
 * @link https://determe.be
 * @license http://opensource.org/licenses/GPL-3.-copyleft
 * @copyright 2015-2023 Bel-CMS
 * @author as Stive - stive@determe.be
 */

if (!defined('CHECK_INDEX')):
    header($_SERVER['SERVER_PROTOCOL'] . ' 403 Direct access forbidden');
    exit('<!doctype html><html><head><meta charset="utf-8"><title>BEL-CMS : Error 403 Forbidden</title><style>h1{margin: 20px auto;text-align:center;color: red;}p{text-align:center;font-weight:bold;</style></head><body><h1>HTTP Error 403 : Forbidden</h1><p>You don\'t permission to access / on this server.</p></body></html>');
endif;

$array = array(
	#####################################
	# Langue Français - COMMUN
	#####################################
	'SUCCESS'                             => 'Succès',
	'ERROR'                               => 'Erreur',
	'WARNING'                             => 'Alert',
	#####################################
	# Langue Français - ROOT\USERS
	#####################################
	'SESSION_COOKIES_DELETE'              => 'Votre session et vos cookies de ce site sont effacés',
	'ACCOUNT_BLOCKED_REQUEST_NEW_PASS'    => 'Par mesure de sécurité, votre compte est bloqué, veuillez demander un nouveau mot de passe.',
	'VALIDATION_REQUIRED'                 => 'Validation requise',
	'CONNECTION_SUCCESSFULLY'             => 'La connexion a été effectuée avec succès.',
	'WRONG_USER_PASS'                     => 'Mauvaise combinaison de Pseudonyme-email et/ou mot de passe.',
	'NO_USER_WITH_USER_AND_MAIL'          => 'Aucun utilisateur avec ce nom et/ou mail.',
	'NAME_OR_PASS_REQUIRED'               => 'Le nom ou le mot de passe est obligatoire.',
	#####################################
	# Langue Français - 
	#####################################
	#####################################
	# Fichier lang en français - Erreur
	### ##################################
	'ID'                                  => 'ID',
	'ERROR'                               => 'Erreur',
	'UNKNOWN_ERROR'                       => 'Erreur inconnu',
	'WARNING'                             => 'Avertissement',
	'INFO'                                => 'Information',
	'SUCCESS'                             => 'Succès',
	'ACCESS'                              => 'Accès',
	'NO_ACCESS_REQUEST_PAGE'              => 'L\'accès à la page demandée est interdite',
	'NO_ACCESS_PAGE'                      => 'La page demandée est actuellement fermée',
	"NO_ACCESS_WIDGET"                    => 'Le widgets demandée est actuellement clos',
	'NO_ACCESS_GROUP_PAGE'                => 'Votre groupe d\'accès ne vous permet pas d\'accéder à cette page',
	'NO_ACCESS_GROUP_WIDGET'              => 'Votre groupe d\'accès ne vous permet pas d\'accéder à ce widget',
	'NO_ACCESS_PAGE'                      => 'Erreur lors d\'acces a la page',
	'NO_DATA_AVAILABLE'                   => 'Aucune donnée disponible',
	'DEFAULT_AVATAR'                      => 'assets/images/default_avatar.jpg',
	'COPYLEFT'                            => '<a id="bel_cms_copyleft" href="https://bel-cms.dev" title="BEL-CMS">Powered by Bel-CMS</a>',
	'PUBLISH'                             => 'Publier',
	'YOUR_COMMENT'                        => 'Votre commentaire',
	'COMMENT'                             => 'commentaire',
	'COMMENT_EMPTY'                       => 'Commentaire vide',
	'VIEW_COMMENTS'                       => 'Voir les commentaires',
	'NO_COMMENT'                          => 'Pas de commentaire',
	'URL_EMPTY'                           => 'URL vide',
	'COMMENT_SEND_TRUE'                   => 'Le commentaire a été posté avec succès.',
	'COMMENT_SEND_FALSE'                  => 'Le commentaire n\'a pas pu être envoyé.',
	'ERROR_NO_ID_VALID'                   => 'L’ID transmis est incorrecte',
	'ERROR_NO_ID'                         => 'Aucun ID transmis',
	'ERROR_INSERT_BDD'                    => 'Il y a eu une erreur de BDD, lors de l\'insertion',
	'ERROR_UPDATE_BDD'                    => 'Il y a eu une erreur de BDD, lors de la mise à jour',
	'ERROR_NO_USER'                       => 'Utilisateur n\'existe pas',
	'NO_TEXT_DEFINED'                     => 'Aucun texte n\'a été défini',
	'BY_WHO'                              => 'Par',
	'WELCOME_BACK'                        => 'Bon retour parmi nous',
	'NEW_PASSWORD'                        => 'Nouveau mot de passe',
	'PASSWORD'                            => 'Mot de passe',
	'ACTUAL_PASSWORD'                     => 'Mot de passe actuelle',
	'FORGOT_PASSWORD'                     => 'Mot de passe perdu ?',
	'YOU_HAVE_ACCOUNT'                    => 'Vous avez un compte ?',
	'DON_T_HAVE_ACCOUNT'                  => 'Je n\'ai pas de compte.',
	'REMEMBER_ME_ON_THIS_COMPUTER'        => 'Se souvenir de moi sur cet ordinateur',
	'LOGIN_IN_PROGRESS'                   => 'login en cours',
	'IMPORT_IMG'                          => 'Importer une image',
	'REGISTER'                            => 'S\'enregistrer',
	'LOG_IN'                              => 'Se loguer',
	'NONE_DEFINED'                        => 'Aucun définit',
	'CANCELED'                            => 'Annulé',
	'COLOR'                               => 'Couleur',
	'CATEGORIES'                          => 'Catégories',
	'CATEGORIE'                           => 'Catégorie',
	'WEB_IS_CLOSED'                       => 'Le site web est en mode fermé, seuls les administrateurs suprêmes ont accès.',
	'AVATAR_DEFAULT'                      => 'assets/images/default_avatar.jpg',
	########## ###########################
	# COMMUN
	#####################################
	'VALIDATE_MEMBER'                     => 'Membre validé',
	'VALIDATE_MEMBER'                     => 'Membre actif',
	'PENDING_MEMBER'                      => 'Membre en attente',
	'VISITOR'                             => 'Visiteur',
	'VISITORS'                            => 'Visiteurs',
	'VALID'                               => 'Valider',
	'SEE'                                 => 'Voir',
	'CATEGORY'                            => 'Câtégorie',
	'END'                                 => 'et',
	'ADD'                                 => 'Ajouter',
	'EDIT'                                => 'Editer',
	'MODIFY'                              => 'Modifier',
	'DELETE'                              => 'Supprimer',
	'BACK'                                => 'Retour',
	'CONFIRM'                             => 'Confirmer',
	'UNKNOWN'                             => 'Inconnu',
	'MESSAGE'                             => 'Message',
	'MESSAGES'                            => 'Messages',
	'MESSAGES_PRIVATE'                    => 'Boîte de réception',
	'ON'                                  => 'Sur',
	'THE'                                 => 'Le',
	'EAST'                                => 'est',
	'SEND'                                => 'Envoyer',
	'ABOUT_ME'                            => 'À propos de moi',
	'VIEW'                                => 'Voir',
	'USERNAME'                            => 'Nom d\'utilisateur',
	'BIRTHDAY'                            => 'Anniversaire',
	'COUNTRY'                             => 'Pays',
	'DESCRIPTION'                         => 'Description',
	'LOCATION'                            => 'Emplacement',
	'GENDER'                              => 'Genre',
	'WEBSITE'                             => 'Site Internet',
	'NAME'                                => 'Nom',
	'DATE'                                => 'Date',
	'OF'                                  => 'sur',
	'OF2'                                 => 'de',
	'BY'                                  => 'par',
	'OPTIONS'                             => 'Options',
	'SAVE'                                => 'Enregister',
	'CANCEL'                              => 'Annuler',
	'LOGIN_REQUIRE'                       => 'Login requis',
	'SUBMIT'                              => 'Soumettre',
	'EMPTY'                               => 'Vide',
	'OTHER'                               => 'Autre',
	'TITLE'                               => 'Titre',
	'PUBLIC'                              => 'Public',
	'PRIVATE'                             => 'Privé',
	'SIGN_OUT'                            => 'Se déconnecter',
	'SIGN_IN'                             => 'Se connecter',
	'MAIL'                                => 'E-mail',
	'NDD'                                 => 'Nom de domaine',
	'UPDATE_NOW'                          => 'Mettre à jour maintenant',
	'FILE'                                => 'Fichier',
	'FILES'                               => 'Fichiers',
	'LINK'                                => 'Lien',
	'LINKS'                               => 'Liens',
	'PROFIL'                              => 'Profil',
	'LAST'                                => 'Hier',
	'TODAY'                               => 'Aujourd\'hui',
	'NOW'                                 => 'Maintenant',
	'ADMINISTRATOR'                       => 'Administrateur',
	'ADMINISTRATORS'                      => 'Administrateurs',
	'MANAGEMENTS'                         => 'Managements',
	'FILE_ATTACHMENT'                     => 'Pièce jointe',
	'TEXT'                                => 'Texte',
	'AUTHOR'                              => 'Auteur',
	'MESSAGING_PRIVATE'                   => 'Messagerie privé',
	'ADMIN'                               => 'Administration',
	'GAME'                                => 'Jeu',
	'GAMES'                               => 'Jeux',
	'OPEN'                                => 'Ouvert',
	'CLOSE'                               => 'Fermer',
	'NB_BLOG'                             => 'Nombre de blog',
	'OPTION'                              => 'Option',
	'OPTIONS'                             => 'Options',
	'IP_USER'                             => 'IP',
	'TOWARDS'                             => 'pour',
	'WHITE'                               => 'avec',
	'SINCE'                               => 'comme',
	'DURATION'                            => 'durée',
	'USER_BAN'                            => 'Utilisateur banni(e)',
	'PSEUDO_BAN'                          => 'Pseudo banni(e)',
	'GOOD_MORNING'                        => 'Bonjour !',
	'YEAR'                                => 'Année',
	'YEARS'                               => 'Années',
	'DAYS'                                => 'Jours',
	'HOURS'                               => 'Heures',
	'MINUTES'                             => 'Minutes',
	'SECONDS'                             => 'Secondes',
	'TIME_ZONE'                           => 'Fuseau horaire',
	'CMS_TITLE'                           => 'Titre du site',
	'YES'                                 => 'Oui',
	'NO'                                  => 'Non',
	'_NEW'                                => 'Nouveau',
	'NEW_NEWS'                            => 'Nouvelles actualités',
	'POST_BY'                             => 'Posté par',
	'SEEN'                                => 'Vu',
	'DESIGN'                              => 'Design',
	'ACTIVATION'                          => 'Activation',
	'CONNECTION'                          => 'connexion',
	'FILE_NO_FOUND'                       => 'Fichier non trouvé',
	'FILE'                                => 'Fichier',
	'NO_FOUND'                            => 'non trouvé',
	'FILE_MODELS_NO_FOUND'                => 'Models non trouvé',
	'ERROR_FILE'                          => 'Erreur de fichier',
	'UNLISTED'                            => 'Non répertorié',
	'THE_REQUESTED_SUBPAGE'               => 'La sous-page demandait',
	'IS_NOT_AVAILABLE_ON_THE_PAGE'        => 'n\'est pas disponible dans la page',
	'LOGGED_IN_TO_ADMIN'                  => 'S\'est connecté à l\'administration',
	'AUTHORIZED_ACCESS'                   => 'Accès autorisé',
	'UNAUTHORIZED_ACCESS'                 => 'Accès refusé',
	'TRY_TO_CONNECT_WHIT_ANOTHER_HASHKEY' => 'À tenter de se connecter avec un autre Hash Key !',
	'HASHKEY_DOES_NOT_MATCH_YOURS'        => 'Hash_key ne correspond pas au vôtre ?...',
	'ATTEMPTED_ACCESS_WHIT_WRONG_PASS'    => 'Tentative d\'accès avec un mauvais mot de passe !',
	'THE_PASS_IS_NOT_CORRECT'             => 'Le mot de passe n\'est pas le bon !!!',
	'ONE_PAGE'                            => 'à la page',
	'SETTING'                             => 'paramètre',
	'ACCESS_TO_CONTROLLER_IMPOSSIBLE'     => 'Accès au controller impossible',
	'PLEASE_ENTER_YOUR_MAIL'              => 'Veuillez entrer votre e-mail',
	#####################################
	# UPLOAD
	#####################################
	'UPLOAD_ERROR'                        => 'Echec de l\'upload !',
	'UPLOAD_ERROR_FILE'                   => 'Vous devez uploader un fichier de type prédéfini.',
	'UPLOAD_ERROR_SIZE'                   => 'Le fichier est trop volumineux',
	'UPLOAD_FILE_SUCCESS'                 => 'Upload effectué avec succès.',
	'UPLOAD_NONE'                         => 'Aucun fichier en upload',
	#####################################
	# COLOR
	#####################################
	'RED'                                 => 'Rouge',
	'BLUE'                                => 'Bleu',
	'YELLOW'                              => 'Jaune',
	'GREEN'                               => 'Vert',
	'GREY'                                => 'Gris',
	#####################################
	# POSITION
	#####################################
	'TOP'                                 => 'Haut',
	'RIGHT'                               => 'Droit',
	'BOTTOM'                              => 'Bas',
	'LEFT'                                => 'Gauche',
	#####################################
	# Management
	#####################################
	'NO_ACCESS_MANAGEMENTS'               => 'Login sécurisé requis',
	'ERROR_MANAGEMENTS_MAIL'              => 'Login avec email uniquement !',
	'TITLE_MANAGEMENT'                    => 'Management',
	'PREFGEN'                             => 'Préférences Générales',
	'ERROR_NO_DATA'                       => 'Erreur aucune données !',
	'NEW_PARAMETER_SUCCESS'               => 'Mise à jour de la configuration avec succès.',
	'NEW_PARAMETER_ERROR'                 => 'Erreur durant la mise à jour de la configuration.',
	'UNKNOW_MODELS'                       => 'Fichier models manquant.',
	'UNKNOWN_PAGE'                        => 'Page inconnu.',
	'UNKNOW_MODELS_DL'                    => 'Aucun models a télécharger.',
	'ACTIVE'                              => 'Actif',
	'ACTIVATE'                            => 'Activer',
	'DISABLE'                             => 'Désactiver',
	'GROUPS'                              => 'Groupes',
	'PAGE'                                => 'Page',
	'PAGES'                               => 'Pages',
	'SUB_PAGE'                            => 'Sous-Page',
	'SUB_PAGES'                           => 'Sous-Pages',
	'WIDGET'                              => 'Widget',
	'WIDGETS'                             => 'Widgets',
	'MAX_SHOUTBOX'                        => 'Maximum de message',
	'MAX_SHOUTBOX_ADMIN'                  => 'Maximum de message management',
	'MAX_USER'                            => 'Maximum d\'utilisateur à affiché',
	'MAX_USER_ADMIN'                      => 'Maximum d\'utilisateur à affiché (admin)',
	'MAX_BLOG'                            => 'Maximum de blog à affiché',
	'MAX_BLOG_ADMIN'                      => 'Maximum de blog à affiché (admin)',
	'CUSTOM_NAME'                         => 'Nom personnalisé',
	'POSITION'                            => 'Position',
	'ORDER'                               => 'Ordre',
	'ACCESS_PAGE'                         => 'Accès page',
	'CONFIG'                              => 'Configuration',
	'EDITING'                             => 'Édition',
	'PARAMETER'                           => 'Paramètre',
	'TAG'                                 => 'Tag',
	'TAGS'                                => 'Tags',
	'PARAMETERS'                          => 'Paramètres',
	'GENERAL'                             => 'Général',
	'NAVIGATION'                          => 'Navigation',
	'EXTRA'                               => 'Extra',
	'EXTRAS'                              => 'Extras',
	'EMAIL'                               => 'e-mail',
	'ADMIN_KEY_ADMIN'                     => 'Clé Administrateur pour bannir un niveau 1',
	'PERSONAL_INFOS'                      => 'Information personnelle',
	'SERVER_INFOS'                        => 'Information serveur',
	'INFOS_CMS'                           => 'Information du C.M.S',
	'MY_IP'                               => 'Mon IP',
	'PORT'                                => 'Port',
	'PAGE_LOADING'                        => 'Chargement de la page',
	'CMS_IN_VERSION'                      => 'Version du C.M.S',
	'CMS_IN_VERSION_BELCMS'               => 'Version du C.M.S Github',
	'REMAINING_HDD_SSD_CAPACITY'          => 'Capacité du HDD/SSD restant',
	'CPU_USAGE'                           => 'Utilisation du CPU',
	'SECURE_WEBSITE'                      => 'Site Web Sécurisé',
	'RAM_TOTAL_ALLOCATED'                 => 'RAM Total alloué',
	'PHP_TO_VERSION'                      => 'Version de PHP',
	'NB_ARTICLE'                          => 'Nombre d\'article posté',
	'NB_POST_FORUM'                       => 'Nombre de sujet posté',
	#####################################
	# Fichier lang en français - Pages BAN
	#####################################
	'BAN'                                 => 'Bannissement',
	'DATE_OF_BAN'                         => 'Durée du bannissement',
	'BEGINNING_OF_BAN'                    => 'Début du bannissement',
	'DATE_OF_FNISH'                       => 'Fin du bannissement',
	'DFNISH'                              => 'Fini',
	'YOU_ARE_BANNED'                      => 'Vous êtes banni',
	#####################################
	# Fichier lang en français - Pages BAN DUREE
	#####################################
	'LIFE'                                => 'A vie',
	'ONE_MINUTE'                          => '1 Minute',
	'FIVE_MINUTES'                        => '5 Minute',
	'FIFTEEN_MINUTES'                     => '15 Minutes',
	'THIRTY_MINUTES'                      => '30 Minutes',
	'ONE_O_CLOCK'                         => '1 Heure',
	'THREE_O_CLOCK'                       => '3 Heures',
	'SIX_O_CLOCK'                         => '6 Heures',
	'TWELVE_O_CLOCK'                      => '12 Heures',
	'A_DAY'                               => '1 Jour',
	'ONE_WEEK'                            => '1 Semaine',
	'TWO_WEEK'                            => '2 Semaines',
	'A_MONTH'                             => '1 Mois',
	'THREE_MONTHS'                        => '3 Mois',
	'SIX_MONTHS'                          => '6 Mois',
	'ONE_YEAR'                            => '1 An',
	'FIVE_YEARS'                          => '5 Ans',
	'TEN'                                 => '10 ans',
	'PT1M'                                => '1 Minute',
	'PT5M'                                => '5 Minute',
	'PT15M'                               => '15 Minutes',
	'PT30M'                               => '30 Minutes',
	'PT1H'                                => '1 Heure',
	'PT3H'                                => '3 Heures',
	'PT6H'                                => '6 Heures',
	'PT12H'                               => '12 Heures',
	'P1D'                                 => '1 Jour',
	'P7D'                                 => '1 Semaine',
	'P14D'                                => '2 Semaines',
	'P1M'                                 => '1 Mois',
	'P3M'                                 => '3 Mois',
	'P6M'                                 => '6 Mois',
	'P1Y'                                 => '1 An',
	'P5Y'                                 => '5 Ans',
	'P10Y'                                => '10 ans',
	'P99Y'                                => 'À vie',
	#####################################
	# Nom des modules
	#####################################
	'NEWS'                                => 'Actualités',
	'ARTICLE'                             => 'Article',
	'HOME'                                => 'Accueil',
	'BLOG'                                => 'Blog',
	'DOWNLOADS'                           => 'Téléchargements',
	'FORUM'                               => 'Forum',
	'USER'                                => 'Utilisateur',
	'USERS'                               => 'Utilisateurs',
	'COMMENTS'                            => 'Commentaires',
	'COMMENT'                             => 'Commentaire',
	'READMORE'                            => 'Lire la suite',
	'NEWTHREAD'                           => 'Nouveau Post',
	'INBOX'                               => 'Boîte de réception',
	'MANAGEMENTS'                         => 'Administration',
	'MEMBERS'                             => 'Membres',
	#####################################
	# USER
	#####################################
	'FEMALE'                              => 'Femme',
	'MALE'                                => 'Homme',
	'UNISEXUAL'                           => 'Unisexe',
	'NO_SPEC'                             => 'Non spécifié',
	'MEMBER'                              => 'Membre',
	'MEMBERS'                             => 'Membres',
	'PSEUDO'                              => 'Pseudo',
	'ABOUT'                               => 'À propos',
	'MY_AVATAR'                           => 'Mes avatars',
	'AVATAR'                              => 'Avatar',
	'AVATARS'                             => 'Avatars',
	'REGISTRATION'                        => 'Enregistrement',
	'LOGIN'                               => 'Se connecter',
	'NAME_MAIL_PASS'                      => 'Veuillez entrer votre email ou votre nom d\'utilisateur et votre mot de passe',
	'MAIL_PASS_PRIVATE'                   => 'Veuillez entrer votre email prive lors de l\'inscription et votre mot de passe',
	'NAME_MAIL_TOKEN'                     => 'Veuillez entrer votre email ou votre nom d\'utilisateur et votre token envoyé par e-mail.',
	'RECOVERING_MY_PASS'                  => 'Récupération de mon mot de passe',
	'RECOVERY'                            => 'Récupération',
	'INFO_REGISTRATION'                   => 'Veuillez saisir toutes les informations pour vous inscrire',
	'LOGIN_ADMIN'                         => 'Login administration',
	'BANISHMENT'                          => 'Bannissement',
	'IPV4_IPV6'                           => 'IPV4 - IPV6',
	'SERIAL_ADMIN_NO_VALID'               => 'Le Numéro de série de l\'Administrateur est faux !',
	'NAME_ADMIN_GOLD'                     => 'Vous devez être un Administrateur Gold ou avoir une clé de sécurité fournie à l\'installation.',
	'IPV4_IPV6_NO_VALID'                  => 'IPV4 - IPV6 non valide.',
	'EMAIL_USER_BAN'                      => 'L\'email renseigne est invalide.',
	'IMPOSSIBLE_TO_BAN_YOURSELF'          => 'Impossible de se bannir soi-même.',
	'EMAIL_USER'                          => 'E-mail renseigné',         
	#####################################
	# WIDGETS
	# ###################################
	'CONNECTED'                           => 'Connectés',
	'NO_WIDGETS_NAME'                     => 'Aucun nom de widget',
	'N0_WIDGET_WHIT_THIS_NAME'            => 'Aucun Widget portant ce nom',
	#####################################
	# LANG
	# ###################################
	'FRENCH'                              => 'fr',
	'ENGLISH'                             => 'eng',
	'NETHERLANDS'                         => 'nl',
	'DEUTCH'                              => 'de',
	'FR_LANG'                             => 'français',
	'FR_ENGLISH'                          => 'english',
);
foreach ($array as $constant => $value) {
	if (!defined($constant)) {
		define($constant, $value); unset($array);
	}
}