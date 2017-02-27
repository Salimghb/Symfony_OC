<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_3ef180f7cf420af9489c2d5dc041c2e1ceae1ddd3fa89dc4635cf0fabb08ef99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_cc0375fcef84cd01e6e3713afabe502d095c648c725e866036f2281cf72b31ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc0375fcef84cd01e6e3713afabe502d095c648c725e866036f2281cf72b31ea->enter($__internal_cc0375fcef84cd01e6e3713afabe502d095c648c725e866036f2281cf72b31ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_ee07ad5145468d5e5f217cae9754a7548d7152cb0422f91e507ea99e49046a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee07ad5145468d5e5f217cae9754a7548d7152cb0422f91e507ea99e49046a39->enter($__internal_ee07ad5145468d5e5f217cae9754a7548d7152cb0422f91e507ea99e49046a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc0375fcef84cd01e6e3713afabe502d095c648c725e866036f2281cf72b31ea->leave($__internal_cc0375fcef84cd01e6e3713afabe502d095c648c725e866036f2281cf72b31ea_prof);

        
        $__internal_ee07ad5145468d5e5f217cae9754a7548d7152cb0422f91e507ea99e49046a39->leave($__internal_ee07ad5145468d5e5f217cae9754a7548d7152cb0422f91e507ea99e49046a39_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_258f891d85d60ec25b2311b3680d6da07b5f7e49ce3d28066acb2149e13becfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_258f891d85d60ec25b2311b3680d6da07b5f7e49ce3d28066acb2149e13becfd->enter($__internal_258f891d85d60ec25b2311b3680d6da07b5f7e49ce3d28066acb2149e13becfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_ca673f5d2d895fa68e451878451852a7e4a2884d8f54d50d2c2e771158f4faf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca673f5d2d895fa68e451878451852a7e4a2884d8f54d50d2c2e771158f4faf2->enter($__internal_ca673f5d2d895fa68e451878451852a7e4a2884d8f54d50d2c2e771158f4faf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_ca673f5d2d895fa68e451878451852a7e4a2884d8f54d50d2c2e771158f4faf2->leave($__internal_ca673f5d2d895fa68e451878451852a7e4a2884d8f54d50d2c2e771158f4faf2_prof);

        
        $__internal_258f891d85d60ec25b2311b3680d6da07b5f7e49ce3d28066acb2149e13becfd->leave($__internal_258f891d85d60ec25b2311b3680d6da07b5f7e49ce3d28066acb2149e13becfd_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_06043d702c98a0003a94ec4b508d527c9c4d81454beb10a857ed5a21a6c2eba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06043d702c98a0003a94ec4b508d527c9c4d81454beb10a857ed5a21a6c2eba5->enter($__internal_06043d702c98a0003a94ec4b508d527c9c4d81454beb10a857ed5a21a6c2eba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1183ab62f557942dbf4ad88f6f8b5a030dc0aec7cd8ee76abdebf5f09a1d2ea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1183ab62f557942dbf4ad88f6f8b5a030dc0aec7cd8ee76abdebf5f09a1d2ea3->enter($__internal_1183ab62f557942dbf4ad88f6f8b5a030dc0aec7cd8ee76abdebf5f09a1d2ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_1183ab62f557942dbf4ad88f6f8b5a030dc0aec7cd8ee76abdebf5f09a1d2ea3->leave($__internal_1183ab62f557942dbf4ad88f6f8b5a030dc0aec7cd8ee76abdebf5f09a1d2ea3_prof);

        
        $__internal_06043d702c98a0003a94ec4b508d527c9c4d81454beb10a857ed5a21a6c2eba5->leave($__internal_06043d702c98a0003a94ec4b508d527c9c4d81454beb10a857ed5a21a6c2eba5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
