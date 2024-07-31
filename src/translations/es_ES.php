<?php

$aTranslations = array(
    'LABEL___en_US' => 'Inglés',
    'LABEL___de_DE' => 'Alemán',
    'LABEL___fr_FR' => 'Francés',
    'LABEL___es_ES' => 'Español',
    'LABEL___pt_PT' => 'Portugués',
    'LABEL___it_IT' => 'Italiano',
    'LABEL___nl_NL' => 'Holandés',
    'LABEL___pl_PL' => 'Polaco',
    'LABEL___tr_TR' => 'Turco',
    'LABEL___ru_RU' => 'Ruso',
    'LABEL___uk_UA' => 'Ucraniano',
    'LABEL___zh_CN' => 'Chino (simplificado)',
    'LABEL___zh_TW' => 'Chino (tradicional)',

    'CONTEXT' => 'Entre los separadores `--- INICIO DEL CONTEXTO ---` y `--- FIN DEL CONTEXTO ---` hay información meta relevante para la creación del contenido. Tenga en cuenta que esta información no debe incluirse en el contenido: "%s"',

    'LONG_DESCRIPTION' => 'Crear una descripción larga del artículo para "%s" a partir de "%s". - Y por favor sin introducción y con un máximo de %s palabras.',
    'SHORT_DESCRIPTION' => 'Crear una descripción corta del artículo para "%s" a partir de "%s". - Y por favor sin introducción y con un máximo de %s palabras.',
    'PRODUCT_SEARCHKEYS' => 'Crear una lista CSV de sinónimos separados por comas para "%s" a partir de "%s" sin indicaciones de tamaño, volumen, litros o cantidad, sin marca/fabricante o características individuales del producto como el color, y sin duplicados.',
    'PRODUCT_ATTRIBUTES' => 'Trate de determinar los valores de los siguientes atributos para el artículo "%s" (Referencia del fabricante: %s) a partir de "%s" y cree un JSON con ellos; devuelva los valores que son `null` como null: ',
    'CATGEORY_LONG_DESCRIPTION' => 'Crear una descripción larga de la categoría para "%s" de "%s". - Y por favor sin introducción y con un máximo de %s palabras.',
    'CATGEORY_SHORT_DESCRIPTION' => 'Crear una descripción corta de la categoría para "%s" de "%s". - Y por favor sin introducción y con un máximo de 255 caracteres.',
    'MANUFACTURER_LONG_DESCRIPTION' => 'Crear una descripción larga del fabricante para "%s" de "%s". - Y por favor sin introducción y con un máximo de %s palabras.',
    'MANUFACTURER_SHORT_DESCRIPTION' => 'Crear una descripción corta del fabricante para "%s" de "%s". - Y por favor sin introducción y con un máximo de 255 caracteres.',
    'VENDOR_SHORT_DESCRIPTION' => 'Crear una descripción corta del proveedor para "%s" de "%s". - Y por favor sin introducción y con un máximo de 255 caracteres.',

    'TRANSLATION_TITLE' => 'Traducir solo el nombre del artículo "%s" de "%s" al "inglés" - y por favor sin introducción.',
    'TRANSLATION_LONG_TRANSLATION' => 'Traducir solo la descripción larga del artículo para "%s" de "%s" al "inglés" - y por favor sin introducción: "%s".',
    'TRANSLATION_SHORT_DESCRIPTION' => 'Traducir solo la descripción corta del artículo para "%s" de "%s" al "inglés" - y por favor sin introducción: "%s".',

    'OPTIMIZE_CONTENT' => 'Optimizar el siguiente contenido para nuestro sitio web: %s',

    'ENHANCED_ARTICLE_DATA' => 'La información mejorada del producto del fabricante está disponible en la siguiente cadena JSON (Importante: No se debe tomar ninguna información interna como precios de compra o disponibilidad de la información del fabricante): `%s`',

    'LONG_DESCRIPTION_INSTRUCTION' => implode(PHP_EOL, array(
		'Estructura de la siguiente manera:',
		'1. Ventaja principal en una frase corta, tan concisa y concreta como sea posible en formato `<p>`.',
		'2. Elementos de lista con características y el beneficio que cada característica aporta.',
		'3. Un párrafo por característica que consiste en un encabezado `<h2>` (ventaja de la característica + metáfora)',
		'y un breve texto que respalda la característica con una historia cotidiana.',
		'Importante: No usar encabezado `<h1>`.',
		'4. No usar entidades HTML como `&uuml;` o `&auml;` ni comillas simples o dobles.',
    )),
);