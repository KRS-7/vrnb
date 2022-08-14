<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Installation/welcome.twig */
class __TwigTemplate_edcbf06656217ed28f4c1db18968070a0a43ffaf9b4fbb16da2303ec7890ab2d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Installation/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Installation/layout.twig", "@Installation/welcome.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <h2>";
        // line 5
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_Welcome"]), "html", null, true);
        echo "</h2>

    ";
        // line 7
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_WelcomeHelp", (isset($context["totalNumberOfSteps"]) || array_key_exists("totalNumberOfSteps", $context) ? $context["totalNumberOfSteps"] : (function () { throw new RuntimeError('Variable "totalNumberOfSteps" does not exist.', 7, $this->source); })())]);
        echo "

    <script type=\"text/javascript\">
        <!--
        \$(function () {
            // client-side test for broken tracker (e.g., mod_security rule)
            \$('.next-step').hide();
            \$.ajax({
                url: 'matomo.php',
                data: 'url=http://example.com',
                complete: function () {
                    \$('.next-step').show();
                },
                error: function (req) {
                    \$('.next-step a').attr('href', \$('.next-step a').attr('href') + '&trackerStatus=' + req.status);
                }
            });
        });
        //-->
    </script>

    ";
        // line 28
        if ( !(isset($context["showNextStep"]) || array_key_exists("showNextStep", $context) ? $context["showNextStep"] : (function () { throw new RuntimeError('Variable "showNextStep" does not exist.', 28, $this->source); })())) {
            // line 29
            echo "        <p class=\"next-step\">
            <a href=\"";
            // line 30
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 30, $this->source); })()), "html", null, true);
            echo "\">";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_RefreshPage"]), "html", null, true);
            echo " &raquo;</a>
        </p>
    ";
        }
        // line 33
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Installation/welcome.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 33,  87 => 30,  84 => 29,  82 => 28,  58 => 7,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Installation/layout.twig' %}

{% block content %}

    <h2>{{ 'Installation_Welcome'|translate }}</h2>

    {{ 'Installation_WelcomeHelp'|translate(totalNumberOfSteps)|raw }}

    <script type=\"text/javascript\">
        <!--
        \$(function () {
            // client-side test for broken tracker (e.g., mod_security rule)
            \$('.next-step').hide();
            \$.ajax({
                url: 'matomo.php',
                data: 'url=http://example.com',
                complete: function () {
                    \$('.next-step').show();
                },
                error: function (req) {
                    \$('.next-step a').attr('href', \$('.next-step a').attr('href') + '&trackerStatus=' + req.status);
                }
            });
        });
        //-->
    </script>

    {% if not showNextStep %}
        <p class=\"next-step\">
            <a href=\"{{ url }}\">{{ 'General_RefreshPage'|translate }} &raquo;</a>
        </p>
    {% endif %}

{% endblock %}
", "@Installation/welcome.twig", "C:\\wamp64\\www\\Vrnb\\matomo\\plugins\\Installation\\templates\\welcome.twig");
    }
}
