<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9f73aad1d1c41cba15b2554e9ba554bdecaeb1bafa27d9717867fe27e1d1473c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_6695c88e7f648752d56c0ed6ebd644f31677c1154cd3e23f8c9d4a8ae0f97282 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6695c88e7f648752d56c0ed6ebd644f31677c1154cd3e23f8c9d4a8ae0f97282->enter($__internal_6695c88e7f648752d56c0ed6ebd644f31677c1154cd3e23f8c9d4a8ae0f97282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_930742ab793b735e6ecfb227215ef9f867f07e602fd71a55c8e70b01c4900648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_930742ab793b735e6ecfb227215ef9f867f07e602fd71a55c8e70b01c4900648->enter($__internal_930742ab793b735e6ecfb227215ef9f867f07e602fd71a55c8e70b01c4900648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6695c88e7f648752d56c0ed6ebd644f31677c1154cd3e23f8c9d4a8ae0f97282->leave($__internal_6695c88e7f648752d56c0ed6ebd644f31677c1154cd3e23f8c9d4a8ae0f97282_prof);

        
        $__internal_930742ab793b735e6ecfb227215ef9f867f07e602fd71a55c8e70b01c4900648->leave($__internal_930742ab793b735e6ecfb227215ef9f867f07e602fd71a55c8e70b01c4900648_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1bbe62523db6c77e557b359986369d621c80c20b439b0bed2ba2d4bc894cbbb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bbe62523db6c77e557b359986369d621c80c20b439b0bed2ba2d4bc894cbbb4->enter($__internal_1bbe62523db6c77e557b359986369d621c80c20b439b0bed2ba2d4bc894cbbb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_38ce2e1f58a1c65c90086bc768f923ff653c09b33e03e6b2eba8c73e86e4d9d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38ce2e1f58a1c65c90086bc768f923ff653c09b33e03e6b2eba8c73e86e4d9d3->enter($__internal_38ce2e1f58a1c65c90086bc768f923ff653c09b33e03e6b2eba8c73e86e4d9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_38ce2e1f58a1c65c90086bc768f923ff653c09b33e03e6b2eba8c73e86e4d9d3->leave($__internal_38ce2e1f58a1c65c90086bc768f923ff653c09b33e03e6b2eba8c73e86e4d9d3_prof);

        
        $__internal_1bbe62523db6c77e557b359986369d621c80c20b439b0bed2ba2d4bc894cbbb4->leave($__internal_1bbe62523db6c77e557b359986369d621c80c20b439b0bed2ba2d4bc894cbbb4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a5e8cfdbb024308c0f701d73d453d7fd493590724ed38fc91f5b35c33ed3753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a5e8cfdbb024308c0f701d73d453d7fd493590724ed38fc91f5b35c33ed3753->enter($__internal_9a5e8cfdbb024308c0f701d73d453d7fd493590724ed38fc91f5b35c33ed3753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b492bd589598311fc1920118bba006ffa437660080b5c782c82ab372bed4cee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b492bd589598311fc1920118bba006ffa437660080b5c782c82ab372bed4cee8->enter($__internal_b492bd589598311fc1920118bba006ffa437660080b5c782c82ab372bed4cee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b492bd589598311fc1920118bba006ffa437660080b5c782c82ab372bed4cee8->leave($__internal_b492bd589598311fc1920118bba006ffa437660080b5c782c82ab372bed4cee8_prof);

        
        $__internal_9a5e8cfdbb024308c0f701d73d453d7fd493590724ed38fc91f5b35c33ed3753->leave($__internal_9a5e8cfdbb024308c0f701d73d453d7fd493590724ed38fc91f5b35c33ed3753_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
