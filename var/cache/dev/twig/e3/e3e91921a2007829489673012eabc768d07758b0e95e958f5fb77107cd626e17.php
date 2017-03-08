<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b587731a82fa1e2a9442bec2a9e1c3f0902ff01ccf9312478ac026d0fe404f7b extends Twig_Template
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
        $__internal_348f6331930d5e2a3659d9c910f0f84386e5177dc689551cc2a390853ce477c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_348f6331930d5e2a3659d9c910f0f84386e5177dc689551cc2a390853ce477c1->enter($__internal_348f6331930d5e2a3659d9c910f0f84386e5177dc689551cc2a390853ce477c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c8c03e4d13eaaa284b1ac744044c954e337ebe2e274ee825099dcd8c60167428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8c03e4d13eaaa284b1ac744044c954e337ebe2e274ee825099dcd8c60167428->enter($__internal_c8c03e4d13eaaa284b1ac744044c954e337ebe2e274ee825099dcd8c60167428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_348f6331930d5e2a3659d9c910f0f84386e5177dc689551cc2a390853ce477c1->leave($__internal_348f6331930d5e2a3659d9c910f0f84386e5177dc689551cc2a390853ce477c1_prof);

        
        $__internal_c8c03e4d13eaaa284b1ac744044c954e337ebe2e274ee825099dcd8c60167428->leave($__internal_c8c03e4d13eaaa284b1ac744044c954e337ebe2e274ee825099dcd8c60167428_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fd09eea1fa8160b7327f040566610a8731a063f72a6aa9ec2c6b0f227977e56e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd09eea1fa8160b7327f040566610a8731a063f72a6aa9ec2c6b0f227977e56e->enter($__internal_fd09eea1fa8160b7327f040566610a8731a063f72a6aa9ec2c6b0f227977e56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7962b1386e7bb853dda8878fd68c26298624c64638271ac74bde9a10848d8ac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7962b1386e7bb853dda8878fd68c26298624c64638271ac74bde9a10848d8ac3->enter($__internal_7962b1386e7bb853dda8878fd68c26298624c64638271ac74bde9a10848d8ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7962b1386e7bb853dda8878fd68c26298624c64638271ac74bde9a10848d8ac3->leave($__internal_7962b1386e7bb853dda8878fd68c26298624c64638271ac74bde9a10848d8ac3_prof);

        
        $__internal_fd09eea1fa8160b7327f040566610a8731a063f72a6aa9ec2c6b0f227977e56e->leave($__internal_fd09eea1fa8160b7327f040566610a8731a063f72a6aa9ec2c6b0f227977e56e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c21180b9e961ebfaf96193e140c961a6d1f9517764d7cd777069583559f71cc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c21180b9e961ebfaf96193e140c961a6d1f9517764d7cd777069583559f71cc1->enter($__internal_c21180b9e961ebfaf96193e140c961a6d1f9517764d7cd777069583559f71cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_504a71e5885f0eb0eebee37ce2e6aa49f36db4f9a8f9dc63467a6dbe441f2c29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_504a71e5885f0eb0eebee37ce2e6aa49f36db4f9a8f9dc63467a6dbe441f2c29->enter($__internal_504a71e5885f0eb0eebee37ce2e6aa49f36db4f9a8f9dc63467a6dbe441f2c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_504a71e5885f0eb0eebee37ce2e6aa49f36db4f9a8f9dc63467a6dbe441f2c29->leave($__internal_504a71e5885f0eb0eebee37ce2e6aa49f36db4f9a8f9dc63467a6dbe441f2c29_prof);

        
        $__internal_c21180b9e961ebfaf96193e140c961a6d1f9517764d7cd777069583559f71cc1->leave($__internal_c21180b9e961ebfaf96193e140c961a6d1f9517764d7cd777069583559f71cc1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5144d32878d148c00e23add4268572e7929d951e83fe568d714b75f2d6fa048c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5144d32878d148c00e23add4268572e7929d951e83fe568d714b75f2d6fa048c->enter($__internal_5144d32878d148c00e23add4268572e7929d951e83fe568d714b75f2d6fa048c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2774d6bcf0f2282db034efcbb6564ed9dd5c107b4f85699cde103135dd7db415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2774d6bcf0f2282db034efcbb6564ed9dd5c107b4f85699cde103135dd7db415->enter($__internal_2774d6bcf0f2282db034efcbb6564ed9dd5c107b4f85699cde103135dd7db415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_2774d6bcf0f2282db034efcbb6564ed9dd5c107b4f85699cde103135dd7db415->leave($__internal_2774d6bcf0f2282db034efcbb6564ed9dd5c107b4f85699cde103135dd7db415_prof);

        
        $__internal_5144d32878d148c00e23add4268572e7929d951e83fe568d714b75f2d6fa048c->leave($__internal_5144d32878d148c00e23add4268572e7929d951e83fe568d714b75f2d6fa048c_prof);

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
