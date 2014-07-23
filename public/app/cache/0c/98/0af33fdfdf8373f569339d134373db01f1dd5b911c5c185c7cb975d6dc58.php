<?php

/* _sub_editrelations.twig */
class __TwigTemplate_0c980af33fdfdf8373f569339d134373db01f1dd5b911c5c185c7cb975d6dc58 extends Twig_Template
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
        // line 2
        if (((!twig_test_empty($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "relation"))) || $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "relations", array(), "any", true, true))) {
            // line 3
            echo "
    <h3>
        ";
            // line 5
            echo $this->env->getExtension('Bolt')->trans("Relationships");
            echo "
        <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
            // line 6
            echo $this->env->getExtension('Bolt')->trans("Relationships");
            echo "\"
            data-content=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "translator"), "trans", array(0 => "info.relationships", 1 => array(), 2 => "infos"), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Bolt')->trans("Info");
            echo "</span>
    </h3>

";
        }
        // line 11
        echo "
";
        // line 13
        if ($this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "relations", array(), "any", true, true)) {
            // line 14
            echo "
    ";
            // line 15
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : $this->getContext($context, "contenttype")), "relations"));
            foreach ($context['_seq'] as $context["relcontenttype"] => $context["relation"]) {
                // line 16
                echo "
        ";
                // line 18
                echo "        ";
                $context["format"] = (($this->getAttribute((isset($context["relation"]) ? $context["relation"] : null), "format", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["relation"]) ? $context["relation"] : null), "format"), "{{ item.title|escape }} <span>(№ {{ item.id }})</span>")) : ("{{ item.title|escape }} <span>(№ {{ item.id }})</span>"));
                // line 19
                echo "
        <label for='relation-";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["relcontenttype"]) ? $context["relcontenttype"] : $this->getContext($context, "relcontenttype"))), "html", null, true);
                echo "'><b><span class='left'>
            ";
                // line 21
                if ($this->getAttribute((isset($context["relation"]) ? $context["relation"] : $this->getContext($context, "relation")), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["relation"]) ? $context["relation"] : $this->getContext($context, "relation")), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["relcontenttype"]) ? $context["relcontenttype"] : $this->getContext($context, "relcontenttype")))), "html", null, true);
                }
                // line 22
                echo "        </span></b></label>

        ";
                // line 24
                if (($this->getAttribute((isset($context["relation"]) ? $context["relation"] : null), "multiple", array(), "any", true, true) && ($this->getAttribute((isset($context["relation"]) ? $context["relation"] : $this->getContext($context, "relation")), "multiple") == 1))) {
                    // line 25
                    echo "        <select name='relation[";
                    echo twig_escape_filter($this->env, (isset($context["relcontenttype"]) ? $context["relcontenttype"] : $this->getContext($context, "relcontenttype")), "html", null, true);
                    echo "][]' id='relation-";
                    echo twig_escape_filter($this->env, (isset($context["relcontenttype"]) ? $context["relcontenttype"] : $this->getContext($context, "relcontenttype")), "html", null, true);
                    echo "' class='wide' multiple  style=\"width: 70%;\" data-placeholder=\"(none)\">
        ";
                } else {
                    // line 27
                    echo "        <select name='relation[";
                    echo twig_escape_filter($this->env, (isset($context["relcontenttype"]) ? $context["relcontenttype"] : $this->getContext($context, "relcontenttype")), "html", null, true);
                    echo "][]' id='relation-";
                    echo twig_escape_filter($this->env, (isset($context["relcontenttype"]) ? $context["relcontenttype"] : $this->getContext($context, "relcontenttype")), "html", null, true);
                    echo "' class='wide' style=\"width: 70%;\" data-placeholder=\"(none)\">
            <option value=\"0\">(none)</option>
        ";
                }
                // line 30
                echo "            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Bolt')->listcontent((isset($context["relcontenttype"]) ? $context["relcontenttype"] : $this->getContext($context, "relcontenttype")), (isset($context["relation"]) ? $context["relation"] : $this->getContext($context, "relation")), (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"))));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 31
                    echo "                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"), "html", null, true);
                    echo "\" ";
                    if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "selected")) {
                        echo "selected";
                    }
                    echo ">";
                    echo $this->env->getExtension('Bolt')->twig((isset($context["format"]) ? $context["format"] : $this->getContext($context, "format")), array("item" => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))));
                    echo "</option>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "        </select>

        <script>
            \$('#relation-";
                // line 36
                echo twig_escape_filter($this->env, (isset($context["relcontenttype"]) ? $context["relcontenttype"] : $this->getContext($context, "relcontenttype")), "html", null, true);
                echo "').select2({
                placeholder: \"(none)\",
                allowClear: true
            });
        </script>

    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['relcontenttype'], $context['relation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "
";
        }
        // line 45
        echo "
";
        // line 47
        if (((!twig_test_empty($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "relation"))) || $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "relations", array(), "any", true, true))) {
            // line 48
            echo "
    ";
            // line 49
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "relation"));
            foreach ($context['_seq'] as $context["reltype"] => $context["ids"]) {
                // line 50
                echo "        ";
                if ((!$this->getAttribute($this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "relations", array(), "any", false, true), (isset($context["reltype"]) ? $context["reltype"] : $this->getContext($context, "reltype")), array(), "array", true, true))) {
                    // line 51
                    echo "            <p>
            ";
                    // line 52
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["ids"]) ? $context["ids"] : $this->getContext($context, "ids")));
                    foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                        // line 53
                        echo "                ";
                        $template_storage = new Bolt\Storage($context['app']);
                        $context['record'] =                         $template_storage->getContent((((isset($context["reltype"]) ? $context["reltype"] : $this->getContext($context, "reltype")) . "/") . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))), array() );
                        // line 54
                        echo "                ";
                        if ((isset($context["record"]) ? $context["record"] : $this->getContext($context, "record"))) {
                            // line 55
                            echo "                    ";
                            echo $this->env->getExtension('Bolt')->trans("This record is related to %contenttype%", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), "contenttype"), "singular_name")));
                            echo " № ";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), "id"), "html", null, true);
                            echo " -
                    <strong>";
                            // line 56
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), "title"), "html", null, true);
                            echo "</strong> (<a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), "contenttype"), "slug"), "id" => $this->getAttribute((isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), "id"))), "html", null, true);
                            echo "\">edit</a>)<br>
                ";
                        }
                        // line 58
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 59
                    echo "            </p>
        ";
                }
                // line 61
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['reltype'], $context['ids'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "
";
        }
        // line 64
        echo "
";
        // line 65
        if (((!twig_test_empty($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "relation"))) || $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "relations", array(), "any", true, true))) {
            // line 66
            echo "
    <hr>

";
        }
    }

    public function getTemplateName()
    {
        return "_sub_editrelations.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 65,  204 => 64,  200 => 62,  190 => 59,  170 => 55,  163 => 53,  159 => 52,  156 => 51,  153 => 50,  149 => 49,  146 => 48,  141 => 45,  119 => 33,  104 => 31,  99 => 30,  70 => 21,  66 => 20,  63 => 19,  60 => 18,  57 => 16,  53 => 15,  50 => 14,  48 => 13,  45 => 11,  36 => 7,  32 => 6,  24 => 3,  22 => 2,  2146 => 751,  2138 => 748,  2134 => 746,  2132 => 745,  2129 => 744,  2123 => 741,  2120 => 740,  2118 => 739,  2115 => 738,  2111 => 735,  2103 => 730,  2099 => 729,  2095 => 728,  2089 => 727,  2079 => 724,  2073 => 723,  2067 => 722,  2061 => 721,  2055 => 720,  2051 => 719,  2045 => 718,  2036 => 717,  2034 => 716,  2031 => 715,  2027 => 712,  2019 => 707,  2015 => 706,  2011 => 705,  2001 => 702,  1995 => 701,  1991 => 700,  1985 => 699,  1976 => 698,  1974 => 697,  1971 => 696,  1967 => 693,  1963 => 691,  1953 => 679,  1943 => 678,  1933 => 677,  1925 => 674,  1917 => 673,  1909 => 672,  1906 => 671,  1904 => 670,  1901 => 669,  1897 => 666,  1889 => 664,  1885 => 663,  1878 => 662,  1870 => 661,  1861 => 660,  1859 => 659,  1856 => 658,  1853 => 656,  1849 => 654,  1845 => 653,  1839 => 652,  1832 => 651,  1824 => 650,  1815 => 649,  1813 => 648,  1810 => 647,  1802 => 640,  1796 => 637,  1783 => 631,  1777 => 628,  1771 => 627,  1765 => 626,  1761 => 625,  1756 => 623,  1748 => 622,  1744 => 621,  1736 => 620,  1731 => 618,  1723 => 617,  1716 => 615,  1708 => 614,  1700 => 613,  1691 => 607,  1687 => 606,  1682 => 603,  1680 => 602,  1677 => 601,  1675 => 600,  1672 => 599,  1665 => 593,  1656 => 587,  1652 => 585,  1646 => 583,  1640 => 581,  1638 => 580,  1626 => 571,  1616 => 568,  1606 => 567,  1598 => 566,  1590 => 565,  1582 => 564,  1574 => 563,  1568 => 560,  1559 => 558,  1549 => 557,  1543 => 554,  1535 => 553,  1528 => 551,  1520 => 550,  1509 => 549,  1501 => 548,  1494 => 543,  1488 => 541,  1482 => 539,  1480 => 538,  1476 => 537,  1471 => 534,  1469 => 533,  1466 => 532,  1464 => 531,  1461 => 530,  1458 => 528,  1448 => 523,  1428 => 512,  1422 => 509,  1418 => 508,  1414 => 507,  1409 => 505,  1405 => 504,  1395 => 497,  1389 => 494,  1385 => 493,  1377 => 492,  1372 => 489,  1366 => 488,  1362 => 486,  1360 => 485,  1357 => 484,  1353 => 481,  1343 => 476,  1327 => 463,  1320 => 459,  1307 => 455,  1303 => 453,  1298 => 450,  1281 => 447,  1278 => 446,  1274 => 445,  1270 => 444,  1263 => 440,  1258 => 437,  1255 => 436,  1253 => 435,  1246 => 431,  1237 => 429,  1228 => 423,  1224 => 422,  1220 => 421,  1215 => 419,  1211 => 418,  1202 => 412,  1195 => 410,  1187 => 409,  1184 => 408,  1178 => 407,  1174 => 405,  1172 => 404,  1169 => 403,  1165 => 400,  1159 => 396,  1147 => 389,  1143 => 388,  1138 => 386,  1131 => 383,  1129 => 382,  1122 => 378,  1119 => 377,  1114 => 374,  1099 => 371,  1096 => 370,  1092 => 369,  1088 => 368,  1081 => 364,  1076 => 361,  1073 => 360,  1071 => 359,  1058 => 355,  1054 => 354,  1042 => 347,  1035 => 343,  1029 => 342,  1025 => 341,  1018 => 340,  1010 => 336,  1002 => 335,  994 => 334,  985 => 329,  983 => 328,  980 => 327,  975 => 323,  969 => 319,  956 => 311,  947 => 309,  943 => 308,  937 => 305,  933 => 304,  928 => 302,  923 => 299,  921 => 298,  912 => 292,  904 => 287,  896 => 282,  892 => 280,  887 => 277,  870 => 274,  867 => 273,  863 => 272,  859 => 271,  852 => 267,  847 => 264,  844 => 263,  842 => 262,  835 => 258,  826 => 256,  812 => 251,  808 => 250,  801 => 245,  797 => 243,  791 => 242,  785 => 239,  776 => 238,  773 => 237,  768 => 236,  765 => 234,  758 => 233,  755 => 231,  753 => 230,  745 => 227,  739 => 224,  733 => 223,  729 => 222,  722 => 221,  714 => 217,  706 => 216,  698 => 215,  691 => 210,  685 => 208,  679 => 206,  677 => 205,  673 => 204,  667 => 201,  664 => 200,  660 => 198,  656 => 196,  654 => 195,  652 => 194,  649 => 193,  647 => 192,  644 => 191,  641 => 189,  637 => 187,  622 => 185,  618 => 184,  613 => 182,  607 => 181,  598 => 180,  596 => 179,  593 => 178,  590 => 176,  585 => 173,  579 => 172,  567 => 170,  555 => 168,  552 => 167,  548 => 166,  537 => 165,  528 => 161,  522 => 160,  517 => 157,  511 => 156,  499 => 154,  487 => 152,  484 => 151,  480 => 150,  469 => 149,  459 => 147,  456 => 146,  453 => 145,  450 => 144,  443 => 142,  440 => 141,  437 => 140,  431 => 138,  428 => 137,  425 => 136,  422 => 135,  420 => 134,  417 => 133,  414 => 131,  410 => 129,  405 => 126,  401 => 124,  399 => 123,  388 => 119,  383 => 117,  372 => 109,  360 => 106,  353 => 101,  351 => 100,  339 => 95,  331 => 94,  326 => 93,  321 => 91,  317 => 88,  302 => 84,  296 => 83,  289 => 82,  284 => 78,  272 => 74,  269 => 73,  267 => 72,  264 => 71,  261 => 69,  256 => 66,  245 => 64,  239 => 63,  235 => 62,  226 => 60,  220 => 59,  217 => 58,  215 => 57,  209 => 66,  205 => 52,  198 => 51,  194 => 61,  188 => 49,  184 => 58,  178 => 47,  175 => 46,  169 => 45,  166 => 44,  164 => 43,  158 => 40,  147 => 37,  143 => 36,  137 => 43,  133 => 34,  127 => 33,  124 => 36,  118 => 31,  115 => 30,  113 => 29,  110 => 28,  94 => 21,  90 => 27,  80 => 24,  64 => 17,  51 => 15,  46 => 14,  44 => 13,  41 => 12,  31 => 6,  28 => 5,  26 => 4,  519 => 240,  509 => 233,  504 => 231,  486 => 216,  471 => 206,  467 => 148,  446 => 143,  434 => 139,  418 => 171,  396 => 151,  390 => 149,  380 => 147,  378 => 146,  369 => 140,  365 => 139,  361 => 138,  354 => 134,  347 => 130,  340 => 126,  334 => 123,  324 => 92,  318 => 113,  308 => 85,  306 => 110,  299 => 106,  292 => 102,  285 => 98,  278 => 77,  263 => 91,  259 => 90,  253 => 89,  249 => 65,  244 => 85,  229 => 61,  224 => 82,  222 => 81,  216 => 80,  212 => 56,  208 => 77,  199 => 76,  195 => 75,  187 => 74,  182 => 73,  180 => 72,  177 => 56,  167 => 54,  165 => 62,  161 => 42,  154 => 38,  150 => 59,  144 => 47,  140 => 56,  134 => 53,  131 => 52,  129 => 51,  126 => 50,  116 => 42,  114 => 41,  106 => 25,  101 => 22,  96 => 37,  92 => 36,  86 => 34,  82 => 25,  76 => 22,  73 => 29,  71 => 28,  65 => 25,  58 => 16,  54 => 19,  52 => 18,  49 => 17,  47 => 16,  42 => 13,  40 => 12,  37 => 9,  35 => 10,  29 => 7,  23 => 2,  21 => 2,  19 => 1,);
    }
}
