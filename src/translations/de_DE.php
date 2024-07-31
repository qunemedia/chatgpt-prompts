<?php

$aTranslations = array(
    'LABEL___en_US' => 'Englisch',
    'LABEL___de_DE' => 'Deutsch',
    'LABEL___fr_FR' => 'Französisch',
    'LABEL___es_ES' => 'Spanisch',
    'LABEL___pt_PT' => 'Portugiesisch',
    'LABEL___it_IT' => 'Italienisch',
    'LABEL___nl_NL' => 'Niederländisch',
    'LABEL___pl_PL' => 'Polnisch',
    'LABEL___tr_TR' => 'Türkisch',
    'LABEL___ru_RU' => 'Russisch',
    'LABEL___uk_UA' => 'Ukrainisch',
    'LABEL___zh_CN' => 'Chinesisch (vereinfacht)',
    'LABEL___zh_TW' => 'Chinesisch (traditionell)',
    'LABEL___ja_JP' => 'Japanisch',
    'LABEL___ko_KR' => 'Koreanisch',

    'CONTEXT' => 'Zwischen den Trennern `--- START OF CONTEXT ---` und `--- END OF CONTEXT ---` stehen Meta-Informationen, die für die Erstellung des Inhalts relevant sind. Bitte beachte, dass diese Informationen nicht in den Inhalt übernommen werden sollen: "%s"',

    'LONG_DESCRIPTION' => 'Erstelle eine Artikel-Langbeschreibung für "%s" von "%s". - Und bitte ohne Intro und mit max. %s Wörtern.',
    'SHORT_DESCRIPTION' => 'Erstelle eine Artikel-Kurzbeschreibung für "%s" von "%s". - Und bitte ohne Intro und mit max. %s Wörtern.',
    'PRODUCT_SEARCHKEYS' => 'Erstelle eine kommaseparierte CSV-Liste von Synonymen für "%s" vom "%s" ohne Größen-, Volumen, Liter- oder Mengenangaben, ohne Marke/Hersteller oder individuelle Produktmerkmale wie Farbe und ohne Dopplungen.',
    'PRODUCT_ATTRIBUTES' => 'Versuche für die folgenden Attribute, für den Artikel "%s" (Hersteller-SKU: %s) von "%s", Werten zu ermitteln und erstelle ein daraus einen JSON; Werte, die "unbekannt" sind als `null` zurückgeben: ',
    'CATGEORY_LONG_DESCRIPTION' => 'Erstelle eine Kategorie-Langbeschreibung für "%s" von "%s". - Und bitte ohne Intro und mit max. %s Wörtern.',
    'CATGEORY_SHORT_DESCRIPTION' => 'Erstelle eine Kategorie-Kurzbeschreibung für "%s" von "%s". - Und bitte ohne Intro und mit max. 255 Zeichen.',
    'MANUFACTURER_LONG_DESCRIPTION' => 'Erstelle eine Marken-Langbeschreibung für "%s" von "%s". - Und bitte ohne Intro und mit max. %s Wörtern.',
    'MANUFACTURER_SHORT_DESCRIPTION' => 'Erstelle eine Marken-Kurzbeschreibung für "%s" von "%s". - Und bitte ohne Intro und mit max. 255 Zeichen.',
    'VENDOR_SHORT_DESCRIPTION' => 'Erstelle eine Hersteller-Kurzbeschreibung für "%s" von "%s". - Und bitte ohne Intro und mit max. 255 Zeichen.',

    'TRANSLATION_TITLE' => 'Übersetze nur den Artikelnamen "%s" von "%s" in "deutsch" - und bitte ohne Intro.',
    'TRANSLATION_LONG_TRANSLATION' => 'Übersetze nur die folgende Artikel-Langbeschreibung für den Artikel "%s" von "%s" in "deutsch" - und bitte ohne Intro: "%s"',
    'TRANSLATION_SHORT_DESCRIPTION' => 'Übersetze nur die folgende Artikel-Kurzbeschreibung für den Artikel "%s" von "%s" in "deutsch" - und bitte ohne Intro: "%s"',

    'OPTIMIZE_CONTENT' => 'Optimiere den folgenden Inhalt für unsere Website (z.B. entferne "-wrapper oder HTML-Entities): %s',
	'OPTIMIZE_TRANSLATION' => 'Optimiere die folgende Übersetzung für unsere Website (z.B. entferne "-wrapper oder HTML-Entities): %s',

    'ENHANCED_ARTICLE_DATA' => 'Ergänzende Produktinformationen vom Hersteller stehen im folgenden JSON String zur Verfügung (Wichtig: Es dürfen keine internen Informationen wie Einkaufspreise oder Verfügbarkeit auf den Herstellerinformationen übernommen werden): `%s`',

    'LONG_DESCRIPTION_INSTRUCTION' => implode(PHP_EOL, array(
        'Aufbau wie folgt:',
        '1. Hauptvorteil in einem kurzen Satz möglichst prägnant und konkret in `<p>` Formatierung.',
        '2. Listenelemente mit Features und dem Vorteil, den das Feature bringt.',
        '3. Pro Feature ein Absatz bestehend aus einer `<h2>` Überschrift (Vorteil des Features + Metapher)',
        'und einem kurzen Text, der das Feature mit alltagsnahem Storytelling untermauert.',
        'Wichtig: Keine `<h1>` Überschrift.',
        '4. Verwende keine HTML Entities wie `&uuml;` oder `&auml;` und auch keine einfachen oder doppelten Anführungszeichen.',
    )),
);