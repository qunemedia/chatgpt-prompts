<?php

namespace QuneMedia\ChatGpt\Prompts;

class LanguageMapper
{
    public static function getLocaleCode($id)
    {
        $aLocales = array(
            'de' => 'de_DE',
            'en' => 'en_US',
            'es' => 'es_ES',
            'fr' => 'fr_FR',
            'it' => 'it_IT',
            'ja' => 'ja_JP',
            'ko' => 'ko_KR',
            'nl' => 'nl_NL',
            'pl' => 'pl_PL',
            'pt' => 'pt_PT',
            'ru' => 'ru_RU',
            'zh' => 'zh_CN',
        );

        return isset($aLocales[$id]) ? $aLocales[$id] : 'en_US';
    }
}