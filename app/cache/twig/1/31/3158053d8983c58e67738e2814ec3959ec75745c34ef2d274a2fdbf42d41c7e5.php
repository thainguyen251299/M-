<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/exercise/result.tpl */
class __TwigTemplate_ef2b60e642ddd1df015fc5ca1d067b1d41b5fea1bfdba1a2dc6bb0568723a2ad extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        echo "
";
        // line 3
        echo ($context["page_top"] ?? null);
        echo "
";
        // line 4
        echo ($context["page_content"] ?? null);
        echo "
";
        // line 5
        echo ($context["page_bottom"] ?? null);
        echo "

";
        // line 7
        if (($context["allow_signature"] ?? null)) {
            // line 8
            echo "    <div id=\"sign_popup\" style=\"display: none\">
        <div id=\"signature_area\" class=\"well\">
            <canvas width=\"400px\"></canvas>
        </div>
        <span class=\"loading\" style=\"display: none\"><i class=\"fas fa-spinner\"></i></span>

        <span id=\"save_controls\">
            <button id=\"sign_popup_save\" class=\"btn btn-primary\" type=\"submit\">
                <em class=\"fa fa-save\"></em> ";
            // line 16
            echo get_lang("Save");
            echo "
            </button>
            <button id=\"sign_popup_clean\" class=\"btn btn-default\" type=\"submit\">
                <em class=\"fa fa-eraser\"></em> ";
            // line 19
            echo get_lang("Clean");
            echo "
            </button>
        </span>
        <span id=\"close_controls\" style=\"display: none\">
            <span id=\"sign_results\"></span>
            <hr />
            <button id=\"sign_popup_close\" class=\"btn btn-default\" type=\"submit\">
                ";
            // line 26
            echo get_lang("Close");
            echo "
            </button>
        </span>
    </div>

    <script>
        var imageFormat = 'image/png';
        var canvas = document.querySelector(\"canvas\");
        var signaturePad = new SignaturePad(canvas);
        var dataURL = signaturePad.toDataURL(imageFormat);
        var url = \"";
            // line 36
            echo $this->getAttribute(($context["_p"] ?? null), "web_ajax", []);
            echo "exercise.ajax.php?";
            echo $this->getAttribute(($context["_p"] ?? null), "web_cid_query", []);
            echo "\";
        var exeId = \"";
            // line 37
            echo ($context["exe_id"] ?? null);
            echo "\";

        \$(function() {
            \$(\"#sign_popup_close\").on(\"click\", function() {
                \$(\"#sign_popup\").dialog(\"close\");
                \$('#loading').hide();
                \$('#save_controls').show();
                \$('#close_controls').hide();
                \$('#signature_area').show();
            });

            \$(\"#sign_popup_clean\").on(\"click\", function() {
                signaturePad.clear();
            });

            \$(\"#sign_popup_save\").on(\"click\", function() {
                if (signaturePad.isEmpty()) {
                    alert('";
            // line 54
            echo twig_escape_filter($this->env, get_plugin_lang("ProvideASignatureFirst", "ExerciseSignaturePlugin"), "js");
            echo "');
                    return false;
                }

                var dataURL = signaturePad.toDataURL(imageFormat);
                \$.ajax({
                    beforeSend: function(result) {
                        \$('#loading').show();
                    },
                    type: \"POST\",
                    url: url,
                    data: \"a=sign_attempt&exe_id=\"+exeId+\"&file=\"+dataURL,
                    success: function(data) {
                        \$('#loading').hide();
                        \$('#save_controls').hide();
                        \$('#close_controls').show();
                        \$('#signature_area').hide();

                        signaturePad.clear();
                        if (1 == data) {
                            \$('#sign_results').html('";
            // line 74
            echo get_lang("Saved");
            echo "');
                            \$('#sign').hide();
                            //\$('#sign').html('";
            // line 76
            echo get_lang("SignatureSaved");
            echo "');
                        } else {
                            \$('#sign_results').html('";
            // line 78
            echo get_lang("Error");
            echo "');
                        }
                        \$('#close_controls').show();
                    },
                });
            });

            \$(\"#sign\").on(\"click\", function() {
                \$(\"#sign_popup\").dialog({
                    autoOpen: false,
                    width: 500,
                    height: 'auto',
                    //position:  { my: 'left top', at: 'right top'}, //of: \$target
                    close: function(){
                        //\$(\"div#\"+div_show_id).remove();
                        //\$(\"div#\"+div_content_id).remove();
                    }
                });
                \$(\"#sign_popup\").dialog(\"open\");
            });
        });
    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "default/exercise/result.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 78,  141 => 76,  136 => 74,  113 => 54,  93 => 37,  87 => 36,  74 => 26,  64 => 19,  58 => 16,  48 => 8,  46 => 7,  41 => 5,  37 => 4,  33 => 3,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/exercise/result.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\default\\exercise\\result.tpl");
    }
}
