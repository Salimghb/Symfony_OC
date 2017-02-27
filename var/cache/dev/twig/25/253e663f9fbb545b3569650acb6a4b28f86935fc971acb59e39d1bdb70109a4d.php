<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_231257d9426afdf8548b03ab6b3040d726d4e0f02bcbd26c8b9ef5d6663b4d4b extends Twig_Template
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
        $__internal_466fdab1849c4f93d52f6d32dfb195ef486527333d243281bf4e0400428cb618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_466fdab1849c4f93d52f6d32dfb195ef486527333d243281bf4e0400428cb618->enter($__internal_466fdab1849c4f93d52f6d32dfb195ef486527333d243281bf4e0400428cb618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_369ea29b765404ad57628e7ef1176b990531f172457a22a42d7a5c1348e550b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_369ea29b765404ad57628e7ef1176b990531f172457a22a42d7a5c1348e550b2->enter($__internal_369ea29b765404ad57628e7ef1176b990531f172457a22a42d7a5c1348e550b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_466fdab1849c4f93d52f6d32dfb195ef486527333d243281bf4e0400428cb618->leave($__internal_466fdab1849c4f93d52f6d32dfb195ef486527333d243281bf4e0400428cb618_prof);

        
        $__internal_369ea29b765404ad57628e7ef1176b990531f172457a22a42d7a5c1348e550b2->leave($__internal_369ea29b765404ad57628e7ef1176b990531f172457a22a42d7a5c1348e550b2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6276fac68dd90c248844219d96043cf4bee68348cff1ad0c2fcc27a8cc9f478a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6276fac68dd90c248844219d96043cf4bee68348cff1ad0c2fcc27a8cc9f478a->enter($__internal_6276fac68dd90c248844219d96043cf4bee68348cff1ad0c2fcc27a8cc9f478a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f2979beb4c5763de008ecf367925e2d594fd00dee26d700b220357ec93de7fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f2979beb4c5763de008ecf367925e2d594fd00dee26d700b220357ec93de7fa->enter($__internal_6f2979beb4c5763de008ecf367925e2d594fd00dee26d700b220357ec93de7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6f2979beb4c5763de008ecf367925e2d594fd00dee26d700b220357ec93de7fa->leave($__internal_6f2979beb4c5763de008ecf367925e2d594fd00dee26d700b220357ec93de7fa_prof);

        
        $__internal_6276fac68dd90c248844219d96043cf4bee68348cff1ad0c2fcc27a8cc9f478a->leave($__internal_6276fac68dd90c248844219d96043cf4bee68348cff1ad0c2fcc27a8cc9f478a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_34c2411dc3aa8b0357165b4d75aebc379d4e537490338825f20d38b41fcdbdaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34c2411dc3aa8b0357165b4d75aebc379d4e537490338825f20d38b41fcdbdaa->enter($__internal_34c2411dc3aa8b0357165b4d75aebc379d4e537490338825f20d38b41fcdbdaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3abec3ceccd8f70809d8e4941f1085f50c291834c434ade48d112e4c233b5fb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3abec3ceccd8f70809d8e4941f1085f50c291834c434ade48d112e4c233b5fb1->enter($__internal_3abec3ceccd8f70809d8e4941f1085f50c291834c434ade48d112e4c233b5fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3abec3ceccd8f70809d8e4941f1085f50c291834c434ade48d112e4c233b5fb1->leave($__internal_3abec3ceccd8f70809d8e4941f1085f50c291834c434ade48d112e4c233b5fb1_prof);

        
        $__internal_34c2411dc3aa8b0357165b4d75aebc379d4e537490338825f20d38b41fcdbdaa->leave($__internal_34c2411dc3aa8b0357165b4d75aebc379d4e537490338825f20d38b41fcdbdaa_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_00511b220f9f4f98f4156272a2d802afb6c2027a0337554406bd7af632786d80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00511b220f9f4f98f4156272a2d802afb6c2027a0337554406bd7af632786d80->enter($__internal_00511b220f9f4f98f4156272a2d802afb6c2027a0337554406bd7af632786d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b355b10c4c37d0515374b6e6cac79186d849939761ce442ef3c46640eb79577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b355b10c4c37d0515374b6e6cac79186d849939761ce442ef3c46640eb79577->enter($__internal_5b355b10c4c37d0515374b6e6cac79186d849939761ce442ef3c46640eb79577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_5b355b10c4c37d0515374b6e6cac79186d849939761ce442ef3c46640eb79577->leave($__internal_5b355b10c4c37d0515374b6e6cac79186d849939761ce442ef3c46640eb79577_prof);

        
        $__internal_00511b220f9f4f98f4156272a2d802afb6c2027a0337554406bd7af632786d80->leave($__internal_00511b220f9f4f98f4156272a2d802afb6c2027a0337554406bd7af632786d80_prof);

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
