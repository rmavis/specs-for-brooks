<?php

class Pagemaker
{

    const PAGES_SOURCE_DIR = "page-parts/";
    const PAGES_TARGET_DIR = "pages/";
    const NAV_ITEMS_FILE = "nav_items.php";
    const NAV_HTML_FILE = "nav_html.php";
    const FOOTER_HTML_FILE = "footer_html.php";


    public static function make_all() {
        $nav_parts = [ ];
        $pages = [ ];

        foreach (glob(self::PAGES_SOURCE_DIR.'*.php') as $file) {
            $live = true;
            include($file);

            // Each page can set its own value for this. To prevent a page
            // from being included, just set its `live` variable to false.
            if ($live) {
                $ttl_url = self::clean_string_for_url($opts['title']);
                $filename = self::make_filename($ttl_url);

                if (array_key_exists('nav', $opts)) {
                    if (array_key_exists('url', $opts['nav'])) {
                        $filename = self::make_filename($opts['nav']['url']);
                    }
                    else {
                        $opts['nav']['url'] = '/'.$ttl_url;
                    }

                    if (!array_key_exists('title', $opts['nav'])) {
                        $opts['nav']['title'] = $opts['title'];
                    }
                }

                $nav_parts[] = $opts['nav'];

                if (!is_array($body)) {
                    $body = self::make_body_array($body);
                }
                else {
                    $body = array_merge(self::make_body_array(''), $body);
                }

                if (array_key_exists('body_mods', $opts)) {
                    $body['mods'] = $opts['body_mods'];
                }

                if (array_key_exists('body_wrap', $opts)) {
                    $body['wrap'] = $opts['body_wrap'];
                }

                $pages[] = [
                    'filename' => $filename,
                    'opts' => $opts,
                    'body' => $body,
                ];
            }
        }

        $nav_parts = self::sort_on_key('order',
                                       self::add_nav_extras($nav_parts));

        foreach ($pages as $page) {
            $html = self::make_page($page['opts'],
                                    $page['body'],
                                    $nav_parts);

            file_put_contents($page['filename'],
                              $html);
        }

    }



    public static function add_nav_extras($navs) {
        include(self::NAV_ITEMS_FILE);
        return array_merge($navs, $nav_items);
    }



    public static function make_page($opts, $body, $navs) {
        $head = self::head_section($opts);
        $body = self::body_section($body, $navs);

        $html = <<<HTML
              <!DOCTYPE html>
<html lang="en">
  {$head}
  {$body}
</html>
HTML;

        return $html;
    }



    public static function head_section($opts) {
        if (is_array($opts)) {
            if ((array_key_exists('nav', $opts)) &&
                (array_key_exists('title', $opts['nav']))) {
                $title =
                       self::default_page_title().
                       ' // '.
                       self::clean_string_for_titlebar($opts['nav']['title']);
            }

            elseif (array_key_exists('title', $opts)) {
                $title =
                       self::default_page_title().
                       ' // '.
                       self::clean_string_for_titlebar($opts['title']);
            }

            else {
                $title = self::default_page_title();
            }
        }

        else {
            $title = self::default_page_title();
        }

        $html = <<<HTML
<head>
  <title>{$title}</title>
  <meta name="viewport" content="initial-scale=1, width=device-width">
  <link rel="stylesheet" type="text/css" href="/css/main.css" />
  <script type="text/javascript" src="/js/main.js"></script>
</head>
HTML;

        return $html;
    }



    public static function default_page_title() {
        return "Brooks Cashbaugh";
    }



    public static function default_body_wrap() {
        return [
            'class' => 'carapace',
        ];
    }



    public static function default_body_mods() {
        return [ ];
    }



    public static function make_body_array($body_str) {
        $ret = [ ];

        $ret['mods'] = self::default_body_mods();
        $ret['wrap'] = self::default_body_wrap();
        $ret['body'] = $body_str;
        $ret['extra'] = false;

        return $ret;
    }



    // Body blocks that have extra need to add their own footers.
    public static function body_section($body, $navs) {
        if ($body['extra']) {
            $body_html =
                       $body['body'].
                       self::nav_button();
        }

        else {
            $body_html = 
                       $body['body'].
                       self::nav_button().
                       self::footer_section();
        }

        return self::html_element('body',
                                  $body['mods'],
                                  self::html_element('div',
                                                     $body['wrap'],
                                                     $body_html).
                                  self::nav_menu($navs).
                                  $body['extra']);
    }



    public static function image_block($file, $title = false, $details = false) {
        $capt_parts = [ ];

        if ($title) {
            $capt_parts[] = self::html_element('span',
                                               ['class' => 'img-capt-ttl'],
                                               $title);
        }

        if ($details) {
            $capt_parts[] = self::html_element('span',
                                               ['class' => 'img-capt-dtls'],
                                               $details);
        }

        $capt_html = '';
        foreach ($capt_parts as $part) {
            $capt_html .= $part.'. ';
        }

        $caption = self::html_element('p',
                                      ['class' => 'image-caption'],
                                      trim($capt_html));

        $block = <<<HTML
               <div class="image-block">
  <div class="img-wrap">
    <img class="slide-img" src="{$file}" />
    {$caption}
  </div>
</div>
HTML;

        return $block;
    }



    public static function html_element($tagname, $attributes, $body) {
        $elem = "<{$tagname}";

        if (is_array($attributes)) {
            foreach ($attributes as $key => $val) {
                $elem .= " {$key}=\"{$val}\"";
            }
        }

        $elem .= ">{$body}</{$tagname}>";

        return $elem;
    }



    public static function nav_button() {
        include(self::NAV_HTML_FILE);
        return $html;
    }



    public static function nav_menu($parts) {
        $items = [ ];

        foreach ($parts as $part) {
            $items[] = self::html_element('a',
                                          [
                                              'class' => 'nav-item',
                                              'href' => $part['url']
                                          ],
                                          "<li>{$part['title']}</li>"
            );
        }

        $navs = implode("\n", $items);

        $menu = <<<HTML
<div id="nav-screen" active="n">
  <ul id="nav-bar">
	  {$navs}
  </ul>
</div>
HTML;

        return $menu;
    }



    public static function sort_on_key($key, $parts) {
        $keyed = [ ];

        foreach ($parts as $part) {
            if (array_key_exists($key, $part)) {
                if (array_key_exists($part[$key], $keyed)) {
                    array_push($keyed[$part[$key]], $part);
                }

                else {
                    $keyed[$part[$key]] = [$part];
                }
            }

            else {
                array_push($keyed, $part);
            }
        }

        ksort($keyed);
        $ret = [ ];

        foreach ($keyed as $part) {
            if (is_array($part)) {
                if (array_key_exists($key, $part)) {
                    array_push($ret, $part);
                }

                else {
                    foreach ($part as $partlet) {
                        array_push($ret, $partlet);
                    }
                }
            }
        }

        return $ret;
    }



    public static function make_filename($str) {
        return self::PAGES_TARGET_DIR.$str.'.html';
    }



    public static function clean_string_for_url($str) {
        return trim(preg_replace('/[^-A-Z0-9a-z_]/',
                                 '-',
                                 trim(strtolower($str))),
                    '-');
    }



    public static function clean_string_for_titlebar($str) {
        return trim(preg_replace('/[ ]+/',
                                 ' ',
                                 preg_replace('/[^-A-Z0-9a-z_]/',
                                              ' ',
                                              preg_replace('/&[A-Z0-9a-z]+;/',
                                                           '-',
                                                           trim($str)))),
                    '-');
    }



    public static function footer_section() {
        include(self::FOOTER_HTML_FILE);
        return $html;
    }

}


Pagemaker::make_all();
