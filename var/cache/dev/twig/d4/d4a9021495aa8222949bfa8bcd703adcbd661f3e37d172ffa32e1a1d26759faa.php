<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_795558c04f2475d324ae81e2a4536ce31e91af175d5d3d6965120566b23d60b9 extends Twig_Template
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
        $__internal_c6671154e4edb7a4799419830f79e2b188c7901fcb52d4fcde0fd2380fb39bd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6671154e4edb7a4799419830f79e2b188c7901fcb52d4fcde0fd2380fb39bd6->enter($__internal_c6671154e4edb7a4799419830f79e2b188c7901fcb52d4fcde0fd2380fb39bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_21f7f1f96eabc4dfb38e4eea7730b80fb8ffbaed9e63fa1629c3ecd9cdffa285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21f7f1f96eabc4dfb38e4eea7730b80fb8ffbaed9e63fa1629c3ecd9cdffa285->enter($__internal_21f7f1f96eabc4dfb38e4eea7730b80fb8ffbaed9e63fa1629c3ecd9cdffa285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_c6671154e4edb7a4799419830f79e2b188c7901fcb52d4fcde0fd2380fb39bd6->leave($__internal_c6671154e4edb7a4799419830f79e2b188c7901fcb52d4fcde0fd2380fb39bd6_prof);

        
        $__internal_21f7f1f96eabc4dfb38e4eea7730b80fb8ffbaed9e63fa1629c3ecd9cdffa285->leave($__internal_21f7f1f96eabc4dfb38e4eea7730b80fb8ffbaed9e63fa1629c3ecd9cdffa285_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
