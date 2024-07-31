<?php

$aTranslations = array(
    'LABEL___en_US' => '英語',
    'LABEL___de_DE' => '德語',
    'LABEL___fr_FR' => '法語',
    'LABEL___es_ES' => '西班牙語',
    'LABEL___pt_PT' => '葡萄牙語',
    'LABEL___it_IT' => '意大利語',
    'LABEL___nl_NL' => '荷蘭語',
    'LABEL___pl_PL' => '波蘭語',
    'LABEL___tr_TR' => '土耳其語',
    'LABEL___ru_RU' => '俄語',
    'LABEL___uk_UA' => '烏克蘭語',
    'LABEL___zh_CN' => '中文 (簡體)',
    'LABEL___zh_TW' => '中文 (繁體)',
    'LABEL___ja_JP' => '日語',
    'LABEL___ko_KR' => '韓語',

    'CONTEXT' => '在分隔符 `--- 上下文開始 ---` 和 `--- 上下文結束 ---` 之間是與內容創作相關的元信息。請注意，這些信息不應包含在內容中: "%s"',

    'LONG_DESCRIPTION' => '為"%s"創建一個來自"%s"的長文章描述。 - 請不要有介紹，並且最多 %s 字。',
    'SHORT_DESCRIPTION' => '為"%s"創建一個來自"%s"的短文章描述。 - 請不要有介紹，並且最多 %s 字。',
    'PRODUCT_SEARCHKEYS' => '創建一個由逗號分隔的 CSV 同義詞列表，用於"%s"來自"%s"，不包括大小、體積、升或數量指示，不包括品牌/製造商或個別產品特徵（如顏色），且不包括重複項。',
    'PRODUCT_ATTRIBUTES' => '嘗試確定文章"%s"的以下屬性的值（製造商SKU: %s）來自"%s"，並從中創建一個JSON；返回的值`null`為null: ',
    'CATGEORY_LONG_DESCRIPTION' => '為"%s"類別的"%s"創建一個長描述。 - 請不要有介紹，並且最多 %s 字。',
    'CATGEORY_SHORT_DESCRIPTION' => '為"%s"類別的"%s"創建一個短描述。 - 請不要有介紹，並且最多255個字符。',
    'MANUFACTURER_LONG_DESCRIPTION' => '為"%s"製造商的"%s"創建一個長描述。 - 請不要有介紹，並且最多 %s 字。',
    'MANUFACTURER_SHORT_DESCRIPTION' => '為"%s"製造商的"%s"創建一個短描述。 - 請不要有介紹，並且最多255個字符。',
    'VENDOR_SHORT_DESCRIPTION' => '為"%s"供應商的"%s"創建一個短描述。 - 請不要有介紹，並且最多255個字符。',

	'TRANSLATION_TITLE' => '僅將文章名稱"%s"從"%s"翻譯成中文 - 請不要有介紹。',
	'TRANSLATION_LONG_TRANSLATION' => '僅將文章長描述"%s"從"%s"翻譯成中文 - 請不要有介紹: "%s"。',
	'TRANSLATION_SHORT_DESCRIPTION' => '僅將文章短描述"%s"從"%s"翻譯成中文 - 請不要有介紹: "%s"。',

	'OPTIMIZE_CONTENT' => '為我們的網站優化以下內容（例如，刪除 "-wrapper 或 HTML 實體）：%s',
	'OPTIMIZE_TRANSLATION' => '為我們的網站優化以下翻譯（例如，刪除 "-wrapper 或 HTML 實體）：%s',

    'ENHANCED_ARTICLE_DATA' => '來自製造商的增強產品信息在以下JSON字符串中可用（重要提示：製造商信息中不應包含任何內部信息，例如購買價格或可用性）：`%s`',

    'LONG_DESCRIPTION_INSTRUCTION' => implode(PHP_EOL, array(
		'結構如下：',
		'1. 主要優勢用盡可能簡潔和具體的句子，以 `<p>` 格式表述。',
		'2. 列出特性及其帶來的好處。',
		'3. 每個特性一個段落，包括一個 `<h2>` 標題（特性的優勢 + 比喻）',
		'和一個簡短的文本，通過日常故事來支持特性。',
		'重要提示：不要使用 `<h1>` 標題。',
		'4. 不使用 `&uuml;` 或 `&auml;` 等 HTML 實體，也不要使用單引號或雙引號。',
    )),
);