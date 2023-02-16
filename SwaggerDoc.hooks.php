<?php

/**
 * Hooks for SwaggerDoc extension
 *
 * @file
 * @ingroup Extensions
 */

class SwaggerDocHooks
{
	public static function onParserSetup(Parser $parser)
	{
		$parser->setHook('SwaggerDoc', 'SwaggerDocHooks::processSwaggerDocTag');
		return true;
	}

	public static function processSwaggerDocTag($input, array $args, Parser $parser, PPFrame $frame)
	{
		// Parse arg for single URL spec
		if (isset($args['specurl']))
			$specUrl = $args['specurl'];
		elseif (isset($args['specUrl']))
			$specUrl = $args['specUrl'];
		else
			$specUrl = '';

		// Parse arg for multiple URLs spec
		if (isset($args['specurls']))
			$specUrls = str_replace("'", '"', $args['specurls']);
		elseif (isset($args['specUrls']))
			$specUrls = str_replace("'", '"', $args['specUrls']);
		else
			$specUrls = '';

		$parser->getOutput()->addModules('ext.SwaggerDoc.init');

		// Add div which will be processed on frontend
		$outHtml = '<div';
		$outHtml = $outHtml . ' class="swagger-iframe-container" ';
		$outHtml = $outHtml . ' id="swagger-ui-doc-container" ';
		if ($specUrl !== "")
			$outHtml = $outHtml . ' dataUrl=\'' . $specUrl  . '\' ';
		if ($specUrls !== "")
			$outHtml = $outHtml . ' dataUrls=\'' . $specUrls . '\' ';
		$outHtml = $outHtml . ' ></div>';
		return $outHtml;
	}
}
