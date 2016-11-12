var page = require('webpage').create();
page.settings.javascriptEnabled = true;
page.settings.resourceTimeout = {{ $timeout }};
page.viewportSize = { width: {{ $width }}, height: {{ ($height > 0) ? $height : 1 }} };

page.open('{{ $uri }}', function() {
    if ({{ $backgroundColor ? "true" : "false" }}) {
        page.evaluate(function() {
            var style = document.createElement('style'),
                text = document.createTextNode('body { background: {{ $backgroundColor }} }');
            style.setAttribute('type', 'text/css');
            style.appendChild(text);

            document.head.insertBefore(style, document.head.firstChild);
        });
    }

    window.setTimeout(function(){
        page.render('{{ $targetFile }}');
        phantom.exit();
    }, {{ $timeout }});
});
