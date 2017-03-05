<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_f5da74cc831cae1f4e2c8c48eb12db58e79b64c60996dd8bb885dd0b9b2b762f extends Twig_Template
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
        $__internal_d71aa25dfcda4587f3fc310ee69fdc142fb765f41f7e2c8dd58fbb931c477a08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d71aa25dfcda4587f3fc310ee69fdc142fb765f41f7e2c8dd58fbb931c477a08->enter($__internal_d71aa25dfcda4587f3fc310ee69fdc142fb765f41f7e2c8dd58fbb931c477a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_f80cd779d4908cc67fa1835c3bf8c7f6aa617f4d0a76a38fc6f26c61dc8ebbac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f80cd779d4908cc67fa1835c3bf8c7f6aa617f4d0a76a38fc6f26c61dc8ebbac->enter($__internal_f80cd779d4908cc67fa1835c3bf8c7f6aa617f4d0a76a38fc6f26c61dc8ebbac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_d71aa25dfcda4587f3fc310ee69fdc142fb765f41f7e2c8dd58fbb931c477a08->leave($__internal_d71aa25dfcda4587f3fc310ee69fdc142fb765f41f7e2c8dd58fbb931c477a08_prof);

        
        $__internal_f80cd779d4908cc67fa1835c3bf8c7f6aa617f4d0a76a38fc6f26c61dc8ebbac->leave($__internal_f80cd779d4908cc67fa1835c3bf8c7f6aa617f4d0a76a38fc6f26c61dc8ebbac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
