<?php

return [
    'navigations' => [
        'Dashboard' => 'Tableau de bord',
        'Hotel' => 'Hôtel',
        'Website' => 'Site Web',
        'Help Center' => 'Centre d\'aide',
        'Administration' => 'Administration',
        'User Management' => 'Gestion des utilisateurs',
        'Profile Management' => 'Profile Management',
    ],

    'resources' => [
        'dashboard' => [
            'navigation_label' => 'Tableau de bord'
        ],
        'achievements' => [
            'navigation_label' => 'Gérer les Win-Win',
            'label' => 'Win-Win',
            'plural' => 'Win-Win',
        ],
        'emulator-settings' => [
            'navigation_label' => 'Paramètres de l\'émulateur',
            'label' => 'Paramètre',
            'plural' => 'Paramètres de l\'émulateur',
        ],
        'article' => [
            'navigation_label' => 'Gérer les articles',
            'label' => 'Article',
            'plural' => 'Articles',
        ],
        'cms-settings' => [
            'navigation_label' => 'Paramètres CMS',
            'label' => 'Paramètre',
            'plural' => 'Paramètres CMS',
        ],
        'help-questions-categories' => [
            'navigation_label' => 'Gérer les catégories de questions',
            'label' => 'Catégorie',
            'plural' => 'Catégories de questions',
        ],
        'help-questions' => [
            'navigation_label' => 'Gérer les questions',
            'label' => 'Question',
            'plural' => 'Questions',
        ],
        'tags' => [
            'navigation_label' => 'Gérer les tags',
            'label' => 'Tag',
            'plural' => 'Tags',
        ],
        'bans' => [
            'navigation_label' => 'Gérer les bans',
            'label' => 'Banissement',
            'plural' => 'Banissements',
        ],
        'users' => [
            'navigation_label' => 'Gérer les utilisateurs',
            'label' => 'Utilisateur',
            'plural' => 'Utilisateurs',
        ],
        'badge-resource' => [
            'navigation_label' => 'Gérer les badges',
            'label' => 'Badge',
            'plural' => 'Badges',
        ],
        'home-items' => [
            'navigation_label' => 'Manage Home Items',
            'label' => 'Home Item',
            'plural' => 'Home Items',
        ],
        'home-categories' => [
            'navigation_label' => 'Manage Home Categories',
            'label' => 'Home Category',
            'plural' => 'Home Categories',
        ],

        // Relations
        'settings' => [
            'navigation_label' => 'Paramètres',
            'label' => 'Paramètre',
            'plural' => 'Paramètres',
        ],
        'badges' => [
            'navigation_label' => 'Badges',
            'label' => 'Badge',
            'plural' => 'Badges',
        ],
    ],

    'common' => [
        'All' => 'Tous',
        'Yes' => 'Oui',
        'No' => 'Non',
        'Sucessfull' => 'Réussi',
        'Never' => 'Jamais',
        'Account' => 'Compte',
        'IP' => 'IP',
        'Machine' => 'Machine',
        'Super' => 'Super',
        'Male' => 'Homme',
        'Female' => 'Femme',
        'Credits' => 'Crédits',
        'Duckets' => 'Duckets',
        'Diamonds' => 'Diamants',
        'Points' => 'Points',
        'Update' => 'Update',
        'Create' => 'Create',
        'Open link' => 'Ouvrir le lien',
        'Sticker' => 'Sticker',
        'Widget' => 'Widget',
        'Note' => 'Note',
        'Background' => 'Background',
    ],

    'helpers' => [
        'achievement_points' => 'Points Win-Win à récompenser',
        'achievement_progress_needed' => 'Progression nécessaire pour terminer le Win-Win',
        'help_questions_category_icon' => 'Vous pouvez utiliser n\'importe quel lien d\'image ici. Nous recommandons d\'utiliser une image de taille 20x20.',
        'change_username_description' => 'Autoriser cet utilisateur à changer son pseudo (dans le client)',
        'change_password_description' => 'Laissez vide pour conserver le mot de passe actuel',
        'badge_code_helper' => 'Entrez le code et cliquez sur la loupe à côté du champ. Si le badge existe, tous les champs seront remplis automatiquement.',
        'home_item_limit_helper' => 'Buy limit for this item. Leave blank for unlimited.',
    ],

    'tabs' => [
        'Home' => 'Accueil',
        'Main' => 'Principal',
        'Configurations' => 'Configurations',
        'General Information' => 'Informations générales',
        'Currencies' => 'Monnaies',
        'Security' => 'Sécurité',
        'Change Username' => 'Changer de pseudo',
        'Change Email' => 'Changer d\'email',
        'Change Password' => 'Changer de mot de passe',
        'Change Rank' => 'Changer de rank',
        'Account Data' => 'Données du compte',
        'Extra Settings' => 'Paramètres supplémentaires',
    ],

    'inputs' => [
        'key' => 'Clé',
        'value' => 'Valeur',
        'comment' => 'Commentaire',
        'name' => 'Nom',
        'level' => 'Niveau',
        'email' => 'Email',
        'category' => 'Catégorie',
        'visible' => 'Visible',
        'reward_type' => 'Type de récompense',
        'reward_amount' => 'Montant de la récompense',
        'points' => 'Points',
        'progress_needed' => 'Progression nécessaire',
        'fixed' => 'Fixé',
        'allow_comments' => 'Autoriser les commentaires',
        'title' => 'Titre',
        'description' => 'Description',
        'image' => 'Image',
        'icon' => 'Icône',
        'content' => 'Contenu',
        'is_promotion' => 'Cet article est-il une promotion?',
        'promotion_ends_at' => 'La promotion se termine le',
        'categories' => 'Catégories',
        'background_color' => 'Couleur de fond',
        'expires_at' => 'Expire le',
        'reason' => 'Raison',
        'type' => 'Type',
        'username' => 'Nom d\'utilisateur',
        'motto' => 'Devise',
        'gender' => 'Genre',
        'created_at' => 'Créé le',
        'last_login' => 'Dernière connexion',
        'last_online' => 'Dernière connexion',
        'ip_register' => 'IP d\'inscription',
        'ip_current' => 'IP actuelle',
        'referral_code' => 'Code de parrainage',
        'referrer_code' => 'Code de l\'utilisateur parrain',
        'allow_change_username' => 'Autoriser le changement de nom d\'utilisateur',
        'new_password' => 'Nouveau mot de passe',
        'new_password_confirmation' => 'Confirmer le nouveau mot de passe',
        'rank' => 'Rang',
        'badge_code' => 'Code du badge',
        'achievement_score' => 'Score Win-Win',
        'respects_received' => 'Respects reçus',
        'can_trade' => 'Peut échanger',
        'block_following' => 'Bloquer le fait de pouvoir me suivre',
        'block_friendrequests' => 'Bloquer les demandes d\'ami',
        'block_roominvites' => 'Bloquer les invitations d\'appart',
        'max_rooms' => 'Nombre maximum d\'apparts',
        'max_friends' => 'Nombre maximum d\'amis',
        'old_chat' => 'Ancien chat',
        'block_camera_follow' => 'Bloquer le suivi de la caméra',
        'ignore_bots' => 'Ignorer les bots',
        'ignore_pets' => 'Ignorer les animaux de compagnie',
        'badge_code' => 'Code du badge',
        'badge_title' => 'Titre du badge',
        'badge_description' => 'Description du badge',
        'badge_image' => 'Image du badge',
        'price' => 'Price',
        'currency_type' => 'Currency Type',
        'limit' => 'Limit',
    ],

    'columns' => [
        'id' => 'ID',
        'badge' => 'Badge',
        'name' => 'Nom',
        'level' => 'Niveau',
        'category' => 'Catégorie',
        'visible' => 'Visible',
        'key' => 'Clé',
        'value' => 'Valeur',
        'title' => 'Titre',
        'image' => 'Image',
        'by' => 'Par',
        'fixed' => 'Fixé',
        'allow_comments' => 'Autoriser les commentaires',
        'comment' => 'Commentaire',
        'order' => 'Ordre',
        'icon' => 'Icône',
        'questions_count' => 'Questions liées',
        'background_color' => 'Couleur de fond',
        'avatar' => 'Avatar',
        'username' => 'Pseudo',
        'reason' => 'Raison',
        'type' => 'Type',
        'banned_at' => 'Banni le',
        'expires_at' => 'Expire le',
        'email' => 'Email',
        'motto' => 'Devise',
        'created_at' => 'Créé le',
        'online' => 'En ligne',
        'badge_code' => 'Code de badge',
        'equipped' => 'Équipé?',
        'achievement_score' => 'Score Win-Win',
        'respects_received' => 'Respects reçus',
        'online_time' => 'Temps en ligne',
        'can_trade' => 'Peut échanger',
        'can_change_name' => 'Peut changer de nom',
        'price' => 'Price',
    ],

    'notifications' => [
        'badge_code_required' => 'Vous devez fournir un code de badge.',
        'badge_found' => 'Badge trouvé!',
        'badge_updated' => 'Badge mis à jour!',
        'badge_update_failed' => 'Impossible de mettre à jour le badge.',
    ]
];
