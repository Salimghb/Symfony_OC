<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_e94e33310ae95e5c63f6ffc34d64de60e01a04381f8bbda4ddefed83ddd73229 extends Twig_Template
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
        $__internal_74e546f1d0e0a33b6e070137c3f77fa0ebcbeafc409aebd9ea40417b81f51a41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74e546f1d0e0a33b6e070137c3f77fa0ebcbeafc409aebd9ea40417b81f51a41->enter($__internal_74e546f1d0e0a33b6e070137c3f77fa0ebcbeafc409aebd9ea40417b81f51a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_7d109c6f76623632e32df65f853bb1641895ed8e5fa33842375f5c183098ab98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d109c6f76623632e32df65f853bb1641895ed8e5fa33842375f5c183098ab98->enter($__internal_7d109c6f76623632e32df65f853bb1641895ed8e5fa33842375f5c183098ab98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_74e546f1d0e0a33b6e070137c3f77fa0ebcbeafc409aebd9ea40417b81f51a41->leave($__internal_74e546f1d0e0a33b6e070137c3f77fa0ebcbeafc409aebd9ea40417b81f51a41_prof);

        
        $__internal_7d109c6f76623632e32df65f853bb1641895ed8e5fa33842375f5c183098ab98->leave($__internal_7d109c6f76623632e32df65f853bb1641895ed8e5fa33842375f5c183098ab98_prof);

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
