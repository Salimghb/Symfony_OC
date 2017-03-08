<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3e0bfdb580122853f0c093e0ea8c0588d47a395d8407bf38e328e615b90ae81f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_be01fdd541ddc9843efcf708246cd41eb326cf67a9d3970cbf6fc2e359c07634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be01fdd541ddc9843efcf708246cd41eb326cf67a9d3970cbf6fc2e359c07634->enter($__internal_be01fdd541ddc9843efcf708246cd41eb326cf67a9d3970cbf6fc2e359c07634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_a57bb2a9a51d4cb59a6e311d01753d730817dbdfc3f735dc876c0bd4a3820872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a57bb2a9a51d4cb59a6e311d01753d730817dbdfc3f735dc876c0bd4a3820872->enter($__internal_a57bb2a9a51d4cb59a6e311d01753d730817dbdfc3f735dc876c0bd4a3820872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be01fdd541ddc9843efcf708246cd41eb326cf67a9d3970cbf6fc2e359c07634->leave($__internal_be01fdd541ddc9843efcf708246cd41eb326cf67a9d3970cbf6fc2e359c07634_prof);

        
        $__internal_a57bb2a9a51d4cb59a6e311d01753d730817dbdfc3f735dc876c0bd4a3820872->leave($__internal_a57bb2a9a51d4cb59a6e311d01753d730817dbdfc3f735dc876c0bd4a3820872_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0cd4682bb25ed85c15ccb0b5df342522739a593ef5476ff59a412b7ef2348d5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cd4682bb25ed85c15ccb0b5df342522739a593ef5476ff59a412b7ef2348d5a->enter($__internal_0cd4682bb25ed85c15ccb0b5df342522739a593ef5476ff59a412b7ef2348d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4dbe2014ef63db80efa078f8894d42f7020249cfb6d469742bf75158b16e18bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dbe2014ef63db80efa078f8894d42f7020249cfb6d469742bf75158b16e18bc->enter($__internal_4dbe2014ef63db80efa078f8894d42f7020249cfb6d469742bf75158b16e18bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_4dbe2014ef63db80efa078f8894d42f7020249cfb6d469742bf75158b16e18bc->leave($__internal_4dbe2014ef63db80efa078f8894d42f7020249cfb6d469742bf75158b16e18bc_prof);

        
        $__internal_0cd4682bb25ed85c15ccb0b5df342522739a593ef5476ff59a412b7ef2348d5a->leave($__internal_0cd4682bb25ed85c15ccb0b5df342522739a593ef5476ff59a412b7ef2348d5a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_45711dc751a5c1fd39cd4abef5ae06b8845fc98de9cd1173fa44ad68b62ae7f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45711dc751a5c1fd39cd4abef5ae06b8845fc98de9cd1173fa44ad68b62ae7f5->enter($__internal_45711dc751a5c1fd39cd4abef5ae06b8845fc98de9cd1173fa44ad68b62ae7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_af1295f02fe4ebffc14ed8e6a29393f952235775923ae5719a33a9bff14ea33f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af1295f02fe4ebffc14ed8e6a29393f952235775923ae5719a33a9bff14ea33f->enter($__internal_af1295f02fe4ebffc14ed8e6a29393f952235775923ae5719a33a9bff14ea33f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_af1295f02fe4ebffc14ed8e6a29393f952235775923ae5719a33a9bff14ea33f->leave($__internal_af1295f02fe4ebffc14ed8e6a29393f952235775923ae5719a33a9bff14ea33f_prof);

        
        $__internal_45711dc751a5c1fd39cd4abef5ae06b8845fc98de9cd1173fa44ad68b62ae7f5->leave($__internal_45711dc751a5c1fd39cd4abef5ae06b8845fc98de9cd1173fa44ad68b62ae7f5_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_9846e7ac8c2c70e222d4eb5968e453153862908a388f3f6700292c58d3a3779a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9846e7ac8c2c70e222d4eb5968e453153862908a388f3f6700292c58d3a3779a->enter($__internal_9846e7ac8c2c70e222d4eb5968e453153862908a388f3f6700292c58d3a3779a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5017fb4ee207a9f8eff6081b33b97c415bfa0e333378513b0aa52be865a627a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5017fb4ee207a9f8eff6081b33b97c415bfa0e333378513b0aa52be865a627a0->enter($__internal_5017fb4ee207a9f8eff6081b33b97c415bfa0e333378513b0aa52be865a627a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_5017fb4ee207a9f8eff6081b33b97c415bfa0e333378513b0aa52be865a627a0->leave($__internal_5017fb4ee207a9f8eff6081b33b97c415bfa0e333378513b0aa52be865a627a0_prof);

        
        $__internal_9846e7ac8c2c70e222d4eb5968e453153862908a388f3f6700292c58d3a3779a->leave($__internal_9846e7ac8c2c70e222d4eb5968e453153862908a388f3f6700292c58d3a3779a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
