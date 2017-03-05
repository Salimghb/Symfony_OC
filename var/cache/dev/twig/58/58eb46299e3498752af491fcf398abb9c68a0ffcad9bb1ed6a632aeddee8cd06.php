<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_d6cb6cbeeb3e1f514801834123a9f84a251f9971f4810198e3a6366663d6eaf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec26e522614b389ae9514558b485caf83e6d82cefdab43dbec5dd038bccf29c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec26e522614b389ae9514558b485caf83e6d82cefdab43dbec5dd038bccf29c9->enter($__internal_ec26e522614b389ae9514558b485caf83e6d82cefdab43dbec5dd038bccf29c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_200a3511008463a4f25e1fa6e8eb4d1fc5a97814f47e6531cda0a28c2ec60e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_200a3511008463a4f25e1fa6e8eb4d1fc5a97814f47e6531cda0a28c2ec60e29->enter($__internal_200a3511008463a4f25e1fa6e8eb4d1fc5a97814f47e6531cda0a28c2ec60e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ec26e522614b389ae9514558b485caf83e6d82cefdab43dbec5dd038bccf29c9->leave($__internal_ec26e522614b389ae9514558b485caf83e6d82cefdab43dbec5dd038bccf29c9_prof);

        
        $__internal_200a3511008463a4f25e1fa6e8eb4d1fc5a97814f47e6531cda0a28c2ec60e29->leave($__internal_200a3511008463a4f25e1fa6e8eb4d1fc5a97814f47e6531cda0a28c2ec60e29_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b860886f42a2a0d59eff61c4a6387c5343c34f079b180aac5a2d8a1676c7ca7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b860886f42a2a0d59eff61c4a6387c5343c34f079b180aac5a2d8a1676c7ca7f->enter($__internal_b860886f42a2a0d59eff61c4a6387c5343c34f079b180aac5a2d8a1676c7ca7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c86e31dfab44f7bd6a286f5bb591973d27bc5a079a14765c75439c249215172d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c86e31dfab44f7bd6a286f5bb591973d27bc5a079a14765c75439c249215172d->enter($__internal_c86e31dfab44f7bd6a286f5bb591973d27bc5a079a14765c75439c249215172d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c86e31dfab44f7bd6a286f5bb591973d27bc5a079a14765c75439c249215172d->leave($__internal_c86e31dfab44f7bd6a286f5bb591973d27bc5a079a14765c75439c249215172d_prof);

        
        $__internal_b860886f42a2a0d59eff61c4a6387c5343c34f079b180aac5a2d8a1676c7ca7f->leave($__internal_b860886f42a2a0d59eff61c4a6387c5343c34f079b180aac5a2d8a1676c7ca7f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
