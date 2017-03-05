<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_c461d682694ac95db26a8c5b409f676678bf985c3e11dd5a56033a90c67dead0 extends Twig_Template
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
        $__internal_fce6b0a5df0887a941051ae408d6c2cf2595cf745a9e16987888b65dba5e0b1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fce6b0a5df0887a941051ae408d6c2cf2595cf745a9e16987888b65dba5e0b1d->enter($__internal_fce6b0a5df0887a941051ae408d6c2cf2595cf745a9e16987888b65dba5e0b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_30f48635b63ee296032633cc78ca3607d40348944426f88ee6660259df1a0b1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30f48635b63ee296032633cc78ca3607d40348944426f88ee6660259df1a0b1b->enter($__internal_30f48635b63ee296032633cc78ca3607d40348944426f88ee6660259df1a0b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_fce6b0a5df0887a941051ae408d6c2cf2595cf745a9e16987888b65dba5e0b1d->leave($__internal_fce6b0a5df0887a941051ae408d6c2cf2595cf745a9e16987888b65dba5e0b1d_prof);

        
        $__internal_30f48635b63ee296032633cc78ca3607d40348944426f88ee6660259df1a0b1b->leave($__internal_30f48635b63ee296032633cc78ca3607d40348944426f88ee6660259df1a0b1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
