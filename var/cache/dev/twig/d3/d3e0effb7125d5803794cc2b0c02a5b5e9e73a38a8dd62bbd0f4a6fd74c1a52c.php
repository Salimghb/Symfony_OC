<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_a149910c3a5b9c243e3d07b05a0011bd45eaed32abc77585b56e2073879d4930 extends Twig_Template
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
        $__internal_7973e45a130d75c7dc7b0b437b875bd80d9b5fac0031fc17562489c0ff422295 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7973e45a130d75c7dc7b0b437b875bd80d9b5fac0031fc17562489c0ff422295->enter($__internal_7973e45a130d75c7dc7b0b437b875bd80d9b5fac0031fc17562489c0ff422295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_bedebe016ba41bbe5cef0cb3631abaa8576ce0e3c222ebe1918af3cc33906236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bedebe016ba41bbe5cef0cb3631abaa8576ce0e3c222ebe1918af3cc33906236->enter($__internal_bedebe016ba41bbe5cef0cb3631abaa8576ce0e3c222ebe1918af3cc33906236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_7973e45a130d75c7dc7b0b437b875bd80d9b5fac0031fc17562489c0ff422295->leave($__internal_7973e45a130d75c7dc7b0b437b875bd80d9b5fac0031fc17562489c0ff422295_prof);

        
        $__internal_bedebe016ba41bbe5cef0cb3631abaa8576ce0e3c222ebe1918af3cc33906236->leave($__internal_bedebe016ba41bbe5cef0cb3631abaa8576ce0e3c222ebe1918af3cc33906236_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
