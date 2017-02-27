<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_dd1dba4fb6a778294c47686bf80f695d13ccbf28ca5ac67a6f977fa42b51b2f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9734a21b700f6b887df52ac8b5a85dc0978efeae03d3ad81c47c989b3cd52064 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9734a21b700f6b887df52ac8b5a85dc0978efeae03d3ad81c47c989b3cd52064->enter($__internal_9734a21b700f6b887df52ac8b5a85dc0978efeae03d3ad81c47c989b3cd52064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_bd670073e9e962a26c7c0c7c72d3109d3578269980f5cfefd8c5805ffe5d7300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd670073e9e962a26c7c0c7c72d3109d3578269980f5cfefd8c5805ffe5d7300->enter($__internal_bd670073e9e962a26c7c0c7c72d3109d3578269980f5cfefd8c5805ffe5d7300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9734a21b700f6b887df52ac8b5a85dc0978efeae03d3ad81c47c989b3cd52064->leave($__internal_9734a21b700f6b887df52ac8b5a85dc0978efeae03d3ad81c47c989b3cd52064_prof);

        
        $__internal_bd670073e9e962a26c7c0c7c72d3109d3578269980f5cfefd8c5805ffe5d7300->leave($__internal_bd670073e9e962a26c7c0c7c72d3109d3578269980f5cfefd8c5805ffe5d7300_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ff1988a777cd7430658f13b00d552763dd4450ec8f6be185f006257564d2eaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ff1988a777cd7430658f13b00d552763dd4450ec8f6be185f006257564d2eaa->enter($__internal_6ff1988a777cd7430658f13b00d552763dd4450ec8f6be185f006257564d2eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9118324d759fe9f1a64a6e4cac300a3d1aecea82e3413bc0b6df918501031307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9118324d759fe9f1a64a6e4cac300a3d1aecea82e3413bc0b6df918501031307->enter($__internal_9118324d759fe9f1a64a6e4cac300a3d1aecea82e3413bc0b6df918501031307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9118324d759fe9f1a64a6e4cac300a3d1aecea82e3413bc0b6df918501031307->leave($__internal_9118324d759fe9f1a64a6e4cac300a3d1aecea82e3413bc0b6df918501031307_prof);

        
        $__internal_6ff1988a777cd7430658f13b00d552763dd4450ec8f6be185f006257564d2eaa->leave($__internal_6ff1988a777cd7430658f13b00d552763dd4450ec8f6be185f006257564d2eaa_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_992f4debf7cb803cd0ba1fa60dff085d4c995fd0810a59ee2baefab1ff357110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_992f4debf7cb803cd0ba1fa60dff085d4c995fd0810a59ee2baefab1ff357110->enter($__internal_992f4debf7cb803cd0ba1fa60dff085d4c995fd0810a59ee2baefab1ff357110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_11e258e466f0c99c747ec349578436196e82711fc9edd97fd97eb34bf9872f9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11e258e466f0c99c747ec349578436196e82711fc9edd97fd97eb34bf9872f9b->enter($__internal_11e258e466f0c99c747ec349578436196e82711fc9edd97fd97eb34bf9872f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_11e258e466f0c99c747ec349578436196e82711fc9edd97fd97eb34bf9872f9b->leave($__internal_11e258e466f0c99c747ec349578436196e82711fc9edd97fd97eb34bf9872f9b_prof);

        
        $__internal_992f4debf7cb803cd0ba1fa60dff085d4c995fd0810a59ee2baefab1ff357110->leave($__internal_992f4debf7cb803cd0ba1fa60dff085d4c995fd0810a59ee2baefab1ff357110_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
