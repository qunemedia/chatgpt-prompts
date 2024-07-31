<?php

$aTranslations = array(
    'LABEL___en_US' => 'Angielski',
    'LABEL___de_DE' => 'Niemiecki',
    'LABEL___fr_FR' => 'Francuski',
    'LABEL___es_ES' => 'Hiszpański',
    'LABEL___pt_PT' => 'Portugalski',
    'LABEL___it_IT' => 'Włoski',
    'LABEL___nl_NL' => 'Holenderski',
    'LABEL___pl_PL' => 'Polski',
    'LABEL___tr_TR' => 'Turecki',
    'LABEL___ru_RU' => 'Rosyjski',
    'LABEL___uk_UA' => 'Ukraiński',
    'LABEL___zh_CN' => 'Chiński (uproszczony)',
    'LABEL___zh_TW' => 'Chiński (tradycyjny)',
    'LABEL___ja_JP' => 'Japoński',
    'LABEL___ko_KR' => 'Koreański',

    'CONTEXT' => 'Pomiędzy separatorami `--- POCZĄTEK KONTEXTU ---` i `--- KONIEC KONTEXTU ---` znajdują się meta-informacje istotne dla tworzenia treści. Proszę pamiętać, że te informacje nie powinny być zawarte w treści: "%s"',
	'CONTEXT_TRANSLATE' => 'Przetłumacz następujące informacje z "%s" na polski - proszę bez wprowadzenia: %s',
    'CONTEXT_START' => '--- POCZĄTEK KONTEXTU ---',
    'CONTEXT_END' => '--- KONIEC KONTEXTU ---',

    'LONG_DESCRIPTION' => 'Utwórz długi opis artykułu dla "%s" z "%s". - Proszę bez wprowadzenia, maksymalnie %s słów i w języku polskim.',
    'SHORT_DESCRIPTION' => 'Utwórz krótki opis artykułu dla "%s" z "%s". - Proszę bez wprowadzenia i maksymalnie %s słów.',
    'PRODUCT_SEARCHKEYS' => 'Utwórz rozdzielaną przecinkami listę synonimów CSV dla "%s" z "%s" bez wskazań rozmiaru, objętości, litrów lub ilości, bez marki/producenta lub indywidualnych cech produktu, takich jak kolor, i bez duplikatów.',
    'PRODUCT_ATTRIBUTES' => 'Spróbuj określić wartości dla następujących atrybutów artykułu "%s" (SKU producenta: %s) z "%s" i utwórz JSON; zwróć wartości, które są `null` jako null: ',
    'CATGEORY_LONG_DESCRIPTION' => 'Utwórz długi opis kategorii dla "%s" z "%s". - Proszę bez wprowadzenia i maksymalnie %s słów.',
    'CATGEORY_SHORT_DESCRIPTION' => 'Utwórz krótki opis kategorii dla "%s" z "%s". - Proszę bez wprowadzenia i maksymalnie 255 znaków.',
    'MANUFACTURER_LONG_DESCRIPTION' => 'Utwórz długi opis producenta dla "%s" z "%s". - Proszę bez wprowadzenia i maksymalnie %s słów.',
    'MANUFACTURER_SHORT_DESCRIPTION' => 'Utwórz krótki opis producenta dla "%s" z "%s". - Proszę bez wprowadzenia i maksymalnie 255 znaków.',
    'VENDOR_SHORT_DESCRIPTION' => 'Utwórz krótki opis dostawcy dla "%s" z "%s". - Proszę bez wprowadzenia i maksymalnie 255 znaków.',

	'TRANSLATION_TITLE' => 'Przetłumacz tylko nazwę artykułu "%s" z "%s" na polski - i proszę bez wprowadzenia.',
	'TRANSLATION_LONG_TRANSLATION' => 'Przetłumacz tylko długi opis artykułu dla "%s" z "%s" na polski - i proszę bez wprowadzenia: "%s".',
	'TRANSLATION_SHORT_DESCRIPTION' => 'Przetłumacz tylko krótki opis artykułu dla "%s" z "%s" na polski - i proszę bez wprowadzenia: "%s".',

	'OPTIMIZE_CONTENT' => 'Optymalizuj następującą zawartość dla naszej strony internetowej (np. usuń "-wrapper lub jednostki HTML): %s',
	'OPTIMIZE_TRANSLATION' => 'Optymalizuj następujące tłumaczenie dla naszej strony internetowej (np. usuń "-wrapper lub jednostki HTML): %s',

    'ENHANCED_ARTICLE_DATA' => 'Ulepszone informacje o produkcie od producenta są dostępne w następującym ciągu JSON (Ważne: Nie należy pobierać żadnych wewnętrznych informacji, takich jak ceny zakupu lub dostępność, z informacji producenta): `%s`',

    'LONG_DESCRIPTION_INSTRUCTION' => implode(PHP_EOL, array(
		'Struktura jak poniżej:',
		'1. Główna zaleta w krótkim zdaniu, tak zwięzłym i konkretnym, jak to możliwe, w formacie `<p>`.',
		'2. Elementy listy z funkcjami i korzyściami, jakie przynosi każda funkcja.',
		'3. Jeden akapit na funkcję, składający się z nagłówka `<h2>` (zaleta funkcji + metafora)',
		'i krótkiego tekstu, który wspiera funkcję codzienną historią.',
		'Ważne: Brak nagłówka `<h1>`.',
		'4. Nie używaj żadnych jednostek HTML, takich jak `&uuml;` czy `&auml;`, ani pojedynczych lub podwójnych cudzysłowów.',
    )),
);