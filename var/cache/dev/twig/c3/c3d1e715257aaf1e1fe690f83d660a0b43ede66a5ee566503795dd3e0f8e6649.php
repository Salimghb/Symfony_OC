<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_dc9d6500c11d1ae432d2b97db25ad9f22c15c06b687f96b6c4fe1d737f1493a9 extends Twig_Template
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
        $__internal_32e0106e26fb50e3d93b5ea3c0e9a6b81f3c92995d12666666bea50ed5c58d3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32e0106e26fb50e3d93b5ea3c0e9a6b81f3c92995d12666666bea50ed5c58d3d->enter($__internal_32e0106e26fb50e3d93b5ea3c0e9a6b81f3c92995d12666666bea50ed5c58d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_e7d00eec801e1e7cb23b065dde285bb7e5e5311b9647771905007a9db30c8eb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7d00eec801e1e7cb23b065dde285bb7e5e5311b9647771905007a9db30c8eb9->enter($__internal_e7d00eec801e1e7cb23b065dde285bb7e5e5311b9647771905007a9db30c8eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_32e0106e26fb50e3d93b5ea3c0e9a6b81f3c92995d12666666bea50ed5c58d3d->leave($__internal_32e0106e26fb50e3d93b5ea3c0e9a6b81f3c92995d12666666bea50ed5c58d3d_prof);

        
        $__internal_e7d00eec801e1e7cb23b065dde285bb7e5e5311b9647771905007a9db30c8eb9->leave($__internal_e7d00eec801e1e7cb23b065dde285bb7e5e5311b9647771905007a9db30c8eb9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
