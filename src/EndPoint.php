<?php

namespace Kibocode\Blueprint;

class EndPoint
{
    public const ORIGIN = 'https://api.openai.com';
    public const API_VERSION = 'v1';
    public const OPEN_AI_URL = self::ORIGIN . "/" . self::API_VERSION;

    /**
     * @return string
     */
    public static function completionsURL()
    {
        return self::OPEN_AI_URL . "/completions";
    }

    /**
     *
     * @return string
     */
    public static function editsUrl()
    {
        return self::OPEN_AI_URL . "/edits";
    }

    /**
     * @param
     * @return string
     */
    public static function moderationUrl()
    {
        return self::OPEN_AI_URL . "/moderations";
    }

    /**
     * @param
     * @return string
     */
    public static function transcriptionsUrl()
    {
        return self::OPEN_AI_URL . "/audio/transcriptions";
    }

    /**
     * @param
     * @return string
     */
    public static function translationsUrl()
    {
        return self::OPEN_AI_URL . "/audio/translations";
    }

    /**
     * @param
     * @return string
     */
    public static function fineTuneModel()
    {
        return self::OPEN_AI_URL . "/models";
    }

    /**
     * @param
     * @return string
     */
    public static function imageUrl()
    {
        return self::OPEN_AI_URL . "/images";
    }

    /**
     * @param
     * @return string
     */
    public static function chatUrl()
    {
        return self::OPEN_AI_URL . "/chat/completions";
    }
}
