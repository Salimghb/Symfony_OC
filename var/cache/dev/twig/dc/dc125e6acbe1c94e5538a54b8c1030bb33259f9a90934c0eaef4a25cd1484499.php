<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_07ab2b47a7c7384585cd46d73a30e58ea94ed9487b1d7d18a4c7b4ad9bf56b9a extends Twig_Template
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
        $__internal_811b3c31d2f2ac5a0a3ca46458933ddf02e12bdc32daf8fa622c062a49af7b02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_811b3c31d2f2ac5a0a3ca46458933ddf02e12bdc32daf8fa622c062a49af7b02->enter($__internal_811b3c31d2f2ac5a0a3ca46458933ddf02e12bdc32daf8fa622c062a49af7b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_5cd6119ec5bb3eb25d8458d266425ac8799f9c3813203757de4e81f84b511dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cd6119ec5bb3eb25d8458d266425ac8799f9c3813203757de4e81f84b511dc8->enter($__internal_5cd6119ec5bb3eb25d8458d266425ac8799f9c3813203757de4e81f84b511dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_811b3c31d2f2ac5a0a3ca46458933ddf02e12bdc32daf8fa622c062a49af7b02->leave($__internal_811b3c31d2f2ac5a0a3ca46458933ddf02e12bdc32daf8fa622c062a49af7b02_prof);

        
        $__internal_5cd6119ec5bb3eb25d8458d266425ac8799f9c3813203757de4e81f84b511dc8->leave($__internal_5cd6119ec5bb3eb25d8458d266425ac8799f9c3813203757de4e81f84b511dc8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
