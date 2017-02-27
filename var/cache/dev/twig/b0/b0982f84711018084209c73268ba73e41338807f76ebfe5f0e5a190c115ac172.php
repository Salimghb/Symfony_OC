<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_0efabb0a254e1dd77f2b0e483f9f953b2fd764cdf747306ef18b67c0ba03caa8 extends Twig_Template
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
        $__internal_dc5a4934811abba6240a230d227536c5d5dd67af54d0c69b26794b9e836dfaab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc5a4934811abba6240a230d227536c5d5dd67af54d0c69b26794b9e836dfaab->enter($__internal_dc5a4934811abba6240a230d227536c5d5dd67af54d0c69b26794b9e836dfaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_dc0c44e7bee58a8b22a269c926271578a6609c5ab20c550595c74b75a83514c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc0c44e7bee58a8b22a269c926271578a6609c5ab20c550595c74b75a83514c9->enter($__internal_dc0c44e7bee58a8b22a269c926271578a6609c5ab20c550595c74b75a83514c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_dc5a4934811abba6240a230d227536c5d5dd67af54d0c69b26794b9e836dfaab->leave($__internal_dc5a4934811abba6240a230d227536c5d5dd67af54d0c69b26794b9e836dfaab_prof);

        
        $__internal_dc0c44e7bee58a8b22a269c926271578a6609c5ab20c550595c74b75a83514c9->leave($__internal_dc0c44e7bee58a8b22a269c926271578a6609c5ab20c550595c74b75a83514c9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
