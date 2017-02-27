<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_2ebb90987bdd5b574901d6edc93fb47590ae08b0d8ea4947a9c936d191a84f84 extends Twig_Template
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
        $__internal_abd9a7e9ae97ccb97d7a0aea40725ff3934f46fb75ef273ec4c8dcf85768bb8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abd9a7e9ae97ccb97d7a0aea40725ff3934f46fb75ef273ec4c8dcf85768bb8d->enter($__internal_abd9a7e9ae97ccb97d7a0aea40725ff3934f46fb75ef273ec4c8dcf85768bb8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_770d5672d29b4483eb57194b0f224d7bc5d569bd0480209dcd7c7cef1438b909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_770d5672d29b4483eb57194b0f224d7bc5d569bd0480209dcd7c7cef1438b909->enter($__internal_770d5672d29b4483eb57194b0f224d7bc5d569bd0480209dcd7c7cef1438b909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abd9a7e9ae97ccb97d7a0aea40725ff3934f46fb75ef273ec4c8dcf85768bb8d->leave($__internal_abd9a7e9ae97ccb97d7a0aea40725ff3934f46fb75ef273ec4c8dcf85768bb8d_prof);

        
        $__internal_770d5672d29b4483eb57194b0f224d7bc5d569bd0480209dcd7c7cef1438b909->leave($__internal_770d5672d29b4483eb57194b0f224d7bc5d569bd0480209dcd7c7cef1438b909_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa9b88f2623a0e64e9f652b1aea4cbcd8b290c65a52cbbc44f893a35447763a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa9b88f2623a0e64e9f652b1aea4cbcd8b290c65a52cbbc44f893a35447763a3->enter($__internal_aa9b88f2623a0e64e9f652b1aea4cbcd8b290c65a52cbbc44f893a35447763a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f75e411601c28f8938a706b360249c15d27c7822e2d005ff6999078eb394dc56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75e411601c28f8938a706b360249c15d27c7822e2d005ff6999078eb394dc56->enter($__internal_f75e411601c28f8938a706b360249c15d27c7822e2d005ff6999078eb394dc56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f75e411601c28f8938a706b360249c15d27c7822e2d005ff6999078eb394dc56->leave($__internal_f75e411601c28f8938a706b360249c15d27c7822e2d005ff6999078eb394dc56_prof);

        
        $__internal_aa9b88f2623a0e64e9f652b1aea4cbcd8b290c65a52cbbc44f893a35447763a3->leave($__internal_aa9b88f2623a0e64e9f652b1aea4cbcd8b290c65a52cbbc44f893a35447763a3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c74b3268dd0a8025552c0dd5b33889f82ea3bd95487bec639a41000bf40a5d90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c74b3268dd0a8025552c0dd5b33889f82ea3bd95487bec639a41000bf40a5d90->enter($__internal_c74b3268dd0a8025552c0dd5b33889f82ea3bd95487bec639a41000bf40a5d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_075be2f71f4af6f8ce925cb5d459e3a900d0f7e95c6174bafeb1399408f7fbc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_075be2f71f4af6f8ce925cb5d459e3a900d0f7e95c6174bafeb1399408f7fbc1->enter($__internal_075be2f71f4af6f8ce925cb5d459e3a900d0f7e95c6174bafeb1399408f7fbc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_075be2f71f4af6f8ce925cb5d459e3a900d0f7e95c6174bafeb1399408f7fbc1->leave($__internal_075be2f71f4af6f8ce925cb5d459e3a900d0f7e95c6174bafeb1399408f7fbc1_prof);

        
        $__internal_c74b3268dd0a8025552c0dd5b33889f82ea3bd95487bec639a41000bf40a5d90->leave($__internal_c74b3268dd0a8025552c0dd5b33889f82ea3bd95487bec639a41000bf40a5d90_prof);

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
