<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_4200d37ffa52f13af3d7ac4d14c8c6961ae98f0e2e8954cb8adc54233b648d9f extends Twig_Template
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
        $__internal_478dcd405ae9f5b7ebbe6f27aa489ce9d04190155746c7e55242c0e9129e477e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_478dcd405ae9f5b7ebbe6f27aa489ce9d04190155746c7e55242c0e9129e477e->enter($__internal_478dcd405ae9f5b7ebbe6f27aa489ce9d04190155746c7e55242c0e9129e477e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_36162e035a35b0e4e203443ad6a5318cd703feaed07e92f61d1d6c1a32f2d4fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36162e035a35b0e4e203443ad6a5318cd703feaed07e92f61d1d6c1a32f2d4fb->enter($__internal_36162e035a35b0e4e203443ad6a5318cd703feaed07e92f61d1d6c1a32f2d4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_478dcd405ae9f5b7ebbe6f27aa489ce9d04190155746c7e55242c0e9129e477e->leave($__internal_478dcd405ae9f5b7ebbe6f27aa489ce9d04190155746c7e55242c0e9129e477e_prof);

        
        $__internal_36162e035a35b0e4e203443ad6a5318cd703feaed07e92f61d1d6c1a32f2d4fb->leave($__internal_36162e035a35b0e4e203443ad6a5318cd703feaed07e92f61d1d6c1a32f2d4fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
