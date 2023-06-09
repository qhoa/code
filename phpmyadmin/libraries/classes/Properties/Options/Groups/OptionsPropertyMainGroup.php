<?php

declare(strict_types=1);

namespace PhpMyAdmin\Properties\Options\Groups;

use PhpMyAdmin\Properties\Options\OptionsPropertyGroup;

/**
 * Group property item class of type main
 */
class OptionsPropertyMainGroup extends OptionsPropertyGroup
{
    /**
     * Returns the property item type of either an instance of
     *  - PhpMyAdmin\Properties\Options\OptionsPropertyOneItem ( f.e. "bool",
     *  "text", "radio", etc ) or
     *  - PhpMyAdmin\Properties\Options\OptionsPropertyGroup   ( "root", "main"
     *  or "subgroup" )
     *  - PhpMyAdmin\Properties\Plugins\PluginPropertyItem     ( "export", "import", "transformations" )
     */
    public function getItemType(): string
    {
        return 'main';
    }
}
