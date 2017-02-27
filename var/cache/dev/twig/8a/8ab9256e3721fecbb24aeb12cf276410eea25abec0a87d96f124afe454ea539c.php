<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_d6205aa200191499e338b35e586f74564abb8cd01f8fa93ad85bae60e70facc9 extends Twig_Template
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
        $__internal_8360c385f6eaeae6135b892d6a814638e6719e375d9f09029c04d56f24a6cde9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8360c385f6eaeae6135b892d6a814638e6719e375d9f09029c04d56f24a6cde9->enter($__internal_8360c385f6eaeae6135b892d6a814638e6719e375d9f09029c04d56f24a6cde9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_e0b26fbd235efc0d2a86d6521d75a7257b819f4ca9014ef6e71d2bf68aa84a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0b26fbd235efc0d2a86d6521d75a7257b819f4ca9014ef6e71d2bf68aa84a59->enter($__internal_e0b26fbd235efc0d2a86d6521d75a7257b819f4ca9014ef6e71d2bf68aa84a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_8360c385f6eaeae6135b892d6a814638e6719e375d9f09029c04d56f24a6cde9->leave($__internal_8360c385f6eaeae6135b892d6a814638e6719e375d9f09029c04d56f24a6cde9_prof);

        
        $__internal_e0b26fbd235efc0d2a86d6521d75a7257b819f4ca9014ef6e71d2bf68aa84a59->leave($__internal_e0b26fbd235efc0d2a86d6521d75a7257b819f4ca9014ef6e71d2bf68aa84a59_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
