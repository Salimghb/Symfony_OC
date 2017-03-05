<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_1baeefbcc2cca536797ec4095c6152b3354293a582477aa0cf923dae9a138d9d extends Twig_Template
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
        $__internal_316ad8029122858aeb0c2a14be0dd789e552f2e5aedbc8345c295b3cea183608 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_316ad8029122858aeb0c2a14be0dd789e552f2e5aedbc8345c295b3cea183608->enter($__internal_316ad8029122858aeb0c2a14be0dd789e552f2e5aedbc8345c295b3cea183608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_0ae6ccba19548524d2475ddadc4cb74c98c6e659d184242a58b44c030ba899a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ae6ccba19548524d2475ddadc4cb74c98c6e659d184242a58b44c030ba899a6->enter($__internal_0ae6ccba19548524d2475ddadc4cb74c98c6e659d184242a58b44c030ba899a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_316ad8029122858aeb0c2a14be0dd789e552f2e5aedbc8345c295b3cea183608->leave($__internal_316ad8029122858aeb0c2a14be0dd789e552f2e5aedbc8345c295b3cea183608_prof);

        
        $__internal_0ae6ccba19548524d2475ddadc4cb74c98c6e659d184242a58b44c030ba899a6->leave($__internal_0ae6ccba19548524d2475ddadc4cb74c98c6e659d184242a58b44c030ba899a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
