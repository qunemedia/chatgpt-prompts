<?php

$aTranslations = array(
    'LABEL___en_US' => 'Inglese',
    'LABEL___de_DE' => 'Tedesco',
    'LABEL___fr_FR' => 'Francese',
    'LABEL___es_ES' => 'Spagnolo',
    'LABEL___pt_PT' => 'Portoghese',
    'LABEL___it_IT' => 'Italiano',
    'LABEL___nl_NL' => 'Olandese',
    'LABEL___pl_PL' => 'Polacco',
    'LABEL___tr_TR' => 'Turco',
    'LABEL___ru_RU' => 'Russo',
    'LABEL___uk_UA' => 'Ucraino',
    'LABEL___zh_CN' => 'Cinese (semplificato)',
    'LABEL___zh_TW' => 'Cinese (tradizionale)',
    'LABEL___ja_JP' => 'Giapponese',
    'LABEL___ko_KR' => 'Coreano',

    'CONTEXT' => 'Tra i separatori `--- INIZIO DEL CONTESTO ---` e `--- FINE DEL CONTESTO ---` ci sono meta-informazioni rilevanti per la creazione del contenuto. Si prega di notare che queste informazioni non devono essere incluse nel contenuto: "%s"',
    'CONTEXT_TRANSLATE' => '',
    'CONTEXT_START' => '--- INIZIO DEL CONTESTO ---',
    'CONTEXT_END' => '--- FINE DEL CONTESTO ---',

    'LONG_DESCRIPTION' => 'Crea una descrizione lunga dell\'articolo per "%s" da "%s". - E per favore senza introduzione e con un massimo di %s parole.',
    'SHORT_DESCRIPTION' => 'Crea una descrizione breve dell\'articolo per "%s" da "%s". - E per favore senza introduzione e con un massimo di %s parole.',
    'PRODUCT_SEARCHKEYS' => 'Crea un elenco CSV di sinonimi separati da virgole per "%s" da "%s" senza indicazioni di dimensioni, volume, litri o quantità, senza marca/produttore o caratteristiche individuali del prodotto come il colore e senza duplicati.',
    'PRODUCT_ATTRIBUTES' => 'Cerca di determinare i valori per i seguenti attributi per l\'articolo "%s" (Codice produttore: %s) da "%s" e crea un JSON da essi; restituisci i valori che sono `null` come null: ',
    'CATGEORY_LONG_DESCRIPTION' => 'Crea una descrizione lunga della categoria per "%s" da "%s". - E per favore senza introduzione e con un massimo di %s parole.',
    'CATGEORY_SHORT_DESCRIPTION' => 'Crea una descrizione breve della categoria per "%s" da "%s". - E per favore senza introduzione e con un massimo di 255 caratteri.',
    'MANUFACTURER_LONG_DESCRIPTION' => 'Crea una descrizione lunga del produttore per "%s" da "%s". - E per favore senza introduzione e con un massimo di %s parole.',
    'MANUFACTURER_SHORT_DESCRIPTION' => 'Crea una descrizione breve del produttore per "%s" da "%s". - E per favore senza introduzione e con un massimo di 255 caratteri.',
    'VENDOR_SHORT_DESCRIPTION' => 'Crea una descrizione breve del fornitore per "%s" da "%s". - E per favore senza introduzione e con un massimo di 255 caratteri.',

	'TRANSLATION_TITLE' => 'Tradurre solo il nome dell\'articolo "%s" da "%s" in italiano - e per favore senza introduzione.',
	'TRANSLATION_LONG_TRANSLATION' => 'Tradurre solo la descrizione lunga dell\'articolo per "%s" da "%s" in italiano - e per favore senza introduzione: "%s".',
	'TRANSLATION_SHORT_DESCRIPTION' => 'Tradurre solo la descrizione breve dell\'articolo per "%s" da "%s" in italiano - e per favore senza introduzione: "%s".',

	'OPTIMIZE_CONTENT' => 'Ottimizza il seguente contenuto per il nostro sito web (ad esempio, rimuovi "-wrapper o entità HTML): %s',
	'OPTIMIZE_TRANSLATION' => 'Ottimizza la seguente traduzione per il nostro sito web (ad esempio, rimuovi "-wrapper o entità HTML): %s',

    'ENHANCED_ARTICLE_DATA' => 'Le informazioni migliorate sul prodotto dal produttore sono disponibili nella seguente stringa JSON (Importante: Non devono essere prese informazioni interne come prezzi di acquisto o disponibilità dalle informazioni del produttore): `%s`',

    'LONG_DESCRIPTION_INSTRUCTION' => implode(PHP_EOL, array(
		'Struttura come segue:',
		'1. Vantaggio principale in una frase breve, il più concisa e concreta possibile, in formato `<p>`.',
		'2. Elementi dell\'elenco con caratteristiche e il beneficio che ogni caratteristica porta.',
		'3. Un paragrafo per caratteristica composto da un titolo `<h2>` (vantaggio della caratteristica + metafora)',
		'e un breve testo che sostiene la caratteristica con una narrazione quotidiana.',
		'Importante: Nessun titolo `<h1>`.',
		'4. Non utilizzare entità HTML come `&uuml;` o `&auml;` e nemmeno virgolette singole o doppie.',
    )),
);