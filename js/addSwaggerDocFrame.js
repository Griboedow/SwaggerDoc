(function (mw, $) {
	//let iframe = document.getElementById('my-iframe').document.body;
	// Setup the config
	//let config = { attributes: true, childList: true };
	// Create a callback
	//let callback = function(mutationsList) { /* callback actions */ });

	// Watch the iframe for changes
	//let observer = new MutationObserver(callback);
	//observer.observe(iframe, config)
	swaggerContainer = $('#swagger-ui-doc-container');
	if (swaggerContainer) {
		var url = swaggerContainer.attr('dataUrl');
		var urls = swaggerContainer.attr('dataUrls');
		if (url) {
			const ui = SwaggerUIBundle({
				url: url,
				dom_id: '#swagger-ui-doc-container',
				defaultModelsExpandDepth: -1,
				deepLinking: true,
				validatorUrl: null,
				presets: [
					SwaggerUIBundle.presets.apis,
					SwaggerUIStandalonePreset
				],
				plugins: [
					SwaggerUIBundle.plugins.DownloadUrl
				],
				layout: "StandaloneLayout"
			});
		} else if (urls) {
			const ui = SwaggerUIBundle({
				urls: JSON.parse(urls),
				dom_id: '#swagger-ui-doc-container',
				defaultModelsExpandDepth: -1,
				deepLinking: true,
				validatorUrl: null,
				presets: [
					SwaggerUIBundle.presets.apis,
					SwaggerUIStandalonePreset
				],
				plugins: [
					SwaggerUIBundle.plugins.DownloadUrl
				],
				layout: "StandaloneLayout"
			});
		}

	}

}(mediaWiki, jQuery));

