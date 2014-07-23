<?php

/* editcontent.twig */
class __TwigTemplate_efd33066df49e4ba1f06c5992e55bea0b48e1774848325fadcc31706029b38fb extends Twig_Template
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
        $this->env->loadTemplate("_header.twig")->display(array_merge($context, array("active" => "content")));
        // line 2
        $context["pretty"] = $this->env->loadTemplate("_sub_pretty.twig");
        // line 3
        echo "
<div class=\"row-fluid\">
    <div class=\"span9\">

    <h1>";
        // line 7
        echo (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"));
        echo "</h1>

    <form method=\"post\" id=\"editcontent\" enctype=\"multipart/form-data\">
        ";
        // line 10
        $this->env->loadTemplate("_sub_csrf_token.twig")->display($context);
        // line 11
        echo "
        ";
        // line 12
        $this->env->loadTemplate("_sub_editfields.twig")->display($context);
        // line 13
        echo "
        <hr>

        ";
        // line 16
        $this->env->loadTemplate("_sub_editrelations.twig")->display($context);
        // line 17
        echo "
        ";
        // line 18
        $this->env->loadTemplate("_sub_edittaxonomies.twig")->display($context);
        // line 19
        echo "
        <h3>
            ";
        // line 21
        echo $this->env->getExtension('Bolt')->trans("Meta information");
        echo "
        </h3>

        <label><b><span class='left'>Id (№)</span></b>
        <input type='text' readonly=readonly name='id' value='";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id"), "html", null, true);
        echo "' class=\"narrow\">
        </label>

        ";
        // line 28
        $context["can_publish"] = $this->env->getExtension('Bolt')->isAllowed(((("contenttype:" . $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : $this->getContext($context, "contenttype")), "slug")) . ":publish:") . $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id")));
        // line 29
        echo "
        <label><b><span class='left'>";
        // line 30
        echo $this->env->getExtension('Bolt')->trans("Publication date:");
        echo "</span></b>
        </label>
        <input type=\"text\" name=\"datepublish-dateformatted\" id=\"datepublish-date\"
               ";
        // line 33
        if ((!(isset($context["can_publish"]) ? $context["can_publish"] : $this->getContext($context, "can_publish")))) {
            echo "disabled=\"disabled\"";
        }
        // line 34
        echo "               value='";
        echo $context["pretty"]->getdatepickervalue($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "datepublish"));
        echo "' class='datepicker'>
        <input type=\"time\" name=\"datepublish-timeformatted\" id=\"datepublish-time\"
               ";
        // line 36
        if ((!(isset($context["can_publish"]) ? $context["can_publish"] : $this->getContext($context, "can_publish")))) {
            echo "disabled=\"disabled\"";
        }
        // line 37
        echo "               value='";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "datepublish"), "H:i"), "html", null, true);
        echo "' class='timepicker'>
        <input type=\"hidden\" name=\"datepublish\" id=\"datepublish\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "datepublish"), "html", null, true);
        echo "\">

        <input type=\"hidden\" name=\"editreferrer\" id=\"editreferrer\"";
        // line 40
        if (array_key_exists("editreferrer", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["editreferrer"]) ? $context["editreferrer"] : $this->getContext($context, "editreferrer")), "html", null, true);
            echo "\"";
        }
        echo ">
        ";
        // line 41
        if ($this->env->getExtension('Bolt')->isAllowed(((("contenttype:" . $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : $this->getContext($context, "contenttype")), "slug")) . ":publish:") . $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id")))) {
            // line 42
            echo "        <script>
            \$('#datepublish-date, #datepublish-time').on('change', function(){
                var date = \$('#datepublish-date').datepicker(\"getDate\");
                var time = \$('#datepublish-time').val() + \":00\";
                \$('#datepublish').val(\$.datepicker.formatDate('yy-mm-dd', date)+\" \"+time);
            });
        </script>
        ";
        }
        // line 50
        echo "
        ";
        // line 51
        $context["can_depublish"] = $this->env->getExtension('Bolt')->isAllowed(((("contenttype:" . $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : $this->getContext($context, "contenttype")), "slug")) . ":depublish:") . $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id")));
        // line 52
        echo "
        <label><b><span class='left'>";
        // line 53
        echo $this->env->getExtension('Bolt')->trans("Depublication date:");
        echo "</span></b>
        </label>
        <input type=\"text\" name=\"datedepublish-dateformatted\" id=\"datedepublish-date\"
               ";
        // line 56
        if ((!(isset($context["can_depublish"]) ? $context["can_depublish"] : $this->getContext($context, "can_depublish")))) {
            echo "disabled=\"disabled\"";
        }
        // line 57
        echo "               value='";
        echo $context["pretty"]->getdatepickervalue($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "datedepublish"));
        echo "' class='datepicker'>
        <input type=\"time\" name=\"datedepublish-timeformatted\" id=\"datedepublish-time\"
               ";
        // line 59
        if ((!(isset($context["can_depublish"]) ? $context["can_depublish"] : $this->getContext($context, "can_depublish")))) {
            echo "disabled=\"disabled\"";
        }
        // line 60
        echo "               value='";
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "datedepublish") > "1970-01-01 01:01:01")) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "datedepublish"), "H:i"), "html", null, true);
        }
        echo "' class='timepicker'>
        <input type=\"hidden\" name=\"datedepublish\" id=\"datedepublish\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "datedepublish"), "html", null, true);
        echo "\">
        ";
        // line 62
        if ($this->env->getExtension('Bolt')->isAllowed(((("contenttype:" . $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : $this->getContext($context, "contenttype")), "slug")) . ":depublish:") . $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id")))) {
            // line 63
            echo "        <script>
            \$('#datedepublish-date, #datedepublish-time').on('change', function(){
                var date = \$('#datedepublish-date').datepicker(\"getDate\");
                var time = \$('#datedepublish-time').val() + \":00\";
                \$('#datedepublish').val(\$.datepicker.formatDate('yy-mm-dd', date)+\" \"+time);
            });
        </script>
        ";
        }
        // line 71
        echo "
        ";
        // line 72
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "datecreated") > "1970-01-01 01:01:01")) {
            // line 73
            echo "        <p>";
            echo $this->env->getExtension('Bolt')->trans("This %contenttype% was created", array("%contenttype%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : $this->getContext($context, "contenttype")), "singular_name")));
            echo "
            <time class=\"moment\" datetime=\"";
            // line 74
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "datecreated"), "c"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "datecreated"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "datecreated"), "html", null, true);
            echo "</time>
            ";
            // line 75
            echo $this->env->getExtension('Bolt')->trans("and edited");
            echo "
            <time class=\"moment\" datetime=\"";
            // line 76
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "datechanged"), "c"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "datechanged"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "datechanged"), "html", null, true);
            echo "</time>.
            ";
        }
        // line 77
        echo "</p>

        <label><b><span class='left'>";
        // line 79
        echo $this->env->getExtension('Bolt')->trans("Status:");
        echo "</span></b>
        <select name=\"status\" id=\"statusselect\" ";
        // line 80
        if ((twig_length_filter($this->env, (isset($context["allowedStatuses"]) ? $context["allowedStatuses"] : $this->getContext($context, "allowedStatuses"))) <= 1)) {
            echo "disabled=\"disabled\"";
        }
        echo " >
            ";
        // line 81
        $context["status_names"] = array("published" => $this->env->getExtension('Bolt')->trans("Published"), "held" => $this->env->getExtension('Bolt')->trans("Not published"), "timed" => $this->env->getExtension('Bolt')->trans("Timed publish"), "draft" => $this->env->getExtension('Bolt')->trans("Draft"));
        // line 82
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allowedStatuses"]) ? $context["allowedStatuses"] : $this->getContext($context, "allowedStatuses")));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 83
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "status") == (isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status_names"]) ? $context["status_names"] : $this->getContext($context, "status_names")), (isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), array(), "array"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "        </select>
        </label>

        <label><b><span class='left'>";
        // line 88
        echo $this->env->getExtension('Bolt')->trans("Owner:");
        echo "</span></b>
        <select name=\"ownerid\" ";
        // line 89
        if ((!$this->env->getExtension('Bolt')->isAllowed(((("contenttype:" . $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : $this->getContext($context, "contenttype")), "slug")) . ":change-owner:") . $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id"))))) {
            echo "disabled=\"disabled\"";
        }
        echo ">
            ";
        // line 90
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 91
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"), "html", null, true);
            echo "\" ";
            if (((isset($context["contentowner"]) ? $context["contentowner"] : $this->getContext($context, "contentowner")) && ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id") == $this->getAttribute((isset($context["contentowner"]) ? $context["contentowner"] : $this->getContext($context, "contentowner")), "id")))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "displayname"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "        </select>
        </label>


        <button type=\"button\" class=\"btn btn-primary\" id=\"savecontinuebutton\" style=\"margin-right: 8px;\">
            <i class=\"icon-flag\"></i> ";
        // line 98
        echo $this->env->getExtension('Bolt')->trans("Save %contenttype%", array("%contenttype%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : $this->getContext($context, "contenttype")), "singular_name")));
        echo "
        </button>

        <button type=\"button\" class=\"btn\" id=\"previewbutton\">
            <i class=\"icon-external-link\"></i> ";
        // line 102
        echo $this->env->getExtension('Bolt')->trans("Preview");
        echo "
        </button>

        <button type=\"submit\" class=\"btn \" id=\"savebutton\" style=\"margin-right: 8px;\">
            <i class=\"icon-flag\"></i> ";
        // line 106
        echo $this->env->getExtension('Bolt')->trans("Save & return to overview");
        echo "
        </button>

        <p class=\"lastsaved\" style=\"margin-top: 12px;\">
            ";
        // line 110
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id") != 0)) {
            // line 111
            echo "            ";
            echo $this->env->getExtension('Bolt')->trans("Saved on:");
            echo " <strong>";
            echo $this->env->getExtension('Bolt')->localedatetime($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "datechanged"), "%b %e, %H:%M");
            echo "</strong> <small>(";
            echo $context["pretty"]->getdatetime($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "datechanged"));
            echo ")</small></p>
        ";
        } else {
            // line 113
            echo "            ";
            echo $this->env->getExtension('Bolt')->trans("This %contenttype% has not been saved yet.", array("%contenttype%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : $this->getContext($context, "contenttype")), "singular_name")));
            echo "
        ";
        }
        // line 115
        echo "        </p>

    </form>

    </div><!-- /span9 -->
    <aside class=\"span3\">

    <section>
    <h2>";
        // line 123
        echo $this->env->getExtension('Bolt')->trans("Actions for this %contenttype%", array("%contenttype%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : $this->getContext($context, "contenttype")), "singular_name")));
        echo "</h2>

    <button type=\"button\" class=\"btn btn-primary\" id=\"sidebarsavecontinuebutton\" style=\"margin-right: 8px;\">
        <i class=\"icon-flag\"></i> ";
        // line 126
        echo $this->env->getExtension('Bolt')->trans("Save %contenttype%", array("%contenttype%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : $this->getContext($context, "contenttype")), "singular_name")));
        echo "
    </button>

    <button type=\"button\" class=\"btn\" id=\"sidebarpreviewbutton\">
        <i class=\"icon-external-link\"></i> ";
        // line 130
        echo $this->env->getExtension('Bolt')->trans("Preview");
        echo "
    </button>

    <button type=\"submit\" class=\"btn \" id=\"sidebarsavebutton\" style=\"margin-right: 8px;\">
        <i class=\"icon-flag\"></i> ";
        // line 134
        echo $this->env->getExtension('Bolt')->trans("Save & return to overview");
        echo "
    </button>

    <p>
        ";
        // line 138
        echo $this->env->getExtension('Bolt')->trans("Current (saved) status:");
        echo "
        <a href=\"#statusselect\" data-action=\"\$('#statusselect').focus();\" id=\"lastsavedstatus\" title=\"";
        // line 139
        echo $this->env->getExtension('Bolt')->trans("Click to change current status.");
        echo "\">
            <strong>";
        // line 140
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["status_names"]) ? $context["status_names"] : null), $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "status"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["status_names"]) ? $context["status_names"] : null), $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "status"), array(), "array"), $this->env->getExtension('Bolt')->trans("None"))) : ($this->env->getExtension('Bolt')->trans("None"))), "html", null, true);
        echo "</strong>
        </a>
    </p>


    <p class=\"lastsaved\">
        ";
        // line 146
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id") != 0)) {
            // line 147
            echo "            ";
            echo $this->env->getExtension('Bolt')->trans("Saved on:");
            echo " <strong>";
            echo $this->env->getExtension('Bolt')->localedatetime($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "datechanged"), "%b %e, %H:%M");
            echo "</strong> <small>(";
            echo $context["pretty"]->getdatetime($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "datechanged"));
            echo ")</small></p>
        ";
        } else {
            // line 149
            echo "            ";
            echo $this->env->getExtension('Bolt')->trans("This %contenttype% has not been saved yet.", array("%contenttype%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : $this->getContext($context, "contenttype")), "singular_name")));
            echo "
        ";
        }
        // line 151
        echo "    </p>




<script type=\"text/javascript\">
    \$(function() {

        // Save the page..
        \$('#sidebarsavebutton').bind('click', function(e){
            \$('#savebutton').trigger('click');
        });
        \$('#savebutton').bind('click', function(e){
            // Re-set the changes to the form..
            \$('form').watchChanges();
        });

        // To preview the page, we set the target of the form to a new URL, and open it in a new window.
        \$('#previewbutton, #sidebarpreviewbutton').bind('click', function(e){
            e.preventDefault();
            var newaction = \"";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : $this->getContext($context, "paths")), "root"), "html", null, true);
        echo "\" + \"preview\" + \"/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : $this->getContext($context, "contenttype")), "singular_slug"), "html", null, true);
        echo "\";
            \$('#editcontent').attr('action', newaction).attr('target', \"_blank\").submit();
            \$('#editcontent').attr('action', '').attr('target', \"_self\");
        });

        // Clicking the 'save & continue' button either triggers an 'ajaxy' post, or a regular
        // post which returns to this page. The latter happens if the record doesn't exist yet, so it doesn't
        // have an id yet.
        \$('#sidebarsavecontinuebutton, #savecontinuebutton').bind('click', function(e){
            e.preventDefault();

            var newrecord = ";
        // line 182
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id") != 0)) {
            echo "false";
        } else {
            echo "true";
        }
        echo ";

            // Disable the buttons, to indicate stuff is being done.
            \$('#sidebarsavecontinuebutton, #savecontinuebutton').addClass('disabled');

            \$('p.lastsaved').text('";
        // line 187
        echo $this->env->getExtension('Bolt')->trans("Saving…");
        echo "');

            if (newrecord) {

                // Re-set the changes to the form..
                \$('form').watchChanges();

                // New record.. do a regular post, and expect to be redirected back to this page.
                var newaction = \"?returnto=\" + \$(this).attr('id');
                \$('#editcontent').attr('action', newaction).submit();
            } else {
                // Existing record. Do an 'ajaxy' post to update the record.

                // Re-set the changes to the form..
                \$('form').watchChanges();

                \$.post(\"\", \$( \"#editcontent\" ).serialize() )
                    .done(function(data) {
                        // var message = \"";
        // line 205
        echo $this->env->getExtension('Bolt')->trans("The changes to this %contenttype% have been saved.", array("%contenttype%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : $this->getContext($context, "contenttype")), "singular_name")));
        echo "\";
                        \$('p.lastsaved').html('";
        // line 206
        echo $this->env->getExtension('Bolt')->trans("Saved on:");
        echo " <strong></strong> <small>(";
        echo $context["pretty"]->getdatetime($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "datechanged"));
        echo ")</small></p>');
                        \$('p.lastsaved').find('strong').text(moment().format('MMM D, HH:mm'));
                        \$('p.lastsaved').find('time').attr('datetime', moment().format());
                        \$('p.lastsaved').find('time').attr('title', moment().format());
                        updateMoments();

                        \$('a#lastsavedstatus strong').text( \$(\"#statusselect option:selected\").text() );

                    })
                    .fail(function(){
                        \$('p.lastsaved').text('";
        // line 216
        echo $this->env->getExtension('Bolt')->trans("Could not save %contenttype%.", array("%contenttype%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : $this->getContext($context, "contenttype")), "singular_name")));
        echo "');
                    })
                    .always(function(){
                        // Re-enable buttons
                        \$('#sidebarsavecontinuebutton, #savecontinuebutton').removeClass('disabled');
                    });
            }

        });

    });
</script>

    </section>

    ";
        // line 231
        echo $this->env->getExtension('silex')->render($this->env, $this->env->getExtension('routing')->getPath("lastmodified", array("contenttypeslug" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : $this->getContext($context, "contenttype")), "slug"), "contentid" => $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id"))));
        echo "

    ";
        // line 233
        echo $this->env->getExtension('silex')->render($this->env, $this->env->getExtension('routing')->getPath("showstack", array("items" => 5, "options" => "full")));
        echo "


    </aside>
</div>


";
        // line 240
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "editcontent.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  519 => 240,  509 => 233,  504 => 231,  486 => 216,  471 => 206,  467 => 205,  446 => 187,  434 => 182,  418 => 171,  396 => 151,  390 => 149,  380 => 147,  378 => 146,  369 => 140,  365 => 139,  361 => 138,  354 => 134,  347 => 130,  340 => 126,  334 => 123,  324 => 115,  318 => 113,  308 => 111,  306 => 110,  299 => 106,  292 => 102,  285 => 98,  278 => 93,  263 => 91,  259 => 90,  253 => 89,  249 => 88,  244 => 85,  229 => 83,  224 => 82,  222 => 81,  216 => 80,  212 => 79,  208 => 77,  199 => 76,  195 => 75,  187 => 74,  182 => 73,  180 => 72,  177 => 71,  167 => 63,  165 => 62,  161 => 61,  154 => 60,  150 => 59,  144 => 57,  140 => 56,  134 => 53,  131 => 52,  129 => 51,  126 => 50,  116 => 42,  114 => 41,  106 => 40,  101 => 38,  96 => 37,  92 => 36,  86 => 34,  82 => 33,  76 => 30,  73 => 29,  71 => 28,  65 => 25,  58 => 21,  54 => 19,  52 => 18,  49 => 17,  47 => 16,  42 => 13,  40 => 12,  37 => 11,  35 => 10,  29 => 7,  23 => 3,  21 => 2,  19 => 1,);
    }
}
