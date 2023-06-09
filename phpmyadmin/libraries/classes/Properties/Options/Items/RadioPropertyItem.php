<?php

declare(strict_types=1);

namespace PhpMyAdmin\Properties\Options\Items;

use PhpMyAdmin\Properties\Options\OptionsPropertyOneItem;

/**
 * Single property item class of type radio
 */
class RadioPropertyItem extends OptionsPropertyOneItem
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
        return 'radio';
    }
}
