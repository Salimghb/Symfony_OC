<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_d5d8fc3e296f87608a0eb96a2f850f1c091ee04cd5fbe7bd843c4b4f2ec3dee3 extends Twig_Template
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
        $__internal_471e8b90d70f419529798c7c0a49b7dabe17cf18a70aa0fa18017d80e08a38b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_471e8b90d70f419529798c7c0a49b7dabe17cf18a70aa0fa18017d80e08a38b1->enter($__internal_471e8b90d70f419529798c7c0a49b7dabe17cf18a70aa0fa18017d80e08a38b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_88ab99c99965952e4f330ed20528c6a10b10c6b9bb39eaa0cd7800999e1eda6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ab99c99965952e4f330ed20528c6a10b10c6b9bb39eaa0cd7800999e1eda6a->enter($__internal_88ab99c99965952e4f330ed20528c6a10b10c6b9bb39eaa0cd7800999e1eda6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_471e8b90d70f419529798c7c0a49b7dabe17cf18a70aa0fa18017d80e08a38b1->leave($__internal_471e8b90d70f419529798c7c0a49b7dabe17cf18a70aa0fa18017d80e08a38b1_prof);

        
        $__internal_88ab99c99965952e4f330ed20528c6a10b10c6b9bb39eaa0cd7800999e1eda6a->leave($__internal_88ab99c99965952e4f330ed20528c6a10b10c6b9bb39eaa0cd7800999e1eda6a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
