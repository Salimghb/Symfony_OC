<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_0c0667108b7526b278f58daca20e3415e962b60926beb668d392a86ebfb5b787 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8df74e4f31ae866909425949e959566399313c2411de2bc9443f8d32a93c547a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8df74e4f31ae866909425949e959566399313c2411de2bc9443f8d32a93c547a->enter($__internal_8df74e4f31ae866909425949e959566399313c2411de2bc9443f8d32a93c547a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_aad4f1cfbd6cd3cb945c62f919a80389341663d9309eccc0d9db181f08bee168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aad4f1cfbd6cd3cb945c62f919a80389341663d9309eccc0d9db181f08bee168->enter($__internal_aad4f1cfbd6cd3cb945c62f919a80389341663d9309eccc0d9db181f08bee168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8df74e4f31ae866909425949e959566399313c2411de2bc9443f8d32a93c547a->leave($__internal_8df74e4f31ae866909425949e959566399313c2411de2bc9443f8d32a93c547a_prof);

        
        $__internal_aad4f1cfbd6cd3cb945c62f919a80389341663d9309eccc0d9db181f08bee168->leave($__internal_aad4f1cfbd6cd3cb945c62f919a80389341663d9309eccc0d9db181f08bee168_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
