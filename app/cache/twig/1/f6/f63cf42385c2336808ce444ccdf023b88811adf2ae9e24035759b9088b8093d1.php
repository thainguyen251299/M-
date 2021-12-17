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

/* default/admin/settings_index.tpl */
class __TwigTemplate_7031428ab6fa21785c610846fbb918cce783873ebd93b1ecfc81e6c8b6cab717 extends \Twig\Template
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
        $context["admin_chamilo_announcements_disable"] = api_get_configuration_value("admin_chamilo_announcements_disable");
        // line 2
        echo "
<script>
    \$(document).ready(function () {
    
        setTimeout(function(){
            \$.ajax({
                url: '";
        // line 8
        echo ($context["web_admin_ajax_url"] ?? null);
        echo "?a=version',
                success: function (version) {
                    \$(\".admin-block-version\").html(version);
                }
            });
        }, 3000);

        ";
        // line 15
        if ($this->getAttribute(($context["_u"] ?? null), "is_admin", [])) {
            // line 16
            echo "            (function (CKEDITOR) {
                CKEDITOR.replace('extra_content');
    
                var extraContentEditor = CKEDITOR.instances.extra_content;
    
                \$('button.admin-edit-block').on('click', function (e) {
                    e.preventDefault();
    
                    var \$self = \$(this);
    
                    var extraContent = \$.ajax('";
            // line 26
            echo $this->getAttribute(($context["_p"] ?? null), "web_ajax", []);
            echo "admin.ajax.php', {
                        type: 'post',
                        data: {
                            a: 'get_extra_content',
                            block: \$self.data('id')
                        }
                    });
    
                    \$.when(extraContent).done(function (content) {
                        extraContentEditor.setData(content);
                        \$('#extra-block').val(\$self.data('id'));
                        \$('#modal-extra-title').text(\$self.data('label'));
    
                        \$('#modal-extra').modal('show');
                    });
                });
            })(window.CKEDITOR);

            ";
            // line 44
            if ( !($context["admin_chamilo_announcements_disable"] ?? null)) {
                // line 45
                echo "                \$
                    .ajax('";
                // line 46
                echo ($context["web_admin_ajax_url"] ?? null);
                echo "?a=get_latest_news')
                    .then(function (response) {
                        if (!response.length) {
                            return;
                        }

                        \$('#chamilo-news').show(150);
                        \$('#chamilo-news-content').html(response);
                    });
            ";
            }
            // line 56
            echo "        ";
        }
        // line 57
        echo "    });
</script>

<section id=\"settings\" class=\"row\">
    ";
        // line 61
        $context["columns"] = 2;
        // line 62
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blocks"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["block_item"]) {
            // line 63
            echo "        ";
            if ($this->getAttribute($context["block_item"], "items", [])) {
                // line 64
                echo "            <div id=\"tabs-";
                echo $this->getAttribute($context["loop"], "index", []);
                echo "\" class=\"settings-block col-md-6\">
                <div class=\"panel panel-default ";
                // line 65
                echo $this->getAttribute($context["block_item"], "class", []);
                echo "\">
                    <div class=\"panel-heading\">
                        ";
                // line 67
                echo $this->getAttribute($context["block_item"], "icon", []);
                echo " ";
                echo $this->getAttribute($context["block_item"], "label", []);
                echo "
                        ";
                // line 68
                if (($this->getAttribute($context["block_item"], "editable", []) && $this->getAttribute(($context["_u"] ?? null), "is_admin", []))) {
                    // line 69
                    echo "                            <button type=\"button\" class=\"btn btn-link btn-sm admin-edit-block pull-right\"
                                    data-label=\"";
                    // line 70
                    echo $this->getAttribute($context["block_item"], "label", []);
                    echo "\" data-id=\"";
                    echo $this->getAttribute($context["block_item"], "class", []);
                    echo "\">
                                <img src=\"";
                    // line 71
                    echo Display::get_icon_path("edit.png", 22);
                    echo "\" width=\"22\" height=\"22\" alt=\"";
                    echo get_lang("Edit");
                    echo "\"
                                     title=\"";
                    // line 72
                    echo get_lang("Edit");
                    echo "\"/>
                            </button>
                        ";
                }
                // line 75
                echo "                    </div>
                    <div class=\"panel-body\">
                        <div style=\"display: block;\">
                            ";
                // line 78
                echo $this->getAttribute($context["block_item"], "search_form", []);
                echo "
                        </div>
                        ";
                // line 80
                if ( !(null === $this->getAttribute($context["block_item"], "items", []))) {
                    // line 81
                    echo "                            <div class=\"block-items-admin\">
                                <ul class=\"list-items-admin\">
                                    ";
                    // line 83
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["block_item"], "items", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
                        // line 84
                        echo "                                        <li>
                                            <a href=\"";
                        // line 85
                        echo $this->getAttribute($context["url"], "url", []);
                        echo "\">
                                                ";
                        // line 86
                        echo $this->getAttribute($context["url"], "label", []);
                        echo "
                                            </a>
                                        </li>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['url'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 90
                    echo "                                </ul>
                            </div>
                        ";
                }
                // line 93
                echo "
                        ";
                // line 94
                if ( !(null === $this->getAttribute($context["block_item"], "extra", []))) {
                    // line 95
                    echo "                            <div>
                                ";
                    // line 96
                    echo $this->getAttribute($context["block_item"], "extra", []);
                    echo "
                            </div>
                        ";
                }
                // line 99
                echo "
                        ";
                // line 100
                if ($this->getAttribute($context["block_item"], "extraContent", [])) {
                    // line 101
                    echo "                            <div>";
                    echo $this->getAttribute($context["block_item"], "extraContent", []);
                    echo "</div>
                        ";
                }
                // line 103
                echo "                    </div>
                </div>
            </div>
        ";
            }
            // line 107
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "</section>

";
        // line 110
        if ( !($context["admin_chamilo_announcements_disable"] ?? null)) {
            // line 111
            echo "    <section id=\"chamilo-news\" style=\"display: none;\">
        <div class=\"alert alert-info\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
            <div id=\"chamilo-news-content\"></div>
        </div>
    </section>
";
        }
        // line 120
        echo "
";
        // line 121
        if ($this->getAttribute(($context["_u"] ?? null), "is_admin", [])) {
            // line 122
            echo "    <div class=\"modal fade\" id=\"modal-extra\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
            // line 126
            echo get_lang("Close");
            echo "\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"modal-extra-title\">";
            // line 129
            echo get_lang("Blocks");
            echo "</h4>
                </div>
                <div class=\"modal-body\">
                    ";
            // line 132
            echo ($context["extraDataForm"] ?? null);
            echo "
                </div>
            </div>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/admin/settings_index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 132,  295 => 129,  289 => 126,  283 => 122,  281 => 121,  278 => 120,  267 => 111,  265 => 110,  261 => 108,  247 => 107,  241 => 103,  235 => 101,  233 => 100,  230 => 99,  224 => 96,  221 => 95,  219 => 94,  216 => 93,  211 => 90,  201 => 86,  197 => 85,  194 => 84,  190 => 83,  186 => 81,  184 => 80,  179 => 78,  174 => 75,  168 => 72,  162 => 71,  156 => 70,  153 => 69,  151 => 68,  145 => 67,  140 => 65,  135 => 64,  132 => 63,  114 => 62,  112 => 61,  106 => 57,  103 => 56,  90 => 46,  87 => 45,  85 => 44,  64 => 26,  52 => 16,  50 => 15,  40 => 8,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/admin/settings_index.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\default\\admin\\settings_index.tpl");
    }
}
