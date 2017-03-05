<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_9df4e37bce1499bbb28587d006e71bd2355623d3fd09c32d73d39a4b9230ef46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b09d96f7d035951fe50793b4ac6fd9670f9f3e2db28cfa36c42d952cb1fe3136 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b09d96f7d035951fe50793b4ac6fd9670f9f3e2db28cfa36c42d952cb1fe3136->enter($__internal_b09d96f7d035951fe50793b4ac6fd9670f9f3e2db28cfa36c42d952cb1fe3136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_9df154a732a756d7e6590febe17f2068ccbb9205a98b122898351cb412c6377d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df154a732a756d7e6590febe17f2068ccbb9205a98b122898351cb412c6377d->enter($__internal_9df154a732a756d7e6590febe17f2068ccbb9205a98b122898351cb412c6377d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b09d96f7d035951fe50793b4ac6fd9670f9f3e2db28cfa36c42d952cb1fe3136->leave($__internal_b09d96f7d035951fe50793b4ac6fd9670f9f3e2db28cfa36c42d952cb1fe3136_prof);

        
        $__internal_9df154a732a756d7e6590febe17f2068ccbb9205a98b122898351cb412c6377d->leave($__internal_9df154a732a756d7e6590febe17f2068ccbb9205a98b122898351cb412c6377d_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_a2c53b511404d674fe422334a3e7b044102680f1ecced57e22b9fb7b6b07ef19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2c53b511404d674fe422334a3e7b044102680f1ecced57e22b9fb7b6b07ef19->enter($__internal_a2c53b511404d674fe422334a3e7b044102680f1ecced57e22b9fb7b6b07ef19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_57526be2bc1a7166a497fba32a8e16d35cef203eb6aadb334b1c80995f0a3bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57526be2bc1a7166a497fba32a8e16d35cef203eb6aadb334b1c80995f0a3bd3->enter($__internal_57526be2bc1a7166a497fba32a8e16d35cef203eb6aadb334b1c80995f0a3bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_57526be2bc1a7166a497fba32a8e16d35cef203eb6aadb334b1c80995f0a3bd3->leave($__internal_57526be2bc1a7166a497fba32a8e16d35cef203eb6aadb334b1c80995f0a3bd3_prof);

        
        $__internal_a2c53b511404d674fe422334a3e7b044102680f1ecced57e22b9fb7b6b07ef19->leave($__internal_a2c53b511404d674fe422334a3e7b044102680f1ecced57e22b9fb7b6b07ef19_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_031d1f39e3d642acebda56c9d2bde6a85aaeb1e346e85cc6a960835b86992dcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_031d1f39e3d642acebda56c9d2bde6a85aaeb1e346e85cc6a960835b86992dcb->enter($__internal_031d1f39e3d642acebda56c9d2bde6a85aaeb1e346e85cc6a960835b86992dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4ab6a26ebc5a599e96a02d4e521492e8e53d85935dbffa78a44714747f4352f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ab6a26ebc5a599e96a02d4e521492e8e53d85935dbffa78a44714747f4352f8->enter($__internal_4ab6a26ebc5a599e96a02d4e521492e8e53d85935dbffa78a44714747f4352f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_4ab6a26ebc5a599e96a02d4e521492e8e53d85935dbffa78a44714747f4352f8->leave($__internal_4ab6a26ebc5a599e96a02d4e521492e8e53d85935dbffa78a44714747f4352f8_prof);

        
        $__internal_031d1f39e3d642acebda56c9d2bde6a85aaeb1e346e85cc6a960835b86992dcb->leave($__internal_031d1f39e3d642acebda56c9d2bde6a85aaeb1e346e85cc6a960835b86992dcb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
