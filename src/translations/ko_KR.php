<?php

$aTranslations = array(
    'LABEL___en_US' => '영어',
    'LABEL___de_DE' => '독일어',
    'LABEL___fr_FR' => '프랑스어',
    'LABEL___es_ES' => '스페인어',
    'LABEL___pt_PT' => '포르투갈어',
    'LABEL___it_IT' => '이탈리아어',
    'LABEL___nl_NL' => '네덜란드어',
    'LABEL___pl_PL' => '폴란드어',
    'LABEL___tr_TR' => '터키어',
    'LABEL___ru_RU' => '러시아어',
    'LABEL___uk_UA' => '우크라이나어',
    'LABEL___zh_CN' => '중국어 (간체)',
    'LABEL___zh_TW' => '중국어 (번체)',
    'LABEL___ja_JP' => '일본어',
    'LABEL___ko_KR' => '한국어',

    'CONTEXT' => '구분자 `--- 컨텍스트 시작 ---` 와 `--- 컨텍스트 끝 ---` 사이에는 콘텐츠 생성에 관련된 메타 정보가 있습니다. 이 정보는 콘텐츠에 포함되지 않도록 하십시오: "%s"',
    'CONTEXT_TRANSLATE' => '다음 정보를 "%s"에서 한국어로 번역하십시오 - 도입부 없이: %s',
    'CONTEXT_START' => '--- 컨텍스트 시작 ---',
    'CONTEXT_END' => '--- 컨텍스트 끝 ---',

    'LONG_DESCRIPTION' => '"%s"의 "%s"에 대한 기사 긴 설명을 작성하십시오. - 인트로 없이 최대 %s 단어로 작성해 주세요.',
    'SHORT_DESCRIPTION' => '"%s"의 "%s"에 대한 기사 짧은 설명을 작성하십시오. - 인트로 없이 최대 %s 단어로 작성해 주세요.',
    'PRODUCT_SEARCHKEYS' => '"%s"의 "%s"에 대한 동의어를 크기, 부피, 리터, 수량, 브랜드/제조업체 또는 개별 제품 특성(예: 색상)을 포함하지 않고 중복되지 않는 쉼표로 구분된 CSV 목록을 작성하십시오.',
    'PRODUCT_ATTRIBUTES' => '"%s" 제품 (제조업체 SKU: %s)에 대해 다음 속성의 값을 "%s"에서 추출하고 이를 바탕으로 JSON을 작성하십시오. `null` 값은 null로 반환하십시오: ',
    'CATGEORY_LONG_DESCRIPTION' => '"%s"의 "%s" 카테고리에 대한 긴 설명을 작성하십시오. - 인트로 없이 최대 %s 단어로 작성해 주세요.',
    'CATGEORY_SHORT_DESCRIPTION' => '"%s"의 "%s" 카테고리에 대한 짧은 설명을 작성하십시오. - 인트로 없이 최대 255자 내로 작성해 주세요.',
    'MANUFACTURER_LONG_DESCRIPTION' => '"%s"의 "%s" 제조업체에 대한 긴 설명을 작성하십시오. - 인트로 없이 최대 %s 단어로 작성해 주세요.',
    'MANUFACTURER_SHORT_DESCRIPTION' => '"%s"의 "%s" 제조업체에 대한 짧은 설명을 작성하십시오. - 인트로 없이 최대 255자 내로 작성해 주세요.',
    'VENDOR_SHORT_DESCRIPTION' => '"%s"의 "%s" 공급업체에 대한 짧은 설명을 작성하십시오. - 인트로 없이 최대 255자 내로 작성해 주세요.',

    'TRANSLATION_TITLE' => '"%s"의 기사 제목 "%s"를 한국어로 번역하십시오 - 인트로 없이 작성해 주세요.',
    'TRANSLATION_LONG_TRANSLATION' => '"%s"의 "%s"에 대한 기사 긴 설명을 한국어로 번역하십시오 - 인트로 없이 작성해 주세요: "%s".',
    'TRANSLATION_SHORT_DESCRIPTION' => '"%s"의 "%s"에 대한 기사 짧은 설명을 한국어로 번역하십시오 - 인트로 없이 작성해 주세요: "%s".',

	'OPTIMIZE_CONTENT' => '웹사이트에 맞게 다음 콘텐츠를 최적화하십시오 (예: "-wrapper 또는 HTML 엔터티 제거): %s',
	'OPTIMIZE_TRANSLATION' => '웹사이트에 맞게 다음 번역을 최적화하십시오 (예: "-wrapper 또는 HTML 엔터티 제거): %s',

    'ENHANCED_ARTICLE_DATA' => '제조업체의 강화된 제품 정보가 다음 JSON 문자열에 포함되어 있습니다(중요: 구매 가격 또는 가용성과 같은 내부 정보는 제조업체 정보에서 가져오지 마십시오): `%s`',
    
    'LONG_DESCRIPTION_INSTRUCTION' => implode(PHP_EOL, array(
        '다음과 같이 구조화합니다:',
        '1. 주된 장점을 가능한 한 간결하고 구체적으로 `<p>` 형식으로 짧은 문장으로 작성하십시오.',
        '2. 기능과 그 기능이 제공하는 혜택을 나열하십시오.',
        '3. 각 기능에 대해 `<h2>` 제목(기능의 이점 + 비유)',
        '및 일상적인 이야기를 통해 기능을 강조하는 짧은 텍스트로 구성된 단락을 작성하십시오.',
        '중요: `<h1>` 제목은 사용하지 마십시오.',
        '4. `&uuml;` 또는 `&auml;`와 같은 HTML 엔티티나 작은따옴표 또는 큰따옴표를 사용하지 마십시오.',
    )),
);
