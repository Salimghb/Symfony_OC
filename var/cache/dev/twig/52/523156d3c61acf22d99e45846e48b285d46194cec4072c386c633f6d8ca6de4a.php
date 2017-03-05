<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_cc62a191ce5b0b66830c64a41769b65057fd927fe5614e06397a52c15df909c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_ca6a539d5f9d8a6876a1354d62c1b95f7c8b793e79bbb8851e710f99c058152a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca6a539d5f9d8a6876a1354d62c1b95f7c8b793e79bbb8851e710f99c058152a->enter($__internal_ca6a539d5f9d8a6876a1354d62c1b95f7c8b793e79bbb8851e710f99c058152a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d106481cb8fb706e27973b889d7934122d13faadfe72994bf65abdea10fd2df0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d106481cb8fb706e27973b889d7934122d13faadfe72994bf65abdea10fd2df0->enter($__internal_d106481cb8fb706e27973b889d7934122d13faadfe72994bf65abdea10fd2df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca6a539d5f9d8a6876a1354d62c1b95f7c8b793e79bbb8851e710f99c058152a->leave($__internal_ca6a539d5f9d8a6876a1354d62c1b95f7c8b793e79bbb8851e710f99c058152a_prof);

        
        $__internal_d106481cb8fb706e27973b889d7934122d13faadfe72994bf65abdea10fd2df0->leave($__internal_d106481cb8fb706e27973b889d7934122d13faadfe72994bf65abdea10fd2df0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_47ddca24e52f441d42751f4d149f9bcd6662143344dea7eb5c0cb4c6672220e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47ddca24e52f441d42751f4d149f9bcd6662143344dea7eb5c0cb4c6672220e1->enter($__internal_47ddca24e52f441d42751f4d149f9bcd6662143344dea7eb5c0cb4c6672220e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2d11497bcb513438cbcfaa5e2eb150acf7bdedecddda04907420a19e6607fa84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d11497bcb513438cbcfaa5e2eb150acf7bdedecddda04907420a19e6607fa84->enter($__internal_2d11497bcb513438cbcfaa5e2eb150acf7bdedecddda04907420a19e6607fa84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_2d11497bcb513438cbcfaa5e2eb150acf7bdedecddda04907420a19e6607fa84->leave($__internal_2d11497bcb513438cbcfaa5e2eb150acf7bdedecddda04907420a19e6607fa84_prof);

        
        $__internal_47ddca24e52f441d42751f4d149f9bcd6662143344dea7eb5c0cb4c6672220e1->leave($__internal_47ddca24e52f441d42751f4d149f9bcd6662143344dea7eb5c0cb4c6672220e1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
