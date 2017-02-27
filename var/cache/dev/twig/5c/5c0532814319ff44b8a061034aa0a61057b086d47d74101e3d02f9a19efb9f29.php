<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_057478bdcf90d85b8ea886c8d9f2b01914788a473d36bee6b30bb02cdcf387ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_8247ae24ab6273434f5d0f934edd234719de086c6c4638b1f53058c038174101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8247ae24ab6273434f5d0f934edd234719de086c6c4638b1f53058c038174101->enter($__internal_8247ae24ab6273434f5d0f934edd234719de086c6c4638b1f53058c038174101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_01a06d2dd6c71dc569222ef83d96c5670cbb327e409027ba416c0f1e73303888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01a06d2dd6c71dc569222ef83d96c5670cbb327e409027ba416c0f1e73303888->enter($__internal_01a06d2dd6c71dc569222ef83d96c5670cbb327e409027ba416c0f1e73303888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8247ae24ab6273434f5d0f934edd234719de086c6c4638b1f53058c038174101->leave($__internal_8247ae24ab6273434f5d0f934edd234719de086c6c4638b1f53058c038174101_prof);

        
        $__internal_01a06d2dd6c71dc569222ef83d96c5670cbb327e409027ba416c0f1e73303888->leave($__internal_01a06d2dd6c71dc569222ef83d96c5670cbb327e409027ba416c0f1e73303888_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4bd102be54f519e2b96ae1c5534f1188981de49b25f1f6595e773831965b3c0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bd102be54f519e2b96ae1c5534f1188981de49b25f1f6595e773831965b3c0a->enter($__internal_4bd102be54f519e2b96ae1c5534f1188981de49b25f1f6595e773831965b3c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f35c8ff84a67656e8b2a584a9717e3d9ba85d73c01314b7e2b1de08867c3e3df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f35c8ff84a67656e8b2a584a9717e3d9ba85d73c01314b7e2b1de08867c3e3df->enter($__internal_f35c8ff84a67656e8b2a584a9717e3d9ba85d73c01314b7e2b1de08867c3e3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f35c8ff84a67656e8b2a584a9717e3d9ba85d73c01314b7e2b1de08867c3e3df->leave($__internal_f35c8ff84a67656e8b2a584a9717e3d9ba85d73c01314b7e2b1de08867c3e3df_prof);

        
        $__internal_4bd102be54f519e2b96ae1c5534f1188981de49b25f1f6595e773831965b3c0a->leave($__internal_4bd102be54f519e2b96ae1c5534f1188981de49b25f1f6595e773831965b3c0a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f67ce77bf7382c065701dafb7de7ca03456bf9c8743ea1f1988000b1f3c0b92d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f67ce77bf7382c065701dafb7de7ca03456bf9c8743ea1f1988000b1f3c0b92d->enter($__internal_f67ce77bf7382c065701dafb7de7ca03456bf9c8743ea1f1988000b1f3c0b92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0fe7d030170beadaf99e9bf866931ae4d1c2cb21d4ad5061806f7fb090d9dfad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fe7d030170beadaf99e9bf866931ae4d1c2cb21d4ad5061806f7fb090d9dfad->enter($__internal_0fe7d030170beadaf99e9bf866931ae4d1c2cb21d4ad5061806f7fb090d9dfad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0fe7d030170beadaf99e9bf866931ae4d1c2cb21d4ad5061806f7fb090d9dfad->leave($__internal_0fe7d030170beadaf99e9bf866931ae4d1c2cb21d4ad5061806f7fb090d9dfad_prof);

        
        $__internal_f67ce77bf7382c065701dafb7de7ca03456bf9c8743ea1f1988000b1f3c0b92d->leave($__internal_f67ce77bf7382c065701dafb7de7ca03456bf9c8743ea1f1988000b1f3c0b92d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
