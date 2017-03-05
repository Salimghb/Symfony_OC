<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_2217e951f851b5300708fb402981f8cf553a5d24f371a268136f234a1fe2dfc1 extends Twig_Template
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
        $__internal_dc5d690c35b4d502e3c4f5aaae6f8c4230be0938aee91cfc709cdc64185a78ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc5d690c35b4d502e3c4f5aaae6f8c4230be0938aee91cfc709cdc64185a78ad->enter($__internal_dc5d690c35b4d502e3c4f5aaae6f8c4230be0938aee91cfc709cdc64185a78ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_ca397e8c2f2c6f63320007d78b1471a4c942b86d2b04115f0ac1b8b3f39bc0a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca397e8c2f2c6f63320007d78b1471a4c942b86d2b04115f0ac1b8b3f39bc0a0->enter($__internal_ca397e8c2f2c6f63320007d78b1471a4c942b86d2b04115f0ac1b8b3f39bc0a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc5d690c35b4d502e3c4f5aaae6f8c4230be0938aee91cfc709cdc64185a78ad->leave($__internal_dc5d690c35b4d502e3c4f5aaae6f8c4230be0938aee91cfc709cdc64185a78ad_prof);

        
        $__internal_ca397e8c2f2c6f63320007d78b1471a4c942b86d2b04115f0ac1b8b3f39bc0a0->leave($__internal_ca397e8c2f2c6f63320007d78b1471a4c942b86d2b04115f0ac1b8b3f39bc0a0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ddba9ac40af23d095c6e6686dc788c8a090d9a067ebfddd7f32ba89e50b1fa6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddba9ac40af23d095c6e6686dc788c8a090d9a067ebfddd7f32ba89e50b1fa6a->enter($__internal_ddba9ac40af23d095c6e6686dc788c8a090d9a067ebfddd7f32ba89e50b1fa6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_654dc5ad6b71a0f0cace26947b7985aa80e4a109f69f80fc99de84c0ed94b6eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_654dc5ad6b71a0f0cace26947b7985aa80e4a109f69f80fc99de84c0ed94b6eb->enter($__internal_654dc5ad6b71a0f0cace26947b7985aa80e4a109f69f80fc99de84c0ed94b6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_654dc5ad6b71a0f0cace26947b7985aa80e4a109f69f80fc99de84c0ed94b6eb->leave($__internal_654dc5ad6b71a0f0cace26947b7985aa80e4a109f69f80fc99de84c0ed94b6eb_prof);

        
        $__internal_ddba9ac40af23d095c6e6686dc788c8a090d9a067ebfddd7f32ba89e50b1fa6a->leave($__internal_ddba9ac40af23d095c6e6686dc788c8a090d9a067ebfddd7f32ba89e50b1fa6a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c92563307edcbcb3dc846c83a61b0ac8163de74c05fd44eba4d7587c68e8d13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c92563307edcbcb3dc846c83a61b0ac8163de74c05fd44eba4d7587c68e8d13->enter($__internal_4c92563307edcbcb3dc846c83a61b0ac8163de74c05fd44eba4d7587c68e8d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_855e75164336c84cbaf686dd7f43fa0e2d2558fbb59ea3bb4f856a08600d9e2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_855e75164336c84cbaf686dd7f43fa0e2d2558fbb59ea3bb4f856a08600d9e2e->enter($__internal_855e75164336c84cbaf686dd7f43fa0e2d2558fbb59ea3bb4f856a08600d9e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_855e75164336c84cbaf686dd7f43fa0e2d2558fbb59ea3bb4f856a08600d9e2e->leave($__internal_855e75164336c84cbaf686dd7f43fa0e2d2558fbb59ea3bb4f856a08600d9e2e_prof);

        
        $__internal_4c92563307edcbcb3dc846c83a61b0ac8163de74c05fd44eba4d7587c68e8d13->leave($__internal_4c92563307edcbcb3dc846c83a61b0ac8163de74c05fd44eba4d7587c68e8d13_prof);

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
