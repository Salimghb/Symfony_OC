<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_dd9b472061677e100d0f0a19ab190dc4b4a04a6db43ba963cd690561170a9900 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05bd4fc7ddc8fa51948f1fd1a042a311da6b95270fc91ef8d3b0c8000d5a7a34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05bd4fc7ddc8fa51948f1fd1a042a311da6b95270fc91ef8d3b0c8000d5a7a34->enter($__internal_05bd4fc7ddc8fa51948f1fd1a042a311da6b95270fc91ef8d3b0c8000d5a7a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_1259a78092f934d3686fcc657ed5481f8795983fcfe723a4726c030e6829c275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1259a78092f934d3686fcc657ed5481f8795983fcfe723a4726c030e6829c275->enter($__internal_1259a78092f934d3686fcc657ed5481f8795983fcfe723a4726c030e6829c275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05bd4fc7ddc8fa51948f1fd1a042a311da6b95270fc91ef8d3b0c8000d5a7a34->leave($__internal_05bd4fc7ddc8fa51948f1fd1a042a311da6b95270fc91ef8d3b0c8000d5a7a34_prof);

        
        $__internal_1259a78092f934d3686fcc657ed5481f8795983fcfe723a4726c030e6829c275->leave($__internal_1259a78092f934d3686fcc657ed5481f8795983fcfe723a4726c030e6829c275_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cafc63a4ffe7eae35b39e53285a2a1fc9859a671479d52a1f5ce9487564f2fea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cafc63a4ffe7eae35b39e53285a2a1fc9859a671479d52a1f5ce9487564f2fea->enter($__internal_cafc63a4ffe7eae35b39e53285a2a1fc9859a671479d52a1f5ce9487564f2fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_58c79a19fa0a318ce649e597ae0e873878190915af0e036b835a895f3391951e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c79a19fa0a318ce649e597ae0e873878190915af0e036b835a895f3391951e->enter($__internal_58c79a19fa0a318ce649e597ae0e873878190915af0e036b835a895f3391951e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_58c79a19fa0a318ce649e597ae0e873878190915af0e036b835a895f3391951e->leave($__internal_58c79a19fa0a318ce649e597ae0e873878190915af0e036b835a895f3391951e_prof);

        
        $__internal_cafc63a4ffe7eae35b39e53285a2a1fc9859a671479d52a1f5ce9487564f2fea->leave($__internal_cafc63a4ffe7eae35b39e53285a2a1fc9859a671479d52a1f5ce9487564f2fea_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ddd76344c996936e69d775cb02ca436e36e1a720dc50faed00b9ad26bcd095e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ddd76344c996936e69d775cb02ca436e36e1a720dc50faed00b9ad26bcd095e->enter($__internal_6ddd76344c996936e69d775cb02ca436e36e1a720dc50faed00b9ad26bcd095e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aa1d37b588f159dcd5dfa049b0fc70edf81389e1b5415179a7528c75ee97d190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa1d37b588f159dcd5dfa049b0fc70edf81389e1b5415179a7528c75ee97d190->enter($__internal_aa1d37b588f159dcd5dfa049b0fc70edf81389e1b5415179a7528c75ee97d190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_aa1d37b588f159dcd5dfa049b0fc70edf81389e1b5415179a7528c75ee97d190->leave($__internal_aa1d37b588f159dcd5dfa049b0fc70edf81389e1b5415179a7528c75ee97d190_prof);

        
        $__internal_6ddd76344c996936e69d775cb02ca436e36e1a720dc50faed00b9ad26bcd095e->leave($__internal_6ddd76344c996936e69d775cb02ca436e36e1a720dc50faed00b9ad26bcd095e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
