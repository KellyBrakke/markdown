<?php

/*
 * This file is part of Flarum.
 *
 * For detailed copyright and license information, please view the
 * LICENSE file that was distributed with this source code.
 */

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js')
        ->css(__DIR__.'/less/forum.less'),

    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->Litedown;
            $config->tags['ispoiler']->template = '<span class="spoiler" data-s9e-livepreview-ignore-attrs="style" onclick="removeAttribute(\'style\'); removeAttribute(\'class\')" style="background:#444;color:transparent"><xsl:apply-templates/></span>';
        })
];
