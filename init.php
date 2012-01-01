<?php
/**
 * Epicsax plugin for CandyCane.
 * This is an example of plugin.
 */


/**
 * Injecting specific template before or after a templete.
 */
$hookContainer = ClassRegistry::getObject('HookContainer');
$hookContainer->registerElementHook(
	'news', // target element name.
	'../../plugins/cc_epicsax/views/elements/epicsax', // additional template you want to inject.
	true // it should be true when you want to inject before the target template.
);

/**
 * register plugin information into container
 */
$pluginContainer = ClassRegistry::getObject('PluginContainer');
$pluginContainer->installed('cc_epicsax','0.1');