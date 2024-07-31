<?php

$aTranslations = array(
    'LABEL___en_US' => 'İngilizce',
    'LABEL___de_DE' => 'Almanca',
    'LABEL___fr_FR' => 'Fransızca',
    'LABEL___es_ES' => 'İspanyolca',
    'LABEL___pt_PT' => 'Portekizce',
    'LABEL___it_IT' => 'İtalyanca',
    'LABEL___nl_NL' => 'Flemenkçe',
    'LABEL___pl_PL' => 'Lehçe',
    'LABEL___tr_TR' => 'Türkçe',
    'LABEL___ru_RU' => 'Rusça',
    'LABEL___uk_UA' => 'Ukraynaca',
    'LABEL___zh_CN' => 'Çince (basitleştirilmiş)',
    'LABEL___zh_TW' => 'Çince (geleneksel)',
    'LABEL___ja_JP' => 'Japonca',
    'LABEL___ko_KR' => 'Korece',

    'CONTEXT' => '`--- BAĞLAMIN BAŞLANGICI ---` ve `--- BAĞLAMIN SONU ---` ayraçları arasında içerik oluşturulması için ilgili meta bilgileri yer almaktadır. Lütfen bu bilgilerin içeriğe dahil edilmemesi gerektiğini unutmayın: "%s"',
    'CONTEXT_TRANSLATE' => 'Aşağıdaki bilgileri "%s"den Türkçeye çevirin - ve lütfen giriş yapmayın: %s',
    'CONTEXT_START' => '--- BAĞLAMIN SONU ---',
    'CONTEXT_END' => '--- BAĞLAMIN BAŞLANGICI ---',

	'LONG_DESCRIPTION' => '"%s" için "%s" dan uzun bir makale açıklaması oluşturun. - Ve lütfen bir giriş olmadan, maksimum %s kelime ve Türkçe olarak.',
	'SHORT_DESCRIPTION' => '"%s" için "%s" dan kısa bir makale açıklaması oluşturun. - Ve lütfen bir giriş olmadan, maksimum %s kelime ve Türkçe olarak.',
	'PRODUCT_SEARCHKEYS' => '"%s" için "%s" dan virgülle ayrılmış bir CSV eşanlamlı listesi oluşturun, boyut, hacim, litre veya miktar belirtilmeden, marka/üretici veya renk gibi bireysel ürün özellikleri olmadan, tekrarlamadan ve Türkçe olarak.',
	'PRODUCT_ATTRIBUTES' => '"%s" ürünü için (Üretici SKU: %s) %s den gelen aşağıdaki özelliklerin değerlerini belirlemeye çalışın ve bundan bir JSON oluşturun; `null` olan değerleri null olarak döndürün ve Türkçe olarak.',
	'CATGEORY_LONG_DESCRIPTION' => '"%s" için "%s" kategorisinin uzun bir açıklamasını oluşturun. - Ve lütfen bir giriş olmadan, maksimum %s kelime ve Türkçe olarak.',
	'CATGEORY_SHORT_DESCRIPTION' => '"%s" için "%s" kategorisinin kısa bir açıklamasını oluşturun. - Ve lütfen bir giriş olmadan, maksimum 255 karakter ve Türkçe olarak.',
	'MANUFACTURER_LONG_DESCRIPTION' => '"%s" için "%s" üreticisinin uzun bir açıklamasını oluşturun. - Ve lütfen bir giriş olmadan, maksimum %s kelime ve Türkçe olarak.',
	'MANUFACTURER_SHORT_DESCRIPTION' => '"%s" için "%s" üreticisinin kısa bir açıklamasını oluşturun. - Ve lütfen bir giriş olmadan, maksimum 255 karakter ve Türkçe olarak.',
	'VENDOR_SHORT_DESCRIPTION' => '"%s" için "%s" tedarikçisinin kısa bir açıklamasını oluşturun. - Ve lütfen bir giriş olmadan, maksimum 255 karakter ve Türkçe olarak.',

	'TRANSLATION_TITLE' => 'Sadece "%s" makale adını "%s" den Türkçe\'ye çevirin - ve lütfen bir giriş olmadan.',
	'TRANSLATION_LONG_TRANSLATION' => 'Sadece "%s" için "%s" makale uzun açıklamasını Türkçe\'ye çevirin - ve lütfen bir giriş olmadan: "%s".',
	'TRANSLATION_SHORT_DESCRIPTION' => 'Sadece "%s" için "%s" makale kısa açıklamasını Türkçe\'ye çevirin - ve lütfen bir giriş olmadan: "%s".',

	'OPTIMIZE_CONTENT' => 'Aşağıdaki içeriği web sitemiz için optimize edin (örneğin, "-wrapper veya HTML varlıklarını kaldırın): %s',
	'OPTIMIZE_TRANSLATION' => 'Aşağıdaki çeviriyi web sitemiz için optimize edin (örneğin, "-wrapper veya HTML varlıklarını kaldırın): %s',

    'ENHANCED_ARTICLE_DATA' => 'Üreticiden gelişmiş ürün bilgileri aşağıdaki JSON dizesinde mevcuttur (Önemli: Üretici bilgisi gibi hiçbir dahili bilgi alınmamalıdır, örneğin alış fiyatları veya bulunabilirlik): `%s`',

    'LONG_DESCRIPTION_INSTRUCTION' => implode(PHP_EOL, array(
		'Aşağıdaki gibi yapılandırın:',
		'1. Ana avantajı, `<p>` formatında olabildiğince kısa ve somut bir cümlede belirtin.',
		'2. Özellikler ve bu özelliklerin sağladığı faydalarla liste öğeleri.',
		'3. Her özellik için bir paragraf, `<h2>` başlığı (özelliğin avantajı + metafor)',
		've özelliği günlük bir hikaye ile destekleyen kısa bir metin.',
		'Önemli: `<h1>` başlığı kullanmayın.',
		'4. `&uuml;` veya `&auml;` gibi HTML varlıklarını ve tek veya çift tırnak işaretlerini kullanmayın.',
    )),
);