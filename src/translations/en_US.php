<?php

$aTranslations = array(
    'LONG_DESCRIPTION' => 'Create an article long description for "%s" from "%s". - And please without an intro and with max. %s words.',
    'SHORT_DESCRIPTION' => 'Create an article short description for "%s" from "%s". - And please without an intro and with max. %s words.',
    'PRODUCT_SEARCHKEYS' => 'Create a comma-separated CSV list of synonyms for "%s" from "%s" without size, volume, liter, or quantity indications, without brand/manufacturer or individual product features such as color, and without duplicates.',
    'PRODUCT_ATTRIBUTES' => 'Try to determine values for the following attributes for the article "%s" (Manufacturer SKU: %s) from "%s" and create a JSON from it; return values that are `null` as null: ',
    'CATGEORY_LONG_DESCRIPTION' => 'Create an category long description for "%s" of "%s". - And please without an intro and with max. %s words.',
    'CATGEORY_SHORT_DESCRIPTION' => 'Create an category short description for "%s" of "%s". - And please without an intro and with max. 255 characters.',
    'MANUFACTURER_LONG_DESCRIPTION' => 'Create an manufacturer long description for "%s" of "%s". - And please without an intro and with max. %s words.',
    'MANUFACTURER_SHORT_DESCRIPTION' => 'Create an manufacturer short description for "%s" of "%s". - And please without an intro and with max. 255 characters.',
    'VENDOR_SHORT_DESCRIPTION' => 'Create an vendor short description for "%s" of "%s". - And please without an intro and with max. 255 characters.',

    'TRANSLATION_TITLE' => 'Translate only article name "%s" from "%s" into "%s" - and please without an intro.',
    'TRANSLATION_LONG_TRANSLATION' => 'Translate only the article long description for "%s" from "%s" into "%s" - and please without an intro: "%s".',
    'TRANSLATION_SHORT_DESCRIPTION' => 'Translate only the article short description for "%s" from "%s" into "%s" - and please without an intro: "%s".',

    'OPTIMIZE_CONTENT' => 'Optimize the following content for our website: %s',

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
    'LONG_DESCRIPTION_CONTINUE' => 'Continue from your previous response.',
);