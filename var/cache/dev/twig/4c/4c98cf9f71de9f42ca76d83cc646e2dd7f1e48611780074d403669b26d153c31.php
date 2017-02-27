<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_241906b11f803f080a874a9c8c0e998510e8ebf583454ce878d49508fd577c67 extends Twig_Template
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
        $__internal_5bc3c66462f0439b796bb9a08df1ae0471a0b74779d5e269ecd5038e47db139e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bc3c66462f0439b796bb9a08df1ae0471a0b74779d5e269ecd5038e47db139e->enter($__internal_5bc3c66462f0439b796bb9a08df1ae0471a0b74779d5e269ecd5038e47db139e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_3a71dafd6813f32242b99309485dca0d1986aacae0f8a46ad1cf4a6509a03d9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a71dafd6813f32242b99309485dca0d1986aacae0f8a46ad1cf4a6509a03d9f->enter($__internal_3a71dafd6813f32242b99309485dca0d1986aacae0f8a46ad1cf4a6509a03d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bc3c66462f0439b796bb9a08df1ae0471a0b74779d5e269ecd5038e47db139e->leave($__internal_5bc3c66462f0439b796bb9a08df1ae0471a0b74779d5e269ecd5038e47db139e_prof);

        
        $__internal_3a71dafd6813f32242b99309485dca0d1986aacae0f8a46ad1cf4a6509a03d9f->leave($__internal_3a71dafd6813f32242b99309485dca0d1986aacae0f8a46ad1cf4a6509a03d9f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3c859a50d110cf24665a6a0b646a79800c3c1464cffed2132f90551493881e65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c859a50d110cf24665a6a0b646a79800c3c1464cffed2132f90551493881e65->enter($__internal_3c859a50d110cf24665a6a0b646a79800c3c1464cffed2132f90551493881e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_eda6b8d0a3b08cb0b01f0b5a0605b2ed2650658d534e5ec356888fa941bc0fb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eda6b8d0a3b08cb0b01f0b5a0605b2ed2650658d534e5ec356888fa941bc0fb1->enter($__internal_eda6b8d0a3b08cb0b01f0b5a0605b2ed2650658d534e5ec356888fa941bc0fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_eda6b8d0a3b08cb0b01f0b5a0605b2ed2650658d534e5ec356888fa941bc0fb1->leave($__internal_eda6b8d0a3b08cb0b01f0b5a0605b2ed2650658d534e5ec356888fa941bc0fb1_prof);

        
        $__internal_3c859a50d110cf24665a6a0b646a79800c3c1464cffed2132f90551493881e65->leave($__internal_3c859a50d110cf24665a6a0b646a79800c3c1464cffed2132f90551493881e65_prof);

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
