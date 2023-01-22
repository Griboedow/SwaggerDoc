(function (mw, $) {
	swaggerContainer = $('#swagger-ui-doc-container');
	if (!swaggerContainer) return;

	swagger_ui_params = {
		dom_id: '#swagger-ui-doc-container',
		deepLinking: true,
		presets: [
			SwaggerUIBundle.presets.apis,
			SwaggerUIStandalonePreset
		],
		plugins: [
			SwaggerUIBundle.plugins.DownloadUrl
		],
		layout: "StandaloneLayout"
	}

	var url = swaggerContainer.attr('dataUrl');
	if (url) {
		swagger_ui_params['url'] = url
		window.ui = SwaggerUIBundle(swagger_ui_params);
		return
	}
	
	var urls = swaggerContainer.attr('dataUrls');
	if (urls) {
		swagger_ui_params['urls'] = urls
		window.ui = SwaggerUIBundle(swagger_ui_params);
		return
	}

}(mediaWiki, jQuery));

