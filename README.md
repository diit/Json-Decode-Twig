# JSON Decode Twig Filter <small>_for Craft CMS_</small>

Adds a json_decode filter to your toolkit.

## Example Use

Add extra data to fields like multiselect, in this example add icons from multiple sources.

```php
{{ forms.multiselect({
	label: "Example Icons"|t,
	id: 'icons',
	name: 'icons',
	value: example.icons,
	errors: example.getErrors('icons'),
	required: true,
	options: [
		{
			label: 'Camping',
			value: '{ "type":"svg", "class":"camping" }'
		},{
			label: 'Adventure',
			value: '{ "type":"maki", "class":"maki-pitch" }'
		},{
			label: 'Beach',
			value: '{ "type":"maki", "class":"maki-swimming" }'
		},{
			label: 'Mountain',
			value: '{ "type":"svg", "class":"mountain" }'
		}
	]
}) }}
```

```php
<div class="example__icons">
	{% for rawicon in examplePlugin.icons %}
	{% set icon = rawicon | json_decode %}
	{% if icon.type == 'maki' %}
	<span class="{{ icon.class }}"></span>
	{% elseif icon.type == 'svg' %}
	{{ SVGicons.outdoor(icon.class) }}
	{% endif %}
	{% endfor %}
</div>
```

## Options

By default `json_decode` outputs an object but you can also output an associative array by passing `true` as a parameter value to the filter.

```php
{% set icon = rawicon | json_decode(true)  %} 
```

[Dale Inverarity](http://dale.wtf/) © 2015 - All rights reserved
