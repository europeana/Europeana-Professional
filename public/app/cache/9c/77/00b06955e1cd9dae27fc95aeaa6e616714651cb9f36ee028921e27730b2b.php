<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_9c7700b06955e1cd9dae27fc95aeaa6e616714651cb9f36ee028921e27730b2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                options.maxTries = options.maxTries || 0;
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 !== xhr.readyState) {
                        return null;
                    }

                    if (xhr.status == 404 && options.maxTries > 1) {
                        setTimeout(function(){
                            options.maxTries--;
                            request(url, onSuccess, onError, payload, options);
                        }, 500);

                        return null;
                    }

                    if (200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className && el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                if (el.className) {
                    el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
                }
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) {
                    el.className += \" \" + klass;
                }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        '',
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  75 => 28,  70 => 26,  62 => 24,  46 => 14,  26 => 3,  115 => 33,  107 => 32,  89 => 28,  77 => 25,  64 => 22,  39 => 11,  106 => 32,  102 => 30,  93 => 29,  80 => 23,  67 => 17,  58 => 15,  45 => 14,  453 => 154,  445 => 151,  442 => 150,  432 => 144,  429 => 143,  424 => 139,  416 => 134,  411 => 132,  408 => 131,  398 => 125,  395 => 124,  390 => 120,  384 => 116,  377 => 114,  371 => 113,  365 => 112,  361 => 111,  358 => 110,  355 => 109,  347 => 107,  344 => 106,  336 => 104,  334 => 103,  330 => 102,  327 => 101,  319 => 99,  316 => 98,  308 => 96,  305 => 95,  297 => 93,  294 => 92,  286 => 90,  284 => 89,  279 => 88,  275 => 86,  265 => 82,  261 => 81,  257 => 80,  254 => 79,  250 => 78,  245 => 77,  243 => 76,  240 => 75,  236 => 73,  231 => 71,  227 => 70,  223 => 69,  219 => 68,  215 => 67,  211 => 66,  207 => 65,  203 => 64,  199 => 63,  194 => 62,  191 => 61,  181 => 58,  176 => 57,  174 => 56,  160 => 51,  157 => 50,  151 => 49,  148 => 48,  145 => 47,  134 => 44,  125 => 28,  111 => 27,  108 => 26,  100 => 29,  95 => 22,  90 => 21,  85 => 27,  81 => 26,  76 => 21,  73 => 24,  50 => 15,  42 => 12,  23 => 3,  189 => 61,  183 => 59,  179 => 57,  175 => 56,  171 => 55,  167 => 52,  162 => 52,  156 => 49,  152 => 48,  146 => 45,  142 => 46,  137 => 45,  132 => 40,  128 => 39,  124 => 38,  119 => 35,  114 => 34,  110 => 33,  96 => 28,  88 => 26,  84 => 24,  79 => 29,  74 => 20,  71 => 19,  61 => 17,  56 => 15,  48 => 11,  40 => 10,  31 => 8,  65 => 24,  63 => 18,  54 => 14,  52 => 15,  41 => 8,  28 => 8,  24 => 2,  21 => 2,  19 => 1,  140 => 7,  138 => 6,  135 => 5,  131 => 33,  127 => 48,  105 => 25,  101 => 31,  97 => 30,  92 => 27,  87 => 20,  66 => 25,  49 => 19,  44 => 12,  37 => 7,  35 => 10,  32 => 6,  30 => 5,  25 => 4,  22 => 2,  20 => 1,);
    }
}
