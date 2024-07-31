<?php

$aTranslations = array(
    'LABEL___en_US' => '英语',
    'LABEL___de_DE' => '德语',
    'LABEL___fr_FR' => '法语',
    'LABEL___es_ES' => '西班牙语',
    'LABEL___pt_PT' => '葡萄牙语',
    'LABEL___it_IT' => '意大利语',
    'LABEL___nl_NL' => '荷兰语',
    'LABEL___pl_PL' => '波兰语',
    'LABEL___tr_TR' => '土耳其语',
    'LABEL___ru_RU' => '俄语',
    'LABEL___uk_UA' => '乌克兰语',
    'LABEL___zh_CN' => '中文 (简体)',
    'LABEL___zh_TW' => '中文 (繁体)',

    'CONTEXT' => '在分隔符 `--- 上下文开始 ---` 和 `--- 上下文结束 ---` 之间是与内容创作相关的元信息。请注意，这些信息不应包含在内容中: "%s"',

    'LONG_DESCRIPTION' => '为"%s"创建一个来自"%s"的长文章描述。 - 请不要有介绍，并且最多 %s 字。',
    'SHORT_DESCRIPTION' => '为"%s"创建一个来自"%s"的短文章描述。 - 请不要有介绍，并且最多 %s 字。',
    'PRODUCT_SEARCHKEYS' => '创建一个由逗号分隔的 CSV 同义词列表，用于"%s"来自"%s"，不包括大小、体积、升或数量指示，不包括品牌/制造商或个别产品特征（如颜色），且不包括重复项。',
    'PRODUCT_ATTRIBUTES' => '尝试确定文章"%s"的以下属性的值（制造商SKU: %s）来自"%s"，并从中创建一个JSON；返回的值`null`为null: ',
    'CATGEORY_LONG_DESCRIPTION' => '为"%s"类别的"%s"创建一个长描述。 - 请不要有介绍，并且最多 %s 字。',
    'CATGEORY_SHORT_DESCRIPTION' => '为"%s"类别的"%s"创建一个短描述。 - 请不要有介绍，并且最多255个字符。',
    'MANUFACTURER_LONG_DESCRIPTION' => '为"%s"制造商的"%s"创建一个长描述。 - 请不要有介绍，并且最多 %s 字。',
    'MANUFACTURER_SHORT_DESCRIPTION' => '为"%s"制造商的"%s"创建一个短描述。 - 请不要有介绍，并且最多255个字符。',
    'VENDOR_SHORT_DESCRIPTION' => '为"%s"供应商的"%s"创建一个短描述。 - 请不要有介绍，并且最多255个字符。',

	'TRANSLATION_TITLE' => '仅将文章名称"%s"从"%s"翻译成中文 - 请不要有介绍。',
	'TRANSLATION_LONG_TRANSLATION' => '仅将文章长描述"%s"从"%s"翻译成中文 - 请不要有介绍: "%s"。',
	'TRANSLATION_SHORT_DESCRIPTION' => '仅将文章短描述"%s"从"%s"翻译成中文 - 请不要有介绍: "%s"。',

    'OPTIMIZE_CONTENT' => '为我们的网站优化以下内容：%s',

    'ENHANCED_ARTICLE_DATA' => '来自制造商的增强产品信息在以下JSON字符串中可用（重要提示：制造商信息中不应包含任何内部信息，例如购买价格或可用性）：`%s`',

    'LONG_DESCRIPTION_INSTRUCTION' => implode(PHP_EOL, array(
		'结构如下：',
		'1. 主要优势用尽可能简洁和具体的句子，以 `<p>` 格式表述。',
		'2. 列出特性及其带来的好处。',
		'3. 每个特性一个段落，包括一个 `<h2>` 标题（特性的优势 + 比喻）',
		'和一个简短的文本，通过日常故事来支持特性。',
		'重要提示：不要使用 `<h1>` 标题。',
		'4. 不使用 `&uuml;` 或 `&auml;` 等 HTML 实体，也不要使用单引号或双引号。',
    )),
);