<?php
/**
 * Language Pack Maker
 *
 * Run the Language Pack Maker from the browser.
 *
 * @package   Language_Pack_Maker
 * @author    Andy Fragen
 * @license   MIT
 * @link      https://github.com/afragen/language-pack-maker
 * @version   1.3.3
 */

require_once __DIR__ . '/src/Language_Pack_Maker.php';

echo "<pre>\n";
echo ">>Generating Language Pack Zip Files and JSON file<<\n\n";
( new Fragen\Language_Pack_Maker\Language_Pack_Maker() )->run();
echo "</pre>\n";
