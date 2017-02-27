<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_be4d1cec9070807712a715a9780d24ad57ccc6b94a94437daf23cc99cf8bb023 extends Twig_Template
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
        $__internal_632e7045f63d360b8bf333f095da7bb5b8c3a8cd3466a3526b6f60f6f63c041f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_632e7045f63d360b8bf333f095da7bb5b8c3a8cd3466a3526b6f60f6f63c041f->enter($__internal_632e7045f63d360b8bf333f095da7bb5b8c3a8cd3466a3526b6f60f6f63c041f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_351d181072a48be25555e975a1577848ceab57950cefd61f82505a305844f1cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_351d181072a48be25555e975a1577848ceab57950cefd61f82505a305844f1cf->enter($__internal_351d181072a48be25555e975a1577848ceab57950cefd61f82505a305844f1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_632e7045f63d360b8bf333f095da7bb5b8c3a8cd3466a3526b6f60f6f63c041f->leave($__internal_632e7045f63d360b8bf333f095da7bb5b8c3a8cd3466a3526b6f60f6f63c041f_prof);

        
        $__internal_351d181072a48be25555e975a1577848ceab57950cefd61f82505a305844f1cf->leave($__internal_351d181072a48be25555e975a1577848ceab57950cefd61f82505a305844f1cf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9f5099da5f305d2d86ae8ac6d76dd6a2ae34733cc925a9d7aa68cd312d985d48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f5099da5f305d2d86ae8ac6d76dd6a2ae34733cc925a9d7aa68cd312d985d48->enter($__internal_9f5099da5f305d2d86ae8ac6d76dd6a2ae34733cc925a9d7aa68cd312d985d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dbb1d3f499299d9e5d43ed2cd14a731c2fd29c4b17ee82d08ba50136a2d133a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbb1d3f499299d9e5d43ed2cd14a731c2fd29c4b17ee82d08ba50136a2d133a6->enter($__internal_dbb1d3f499299d9e5d43ed2cd14a731c2fd29c4b17ee82d08ba50136a2d133a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_dbb1d3f499299d9e5d43ed2cd14a731c2fd29c4b17ee82d08ba50136a2d133a6->leave($__internal_dbb1d3f499299d9e5d43ed2cd14a731c2fd29c4b17ee82d08ba50136a2d133a6_prof);

        
        $__internal_9f5099da5f305d2d86ae8ac6d76dd6a2ae34733cc925a9d7aa68cd312d985d48->leave($__internal_9f5099da5f305d2d86ae8ac6d76dd6a2ae34733cc925a9d7aa68cd312d985d48_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d0006595c78d6e72d3ef0af837d94b91431994ab0aa8d006013278dcc6927c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d0006595c78d6e72d3ef0af837d94b91431994ab0aa8d006013278dcc6927c2->enter($__internal_5d0006595c78d6e72d3ef0af837d94b91431994ab0aa8d006013278dcc6927c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_14eaf2ed2559e0917541515849dfb4703a2d0b330f2572ff9b6d8af320a34e08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14eaf2ed2559e0917541515849dfb4703a2d0b330f2572ff9b6d8af320a34e08->enter($__internal_14eaf2ed2559e0917541515849dfb4703a2d0b330f2572ff9b6d8af320a34e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_14eaf2ed2559e0917541515849dfb4703a2d0b330f2572ff9b6d8af320a34e08->leave($__internal_14eaf2ed2559e0917541515849dfb4703a2d0b330f2572ff9b6d8af320a34e08_prof);

        
        $__internal_5d0006595c78d6e72d3ef0af837d94b91431994ab0aa8d006013278dcc6927c2->leave($__internal_5d0006595c78d6e72d3ef0af837d94b91431994ab0aa8d006013278dcc6927c2_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8417bea00467090cd5188e65e7d2fd2a0ca81fe7e6b2e6feb754a61355e2c955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8417bea00467090cd5188e65e7d2fd2a0ca81fe7e6b2e6feb754a61355e2c955->enter($__internal_8417bea00467090cd5188e65e7d2fd2a0ca81fe7e6b2e6feb754a61355e2c955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eb95d4ad6ae62932f57e7f8a28db9e5ab2b6d53e089a45700763228923612bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb95d4ad6ae62932f57e7f8a28db9e5ab2b6d53e089a45700763228923612bf3->enter($__internal_eb95d4ad6ae62932f57e7f8a28db9e5ab2b6d53e089a45700763228923612bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_eb95d4ad6ae62932f57e7f8a28db9e5ab2b6d53e089a45700763228923612bf3->leave($__internal_eb95d4ad6ae62932f57e7f8a28db9e5ab2b6d53e089a45700763228923612bf3_prof);

        
        $__internal_8417bea00467090cd5188e65e7d2fd2a0ca81fe7e6b2e6feb754a61355e2c955->leave($__internal_8417bea00467090cd5188e65e7d2fd2a0ca81fe7e6b2e6feb754a61355e2c955_prof);

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
