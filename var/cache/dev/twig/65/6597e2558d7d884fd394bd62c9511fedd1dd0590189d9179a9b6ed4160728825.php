<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_cdb3575a619998ebb252f9109c917dc67e86641891bea4facb8b035c73e065db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_24f5756e97b5738f4b18bb4e2b938bfb40c8bb9191be72e17ee9c955dba96a5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24f5756e97b5738f4b18bb4e2b938bfb40c8bb9191be72e17ee9c955dba96a5d->enter($__internal_24f5756e97b5738f4b18bb4e2b938bfb40c8bb9191be72e17ee9c955dba96a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_2192862a93faa7e3349df400b3329648ad8b7e9e69568e5004ee93183d829bd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2192862a93faa7e3349df400b3329648ad8b7e9e69568e5004ee93183d829bd4->enter($__internal_2192862a93faa7e3349df400b3329648ad8b7e9e69568e5004ee93183d829bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24f5756e97b5738f4b18bb4e2b938bfb40c8bb9191be72e17ee9c955dba96a5d->leave($__internal_24f5756e97b5738f4b18bb4e2b938bfb40c8bb9191be72e17ee9c955dba96a5d_prof);

        
        $__internal_2192862a93faa7e3349df400b3329648ad8b7e9e69568e5004ee93183d829bd4->leave($__internal_2192862a93faa7e3349df400b3329648ad8b7e9e69568e5004ee93183d829bd4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4ffff38e9130a5e5fdb6d7d866c660f249b2e563d028587c55f6d01861ec83aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ffff38e9130a5e5fdb6d7d866c660f249b2e563d028587c55f6d01861ec83aa->enter($__internal_4ffff38e9130a5e5fdb6d7d866c660f249b2e563d028587c55f6d01861ec83aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_91fc373125cdc5e5599f80580a68cc291a6636767854533146cdb0c228aefaed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91fc373125cdc5e5599f80580a68cc291a6636767854533146cdb0c228aefaed->enter($__internal_91fc373125cdc5e5599f80580a68cc291a6636767854533146cdb0c228aefaed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_91fc373125cdc5e5599f80580a68cc291a6636767854533146cdb0c228aefaed->leave($__internal_91fc373125cdc5e5599f80580a68cc291a6636767854533146cdb0c228aefaed_prof);

        
        $__internal_4ffff38e9130a5e5fdb6d7d866c660f249b2e563d028587c55f6d01861ec83aa->leave($__internal_4ffff38e9130a5e5fdb6d7d866c660f249b2e563d028587c55f6d01861ec83aa_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9055e5fcafcec4d6993ba2b50481dee10c3da21bad2b832014471d397dc9119 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9055e5fcafcec4d6993ba2b50481dee10c3da21bad2b832014471d397dc9119->enter($__internal_a9055e5fcafcec4d6993ba2b50481dee10c3da21bad2b832014471d397dc9119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1e30456e58e66632adad279b847d35fbb754162fc261c3582f08c0299560d074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e30456e58e66632adad279b847d35fbb754162fc261c3582f08c0299560d074->enter($__internal_1e30456e58e66632adad279b847d35fbb754162fc261c3582f08c0299560d074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1e30456e58e66632adad279b847d35fbb754162fc261c3582f08c0299560d074->leave($__internal_1e30456e58e66632adad279b847d35fbb754162fc261c3582f08c0299560d074_prof);

        
        $__internal_a9055e5fcafcec4d6993ba2b50481dee10c3da21bad2b832014471d397dc9119->leave($__internal_a9055e5fcafcec4d6993ba2b50481dee10c3da21bad2b832014471d397dc9119_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e36a17e1828ed26fa46c6bbbee3dadfcd0608f2cad5feb05f11453ce2ca4a992 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e36a17e1828ed26fa46c6bbbee3dadfcd0608f2cad5feb05f11453ce2ca4a992->enter($__internal_e36a17e1828ed26fa46c6bbbee3dadfcd0608f2cad5feb05f11453ce2ca4a992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b0dbe6e25da85e39bfd53147af45180b92cad3c756a74a43bbdb27b4c93043f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0dbe6e25da85e39bfd53147af45180b92cad3c756a74a43bbdb27b4c93043f2->enter($__internal_b0dbe6e25da85e39bfd53147af45180b92cad3c756a74a43bbdb27b4c93043f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_b0dbe6e25da85e39bfd53147af45180b92cad3c756a74a43bbdb27b4c93043f2->leave($__internal_b0dbe6e25da85e39bfd53147af45180b92cad3c756a74a43bbdb27b4c93043f2_prof);

        
        $__internal_e36a17e1828ed26fa46c6bbbee3dadfcd0608f2cad5feb05f11453ce2ca4a992->leave($__internal_e36a17e1828ed26fa46c6bbbee3dadfcd0608f2cad5feb05f11453ce2ca4a992_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
