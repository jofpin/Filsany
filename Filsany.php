<?php
/**
 * Filsany
 *
 * Sanitize Filter Cross-site scripting XSS Clean.
 *
 * @author Jose Pino (Fraph) / @Fr4phc0r3
 *
 */
function Filsany($aXSS) {
    $aXSS = str_replace("&", "&amp;", $aXSS);
    $aXSS = str_replace(":", "&#58;", $aXSS);
    $aXSS = str_replace(";", "&#59;", $aXSS);
    $aXSS = str_replace("/", "&#47;", $aXSS);
    $aXSS = str_replace(">", "&#62;", $aXSS);
    $aXSS = str_replace("<", "&#60;", $aXSS);
    $aXSS = str_replace("'", "&#39;", $aXSS);
    $aXSS = str_replace("-", "&#45;", $aXSS);
    $aXSS = str_replace("_", "&#95;", $aXSS);
    $aXSS = str_replace("=", "&#61;", $aXSS);
    $aXSS = str_replace("(", "&#40;", $aXSS);
    $aXSS = str_replace(")", "&#41;", $aXSS);
    return $aXSS;
}

function FilsanyClean($aXSS) {
	$aXSS = str_replace('document.cookie', '[cleanxss]', $aXSS);
	$aXSS = str_replace('document.domain', '[cleanxss]', $aXSS);
	$aXSS = str_replace('document.write', '[cleanxss]', $aXSS);
	$aXSS = str_replace('.parentNode', '[cleanxss]', $aXSS);
	$aXSS = str_replace('.innerHTML', '[cleanxss]', $aXSS);
	$aXSS = str_replace('<![CDATA[', '&lt;![CDATA[', $aXSS);
	$aXSS = str_replace('<comment>', '&lt;comment&gt;', $aXSS);
	$aXSS = str_replace('<script>', '&#60;script&#62;', $aXSS);
	$aXSS = str_replace('<!--', '&lt;!--', $aXSS);
	$aXSS = str_replace('-->', '--&gt;', $aXSS);
	return $aXSS;
}
?>
