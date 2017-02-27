<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_45dce907d27a40e6934735514931f4cfa806c6c8455173bf727c6611838b4700 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_8826048bc4a9585d4b91c939f808f296c01557bfeb8f542eeb42e394fe695ebb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8826048bc4a9585d4b91c939f808f296c01557bfeb8f542eeb42e394fe695ebb->enter($__internal_8826048bc4a9585d4b91c939f808f296c01557bfeb8f542eeb42e394fe695ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_faf13cca91f0890b478bd8ed110ddf6a0ae2857ef63db1e9896b3c795a3dd3e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faf13cca91f0890b478bd8ed110ddf6a0ae2857ef63db1e9896b3c795a3dd3e8->enter($__internal_faf13cca91f0890b478bd8ed110ddf6a0ae2857ef63db1e9896b3c795a3dd3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8826048bc4a9585d4b91c939f808f296c01557bfeb8f542eeb42e394fe695ebb->leave($__internal_8826048bc4a9585d4b91c939f808f296c01557bfeb8f542eeb42e394fe695ebb_prof);

        
        $__internal_faf13cca91f0890b478bd8ed110ddf6a0ae2857ef63db1e9896b3c795a3dd3e8->leave($__internal_faf13cca91f0890b478bd8ed110ddf6a0ae2857ef63db1e9896b3c795a3dd3e8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_788d9e3b8b9b2928373a6dd1a618c33ea2d928a21a5af1b62aed0bee07e7ef52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_788d9e3b8b9b2928373a6dd1a618c33ea2d928a21a5af1b62aed0bee07e7ef52->enter($__internal_788d9e3b8b9b2928373a6dd1a618c33ea2d928a21a5af1b62aed0bee07e7ef52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d2b7aa50b2c593ceed2966eecebe8d6ee0cf99701d2ba9cb954011143c82df9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2b7aa50b2c593ceed2966eecebe8d6ee0cf99701d2ba9cb954011143c82df9e->enter($__internal_d2b7aa50b2c593ceed2966eecebe8d6ee0cf99701d2ba9cb954011143c82df9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d2b7aa50b2c593ceed2966eecebe8d6ee0cf99701d2ba9cb954011143c82df9e->leave($__internal_d2b7aa50b2c593ceed2966eecebe8d6ee0cf99701d2ba9cb954011143c82df9e_prof);

        
        $__internal_788d9e3b8b9b2928373a6dd1a618c33ea2d928a21a5af1b62aed0bee07e7ef52->leave($__internal_788d9e3b8b9b2928373a6dd1a618c33ea2d928a21a5af1b62aed0bee07e7ef52_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9a87d7e1fb19c3a7472e355bfac5a286654f72b04d6f15573b50dbdd2725fbd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a87d7e1fb19c3a7472e355bfac5a286654f72b04d6f15573b50dbdd2725fbd1->enter($__internal_9a87d7e1fb19c3a7472e355bfac5a286654f72b04d6f15573b50dbdd2725fbd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fb54ab78fd849e8f3fbd4b65e7b006f13dd2fe1096b623c708db89d32de543cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb54ab78fd849e8f3fbd4b65e7b006f13dd2fe1096b623c708db89d32de543cd->enter($__internal_fb54ab78fd849e8f3fbd4b65e7b006f13dd2fe1096b623c708db89d32de543cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_fb54ab78fd849e8f3fbd4b65e7b006f13dd2fe1096b623c708db89d32de543cd->leave($__internal_fb54ab78fd849e8f3fbd4b65e7b006f13dd2fe1096b623c708db89d32de543cd_prof);

        
        $__internal_9a87d7e1fb19c3a7472e355bfac5a286654f72b04d6f15573b50dbdd2725fbd1->leave($__internal_9a87d7e1fb19c3a7472e355bfac5a286654f72b04d6f15573b50dbdd2725fbd1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cc58bbbd76ed637e296b92bcd97bd52fbec5dd1df07c7cc05e42f9cad3ce4a4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc58bbbd76ed637e296b92bcd97bd52fbec5dd1df07c7cc05e42f9cad3ce4a4f->enter($__internal_cc58bbbd76ed637e296b92bcd97bd52fbec5dd1df07c7cc05e42f9cad3ce4a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c9d385f0d86441b0573289c102dc6d0ccc72e46b1273889be923e85ecb401719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9d385f0d86441b0573289c102dc6d0ccc72e46b1273889be923e85ecb401719->enter($__internal_c9d385f0d86441b0573289c102dc6d0ccc72e46b1273889be923e85ecb401719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_c9d385f0d86441b0573289c102dc6d0ccc72e46b1273889be923e85ecb401719->leave($__internal_c9d385f0d86441b0573289c102dc6d0ccc72e46b1273889be923e85ecb401719_prof);

        
        $__internal_cc58bbbd76ed637e296b92bcd97bd52fbec5dd1df07c7cc05e42f9cad3ce4a4f->leave($__internal_cc58bbbd76ed637e296b92bcd97bd52fbec5dd1df07c7cc05e42f9cad3ce4a4f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
