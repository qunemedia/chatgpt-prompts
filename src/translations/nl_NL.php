<?php

$aTranslations = array(
    'LABEL___en_US' => 'Engels',
    'LABEL___de_DE' => 'Duits',
    'LABEL___fr_FR' => 'Frans',
    'LABEL___es_ES' => 'Spaans',
    'LABEL___pt_PT' => 'Portugees',
    'LABEL___it_IT' => 'Italiaans',
    'LABEL___nl_NL' => 'Nederlands',
    'LABEL___pl_PL' => 'Pools',
    'LABEL___tr_TR' => 'Turks',
    'LABEL___ru_RU' => 'Russisch',
    'LABEL___uk_UA' => 'Oekraïens',
    'LABEL___zh_CN' => 'Chinees (vereenvoudigd)',
    'LABEL___zh_TW' => 'Chinees (traditioneel)',
    'LABEL___ja_JP' => 'Japans',
    'LABEL___ko_KR' => 'Koreaans',

    'CONTEXT' => 'Tussen de scheidingslijnen `--- BEGIN VAN CONTEXT ---` en `--- EINDE VAN CONTEXT ---` staat meta-informatie die relevant is voor het maken van de inhoud. Houd er rekening mee dat deze informatie niet in de inhoud moet worden opgenomen: "%s"',
    'CONTEXT_TRANSLATE' => 'Vertaal de volgende informatie uit "%s" naar het Nederlands - en graag zonder intro: %s',
    'CONTEXT_START' => '--- BEGIN VAN CONTEXT ---',
    'CONTEXT_END' => '--- EINDE VAN CONTEXT ---',

	'LONG_DESCRIPTION' => 'Maak een lange artikelbeschrijving voor "%s" van "%s". - En graag zonder intro, met maximaal %s woorden en in het Nederlands.',
	'SHORT_DESCRIPTION' => 'Maak een korte artikelbeschrijving voor "%s" van "%s". - En graag zonder intro, met maximaal %s woorden en in het Nederlands.',
	'PRODUCT_SEARCHKEYS' => 'Maak een door komma\'s gescheiden CSV-lijst van synoniemen voor "%s" van "%s" zonder maat-, volume-, liter- of hoeveelheidvermeldingen, zonder merk/fabrikant of individuele productkenmerken zoals kleur, zonder duplicaten en in het Nederlands.',
	'PRODUCT_ATTRIBUTES' => 'Probeer waarden te bepalen voor de volgende attributen voor het artikel "%s" (Fabrikant SKU: %s) van "%s" en maak er een JSON van; retourneer waarden die `null` zijn als null en in het Nederlands.',
	'CATGEORY_LONG_DESCRIPTION' => 'Maak een lange categoriebeschrijving voor "%s" van "%s". - En graag zonder intro, met maximaal %s woorden en in het Nederlands.',
	'CATGEORY_SHORT_DESCRIPTION' => 'Maak een korte categoriebeschrijving voor "%s" van "%s". - En graag zonder intro, met maximaal 255 tekens en in het Nederlands.',
	'MANUFACTURER_LONG_DESCRIPTION' => 'Maak een lange fabrikantbeschrijving voor "%s" van "%s". - En graag zonder intro, met maximaal %s woorden en in het Nederlands.',
	'MANUFACTURER_SHORT_DESCRIPTION' => 'Maak een korte fabrikantbeschrijving voor "%s" van "%s". - En graag zonder intro, met maximaal 255 tekens en in het Nederlands.',
	'VENDOR_SHORT_DESCRIPTION' => 'Maak een korte beschrijving voor de leverancier "%s" van "%s". - En graag zonder intro, met maximaal 255 tekens en in het Nederlands.',

	'TRANSLATION_TITLE' => 'Vertaal alleen de naam van het artikel "%s" van "%s" naar het Nederlands - en graag zonder intro.',
	'TRANSLATION_LONG_TRANSLATION' => 'Vertaal alleen de lange beschrijving van het artikel voor "%s" van "%s" naar het Nederlands - en graag zonder intro: "%s".',
	'TRANSLATION_SHORT_DESCRIPTION' => 'Vertaal alleen de korte beschrijving van het artikel voor "%s" van "%s" naar het Nederlands - en graag zonder intro: "%s".',

    'OPTIMIZE_CONTENT' => 'Optimaliseer de volgende inhoud voor onze website (bijv. verwijder "-wrapper of HTML-entiteiten): %s',
	'OPTIMIZE_TRANSLATION' => 'Optimaliseer de volgende vertaling voor onze website (bijv. verwijder "-wrapper of HTML-entiteiten): %s',

    'ENHANCED_ARTICLE_DATA' => 'Verbeterde productinformatie van de fabrikant is beschikbaar in de volgende JSON-string (Belangrijk: Geen interne informatie zoals aankoopprijzen of beschikbaarheid mag worden overgenomen uit de informatie van de fabrikant): `%s`',

    'LONG_DESCRIPTION_INSTRUCTION' => implode(PHP_EOL, array(
		'Structuur als volgt:',
		'1. Belangrijkste voordeel in een korte zin, zo beknopt en concreet mogelijk in `<p>` opmaak.',
		'2. Lijstitems met functies en het voordeel dat de functie biedt.',
		'3. Eén alinea per functie, bestaande uit een `<h2>` kop (voordeel van de functie + metafoor)',
		'en een korte tekst die de functie ondersteunt met een alledaags verhaal.',
		'Belangrijk: Geen `<h1>` kop.',
		'4. Gebruik geen HTML-entiteiten zoals `&uuml;` of `&auml;` en ook geen enkele of dubbele aanhalingstekens.',
    )),
);