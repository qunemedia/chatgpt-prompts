<?php

$aTranslations = array(
    'LABEL___en_US' => 'Anglais',
    'LABEL___de_DE' => 'Allemand',
    'LABEL___fr_FR' => 'Français',
    'LABEL___es_ES' => 'Espagnol',
    'LABEL___pt_PT' => 'Portugais',
    'LABEL___it_IT' => 'Italien',
    'LABEL___nl_NL' => 'Néerlandais',
    'LABEL___pl_PL' => 'Polonais',
    'LABEL___tr_TR' => 'Turc',
    'LABEL___ru_RU' => 'Russe',
    'LABEL___uk_UA' => 'Ukrainien',
    'LABEL___zh_CN' => 'Chinois (simplifié)',
    'LABEL___zh_TW' => 'Chinois (traditionnel)',

    'CONTEXT' => 'Entre les séparateurs `--- DÉBUT DU CONTEXTE ---` et `--- FIN DU CONTEXTE ---` se trouvent des méta-informations pertinentes pour la création du contenu. Veuillez noter que ces informations ne doivent pas être incluses dans le contenu : "%s"',

    'LONG_DESCRIPTION' => 'Créer une longue description d\'article pour "%s" à partir de "%s". - Et s\'il vous plaît sans introduction et avec un maximum de %s mots.',
    'SHORT_DESCRIPTION' => 'Créer une courte description d\'article pour "%s" à partir de "%s". - Et s\'il vous plaît sans introduction et avec un maximum de %s mots.',
    'PRODUCT_SEARCHKEYS' => 'Créer une liste CSV de synonymes pour "%s" à partir de "%s" sans indications de taille, volume, litre ou quantité, sans marque/fabricant ou caractéristiques de produit individuelles telles que la couleur, et sans doublons.',
    'PRODUCT_ATTRIBUTES' => 'Essayez de déterminer les valeurs pour les attributs suivants pour l\'article "%s" (Référence du fabricant : %s) à partir de "%s" et créez un JSON à partir de cela; renvoyer les valeurs qui sont `null` comme null: ',
    'CATGEORY_LONG_DESCRIPTION' => 'Créer une longue description de catégorie pour "%s" de "%s". - Et s\'il vous plaît sans introduction et avec un maximum de %s mots.',
    'CATGEORY_SHORT_DESCRIPTION' => 'Créer une courte description de catégorie pour "%s" de "%s". - Et s\'il vous plaît sans introduction et avec un maximum de 255 caractères.',
    'MANUFACTURER_LONG_DESCRIPTION' => 'Créer une longue description de fabricant pour "%s" de "%s". - Et s\'il vous plaît sans introduction et avec un maximum de %s mots.',
    'MANUFACTURER_SHORT_DESCRIPTION' => 'Créer une courte description de fabricant pour "%s" de "%s". - Et s\'il vous plaît sans introduction et avec un maximum de 255 caractères.',
    'VENDOR_SHORT_DESCRIPTION' => 'Créer une courte description de fournisseur pour "%s" de "%s". - Et s\'il vous plaît sans introduction et avec un maximum de 255 caractères.',

    'TRANSLATION_TITLE' => 'Traduire uniquement le nom de l\'article "%s" de "%s" en "anglais" - et s\'il vous plaît sans introduction.',
    'TRANSLATION_LONG_TRANSLATION' => 'Traduire uniquement la longue description de l\'article pour "%s" de "%s" en "anglais" - et s\'il vous plaît sans introduction : "%s".',
    'TRANSLATION_SHORT_DESCRIPTION' => 'Traduire uniquement la courte description de l\'article pour "%s" de "%s" en "anglais" - et s\'il vous plaît sans introduction : "%s".',

    'OPTIMIZE_CONTENT' => 'Optimiser le contenu suivant pour notre site web : %s',

    'ENHANCED_ARTICLE_DATA' => 'Des informations produit améliorées du fabricant sont disponibles dans la chaîne JSON suivante (Important : Aucune information interne telle que les prix d\'achat ou la disponibilité ne doit être prise des informations du fabricant) : `%s`',

	'LONG_DESCRIPTION_INSTRUCTION' => implode(PHP_EOL, array(
		'Structure comme suit :',
		'1. Avantage principal en une phrase courte, aussi concis et concret que possible, au format `<p>`.',
		'2. Éléments de liste avec les fonctionnalités et le bénéfice que chaque fonctionnalité apporte.',
		'3. Un paragraphe par fonctionnalité composé d\'un titre `<h2>` (avantage de la fonctionnalité + métaphore)',
		'et d\'un court texte qui soutient la fonctionnalité avec une histoire du quotidien.',
		'Important : Pas de titre `<h1>`.',
		'4. Ne pas utiliser d\'entités HTML comme `&uuml;` ou `&auml;` et pas de guillemets simples ou doubles.',
    )),
);