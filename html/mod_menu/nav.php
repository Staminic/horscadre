<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_menu
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$id = '';

if ($tagId = $params->get('tag_id', ''))
{
	$id = ' id="' . $tagId . '"';
}

// The menu class is deprecated. Use nav instead
?>
<nav class="nav menu<?php echo $class_sfx; ?> mod-list"<?php echo $id; ?>>
<?php foreach ($list as $i => &$item)
{
	$class = 'nav-item item-' . $item->id;

	if ($item->id == $default_id)
	{
		$class .= ' default';
	}

	if ($item->id == $active_id || ($item->type === 'alias' && $item->params->get('aliasoptions') == $active_id))
	{
		$class .= ' current';
	}

	if (in_array($item->id, $path))
	{
		$class .= ' active';
	}
	elseif ($item->type === 'alias')
	{
		$aliasToId = $item->params->get('aliasoptions');

		if (count($path) > 0 && $aliasToId == $path[count($path) - 1])
		{
			$class .= ' active';
		}
		elseif (in_array($aliasToId, $path))
		{
			$class .= ' alias-parent-active';
		}
	}

	if ($item->type === 'separator')
	{
		$class .= ' divider';
	}

	if ($item->deeper)
	{
		$class .= ' deeper';
	}

	if ($item->parent)
	{
		$class .= ' parent';
	}

	// echo '<div class="' . $class . '">';

	switch ($item->type) :
		case 'separator':
		case 'component':
		case 'heading':
		case 'url':
			require JModuleHelper::getLayoutPath('mod_menu', 'nav_' . $item->type);
			break;

		default:
			require JModuleHelper::getLayoutPath('mod_menu', 'nav_url');
			break;
	endswitch;

	// The next item is deeper.
	// if ($item->deeper)
	// {
	// 	echo '<nav class="dropdown-menu shadow-lg" aria-labelledby="navbarDropdown'.$item->id.'">';
	// }
	// The next item is shallower.
	// elseif ($item->shallower)
	// {
	// 	echo '</div>';
	// 	echo str_repeat('</nav></div>', $item->level_diff);
	// }
	// The next item is on the same level.
	// else
	// {
	// 	echo '</div>';
	// }
}
?>
<a class="nav-item nav-link"></a>
</nav>
