<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_9781175d7d2f96a0c4395b170a783381bf7238ea78dcfd332ae3f67f5fa84a44 extends Twig_Template
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
        $__internal_a2aaafc9957985d12fb6bbf74293d45375b23003fa9a7ab592b52be64411d586 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2aaafc9957985d12fb6bbf74293d45375b23003fa9a7ab592b52be64411d586->enter($__internal_a2aaafc9957985d12fb6bbf74293d45375b23003fa9a7ab592b52be64411d586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_14c5fe8517c259fcdd94640afed4bec555db1ee80926326e7a77fe180f88c0fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14c5fe8517c259fcdd94640afed4bec555db1ee80926326e7a77fe180f88c0fa->enter($__internal_14c5fe8517c259fcdd94640afed4bec555db1ee80926326e7a77fe180f88c0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_a2aaafc9957985d12fb6bbf74293d45375b23003fa9a7ab592b52be64411d586->leave($__internal_a2aaafc9957985d12fb6bbf74293d45375b23003fa9a7ab592b52be64411d586_prof);

        
        $__internal_14c5fe8517c259fcdd94640afed4bec555db1ee80926326e7a77fe180f88c0fa->leave($__internal_14c5fe8517c259fcdd94640afed4bec555db1ee80926326e7a77fe180f88c0fa_prof);

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
