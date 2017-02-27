<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_1708668572bc921be6fdd0b8ab1809c26ef45dffce78c54987c85bd2e3fff2e1 extends Twig_Template
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
        $__internal_3fe1b3387e91bc000484127c3e2b20d7d224f838404b6c5805ef975ade949675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fe1b3387e91bc000484127c3e2b20d7d224f838404b6c5805ef975ade949675->enter($__internal_3fe1b3387e91bc000484127c3e2b20d7d224f838404b6c5805ef975ade949675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_bf69ce4231741cdfb61a5d19151988ee01d51fc50ffe8a80a92c5affc40ef960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf69ce4231741cdfb61a5d19151988ee01d51fc50ffe8a80a92c5affc40ef960->enter($__internal_bf69ce4231741cdfb61a5d19151988ee01d51fc50ffe8a80a92c5affc40ef960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_3fe1b3387e91bc000484127c3e2b20d7d224f838404b6c5805ef975ade949675->leave($__internal_3fe1b3387e91bc000484127c3e2b20d7d224f838404b6c5805ef975ade949675_prof);

        
        $__internal_bf69ce4231741cdfb61a5d19151988ee01d51fc50ffe8a80a92c5affc40ef960->leave($__internal_bf69ce4231741cdfb61a5d19151988ee01d51fc50ffe8a80a92c5affc40ef960_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
