<?php

define("MANUAL_CONSTANTES", [
	'PHP_VERSION'=>PHP_VERSION,
	'PHP_MAJOR_VERSION'=>PHP_MAJOR_VERSION,
	'PHP_MINOR_VERSION'=>PHP_MINOR_VERSION,
	'PHP_RELEASE_VERSION'=>PHP_RELEASE_VERSION,
	'PHP_VERSION_ID'=>PHP_VERSION_ID,
	'PHP_EXTRA_VERSION'=>PHP_EXTRA_VERSION,
	'PHP_ZTS'=>PHP_ZTS,
	'PHP_DEBUG'=>PHP_DEBUG,
	'PHP_OS'=>PHP_OS,
	'PHP_OS_FAMILY'=>PHP_OS_FAMILY,
	'PHP_SAPI'=>PHP_SAPI,
	'PHP_EOL'=>PHP_EOL,
	'PHP_INT_MAX'=>PHP_INT_MAX,
	'PHP_INT_MIN'=>PHP_INT_MIN,
	'PHP_INT_SIZE'=>PHP_INT_SIZE,
	'PHP_FLOAT_DIG'=>PHP_FLOAT_DIG,
	'PHP_FLOAT_EPSILON'=>PHP_FLOAT_EPSILON,
	'PHP_FLOAT_MIN'=>PHP_FLOAT_MIN,
	'PHP_FLOAT_MAX'=>PHP_FLOAT_MAX,
	'DEFAULT_INCLUDE_PATH'=>DEFAULT_INCLUDE_PATH,
	'PEAR_INSTALL_DIR'=>PEAR_INSTALL_DIR,
	'PEAR_EXTENSION_DIR'=>PEAR_EXTENSION_DIR,
	'PHP_BINDIR'=>PHP_BINDIR,
	'PHP_BINARY'=>PHP_BINARY,
	'PHP_LIBDIR'=>PHP_LIBDIR,
	'PHP_DATADIR'=>PHP_DATADIR,
	'PHP_SYSCONFDIR'=>PHP_SYSCONFDIR,
	'PHP_LOCALSTATEDIR'=>PHP_LOCALSTATEDIR,
	'PHP_CONFIG_FILE_PATH'=>PHP_CONFIG_FILE_PATH,
	'PHP_CONFIG_FILE_SCAN_DIR'=>PHP_CONFIG_FILE_SCAN_DIR,
	'PHP_SHLIB_SUFFIX'=>PHP_SHLIB_SUFFIX,
	'PHP_FD_SETSIZE'=>PHP_FD_SETSIZE,
	'E_ERROR'=>E_ERROR,
	'E_WARNING'=>E_WARNING,
	'E_PARSE'=>E_PARSE,
	'E_NOTICE'=>E_NOTICE
]);

foreach (MANUAL_CONSTANTES as $key => $value) {
echo '<span style="color: #aaa">'.$key.': </span>'.
	 '<span style="color: #f00">'.$value.
	 '</span><br/>';
}

?>