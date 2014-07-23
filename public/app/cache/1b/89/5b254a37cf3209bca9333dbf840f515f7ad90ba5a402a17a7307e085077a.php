<?php

/* _sub_edittaxonomies.twig */
class __TwigTemplate_1b895b254a37cf3209bca9333dbf840f515f7ad90ba5a402a17a7307e085077a extends Twig_Template
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
        echo "
";
        // line 3
        if ($this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "taxonomy", array(), "any", true, true)) {
            // line 4
            echo "
    <h3>
        ";
            // line 6
            echo $this->env->getExtension('Bolt')->trans("Taxonomy");
            echo "
        <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
            // line 7
            echo $this->env->getExtension('Bolt')->trans("Taxonomy");
            echo "\"
                  data-content=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "translator"), "trans", array(0 => "info.taxonomy", 1 => array(), 2 => "infos"), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Bolt')->trans("Info");
            echo "</span>
    </h3>

";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : $this->getContext($context, "contenttype")), "taxonomy"));
            foreach ($context['_seq'] as $context["_key"] => $context["taxonomyslug"]) {
                // line 12
                echo "
    ";
                // line 13
                if ($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "taxonomy"), "method", false, true), (isset($context["taxonomyslug"]) ? $context["taxonomyslug"] : $this->getContext($context, "taxonomyslug")), array(), "array", true, true)) {
                    // line 14
                    echo "
        ";
                    // line 15
                    $context["taxonomy"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "get", array(0 => "taxonomy"), "method"), (isset($context["taxonomyslug"]) ? $context["taxonomyslug"] : $this->getContext($context, "taxonomyslug")), array(), "array");
                    // line 16
                    echo "

        ";
                    // line 19
                    echo "
        ";
                    // line 20
                    if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "behaves_like") == "tags")) {
                        // line 21
                        echo "
            <label for='taxonomy-";
                        // line 22
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug"), "html", null, true);
                        echo "'><b><span class='left'>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "name")), "html", null, true);
                        echo "</span></b></label>

            ";
                        // line 24
                        if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "taxonomy", array(), "any", false, true), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug"), array(), "array", true, true)) {
                            // line 25
                            echo "                ";
                            $context["tags"] = twig_join_filter($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "taxonomy"), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug"), array(), "array"), ",");
                            // line 26
                            echo "            ";
                        } else {
                            // line 27
                            echo "                ";
                            $context["tags"] = "";
                            // line 28
                            echo "            ";
                        }
                        // line 29
                        echo "
            <input type='text' name='taxonomy[";
                        // line 30
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug"), "html", null, true);
                        echo "]' id='taxonomy-";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug"), "html", null, true);
                        echo "' value=\"";
                        echo twig_escape_filter($this->env, (isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")), "html", null, true);
                        echo "\" style=\"width: 70%;\" />



            <div class=\"tagcloud\" id=\"tagcloud-";
                        // line 34
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug"), "html", null, true);
                        echo "\"></div>
            <script>
            \$(function() {

                // load all tags
                \$.ajax({
                    url: \"";
                        // line 40
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "root"), "html", null, true);
                        echo "async/tags/";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug"), "html", null, true);
                        echo "\",
                    dataType: \"json\",
                    success: function(data) {
                        var results = [];
                        \$.each(data, function(index, item){
                            results.push( item.slug );
                        });
                        \$('#taxonomy-";
                        // line 47
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug"), "html", null, true);
                        echo "').select2({tags: results, minimumInputLength: 1, tokenSeparators: [\",\", \" \"]});
                    },
                    error: function() {
                        \$('#taxonomy-";
                        // line 50
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug"), "html", null, true);
                        echo "').select2({tags: [], minimumInputLength: 1, tokenSeparators: [\",\", \" \"]});
                    }
                });

                ";
                        // line 54
                        if ($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "tagcloud")) {
                            // line 55
                            echo "                // popular tags
                \$.ajax({
                    url: \"";
                            // line 57
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "root"), "html", null, true);
                            echo "async/populartags/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug"), "html", null, true);
                            echo "\",
                    dataType: \"json\",
                    data : { limit: 40 },
                    success: function(data) {
                        if (data.length > 0) {
                            \$.each(data, function(index, item){
                                \$(\"#tagcloud-";
                            // line 63
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug"), "html", null, true);
                            echo "\").append('<a href=\"#\" rel=\"' + item.count + '\">' + item.slug + '</a>');
                            });
                            \$(\"#tagcloud-";
                            // line 65
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug"), "html", null, true);
                            echo " a\").on('click', function (e) {
                                e.preventDefault();
                                var data = \$(\"#taxonomy-";
                            // line 67
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug"), "html", null, true);
                            echo "\").select2(\"data\")
                                data.push({id:\$(this).text(), text:\$(this).text()});
                                \$(\"#taxonomy-";
                            // line 69
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug"), "html", null, true);
                            echo "\").select2(\"data\", data);
                            });

                            \$.fn.tagcloud.defaults = {
                                size: {start: 12, end: 22, unit: 'px'},
                                color: {start: '#888', end: '#194770'}
                            };
                            \$('#tagcloud-";
                            // line 76
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug"), "html", null, true);
                            echo " a').tagcloud();
                        }
                    }
                });
                ";
                        }
                        // line 81
                        echo "
            });
            </script>


        ";
                    }
                    // line 87
                    echo "
        ";
                    // line 89
                    echo "
        ";
                    // line 90
                    if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "behaves_like") == "categories")) {
                        // line 91
                        echo "
            <label for='taxonomy-";
                        // line 92
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug"), "html", null, true);
                        echo "'><b><span class='left'>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "name")), "html", null, true);
                        echo "</span></b></label>

            ";
                        // line 94
                        if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "multiple", array(), "any", true, true) && ($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "multiple") == 1))) {
                            // line 95
                            echo "            <select name='taxonomy[";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug"), "html", null, true);
                            echo "][]' id='taxonomy-";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug"), "html", null, true);
                            echo "' multiple>
            ";
                        } else {
                            // line 97
                            echo "            <select name='taxonomy[";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug"), "html", null, true);
                            echo "][]' id='taxonomy-";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug"), "html", null, true);
                            echo "'>
                <option value=\"\">";
                            // line 98
                            echo $this->env->getExtension('Bolt')->trans("(no category)");
                            echo "</option>
                <option value=\"\" disabled>-----------</option>
            ";
                        }
                        // line 101
                        echo "
            ";
                        // line 102
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "options"));
                        foreach ($context['_seq'] as $context["slug"] => $context["cat"]) {
                            // line 103
                            echo "                <option value='";
                            echo twig_escape_filter($this->env, (isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")), "html", null, true);
                            echo "' ";
                            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "taxonomy", array(), "any", false, true), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug"), array(), "array", true, true) && twig_in_filter((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "taxonomy"), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug"), array(), "array")))) {
                                echo "selected";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, (isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "html", null, true);
                            echo "</option>
            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['cat'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 105
                        echo "
            </select>

            ";
                        // line 108
                        if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "multiple", array(), "any", true, true) && ($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "multiple") == 1))) {
                            // line 109
                            echo "            <label><span class='left' style=\"line-height: 1px;\">&nbsp;</span></label>
            <div style=\"margin-top: -14px;\">
                <a href=\"#\" class=\"btn bnt-info btn-mini\" onclick=\"jQuery('#taxonomy-";
                            // line 111
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug"), "html", null, true);
                            echo " option').prop('selected', true); return false;\">";
                            echo $this->env->getExtension('Bolt')->trans("Select all");
                            echo "</a>
                <a href=\"#\" class=\"btn bnt-info btn-mini\" onclick=\"jQuery('#taxonomy-";
                            // line 112
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug"), "html", null, true);
                            echo " option').prop('selected', false); return false;\">";
                            echo $this->env->getExtension('Bolt')->trans("Select none");
                            echo "</a>
            </div>
            ";
                        }
                        // line 115
                        echo "
        ";
                    }
                    // line 117
                    echo "
        ";
                    // line 119
                    echo "
        ";
                    // line 120
                    if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "behaves_like") == "grouping")) {
                        // line 121
                        echo "
            <label for='taxonomy-";
                        // line 122
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug"), "html", null, true);
                        echo "'><b><span class='left'>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "name")), "html", null, true);
                        echo "</span></b></label>

            <select name='taxonomy[";
                        // line 124
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug"), "html", null, true);
                        echo "][]' id='taxonomy-";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug"), "html", null, true);
                        echo "'>
                <option value=\"\">";
                        // line 125
                        echo $this->env->getExtension('Bolt')->trans("(no group)");
                        echo "</option>
                <option value=\"\" disabled>-----------</option>
            ";
                        // line 127
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "options"));
                        foreach ($context['_seq'] as $context["slug"] => $context["group"]) {
                            // line 128
                            echo "                <option value='";
                            echo twig_escape_filter($this->env, (isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")), "html", null, true);
                            echo "' ";
                            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "taxonomy", array(), "any", false, true), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug"), array(), "array", true, true) && twig_in_filter((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "taxonomy"), $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug"), array(), "array")))) {
                                echo "selected";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, (isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "html", null, true);
                            echo "</option>
            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['group'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 130
                        echo "            </select>

            ";
                        // line 132
                        if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "has_sortorder", array(), "any", true, true) && ($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "has_sortorder") == true))) {
                            // line 133
                            echo "                <label for=\"taxonomy-order-";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug"), "html", null, true);
                            echo "\" style='display: inline;'>- Order:</label>
                ";
                            // line 134
                            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "sortorder")) {
                                // line 135
                                echo "                    ";
                                $context["sortorder"] = $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "sortorder");
                                // line 136
                                echo "                ";
                            } else {
                                // line 137
                                echo "                    ";
                                $context["sortorder"] = 0;
                                // line 138
                                echo "                ";
                            }
                            // line 139
                            echo "                <input type=\"number\" name=\"taxonomy-order[";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug"), "html", null, true);
                            echo "]\" id=\"taxonomy-order-";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : $this->getContext($context, "taxonomy")), "slug"), "html", null, true);
                            echo "\" step=\"1\"
                       value='";
                            // line 140
                            echo twig_escape_filter($this->env, (isset($context["sortorder"]) ? $context["sortorder"] : $this->getContext($context, "sortorder")), "html", null, true);
                            echo "' class='verynarrow'>
            ";
                        }
                        // line 142
                        echo "
        ";
                    }
                    // line 144
                    echo "
    ";
                }
                // line 146
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxonomyslug'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "<hr>
";
        }
    }

    public function getTemplateName()
    {
        return "_sub_edittaxonomies.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 148,  382 => 146,  374 => 142,  362 => 139,  359 => 138,  356 => 137,  350 => 135,  348 => 134,  343 => 133,  341 => 132,  337 => 130,  322 => 128,  313 => 125,  307 => 124,  300 => 122,  297 => 121,  295 => 120,  277 => 112,  271 => 111,  265 => 108,  260 => 105,  241 => 102,  238 => 101,  232 => 98,  225 => 97,  203 => 90,  197 => 87,  189 => 81,  181 => 76,  171 => 69,  145 => 57,  139 => 54,  132 => 50,  105 => 34,  91 => 29,  88 => 28,  85 => 27,  79 => 25,  77 => 24,  67 => 21,  62 => 19,  56 => 15,  207 => 65,  204 => 64,  200 => 89,  190 => 59,  170 => 55,  163 => 53,  159 => 52,  156 => 63,  153 => 50,  149 => 49,  146 => 48,  141 => 55,  119 => 33,  104 => 31,  99 => 30,  70 => 22,  66 => 20,  63 => 19,  60 => 18,  57 => 16,  53 => 14,  50 => 14,  48 => 12,  45 => 11,  36 => 8,  32 => 7,  24 => 4,  22 => 3,  2146 => 751,  2138 => 748,  2134 => 746,  2132 => 745,  2129 => 744,  2123 => 741,  2120 => 740,  2118 => 739,  2115 => 738,  2111 => 735,  2103 => 730,  2099 => 729,  2095 => 728,  2089 => 727,  2079 => 724,  2073 => 723,  2067 => 722,  2061 => 721,  2055 => 720,  2051 => 719,  2045 => 718,  2036 => 717,  2034 => 716,  2031 => 715,  2027 => 712,  2019 => 707,  2015 => 706,  2011 => 705,  2001 => 702,  1995 => 701,  1991 => 700,  1985 => 699,  1976 => 698,  1974 => 697,  1971 => 696,  1967 => 693,  1963 => 691,  1953 => 679,  1943 => 678,  1933 => 677,  1925 => 674,  1917 => 673,  1909 => 672,  1906 => 671,  1904 => 670,  1901 => 669,  1897 => 666,  1889 => 664,  1885 => 663,  1878 => 662,  1870 => 661,  1861 => 660,  1859 => 659,  1856 => 658,  1853 => 656,  1849 => 654,  1845 => 653,  1839 => 652,  1832 => 651,  1824 => 650,  1815 => 649,  1813 => 648,  1810 => 647,  1802 => 640,  1796 => 637,  1783 => 631,  1777 => 628,  1771 => 627,  1765 => 626,  1761 => 625,  1756 => 623,  1748 => 622,  1744 => 621,  1736 => 620,  1731 => 618,  1723 => 617,  1716 => 615,  1708 => 614,  1700 => 613,  1691 => 607,  1687 => 606,  1682 => 603,  1680 => 602,  1677 => 601,  1675 => 600,  1672 => 599,  1665 => 593,  1656 => 587,  1652 => 585,  1646 => 583,  1640 => 581,  1638 => 580,  1626 => 571,  1616 => 568,  1606 => 567,  1598 => 566,  1590 => 565,  1582 => 564,  1574 => 563,  1568 => 560,  1559 => 558,  1549 => 557,  1543 => 554,  1535 => 553,  1528 => 551,  1520 => 550,  1509 => 549,  1501 => 548,  1494 => 543,  1488 => 541,  1482 => 539,  1480 => 538,  1476 => 537,  1471 => 534,  1469 => 533,  1466 => 532,  1464 => 531,  1461 => 530,  1458 => 528,  1448 => 523,  1428 => 512,  1422 => 509,  1418 => 508,  1414 => 507,  1409 => 505,  1405 => 504,  1395 => 497,  1389 => 494,  1385 => 493,  1377 => 492,  1372 => 489,  1366 => 488,  1362 => 486,  1360 => 485,  1357 => 484,  1353 => 481,  1343 => 476,  1327 => 463,  1320 => 459,  1307 => 455,  1303 => 453,  1298 => 450,  1281 => 447,  1278 => 446,  1274 => 445,  1270 => 444,  1263 => 440,  1258 => 437,  1255 => 436,  1253 => 435,  1246 => 431,  1237 => 429,  1228 => 423,  1224 => 422,  1220 => 421,  1215 => 419,  1211 => 418,  1202 => 412,  1195 => 410,  1187 => 409,  1184 => 408,  1178 => 407,  1174 => 405,  1172 => 404,  1169 => 403,  1165 => 400,  1159 => 396,  1147 => 389,  1143 => 388,  1138 => 386,  1131 => 383,  1129 => 382,  1122 => 378,  1119 => 377,  1114 => 374,  1099 => 371,  1096 => 370,  1092 => 369,  1088 => 368,  1081 => 364,  1076 => 361,  1073 => 360,  1071 => 359,  1058 => 355,  1054 => 354,  1042 => 347,  1035 => 343,  1029 => 342,  1025 => 341,  1018 => 340,  1010 => 336,  1002 => 335,  994 => 334,  985 => 329,  983 => 328,  980 => 327,  975 => 323,  969 => 319,  956 => 311,  947 => 309,  943 => 308,  937 => 305,  933 => 304,  928 => 302,  923 => 299,  921 => 298,  912 => 292,  904 => 287,  896 => 282,  892 => 280,  887 => 277,  870 => 274,  867 => 273,  863 => 272,  859 => 271,  852 => 267,  847 => 264,  844 => 263,  842 => 262,  835 => 258,  826 => 256,  812 => 251,  808 => 250,  801 => 245,  797 => 243,  791 => 242,  785 => 239,  776 => 238,  773 => 237,  768 => 236,  765 => 234,  758 => 233,  755 => 231,  753 => 230,  745 => 227,  739 => 224,  733 => 223,  729 => 222,  722 => 221,  714 => 217,  706 => 216,  698 => 215,  691 => 210,  685 => 208,  679 => 206,  677 => 205,  673 => 204,  667 => 201,  664 => 200,  660 => 198,  656 => 196,  654 => 195,  652 => 194,  649 => 193,  647 => 192,  644 => 191,  641 => 189,  637 => 187,  622 => 185,  618 => 184,  613 => 182,  607 => 181,  598 => 180,  596 => 179,  593 => 178,  590 => 176,  585 => 173,  579 => 172,  567 => 170,  555 => 168,  552 => 167,  548 => 166,  537 => 165,  528 => 161,  522 => 160,  517 => 157,  511 => 156,  499 => 154,  487 => 152,  484 => 151,  480 => 150,  469 => 149,  459 => 147,  456 => 146,  453 => 145,  450 => 144,  443 => 142,  440 => 141,  437 => 140,  431 => 138,  428 => 137,  425 => 136,  422 => 135,  420 => 134,  417 => 133,  414 => 131,  410 => 129,  405 => 126,  401 => 124,  399 => 123,  388 => 119,  383 => 117,  372 => 109,  360 => 106,  353 => 136,  351 => 100,  339 => 95,  331 => 94,  326 => 93,  321 => 91,  317 => 88,  302 => 84,  296 => 83,  289 => 117,  284 => 78,  272 => 74,  269 => 73,  267 => 109,  264 => 71,  261 => 69,  256 => 66,  245 => 103,  239 => 63,  235 => 62,  226 => 60,  220 => 59,  217 => 95,  215 => 94,  209 => 66,  205 => 91,  198 => 51,  194 => 61,  188 => 49,  184 => 58,  178 => 47,  175 => 46,  169 => 45,  166 => 67,  164 => 43,  158 => 40,  147 => 37,  143 => 36,  137 => 43,  133 => 34,  127 => 33,  124 => 36,  118 => 31,  115 => 30,  113 => 29,  110 => 28,  94 => 30,  90 => 27,  80 => 24,  64 => 17,  51 => 13,  46 => 14,  44 => 11,  41 => 12,  31 => 6,  28 => 6,  26 => 4,  519 => 240,  509 => 233,  504 => 231,  486 => 216,  471 => 206,  467 => 148,  446 => 143,  434 => 139,  418 => 171,  396 => 151,  390 => 149,  380 => 147,  378 => 144,  369 => 140,  365 => 139,  361 => 138,  354 => 134,  347 => 130,  340 => 126,  334 => 123,  324 => 92,  318 => 127,  308 => 85,  306 => 110,  299 => 106,  292 => 119,  285 => 115,  278 => 77,  263 => 91,  259 => 90,  253 => 89,  249 => 65,  244 => 85,  229 => 61,  224 => 82,  222 => 81,  216 => 80,  212 => 56,  208 => 92,  199 => 76,  195 => 75,  187 => 74,  182 => 73,  180 => 72,  177 => 56,  167 => 54,  165 => 62,  161 => 65,  154 => 38,  150 => 59,  144 => 47,  140 => 56,  134 => 53,  131 => 52,  129 => 51,  126 => 47,  116 => 42,  114 => 40,  106 => 25,  101 => 22,  96 => 37,  92 => 36,  86 => 34,  82 => 26,  76 => 22,  73 => 29,  71 => 28,  65 => 20,  58 => 16,  54 => 19,  52 => 18,  49 => 17,  47 => 16,  42 => 13,  40 => 12,  37 => 9,  35 => 10,  29 => 7,  23 => 2,  21 => 2,  19 => 1,);
    }
}
