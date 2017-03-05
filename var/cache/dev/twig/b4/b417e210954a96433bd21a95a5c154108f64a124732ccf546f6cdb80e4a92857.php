<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_e1dc7024c0c5331030807caecae9982bd09782eac2728b21e6dbfdc4e12f3b01 extends Twig_Template
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
        $__internal_7fb653ef1771fe19c066ac9d2bceffc91fb6574a61ceece02f60965ed21afd74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fb653ef1771fe19c066ac9d2bceffc91fb6574a61ceece02f60965ed21afd74->enter($__internal_7fb653ef1771fe19c066ac9d2bceffc91fb6574a61ceece02f60965ed21afd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_21a521052675d34c5cfca3cf5a01a3ae4c0e1c0b2392ce353a06ae78af3d543e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21a521052675d34c5cfca3cf5a01a3ae4c0e1c0b2392ce353a06ae78af3d543e->enter($__internal_21a521052675d34c5cfca3cf5a01a3ae4c0e1c0b2392ce353a06ae78af3d543e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7fb653ef1771fe19c066ac9d2bceffc91fb6574a61ceece02f60965ed21afd74->leave($__internal_7fb653ef1771fe19c066ac9d2bceffc91fb6574a61ceece02f60965ed21afd74_prof);

        
        $__internal_21a521052675d34c5cfca3cf5a01a3ae4c0e1c0b2392ce353a06ae78af3d543e->leave($__internal_21a521052675d34c5cfca3cf5a01a3ae4c0e1c0b2392ce353a06ae78af3d543e_prof);

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
