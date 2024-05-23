<?php

namespace QuneMedia\ChatGpt\Prompts;

class Prompt
{
    private static $_oPrompt = NULL;

    private static $_bPrompt = FALSE;

    private string $_sLangCode = 'en_US';

    private array $_aTranslations = array();


    /**
     * __construct()
     *
     * @return $this
     */
    public function __construct() {
    }

    /**
     * load()
     *
     * Singleton to secure to create only one instance of this class.
     *
     * @return $this|boolean
     */
    public static function load()
    {
        if (!self::$_bPrompt) {
            self::$_bPrompt = TRUE;

            if (self::$_bPrompt) {

                if (self::$_oPrompt == NULL) {
                    self::$_oPrompt = new Prompt();

                    // TODO: DEPRECATED - Throws PHP Notice, Remove in future versions
                    self::$_oPrompt->_bPrompt = self::$_bPrompt;
                }
            }
        }

        return self::$_bPrompt ? self::$_oPrompt : FALSE;
    }

    public function get($sKey, $sLangCode = null)
    {
        if ($sLangCode == null) {
            $sLangCode = $this->_sLangCode;
        }

        // LOAD TRANSLATIONS
        if (!$this->loadTranslations($sLangCode)) {
            return 'LANUAGE_FILE_NOT_FOUND';
        }

        // LOAD TRANSLATION
        if (!isset($this->_aTranslations[$sLangCode][$sKey])) {
            return 'TRANSLATION_CODE_NOT_FOUND';
        }

        // RETURN TRANSLATED PROMPT
        return $this->_aTranslations[$sLangCode][$sKey];
    }

    private function loadTranslations($sLangCode): bool
    {
        $sFile = __DIR__ . '/translations/' . $sLangCode . '.php';

        if (file_exists($sFile)) {
            include_once $sFile;

            if (isset($aTranslations)) {
                // STORE TRANSLATIONS
                $this->_aTranslations[$sLangCode] = $aTranslations;
            }
        }

        return isset($this->_aTranslations[$sLangCode]);
    }

    public function setLangCode($sLangCode)
    {
        $sFile = __DIR__ . '/translations/' . $sLangCode . '.php';

        if (!file_exists($sFile)) {
            return 'LANUAGE_FILE_NOT_FOUND';
        }

        // SET LANGUAGE CODE
        $this->_sLangCode = $sLangCode;

        return TRUE;
    }
}