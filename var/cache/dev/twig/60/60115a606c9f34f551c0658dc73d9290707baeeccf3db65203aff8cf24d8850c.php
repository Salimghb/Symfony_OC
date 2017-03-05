<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_d8e6638505157a324f24d52cc7106b82f2c80b68e7e7d4765fd3773aef3fea18 extends Twig_Template
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
        $__internal_07cbdacccba3153d1742357d0b6abbba23da020005df60c31ace91c2fd3916c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07cbdacccba3153d1742357d0b6abbba23da020005df60c31ace91c2fd3916c6->enter($__internal_07cbdacccba3153d1742357d0b6abbba23da020005df60c31ace91c2fd3916c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_ac323cb845432d12b3a7dbf44a97386420bd5dc38fe169a3fcabca9da0ff1629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac323cb845432d12b3a7dbf44a97386420bd5dc38fe169a3fcabca9da0ff1629->enter($__internal_ac323cb845432d12b3a7dbf44a97386420bd5dc38fe169a3fcabca9da0ff1629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_07cbdacccba3153d1742357d0b6abbba23da020005df60c31ace91c2fd3916c6->leave($__internal_07cbdacccba3153d1742357d0b6abbba23da020005df60c31ace91c2fd3916c6_prof);

        
        $__internal_ac323cb845432d12b3a7dbf44a97386420bd5dc38fe169a3fcabca9da0ff1629->leave($__internal_ac323cb845432d12b3a7dbf44a97386420bd5dc38fe169a3fcabca9da0ff1629_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
