<?php
define('MODULE_LOYALTY_DISCOUNT_TITLE', 'Treue-Rabatt');
define('MODULE_LOYALTY_DISCOUNT_DESCRIPTION', 'Treue-Rabatt');
// -----
// %1$s is replaced by the discount percentage.
// %2$s is *conditionally* replaced by MODULE_LOYALTY_DISCOUNT_SHIPPING_TEXT or MODULE_LOYALTY_DISCOUNT_SHIPPING_WITH_TAX_TEXT, based on configuration
// %3$s is *conditionally* replaced by MODULE_LOYALTY_DISCOUNT_TAX_TEXT, based on configuration
//
define('MODULE_LOYALTY_DISCOUNT_INFO', 'Aufgrund Ihrer bisherigen Einkäufe bei uns erhalten Sie auf diese Bestellung einen Rabatt in Höhe von %1$s auf die Artikel%2$s%3$s.');
define('MODULE_LOYALTY_DISCOUNT_SHIPPING_TEXT', ' und Versandkosten');
define('MODULE_LOYALTY_DISCOUNT_SHIPPING_WITH_TAX_TEXT', ', Versandkosten');
define('MODULE_LOYALTY_DISCOUNT_TAX_TEXT', ' und zugehörige Steuern');