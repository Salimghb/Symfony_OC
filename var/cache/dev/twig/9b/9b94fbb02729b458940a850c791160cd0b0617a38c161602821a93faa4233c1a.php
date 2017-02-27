<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b124abf8e1ee7f9d3bfbd371b1e444633ae7c2267f94ff6dec1cbe52cfe8601b extends Twig_Template
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
        $__internal_3beeea4cad51a7c313edffd7e76570d1e05278aac25bd43e7ef445ae92b5b969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3beeea4cad51a7c313edffd7e76570d1e05278aac25bd43e7ef445ae92b5b969->enter($__internal_3beeea4cad51a7c313edffd7e76570d1e05278aac25bd43e7ef445ae92b5b969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_c15376c0920037ff45b0a4573c69a0135cec5ba153d0df83367bafbe472dfcb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c15376c0920037ff45b0a4573c69a0135cec5ba153d0df83367bafbe472dfcb8->enter($__internal_c15376c0920037ff45b0a4573c69a0135cec5ba153d0df83367bafbe472dfcb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_3beeea4cad51a7c313edffd7e76570d1e05278aac25bd43e7ef445ae92b5b969->leave($__internal_3beeea4cad51a7c313edffd7e76570d1e05278aac25bd43e7ef445ae92b5b969_prof);

        
        $__internal_c15376c0920037ff45b0a4573c69a0135cec5ba153d0df83367bafbe472dfcb8->leave($__internal_c15376c0920037ff45b0a4573c69a0135cec5ba153d0df83367bafbe472dfcb8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
