<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_05d5f23bb60f8f5480e89cecd36b816689189ece8b021478b2a8ca486daaa7d0 extends Twig_Template
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
        $__internal_32e3397d67ea5912048da06f946f273ac6cd920b0bd2bc3855d42d492bce12a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32e3397d67ea5912048da06f946f273ac6cd920b0bd2bc3855d42d492bce12a5->enter($__internal_32e3397d67ea5912048da06f946f273ac6cd920b0bd2bc3855d42d492bce12a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_3265247d3e2a6d2df8e3d187947dc7a472617c5bcac2e2666ab097ae6e4b9098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3265247d3e2a6d2df8e3d187947dc7a472617c5bcac2e2666ab097ae6e4b9098->enter($__internal_3265247d3e2a6d2df8e3d187947dc7a472617c5bcac2e2666ab097ae6e4b9098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_32e3397d67ea5912048da06f946f273ac6cd920b0bd2bc3855d42d492bce12a5->leave($__internal_32e3397d67ea5912048da06f946f273ac6cd920b0bd2bc3855d42d492bce12a5_prof);

        
        $__internal_3265247d3e2a6d2df8e3d187947dc7a472617c5bcac2e2666ab097ae6e4b9098->leave($__internal_3265247d3e2a6d2df8e3d187947dc7a472617c5bcac2e2666ab097ae6e4b9098_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
