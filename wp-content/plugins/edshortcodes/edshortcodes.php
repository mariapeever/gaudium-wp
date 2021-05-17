<?php
/*
 * Plugin Name: ed. Shortcodes
 * Plugin URI:
 * Description: ed. Shortcodes is a collection of shortcodes by EtherDesign, which includes icons, forms, thumbnails and Bootstrap 3 CSS, Components and JavaScript.
 * Version: 1.0
 * Author: Mariya Peeva @etherdesign
 * Author URI: https://themeforest.net/user/etherdesign/
 * Text Domain: edshortcodes
*/

// Prevent direct access to files
if (!defined('ABSPATH'))
{
    exit;
}

/**
 * Confirm flaticon name
 * @param $name 
 * @return bool Flaticon name (does not) exist(s)
 */
function ed_flaticon($name)
{
    if (in_array($name, array(
        'banknote',
        'big-megaphone',
        'big-star',
        'camera-video',
        'chemistry',
        'coffee',
        'daily-newspaper',
        'database',
        'diamond',
        'digital-photo',
        'dustbin',
        'envelope',
        'eye',
        'flame',
        'graduation-cap',
        'groceries-store',
        'heart-shape',
        'inbox',
        'like',
        'location-gps',
        'locked-padlock',
        'newspaper',
        'noodle-bowl',
        'paper-plane',
        'paperclip-archive',
        'parameters',
        'pencil-with-rubber',
        'quaver',
        'reflex-camera',
        'screen-outline',
        'setting-tool',
        'small-calendar',
        'small-cloud',
        'small-key',
        'small-light-bulb',
        'small-truck',
        'smartphone-outline',
        'sound-on',
        'speech-bubble',
        'tag',
        'television-outline',
        'the-world',
        'user-avatar',
        'vynil',
        'wallet-with-zipper',
        'white-t-shirt',
        'wristwatch',
        'zoom-tool'
    )))
    {
        return true;
    }
    return false;
}

/** 
 * Flaticon shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_flaticon_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'name' => '',
        'size' => ''
    ) , $atts, 'ed_flaticon_shortcode'));

    if (ed_flaticon($name))
    {
        $icon_name = 'flaticon-' . esc_attr($name);
    }
    else
    {
        $icon_name = '';
    }

    if (in_array($size, array(
        'xs',
        'sm',
        'md',
        'lg'
    )))
    {
        $icon_size = esc_attr($size);
    }
    else
    {
        $icon_size = '';
    }

    $output = '<span class="icon ' . $icon_name . ' ' . $icon_size . '"></span>';

    return $output;
}

/**
 * Confirm ionicon name
 * @param $name 
 * @return bool Ionicon name (does not) exist(s)
 */
function ed_ionicons($name)
{
    if (in_array($name, array(
        'ionic',
        'arrow-up-a',
        'arrow-right-a',
        'arrow-down-a',
        'arrow-left-a',
        'arrow-up-b',
        'arrow-right-b',
        'arrow-down-b',
        'arrow-left-b',
        'arrow-up-c',
        'arrow-right-c',
        'arrow-down-c',
        'arrow-left-c',
        'arrow-return-right',
        'arrow-return-left',
        'arrow-swap',
        'arrow-shrink',
        'arrow-expand',
        'arrow-move',
        'arrow-resize',
        'chevron-up',
        'chevron-right',
        'chevron-down',
        'chevron-left',
        'navicon-round',
        'navicon',
        'drag',
        'log-in',
        'log-out',
        'checkmark-round',
        'checkmark',
        'checkmark-circled',
        'close-round',
        'close',
        'close-circled',
        'plus-round',
        'plus',
        'plus-circled',
        'minus-round',
        'minus',
        'minus-circled',
        'information',
        'information-circled',
        'help',
        'help-circled',
        'backspace-outline',
        'backspace',
        'help-buoy',
        'asterisk',
        'alert',
        'alert-circled',
        'refresh',
        'loop',
        'shuffle',
        'home',
        'search',
        'flag',
        'star',
        'heart',
        'heart-broken',
        'gear-a',
        'gear-b',
        'toggle-filled',
        'toggle',
        'settings',
        'wrench',
        'hammer',
        'edit',
        'trash-a',
        'trash-b',
        'document',
        'document-text',
        'clipboard',
        'scissors',
        'funnel',
        'bookmark',
        'email',
        'email-unread',
        'folder',
        'filing',
        'archive',
        'reply',
        'reply-all',
        'forward',
        'share',
        'paper-airplane',
        'link',
        'paperclip',
        'compose',
        'briefcase',
        'medkit',
        'at',
        'pound',
        'quote',
        'cloud',
        'upload',
        'more',
        'grid',
        'calendar',
        'clock',
        'compass',
        'pinpoint',
        'pin',
        'navigate',
        'location',
        'map',
        'lock-combination',
        'locked',
        'unlocked',
        'key',
        'arrow-graph-up-right',
        'arrow-graph-down-right',
        'arrow-graph-up-left',
        'arrow-graph-down-left',
        'stats-bars',
        'connection-bars',
        'pie-graph',
        'chatbubble',
        'chatbubble-working',
        'chatbubbles',
        'chatbox',
        'chatbox-working',
        'chatboxes',
        'person',
        'person-add',
        'person-stalker',
        'woman',
        'man',
        'female',
        'male',
        'transgender',
        'fork',
        'knife',
        'spoon',
        'soup-can-outline',
        'soup-can',
        'beer',
        'wineglass',
        'coffee',
        'icecream',
        'pizza',
        'power',
        'mouse',
        'battery-full',
        'battery-half',
        'battery-low',
        'battery-empty',
        'battery-charging',
        'wifi',
        'bluetooth',
        'calculator',
        'camera',
        'eye',
        'eye-disabled',
        'flash',
        'flash-off',
        'qr-scanner',
        'image',
        'images',
        'wand',
        'contrast',
        'aperture',
        'crop',
        'easel',
        'paintbrush',
        'paintbucket',
        'monitor',
        'laptop',
        'ipad',
        'iphone',
        'ipod',
        'printer',
        'usb',
        'outlet',
        'bug',
        'code',
        'code-working',
        'code-download',
        'fork-repo',
        'network',
        'pull-request',
        'merge',
        'xbox',
        'playstation',
        'steam',
        'closed-captioning',
        'videocamera',
        'film-marker',
        'disc',
        'headphone',
        'music-note',
        'radio-waves',
        'speakerphone',
        'mic-a',
        'mic-b',
        'mic-c',
        'volume-high',
        'volume-medium',
        'volume-low',
        'volume-mute',
        'levels',
        'play',
        'pause',
        'stop',
        'record',
        'skip-forward',
        'skip-backward',
        'eject',
        'bag',
        'card',
        'cash',
        'pricetag',
        'pricetags',
        'thumbsup',
        'thumbsdown',
        'happy-outline',
        'happy',
        'sad-outline',
        'sad',
        'bowtie',
        'tshirt-outline',
        'tshirt',
        'trophy',
        'podium',
        'ribbon-a',
        'ribbon-b',
        'university',
        'magnet',
        'beaker',
        'erlenmeyer-flask',
        'egg',
        'earth',
        'planet',
        'lightbulb',
        'cube',
        'leaf',
        'waterdrop',
        'flame',
        'fireball',
        'bonfire',
        'umbrella',
        'nuclear',
        'no-smoking',
        'thermometer',
        'speedometer',
        'model-s',
        'plane',
        'jet',
        'load-a',
        'load-b',
        'load-c',
        'load-d',
        'ios-ionic-outline',
        'ios-arrow-back',
        'ios-arrow-forward',
        'ios-arrow-up',
        'ios-arrow-right',
        'ios-arrow-down',
        'ios-arrow-left',
        'ios-arrow-thin-up',
        'ios-arrow-thin-right',
        'ios-arrow-thin-down',
        'ios-arrow-thin-left',
        'ios-circle-filled',
        'ios-circle-outline',
        'ios-checkmark-empty',
        'ios-checkmark-outline',
        'ios-checkmark',
        'ios-plus-empty',
        'ios-plus-outline',
        'ios-plus',
        'ios-close-empty',
        'ios-close-outline',
        'ios-close',
        'ios-minus-empty',
        'ios-minus-outline',
        'ios-minus',
        'ios-information-empty',
        'ios-information-outline',
        'ios-information',
        'ios-help-empty',
        'ios-help-outline',
        'ios-help',
        'ios-search',
        'ios-search-strong',
        'ios-star',
        'ios-star-half',
        'ios-star-outline',
        'ios-heart',
        'ios-heart-outline',
        'ios-more',
        'ios-more-outline',
        'ios-home',
        'ios-home-outline',
        'ios-cloud',
        'ios-cloud-outline',
        'ios-cloud-upload',
        'ios-cloud-upload-outline',
        'ios-cloud-download',
        'ios-cloud-download-outline',
        'ios-upload',
        'ios-upload-outline',
        'ios-download',
        'ios-download-outline',
        'ios-refresh',
        'ios-refresh-outline',
        'ios-refresh-empty',
        'ios-reload',
        'ios-loop-strong',
        'ios-loop',
        'ios-bookmarks',
        'ios-bookmarks-outline',
        'ios-book',
        'ios-book-outline',
        'ios-flag',
        'ios-flag-outline',
        'ios-glasses',
        'ios-glasses-outline',
        'ios-browsers',
        'ios-browsers-outline',
        'ios-at',
        'ios-at-outline',
        'ios-pricetag',
        'ios-pricetag-outline',
        'ios-pricetags',
        'ios-pricetags-outline',
        'ios-cart',
        'ios-cart-outline',
        'ios-chatboxes',
        'ios-chatboxes-outline',
        'ios-chatbubble',
        'ios-chatbubble-outline',
        'ios-cog',
        'ios-cog-outline',
        'ios-gear',
        'ios-gear-outline',
        'ios-settings',
        'ios-settings-strong',
        'ios-toggle',
        'ios-toggle-outline',
        'ios-analytics',
        'ios-analytics-outline',
        'ios-pie',
        'ios-pie-outline',
        'ios-pulse',
        'ios-pulse-strong',
        'ios-filing',
        'ios-filing-outline',
        'ios-box',
        'ios-box-outline',
        'ios-compose',
        'ios-compose-outline',
        'ios-trash',
        'ios-trash-outline',
        'ios-copy',
        'ios-copy-outline',
        'ios-email',
        'ios-email-outline',
        'ios-undo',
        'ios-undo-outline',
        'ios-redo',
        'ios-redo-outline',
        'ios-paperplane',
        'ios-paperplane-outline',
        'ios-folder',
        'ios-folder-outline',
        'ios-paper',
        'ios-paper-outline',
        'ios-list',
        'ios-list-outline',
        'ios-world',
        'ios-world-outline',
        'ios-alarm',
        'ios-alarm-outline',
        'ios-speedometer',
        'ios-speedometer-outline',
        'ios-stopwatch',
        'ios-stopwatch-outline',
        'ios-timer',
        'ios-timer-outline',
        'ios-clock',
        'ios-clock-outline',
        'ios-time',
        'ios-time-outline',
        'ios-calendar',
        'ios-calendar-outline',
        'ios-photos',
        'ios-photos-outline',
        'ios-albums',
        'ios-albums-outline',
        'ios-camera',
        'ios-camera-outline',
        'ios-reverse-camera',
        'ios-reverse-camera-outline',
        'ios-eye',
        'ios-eye-outline',
        'ios-bolt',
        'ios-bolt-outline',
        'ios-color-wand',
        'ios-color-wand-outline',
        'ios-color-filter',
        'ios-color-filter-outline',
        'ios-grid-view',
        'ios-grid-view-outline',
        'ios-crop-strong',
        'ios-crop',
        'ios-barcode',
        'ios-barcode-outline',
        'ios-briefcase',
        'ios-briefcase-outline',
        'ios-medkit',
        'ios-medkit-outline',
        'ios-medical',
        'ios-medical-outline',
        'ios-infinite',
        'ios-infinite-outline',
        'ios-calculator',
        'ios-calculator-outline',
        'ios-keypad',
        'ios-keypad-outline',
        'ios-telephone',
        'ios-telephone-outline',
        'ios-drag',
        'ios-location',
        'ios-location-outline',
        'ios-navigate',
        'ios-navigate-outline',
        'ios-locked',
        'ios-locked-outline',
        'ios-unlocked',
        'ios-unlocked-outline',
        'ios-monitor',
        'ios-monitor-outline',
        'ios-printer',
        'ios-printer-outline',
        'ios-game-controller-a',
        'ios-game-controller-a-outline',
        'ios-game-controller-b',
        'ios-game-controller-b-outline',
        'ios-americanfootball',
        'ios-americanfootball-outline',
        'ios-baseball',
        'ios-baseball-outline',
        'ios-basketball',
        'ios-basketball-outline',
        'ios-tennisball',
        'ios-tennisball-outline',
        'ios-football',
        'ios-football-outline',
        'ios-body',
        'ios-body-outline',
        'ios-person',
        'ios-person-outline',
        'ios-personadd',
        'ios-personadd-outline',
        'ios-people',
        'ios-people-outline',
        'ios-musical-notes',
        'ios-musical-note',
        'ios-bell',
        'ios-bell-outline',
        'ios-mic',
        'ios-mic-outline',
        'ios-mic-off',
        'ios-volume-high',
        'ios-volume-low',
        'ios-play',
        'ios-play-outline',
        'ios-pause',
        'ios-pause-outline',
        'ios-recording',
        'ios-recording-outline',
        'ios-fastforward',
        'ios-fastforward-outline',
        'ios-rewind',
        'ios-rewind-outline',
        'ios-skipbackward',
        'ios-skipbackward-outline',
        'ios-skipforward',
        'ios-skipforward-outline',
        'ios-shuffle-strong',
        'ios-shuffle',
        'ios-videocam',
        'ios-videocam-outline',
        'ios-film',
        'ios-film-outline',
        'ios-flask',
        'ios-flask-outline',
        'ios-lightbulb',
        'ios-lightbulb-outline',
        'ios-wineglass',
        'ios-wineglass-outline',
        'ios-pint',
        'ios-pint-outline',
        'ios-nutrition',
        'ios-nutrition-outline',
        'ios-flower',
        'ios-flower-outline',
        'ios-rose',
        'ios-rose-outline',
        'ios-paw',
        'ios-paw-outline',
        'ios-flame',
        'ios-flame-outline',
        'ios-sunny',
        'ios-sunny-outline',
        'ios-partlysunny',
        'ios-partlysunny-outline',
        'ios-cloudy',
        'ios-cloudy-outline',
        'ios-rainy',
        'ios-rainy-outline',
        'ios-thunderstorm',
        'ios-thunderstorm-outline',
        'ios-snowy',
        'ios-moon',
        'ios-moon-outline',
        'ios-cloudy-night',
        'ios-cloudy-night-outline',
        'android-arrow-up',
        'android-arrow-forward',
        'android-arrow-down',
        'android-arrow-back',
        'android-arrow-dropup',
        'android-arrow-dropup-circle',
        'android-arrow-dropright',
        'android-arrow-dropright-circle',
        'android-arrow-dropdown',
        'android-arrow-dropdown-circle',
        'android-arrow-dropleft',
        'android-arrow-dropleft-circle',
        'android-add',
        'android-add-circle',
        'android-remove',
        'android-remove-circle',
        'android-close',
        'android-cancel',
        'android-radio-button-off',
        'android-radio-button-on',
        'android-checkmark-circle',
        'android-checkbox-outline-blank',
        'android-checkbox-outline',
        'android-checkbox-blank',
        'android-checkbox',
        'android-done',
        'android-done-all',
        'android-menu',
        'android-more-horizontal',
        'android-more-vertical',
        'android-refresh',
        'android-sync',
        'android-wifi',
        'android-call',
        'android-apps',
        'android-settings',
        'android-options',
        'android-funnel',
        'android-search',
        'android-home',
        'android-cloud-outline',
        'android-cloud',
        'android-download',
        'android-upload',
        'android-cloud-done',
        'android-cloud-circle',
        'android-favorite-outline',
        'android-favorite',
        'android-star-outline',
        'android-star-half',
        'android-star',
        'android-calendar',
        'android-alarm-clock',
        'android-time',
        'android-stopwatch',
        'android-watch',
        'android-locate',
        'android-navigate',
        'android-pin',
        'android-compass',
        'android-map',
        'android-walk',
        'android-bicycle',
        'android-car',
        'android-bus',
        'android-subway',
        'android-train',
        'android-boat',
        'android-plane',
        'android-restaurant',
        'android-bar',
        'android-cart',
        'android-camera',
        'android-image',
        'android-film',
        'android-color-palette',
        'android-create',
        'android-mail',
        'android-drafts',
        'android-send',
        'android-archive',
        'android-delete',
        'android-attach',
        'android-share',
        'android-share-alt',
        'android-bookmark',
        'android-document',
        'android-clipboard',
        'android-list',
        'android-folder-open',
        'android-folder',
        'android-print',
        'android-open',
        'android-exit',
        'android-contract',
        'android-expand',
        'android-globe',
        'android-chat',
        'android-textsms',
        'android-hangout',
        'android-happy',
        'android-sad',
        'android-person',
        'android-people',
        'android-person-add',
        'android-contact',
        'android-contacts',
        'android-playstore',
        'android-lock',
        'android-unlock',
        'android-microphone',
        'android-microphone-off',
        'android-notifications-none',
        'android-notifications',
        'android-notifications-off',
        'android-volume-mute',
        'android-volume-down',
        'android-volume-up',
        'android-volume-off',
        'android-hand',
        'android-desktop',
        'android-laptop',
        'android-phone-portrait',
        'android-phone-landscape',
        'android-bulb',
        'android-sunny',
        'android-alert',
        'android-warning',
        'social-twitter',
        'social-twitter-outline',
        'social-facebook',
        'social-facebook-outline',
        'social-googleplus',
        'social-googleplus-outline',
        'social-google',
        'social-google-outline',
        'social-dribbble',
        'social-dribbble-outline',
        'social-octocat',
        'social-github',
        'social-github-outline',
        'social-instagram',
        'social-instagram-outline',
        'social-whatsapp',
        'social-whatsapp-outline',
        'social-snapchat',
        'social-snapchat-outline',
        'social-foursquare',
        'social-foursquare-outline',
        'social-pinterest',
        'social-pinterest-outline',
        'social-rss',
        'social-rss-outline',
        'social-tumblr',
        'social-tumblr-outline',
        'social-wordpress',
        'social-wordpress-outline',
        'social-reddit',
        'social-reddit-outline',
        'social-hackernews',
        'social-hackernews-outline',
        'social-designernews',
        'social-designernews-outline',
        'social-yahoo',
        'social-yahoo-outline',
        'social-buffer',
        'social-buffer-outline',
        'social-skype',
        'social-skype-outline',
        'social-linkedin',
        'social-linkedin-outline',
        'social-vimeo',
        'social-vimeo-outline',
        'social-twitch',
        'social-twitch-outline',
        'social-youtube',
        'social-youtube-outline',
        'social-dropbox',
        'social-dropbox-outline',
        'social-apple',
        'social-apple-outline',
        'social-android',
        'social-android-outline',
        'social-windows',
        'social-windows-outline',
        'social-html5',
        'social-html5-outline',
        'social-css3',
        'social-css3-outline',
        'social-javascript',
        'social-javascript-outline',
        'social-angular',
        'social-angular-outline',
        'social-nodejs',
        'social-sass',
        'social-python',
        'social-chrome',
        'social-chrome-outline',
        'social-codepen',
        'social-codepen-outline',
        'social-markdown',
        'social-tux',
        'social-freebsd-devil',
        'social-usd',
        'social-usd-outline',
        'social-bitcoin',
        'social-bitcoin-outline',
        'social-yen',
        'social-yen-outline',
        'social-euro',
        'social-euro-outline',
    )))
    {
        return true;
    }
    return false;
}

/** 
 * Ionicons shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_ionicons_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'name' => '',
        'size' => '',
        'light' => ''
    ) , $atts, 'ed_ionicons_shortcode'));

    if (ed_ionicons($name))
    {
        $icon_name = 'ion-' . esc_attr($name);
    }
    else
    {
        $icon_name = '';
    }

    if (in_array($size, array(
        'xs',
        'sm',
        'md',
        'lg'
    )))
    {
        $icon_size = esc_attr($size);
    }
    else
    {
        $icon_size = '';
    }

    if ($light)
    {
        $icon_light = true;
    }
    else
    {
        $icon_light = false;
    }

    $output = '<span class="icon ' . $icon_name . ' ' . $icon_size;
    if ($icon_light)
    {
        $output .= ' light-icon';
    }
    $output .= '"></span>';

    return $output;
}

/**
 * Confirm glyphicon name
 * @param $name 
 * @return bool Glyphicon name (does not) exist(s)
 */
function ed_glyphicon($name)
{
    if (in_array($name, array(
        'asterisk',
        'plus',
        'euro',
        'eur',
        'minus',
        'cloud',
        'envelope',
        'pencil',
        'glass',
        'music',
        'search',
        'heart',
        'star',
        'star-empty',
        'user',
        'film',
        'th-large',
        'th',
        'th-list',
        'ok',
        'remove',
        'zoom-in',
        'zoom-out',
        'off',
        'signal',
        'cog',
        'trash',
        'home',
        'file',
        'time',
        'road',
        'download-alt',
        'download',
        'upload',
        'inbox',
        'play-circle',
        'repeat',
        'refresh',
        'list-alt',
        'lock',
        'flag',
        'headphones',
        'volume-off',
        'volume-down',
        'volume-up',
        'qrcode',
        'barcode',
        'tag',
        'tags',
        'book',
        'bookmark',
        'print',
        'camera',
        'font',
        'bold',
        'italic',
        'text-height',
        'text-width',
        'align-left',
        'align-center',
        'align-right',
        'align-justify',
        'list',
        'indent-left',
        'indent-right',
        'facetime-video',
        'picture',
        'map-marker',
        'adjust',
        'tint',
        'edit',
        'share',
        'check',
        'move',
        'step-backward',
        'fast-backward',
        'backward',
        'play',
        'pause',
        'stop',
        'forward',
        'fast-forward',
        'step-forward',
        'eject',
        'chevron-left',
        'chevron-right',
        'plus-sign',
        'minus-sign',
        'remove-sign',
        'ok-sign',
        'question-sign',
        'info-sign',
        'screenshot',
        'remove-circle',
        'ok-circle',
        'ban-circle',
        'arrow-left',
        'arrow-right',
        'arrow-up',
        'arrow-down',
        'share-alt',
        'resize-full',
        'resize-small',
        'exclamation-sign',
        'gift',
        'leaf',
        'fire',
        'eye-open',
        'eye-close',
        'warning-sign',
        'plane',
        'calendar',
        'random',
        'comment',
        'magnet',
        'chevron-up',
        'chevron-down',
        'retweet',
        'shopping-cart',
        'folder-close',
        'folder-open',
        'resize-vertical',
        'resize-horizontal',
        'hdd',
        'bullhorn',
        'bell',
        'certificate',
        'thumbs-up',
        'thumbs-down',
        'hand-right',
        'hand-left',
        'hand-up',
        'hand-down',
        'circle-arrow-right',
        'circle-arrow-left',
        'circle-arrow-up',
        'circle-arrow-down',
        'globe',
        'wrench',
        'tasks',
        'filter',
        'briefcase',
        'fullscreen',
        'dashboard',
        'paperclip',
        'heart-empty',
        'link',
        'phone',
        'pushpin',
        'usd',
        'gbp',
        'sort',
        'sort-by-alphabet',
        'sort-by-alphabet-alt',
        'sort-by-order',
        'sort-by-order-alt',
        'sort-by-attributes',
        'sort-by-attributes-alt',
        'unchecked',
        'expand',
        'collapse-down',
        'collapse-up',
        'log-in',
        'flash',
        'log-out',
        'new-window',
        'record',
        'save',
        'open',
        'saved',
        'import',
        'export',
        'send',
        'floppy-disk',
        'floppy-saved',
        'floppy-remove',
        'floppy-save',
        'floppy-open',
        'credit-card',
        'transfer',
        'cutlery',
        'header',
        'compressed',
        'earphone',
        'phone-alt',
        'tower',
        'stats',
        'sd-video',
        'hd-video',
        'subtitles',
        'sound-stereo',
        'sound-dolby',
        'sound-5-1',
        'sound-6-1',
        'sound-7-1',
        'copyright-mark',
        'registration-mark',
        'cloud-download',
        'cloud-upload',
        'tree-conifer',
        'tree-deciduous'
    )))
    {
        return true;
    }
    return false;
}

/** 
 * Glyphicon shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_glyphicon_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'name' => '',
        'size' => '',
    ) , $atts, 'ed_glyphicon_shortcode'));

    if (ed_glyphicon($name))
    {
        $icon_name = 'glyphicon glyphicon-' . esc_attr($name);
    }
    else
    {
        $icon_name = '';
    }

    if (in_array($size, array(
        'xs',
        'sm',
        'md',
        'lg'
    )))
    {
        $icon_size = esc_attr($size);
    }
    else
    {
        $icon_size = '';
    }

    $output = '<span class="icon ' . $icon_name . ' ' . $icon_size . '" aria-hidden="true"></span>';

    return $output;
}

/** 
 * Screen reader only shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_sr_shortcode($atts = [], $content = null)
{
    $output = '<span class="sr-only">' . eds_do_shortcode($content) . '</span>';
    return $output;
}

/** 
 * Button toolbar shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_btn_toolbar_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'label' => '',
    ) , $atts, 'ed_btn_toolbar_shortcode'));

    if ($label)
    {
        $btn_toolbar_label = esc_attr($label);
    }
    else
    {
        $btn_toolbar_label = '';
    }

    $output = '<div class="btn-toolbar"';
    if ($btn_toolbar_label)
    {
        $output .= ' aria-label="' . $btn_toolbar_label . '"';
    }
    $output .= '>' . eds_do_shortcode($content) . '</div>';

    return $output;
}

/** 
 * Button group shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_btn_group_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'data_toggle'   => '',
        'role'          => '',
        'label'         => '',
        'size'          => '',
        'vertical'      => '',
        'justified'     => '',
        'dropup'        => ''
    ) , $atts, 'ed_btn_group_shortcode'));

    if (in_array($data_toggle, array(
        'buttons'
    )))
    {
        $btn_group_data_toggle = esc_attr($data_toggle);
    }
    else
    {
        $btn_group_data_toggle = '';
    }

    if (in_array($role, array(
        'group'
    )))
    {
        $btn_group_role = esc_attr($role);
    }
    else
    {
        $btn_group_role = '';
    }

    if ($label)
    {
        $btn_group_label = esc_attr($label);
    }
    else
    {
        $btn_group_label = '';
    }

    if (in_array($size, array(
        'lg',
        'sm',
        'xs'
    )))
    {
        $btn_group_size = esc_attr($size);
    }
    else
    {
        $btn_group_size = '';
    }

    if ($vertical)
    {
        $btn_group_vertical = true;
    }
    else
    {
        $btn_group_vertical = false;
    }

    if ($justified == "true")
    {
        $btn_group_justified = true;
    }
    else
    {
        $btn_group_justified = false;
    }

    if ($dropup == "true")
    {
        $btn_group_dropup = true;
    }
    else
    {
        $btn_group_dropup = false;
    }

    $output = '<div class="btn-group';
    if ($btn_group_vertical)
    {
        $output .= '-vertical';
    }
    if ($btn_group_justified)
    {
        $output .= ' btn-group-justified';
    }
    if ($btn_group_size)
    {
        $output .= ' btn-group-' . $btn_group_size;
    }
    if ($btn_group_dropup)
    {
        $output .= ' dropup';
    }
    $output .= '"';
    if ($btn_group_data_toggle)
    {
        $output .= ' data-toggle="' . $btn_group_data_toggle . '"';
    }
    if ($btn_group_role)
    {
        $output .= ' role="' . $btn_group_role . '"';
    }
    if ($btn_group_label)
    {
        $output .= ' aria-label="' . $btn_group_label . '"';
    }
    $output .= '>' . eds_do_shortcode($content) . '</div>';

    return $output;
}

/** 
 * Nested button group shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_nested_btn_group_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'data_toggle'   => '',
        'role'          => '',
        'label'         => '',
        'size'          => '',
        'vertical'      => ''
    ) , $atts, 'ed_nested_btn_group_shortcode'));

    if (in_array($data_toggle, array(
        'buttons'
    )))
    {
        $btn_group_data_toggle = esc_attr($data_toggle);
    }
    else
    {
        $btn_group_data_toggle = '';
    }

    if (in_array($role, array(
        'group'
    )))
    {
        $btn_group_role = esc_attr($role);
    }
    else
    {
        $btn_group_role = '';
    }

    if ($label)
    {
        $btn_group_label = esc_attr($label);
    }
    else
    {
        $btn_group_label = '';
    }

    if (in_array($size, array(
        'lg',
        'sm',
        'xs'
    )))
    {
        $btn_group_size = esc_attr($size);
    }
    else
    {
        $btn_group_size = '';
    }

    if ($vertical)
    {
        $btn_group_vertical = true;
    }
    else
    {
        $btn_group_vertical = false;
    }

    $output = '<div class="btn-group';
    if ($btn_group_vertical)
    {
        $output .= '-vertical';
    }
    if ($btn_group_size)
    {
        $output .= ' btn-group-' . $btn_group_size;
    }
    $output .= '"';
    if ($btn_group_data_toggle)
    {
        $output .= ' data-toggle="' . $btn_group_data_toggle . '"';
    }
    if ($btn_group_role)
    {
        $output .= ' role="' . $btn_group_role . '"';
    }
    if ($btn_group_label)
    {
        $output .= ' aria-label="' . $btn_group_label . '"';
    }
    $output .= '>' . eds_do_shortcode($content) . '</div>';

    return $output;
}

/** 
 * Button shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_btn_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'id'            => '',
        'type'          => '',
        'class'         => '',
        'size'          => '',
        'aria_label'    => '',
        'data_toggle'   => '',
        'data_target'   => '',
        'aria_controls' => '',
        'disabled'      => ''
    ) , $atts, 'ed_btn_shortcode'));

    if ($id)
    {
        $btn_id = esc_attr($id);
    }
    else
    {
        $btn_id = '';
    }

    if (in_array($type, array(
        'button',
        'submit'
    )))
    {
        $btn_type = esc_attr($type);
    }
    else
    {
        $btn_type = 'button';
    }

    if (in_array($class, array(
        'default',
        'primary',
        'success',
        'info',
        'warning',
        'danger',
        'link'
    )))
    {
        $btn_class = esc_attr($class);
    }
    else
    {
        $btn_class = 'default';
    }

    if (in_array($size, array(
        'xs',
        'sm',
        'lg'
    )))
    {
        $btn_size = esc_attr($size);
    }
    else
    {
        $btn_size = '';
    }

    if (in_array($data_toggle, array(
        'collapse',
        'button',
        'dropdown'
    )))
    {
        $btn_data_toggle = esc_attr($data_toggle);
    }
    else
    {
        $btn_data_toggle = '';
    }

    if ($data_target)
    {
        $btn_data_target = esc_attr($data_target);
    }
    else
    {
        $btn_data_target = '';
    }

    if ($aria_label)
    {
        $btn_aria_label = esc_attr($aria_label);
    }
    else
    {
        $btn_aria_label = '';
    }

    if ($aria_controls)
    {
        $btn_aria_controls = esc_attr($aria_controls);
    }
    else
    {
        $btn_aria_controls = '';
    }

    if ($disabled == 'true')
    {
        $btn_disabled = true;
    }
    else
    {
        $btn_disabled = false;
    }

    $output = '<button type="';
    if ($btn_type)
    {
        $output .= $btn_type;
    }
    $output .= '" class="btn';
    if ($btn_class)
    {
        $output .= ' btn-' . $btn_class;
    }
    if ($btn_size)
    {
        $output .= ' btn-' . $btn_size;
    }
    if ($btn_data_toggle == 'dropdown')
    {
        $output .= ' dropdown-toggle';
    }
    $output .= '"';
    if ($btn_id)
    {
        $output .= ' id="' . $btn_id . '"';
    }
    if ($btn_data_toggle)
    {
        $output .= ' data-toggle="' . $btn_data_toggle . '"';
    }
    if ($btn_data_target)
    {
        $output .= ' data-target="' . $btn_data_target . '"';
    }
    if ($btn_aria_label)
    {
        $output .= ' aria-label="' . $btn_aria_label . '"';
    }
    if ($btn_aria_controls)
    {
        $output .= ' aria-controls="' . $btn_aria_controls . '"';
    }
    if ($btn_disabled)
    {
        $output .= ' disabled';
    }
    $output .= '>';

    $output .= eds_do_shortcode($content);
    $output .= '</button>';

    return $output;
}

/** 
 * Button link shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_btn_link_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'href'          => '',
        'class'         => '',
        'size'          => '',
        'data_toggle'   => '',
        'aria_label'    => '',
        'aria_controls' => '',
        'disabled'      => ''
    ) , $atts, 'ed_btn_link_shortcode'));

    if ($href)
    {
        $btn_href = esc_attr($href);
    }
    else
    {
        $btn_href = '';
    }

    if (in_array($class, array(
        'default',
        'primary',
        'success',
        'info',
        'warning',
        'danger',
        'link'
    )))
    {
        $btn_class = esc_attr($class);
    }
    else
    {
        $btn_class = 'default';
    }

    if (in_array($size, array(
        'xs',
        'sm',
        'lg'
    )))
    {
        $btn_size = esc_attr($size);
    }
    else
    {
        $btn_size = '';
    }

    if (in_array($data_toggle, array(
        'collapse',
        'button',
        'dropdown'
    )))
    {
        $btn_data_toggle = esc_attr($data_toggle);
    }
    else
    {
        $btn_data_toggle = '';
    }

    if ($aria_label)
    {
        $btn_aria_label = esc_attr($aria_label);
    }
    else
    {
        $btn_aria_label = '';
    }

    if ($aria_controls)
    {
        $btn_aria_controls = esc_attr($aria_controls);
    }
    else
    {
        $btn_aria_controls = '';
    }

    if ($disabled == 'true')
    {
        $btn_disabled = true;
    }
    else
    {
        $btn_disabled = false;
    }

    $output = '<a href="';
    if ($btn_href && !$btn_disabled)
    {
        $output .= $btn_href;
    }
    else
    {
        $output .= '#';
    }
    $output .= '" class="btn';
    if ($btn_class)
    {
        $output .= ' btn-' . $btn_class;
    }
    if ($btn_size)
    {
        $output .= ' btn-' . $btn_size;
    }
    if ($btn_data_toggle == 'dropdown')
    {
        $output .= ' dropdown-toggle';
    }
    if ($btn_disabled)
    {
        $output .= ' disabled';
    }
    $output .= '"';
    if ($btn_data_toggle)
    {
        $output .= ' data-toggle="' . $btn_data_toggle . '"';
    }
    if ($btn_aria_label)
    {
        $output .= ' aria-label="' . $btn_aria_label . '"';
    }
    if ($btn_aria_controls)
    {
        $output .= ' aria-controls="' . $btn_aria_controls . '"';
    }
    $output .= '>';
    $output .= eds_do_shortcode($content);
    $output .= '</a>';

    return $output;
}

/** 
 * Button label shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_btn_label_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'class'     => '',
        'size'      => '',
        'active'    => ''
    ) , $atts, 'ed_btn_label_shortcode'));

    if (in_array($class, array(
        'default',
        'primary',
        'success',
        'info',
        'warning',
        'danger',
        'link'
    )))
    {
        $btn_class = esc_attr($class);
    }
    else
    {
        $btn_class = '';
    }

    if (in_array($size, array(
        'xs',
        'sm',
        'lg'
    )))
    {
        $btn_size = esc_attr($size);
    }
    else
    {
        $btn_size = '';
    }
    if ($active == 'true')
    {
        $btn_active = true;
    }
    else
    {
        $btn_active = false;
    }
    $output = '<label class="btn';
    if ($btn_class)
    {
        $output .= ' btn-' . $btn_class;
    }
    if ($btn_size)
    {
        $output .= ' btn-' . $btn_size;
    }
    if ($btn_active)
    {
        $output .= ' active';
    }
    $output .= '">';

    $output .= eds_do_shortcode($content);
    $output .= '</label>';

    return $output;
}

/** 
 * Dropdown shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_dropdown_shortcode($atts = [], $content = null)
{
    $output = '<div class="dropdown">' . eds_do_shortcode($content) . '</div>';
    return $output;
}

/** 
 * Dropdown menu shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_dropdown_menu_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'labelled_by'   => '',
        'position'      => '',
    ) , $atts, 'ed_dropdown_menu_shortcode'));

    if ($labelled_by)
    {
        $dropdown_labelled_by = esc_attr($labelled_by);
    }
    else
    {
        $dropdown_labelled_by = '';
    }

    if (in_array($position, array(
        'left',
        'right',
    )))
    {
        $dropdown_position = esc_attr($position);
    }
    else
    {
        $dropdown_position = '';
    }

    $output = '<ul class="dropdown-menu';
    if ($dropdown_position)
    {
        $output .= ' dropdown-menu-' . $dropdown_position;
    }
    $output .= '"';
    if ($dropdown_labelled_by)
    {
        $output .= ' aria-labelledby="' . $dropdown_labelled_by . '"';
    }
    $output .= '>';
    $output .= eds_do_shortcode($content);
    $output .= '</ul>';

    return $output;
}

/** 
 * Dropdown link shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_dropdown_link_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'href' => '',
        'role' => ''
    ) , $atts, 'ed_dropdown_link_shortcode'));

    if ($href)
    {
        $dropdown_link_href = esc_attr($href);
    }
    else
    {
        $dropdown_link_href = '';
    }

    if (in_array($role, array(
        'separator',
        'header'
    )))
    {
        $dropdown_link_role = esc_attr($role);
    }
    else
    {
        $dropdown_link_role = '';
    }

    $output = '<li';
    if ($dropdown_link_role)
    {
        $output .= ' class="';
        if ($dropdown_link_role == 'separator')
        {
            $output .= ' divider" role="' . $dropdown_link_role;
        }
        elseif ($dropdown_link_role == 'header')
        {
            $output .= ' dropdown-header';
        }
        $output .= '"';
    }
    $output .= '>';

    if (!$dropdown_link_role)
    {
        $output .= '<a';
        if ($dropdown_link_href)
        {
            $output .= ' href="' . $dropdown_link_href . '"';
        }
        $output .= '>';
    }

    $output .= eds_do_shortcode($content);

    if (!$dropdown_link_role)
    {
        $output .= '</a>';
    }
    $output .= '</li>';

    return $output;
}

/** 
 * Input checkbox shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_input_checkbox_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'checked' => ''
    ) , $atts, 'ed_input_checkbox_shortcode'));

    if ($checked == 'true')
    {
        $checkbox_checked = true;
    }
    else
    {
        $checkbox_checked = false;
    }
    $output = '<input type="checkbox"';
    if ($checkbox_checked)
    {
        $output .= ' checked';
    }
    $output .= '>' . eds_do_shortcode($content) . '</input>';
    return $output;
}

/** 
 * Input radio shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_input_radio_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'id' => '',
        'name' => '',
        'checked' => ''
    ) , $atts, 'ed_input_radio_shortcode'));

    if ($id)
    {
        $radio_id = esc_attr($id);
    }
    else
    {
        $radio_id = '';
    }

    if ($name)
    {
        $radio_name = esc_attr($name);
    }
    else
    {
        $radio_name = '';
    }

    if ($checked == 'true')
    {
        $radio_checked = true;
    }
    else
    {
        $radio_checked = false;
    }
    $output = '<input type="radio"';
    if ($radio_id)
    {
        $output .= ' id="' . $radio_id . '"';
    }
    if ($radio_name)
    {
        $output .= ' name="' . $radio_name . '"';
    }
    if ($radio_checked)
    {
        $output .= ' checked';
    }
    $output .= '>' . eds_do_shortcode($content) . '</input>';
    return $output;
}

/** 
 * Alert shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_alert_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'class' => '',
        'dismissible' => ''
    ) , $atts, 'ed_alert_shortcode'));

    if (in_array($class, array(
        'success',
        'info',
        'warning',
        'danger'
    )))
    {
        $alert_class = 'alert alert-' . esc_attr($class);
    }
    else
    {
        $alert_class = '';
    }

    if ($dismissible == 'true')
    {
        $alert_dismissible = true;
    }
    else
    {
        $alert_dismissible = false;
    }

    $output = '<div class="alert';
    if ($alert_class)
    {
        $output .= ' alert-' . $alert_class;
    }
    if ($alert_dismissible)
    {
        $output .= ' alert-dismissible';
    }
    $output .= '" role="alert">';
    if ($alert_dismissible)
    {
        $output .= '<button type="button" class="close" data-dismiss="alert"
      aria-label="' . __('Close', 'gaudium') . '"></button>';
    }
    $output .= eds_do_shortcode($content) . '</div>';

    return $output;
}

/** 
 * Alert link shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_alert_link_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'href' => ''
    ) , $atts, 'ed_alert_link_shortcode'));

    if ($href)
    {
        $alert_link_href = esc_attr($href);
    }
    else
    {
        $alert_link_href = '';
    }

    $output = '<a href="';
    if ($alert_link_href)
    {
        $output .= $alert_link_href;
    }
    $output .= '" class="alert-link">';
    $output .= eds_do_shortcode($content) . '</a>';

    return $output;
}

/** 
 * Page header shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_header_shortcode($atts = [], $content = null)
{
    $output = '<h2 class="page-header">' . eds_do_shortcode($content) . '</h2>';
    return $output;
}

/** 
 * Code shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_code_shortcode($atts = [], $content = null)
{
    $output = '<code>' . $content . '</code>';
    return $output;
}

/** 
 * Modal button shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_modal_btn_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'modal_id'  => '',
        'btn_label' => ''
    ) , $atts, 'ed_modal_btn_shortcode'));

    if ($modal_id)
    {
        $modal_btn_modal_id = esc_attr($modal_id);
    }
    else
    {
        $modal_btn_modal_id = '';
    }

    if ($btn_label)
    {
        $modal_btn_label = esc_attr($btn_label);
    }
    else
    {
        $modal_btn_label = '';
    }

    $output = '<button type="button" class="btn btn-default" data-toggle="modal"';

    if ($modal_btn_modal_id)
    {
        $output .= 'data-target="#' . $modal_btn_modal_id . '"';
    }
    $output .= '>';

    if ($btn_label)
    {
        $output .= $modal_btn_label;
    }

    $output .= '</button>';

    return $output;
}

/** 
 * Modal shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_modal_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'id'                => '',
        'aria_labelledby'   => '',
        'title'             => '',
        'submit'            => '',
        'size'              => '',
        'form'              => ''
    ) , $atts, 'ed_modal_shortcode'));

    if ($id)
    {
        $modal_id = esc_attr($id);
    }
    else
    {
        $modal_id = '';
    }

    if ($aria_labelledby)
    {
        $modal_aria_labelledby = esc_attr($aria_labelledby);
    }
    else
    {
        $modal_aria_labelledby = '';
    }

    if ($title)
    {
        $modal_title = esc_attr($title);
    }
    else
    {
        $modal_title = '';
    }

    if ($submit)
    {
        $modal_submit = esc_attr($submit);
    }
    else
    {
        $modal_submit = '';
    }

    if ($form)
    {
        $modal_form = esc_attr($form);
    }
    else
    {
        $modal_form = '';
    }

    if (in_array($size, array(
        'sm',
        'lg',
    )))
    {
        $modal_size = 'modal-' . esc_attr($size);
    }
    else
    {
        $modal_size = '';
    }

    $output = '<div';

    if ($modal_id)
    {
        $output .= ' id="' . $modal_id . '"';
    }

    $output .= ' class="modal fade" tabindex="-1" role="dialog"';

    if ($modal_aria_labelledby)
    {
        $output .= ' aria-labelledby="' . $modal_aria_labelledby . '"';
    }

    $output .= '>
            <div class="modal-dialog';

    if ($modal_size)
    {
        $output .= ' ' . $modal_size;
    }

    $output .= '" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>';

    if ($modal_title)
    {
        $output .= '<h4 class="modal-title"';
        if ($modal_aria_labelledby)
        {
            $output .= ' id="' . $modal_aria_labelledby . '"';
        }
        $output .= '>' . $modal_title . '</h4>';
    }

    $output .= '</div>';
    if ($modal_form)
    {
        $output .= '[form slug="' . $modal_form . '"]';
    }

    $output .= '<div class="modal-body">';
    $output .= eds_do_shortcode($content);
    $output .= '</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>';
    if ($modal_submit)
    {
        $output .= '<button type="submit" name="submit" id="submit" class="btn btn-default">' . $modal_submit . '</button>';
    }
    $output .= '</div>';
    if ($modal_form)
    {
        $output .= '[/form]';
    }
    $output .= '</div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->';

    return eds_do_shortcode($output);
}

/** 
 * Nav shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_nav_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'id'        => '',
        'type'      => '',
        'stacked'   => '',
        'justified' => ''
    ) , $atts, 'ed_nav_shortcode'));

    if ($id)
    {
        $nav_id = esc_attr($id);
    }
    else
    {
        $nav_id = '';
    }

    if (in_array($type, array(
        'pills',
        'tabs',
    )))
    {
        $nav_type = 'nav nav-' . esc_attr($type);
    }
    else
    {
        $nav_type = 'nav nav-pills';
    }

    if ($stacked == 'stacked')
    {
        $nav_stacked = 'nav-' . esc_attr($stacked);
    }
    else
    {
        $nav_stacked = '';
    }

    if ($justified == 'justified')
    {
        $nav_justified = 'nav-' . esc_attr($justified);
    }
    else
    {
        $nav_justified = '';
    }

    $output = '<ul';
    if ($nav_id)
    {
        $output .= ' id="' . $nav_id . '"';
    }

    $output .= 'class="' . $nav_type;
    if ($nav_stacked)
    {
        $output .= ' ' . $nav_stacked;
    }
    if ($nav_justified)
    {
        $output .= ' ' . $nav_justified;
    }
    $output .= '">';

    $output .= eds_do_shortcode($content);
    $output .= '</ul>';
    return $output;
}

/** 
 * Nav link shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_nav_link_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'id'            => '',
        'dropdown_id'   => '',
        'active'        => '',
        'content_link'  => '',
        'label'         => '',
        'dropdown'      => '',
        'disabled'      => ''
    ) , $atts, 'ed_nav_link_shortcode'));

    if ($id)
    {
        $pill_id = esc_attr($id);;
    }
    else
    {
        $pill_id = '';
    }

    if ($dropdown_id)
    {
        $pill_dropdown_id = esc_attr($dropdown_id);;
    }
    else
    {
        $pill_dropdown_id = '';
    }

    if ($active == 'true')
    {
        $pill_active = true;
    }
    else
    {
        $pill_active = false;
    }

    if ($content_link)
    {
        $pill_content = esc_attr($content_link);
    }
    else
    {
        $pill_content = '';
    }

    if ($label)
    {
        $pill_label = esc_attr($label);
    }
    else
    {
        $pill_label = '';
    }

    if ($dropdown == 'true')
    {
        $pill_dropdown = true;
    }
    else
    {
        $pill_dropdown = false;
    }

    if ($disabled == 'true')
    {
        $pill_disabled = 'disabled';
    }
    else
    {
        $pill_disabled = '';
    }

    $output = '<li role="presentation"';

    if ($pill_active || $pill_dropdown || $pill_disabled)
    {
        $output .= ' class="';
        if ($pill_dropdown)
        {
            $output .= 'dropdown';
        }
        if ($pill_dropdown && ($pill_active || $pill_disabled))
        {
            $output .= ' ';
        }
        if ($pill_active)
        {
            $output .= 'active';
        }
        if ($pill_active && $pill_disabled)
        {
            $output .= ' ';
        }
        if ($pill_disabled)
        {
            $output .= $pill_disabled;
        }
        $output .= '"';
    }
    $output .= '>
            <a href="#';
    if ($pill_content)
    {
        $output .= $pill_content;
    }
    $output .= '"';
    if ($pill_id)
    {
        $output .= ' id="' . $pill_id . '"';
    }
    if ($pill_dropdown)
    {
        $output .= ' class="dropdown-toggle" data-toggle="dropdown" role="button"';
    }
    $output .= ' data-toggle="tab">';
    if ($pill_dropdown || $pill_label)
    {
        $output .= $pill_label;
    }
    else
    {
        $output .= eds_do_shortcode($content);
    }

    $output .= '</a>';
    if ($pill_dropdown)
    {
        $output .= '<ul class="dropdown-menu bspace-0"';
        if ($pill_dropdown_id)
        {
            $output .= ' id="' . $pill_dropdown_id . '"';
        }
        if ($pill_id)
        {
            $output .= ' aria-labelledby="' . $pill_id . '"';
        }
        $output .= '>';
        $output .= eds_do_shortcode($content) . '</ul>';
    }
    $output .= '</li>';
    return $output;
}

/** 
 * Nav dropdown shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_nav_dropdown_link_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'content_link'  => '',
        'label'         => ''
    ) , $atts, 'ed_nav_dropdown_link_shortcode'));

    if ($content_link)
    {
        $pill_content = esc_attr($content_link);
    }
    else
    {
        $pill_content = '';
    }

    if ($label)
    {
        $pill_label = esc_attr($label);
    }
    else
    {
        $pill_label = '';
    }

    $output = '<li><a href="#';
    if ($pill_content)
    {
        $output .= $pill_content;
    }
    $output .= '" data-toggle="tab">';
    if ($pill_label)
    {
        $output .= $pill_label;
    }
    else
    {
        $output .= eds_do_shortcode($content);
    }

    $output .= '</a></li>';
    return $output;
}

/** 
 * Tab content shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_content_shortcode($atts = [], $content = null)
{

    $output = '<div class="tab-content">' . eds_do_shortcode($content) . '</div>';
    return $output;
}

/** 
 * Content pane shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_pane_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'active'        => '',
        'content_link'  => '',
        'hidden'        => ''
    ) , $atts, 'ed_pane_shortcode'));

    if ($active == 'true')
    {
        $pane_active = 'active';
    }
    else
    {
        $pane_active = '';
    }

    if ($content_link)
    {
        $pane_content = esc_attr($content_link);
    }
    else
    {
        $pane_content = '';
    }

    if ($hidden == 'true')
    {
        $pane_hidden = 'hidden';
    }
    else
    {
        $pane_hidden = '';
    }

    $output = '<div class="tab-pane';
    if ($pane_active)
    {
        $output .= ' ' . $pane_active;
    }
    if ($pane_hidden)
    {
        $output .= ' ' . $pane_hidden;
    }
    $output .= '"';
    if ($pane_content)
    {
        $output .= ' id="' . $pane_content . '">';
    }

    $output .= '<p>' . eds_do_shortcode($content) . '</p>
            </div>';
    return $output;
}

/** 
 * Collapsible content shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_collapse_content_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'id' => ''
    ) , $atts, 'ed_collapse_content_shortcode'));
    if ($id)
    {
        $collapse_id = esc_attr($id);
    }
    else
    {
        $collapse_id = '';
    }
    $output = '<div class="collapse"';
    if ($collapse_id)
    {
        $output .= ' id="collapseExample"';
    }
    $output .= '>
        <div class="well">
            <p>' . eds_do_shortcode($content) . '</p>
        </div>
    </div>';
    return $output;
}

/** 
 * Tooltip shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_tooltip_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'placement' => '',
        'title'     => '',
    ) , $atts, 'ed_tooltip_shortcode'));

    if (in_array($placement, array(
        'top',
        'bottom',
        'left',
        'right'
    )))
    {
        $tooltip_placement = esc_attr($placement);
    }
    else
    {
        $tooltip_placement = '';
    }
    if ($title)
    {
        $tooltip_title = esc_attr($title);
    }
    else
    {
        $tooltip_title = '';
    }
    $output = '<a href="#" data-toggle="tooltip"';
    if ($tooltip_placement)
    {
        $output .= ' data-placement="' . $tooltip_placement . '"';
    }
    if ($tooltip_title)
    {
        $output .= ' data-original-title="' . $tooltip_title . '"';
    }
    $output .= '>' . eds_do_shortcode($content) . '</a>';

    return $output;
}

/** 
 * Popover shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_popover_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'placement'     => '',
        'dismissible'   => '',
        'title'         => '',
        'class'         => '',
        'size'          => '',
        'label'         => ''
    ) , $atts, 'ed_popover_shortcode'));

    if (in_array($placement, array(
        'top',
        'bottom',
        'left',
        'right'
    )))
    {
        $tooltip_placement = esc_attr($placement);
    }
    else
    {
        $tooltip_placement = '';
    }

    if ($dismissible == 'true')
    {
        $tooltip_dismissible = true;
    }
    else
    {
        $tooltip_dismissible = false;
    }

    if ($title)
    {
        $tooltip_title = esc_attr($title);
    }
    else
    {
        $tooltip_title = '';
    }

    if ($label)
    {
        $tooltip_label = esc_attr($label);
    }
    else
    {
        $tooltip_label = '';
    }

    if (in_array($class, array(
        'default',
        'primary',
        'success',
        'info',
        'warning',
        'danger',
        'link'
    )))
    {
        $tooltip_class = esc_attr($class);
    }
    else
    {
        $tooltip_class = '';
    }

    if (in_array($size, array(
        'xs',
        'sm',
        'lg'
    )))
    {
        $tooltip_size = esc_attr($size);
    }
    else
    {
        $tooltip_size = '';
    }

    $output = '<a tabindex="0" role="button" data-toggle="popover"';
    if ($tooltip_placement)
    {
        $output .= ' data-placement="' . $tooltip_placement . '"';
    }
    if ($tooltip_dismissible)
    {
        $output .= ' data-trigger="focus"';
    }
    if ($tooltip_title)
    {
        $output .= ' title="' . $tooltip_title . '"';
    }
    if ($tooltip_class)
    {
        $output .= ' class="btn btn-' . $tooltip_class;
    }
    if ($tooltip_class && $tooltip_size)
    {
        $output .= ' btn-' . $tooltip_size;
    }
    $output .= '"';
    $output .= ' data-container="body" data-content="' . eds_do_shortcode($content) . '">';
    if ($tooltip_label)
    {
        $output .= $tooltip_label . '</a>';
    }
    return $output;
}

/** 
 * Panel group shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_panel_group_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'id' => ''
    ) , $atts, 'ed_panel_group_shortcode'));

    if ($id)
    {
        $panel_group_id = esc_attr($id);
    }
    else
    {
        $panel_group_id = '';
    }

    $output = '<div class="panel-group"';
    if ($panel_group_id)
    {
        $output .= ' id="' . $panel_group_id . '"';
    }
    $output .= ' role="tablist" aria-multiselectable="true">' . eds_do_shortcode($content) . '</div>';
    return $output;
}

/** 
 * Panel shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_panel_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'class'         => '',
        'heading_id'    => '',
        'content_id'    => '',
        'title'         => '',
        'parent'        => '',
        'expanded'      => '',
        'footer'        => '',
        'include'       => ''
    ) , $atts, 'ed_panel_shortcode'));

    if (in_array($class, array(
        'default',
        'primary',
        'success',
        'info',
        'warning',
        'danger',
        'link'
    )))
    {
        $panel_class = esc_attr($class);
    }
    else
    {
        $panel_class = 'default';
    }

    if (in_array($include, array(
        'table',
        'list-group'
    )))
    {
        $panel_include = esc_attr($include);
    }
    else
    {
        $panel_include = '';
    }

    if ($heading_id)
    {
        $panel_heading_id = esc_attr($heading_id);
    }
    else
    {
        $panel_heading_id = '';
    }

    if ($content_id)
    {
        $panel_content_id = esc_attr($content_id);
    }
    else
    {
        $panel_content_id = '';
    }

    if ($title)
    {
        $panel_title = esc_attr($title);
    }
    else
    {
        $panel_title = '';
    }

    if ($parent)
    {
        $panel_data_parent = esc_attr($parent);
    }
    else
    {
        $panel_data_parent = '';
    }

    if ($expanded == 'true')
    {
        $panel_aria_expanded = true;
    }
    else
    {
        $panel_aria_expanded = false;
    }

    if ($footer)
    {
        $panel_footer = esc_attr($footer);
    }
    else
    {
        $panel_footer = '';
    }

    $output = '<div class="panel';
    if ($panel_class)
    {
        $output .= ' panel-' . $panel_class;
    }
    $output .= '">';
    if ($panel_title)
    {
        $output .= '<div class="panel-heading"';
        if ($panel_data_parent)
        {
            $output .= 'role="tab"';
        }
        if ($panel_heading_id)
        {
            $output .= ' id="' . $panel_heading_id . '"';
        }
        $output .= '>
                  <h4 class="panel-title">';
        if ($panel_data_parent)
        {
            $output .= '<a role="button" data-toggle="collapse" data-parent="#' . $panel_data_parent . '"';
            if ($panel_content_id)
            {
                $output .= ' href="#' . $panel_content_id . '"';
            }
            $output .= ' aria-expanded="';
            if ($panel_aria_expanded)
            {
                $output .= 'true';
            }
            else
            {
                $output .= 'false';
            }
            $output .= '"';
            if ($panel_content_id)
            {
                $output .= ' aria-controls="' . $panel_content_id . '"';
            }
            $output .= '>';
        }
        if ($panel_title)
        {
            $output .= $panel_title;
        }
        if ($panel_data_parent)
        {
            $output .= '</a>';
        }
        $output .= '</h4>
              </div>';
    }
    if ($panel_data_parent)
    {
        $output .= '<div';
        if ($panel_content_id)
        {
            $output .= ' id="' . $panel_content_id . '"';
        }
        $output .= ' class="panel-collapse collapse';
        if ($panel_aria_expanded)
        {
            $output .= '  in';
        }
        $output .= '" role="tabpanel"';
        if ($panel_heading_id)
        {
            $output .= ' aria-labelledby="' . $panel_heading_id . '"';
        }
        $output .= '>';
    }

    if ($panel_include == 'list-group')
    {
        $output .= '<ul class="list-group">' . eds_do_shortcode($content) . '</ul>';
    }
    elseif ($panel_include == 'table')
    {
        $output .= eds_do_shortcode($content);
    }
    else
    {
        $output .= '<div class="panel-body">' . eds_do_shortcode($content) . '</div>';
    }
    if ($panel_footer)
    {
        $output .= '<div class="panel-footer">' . $panel_footer . '</div>';
    }

    if ($panel_data_parent)
    {
        $output .= '</div>';
    }
    $output .= '</div>';
    return $output;
}

/** 
 * Panel body shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_panel_body_shortcode($atts = [], $content = null)
{

    $output = '<div class="panel-body">' . eds_do_shortcode($content) . '</div>';
    return $output;
}

/**
 * Get posts of specified post type
 * @param $post_type Post type.
 * @param $number_posts Number of posts.
 * @return $post_ids Array of post ids.
 */
function ed_get_posts($post_type, $number_posts)
{
    $args = array(
        'fields' => 'ids',
        'numberposts' => intval($number_posts) ,
        'post_type' => $post_type
    );
    $post_ids = get_posts($args);
    return $post_ids;
}

/** 
 * Carousel shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_carousel_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'id'            => '',
        'post_type'     => '',
        'number_posts'  => '',
    ) , $atts, 'ed_carousel_shortcode'));

    if ($id)
    {
        $carousel_id = esc_attr($id);
    }
    else
    {
        $carousel_id = '';
    }

    if (in_array($post_type, array(
        'post',
        'portfolio'
    )))
    {
        $carousel_post_type = esc_attr($post_type);
    }
    else
    {
        $carousel_post_type = 'post';
    }

    if ($number_posts)
    {
        $carousel_number_posts = intval(esc_attr($number_posts));
    }
    else
    {
        $carousel_number_posts = 3;
    }

    $post_ids = ed_get_posts($carousel_post_type, $carousel_number_posts);

    $output = '<div';
    if ($carousel_id)
    {
        $output .= ' id="' . $carousel_id . '"';
    }
    $output .= ' class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">';
    foreach ($post_ids as $key => $post_id)
    {
        $output .= '<li';
        if ($carousel_id)
        {
            $output .= ' data-target="#' . $carousel_id . '"';
        }
        $output .= ' data-slide-to="' . $key . '"';
        if ($key == 0)
        {
            $output .= ' class="active"';
        }
        $output .= '></li>';
    }
    $output .= '</ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">';
    foreach ($post_ids as $key => $post_id)
    {
        $output .= '<div class="item';
        if ($key == 0)
        {
            $output .= ' active';
        }
        if (has_post_thumbnail($post_id))
        {
            $output .= ' styles autothumb landscape';
            if (get_post_meta($post_id, '_featured_image_bg_size_key', true))
            {
                $output .= ' img-' . get_post_meta($post_id, '_featured_image_bg_size_key', true);
            }
            $output .= '" style="background-image: url(' . get_the_post_thumbnail_url($post_id) . ');';
            if (get_post_meta($post_id, '_featured_image_bg_color_key', true) != 'select')
            {
                $output .= ' background-color: ' . get_post_meta($post_id, '_featured_image_bg_color_key', true) . ';';
            }
            $output .= '">';
        }
        $output .= '<div class="carousel-caption bspace-1">
                      ' . get_the_title($post_id) . '<a class="btn btn-primary btn-xs hspace-l-xs" href="' . get_permalink($post_id) . '">More</a>
                    </div>
                </div>';
    }
    $output .= '</div>
              <!-- Controls -->
              <a class="left carousel-control"';
    if ($carousel_id)
    {
        $output .= ' href="#' . $carousel_id . '"';
    }
    $output .= ' role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">' . __('Previous', 'gaudium') . '</span>
                </a>
                <a class="right carousel-control"';
    if ($carousel_id)
    {
        $output .= ' href="#' . $carousel_id . '"';
    }
    $output .= 'role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">' . __('Next', 'gaudium') . '</span>
                </a>
            </div>';
    return $output;
}

/** 
 * Input group shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_input_group_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'size'  => '',
        'width' => ''
    ) , $atts, 'ed_input_group_shortcode'));

    if (in_array($size, array(
        'lg',
        'sm',
        'xs',
    )))
    {
        $input_group_size = esc_attr($size);
    }
    else
    {
        $input_group_size = '';
    }

    if (in_array($width, array(
        '1',
        '2',
        '3',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9',
        '10',
        '11',
        '12'
    )))
    {
        $input_group_width = esc_attr($width);
    }
    else
    {
        $input_group_width = '';
    }

    $output = '';
    if ($input_group_width)
    {
        $output .= '<div class="col-sm-' . $input_group_width . '">';
    }

    $output .= '<div class="input-group';
    if ($input_group_size)
    {
        $output .= ' input-group-' . $input_group_size;
    }
    $output .= '">' . eds_do_shortcode($content) . '</div>';

    if ($input_group_width)
    {
        $output .= '</div>';
    }

    return $output;
}

/** 
 * Label shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_label_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'for'   => '',
        'sr'    => '',
        'width' => ''
    ) , $atts, 'ed_label_shortcode'));

    if ($for)
    {
        $label_for = esc_attr($for);
    }
    else
    {
        $label_for = '';
    }

    if ($sr == 'true')
    {
        $label_sr = true;
    }
    else
    {
        $label_sr = false;
    }

    if ($width)
    {
        $label_width = esc_attr($width);
    }
    else
    {
        $label_width = '';
    }

    $output = '<label class="';
    if ($label_sr)
    {
        $output .= 'sr-only';
    }
    else
    {
        $output .= 'control-label';
    }
    if ($label_width)
    {
        $output .= ' col-sm-' . $label_width;
    }
    $output .= '"';
    if ($label_for)
    {
        $output .= ' for="' . $label_for . '"';
    }
    $output .= '>';
    $output .= eds_do_shortcode($content);
    $output .= '</label>';

    return $output;
}

/** 
 * Input shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @param $type (default: null) Input type. 
 * @return $output Shortcode html. 
 */
function ed_input_shortcode($atts = [], $content = null, $type = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'id'            => '',
        'name'          => '',
        'value'         => '',
        'placeholder'   => '',
        'described_by'  => '',
        'label'         => '',
        'static'        => '',
        'disabled'      => '',
        'readonly'      => '',
        'width'         => '',
        'size'          => ''
    ) , $atts, 'ed_input_shortcode'));

    if ($id)
    {
        $input_id = esc_attr($id);
    }
    else
    {
        $input_id = '';
    }

    if ($name)
    {
        $input_name = esc_attr($name);
    }
    else
    {
        $input_name = '';
    }

    if ($value)
    {
        $input_value = esc_attr($value);
    }
    else
    {
        $input_value = '';
    }

    if ($placeholder)
    {
        $input_placeholder = esc_attr($placeholder);
    }
    else
    {
        $input_placeholder = '';
    }

    if ($described_by)
    {
        $input_described_by = esc_attr($described_by);
    }
    else
    {
        $input_described_by = '';
    }

    if ($label)
    {
        $input_aria_label = esc_attr($label);
    }
    else
    {
        $input_aria_label = '';
    }

    if ($static)
    {
        $input_static = true;
    }
    else
    {
        $input_static = false;
    }

    if ($disabled)
    {
        $input_disabled = true;
    }
    else
    {
        $input_disabled = false;
    }

    if ($readonly == 'true')
    {
        $input_readonly = true;
    }
    else
    {
        $input_readonly = false;
    }

    if ($type)
    {
        $input_type = esc_attr($type);
    }
    else
    {
        $input_type = '';
    }

    if (in_array($width, array(
        '1',
        '2',
        '3',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9',
        '10',
        '11',
        '12'
    )))
    {
        $input_width = esc_attr($width);
    }
    else
    {
        $input_width = '';
    }

    if (in_array($size, array(
        'sm',
        'lg'
    )))
    {
        $input_size = esc_attr($size);
    }
    else
    {
        $input_size = '';
    }

    $output = '';

    if ($input_width)
    {
        $output .= '<div class="col-sm-' . $input_width . '">';
    }
    if ($input_static && $input_value)
    {
        $output .= '<p class="form-control-static">' . $input_value . '</p>';
    }
    else
    {
        $output .= '<input class="form-control';
        if ($input_size)
        {
            $output .= ' input-' . $input_size;
        }
        $output .= '"';
        if ($input_id)
        {
            $output .= ' id="' . $input_id . '"';
        }
        if ($input_name)
        {
            $output .= ' name="' . $input_name . '"';
        }
        if ($input_type)
        {
            $output .= ' type="' . $input_type . '"';
        }
        if ($input_value)
        {
            $output .= ' value="' . $input_value . '"';
        }
        if ($input_placeholder)
        {
            $output .= ' placeholder="' . $input_placeholder . '"';
        }
        if ($input_described_by)
        {
            $output .= ' aria-describedby="' . $input_described_by . '"';
        }
        if ($input_aria_label)
        {
            $output .= ' aria-label="' . $input_aria_label . '"';
        }
        if ($input_disabled)
        {
            $output .= ' disabled';
        }
        if ($input_readonly)
        {
            $output .= ' readonly';
        }
        $output .= '>';
    }
    if ($input_width)
    {
        $output .= '</div>';
    }
    return $output;
}

/** 
 * Text input field shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_text_shortcode($atts = [], $content = null)
{
    return ed_input_shortcode($atts, $content, 'text');
}

/** 
 * Date input field shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_date_shortcode($atts = [], $content = null)
{
    return ed_input_shortcode($atts, $content, 'date');
}

/** 
 * Month input field shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_month_shortcode($atts = [], $content = null)
{
    return ed_input_shortcode($atts, $content, 'month');
}

/** 
 * Week input field shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_week_shortcode($atts = [], $content = null)
{
    return ed_input_shortcode($atts, $content, 'week');
}

/** 
 * Time input field shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_time_shortcode($atts = [], $content = null)
{
    return ed_input_shortcode($atts, $content, 'time');
}

/** 
 * Password input field shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_password_shortcode($atts = [], $content = null)
{
    return ed_input_shortcode($atts, $content, 'password');
}

/** 
 * Datetime input field shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_datetime_shortcode($atts = [], $content = null)
{
    return ed_input_shortcode($atts, $content, 'datetime-local');
}

/** 
 * Number input field shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_number_shortcode($atts = [], $content = null)
{
    return ed_input_shortcode($atts, $content, 'number');
}

/** 
 * Email input field shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_email_field_shortcode($atts = [], $content = null)
{
    return ed_input_shortcode($atts, $content, 'email');
}

/** 
 * URL input field shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_url_shortcode($atts = [], $content = null)
{
    return ed_input_shortcode($atts, $content, 'url');
}

/** 
 * Colour picker input field shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_color_shortcode($atts = [], $content = null)
{
    return ed_input_shortcode($atts, $content, 'color');
}

/** 
 * Telephone input field shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_tel_shortcode($atts = [], $content = null)
{
    return ed_input_shortcode($atts, $content, 'tel');
}

/** 
 * Textarea input field shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_textarea_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'id'            => '',
        'name'          => '',
        'value'         => '',
        'placeholder'   => '',
        'described_by'  => '',
        'label'         => '',
        'static'        => '',
        'disabled'      => '',
        'readonly'      => '',
        'width'         => '',
        'size'          => ''
    ) , $atts, 'ed_textarea_shortcode'));

    if ($id)
    {
        $textarea_id = esc_attr($id);
    }
    else
    {
        $textarea_id = '';
    }

    if ($name)
    {
        $textarea_name = esc_attr($name);
    }
    else
    {
        $textarea_name = '';
    }

    if ($value)
    {
        $textarea_value = esc_attr($value);
    }
    else
    {
        $textarea_value = '';
    }

    if ($placeholder)
    {
        $textarea_placeholder = esc_attr($placeholder);
    }
    else
    {
        $textarea_placeholder = '';
    }

    if ($described_by)
    {
        $textarea_described_by = esc_attr($described_by);
    }
    else
    {
        $textarea_described_by = '';
    }

    if ($label)
    {
        $textarea_aria_label = esc_attr($label);
    }
    else
    {
        $textarea_aria_label = '';
    }

    if ($static == 'true')
    {
        $textarea_static = true;
    }
    else
    {
        $textarea_static = false;
    }

    if ($disabled == 'true')
    {
        $textarea_disabled = true;
    }
    else
    {
        $textarea_disabled = false;
    }
    if ($readonly == 'true')
    {
        $textarea_readonly = true;
    }
    else
    {
        $textarea_readonly = false;
    }

    if (in_array($width, array(
        '1',
        '2',
        '3',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9',
        '10',
        '11',
        '12'
    )))
    {
        $textarea_width = esc_attr($width);
    }
    else
    {
        $textarea_width = '';
    }

    if (in_array($size, array(
        'sm',
        'lg'
    )))
    {
        $textarea_size = esc_attr($size);
    }
    else
    {
        $textarea_size = '';
    }

    $output = '';
    if ($textarea_width)
    {
        $output .= '<div class="col-sm-' . $textarea_width . '">';
    }
    if ($textarea_static && $textarea_value)
    {
        $output .= '<p class="form-control-static">' . $textarea_value . '</p>';
    }
    else
    {
        $output .= '<textarea class="form-control';
        if ($textarea_size)
        {
            $output .= ' input-' . $textarea_size;
        }
        $output .= '"';
        if ($textarea_id)
        {
            $output .= ' id="' . $textarea_id . '"';
        }
        if ($textarea_name)
        {
            $output .= ' name="' . $textarea_name . '"';
        }
        if ($textarea_value)
        {
            $output .= ' value="' . $textarea_value . '"';
        }
        if ($textarea_placeholder)
        {
            $output .= ' placeholder="' . $textarea_placeholder . '"';
        }
        if ($textarea_described_by)
        {
            $output .= ' aria-describedby="' . $textarea_described_by . '"';
        }
        if ($textarea_aria_label)
        {
            $output .= ' aria-label="' . $textarea_aria_label . '"';
        }
        if ($textarea_disabled)
        {
            $output .= ' disabled';
        }
        if ($textarea_readonly)
        {
            $output .= ' readonly';
        }
        $output .= '></textarea>';
    }
    if ($textarea_width)
    {
        $output .= '</div>';
    }
    return $output;
}

/** 
 * Search form shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_searchform_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'id'        => '',
        'inline'    => ''
    ) , $atts, 'ed_searchform_shortcode'));

    if ($id)
    {
        $searchform_id = esc_attr($id);
    }
    else
    {
        $searchform_id = '';
    }

    if ($inline == 'true')
    {
        $searchform_inline = true;
    }
    else
    {
        $searchform_inline = false;
    }

    $output = '<form';
    if ($searchform_inline)
    {
        $output .= ' class="form-inline"';
    }
    if ($searchform_id)
    {
        $output .= ' id="' . $searchform_id . '"';
    }
    $output .= ' method="get" action="' . home_url('/') . '">' . eds_do_shortcode($content) . '</form>';
    return $output;
}

/** 
 * Search field shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_search_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'id'            => '',
        'placeholder'   => '',
        'described_by'  => '',
        'label'         => '',
        'width'         => '',
        'size'          => ''
    ) , $atts, 'ed_search_shortcode'));

    if ($id)
    {
        $search_id = esc_attr($id);
    }
    else
    {
        $search_id = '';
    }

    if ($placeholder)
    {
        $search_placeholder = esc_attr($placeholder);
    }
    else
    {
        $search_placeholder = '';
    }

    if ($described_by)
    {
        $search_described_by = esc_attr($described_by);
    }
    else
    {
        $search_described_by = '';
    }

    if ($label)
    {
        $search_aria_label = esc_attr($label);
    }
    else
    {
        $search_aria_label = '';
    }

    if (in_array($width, array(
        '1',
        '2',
        '3',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9',
        '10',
        '11',
        '12'
    )))
    {
        $search_width = esc_attr($width);
    }
    else
    {
        $search_width = '';
    }

    if (in_array($size, array(
        'sm',
        'lg'
    )))
    {
        $search_size = esc_attr($size);
    }
    else
    {
        $search_size = '';
    }

    $output = '';
    if ($search_width)
    {
        $output .= '<div class="col-sm-' . $search_width . '">';
    }
    $output .= '<input class="form-control';
    if ($search_size)
    {
        $output .= ' input-' . $search_size;
    }
    $output .= '" name="s" value="' . the_search_query() . '"';
    if ($search_id)
    {
        $output .= ' id="' . $search_id . '"';
    }
    $output .= ' type="search"';

    if ($search_placeholder)
    {
        $output .= ' placeholder="' . $search_placeholder . '"';
    }
    if ($search_described_by)
    {
        $output .= ' aria-describedby="' . $search_described_by . '"';
    }
    if ($search_aria_label)
    {
        $output .= ' aria-label="' . $search_aria_label . '"';
    }
    $output .= '>';
    if ($search_width)
    {
        $output .= '</div>';
    }
    return $output;
}

/** 
 * Checkbox label shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_checkbox_label_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'id'            => '',
        'name'          => '',
        'value'         => '',
        'described_by'  => '',
        'label'         => '',
        'checked'       => '',
        'disabled'      => '',
        'readonly'      => '',
        'inline'        => '',
        'width'         => ''
    ) , $atts, 'ed_checkbox_label_shortcode'));

    if ($id)
    {
        $checkbox_id = esc_attr($id);
    }
    else
    {
        $checkbox_id = '';
    }

    if ($name)
    {
        $checkbox_name = esc_attr($name);
    }
    else
    {
        $checkbox_name = '';
    }

    if ($value)
    {
        $checkbox_value = esc_attr($value);
    }
    else
    {
        $checkbox_value = '';
    }

    if ($described_by)
    {
        $checkbox_described_by = esc_attr($described_by);
    }
    else
    {
        $checkbox_described_by = '';
    }

    if ($label)
    {
        $checkbox_aria_label = esc_attr($label);
    }
    else
    {
        $checkbox_aria_label = '';
    }

    if ($checked == 'true')
    {
        $checkbox_checked = true;
    }
    else
    {
        $checkbox_checked = false;
    }

    if ($disabled == 'true')
    {
        $checkbox_disabled = true;
    }
    else
    {
        $checkbox_disabled = false;
    }

    if ($readonly == 'true')
    {
        $checkbox_readonly = true;
    }
    else
    {
        $checkbox_readonly = false;
    }

    if ($inline == 'true')
    {
        $checkbox_inline = true;
    }
    else
    {
        $checkbox_inline = false;
    }

    if (in_array($width, array(
        '1',
        '2',
        '3',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9',
        '10',
        '11',
        '12'
    )))
    {
        $checkbox_width = esc_attr($width);
    }
    else
    {
        $checkbox_width = '';
    }

    $output = '';
    if ($checkbox_width)
    {
        $output .= '<div class="col-sm-' . $checkbox_width . '">';
    }

    $output .= '<div class="checkbox';
    if ($checkbox_inline)
    {
        $output .= '-inline';
    }
    if ($checkbox_disabled)
    {
        $output .= ' disabled';
    }
    $output .= '"><label><input';
    if ($checkbox_id)
    {
        $output .= ' id="' . $checkbox_id . '"';
    }
    if ($checkbox_name)
    {
        $output .= ' name="' . $checkbox_name . '"';
    }
    $output .= ' type="checkbox"';
    if ($checkbox_value)
    {
        $output .= ' value="' . $checkbox_value . '"';
    }
    if ($checkbox_described_by)
    {
        $output .= ' aria-describedby="' . $checkbox_described_by . '"';
    }
    if ($checkbox_aria_label)
    {
        $output .= ' aria-label="' . $checkbox_aria_label . '"';
    }
    if ($checkbox_disabled)
    {
        $output .= ' disabled="disabled"';
    }
    if ($checkbox_readonly)
    {
        $output .= ' readonly';
    }
    $output .= '>' . eds_do_shortcode($content) . '</label></div>';
    if ($checkbox_width)
    {
        $output .= '</div>';
    }
    return $output;
}

/** 
 * Radio label shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_radio_label_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'id'            => '',
        'name'          => '',
        'value'         => '',
        'described_by'  => '',
        'label'         => '',
        'checked'       => '',
        'disabled'      => '',
        'readonly'      => '',
        'width'         => '',
        'inline'        => ''
    ) , $atts, 'ed_radio_label_shortcode'));

    if ($id)
    {
        $radio_id = esc_attr($id);
    }
    else
    {
        $radio_id = '';
    }

    if ($name)
    {
        $radio_name = esc_attr($name);
    }
    else
    {
        $radio_name = '';
    }

    if ($value)
    {
        $radio_value = esc_attr($value);
    }
    else
    {
        $radio_value = '';
    }

    if ($described_by)
    {
        $radio_described_by = esc_attr($described_by);
    }
    else
    {
        $radio_described_by = '';
    }

    if ($label)
    {
        $radio_aria_label = esc_attr($label);
    }
    else
    {
        $radio_aria_label = '';
    }

    if ($checked == 'true')
    {
        $radio_checked = true;
    }
    else
    {
        $radio_checked = false;
    }

    if ($readonly == 'true')
    {
        $radio_readonly = true;
    }
    else
    {
        $radio_readonly = false;
    }

    if (in_array($width, array(
        '1',
        '2',
        '3',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9',
        '10',
        '11',
        '12'
    )))
    {
        $radio_width = esc_attr($width);
    }
    else
    {
        $radio_width = '';
    }

    if ($disabled == 'true')
    {
        $radio_disabled = true;
    }
    else
    {
        $radio_disabled = false;
    }

    if ($inline == 'true')
    {
        $radio_inline = true;
    }
    else
    {
        $radio_inline = false;
    }

    $output = '';
    if ($radio_width)
    {
        $output .= '<div class="col-sm-' . $radio_width . '">';
    }
    $output .= '<div class="radio';
    if ($radio_inline)
    {
        $output .= '-inline';
    }
    if ($radio_disabled)
    {
        $output .= ' disabled';
    }
    $output .= '"><label><input';
    if ($radio_id)
    {
        $output .= ' id="' . $radio_id . '"';
    }
    if ($radio_name)
    {
        $output .= ' name="' . $radio_name . '"';
    }
    $output .= ' type="radio"';
    if ($radio_value)
    {
        $output .= ' value="' . $radio_value . '"';
    }
    if ($radio_described_by)
    {
        $output .= ' aria-describedby="' . $radio_described_by . '"';
    }
    if ($radio_aria_label)
    {
        $output .= ' aria-label="' . $radio_aria_label . '"';
    }
    if ($radio_disabled)
    {
        $output .= ' disabled="disabled"';
    }
    if ($radio_readonly)
    {
        $output .= ' readonly';
    }
    $output .= '>' . eds_do_shortcode($content) . '</label></div>';
    if ($radio_width)
    {
        $output .= '</div>';
    }
    return $output;
}

/** 
 * Checkbox shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_checkbox_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'id'            => '',
        'name'          => '',
        'value'         => '',
        'described_by'  => '',
        'label'         => '',
        'checked'       => '',
        'width'         => ''
    ) , $atts, 'ed_checkbox_shortcode'));

    if ($id)
    {
        $checkbox_id = esc_attr($id);
    }
    else
    {
        $checkbox_id = '';
    }

    if ($name)
    {
        $checkbox_name = esc_attr($name);
    }
    else
    {
        $checkbox_name = '';
    }

    if ($value)
    {
        $checkbox_value = esc_attr($value);
    }
    else
    {
        $checkbox_value = '';
    }

    if ($described_by)
    {
        $checkbox_described_by = esc_attr($described_by);
    }
    else
    {
        $checkbox_described_by = '';
    }

    if ($label)
    {
        $checkbox_aria_label = esc_attr($label);
    }
    else
    {
        $checkbox_aria_label = '';
    }

    if ($checked == 'true')
    {
        $checkbox_checked = true;
    }
    else
    {
        $checkbox_checked = false;
    }

    if (in_array($width, array(
        '1',
        '2',
        '3',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9',
        '10',
        '11',
        '12'
    )))
    {
        $checkbox_width = esc_attr($width);
    }
    else
    {
        $checkbox_width = '';
    }

    $output = '';
    if ($checkbox_width)
    {
        $output .= '<div class="col-sm-' . $checkbox_width . '">';
    }
    $output = '<input';
    if ($checkbox_id)
    {
        $output .= ' id="' . $checkbox_id . '"';
    }
    if ($checkbox_name)
    {
        $output .= ' name="' . $checkbox_name . '"';
    }
    $output .= ' type="checkbox"';
    if ($checkbox_value)
    {
        $output .= ' value="' . $checkbox_value . '"';
    }
    if ($checkbox_described_by)
    {
        $output .= ' aria-describedby="' . $checkbox_described_by . '"';
    }
    if ($checkbox_aria_label)
    {
        $output .= ' aria-label="' . $checkbox_aria_label . '"';
    }

    $output .= '>';
    if ($checkbox_width)
    {
        $output .= '</div>';
    }
    return $output;
}

/** 
 * Radio shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_radio_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'id'            => '',
        'name'          => '',
        'value'         => '',
        'described_by'  => '',
        'label'         => '',
        'width'         => ''
    ) , $atts, 'ed_radio_shortcode'));

    if ($id)
    {
        $radio_id = esc_attr($id);
    }
    else
    {
        $radio_id = '';
    }

    if ($name)
    {
        $radio_name = esc_attr($name);
    }
    else
    {
        $radio_name = '';
    }

    if ($value)
    {
        $radio_value = esc_attr($value);
    }
    else
    {
        $radio_value = '';
    }

    if ($described_by)
    {
        $radio_described_by = esc_attr($described_by);
    }
    else
    {
        $radio_described_by = '';
    }

    if ($label)
    {
        $radio_aria_label = esc_attr($label);
    }
    else
    {
        $radio_aria_label = '';
    }

    if (in_array($width, array(
        '1',
        '2',
        '3',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9',
        '10',
        '11',
        '12'
    )))
    {
        $radio_width = esc_attr($width);
    }
    else
    {
        $radio_width = '';
    }
    $output = '';
    if ($radio_width)
    {
        $output .= '<div class="col-sm-' . $radio_width . '">';
    }
    $output .= '<input';
    if ($radio_id)
    {
        $output .= ' id="' . $radio_id . '"';
    }
    if ($radio_name)
    {
        $output .= ' name="' . $radio_name . '"';
    }
    $output .= ' type="radio"';
    if ($radio_value)
    {
        $output .= ' value="' . $radio_value . '"';
    }
    if ($radio_described_by)
    {
        $output .= ' aria-describedby="' . $radio_described_by . '"';
    }
    if ($radio_aria_label)
    {
        $output .= ' aria-label="' . $radio_aria_label . '"';
    }

    $output .= '>';
    if ($radio_width)
    {
        $output .= '</div>';
    }
    return $output;
}

/** 
 * Select field shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_select_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'id'        => '',
        'name'      => '',
        'options'   => '',
        'multiple'  => '',
        'width'     => '',
        'value'     => '',
        'static'    => '',
        'disabled'  => '',
        'size'      => ''
    ) , $atts, 'ed_select_shortcode'));

    if($id) {
        $select_id = esc_attr($id);
    }
    else
    {
        $select_id = '';
    }

    if($name) {
        $select_name = esc_attr($name);
    }
    else
    {
        $select_name = '';
    }

    if ($options)
    {
        $select_options = explode('|', esc_attr($options));
        foreach ($select_options as $k => $v)
        {
            $select_options[$k] = explode(',', $v);
        }
    }
    else
    {
        $select_options = '';
    }

    if (in_array($width, array(
        '1',
        '2',
        '3',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9',
        '10',
        '11',
        '12'
    )))
    {
        $select_width = esc_attr($width);
    }
    else
    {
        $select_width = '';
    }

    if (in_array($size, array(
        'sm',
        'lg'
    )))
    {
        $select_size = esc_attr($size);
    }
    else
    {
        $select_size = '';
    }

    if ($value)
    {
        $select_value = esc_attr($value);
    }
    else
    {
        $select_value = '';
    }

    if ($multiple == 'true')
    {
        $select_multiple = true;
    }
    else
    {
        $select_multiple = false;
    }

    if ($disabled == 'true')
    {
        $select_disabled = true;
    }
    else
    {
        $select_disabled = false;
    }

    if ($static == 'true')
    {
        $select_static = true;
    }
    else
    {
        $select_static = false;
    }

    $output = '';
    if ($select_width)
    {
        $output .= '<div class="col-sm-' . $select_width . '">';
    }
    if ($select_static && $select_value && $select_options)
    {
        foreach ($select_options as $k => $v)
        {
            if ($select_options[$k][0] == $select_value)
            {
                $output .= '<p class="form-control-static">' . $select_options[$k][1] . '</p>';
            }
        }
    }
    else
    {
        $output .= '<select';
        if($select_id)
        {
            $output .= ' id="' . $select_id . '"';
        }
        if($select_name)
        {
            $output .= ' name="' . $select_name . '"';
        }
        $output .= ' class="form-control';
        if ($select_size)
        {
            $output .= ' input-' . $select_size;
        }
        $output .= '"';
        if ($select_multiple)
        {
            $output .= ' multiple';
        }
        if ($select_disabled)
        {
            $output .= ' disabled';
        }
        $output .= '>';
        if ($select_options)
        {
            foreach ($select_options as $k => $v)
            {
                $output .= '<option value="' . $select_options[$k][0] . '"';
                if ($select_options[$k][0] == $select_value)
                {
                    $output .= ' selected';
                }
                $output .= '>' . $select_options[$k][1] . '</option>';
            }
        }
        $output .= '</select>';
    }
    if ($select_width)
    {
        $output .= '</div>';
    }
    return $output;
}

/** 
 * Input addon shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_addon_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'id' => ''
    ) , $atts, 'ed_addon_shortcode'));

    if ($id)
    {
        $addon_id = esc_attr($id);
    }
    else
    {
        $addon_id = '';
    }

    $output = '<span class="input-group-addon"';
    if ($addon_id)
    {
        $output .= ' id="' . $addon_id . '"';
    }
    $output .= '>' . eds_do_shortcode($content) . '</span>';

    return $output;
}

/** 
 * Input group button shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_input_group_btn_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'id'        => '',
        'container' => '',
    ) , $atts, 'ed_input_group_btn_shortcode'));

    if ($id)
    {
        $input_group_btn_id = esc_attr($id);
    }
    else
    {
        $input_group_btn_id = '';
    }

    if (in_array($container, array(
        'div',
        'span'
    )))
    {
        $input_group_btn_container = esc_attr($container);
    }
    else
    {
        $input_group_btn_container = '';
    }
    $output = '<';
    if ($input_group_btn_container == 'div')
    {
        $output .= 'div';
    }
    else
    {
        $output .= 'span';
    }
    $output .= ' class="input-group-btn"';
    if ($input_group_btn_id)
    {
        $output .= ' id="' . $input_group_btn_id . '"';
    }
    $output .= '>' . eds_do_shortcode($content);
    if ($input_group_btn_container == 'div')
    {
        $output .= '</div>';
    }
    else
    {
        $output .= '</span>';
    }

    return $output;
}

/** 
 * Form group shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_form_group_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'size' => ''
    ) , $atts, 'ed_form_group_shortcode'));

    if (in_array($size, array(
        'sm',
        'lg'
    )))
    {
        $formgroup_size = esc_attr($size);
    }
    else
    {
        $formgroup_size = '';
    }

    $output = '<div class="form-group';
    if ($formgroup_size)
    {
        $output .= ' form-group-' . $formgroup_size;
    }
    $output .= '">' . eds_do_shortcode($content) . '</div>';

    return $output;
}

/** 
 * Input field help block shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_help_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'id' => '',
    ) , $atts, 'ed_help_shortcode'));

    if ($id)
    {
        $help_id = esc_attr($id);
    }
    else
    {
        $help_id = '';
    }

    $output = '<span class="help-block"';
    if ($help_id)
    {
        $output .= ' id="' . $help_id . '"';
    }
    $output .= '>' . eds_do_shortcode($content) . '</span>';
    return $output;
}

/** 
 * Message field shortcode (required)
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_message_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'id'            => '',
        'placeholder'   => '',
        'width'         => '',
        'static'        => '',
        'size'          => ''
    ) , $atts, 'ed_message_shortcode'));

    if ($id)
    {
        $message_id = esc_attr($id);
    }
    else
    {
        $message_id = '';
    }

    if ($placeholder)
    {
        $message_placeholder = esc_attr($placeholder);
    }
    else
    {
        $message_placeholder = '';
    }

    if (in_array($width, array(
        '1',
        '2',
        '3',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9',
        '10',
        '11',
        '12'
    )))
    {
        $message_width = esc_attr($width);
    }
    else
    {
        $message_width = '';
    }

    if (in_array($size, array(
        'sm',
        'lg'
    )))
    {
        $message_size = esc_attr($size);
    }
    else
    {
        $message_size = '';
    }

    $output = '';
    if ($message_width)
    {
        $output .= '<div class="col-sm-' . $message_width . '">';
    }
    $output .= '<textarea ';
    if ($message_id)
    {
        $output .= ' id="' . $message_id . '"';
    }
    $output .= ' name="comment" class="form-control';
    if ($message_size)
    {
        $output .= ' input-' . $message_size;
    }
    $output .= '" aria-required="true" rows="3"';
    if ($message_placeholder)
    {
        $output .= ' placeholder="' . $message_placeholder . '"';
    }
    $output .= ' required="required"></textarea>';
    if ($message_width)
    {
        $output .= '</div>';
    }

    return $output;
}

/** 
 * Input button shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_input_btn_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'id'        => '',
        'name'      => '',
        'class'     => '',
        'value'     => '',
        'position'  => '',
        'push'      => '',
        'disabled'  => ''
    ) , $atts, 'ed_input_btn_shortcode'));

    if ($id)
    {
        $input_btn_id = esc_attr($id);
    }
    else
    {
        $input_btn_id = '';
    }

    if ($name)
    {
        $input_btn_name = esc_attr($name);
    }
    else
    {
        $input_btn_name = '';
    }

    if (in_array($class, array(
        'default',
        'primary',
        'success',
        'info',
        'warning',
        'danger',
        'link'
    )))
    {
        $input_btn_class = esc_attr($class);
    }
    else
    {
        $input_btn_class = 'default';
    }

    if ($value)
    {
        $input_btn_value = esc_attr($value);
    }
    else
    {
        $input_btn_value = '';
    }

    if (in_array($position, array(
        'left',
        'right',
    )))
    {
        $input_btn_position = esc_attr($position);
    }
    else
    {
        $input_btn_position = '';
    }

    if ($push)
    {
        $input_btn_push = esc_attr($push);
        $input_btn_width = 12 - $input_btn_push;
    }
    else
    {
        $input_btn_push = '';
    }

    if ($disabled == 'true')
    {
        $input_btn_disabled = true;
    }
    else
    {
        $input_btn_disabled = false;
    }

    $output = '';
    if ($input_btn_push)
    {
        $output .= '<div class="row"><div class="col-sm-' . $input_btn_width . ' col-sm-push-' . $input_btn_push . '">';
    }
    $output .= '<input';
    if ($input_btn_id)
    {
        $output .= ' id="' . $input_btn_id . '"';
    }
    $output .= ' name="';
    if ($input_btn_name)
    {
        $output .= $input_btn_name;
    }
    $output .= '" type="button"';
    if ($input_btn_class || $input_btn_position)
    {
        $output .= ' class="';
        if ($input_btn_class)
        {
            $output .= ' btn btn-' . $input_btn_class;
        }
        if ($input_btn_position)
        {
            $output .= ' pull-' . $input_btn_position;
        }
        $output .= '"';
    }
    $output .= 'value="';
    if ($input_btn_value)
    {
        $output .= esc_attr($input_btn_value);
    }
    else
    {
        $output .= 'Submit';
    }
    $output .= '"';
    if ($input_btn_disabled)
    {
        $output .= ' disabled';
    }
    $output .= '>';
    if ($input_btn_push)
    {
        $output .= '</div></div>';
    }
    return $output;
}

/** 
 * Submit button shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_submit_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'id'        => '',
        'class'     => '',
        'value'     => '',
        'position'  => '',
        'push'      => '',
        'disabled'  => ''
    ) , $atts, 'ed_submit_shortcode'));

    if ($id)
    {
        $submit_id = esc_attr($id);
    }
    else
    {
        $submit_id = '';
    }

    if (in_array($class, array(
        'default',
        'primary',
        'success',
        'info',
        'warning',
        'danger',
        'link'
    )))
    {
        $submit_class = esc_attr($class);
    }
    else
    {
        $submit_class = 'default';
    }

    if ($value)
    {
        $submit_value = esc_attr($value);
    }
    else
    {
        $submit_value = '';
    }

    if (in_array($position, array(
        'left',
        'right',
    )))
    {
        $submit_position = esc_attr($position);
    }
    else
    {
        $submit_position = '';
    }

    if ($push)
    {
        $submit_push = esc_attr($push);
        $submit_width = 12 - $submit_push;
    }
    else
    {
        $submit_push = '';
    }

    if ($disabled == 'true')
    {
        $submit_disabled = true;
    }
    else
    {
        $submit_disabled = false;
    }

    $output = '';
    if ($submit_push)
    {
        $output .= '<div class="row"><div class="col-sm-' . $submit_width . ' col-sm-push-' . $submit_push . '">';
    }
    $output .= '<input';
    if ($submit_id)
    {
        $output .= ' id="' . $submit_id . '"';
    }
    $output .= ' name="submit" type="submit"';
    if ($submit_class || $submit_position)
    {
        $output .= ' class="';
        if ($submit_class)
        {
            $output .= ' btn btn-' . $submit_class;
        }
        if ($submit_position)
        {
            $output .= ' pull-' . $submit_position;
        }
        $output .= '"';
    }
    $output .= ' value="';
    if ($submit_value)
    {
        $output .= esc_attr($submit_value);
    }
    else
    {
        $output .= 'Submit';
    }
    $output .= '"';
    if ($submit_disabled)
    {
        $output .= ' disabled';
    }
    $output .= '>';
    if ($submit_push)
    {
        $output .= '</div></div>';
    }
    return $output;
}

/** 
 * Author shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_author_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'id'            => '',
        'placeholder'   => '',
        'described_by'  => '',
        'label'         => '',
        'width'         => '',
        'static'        => ''
    ) , $atts, 'ed_author_shortcode'));

    if ($id)
    {
        $author_id = esc_attr($id);
    }
    else
    {
        $author_id = '';
    }

    if ($placeholder)
    {
        $author_placeholder = esc_attr($placeholder);
    }
    else
    {
        $author_placeholder = '';
    }

    if ($described_by)
    {
        $author_described_by = esc_attr($described_by);
    }
    else
    {
        $author_described_by = '';
    }

    if ($label)
    {
        $author_aria_label = esc_attr($label);
    }
    else
    {
        $author_aria_label = '';
    }

    if ($static == 'true')
    {
        $author_static = true;
    }
    else
    {
        $author_static = false;
    }

    $commenter = wp_get_current_commenter();
    $req = get_option('require_name_email');
    $aria_req = ($req ? ' required="required"' : ’);
    $author_value = esc_attr($commenter['comment_author']);

    if (in_array($width, array(
        '1',
        '2',
        '3',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9',
        '10',
        '11',
        '12'
    )))
    {
        $author_width = esc_attr($width);
    }
    else
    {
        $author_width = '';
    }
    $output = '';
    if ($author_width)
    {
        $output .= '<div class="col-sm-' . $author_width . '">';
    }
    if ($author_static && $author_value)
    {
        $output .= '<p class="form-control-static">' . $author_value . '</p>';
    }
    else
    {
        $output .= '<input class="form-control"';
        if ($author_id)
        {
            $output .= ' id="' . $author_id . '"';
        }
        $output .= ' name="author" type="text"';
        if ($author_placeholder)
        {
            $output .= ' placeholder="' . $author_placeholder . '"';
        }
        if ($author_described_by)
        {
            $output .= ' aria-describedby="' . $author_described_by . '"';
        }
        if ($author_aria_label)
        {
            $output .= ' aria-label="' . $author_aria_label . '"';
        }
        $output .= ' value="' . $author_value . '" ' . $aria_req . '>';
    }
    if ($author_width)
    {
        $output .= '</div>';
    }
    return $output;
}

/** 
 * Email shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_email_shortcode($atts = [], $content = null, $fields = [])
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'id'            => '',
        'placeholder'   => '',
        'described_by'  => '',
        'label'         => '',
        'width'         => '',
        'static'        => ''
    ) , $atts, 'ed_email_shortcode'));

    if ($id)
    {
        $email_id = esc_attr($id);
    }
    else
    {
        $email_id = '';
    }

    if ($placeholder)
    {
        $email_placeholder = esc_attr($placeholder);
    }
    else
    {
        $email_placeholder = '';
    }

    if ($described_by)
    {
        $email_described_by = esc_attr($described_by);
    }
    else
    {
        $email_described_by = '';
    }

    if ($label)
    {
        $email_aria_label = esc_attr($label);
    }
    else
    {
        $email_aria_label = '';
    }

    if ($static == 'true')
    {
        $email_static = true;
    }
    else
    {
        $email_static = false;
    }

    $commenter = wp_get_current_commenter();
    $email_value = esc_attr($commenter['comment_author_email']);
    $req = get_option('require_name_email');
    $aria_req = ($req ? ' required="required"' : ’);

    if (in_array($width, array(
        '1',
        '2',
        '3',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9',
        '10',
        '11',
        '12'
    )))
    {
        $email_width = esc_attr($width);
    }
    else
    {
        $email_width = '';
    }
    $output = '';
    if ($email_width)
    {
        $output .= '<div class="col-sm-' . $email_width . '">';
    }
    if ($email_static && $email_value)
    {
        $output .= '<p class="form-control-static">' . $email_value . '</p>';
    }
    else
    {
        $output .= '<input class="form-control"';
        if ($email_id)
        {
            $output .= ' id="' . $email_id . '"';
        }
        $output .= ' name="email" type="email"';
        if ($email_placeholder)
        {
            $output .= ' placeholder="' . $email_placeholder . '"';
        }
        if ($email_described_by)
        {
            $output .= ' aria-describedby="' . $email_described_by . '"';
        }
        if ($email_aria_label)
        {
            $output .= ' aria-label="' . $email_aria_label . '"';
        }
        $output .= ' value="' . $email_value . '" ' . $aria_req . '>';
    }

    if ($email_width)
    {
        $output .= '</div>';
    }
    return $output;
}

/** 
 * Cookies conscent shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_cookies_shortcode($atts = [], $content = null, $fields = [])
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'id'        => '',
        'value'     => '',
        'required'  => '',
        'push'      => ''
    ) , $atts, 'ed_cookies_shortcode'));

    if ($id)
    {
        $cookies_id = esc_attr($id);
    }
    else
    {
        $cookies_id = '';
    }

    if ($value)
    {
        $cookies_value = esc_attr($value);
    }
    else
    {
        $cookies_value = '';
    }

    if ($required == 'required')
    {
        $cookies_required = true;
    }
    else
    {
        $cookies_required = false;
    }

    if ($push)
    {
        $cookies_push = esc_attr($push);
        $cookies_width = 12 - $cookies_push;
    }
    else
    {
        $cookies_push = '';
    }

    if (!$content)
    {
        $content = __('Save my name, email, and website in this browser for the next time I comment.', 'gaudium');
    }

    $commenter = wp_get_current_commenter();
    $req = get_option('require_name_email');
    $aria_req = ($req ? ' required="required"' : ’);
    if (!is_user_logged_in())
    {
        $output = '';
        if ($cookies_push)
        {
            $output .= '<div class="row"><div class="col-sm-' . $cookies_width . ' col-sm-push-' . $cookies_push . '">';
        }
        $output .= '<div class="checkbox"><label><input';
        if ($cookies_required)
        {
            $output .= ' id="' . $cookies_id . '"';
        }
        $output .= ' name="wp-comment-cookies-consent" type="checkbox"';
        if ($cookies_value)
        {
            $output .= ' value="' . $cookies_value . '"';
        }
        if ($cookies_required)
        {
            $output .= ' required="required"';
        }
        $output .= '><small>' . eds_do_shortcode($content) . '</small></label></div>';
        if ($cookies_push)
        {
            $output .= '</div></div>';
        }
        return $output;
    }
}

/** 
 * Bootstrap row shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_row_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'gutter' => ''
    ) , $atts, 'ed_row_shortcode'));
    if ($gutter == 'true')
    {
        $row_gutter = true;
    }
    else
    {
        $row_gutter = false;
    }

    $output = '<div class="row';
    if ($row_gutter)
    {
        $output .= ' row-gutter';
    }
    $output .= '">' . eds_do_shortcode($content) . '</div>';

    return $output;
}

/** 
 * Bootstrap column shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_col_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'n'         => '',
        'screen'    => '',
        'gutter'    => '',
        'bg'        => '',
        'push'      => '',
        'pull'      => ''
    ) , $atts, 'ed_col_shortcode'));

    if (in_array($n, array(
        '1',
        '2',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9',
        '10',
        '11',
        '12'
    )))
    {
        $col_n = esc_attr($n);
    }
    else
    {
        $col_n = '1';
    }

    if (in_array($screen, array(
        'xs',
        'sm',
        'md',
        'lg'
    )))
    {
        $col_screen = esc_attr($screen);
    }
    else
    {
        $col_screen = 'sm';
    }

    if ($gutter == 'true')
    {
        $col_gutter = true;
    }
    else
    {
        $col_gutter = false;
    }

    if ($push)
    {
        $col_push = esc_attr($push);
    }
    else
    {
        $col_push = '';
    }

    if ($pull)
    {
        $col_pull = esc_attr($pull);
    }
    else
    {
        $col_pull = '';
    }

    $colors = array(
        'white-bg'          => 'hsl(0, 0%, 100%)',
        'light-bg'          => 'hsl(40, 20%, 97%)',
        'dark-bg'           => 'hsl(0, 0%, 7%)',
        'light-blue'        => 'hsl(198, 94%, 93%)',
        'blush'             => 'hsl(8, 87%, 65%)',
        'yellow'            => 'hsl(56, 78%, 70%)',
        'cream'             => 'hsl(33, 100%, 96%)',
        'light-sapphire'    => 'hsl(178, 45%, 72%)',
        'dark-sapphire'     => 'hsl(174, 25%, 48%)',
        'light-tan'         => 'hsl(40, 20%, 97%)',
        'light-teal'        => 'hsl(177, 45%, 90%)'
    );

    if ($bg)
    {
        if (isset($colors[$bg]))
        {
            $col_bg = $colors[$bg];
        }
        else
        {
            $col_bg = esc_attr($bg);
        }
    }
    else
    {
        $col_bg = '';
    }

    $output = '<div class="col-' . $col_screen . '-' . $col_n;
    if ($col_push)
    {
        $output .= ' col-' . $col_screen . '-push-' . $col_push;
    }
    if ($col_pull)
    {
        $output .= ' col-' . $col_screen . '-pus-' . $col_pull;
    }
    if ($col_gutter)
    {
        $output .= ' col-gutter';
    }
    if ($col_bg)
    {
        $output .= ' styles';
    }
    $output .= '"';
    if ($col_bg)
    {
        $output .= ' style="background-color: ' . $col_bg . ';"';
    }
    $output .= '>' . eds_do_shortcode($content) . '</div>';

    return $output;
}

/** 
 * Login form shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_login_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'type'                  => '',
        'login_id'              => '',
        'login_label'           => '',
        'login_placeholder'     => '',
        'password_id'           => '',
        'password_label'        => '',
        'password_placeholder'  => '',
        'remember'              => '',
        'submit'                => '',
        'inline'                => ''
    ) , $atts, 'ed_login_shortcode'));

    if ($type == 'email')
    {
        $login_type = 'email';
    }
    else
    {
        $login_type = 'text';
    }

    if ($login_id)
    {
        $login_field_id = esc_attr($login_id);
    }
    else
    {
        $login_field_id = 'user_login';
    }

    if ($login_label)
    {
        $login_field_label = esc_attr($login_label);
    }
    else
    {
        $login_field_label = '';
    }

    if ($login_placeholder)
    {
        $login_field_placeholder = esc_attr($login_placeholder);
    }
    else
    {
        $login_field_placeholder = '';
    }

    if ($password_id)
    {
        $password_field_id = esc_attr($password_id);
    }
    else
    {
        $password_field_id = 'user_password';
    }

    if ($password_label)
    {
        $password_field_label = esc_attr($password_label);
    }
    else
    {
        $password_field_label = '';
    }

    if ($password_placeholder)
    {
        $password_field_placeholder = esc_attr($password_placeholder);
    }
    else
    {
        $password_field_placeholder = '';
    }

    if ($remember)
    {
        $login_remember = esc_attr($remember);
    }
    else
    {
        $login_remember = '';
    }

    if ($submit)
    {
        $login_submit = esc_attr($submit);
    }
    else
    {
        $login_submit = 'Login';
    }

    if ($inline == "true")
    {
        $login_inline = true;
    }
    else
    {
        $login_inline = false;
    }

    if (!is_user_logged_in())
    {
        $output = '<form';
        if ($login_inline)
        {
            $output .= ' class="form-inline"';
        }
        $output .= ' method="post" action="' . get_permalink() . '"> 
                <div class="form-group">';
        if ($login_field_label)
        {
            $output .= '<label';
            if ($login_field_id)
            {
                $output .= ' for="' . $login_field_id . '"';
            }
            $output .= ' class="control-label">' . $login_field_label . '</label>';
        }
        $output .= '<input type="' . $login_type . '" name="user_username" class="form-control"';
        if ($login_field_id)
        {
            $output .= ' id="' . $login_field_id . '"';
        }
        if ($login_field_placeholder)
        {
            $output .= ' placeholder="' . $login_field_placeholder . '"';
        }
        $output .= '> 
                </div> 
                <div class="form-group">';
        if ($password_field_label)
        {
            $output .= '<label';
            if ($password_field_id)
            {
                $output .= ' for="' . $password_field_id . '"';
            }
            $output .= ' class="control-label">' . $password_field_label . '</label>';
        }
        $output .= '<input type="password" name="user_password" class="form-control"';
        if ($password_field_id)
        {
            $output .= ' id="' . $password_field_id . '"';
        }
        if ($password_field_placeholder)
        {
            $output .= ' placeholder="' . $password_field_placeholder . '"';
        }
        $output .= '>
                </div>';
        if ($login_remember)
        {
            $output .= '<div class="checkbox"> 
                            <label> 
                                <input name="remember" type="checkbox" value=""><small>' . $login_remember . '</small>
                            </label> 
                        </div>';
        }
        $output .= '<button type="submit" class="btn btn-default">' . $login_submit . '</button> 
                </form>';
        return $output;
    }
}

/** 
 * Logout shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_logout_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'class' => ''
    ) , $atts, 'ed_logout_shortcode'));

    if (in_array($class, array(
        'default',
        'primary',
        'success',
        'info',
        'warning',
        'danger',
        'link'
    )))
    {
        $logout_class = esc_attr($class);
    }
    else
    {
        $logout_class = '';
    }

    if (is_user_logged_in())
    {
        $output = '<a href="' . wp_logout_url(get_permalink()) . '"';
        if ($logout_class)
        {
            $output .= ' class="btn btn-' . $logout_class . '"';
        }
        $output .= '>' . eds_do_shortcode($content) . '</a>';
        return $output;
    }
}

/** 
 * Signed in user account link shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_signed_in_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'link' => '',
        'text' => ''
    ) , $atts, 'ed_sign_in_shortcode'));

    if ($link == 'true')
    {
        $sign_in_link = true;
    }
    else
    {
        $sign_in_link = false;
    }

    $user = wp_get_current_user();
    $username = $user->display_name;

    if ($text)
    {
        $signed_in_text = esc_attr($text);
    }
    else
    {
        $signed_in_text = $username;
    }

    if (is_user_logged_in())
    {
        if ($sign_in_link)
        {
            $output = '<a href="' . get_edit_profile_url($user->ID) . '">';
        }
        $output .= $signed_in_text;
        if ($sign_in_link)
        {
            $output .= '</a>';
        }
        return $output;
    }
}

/** 
 * Signed in as message with a user account link shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_signed_in_as_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'link' => '',
        'text' => ''
    ) , $atts, 'ed_sign_in_as_shortcode'));

    if ($link == 'true')
    {
        $sign_in_link = true;
    }
    else
    {
        $sign_in_link = false;
    }

    $user = wp_get_current_user();
    $username = $user->display_name;

    if ($text)
    {
        $signed_in_text = esc_attr($text);
    }
    else
    {
        $signed_in_text = $username;
    }

    if (is_user_logged_in())
    {
        $output = '<p class="logged-in-as">' . __('Logged in as', 'gaudium') . ' ';
        if ($sign_in_link)
        {
            $output .= '<a href="' . get_edit_profile_url($user->ID) . '">';
        }
        $output .= $signed_in_text;
        if ($sign_in_link)
        {
            $output .= '</a> ';
        }
        $output .= '. <a href="' . wp_logout_url(get_permalink()) . '">' . __('Log out?', 'gaudium') . '</a></p>';
        return $output;
    }
}

/** 
 * Featured label shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_featured_label_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'class' => ''
    ) , $atts, 'ed_featured_label_shortcode'));

    if (in_array($class, array(
        'default',
        'primary',
        'success',
        'info',
        'warning',
        'danger',
        'link'
    )))
    {
        $label_class = esc_attr($class);
    }
    else
    {
        $label_class = '';
    }

    $output = '<span class="label';
    if ($label_class)
    {
        $output .= ' label-' . $label_class;
    }
    $output .= '">' . eds_do_shortcode($content) . '</span>';

    return $output;
}

/** 
 * Badge shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_badge_shortcode($atts = [], $content = null)
{

    $output = '<span class="badge">' . eds_do_shortcode($content) . '</span>';

    return $output;
}

/** 
 * Count shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_count_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'taxonomy' => '',
        'slug' => ''
    ) , $atts, 'ed_count_shortcode'));

    if (in_array($taxonomy, array(
        'category',
        'post_tag',
        'project_tag',
        'portfolio_page'
    )))
    {
        $count_taxonomy = esc_attr($taxonomy);
    }
    else
    {
        $count_taxonomy = 'category';
    }

    if ($slug)
    {
        $count_slug = esc_attr($slug);
    }
    else
    {
        $count_slug = '';
    }

    if ($count_taxonomy && $count_slug)
    {
        $count_term = get_term_by('slug', $count_slug, $count_taxonomy);
        $output = $count_term->count;
        return $output;
    }
}

/** 
 * Post link shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_post_link_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'type'      => '',
        'slug'      => '',
        'class'     => ''
    ) , $atts, 'ed_post_link_shortcode'));

    if (in_array($type, array(
        'post',
        'portfolio'
    )))
    {
        $link_type = esc_attr($type);
    }
    else
    {
        $link_type = '';
    }

    if ($slug)
    {
        $link_slug = esc_attr($slug);
    }
    else
    {
        $link_slug = '';
    }

    if (in_array($class, array(
        'default',
        'primary',
        'success',
        'info',
        'warning',
        'danger',
        'link'
    )))
    {
        $link_class = esc_attr($class);
    }
    else
    {
        $link_class = '';
    }

    if ($link_type && $link_slug)
    {
        $post = get_page_by_path($link_slug, OBJECT, $link_type);
        $permalink = get_permalink($post->ID);
        $post_title = $post->post_title;
    }

    $output = '<a href="';
    if (isset($permalink))
    {
        $output .= $permalink;
    }
    else
    {
        $output .= '#';
    }
    $output .= '"';
    if ($link_class)
    {
        $output .= ' class="btn btn-' . $link_class . '"';
    }
    $output .= '>';
    if (isset($post_title))
    {
        $output .= $post_title;
    }
    $output .= eds_do_shortcode($content) . '</a>';

    return $output;
}

/** 
 * Taxonomy link shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_tax_link_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'taxonomy'  => '',
        'slug'      => '',
        'class'     => ''
    ) , $atts, 'ed_tax_link_shortcode'));

    if (in_array($taxonomy, array(
        'category',
        'post_tag',
        'project_tag',
        'portfolio_page'
    )))
    {
        $link_taxonomy = esc_attr($taxonomy);
    }
    else
    {
        $link_taxonomy = 'category';
    }

    if ($slug)
    {
        $link_slug = esc_attr($slug);
    }
    else
    {
        $link_slug = '';
    }

    if (in_array($class, array(
        'default',
        'primary',
        'success',
        'info',
        'warning',
        'danger',
        'link',
        'meta'
    )))
    {
        $link_class = esc_attr($class);
    }
    else
    {
        $link_class = '';
    }

    if ($link_taxonomy && $link_slug)
    {
        $term_link = get_term_link($link_slug, $link_taxonomy);
        $term = get_term_by('slug', $link_slug, $link_taxonomy);
        $term_name = $term->name;
    }

    $output = '<a href="';
    if (isset($term_link))
    {
        $output .= $term_link;
    }
    else
    {
        $output .= '#';
    }
    $output .= '"';

    if ($link_class)
    {
        $output .= ' class="';
        if ($link_class == 'meta')
        {
            $output .= $link_class;
        }
        else
        {
            $output .= ' btn btn-' . $link_class;
        }
        $output .= '"';
    }

    $output .= '>';
    if (isset($term_name))
    {
        $output .= $term_name;
    }
    $output .= eds_do_shortcode($content) . '</a>';

    return $output;
}

/** 
 * Taxonomy url shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_tax_url_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'taxonomy'  => '',
        'slug'      => ''
    ) , $atts, 'ed_tax_url_shortcode'));

    if (in_array($taxonomy, array(
        'category',
        'post_tag',
        'project_tag',
        'portfolio_page'
    )))
    {
        $link_taxonomy = esc_attr($taxonomy);
    }
    else
    {
        $link_taxonomy = 'category';
    }

    if ($slug)
    {
        $link_slug = esc_attr($slug);
    }
    else
    {
        $link_slug = '';
    }

    if ($link_taxonomy && $link_slug)
    {
        $output = get_term_link($link_slug, $link_taxonomy);
        return $output;
    }
}

/** 
 * Jumbotron shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_jumbotron_shortcode($atts = [], $content = null)
{

    $output = '<div class="jumbotron">' . eds_do_shortcode($content) . '</div>';
    return $output;
}

/** 
 * Page header shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_page_header_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'size' => ''
    ) , $atts, 'ed_page_header_shortcode'));

    $sizes = array(
        'h1' => 'very-big',
        'h2' => 'big',
        'h3' => 'normal',
        'h4' => 'small',
        'h5' => 'very-small',
        'h6' => 'extra-small'
    );

    if ($size)
    {
        if (in_array($size, $sizes))
        {
            $page_header_size = array_search($size, $sizes);
        }
        else
        {
            $page_header_size = esc_attr($size);
        }
    }
    else
    {
        $page_header_size = '';
    }

    $output = '<';
    if ($page_header_size)
    {
        $output .= $page_header_size;
    }
    else
    {
        $output .= 'h1';
    }
    $output .= ' class="page-header">' . eds_do_shortcode($content) . '</';
    if ($page_header_size)
    {
        $output .= $page_header_size;
    }
    else
    {
        $output .= 'h1';
    }
    $output .= '>';
    return $output;
}

/** 
 * Autothumb shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_autothumb_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'layout'    => '',
        'img'       => '',
        'size'      => '',
        'position'  => '',
        'bg_color'  => '',
        'top'       => '',
        'left'      => ''
    ) , $atts, 'ed_autothumb_shortcode'));

    if ($img)
    {
        $autothumb_img = esc_attr($img);
    }
    else
    {
        $autothumb_img = '';
    }

    if (in_array($layout, array(
        'default',
        'landscape',
        'portrait'
    )))
    {
        $autothumb_layout = esc_attr($layout);
    }
    else
    {
        $autothumb_layout = '';
    }

    if (in_array($size, array(
        'auto',
        'contain',
        'cover'
    )))
    {
        $autothumb_bg_size = esc_attr($size);
    }
    else
    {
        $autothumb_bg_size = '';
    }

    if (in_array($position, array(
        'top-left',
        'top',
        'top-right',
        'left',
        'centered',
        'right',
        'bottom-left',
        'bottom',
        'bottom-right'
    )))
    {
        $autothumb_bg_position = esc_attr($position);
    }
    else
    {
        $autothumb_bg_position = '';
    }

    $colors = array(
        'white-bg'          => 'hsl(0, 0%, 100%)',
        'light-bg'          => 'hsl(40, 20%, 97%)',
        'dark-bg'           => 'hsl(0, 0%, 7%)',
        'light-blue'        => 'hsl(198, 94%, 93%)',
        'blush'             => 'hsl(8, 87%, 65%)',
        'yellow'            => 'hsl(56, 78%, 70%)',
        'cream'             => 'hsl(33, 100%, 96%)',
        'light-sapphire'    => 'hsl(178, 45%, 72%)',
        'dark-sapphire'     => 'hsl(174, 25%, 48%)',
        'light-tan'         => 'hsl(40, 20%, 97%)',
        'light-teal'        => 'hsl(177, 45%, 90%)'
    );

    if ($bg_color)
    {
        if (isset($colors[$bg_color]))
        {
            $autothumb_bg_color = $colors[$bg_color];
        }
        else
        {
            $autothumb_bg_color = esc_attr($bg_color);
        }
    }
    else
    {
        $autothumb_bg_color = '';
    }

    if ($top)
    {
        $autothumb_top = esc_attr($top);
    }
    else
    {
        $autothumb_top = '';
    }

    if ($left)
    {
        $autothumb_left = esc_attr($left);
    }
    else
    {
        $autothumb_left = '';
    }

    $output = '<div class="autothumb';
    if ($autothumb_layout)
    {
        $output .= ' ' . $autothumb_layout;
    }
    if ($autothumb_bg_position)
    {
        $output .= ' img-' . $autothumb_bg_position;
    }
    if ($autothumb_img || $autothumb_bg_color || $autothumb_bg_size)
    {
        $output .= ' styles';
    }
    $output .= '"';
    if ($autothumb_img || $autothumb_bg_color || $autothumb_bg_size)
    {
        $output .= ' style="';
        if ($autothumb_img)
        {
            $output .= ' background-image: url(' . $autothumb_img . ');';
        }
        if ($autothumb_bg_color)
        {
            $output .= ' background-color: ' . $autothumb_bg_color . ';';
        }
        if ($autothumb_bg_size)
        {
            $output .= ' background-size: ' . $autothumb_bg_size . ';';
        }
        if ($autothumb_top)
        {
            $output .= ' background-position-y: ' . $autothumb_top . ';';
        }
        if ($autothumb_left)
        {
            $output .= ' background-position-x: ' . $autothumb_left . ';';
        }
        $output .= '"';
    }
    $output .= '>' . eds_do_shortcode($content) . '</div>';

    return $output;
}

/** 
 * Progress shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_progress_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'labels'    => '',
        'min'       => '',
        'max'       => ''
    ) , $atts, 'ed_progress_shortcode'));

    if ($min)
    {
        $progress_bar_min = intval(esc_attr($min));
    }
    else
    {
        $progress_bar_min = 0;
    }

    if ($max)
    {
        $progress_bar_max = intval(esc_attr($max));
    }
    else
    {
        $progress_bar_max = 100;
    }

    if ($labels == 'true')
    {
        $progress_labels = true;
    }
    else
    {
        $progress_labels = false;
    }
    $output = '';
    if ($progress_labels)
    {
        $output = '<div class="clearfix"><span class="progress-bar-label">' . $progress_bar_min . '</span><div class="progress-bar-container">';
    }
    $output .= '<div class="progress">' . eds_do_shortcode($content) . '</div>';
    if ($progress_labels)
    {
        $output .= '</div><span class="progress-bar-label">' . $progress_bar_max . '</span></div>';
    }
    return $output;
}

/** 
 * Progress bar shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_progress_bar_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'class'         => '',
        'striped'       => '',
        'active'        => '',
        'complete'      => '',
        'min'           => '',
        'max'           => '',
        'value'         => '',
        'unit'          => '',
        'progress_label'    => ''
    ) , $atts, 'ed_progress_bar_shortcode'));

    if (in_array($class, array(
        'default',
        'primary',
        'success',
        'info',
        'warning',
        'danger',
        'link'
    )))
    {
        $progress_bar_class = esc_attr($class);
    }
    else
    {
        $progress_bar_class = '';
    }

    if ($striped)
    {
        $progress_bar_striped = true;
    }
    else
    {
        $progress_bar_striped = false;
    }

    if ($active)
    {
        $progress_bar_active = true;
    }
    else
    {
        $progress_bar_active = false;
    }

    if ($complete)
    {
        $progress_bar_complete = esc_attr($complete);
    }
    else
    {
        $progress_bar_complete = '';
    }

    if ($min)
    {
        $progress_bar_min = intval(esc_attr($min));
    }
    else
    {
        $progress_bar_min = '';
    }

    if ($max)
    {
        $progress_bar_max = intval(esc_attr($max));
    }
    else
    {
        $progress_bar_max = 100;
    }

    if ($value)
    {
        $progress_bar_value = intval(esc_attr($value));
    }
    else
    {
        $progress_bar_value = '';
    }

    if ($unit)
    {
        $progress_bar_unit = esc_attr($unit);
    }
    else
    {
        $progress_bar_unit = '';
    }

    if ($progress_label == 'true')
    {
        $progress_bar_label = true;
    }
    else
    {
        $progress_bar_label = false;
    }

    $output = '<div class="progress-bar';
    if ($progress_bar_class)
    {
        $output .= ' progress-bar-' . $progress_bar_class;
    }
    if ($progress_bar_striped)
    {
        $output .= ' progress-bar-striped';
    }
    if ($progress_bar_complete)
    {
        $output .= ' complete';
    }
    if ($progress_bar_active)
    {
        $output .= ' active';
    }
    $output .= '" role="progressbar"';
    if ($progress_bar_value)
    {
        $output .= ' style="width: 0;" aria-valuenow="' . $progress_bar_value . '"';
    }
    if ($progress_bar_min)
    {
        $output .= ' aria-valuemin="' . $progress_bar_min . '"';
    }
    else
    {
        $output .= ' aria-valuemin="0"';
    }
    if ($progress_bar_max)
    {
        $output .= ' aria-valuemax="' . $progress_bar_max . '"';
    }
    $output .= '>' . eds_do_shortcode($content);
    if ($progress_bar_label)
    {
        $output .= '<span>';
        if ($progress_bar_value)
        {
            $output .= $progress_bar_min;
        }
        $output .= '</span>';
        if ($progress_bar_unit)
        {
            $output .= $progress_bar_unit;
        }
    }
    $output .= '</div>';
    return $output;
}

/** 
 * List group shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_list_group_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'link' => ''
    ) , $atts, 'ed_list_group_shortcode'));
    if ($link)
    {
        $list_group_link = true;
    }
    else
    {
        $list_group_link = false;
    }
    $output = '<';
    if ($list_group_link)
    {
        $output .= 'div';
    }
    else
    {
        $output .= 'ul';
    }
    $output .= ' class="list-group">' . eds_do_shortcode($content) . '</';
    if ($list_group_link)
    {
        $output .= 'div';
    }
    else
    {
        $output .= 'ul';
    }
    $output .= '>';

    return $output;
}

/** 
 * List group item shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_list_group_item_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    extract(shortcode_atts(array(
        'taxonomy'  => '',
        'type'      => '',
        'slug'      => '',
        'href'      => '',
        'class'     => '',
        'heading'   => '',
        'excerpt'   => '',
        'disabled'  => ''
    ) , $atts, 'ed_list_group_item_shortcode'));

    if (in_array($taxonomy, array(
        'category',
        'post_tag',
        'project_tag',
        'portfolio_page'
    )))
    {
        $list_group_taxonomy = esc_attr($taxonomy);
    }
    else
    {
        $list_group_taxonomy = 'category';
    }

    if (in_array($type, array(
        'post',
        'portfolio',
        'page',
        'form'
    )))
    {
        $list_group_type = esc_attr($type);
    }
    else
    {
        $list_group_type = '';
    }

    if ($slug)
    {
        $list_group_slug = esc_attr($slug);
    }
    else
    {
        $list_group_slug = '';
    }

    if ($list_group_slug && $list_group_type)
    {
        $post = get_page_by_path($list_group_slug, OBJECT, $list_group_type);
    }
    else
    {
        $post = '';
    }

    if ($href)
    {
        $list_group_link = esc_attr($href);
    }
    elseif ($post)
    {
        $list_group_link = get_permalink($post->ID);
    }
    elseif ($list_group_taxonomy && $list_group_slug)
    {
        $list_group_link = get_term_link($list_group_slug, $list_group_taxonomy);
    }
    else
    {
        $list_group_link = '';
    }

    if (in_array($class, array(
        'default',
        'primary',
        'success',
        'info',
        'warning',
        'danger',
        'link'
    )))
    {
        $list_group_class = esc_attr($class);
    }
    else
    {
        $list_group_class = '';
    }

    if ($post)
    {
        $list_group_heading = $post->post_title;
    }
    elseif ($heading)
    {
        $list_group_heading = esc_attr($heading);
    }
    else
    {
        $list_group_heading = '';
    }

    if ($excerpt == 'true' && $post)
    {
        $list_group_excerpt = $post->post_excerpt;
    }
    else
    {
        $list_group_excerpt = '';
    }

    if ($disabled)
    {
        $list_group_disabled = true;
    }
    else
    {
        $list_group_disabled = false;
    }

    $output = '<';
    if ($list_group_link)
    {
        $output .= 'a href="';
        if (!$list_group_disabled)
        {
            $output .= $list_group_link;
        }
        $output .= '"';
    }
    else
    {
        $output .= 'li';
    }

    $output .= ' class="list-group-item';
    if ($list_group_class)
    {
        $output .= ' list-group-item-' . $list_group_class;
    }
    if ($list_group_disabled)
    {
        $output .= ' disabled';
    }
    $output .= '">';
    if ($list_group_heading)
    {
        $output .= '<h4 class="list-group-item-heading">' . $list_group_heading . '</h4><span class="list-group-item-text">';
    }
    if ($list_group_excerpt)
    {
        $output .= $list_group_excerpt;
    }
    $output .= eds_do_shortcode($content);
    if ($list_group_heading)
    {
        $output .= '</span>';
    }
    $output .= '</';
    if ($list_group_link)
    {
        $output .= 'a';
    }
    else
    {
        $output .= 'li';
    }
    $output .= '>';
    return $output;
}

/** 
 * Table shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_table_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'caption'       => '',
        'head'          => '',
        'rows'          => '',
        'style'         => '',
        'responsive'    => '',
        'active'        => '',
        'success'       => '',
        'info'          => '',
        'warning'       => '',
        'danger'        => ''
    ) , $atts, 'ed_table_shortcode'));
    if ($caption)
    {
        $table_caption = esc_attr($caption);
    }
    else
    {
        $table_caption = '';
    }
    if ($head)
    {
        $table_head = explode(',', esc_attr($head));
    }
    else
    {
        $table_head = '';
    }
    if ($rows)
    {
        $table_rows = explode('|', esc_attr($rows));
        foreach ($table_rows as $k => $v)
        {
            $table_rows[$k] = explode(',', $v);
        }
    }
    else
    {
        $table_rows = '';
    }

    if (in_array($style, array(
        'striped',
        'bordered',
        'hover'
    )))
    {
        $table_style = esc_attr($style);
    }
    else
    {
        $table_style = '';
    }

    if ($responsive == 'true')
    {
        $table_responsive = true;
    }
    else
    {
        $table_responsive = false;
    }

    if ($active)
    {
        $table_active = explode(',', esc_attr($active));
    }
    else
    {
        $table_active = '';
    }

    if ($success)
    {
        $table_success = explode(',', esc_attr($success));
    }
    else
    {
        $table_success = '';
    }

    if ($info)
    {
        $table_info = explode(',', esc_attr($info));
    }
    else
    {
        $table_info = '';
    }

    if ($warning)
    {
        $table_warning = explode(',', esc_attr($warning));
    }
    else
    {
        $table_warning = '';
    }

    if ($danger)
    {
        $table_danger = explode(',', esc_attr($danger));
    }
    else
    {
        $table_danger = '';
    }
    $output = '';
    if ($table_responsive)
    {
        $output .= '<div class="table-responsive">';
    }
    $output .= '<table class="table';
    if ($table_style)
    {
        $output .= ' table-' . $table_style;
    }

    $output .= '">';
    if ($table_caption)
    {
        $output .= '<caption>' . $table_caption . '</caption>';
    }
    if ($table_head)
    {
        $output .= '<thead><tr>';
        foreach ($table_head as $k => $v)
        {
            $output .= '<th>' . $v . '</th>';
        }
        $output .= '</tr></thead>';
    }
    if ($table_rows)
    {
        $output .= '<tbody>';
        foreach ($table_rows as $k => $v)
        {
            $output .= '<tr';
            if ($table_active && $table_active[array_search($k, $table_active) ] == $k)
            {
                $output .= ' class="active"';
            }
            elseif ($table_success && $table_success[array_search($k, $table_success) ] == $k)
            {
                $output .= ' class="success"';
            }
            elseif ($table_info && $table_info[array_search($k, $table_info) ] == $k)
            {
                $output .= ' class="info"';
            }
            elseif ($table_warning && $table_warning[array_search($k, $table_warning) ] == $k)
            {
                $output .= ' class="warning"';
            }
            elseif ($table_danger && $table_danger[array_search($k, $table_danger) ] == $k)
            {
                $output .= ' class="danger"';
            }
            $output .= '>';
            foreach ($v as $k1 => $v1)
            {
                $output .= '<td>' . $v1 . '</td>';
            }
            $output .= '</tr>';
        }
        $output .= '</tbody>';
    }
    $output .= eds_do_shortcode($content);
    $output .= '</table>';
    if ($table_responsive)
    {
        $output .= '</div>';
    }
    return $output;
}

/** 
 * Media embed shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_embed_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'src'           => '',
        'fullscreen'    => ''
    ) , $atts, 'ed_embed_shortcode'));
    if ($src)
    {
        $embed_src = $src;
    }
    else
    {
        $embed_src = '';
    }
    if ($fullscreen == 'true')
    {
        $embed_fullscreen = true;
    }
    else
    {
        $embed_fullscreen = false;
    }
    $output = '<div class="embed-responsive embed-responsive-16by9"> 
      <iframe class="embed-responsive-item" src="' . $embed_src . '"';
    if ($embed_fullscreen)
    {
        $output .= ' allowfullscreen="' . $embed_fullscreen . '"';
    }
    $output .= '></iframe></div>';
    return $output;
}

/** 
 * Well shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_well_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'class' => ''
    ) , $atts, 'ed_well_shortcode'));

    if (in_array($class, array(
        'default',
        'primary'
    )))
    {
        $well_class = esc_attr($class);
    }
    else
    {
        $well_class = '';
    }

    $output = '<div class="well';
    if ($well_class)
    {
        $output .= ' well-' . $well_class;
    }
    $output .= '">
                <p>' . eds_do_shortcode($content) . '</p>
              </div>';
    return $output;
}

/** 
 * Lead shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_lead_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'align' => ''
    ) , $atts, 'ed_lead_shortcode'));

    if (in_array($align, array(
        'left',
        'center',
        'right'
    )))
    {
        $lead_align = esc_attr($align);
    }
    else
    {
        $lead_align = '';
    }
    $output = '<p class="lead';
    if ($lead_align)
    {
        $output .= ' text-' . $lead_align;
    }
    $output .= '">' . eds_do_shortcode($content) . '</p>';
    return $output;
}

/** 
 * Left-aligned text shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_left_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'tag' => ''
    ) , $atts, 'ed_left_shortcode'));

    if (in_array($tag, array(
        'article',
        'div'
    )))
    {
        $left_tag = esc_attr($tag);
    }
    else
    {
        $left_tag = 'p';
    }

    $output = '<' . $left_tag . ' class="text-left">' . eds_do_shortcode($content) . '</' . $left_tag . '>';
    return $output;
}

/** 
 * Right-aligned text shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_right_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'tag' => ''
    ) , $atts, 'ed_right_shortcode'));

    if (in_array($tag, array(
        'article',
        'div'
    )))
    {
        $right_tag = esc_attr($tag);
    }
    else
    {
        $right_tag = 'p';
    }
    $output = '<' . $right_tag . ' class="text-right">' . eds_do_shortcode($content) . '</' . $right_tag . '>';
    return $output;
}

/** 
 * Centered text shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_center_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'tag' => ''
    ) , $atts, 'ed_center_shortcode'));

    if (in_array($tag, array(
        'article',
        'div'
    )))
    {
        $center_tag = esc_attr($tag);
    }
    else
    {
        $center_tag = 'p';
    }
    $output = '<' . $center_tag . ' class="text-center">' . eds_do_shortcode($content) . '</' . $center_tag . '>';
    return $output;
}

/** 
 * Justified text shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_justify_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'tag' => ''
    ) , $atts, 'ed_justify_shortcode'));

    if (in_array($tag, array(
        'article',
        'div'
    )))
    {
        $justify_tag = esc_attr($tag);
    }
    else
    {
        $justify_tag = 'p';
    }
    $output = '<' . $justify_tag . ' class="text-justify">' . eds_do_shortcode($content) . '</' . $justify_tag . '>';
    return $output;
}

/** 
 * No-wrap text shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_nowrap_shortcode($atts = [], $content = null)
{

    $output = '<p class="text-nowrap">' . eds_do_shortcode($content) . '</p>';
    return $output;
}

/** 
 * Lowercase text shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_lowercase_shortcode($atts = [], $content = null)
{

    $output = '<p class="text-lowercase">' . eds_do_shortcode($content) . '</p>';
    return $output;
}

/** 
 * Uppercase text shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_uppercase_shortcode($atts = [], $content = null)
{

    $output = '<p class="text-uppercase">' . eds_do_shortcode($content) . '</p>';
    return $output;
}

/** 
 * Capitalized text shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_capitalize_shortcode($atts = [], $content = null)
{

    $output = '<p class="text-capitalize">' . eds_do_shortcode($content) . '</p>';
    return $output;
}

/** 
 * Initialism shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_initialism_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'title' => ''
    ) , $atts, 'ed_initialism_shortcode'));

    if ($title)
    {
        $initialism_title = esc_attr($title);
    }
    else
    {
        $initialism_title = '';
    }
    $output = '<abbr title="' . $initialism_title . '" class="initialism">' . eds_do_shortcode($content) . '</abbr>';
    return $output;
}

/** 
 * Mail shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_mail_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'to' => ''
    ) , $atts, 'ed_mail_shortcode'));

    if ($to)
    {
        $mail_to = esc_attr($to);
    }
    else
    {
        $mail_to = '';
    }
    $output = '<a href="mailto:' . $mail_to . '">' . eds_do_shortcode($content) . '</a> ';
    return $output;
}

/** 
 * Blockquote shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_blockquote_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'style'     => '',
        'centered'  => '',
        'reverse'   => '',
        'cite'      => '',
        'title'     => ''
    ) , $atts, 'ed_blockquote_shortcode'));

    if (in_array($style, array(
        'header'
    )))
    {
        $blockquote_style = esc_attr($style);
    }
    else
    {
        $blockquote_style = '';
    }

    if ($centered == 'true')
    {
        $blockquote_centered = true;
    }
    else
    {
        $blockquote_centered = false;
    }

    if ($reverse == 'true')
    {
        $blockquote_reverse = true;
    }
    else
    {
        $blockquote_reverse = false;
    }

    if ($cite)
    {
        $blockquote_cite = esc_attr($cite);
    }
    else
    {
        $blockquote_cite = '';
    }

    if ($title)
    {
        $blockquote_title = esc_attr($title);
    }
    else
    {
        $blockquote_title = '';
    }

    $output = '<blockquote';
    if ($blockquote_centered)
    {
        $output .= ' class="centered"';
    }
    elseif ($blockquote_reverse)
    {
        $output .= ' class="blockquote-reverse"';
    }
    $output .= '>';

    if ($blockquote_style)
    {
        $output .= '<h2>';
    }
    else
    {
        $output .= '<p class="lead">';
    }
    $output .= eds_do_shortcode($content);
    if ($blockquote_style)
    {
        $output .= '</h2>';
    }
    else
    {
        $output .= '</p>';
    }
    $output .= '<footer><cite title="' . $blockquote_title . '">' . $blockquote_cite . '</cite></footer>
    </blockquote>';
    return $output;
}

/** 
 * Unstyled list shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_list_unstyled_shortcode($atts = [], $content = null)
{

    $output = '<ul class="list-unstyled">' . eds_do_shortcode($content) . '</ul>';
    return $output;
}

/** 
 * List inline shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_list_inline_shortcode($atts = [], $content = null)
{

    $output = '<ul class="list-inline">' . eds_do_shortcode($content) . '</ul>';
    return $output;
}

/** 
 * Description list shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_description_list_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'terms'         => '',
        'horizontal'    => ''
    ) , $atts, 'ed_description_list_shortcode'));

    if ($terms)
    {
        $dl_terms = explode('|', esc_attr($terms));
        foreach ($dl_terms as $k => $v)
        {
            $dl_terms[$k] = explode(',', $v);
            $dl_terms[$k][1] = explode(';', $dl_terms[$k][1]);
        }
    }
    else
    {
        $dl_terms = '';
    }

    if ($horizontal)
    {
        $dl_horizontal = true;
    }
    else
    {
        $dl_horizontal = false;
    }

    $output = '<dl';
    if ($dl_horizontal)
    {
        $output .= ' class="dl-horizontal"';
    }
    $output .= '>';
    foreach ($dl_terms as $k => $v)
    {
        $output .= '<dt>' . $dl_terms[$k][0] . '</dt>';
        foreach ($dl_terms[$k][1] as $k1 => $v1)
        {
            $output .= '<dd>' . $dl_terms[$k][1][$k1] . '</dd>';
        }
    }
    $output .= '</dl>';
    return $output;
}

/** 
 * Muted content shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_muted_shortcode($atts = [], $content = null)
{
    $output = '<p class="text-muted">' . eds_do_shortcode($content) . '</p>';
    return $output;
}

/** 
 * Primary content shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_primary_shortcode($atts = [], $content = null)
{
    $output = '<p class="text-primary">' . eds_do_shortcode($content) . '</p>';
    return $output;
}

/** 
 * Success content shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_success_shortcode($atts = [], $content = null)
{
    $output = '<p class="text-success">' . eds_do_shortcode($content) . '</p>';
    return $output;
}

/** 
 * Info content shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_info_shortcode($atts = [], $content = null)
{
    $output = '<p class="text-info">' . eds_do_shortcode($content) . '</p>';
    return $output;
}

/** 
 * Warning content shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_warning_shortcode($atts = [], $content = null)
{
    $output = '<p class="text-warning">' . eds_do_shortcode($content) . '</p>';
    return $output;
}

/** 
 * Danger content shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_danger_shortcode($atts = [], $content = null)
{
    $output = '<p class="text-danger">' . eds_do_shortcode($content) . '</p>';
    return $output;
}

/** 
 * Primary background content shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_bg_primary_shortcode($atts = [], $content = null)
{
    $output = '<p class="bg-primary">' . eds_do_shortcode($content) . '</p>';
    return $output;
}

/** 
 * Success background content shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_bg_success_shortcode($atts = [], $content = null)
{
    $output = '<p class="bg-success">' . eds_do_shortcode($content) . '</p>';
    return $output;
}

/** 
 * Info background content shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_bg_info_shortcode($atts = [], $content = null)
{
    $output = '<p class="bg-info">' . eds_do_shortcode($content) . '</p>';
    return $output;
}

/** 
 * Warning background content shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_bg_warning_shortcode($atts = [], $content = null)
{
    $output = '<p class="bg-warning">' . eds_do_shortcode($content) . '</p>';
    return $output;
}

/** 
 * Danger background content shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_bg_danger_shortcode($atts = [], $content = null)
{
    $output = '<p class="bg-danger">' . eds_do_shortcode($content) . '</p>';
    return $output;
}

/** 
 * Mark shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_mark_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'class' => ''
    ) , $atts, 'ed_mark_shortcode'));

    if (in_array($class, array(
        'default',
        'primary',
        'success',
        'info',
        'warning',
        'danger'
    )))
    {
        $mark_class = esc_attr($class);
    }
    else
    {
        $mark_class = '';
    }

    $output = '<mark';
    if ($mark_class)
    {
        $output .= ' class="bg-' . $mark_class . '"';
    }
    $output .= '>' . eds_do_shortcode($content) . '</mark>';
    return $output;
}

/** 
 * Counter shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_counter_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'to' => ''
    ) , $atts, 'ed_counter_shortcode'));

    if ($to)
    {
        $count_to = intval(esc_attr($to));
    }
    else
    {
        $count_to = '';
    }

    $output = '<span class="count"';
    if ($count_to)
    {
        $output .= ' data-count="' . $count_to . '"';
    }
    $output .= '>0</span>';
    return $output;
}

/** 
 * Counter with an icon shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_icon_counter_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'to'    => '',
        'name'  => '',
        'type'  => '',
        'size'  => ''
    ) , $atts, 'ed_icon_counter_shortcode'));

    if ($to)
    {
        $counter_to = intval(esc_attr($to));
    }
    else
    {
        $counter_to = '';
    }

    if (in_array($type, array(
        'glyphicon',
        'ionicons',
        'flaticon'
    )))
    {
        $icon_type = esc_attr($type);
    }
    else
    {
        $icon_type = '';
    }

    if ($icon_type == 'glyphicon' && ed_glyphicon($name))
    {
        $icon_name = 'glyphicon glyphicon-' . esc_attr($name);
    }
    else
    {
        $icon_name = '';
    }

    if ($icon_type == 'ionicons' && ed_ionicons($name))
    {
        $icon_name = 'ion-' . esc_attr($name);
    }
    else
    {
        $icon_name = '';
    }

    if ($icon_type == 'flaticon' && ed_flaticon($name))
    {
        $icon_name = 'flaticon-' . esc_attr($name);
    }
    else
    {
        $icon_name = '';
    }

    if (in_array($size, array(
        'xs',
        'sm',
        'md',
        'lg'
    )))
    {
        $icon_size = esc_attr($size);
    }
    else
    {
        $icon_size = 'md';
    }

    $output = '<article class="counter">';
    if ($icon_name && $icon_size)
    {
        $output .= '<span class="' . $icon_name . ' ' . $icon_size . '" aria-hidden="true"></span>';
    }
    $output .= '<h3 class="counter-item"><span class="count"';
    if ($counter_to)
    {
        $output .= ' data-count="' . $counter_to . '"';
    }
    $output .= '>0</span>' . eds_do_shortcode($content) . '</h3></article>';
    return $output;
}

/** 
 * Feature shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_feature_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'type'  => '',
        'name'  => '',
        'size'  => '',
        'title' => '',
        'space' => ''
    ) , $atts, 'ed_feature_shortcode'));

    if (in_array($type, array(
        'glyphicon',
        'ionicons',
        'flaticon'
    )))
    {
        $icon_type = esc_attr($type);
    }
    else
    {
        $icon_type = '';
    }

    if ($icon_type == 'glyphicon' && ed_glyphicon($name))
    {
        $icon_name = 'glyphicon glyphicon-' . esc_attr($name);
    }
    elseif ($icon_type == 'ionicons' && ed_ionicons($name))
    {
        $icon_name = 'ion-' . esc_attr($name);
    }
    elseif ($icon_type == 'flaticon' && ed_flaticon($name))
    {
        $icon_name = 'flaticon-' . esc_attr($name);
    }
    else
    {
        $icon_name = '';
    }

    if (in_array($size, array(
        'xs',
        'sm',
        'md',
        'lg'
    )))
    {
        $icon_size = esc_attr($size);
    }
    else
    {
        $icon_size = 'sm';
    }

    if ($title)
    {
        $feature_title = esc_attr($title);
    }
    else
    {
        $feature_title = '';
    }

    if ($space == 'true')
    {
        $feature_space = true;
    }
    else
    {
        $feature_space = false;
    }

    $output = '<article ';
    if ($feature_space)
    {
        $output .= ' class="bspace-1"';
    }
    $output .= '>
                  <div class="row">';
    if ($icon_name)
    {
        $output .= '<span class="' . $icon_name . ' ' . $icon_size . ' col-sm-2"></span>';
    }
    $output .= '<div class="col-sm-10">
                  <header>
                    <h3>' . $feature_title . '</h3>
                  </header>';
    if ($content)
    {
        $output .= '<p>' . eds_do_shortcode($content) . '</p>';
    }
    $output .= '</div>
              </div>
            </article>';
    return $output;
}

/** 
 * Partner logo shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_partner_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'logo' => ''
    ) , $atts, 'ed_partner_shortcode'));

    if ($logo)
    {
        $partner_logo = esc_attr($logo);
    }
    else
    {
        $partner_logo = '';
    }

    $output = '<article class="partner-logo img-centered';
    if ($partner_logo)
    {
        $output .= ' styles';
    }
    $output .= '"';
    if ($partner_logo)
    {
        $output .= ' style="background-image: url(' . $partner_logo . '); background-repeat: no-repeat;"';
    }
    $output .= '></article>';
    return $output;
}

/** 
 * Map shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_map_shortcode($atts = [], $content = null)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'src' => ''
    ) , $atts, 'ed_map_shortcode'));

    if ($src)
    {
        $map_src = esc_attr($src);
    }
    else
    {
        $map_src = '';
    }

    $output = '<iframe';
    if ($map_src)
    {
        $output .= ' src="' . $map_src . '"';
    }
    $output .= ' class="stage styles" style="border:0; width:100%; height: 44em;" allowfullscreen=""></iframe>';
    return $output;
}

/** 
 * Content for logged in users only shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_logged_in_shortcode($atts = [], $content = null)
{
    if (is_user_logged_in())
    {
        return eds_do_shortcode($content);
    }
}

/** 
 * Content for logged out users only shortcode
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_logged_out_shortcode($atts = [], $content = null)
{
    if (!is_user_logged_in())
    {
        return eds_do_shortcode($content);
    }
}

/** 
 * Custom do_shortcode()
 * @param $content (default: null) Shortcode content.
 * @return $output Do shortcode. 
 */
function eds_do_shortcode($content)
{
    if (!is_admin())
    {
        $output = do_shortcode($content);
        return $output;
    }
}

/** 
 * Initialise shortcodes
 * @return void. 
 */
function ed_shortcodes_init()
{
    add_shortcode('flaticon', 'ed_flaticon_shortcode');
    add_shortcode('ionicons', 'ed_ionicons_shortcode');
    add_shortcode('glyphicon', 'ed_glyphicon_shortcode');
    add_shortcode('sr', 'ed_sr_shortcode');
    add_shortcode('btn-toolbar', 'ed_btn_toolbar_shortcode');
    add_shortcode('btn-group', 'ed_btn_group_shortcode');
    add_shortcode('nested-btn-group', 'ed_nested_btn_group_shortcode');
    add_shortcode('btn', 'ed_btn_shortcode');
    add_shortcode('btn-link', 'ed_btn_link_shortcode');
    add_shortcode('btn-label', 'ed_btn_label_shortcode');
    add_shortcode('dropdown', 'ed_dropdown_shortcode');
    add_shortcode('dropdown-menu', 'ed_dropdown_menu_shortcode');
    add_shortcode('dropdown-link', 'ed_dropdown_link_shortcode');
    add_shortcode('input-checkbox', 'ed_input_checkbox_shortcode');
    add_shortcode('input-radio', 'ed_input_radio_shortcode');
    add_shortcode('alert', 'ed_alert_shortcode');
    add_shortcode('alert-link', 'ed_alert_link_shortcode');
    add_shortcode('header', 'ed_header_shortcode');
    add_shortcode('code', 'ed_code_shortcode');
    add_shortcode('modal-btn', 'ed_modal_btn_shortcode');
    add_shortcode('modal', 'ed_modal_shortcode');
    add_shortcode('nav', 'ed_nav_shortcode');
    add_shortcode('nav-link', 'ed_nav_link_shortcode');
    add_shortcode('nav-dropdown-link', 'ed_nav_dropdown_link_shortcode');
    add_shortcode('content', 'ed_content_shortcode');
    add_shortcode('pane', 'ed_pane_shortcode');
    add_shortcode('collapse-content', 'ed_collapse_content_shortcode');
    add_shortcode('tooltip', 'ed_tooltip_shortcode');
    add_shortcode('popover', 'ed_popover_shortcode');
    add_shortcode('panel-group', 'ed_panel_group_shortcode');
    add_shortcode('panel', 'ed_panel_shortcode');
    add_shortcode('panel-body', 'ed_panel_body_shortcode');
    add_shortcode('carousel', 'ed_carousel_shortcode');
    add_shortcode('input-group', 'ed_input_group_shortcode');
    add_shortcode('form-group', 'ed_form_group_shortcode');
    add_shortcode('text', 'ed_text_shortcode');
    add_shortcode('date', 'ed_date_shortcode');
    add_shortcode('month', 'ed_month_shortcode');
    add_shortcode('week', 'ed_week_shortcode');
    add_shortcode('time', 'ed_time_shortcode');
    add_shortcode('password', 'ed_password_shortcode');
    add_shortcode('datetime', 'ed_datetime_shortcode');
    add_shortcode('number', 'ed_number_shortcode');
    add_shortcode('email-field', 'ed_email_field_shortcode');
    add_shortcode('url', 'ed_url_shortcode');
    add_shortcode('color', 'ed_color_shortcode');
    add_shortcode('textarea', 'ed_textarea_shortcode');
    add_shortcode('searchform', 'ed_searchform_shortcode');
    add_shortcode('search', 'ed_search_shortcode');
    add_shortcode('checkbox-label', 'ed_checkbox_label_shortcode');
    add_shortcode('checkbox', 'ed_checkbox_shortcode');
    add_shortcode('radio', 'ed_radio_shortcode');
    add_shortcode('radio-label', 'ed_radio_label_shortcode');
    add_shortcode('select', 'ed_select_shortcode');
    add_shortcode('tel', 'ed_tel_shortcode');
    add_shortcode('addon', 'ed_addon_shortcode');
    add_shortcode('input-group-btn', 'ed_input_group_btn_shortcode');
    add_shortcode('label', 'ed_label_shortcode');
    add_shortcode('help', 'ed_help_shortcode');
    add_shortcode('message', 'ed_message_shortcode');
    add_shortcode('author', 'ed_author_shortcode');
    add_shortcode('email', 'ed_email_shortcode');
    add_shortcode('submit', 'ed_submit_shortcode');
    add_shortcode('input-btn', 'ed_input_btn_shortcode');
    add_shortcode('cookies', 'ed_cookies_shortcode');
    add_shortcode('row', 'ed_row_shortcode');
    add_shortcode('col', 'ed_col_shortcode');
    add_shortcode('login', 'ed_login_shortcode');
    add_shortcode('logout', 'ed_logout_shortcode');
    add_shortcode('featured-label', 'ed_featured_label_shortcode');
    add_shortcode('badge', 'ed_badge_shortcode');
    add_shortcode('count', 'ed_count_shortcode');
    add_shortcode('post-link', 'ed_post_link_shortcode');
    add_shortcode('tax-link', 'ed_tax_link_shortcode');
    add_shortcode('tax-url', 'ed_tax_url_shortcode');
    add_shortcode('jumbotron', 'ed_jumbotron_shortcode');
    add_shortcode('page-header', 'ed_page_header_shortcode');
    add_shortcode('autothumb', 'ed_autothumb_shortcode');
    add_shortcode('progress', 'ed_progress_shortcode');
    add_shortcode('progress-bar', 'ed_progress_bar_shortcode');
    add_shortcode('list-group', 'ed_list_group_shortcode');
    add_shortcode('list-group-item', 'ed_list_group_item_shortcode');
    add_shortcode('table', 'ed_table_shortcode');
    add_shortcode('r-embed', 'ed_embed_shortcode');
    add_shortcode('well', 'ed_well_shortcode');
    add_shortcode('lead', 'ed_lead_shortcode');
    add_shortcode('left', 'ed_left_shortcode');
    add_shortcode('right', 'ed_right_shortcode');
    add_shortcode('center', 'ed_center_shortcode');
    add_shortcode('justify', 'ed_justify_shortcode');
    add_shortcode('lowercase', 'ed_lowercase_shortcode');
    add_shortcode('uppercase', 'ed_uppercase_shortcode');
    add_shortcode('capitalize', 'ed_capitalize_shortcode');
    add_shortcode('nowrap', 'ed_nowrap_shortcode');
    add_shortcode('initialism', 'ed_initialism_shortcode');
    add_shortcode('blockquote', 'ed_blockquote_shortcode');
    add_shortcode('mail', 'ed_mail_shortcode');
    add_shortcode('list-unstyled', 'ed_list_unstyled_shortcode');
    add_shortcode('list-inline', 'ed_list_inline_shortcode');
    add_shortcode('description-list', 'ed_description_list_shortcode');
    add_shortcode('muted', 'ed_muted_shortcode');
    add_shortcode('primary', 'ed_primary_shortcode');
    add_shortcode('success', 'ed_success_shortcode');
    add_shortcode('info', 'ed_info_shortcode');
    add_shortcode('warning', 'ed_warning_shortcode');
    add_shortcode('danger', 'ed_danger_shortcode');
    add_shortcode('bg-primary', 'ed_bg_primary_shortcode');
    add_shortcode('bg-success', 'ed_bg_success_shortcode');
    add_shortcode('bg-info', 'ed_bg_info_shortcode');
    add_shortcode('bg-warning', 'ed_bg_warning_shortcode');
    add_shortcode('bg-danger', 'ed_bg_danger_shortcode');
    add_shortcode('mark', 'ed_mark_shortcode');
    add_shortcode('counter', 'ed_counter_shortcode');
    add_shortcode('icon-counter', 'ed_icon_counter_shortcode');
    add_shortcode('feature', 'ed_feature_shortcode');
    add_shortcode('partner', 'ed_partner_shortcode');
    add_shortcode('map', 'ed_map_shortcode');
    add_shortcode('signed-in', 'ed_signed_in_shortcode');
    add_shortcode('signed-in-as', 'ed_signed_in_as_shortcode');
    add_shortcode('logged-in', 'ed_logged_in_shortcode');
    add_shortcode('logged-out', 'ed_logged_out_shortcode');
}

add_action('init', 'ed_shortcodes_init');

