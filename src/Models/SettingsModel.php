<?php

namespace App\Models;

class SettingsModel
{
    private const PAGE_SLUG = 'theme-settings';

    private static ?int $pageId = null;

    private static function getPageId(): ?int
    {
        if (self::$pageId !== null) {
            return self::$pageId;
        }

        $page = get_page_by_path(self::PAGE_SLUG);

        self::$pageId = $page ? $page->ID : null;

        return self::$pageId;
    }

    private static function getAcfField(string $field): ?string
    {
        if (!function_exists('get_field')) {
            return null;
        }

        $pageId = self::getPageId();

        if (!$pageId) {
            return null;
        }

        return get_field($field, $pageId) ?: null;
    }

    public static function facebook(): ?string
    {
        return self::getAcfField('facebook-url');
    }

    public static function xcom(): ?string
    {
        return self::getAcfField('xcom-url');
    }

    public static function instagram(): ?string
    {
        return self::getAcfField('instagram-url');
    }

    public static function linkedin(): ?string
    {
        return self::getAcfField('linkedin-url');
    }

    public static function phone(): ?string
    {
        return self::getAcfField('phone');
    }

    public static function email(): ?string
    {
        return self::getAcfField('email');
    }

    public static function address(): ?string
    {
        return self::getAcfField('address');
    }

    public static function hours(): ?string
    {
        return self::getAcfField('hours');
    }
}