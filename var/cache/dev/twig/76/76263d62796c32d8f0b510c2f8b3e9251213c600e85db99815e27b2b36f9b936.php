<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_f883b6a7c0dbfac7b8c4653515fe37fe9d3d7508a4afdf9ff4b8c355492cc82b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86a8ea7b06287d2a7105b7daa955fd12fd1c76eca06d9473d4a8a6d00a62c0c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86a8ea7b06287d2a7105b7daa955fd12fd1c76eca06d9473d4a8a6d00a62c0c5->enter($__internal_86a8ea7b06287d2a7105b7daa955fd12fd1c76eca06d9473d4a8a6d00a62c0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_6e18043b36ab5097261129cb09edcf4a8bc8287babbc1a1e5fd7ec798bab2cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e18043b36ab5097261129cb09edcf4a8bc8287babbc1a1e5fd7ec798bab2cfd->enter($__internal_6e18043b36ab5097261129cb09edcf4a8bc8287babbc1a1e5fd7ec798bab2cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86a8ea7b06287d2a7105b7daa955fd12fd1c76eca06d9473d4a8a6d00a62c0c5->leave($__internal_86a8ea7b06287d2a7105b7daa955fd12fd1c76eca06d9473d4a8a6d00a62c0c5_prof);

        
        $__internal_6e18043b36ab5097261129cb09edcf4a8bc8287babbc1a1e5fd7ec798bab2cfd->leave($__internal_6e18043b36ab5097261129cb09edcf4a8bc8287babbc1a1e5fd7ec798bab2cfd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9f24dc5880e482eab3a5d9ecd7c08c135063b48477ee12c82afca4a5bd2894fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f24dc5880e482eab3a5d9ecd7c08c135063b48477ee12c82afca4a5bd2894fa->enter($__internal_9f24dc5880e482eab3a5d9ecd7c08c135063b48477ee12c82afca4a5bd2894fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_60b8f33074d4860b21c7f86d1101c354b1a6d09386fbb67be057297a97024de6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b8f33074d4860b21c7f86d1101c354b1a6d09386fbb67be057297a97024de6->enter($__internal_60b8f33074d4860b21c7f86d1101c354b1a6d09386fbb67be057297a97024de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_60b8f33074d4860b21c7f86d1101c354b1a6d09386fbb67be057297a97024de6->leave($__internal_60b8f33074d4860b21c7f86d1101c354b1a6d09386fbb67be057297a97024de6_prof);

        
        $__internal_9f24dc5880e482eab3a5d9ecd7c08c135063b48477ee12c82afca4a5bd2894fa->leave($__internal_9f24dc5880e482eab3a5d9ecd7c08c135063b48477ee12c82afca4a5bd2894fa_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_11d820e26355a456d2d99224d14c3ce6dfcd49d3d29ef2f54ef22afa3bdd16fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11d820e26355a456d2d99224d14c3ce6dfcd49d3d29ef2f54ef22afa3bdd16fb->enter($__internal_11d820e26355a456d2d99224d14c3ce6dfcd49d3d29ef2f54ef22afa3bdd16fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d2674531922ae6c515950419279f6c74760f94d9c3fb61fd4db365e99c4898cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2674531922ae6c515950419279f6c74760f94d9c3fb61fd4db365e99c4898cb->enter($__internal_d2674531922ae6c515950419279f6c74760f94d9c3fb61fd4db365e99c4898cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_d2674531922ae6c515950419279f6c74760f94d9c3fb61fd4db365e99c4898cb->leave($__internal_d2674531922ae6c515950419279f6c74760f94d9c3fb61fd4db365e99c4898cb_prof);

        
        $__internal_11d820e26355a456d2d99224d14c3ce6dfcd49d3d29ef2f54ef22afa3bdd16fb->leave($__internal_11d820e26355a456d2d99224d14c3ce6dfcd49d3d29ef2f54ef22afa3bdd16fb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
