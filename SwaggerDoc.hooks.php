<?php

/**
 * Hooks for SwaggerDoc extension
 *
 * @file
 * @ingroup Extensions
 */

class SwaggerDocHooks
{
	public static function onBeforeHtmlAddedToOutput( OutputPage &$out, ParserOutput $parserOutput ) {
		$out->addModules( 'ext.SwaggerDoc.init' );
		return true;
	}

	public static function onParserSetup( Parser $parser ) {
		$parser->setHook( 'SwaggerDoc', 'SwaggerDocHooks::processSwaggerDocTag' );
		return true;
	}

	public static function processSwaggerDocTag($input, array $args, Parser $parser, PPFrame $frame)
	{
		// Parse arg for single URL spec
		if (isset($args['specUrl'])) {
			$specUrl = $args['specUrl'];
		} else {
			$specUrl = '';
		}

		// Parse arg for multiple URLs spec
		if (isset($args['specUrls'])) {
			$specUrls = str_replace("'", '"', $args['specUrls']);
		} else {
			$specUrls = '';
		}

		// Add div which will be processed on frontend
		$outHtml = '<div';
		$outHtml = $outHtml . ' class="swagger-iframe-container" ';
		$outHtml = $outHtml . ' id="swagger-ui-doc-container" '; 
		if ( strlen ( $specUrl ) > 0 ){
			$outHtml = $outHtml . ' dataUrl  = \'' . $specUrl  . '\' ';
		}
		if ( strlen ( $specUrls ) > 0 ){
			$outHtml = $outHtml . ' dataUrls = \'' . $specUrls . '\' ';
		}
		$outHtml = $outHtml . ' ></div>';
		return $outHtml;
	}
}
