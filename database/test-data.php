<?php

global $test_data;

$test_data = [];

$test_data['apps'] = [
    'amarok' => [
        'package' => 'amarok',
        'name' => 'Amarok',
        'icon' => '/img/icon/amarok.png',
        'version' => '41.0.1',
        'brief_desc' => 'Rediscover your music',
        'developer' => 'The Amarok Team',
        'start' => '2002',
        'license' => 'GNU General Public License',
        'license_url' => 'http://www.gnu.org/licenses/gpl-2.0.txt',
        'rate' => 4.7,
        'tags' => [
            'audio' => 'Audio',
            'audio-player' => 'Audio Player',
            'music-management' => 'Music Management',
        ],
        'install_uri' => 'install:amarok',
        'project_url' => 'https://www.mozilla.org/firefox/desktop/',
        'download_url' => 'https://www.mozilla.org/firefox/desktop/',
        'source_code_url' => 'https://developer.mozilla.org/en-US/docs/Mozilla/Developer_guide/Source_Code/Downloading_Source_Archives',
        'donate_url' => 'https://sendto.mozilla.org/',
        'support_url' => 'https://support.mozilla.org/products/firefox',
        'bug_report_url' => 'https://bugzilla.mozilla.org/',
        'document_url' => 'https://www.mozilla.org/firefox/desktop/',
    ],
    'vlc' => [
        'package' => 'vlc',
        'name' => 'VLC',
        'icon' => '/img/icon/vlc.png',
        'version' => '41.0',
        'brief_desc' => 'VLC is a free and open source cross-platform multimedia player and framework that plays most multimedia files as well as DVDs, Audio CDs, VCDs, and various streaming protocols. ',
        'developer' => 'VideoLan Organization',
        'start' => '2002',
        'license' => 'Mozilla Public License',
        'license_url' => 'https://www.mozilla.org/en-US/MPL/2.0/',
        'rate' => 4.7,
        'tags' => [
            'internet' => 'Internet',
            'web-browser' => 'Web Browser',
        ],
        'install_uri' => 'install:vlc',
        'project_url' => 'http://www.videolan.org/vlc/',
        'download_url' => 'http://www.videolan.org/vlc/#download',
        'source_code_url' => 'http://www.videolan.org/vlc/download-sources.html',
        'donate_url' => 'http://www.videolan.org/contribute.html#money',
        'support_url' => 'http://www.videolan.org/support/',
        'bug_report_url' => 'https://trac.videolan.org/vlc/',
        'document_url' => 'https://wiki.videolan.org/',
    ],
    'firefox' => [
        'package' => 'firefox',
        'name' => 'Firefox',
        'icon' => '/img/icon/firefox.png',
        'version' => '41.0.1',
        'brief_desc' => 'Personalized, powerful, safe and fast web browser',
        'developer' => 'Mozilla',
        'start' => '2002',
        'license' => 'Mozilla Public License',
        'license_url' => 'https://www.mozilla.org/en-US/MPL/2.0/',
        'rate' => 4.3,
        'tags' => [
            'internet' => 'Internet',
            'web-browser' => 'Web Browser',
        ],
        'install_uri' => 'install:firefox&debian=iceweasel&opensuse=MozillaFirefox',
        'project_url' => 'https://www.mozilla.org/firefox/desktop/',
        'download_url' => 'https://www.mozilla.org/firefox/desktop/',
        'source_code_url' => 'https://developer.mozilla.org/en-US/docs/Mozilla/Developer_guide/Source_Code/Downloading_Source_Archives',
        'donate_url' => 'https://sendto.mozilla.org/',
        'support_url' => 'https://support.mozilla.org/products/firefox',
        'bug_report_url' => 'https://bugzilla.mozilla.org/',
        'document_url' => 'https://www.mozilla.org/firefox/desktop/',
    ],
    'eclipse' => [
        'package' => 'vlc',
        'name' => 'VLC',
        'icon' => '/img/icon/vlc.png',
        'version' => '41.0',
        'brief_desc' => ' VLC is a free and open source cross-platform multimedia player and framework that plays most multimedia files as well as DVDs, Audio CDs, VCDs, and various streaming protocols. ',
        'developer' => 'VideoLan Organization',
        'start' => '2002',
        'license' => 'Mozilla Public License',
        'license_url' => 'https://www.mozilla.org/en-US/MPL/2.0/',
        'rate' => 4.7,
        'tags' => [
            'internet' => 'Internet',
            'web-browser' => 'Web Browser',
        ],
        'install_uri' => 'install:vlc',
        'project_url' => 'http://www.videolan.org/vlc/',
        'download_url' => 'http://www.videolan.org/vlc/#download',
        'source_code_url' => 'http://www.videolan.org/vlc/download-sources.html',
        'donate_url' => 'http://www.videolan.org/contribute.html#money',
        'support_url' => 'http://www.videolan.org/support/',
        'bug_report_url' => 'https://trac.videolan.org/vlc/',
        'document_url' => 'https://wiki.videolan.org/',
    ],
    'kdenlive' => [
        'package' => 'firefox',
        'name' => 'Firefox',
        'icon' => '/img/icon/firefox.png',
        'version' => '41.0.1',
        'brief_desc' => 'Personalized, powerful, safe and fast web browser',
        'developer' => 'Mozilla',
        'start' => '2002',
        'license' => 'Mozilla Public License',
        'license_url' => 'https://www.mozilla.org/en-US/MPL/2.0/',
        'rate' => 4.3,
        'tags' => [
            'internet' => 'Internet',
            'web-browser' => 'Web Browser',
        ],
        'install_uri' => 'install:firefox&debian=iceweasel&opensuse=MozillaFirefox',
        'project_url' => 'https://www.mozilla.org/firefox/desktop/',
        'download_url' => 'https://www.mozilla.org/firefox/desktop/',
        'source_code_url' => 'https://developer.mozilla.org/en-US/docs/Mozilla/Developer_guide/Source_Code/Downloading_Source_Archives',
        'donate_url' => 'https://sendto.mozilla.org/',
        'support_url' => 'https://support.mozilla.org/products/firefox',
        'bug_report_url' => 'https://bugzilla.mozilla.org/',
        'document_url' => 'https://www.mozilla.org/firefox/desktop/',
    ],
    'kile' => [
        'package' => 'kile',
        'name' => 'Kile',
        'icon' => '/img/icon/kile.png',
        'version' => '41.0',
        'brief_desc' => ' VLC is a free and open source cross-platform multimedia player and framework that plays most multimedia files as well as DVDs, Audio CDs, VCDs, and various streaming protocols. ',
        'developer' => 'VideoLan Organization',
        'start' => '2002',
        'license' => 'Mozilla Public License',
        'license_url' => 'https://www.mozilla.org/en-US/MPL/2.0/',
        'rate' => 4.7,
        'tags' => [
            'internet' => 'Internet',
            'web-browser' => 'Web Browser',
        ],
        'install_uri' => 'install:vlc',
        'project_url' => 'http://www.videolan.org/vlc/',
        'download_url' => 'http://www.videolan.org/vlc/#download',
        'source_code_url' => 'http://www.videolan.org/vlc/download-sources.html',
        'donate_url' => 'http://www.videolan.org/contribute.html#money',
        'support_url' => 'http://www.videolan.org/support/',
        'bug_report_url' => 'https://trac.videolan.org/vlc/',
        'document_url' => 'https://wiki.videolan.org/',
    ],
    'librecad' => [
        'package' => 'librecad',
        'name' => 'LibreCAD',
        'icon' => '/img/icon/librecad.png',
        'version' => '41.0.1',
        'brief_desc' => 'Personalized, powerful, safe and fast web browser',
        'developer' => 'Mozilla',
        'start' => '2002',
        'license' => 'Mozilla Public License',
        'license_url' => 'https://www.mozilla.org/en-US/MPL/2.0/',
        'rate' => 4.3,
        'tags' => [
            'internet' => 'Internet',
            'web-browser' => 'Web Browser',
        ],
        'install_uri' => 'install:firefox&debian=iceweasel&opensuse=MozillaFirefox',
        'project_url' => 'https://www.mozilla.org/firefox/desktop/',
        'download_url' => 'https://www.mozilla.org/firefox/desktop/',
        'source_code_url' => 'https://developer.mozilla.org/en-US/docs/Mozilla/Developer_guide/Source_Code/Downloading_Source_Archives',
        'donate_url' => 'https://sendto.mozilla.org/',
        'support_url' => 'https://support.mozilla.org/products/firefox',
        'bug_report_url' => 'https://bugzilla.mozilla.org/',
        'document_url' => 'https://www.mozilla.org/firefox/desktop/',
    ],
    'libreoffice' => [
        'package' => 'libreoffice',
        'name' => 'LibreOffice',
        'icon' => '/img/icon/libreoffice.png',
        'version' => '41.0',
        'brief_desc' => 'VLC is a free and open source cross-platform multimedia player and framework that plays most multimedia files as well as DVDs, Audio CDs, VCDs, and various streaming protocols. ',
        'developer' => 'VideoLan Organization',
        'start' => '2002',
        'license' => 'Mozilla Public License',
        'license_url' => 'https://www.mozilla.org/en-US/MPL/2.0/',
        'rate' => 4.7,
        'tags' => [
            'internet' => 'Internet',
            'web-browser' => 'Web Browser',
        ],
        'install_uri' => 'install:vlc',
        'project_url' => 'http://www.videolan.org/vlc/',
        'download_url' => 'http://www.videolan.org/vlc/#download',
        'source_code_url' => 'http://www.videolan.org/vlc/download-sources.html',
        'donate_url' => 'http://www.videolan.org/contribute.html#money',
        'support_url' => 'http://www.videolan.org/support/',
        'bug_report_url' => 'https://trac.videolan.org/vlc/',
        'document_url' => 'https://wiki.videolan.org/',
    ],
];

$test_data['screenshots'] = [
    '/img/screenshot/blender.jpg',
    '/img/screenshot/calibre.png',
    '/img/screenshot/eclipse.png',
    '/img/screenshot/freecad.jpg',
    '/img/screenshot/gimp.png',
    '/img/screenshot/inkscape.png',
    '/img/screenshot/libreoffice.png',
];

$test_data['reviews'] = [
    [
        'app' => [
            'package' => 'telegram',
            'name' => 'Telegram',
            'icon' => 'img/icon/telegram.png',
        ],
        'user' => [
            'name' => 'BoomV5',
            'avatar' => 'http://lorempixel.com/64/64/people/2/',
        ],
        'rate' => 4,
        'vote' => 198,
        'date' => '23 Sep 2015',
        'title' => 'Maecenas viverra',
        'content' => 'Morbi quis nisi sed est rhoncus elementum consectetur id lorem. Proin id orci dapibus risus varius finibus. Morbi sit amet eros eu mi semper posuere. Maecenas viverra, metus ac hendrerit pellentesque, augue risus egestas turpis, at posuere neque odio ac ipsum. Curabitur vel eros id nulla sollicitudin posuere. Praesent odio elit, ullamcorper nec eros aliquam, ultricies dignissim diam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras eu nisi ornare, consectetur enim at, eleifend massa.',
    ], [
        'app' => [
            'package' => 'scilab',
            'name' => 'Scilab',
            'icon' => 'img/icon/scilab.png',
        ],
        'user' => [
            'name' => 'Kaka',
            'avatar' => 'http://lorempixel.com/64/64/people/3/',
        ],
        'rate' => 4,
        'vote' => 198,
        'date' => '23 Sep 2015',
        'title' => 'Aliquam sed purus vel felis hendrerit euismod',
        'content' => 'Maecenas eget ligula diam. Aliquam sed purus vel felis hendrerit euismod. Nulla sit amet erat ipsum. Aliquam venenatis elementum tellus, id iaculis diam elementum non. Fusce elementum lectus ultrices, iaculis justo vitae, ultrices lectus. Integer sagittis orci non imperdiet imperdiet. Nam erat mi, pharetra at elit eu, sollicitudin convallis ante.',
    ], [
        'app' => [
            'package' => 'telegram',
            'name' => 'Telegram',
            'icon' => 'img/icon/telegram.png',
        ],
        'user' => [
            'name' => 'Sand Tiger',
            'avatar' => 'http://lorempixel.com/64/64/people/4/',
        ],
        'rate' => 4,
        'vote' => 198,
        'date' => '23 Sep 2015',
        'title' => 'Morbi quis nisi sed est rhoncus elementum',
        'content' => 'Morbi quis nisi sed est rhoncus elementum consectetur id lorem. Proin id orci dapibus risus varius finibus. Morbi sit amet eros eu mi semper posuere. Maecenas viverra, metus ac hendrerit pellentesque, augue risus egestas turpis, at posuere neque odio ac ipsum. Curabitur vel eros id nulla sollicitudin posuere. Praesent odio elit, ullamcorper nec eros aliquam, ultricies dignissim diam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras eu nisi ornare, consectetur enim at, eleifend massa.',
    ], [
        'app' => [
            'package' => 'scilab',
            'name' => 'Scilab',
            'icon' => 'img/icon/scilab.png',
        ],
        'user' => [
            'name' => 'Kaka',
            'avatar' => 'http://lorempixel.com/64/64/people/3/',
        ],
        'rate' => 4,
        'vote' => 198,
        'date' => '23 Sep 2015',
        'title' => 'Maecenas eget ligula diam',
        'content' => 'Maecenas eget ligula diam. Aliquam sed purus vel felis hendrerit euismod. Nulla sit amet erat ipsum. Aliquam venenatis elementum tellus, id iaculis diam elementum non. Fusce elementum lectus ultrices, iaculis justo vitae, ultrices lectus. Integer sagittis orci non imperdiet imperdiet. Nam erat mi, pharetra at elit eu, sollicitudin convallis ante.',
    ], [
        'app' => [
            'package' => 'telegram',
            'name' => 'Telegram',
            'icon' => 'img/icon/telegram.png',
        ],
        'user' => [
            'name' => 'BoomV5',
            'avatar' => 'http://lorempixel.com/64/64/people/2/',
        ],
        'rate' => 4,
        'vote' => 198,
        'date' => '23 Sep 2015',
        'title' => 'Proin id orci dapibus risus varius finibus',
        'content' => 'Morbi quis nisi sed est rhoncus elementum consectetur id lorem. Proin id orci dapibus risus varius finibus. Morbi sit amet eros eu mi semper posuere. Maecenas viverra, metus ac hendrerit pellentesque, augue risus egestas turpis, at posuere neque odio ac ipsum. Curabitur vel eros id nulla sollicitudin posuere. Praesent odio elit, ullamcorper nec eros aliquam, ultricies dignissim diam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras eu nisi ornare, consectetur enim at, eleifend massa.',
    ],
];