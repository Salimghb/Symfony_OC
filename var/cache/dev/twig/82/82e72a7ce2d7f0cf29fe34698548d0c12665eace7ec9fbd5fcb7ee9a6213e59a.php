<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_81adae75faad2e6ba3c986a31a7c8b6df32ae167cdececdf2a290bce27b530a6 extends Twig_Template
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
        $__internal_20a1f8c284ef3dc30a7287069ae99d3e8fe5de0a218a276823b0f6c3242cdd2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20a1f8c284ef3dc30a7287069ae99d3e8fe5de0a218a276823b0f6c3242cdd2f->enter($__internal_20a1f8c284ef3dc30a7287069ae99d3e8fe5de0a218a276823b0f6c3242cdd2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_e1ac9350eb2098fb16f79594416ecc44f3838ba478fcd1cc022a417a9dcd7ad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1ac9350eb2098fb16f79594416ecc44f3838ba478fcd1cc022a417a9dcd7ad1->enter($__internal_e1ac9350eb2098fb16f79594416ecc44f3838ba478fcd1cc022a417a9dcd7ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_20a1f8c284ef3dc30a7287069ae99d3e8fe5de0a218a276823b0f6c3242cdd2f->leave($__internal_20a1f8c284ef3dc30a7287069ae99d3e8fe5de0a218a276823b0f6c3242cdd2f_prof);

        
        $__internal_e1ac9350eb2098fb16f79594416ecc44f3838ba478fcd1cc022a417a9dcd7ad1->leave($__internal_e1ac9350eb2098fb16f79594416ecc44f3838ba478fcd1cc022a417a9dcd7ad1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
