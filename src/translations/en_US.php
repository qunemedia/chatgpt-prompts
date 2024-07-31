<?php

$aTranslations = array(
    'LABEL___en_US' => 'English',
    'LABEL___de_DE' => 'German',
    'LABEL___fr_FR' => 'French',
    'LABEL___es_ES' => 'Spanish',
    'LABEL___pt_PT' => 'Portuguese',
    'LABEL___it_IT' => 'Italian',
    'LABEL___nl_NL' => 'Dutch',
    'LABEL___pl_PL' => 'Polish',
    'LABEL___tr_TR' => 'Turkish',
    'LABEL___ru_RU' => 'Russian',
    'LABEL___uk_UA' => 'Ukrainian',
    'LABEL___zh_CN' => 'Chinese (Simplified)',
    'LABEL___zh_TW' => 'Chinese (Traditional)',
    'LABEL___ja_JP' => 'Japanese',
    'LABEL___ko_KR' => 'Korean',

    'CONTEXT' => 'Between the separators `--- START OF CONTEXT ---` and `--- END OF CONTEXT ---` are meta-information that is relevant for the creation of the content. Please note that this information should not be included in the content: "%s"',
    'CONTEXT_TRANSLATE' => 'Translate the following information from "%s" into "English" - and please without an intro: %s',
    'CONTEXT_START' => '--- START OF CONTEXT ---',
    'CONTEXT_END' => '--- END OF CONTEXT ---',

	'LONG_DESCRIPTION' => 'Create an article long description for "%s" from "%s". - And please without an intro, with max. %s words, and in English.',
	'SHORT_DESCRIPTION' => 'Create an article short description for "%s" from "%s". - And please without an intro, with max. %s words, and in English.',
	'PRODUCT_SEARCHKEYS' => 'Create a comma-separated CSV list of synonyms for "%s" from "%s" without size, volume, liter, or quantity indications, without brand/manufacturer or individual product features such as color, without duplicates, and in English.',
	'PRODUCT_ATTRIBUTES' => 'Try to determine values for the following attributes for the article "%s" (Manufacturer SKU: %s) from "%s" and create a JSON from it; return values that are `null` as null: and in English.',
	'CATGEORY_LONG_DESCRIPTION' => 'Create a category long description for "%s" of "%s". - And please without an intro, with max. %s words, and in English.',
	'CATGEORY_SHORT_DESCRIPTION' => 'Create a category short description for "%s" of "%s". - And please without an intro, with max. 255 characters, and in English.',
	'MANUFACTURER_LONG_DESCRIPTION' => 'Create a manufacturer long description for "%s" of "%s". - And please without an intro, with max. %s words, and in English.',
	'MANUFACTURER_SHORT_DESCRIPTION' => 'Create a manufacturer short description for "%s" of "%s". - And please without an intro, with max. 255 characters, and in English.',
	'VENDOR_SHORT_DESCRIPTION' => 'Create a vendor short description for "%s" of "%s". - And please without an intro, with max. 255 characters, and in English.',

    'TRANSLATION_TITLE' => 'Translate only article name "%s" from "%s" into "English" - and please without an intro.',
    'TRANSLATION_LONG_TRANSLATION' => 'Translate only the article long description for "%s" from "%s" into "English" - and please without an intro: "%s".',
    'TRANSLATION_SHORT_DESCRIPTION' => 'Translate only the article short description for "%s" from "%s" into "English" - and please without an intro: "%s".',

    'OPTIMIZE_CONTENT' => 'Optimize the following content for our website (e.g. remove "-wrapper or html entities): %s',
	'OPTIMIZE_TRANSLATION' => 'Optimize the following content for our website (e.g. remove "-wrapper or html entities): %s',

    'ENHANCED_ARTICLE_DATA' => 'Enhanced product information from the manufacturer is available in the following JSON string (Important: No internal information such as purchase prices or availability may be taken from the manufacturer information): `%s`',

    'LONG_DESCRIPTION_INSTRUCTION' => implode(PHP_EOL, array(
        'Structure as follows:',
        '1. Main advantage in a short sentence as concise and concrete as possible in `<p>` formatting.',
        '2. List items with features and the benefit that the feature brings.',
        '3. One paragraph per feature consisting of a `<h2>` heading (advantage of the feature + metaphor)',
        'and a short text that underpins the feature with everyday storytelling.',
        'Important: No `<h1>` heading.',
        '4. Do not use any HTML entities like `&uuml;` or `&auml;` and also no single or double quotes.',
    )),
);