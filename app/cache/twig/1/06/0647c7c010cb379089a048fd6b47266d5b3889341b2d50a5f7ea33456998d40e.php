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

/* default/exercise/partials/result_exercise.tpl */
class __TwigTemplate_94bb8d594f0ffd0bdb9ee05b085dd76be0be10842a653178c5748313a9c521ef extends \Twig\Template
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
        // line 1
        echo "<div class=\"question-result\">
    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
            ";
        // line 4
        if (api_get_configuration_value("save_titles_as_html")) {
            // line 5
            echo "                ";
            echo Security::remove_XSS($this->getAttribute(($context["data"] ?? null), "title", []));
            echo "
            ";
        } else {
            // line 7
            echo "                <h3>";
            echo Security::remove_XSS($this->getAttribute(($context["data"] ?? null), "title", []));
            echo "</h3>
            ";
        }
        // line 9
        echo "
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <div class=\"user-avatar\">
                        <img src=\"";
        // line 13
        echo $this->getAttribute(($context["data"] ?? null), "avatar", []);
        echo "\">
                    </div>
                    <div class=\"user-info\">
                        <strong>";
        // line 16
        echo $this->getAttribute(($context["data"] ?? null), "name_url", []);
        echo "</strong>
                        <br />
                        ";
        // line 18
        if (($context["signature"] ?? null)) {
            // line 19
            echo "                            <img src=\"";
            echo ($context["signature"] ?? null);
            echo "\" />
                        ";
        }
        // line 21
        echo "                    </div>
                </div>
                <div class=\"col-md-9\">
                    <div class=\"group-data\">
                        <div class=\"list-data username\">
                            <span class=\"item\">";
        // line 26
        echo get_lang("Username");
        echo "</span>
                            <i class=\"fa fa-fw fa-user\" aria-hidden=\"true\"></i> ";
        // line 27
        echo $this->getAttribute(($context["data"] ?? null), "username", []);
        echo "
                        </div>

                        ";
        // line 30
        if ($this->getAttribute(($context["data"] ?? null), "start_date", [])) {
            // line 31
            echo "                            <div class=\"list-data start-date\">
                                <span class=\"item\">";
            // line 32
            echo get_lang("StartDate");
            echo "</span>
                                <i class=\"fa fa-fw fa-calendar\" aria-hidden=\"true\"></i> ";
            // line 33
            echo $this->getAttribute(($context["data"] ?? null), "start_date", []);
            echo "
                            </div>
                        ";
        }
        // line 36
        echo "
                        ";
        // line 37
        if ($this->getAttribute(($context["data"] ?? null), "duration", [])) {
            // line 38
            echo "                            <div class=\"list-data duration\">
                                <span class=\"item\">";
            // line 39
            echo get_lang("Duration");
            echo "</span>
                                <i class=\"fa fa-fw fa-clock-o\" aria-hidden=\"true\"></i> ";
            // line 40
            echo $this->getAttribute(($context["data"] ?? null), "duration", []);
            echo "
                            </div>
                        ";
        }
        // line 43
        echo "
                        ";
        // line 44
        if ($this->getAttribute(($context["data"] ?? null), "ip", [])) {
            // line 45
            echo "                            <div class=\"list-data ip\">
                                <span class=\"item\">";
            // line 46
            echo get_lang("IP");
            echo "</span>
                                <i class=\"fa fa-fw fa-laptop\" aria-hidden=\"true\"></i> ";
            // line 47
            echo $this->getAttribute(($context["data"] ?? null), "ip", []);
            echo "
                            </div>
                        ";
        }
        // line 50
        echo "
                        ";
        // line 51
        if (($context["allow_signature"] ?? null)) {
            // line 52
            echo "                            <div class=\"list-data\">
                                <span class=\"item\"></span>
                                <a id=\"sign\" class=\"btn btn-primary\" href=\"javascript:void(0)\">
                                    <em class=\"fa fa-pencil\"></em> ";
            // line 55
            echo get_plugin_lang("Sign", "ExerciseSignaturePlugin");
            echo "
                                </a>
                            </div>
                        ";
        }
        // line 59
        echo "
                        ";
        // line 60
        if (($context["allow_export_pdf"] ?? null)) {
            // line 61
            echo "                            <br />
                            <div class=\"list-data\">
                                <span class=\"item\"></span>
                                <a href=\"";
            // line 64
            echo ($context["export_url"] ?? null);
            echo "\" class=\"btn btn-default\">
                                    <img src=\"";
            // line 65
            echo Display::get_icon_path("export_pdf.png", 32);
            echo "\" /> ";
            echo get_lang("ExportResponseReport");
            echo "
                                </a>
                            </div>
                        ";
        }
        // line 69
        echo "                    </div>
                    <hr />
                    <div id=\"quiz_saved_answers_container\">
                    ";
        // line 72
        if (($this->getAttribute(($context["data"] ?? null), "number_of_answers_saved", []) != $this->getAttribute(($context["data"] ?? null), "number_of_answers", []))) {
            // line 73
            echo "                        <span class=\"label label-warning\">
                            <strong>";
            // line 74
            echo sprintf(get_lang("XAnswersSavedByUsersFromXTotal"), $this->getAttribute(($context["data"] ?? null), "number_of_answers_saved", []), $this->getAttribute(($context["data"] ?? null), "number_of_answers", []));
            echo "</strong>
                        </span>
                    ";
        } else {
            // line 77
            echo "                        <span class=\"label label-success\">
                            <strong>";
            // line 78
            echo sprintf(get_lang("XAnswersSavedByUsersFromXTotal"), $this->getAttribute(($context["data"] ?? null), "number_of_answers_saved", []), $this->getAttribute(($context["data"] ?? null), "number_of_answers", []));
            echo "</strong>
                        </span>
                    ";
        }
        // line 81
        echo "
                        ";
        // line 82
        if (api_get_configuration_value("quiz_confirm_saved_answers")) {
            // line 83
            echo "                            ";
            $context["enable_form"] = (twig_test_empty($this->getAttribute($this->getAttribute(($context["data"] ?? null), "track_confirmation", []), "updatedAt", [])) && ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "track_confirmation", []), "userId", []) == $this->getAttribute(($context["_u"] ?? null), "id", [])));
            // line 84
            echo "                            <form class=\"form-horizontal\" action=\"#\" id=\"quiz_confirm_saved_answers_form\">
                                <div class=\"form-group\">
                                    <div class=\"col-sm-12\">
                                        <div class=\"checkbox\">
                                            <label>
                                                <input
                                                    type=\"checkbox\"
                                                    name=\"quiz_confirm_saved_answers_check\"
                                                    ";
            // line 92
            if ( !($context["enable_form"] ?? null)) {
                echo "disabled";
            }
            echo " ";
            if ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "track_confirmation", []), "confirmed", [])) {
                echo "checked";
            }
            // line 93
            echo "                                                >
                                                ";
            // line 94
            echo get_lang("QuizConfirmSavedAnswers");
            echo "
                                            </label>
                                        </div>
                                        ";
            // line 97
            if (($context["enable_form"] ?? null)) {
                // line 98
                echo "                                            <span class=\"help-block\">";
                echo get_lang("QuizConfirmSavedAnswersHelp");
                echo "</span>
                                        ";
            }
            // line 100
            echo "                                    </div>
                                </div>
                                ";
            // line 102
            if (($context["enable_form"] ?? null)) {
                // line 103
                echo "                                    <div class=\"form-group\">
                                        <div class=\"col-sm-12\">
                                            <input type=\"hidden\" name=\"tc_id\" value=\"";
                // line 105
                echo $this->getAttribute($this->getAttribute(($context["data"] ?? null), "track_confirmation", []), "id", []);
                echo "\">
                                            <button type=\"submit\" class=\"btn btn-primary\" disabled>
                                                <span class=\"fa fa-save fa-fw\" aria-hidden=\"true\"></span> ";
                // line 107
                echo get_lang("Save");
                echo "
                                            </button>
                                        </div>
                                    </div>
                                ";
            }
            // line 112
            echo "                            </form>
                        ";
        }
        // line 114
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 121
        if (api_get_configuration_value("quiz_confirm_saved_answers")) {
            // line 122
            echo "    ";
            $context["enable_form"] = (twig_test_empty($this->getAttribute($this->getAttribute(($context["data"] ?? null), "track_confirmation", []), "updatedAt", [])) && ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "track_confirmation", []), "userId", []) == $this->getAttribute(($context["_u"] ?? null), "id", [])));
            // line 123
            echo "    ";
            if (($context["enable_form"] ?? null)) {
                // line 124
                echo "        <script>
            \$(function () {
                var form = \$('#quiz_confirm_saved_answers_form');
                var checkbox = form.find('[type=\"checkbox\"]');
                var button = form.find(':submit');

                checkbox.on('change', function () {
                    button.prop('disabled', !this.checked);
                });

                form.on('submit', function (e) {
                    e.preventDefault();

                    if (!checkbox.is(':checked')) {
                        return;
                    }

                    var xhrData = form.serialize();

                    button.prop('disabled', true);
                    checkbox.prop('disabled', true);

                    \$.post(
                        '";
                // line 147
                echo $this->getAttribute(($context["_p"] ?? null), "web_ajax", []);
                echo "exercise.ajax.php?a=quiz_confirm_saved_answers',
                        xhrData
                    ).done(function () {
                        button.parents('.form-group').remove();

                        \$('#quiz_end_message').show();
                    }).fail(function (response) {
                        button.replaceWith(response.responseText);
                    });
                })

                \$('#quiz_end_message').hide();
            });
        </script>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "default/exercise/partials/result_exercise.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 147,  294 => 124,  291 => 123,  288 => 122,  286 => 121,  277 => 114,  273 => 112,  265 => 107,  260 => 105,  256 => 103,  254 => 102,  250 => 100,  244 => 98,  242 => 97,  236 => 94,  233 => 93,  225 => 92,  215 => 84,  212 => 83,  210 => 82,  207 => 81,  201 => 78,  198 => 77,  192 => 74,  189 => 73,  187 => 72,  182 => 69,  173 => 65,  169 => 64,  164 => 61,  162 => 60,  159 => 59,  152 => 55,  147 => 52,  145 => 51,  142 => 50,  136 => 47,  132 => 46,  129 => 45,  127 => 44,  124 => 43,  118 => 40,  114 => 39,  111 => 38,  109 => 37,  106 => 36,  100 => 33,  96 => 32,  93 => 31,  91 => 30,  85 => 27,  81 => 26,  74 => 21,  68 => 19,  66 => 18,  61 => 16,  55 => 13,  49 => 9,  43 => 7,  37 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/exercise/partials/result_exercise.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\default\\exercise\\partials\\result_exercise.tpl");
    }
}
