# SwaggerDoc
Mediawiki extension to provide swagger ui frontend for any swagger specification 

To install, clone the extension and add to **LocalSettings.php**:

```php
wfLoadExtension( 'SwaggerDoc' );
```

# Usage
To use it, you need to 
- Create a wikipage (for example, **MySwaggerJsonSpec** page) with swagger spec (json file). You may also want to change wikipage schema to JSON but that is not mandatory
- On another wikipage insert Swagger doc with either **specUrl** or **specUrls** arguments:

```html
{{#tag:SwaggerDoc||specUrls=[{'url': 'http://MyWiki/index.php/MySwaggerJsonSpec?action=raw', 'name': 'My swagger spec'}]}}
```

```html
{{#tag:SwaggerDoc||specUrl=http://MyWiki/index.php/MySwaggerJsonSpec?action=raw}}
```

- Save page and refresh it. You will see:
![Capture](https://user-images.githubusercontent.com/4194526/151668487-2ec107d3-befa-4f6c-9efc-c08286d9441d.PNG)
