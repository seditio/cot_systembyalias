<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=page.main
[END_COT_EXT]
==================== */

/**
 * @package systembyalias
 * @version 1.00b
 * @author Andrey 'Macik' Matsovkin / Dmitri 'Kort' Beliavski
 * @copyright 2016-2023 Cotonti Team
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL');

$mskin = cot_tplfile($cat['path'] == 'system' ? array('page', 'system', $al) : array('page', $cat['tpl']));
