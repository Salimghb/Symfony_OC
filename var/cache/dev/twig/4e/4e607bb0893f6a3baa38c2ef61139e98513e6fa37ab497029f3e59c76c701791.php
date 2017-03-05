<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_415ead967e717ee7456672796cc78232cafb69075362f92cbf8c3e651373f519 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70b246388ae53deab70d97f0333c1a10d5f693fdeb26b91478b7f70ead264816 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70b246388ae53deab70d97f0333c1a10d5f693fdeb26b91478b7f70ead264816->enter($__internal_70b246388ae53deab70d97f0333c1a10d5f693fdeb26b91478b7f70ead264816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_4dffc512e2ecea973eee37b7861d639f1508c6a4db1316f49b31c10d73d52177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dffc512e2ecea973eee37b7861d639f1508c6a4db1316f49b31c10d73d52177->enter($__internal_4dffc512e2ecea973eee37b7861d639f1508c6a4db1316f49b31c10d73d52177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70b246388ae53deab70d97f0333c1a10d5f693fdeb26b91478b7f70ead264816->leave($__internal_70b246388ae53deab70d97f0333c1a10d5f693fdeb26b91478b7f70ead264816_prof);

        
        $__internal_4dffc512e2ecea973eee37b7861d639f1508c6a4db1316f49b31c10d73d52177->leave($__internal_4dffc512e2ecea973eee37b7861d639f1508c6a4db1316f49b31c10d73d52177_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b51d72a59e4c542c808e66b2eddf39a49eb9052a84114a24ffbf46be4ae707db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b51d72a59e4c542c808e66b2eddf39a49eb9052a84114a24ffbf46be4ae707db->enter($__internal_b51d72a59e4c542c808e66b2eddf39a49eb9052a84114a24ffbf46be4ae707db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_867a53475e9ea70800605f5bbd40ebe5701e2fe27233ca7f0c021afce4cd68ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_867a53475e9ea70800605f5bbd40ebe5701e2fe27233ca7f0c021afce4cd68ab->enter($__internal_867a53475e9ea70800605f5bbd40ebe5701e2fe27233ca7f0c021afce4cd68ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_867a53475e9ea70800605f5bbd40ebe5701e2fe27233ca7f0c021afce4cd68ab->leave($__internal_867a53475e9ea70800605f5bbd40ebe5701e2fe27233ca7f0c021afce4cd68ab_prof);

        
        $__internal_b51d72a59e4c542c808e66b2eddf39a49eb9052a84114a24ffbf46be4ae707db->leave($__internal_b51d72a59e4c542c808e66b2eddf39a49eb9052a84114a24ffbf46be4ae707db_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_32dab88039d770e9a1cb762d423c33e9adaf8176d5742735bcf6d6fcfe8b18a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32dab88039d770e9a1cb762d423c33e9adaf8176d5742735bcf6d6fcfe8b18a9->enter($__internal_32dab88039d770e9a1cb762d423c33e9adaf8176d5742735bcf6d6fcfe8b18a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_729229919b18067d0f660ce9e4f8538f992b26a58345fa3cf096fd4d9c41cd45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_729229919b18067d0f660ce9e4f8538f992b26a58345fa3cf096fd4d9c41cd45->enter($__internal_729229919b18067d0f660ce9e4f8538f992b26a58345fa3cf096fd4d9c41cd45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_729229919b18067d0f660ce9e4f8538f992b26a58345fa3cf096fd4d9c41cd45->leave($__internal_729229919b18067d0f660ce9e4f8538f992b26a58345fa3cf096fd4d9c41cd45_prof);

        
        $__internal_32dab88039d770e9a1cb762d423c33e9adaf8176d5742735bcf6d6fcfe8b18a9->leave($__internal_32dab88039d770e9a1cb762d423c33e9adaf8176d5742735bcf6d6fcfe8b18a9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_009f1a75110f1f0c5abcacecee4088ad0f9a0e628e9a09be209e5daa9618f8ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_009f1a75110f1f0c5abcacecee4088ad0f9a0e628e9a09be209e5daa9618f8ba->enter($__internal_009f1a75110f1f0c5abcacecee4088ad0f9a0e628e9a09be209e5daa9618f8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0f0989fff97c7aedf16731e5d7a521badd5fb91919b7628c96f626c6193e7548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f0989fff97c7aedf16731e5d7a521badd5fb91919b7628c96f626c6193e7548->enter($__internal_0f0989fff97c7aedf16731e5d7a521badd5fb91919b7628c96f626c6193e7548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0f0989fff97c7aedf16731e5d7a521badd5fb91919b7628c96f626c6193e7548->leave($__internal_0f0989fff97c7aedf16731e5d7a521badd5fb91919b7628c96f626c6193e7548_prof);

        
        $__internal_009f1a75110f1f0c5abcacecee4088ad0f9a0e628e9a09be209e5daa9618f8ba->leave($__internal_009f1a75110f1f0c5abcacecee4088ad0f9a0e628e9a09be209e5daa9618f8ba_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
