<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_294620237de638b947629706539a2a9037c8b4303178dec4bdd4b59a447df148 extends Twig_Template
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
        $__internal_0f9a8d753cd49c0cab60808d5d3b4ad42bf113515804e93af629ab890f58b715 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f9a8d753cd49c0cab60808d5d3b4ad42bf113515804e93af629ab890f58b715->enter($__internal_0f9a8d753cd49c0cab60808d5d3b4ad42bf113515804e93af629ab890f58b715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_ae3da8706d6ed4311e9a68037e19fa23ea23e417a321d55b629131335a260dde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae3da8706d6ed4311e9a68037e19fa23ea23e417a321d55b629131335a260dde->enter($__internal_ae3da8706d6ed4311e9a68037e19fa23ea23e417a321d55b629131335a260dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_0f9a8d753cd49c0cab60808d5d3b4ad42bf113515804e93af629ab890f58b715->leave($__internal_0f9a8d753cd49c0cab60808d5d3b4ad42bf113515804e93af629ab890f58b715_prof);

        
        $__internal_ae3da8706d6ed4311e9a68037e19fa23ea23e417a321d55b629131335a260dde->leave($__internal_ae3da8706d6ed4311e9a68037e19fa23ea23e417a321d55b629131335a260dde_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
