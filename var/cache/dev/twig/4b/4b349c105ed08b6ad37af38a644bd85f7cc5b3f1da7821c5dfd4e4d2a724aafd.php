<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_01fed0029900e44b2838fb67e2d9354201c506726aa420fb8cab8ade03165235 extends Twig_Template
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
        $__internal_9fcecd055e643a9cc2d942ba00b1876b08b6878adf3db6c1d1d6a83c30bdbe96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fcecd055e643a9cc2d942ba00b1876b08b6878adf3db6c1d1d6a83c30bdbe96->enter($__internal_9fcecd055e643a9cc2d942ba00b1876b08b6878adf3db6c1d1d6a83c30bdbe96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_c57ebbd06caf7309602e66c3867de383a0777615696e795a2d060871537aaf30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c57ebbd06caf7309602e66c3867de383a0777615696e795a2d060871537aaf30->enter($__internal_c57ebbd06caf7309602e66c3867de383a0777615696e795a2d060871537aaf30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9fcecd055e643a9cc2d942ba00b1876b08b6878adf3db6c1d1d6a83c30bdbe96->leave($__internal_9fcecd055e643a9cc2d942ba00b1876b08b6878adf3db6c1d1d6a83c30bdbe96_prof);

        
        $__internal_c57ebbd06caf7309602e66c3867de383a0777615696e795a2d060871537aaf30->leave($__internal_c57ebbd06caf7309602e66c3867de383a0777615696e795a2d060871537aaf30_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
