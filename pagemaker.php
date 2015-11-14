<?php

class Pagemaker
{

  const PAGES_SOURCE_DIR = "page-parts/";
  const PAGES_TARGET_DIR = "pages/";


  public static function make_all() {
    $nav_parts = [ ];
    $pages = [ ];

    foreach (glob(self::PAGES_SOURCE_DIR.'*.php') as $file) {
      include($file);

      $ttl_url = self::clean_string_for_url($opts['title']);
      $filename = self::make_filename($ttl_url);

      if (array_key_exists('nav', $opts)) {
        if (!array_key_exists('url', $opts['nav'])) {
          $opts['nav']['url'] = '/'.$ttl_url;
        }

        $opts['nav']['title'] = $opts['title'];
      }

      $nav_parts[] = $opts['nav'];

      $pages[] = [
                  'filename' => $filename,
                  'opts' => $opts,
                  'body' => $body,
                  ];
    }

    $nav_parts = self::sort_on_key('order', $nav_parts);

    foreach ($pages as $page) {
      $html = self::make_page($page['opts'],
                              $page['body'],
                              $nav_parts);

      file_put_contents($page['filename'],
                        $html);
    }

  }



  public static function make_page($opts, $body, $navs) {
    $head = self::head_section($opts);
    $body = self::body_section($body.self::nav_menu($navs));

    $html = <<<HTML
<!DOCTYPE html>
<html lang="en">
  {$head}
  {$body}
</html>
HTML;

    return $html;
  }



  public static function head_section($opts = false) {
    if (is_array($opts)) {
      if (array_key_exists('extra-title', $opts)) {
        $title = self::default_page_title().' // '.$opts['extra-title'];
      }

      elseif (array_key_exists('title', $opts)) {
        $title = $opts['title'];
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



  public static function body_section($part) {
    return self::html_element('body',
                              [],
                              $part);
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

    $caption = self::html_element('p',
                                  ['class' => 'image-caption'],
                                  implode(' ', $capt_parts));

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
    $html = <<<HTML
<a id="nav-toggle" class="off" href="#" onclick="return toggleNav();">
  <div id="nav-tog-button"></div>
</a>
HTML;

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

    $navs = implode('', $items);

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
    return preg_replace('/[^-A-Z0-9a-z_]/', '-', trim(strtolower($str)));
  }

}


Pagemaker::make_all();
