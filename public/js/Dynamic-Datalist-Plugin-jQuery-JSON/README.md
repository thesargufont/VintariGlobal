# jquery-json-to-datalist
This jQuery plugin will get data in a JSON file and create datalist after a input field.


# How to use this plugin ?

First add class and list attributes on the field.

Add JSON path directly on the field with data option or in the plugin with Javascript.

```
$('.js-combobox').jsonToDatalist();
```



## JSON path with data

```
<input type="text" name="input-autocompletion-json" id="input-autocompletion-json" value=""
                   class="js-combobox"
                   list="vegetables"
                   data-json-path="vegetables-sample.json"
>
```

## JSON path with JS

```
$('.js-combobox').jsonToDatalist({
    jsonPath: 'fruits-sample.json'
});
```

## Callback
This plugin has a callback function to call other plugin.

```
$('.js-combobox').jsonToDatalist({
    jsonPath: 'fruits-sample.json',
    callback: function(obj) {
        // Here the code
    }
});
```

## JSON sample

```
[
    {
        "name": "Apple"
    },
    {
        "name": "Apricot"
    },
    {
        "name": "Banana"
    },
    {
        "name": "Blackberry"
    },
    {
        "name": "Blueberry"
    },
    {
        "name": "Cherry"
    }
]
```