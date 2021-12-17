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

/* default/gradebook/my_certificates.tpl */
class __TwigTemplate_2ca582ad0969a003d6c8992a3d470c43512169fe0c149e965b3749382d54d69d extends \Twig\Template
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
        if ( !twig_test_empty(($context["course_list"] ?? null))) {
            // line 2
            echo "    <h2 class=\"page-header\">";
            echo get_lang("Courses");
            echo "</h2>
    <div class=\"table-responsive\">
        <table class=\"table table-hover table-striped\">
            <thead>
                <tr>
                    <th>";
            // line 7
            echo get_lang("Course");
            echo "</th>
                    <th class=\"text-right\">";
            // line 8
            echo get_lang("Score");
            echo "</th>
                    <th class=\"text-center\">";
            // line 9
            echo get_lang("Date");
            echo "</th>
                    <th width=\"10%\" class=\"text-right\">&nbsp;</th>
                    <th width=\"10%\" class=\"text-right\">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["course_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 16
                echo "                    <tr>
                        <td>";
                // line 17
                echo $this->getAttribute($context["row"], "course", []);
                echo "</td>
                        <td class=\"text-right\">";
                // line 18
                echo $this->getAttribute($context["row"], "score", []);
                echo "</td>
                        <td class=\"text-center\">";
                // line 19
                echo $this->getAttribute($context["row"], "date", []);
                echo "</td>

                        ";
                // line 21
                if (($context["allow_export"] ?? null)) {
                    // line 22
                    echo "                        <td class=\"text-right\">
                            <a href=\"";
                    // line 23
                    echo $this->getAttribute($context["row"], "pdf", []);
                    echo "\" target=\"_blank\" class=\"btn btn-primary btn-block\">
                                <i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\"></i>
                                ";
                    // line 25
                    echo get_lang("DownloadCertificatePdf");
                    echo "
                            </a>
                        </td>
                        ";
                }
                // line 29
                echo "
                        <td class=\"text-right\">
                            <a href=\"";
                // line 31
                echo $this->getAttribute($context["row"], "link", []);
                echo "\" target=\"_blank\" class=\"btn btn-default btn-block\">
                                <em class=\"fa fa-external-link\"></em> ";
                // line 32
                echo get_lang("Certificate");
                echo "
                            </a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            </tbody>
        </table>
    </div>
";
        }
        // line 41
        echo "
";
        // line 42
        if ( !twig_test_empty(($context["session_list"] ?? null))) {
            // line 43
            echo "    <h2 class=\"page-header\">";
            echo get_lang("Sessions");
            echo "</h2>
    <div class=\"table-responsive\">
        <table class=\"table table-hover table-striped\">
            <thead>
                <tr>
                    <th>";
            // line 48
            echo get_lang("Session");
            echo "</th>
                    <th>";
            // line 49
            echo get_lang("Course");
            echo "</th>
                    <th class=\"text-right\">";
            // line 50
            echo get_lang("Score");
            echo "</th>
                    <th class=\"text-center\">";
            // line 51
            echo get_lang("Date");
            echo "</th>
                    <th width=\"10%\" class=\"text-right\">&nbsp;</th>
                    <th width=\"10%\" class=\"text-right\">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["session_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 58
                echo "                    <tr>
                        <td>";
                // line 59
                echo $this->getAttribute($context["row"], "session", []);
                echo "</td>
                        <td>";
                // line 60
                echo $this->getAttribute($context["row"], "course", []);
                echo "</td>
                        <td class=\"text-right\">";
                // line 61
                echo $this->getAttribute($context["row"], "score", []);
                echo "</td>
                        <td class=\"text-center\">";
                // line 62
                echo $this->getAttribute($context["row"], "date", []);
                echo "</td>
                        <td class=\"text-right\">
                            <a href=\"";
                // line 64
                echo $this->getAttribute($context["row"], "pdf", []);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-block\">
                                <i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\"></i>
                                 ";
                // line 66
                echo get_lang("DownloadCertificatePdf");
                echo "
                            </a>
                        </td>
                        <td class=\"text-right\">
                            <a href=\"";
                // line 70
                echo $this->getAttribute($context["row"], "link", []);
                echo "\" target=\"_blank\" class=\"btn btn-default btn-block\">
                                <em class=\"fa fa-external-link\"></em> ";
                // line 71
                echo get_lang("Certificate");
                echo "
                            </a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "            </tbody>
        </table>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/gradebook/my_certificates.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 76,  195 => 71,  191 => 70,  184 => 66,  179 => 64,  174 => 62,  170 => 61,  166 => 60,  162 => 59,  159 => 58,  155 => 57,  146 => 51,  142 => 50,  138 => 49,  134 => 48,  125 => 43,  123 => 42,  120 => 41,  114 => 37,  103 => 32,  99 => 31,  95 => 29,  88 => 25,  83 => 23,  80 => 22,  78 => 21,  73 => 19,  69 => 18,  65 => 17,  62 => 16,  58 => 15,  49 => 9,  45 => 8,  41 => 7,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/gradebook/my_certificates.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\default\\gradebook\\my_certificates.tpl");
    }
}
