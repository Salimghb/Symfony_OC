<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_e222b9c8fa481a7b066f98d3ce949a91a2d3e9981a50775c2c9abb35a0419268 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4749b18e1b82d2d51ddff73c67e5a6d3cb977f92427149457b089125f24268c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4749b18e1b82d2d51ddff73c67e5a6d3cb977f92427149457b089125f24268c1->enter($__internal_4749b18e1b82d2d51ddff73c67e5a6d3cb977f92427149457b089125f24268c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_e7de8b3e2c60d3cfebf748219950707756fd74b8d7e267f2b219567f5463ff24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7de8b3e2c60d3cfebf748219950707756fd74b8d7e267f2b219567f5463ff24->enter($__internal_e7de8b3e2c60d3cfebf748219950707756fd74b8d7e267f2b219567f5463ff24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4749b18e1b82d2d51ddff73c67e5a6d3cb977f92427149457b089125f24268c1->leave($__internal_4749b18e1b82d2d51ddff73c67e5a6d3cb977f92427149457b089125f24268c1_prof);

        
        $__internal_e7de8b3e2c60d3cfebf748219950707756fd74b8d7e267f2b219567f5463ff24->leave($__internal_e7de8b3e2c60d3cfebf748219950707756fd74b8d7e267f2b219567f5463ff24_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_074b576bb2b4131557a5571da7f24ede61a6c93e5c143e15c00e1a02aea9c18e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_074b576bb2b4131557a5571da7f24ede61a6c93e5c143e15c00e1a02aea9c18e->enter($__internal_074b576bb2b4131557a5571da7f24ede61a6c93e5c143e15c00e1a02aea9c18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a25b82d995ed9f883dfd35f7d4613e3ffdcc2960c328807eb08bb4601692ba28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a25b82d995ed9f883dfd35f7d4613e3ffdcc2960c328807eb08bb4601692ba28->enter($__internal_a25b82d995ed9f883dfd35f7d4613e3ffdcc2960c328807eb08bb4601692ba28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_a25b82d995ed9f883dfd35f7d4613e3ffdcc2960c328807eb08bb4601692ba28->leave($__internal_a25b82d995ed9f883dfd35f7d4613e3ffdcc2960c328807eb08bb4601692ba28_prof);

        
        $__internal_074b576bb2b4131557a5571da7f24ede61a6c93e5c143e15c00e1a02aea9c18e->leave($__internal_074b576bb2b4131557a5571da7f24ede61a6c93e5c143e15c00e1a02aea9c18e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
