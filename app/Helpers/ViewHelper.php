<?php

namespace App\Helpers;

class ViewHelper
{

    /**
     * Wrap a string inside a html tag.
     *
     * @param string $tag     The tag that wrap the content.
     * @param string $content The content to wrap.
     *
     * @return string
     */
    public static function wrapInsideTag(string $tag, string $content): string
    {
        return "<$tag>$content</$tag>";
    }

    /**
     * Wrap a string inside a html '<a>' tag.
     *
     * @param string $content The content to wrap.
     * @param string $route   The route passed in the 'href' attribute.
     *
     * @return string
     */
    public static function wrapInsideLinkTag(string $content, string $route): string
    {
        return "<a href='$route'>$content</a>";
    }
}
