# SwaggerDoc

[Mediawiki extension](https://www.mediawiki.org/wiki/Extension:SwaggerDoc) to provide swagger ui frontend for any swagger specification.

To install, clone the extension and add to **LocalSettings.php**:

```php
wfLoadExtension('SwaggerDoc');
```

# Usage

To use it, you need to
- Create a wikipage (for example, **MySwaggerJsonSpec** page) with swagger spec (json file). You may also want to change wikipage schema to JSON but that is not mandatory
  - Alternatively, you can upload your spec as a file 
- On another wikipage insert Swagger doc tag with either **specUrl** or **specUrls** arguments. <br/><br/> Please note that URL should be a link to the raw JSON (not to a page containing it); typically that is achievable by adding ```?action=raw``` to the URL:

```html
<SwaggerDoc specUrls="[{'url': 'http://MyWiki/index.php/MySwaggerJsonSpec?action=raw', 'name': 'My swagger spec'}]" />
```

```html
<SwaggerDoc specUrl="http://MyWiki/index.php/MySwaggerJsonSpec?action=raw" />
```

- Save page and refresh it. You will see:
![Capture](https://user-images.githubusercontent.com/4194526/151668487-2ec107d3-befa-4f6c-9efc-c08286d9441d.PNG)
