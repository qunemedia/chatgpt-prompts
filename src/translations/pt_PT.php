<?php

$aTranslations = array(
    'LABEL___en_US' => 'Inglês',
    'LABEL___de_DE' => 'Alemão',
    'LABEL___fr_FR' => 'Francês',
    'LABEL___es_ES' => 'Espanhol',
    'LABEL___pt_PT' => 'Português',
    'LABEL___it_IT' => 'Italiano',
    'LABEL___nl_NL' => 'Holandês',
    'LABEL___pl_PL' => 'Polaco',
    'LABEL___tr_TR' => 'Turco',
    'LABEL___ru_RU' => 'Russo',
    'LABEL___uk_UA' => 'Ucraniano',
    'LABEL___zh_CN' => 'Chinês (simplificado)',
    'LABEL___zh_TW' => 'Chinês (tradicional)',

    'CONTEXT' => 'Entre os separadores `--- INÍCIO DO CONTEXTO ---` e `--- FIM DO CONTEXTO ---` estão informações meta que são relevantes para a criação do conteúdo. Observe que estas informações não devem ser incluídas no conteúdo: "%s"',

    'LONG_DESCRIPTION' => 'Criar uma descrição longa do artigo para "%s" de "%s". - E por favor, sem introdução e com no máximo %s palavras.',
    'SHORT_DESCRIPTION' => 'Criar uma descrição curta do artigo para "%s" de "%s". - E por favor, sem introdução e com no máximo %s palavras.',
    'PRODUCT_SEARCHKEYS' => 'Criar uma lista CSV de sinónimos separados por vírgulas para "%s" de "%s" sem indicações de tamanho, volume, litro ou quantidade, sem marca/fabricante ou características individuais do produto, como cor, e sem duplicatas.',
    'PRODUCT_ATTRIBUTES' => 'Tente determinar os valores para os seguintes atributos do artigo "%s" (Referência do fabricante: %s) de "%s" e crie um JSON a partir disso; retorne valores que são `null` como null: ',
    'CATGEORY_LONG_DESCRIPTION' => 'Criar uma descrição longa da categoria para "%s" de "%s". - E por favor, sem introdução e com no máximo %s palavras.',
    'CATGEORY_SHORT_DESCRIPTION' => 'Criar uma descrição curta da categoria para "%s" de "%s". - E por favor, sem introdução e com no máximo 255 caracteres.',
    'MANUFACTURER_LONG_DESCRIPTION' => 'Criar uma descrição longa do fabricante para "%s" de "%s". - E por favor, sem introdução e com no máximo %s palavras.',
    'MANUFACTURER_SHORT_DESCRIPTION' => 'Criar uma descrição curta do fabricante para "%s" de "%s". - E por favor, sem introdução e com no máximo 255 caracteres.',
    'VENDOR_SHORT_DESCRIPTION' => 'Criar uma descrição curta do fornecedor para "%s" de "%s". - E por favor, sem introdução e com no máximo 255 caracteres.',

    'TRANSLATION_TITLE' => 'Traduza apenas o nome do artigo "%s" de "%s" para o "inglês" - e por favor, sem introdução.',
    'TRANSLATION_LONG_TRANSLATION' => 'Traduza apenas a descrição longa do artigo para "%s" de "%s" para o "inglês" - e por favor, sem introdução: "%s".',
    'TRANSLATION_SHORT_DESCRIPTION' => 'Traduza apenas a descrição curta do artigo para "%s" de "%s" para o "inglês" - e por favor, sem introdução: "%s".',

    'OPTIMIZE_CONTENT' => 'Otimize o seguinte conteúdo para o nosso site: %s',

    'ENHANCED_ARTICLE_DATA' => 'As informações aprimoradas sobre o produto do fabricante estão disponíveis na seguinte string JSON (Importante: Nenhuma informação interna, como preços de compra ou disponibilidade, deve ser retirada das informações do fabricante): `%s`',

    'LONG_DESCRIPTION_INSTRUCTION' => implode(PHP_EOL, array(
		'Estrutura como segue:',
		'1. Principal vantagem em uma frase curta, tão concisa e concreta quanto possível, em formato `<p>`.',
		'2. Itens de lista com características e o benefício que cada característica traz.',
		'3. Um parágrafo por característica, composto por um título `<h2>` (vantagem da característica + metáfora)',
		'e um breve texto que sustenta a característica com uma narrativa do dia a dia.',
		'Importante: Não usar título `<h1>`.',
		'4. Não use entidades HTML como `&uuml;` ou `&auml;` nem aspas simples ou duplas.',
    )),
);