<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_873cf7c4762491f06eac0cc9cb8aecccc3baa3416c21ce164f62f79a0619e622 extends Twig_Template
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
        $__internal_66599f702917d3aecb4cf767ee8720b7b1ae96b14bc340962f62b53ff29ec7f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66599f702917d3aecb4cf767ee8720b7b1ae96b14bc340962f62b53ff29ec7f2->enter($__internal_66599f702917d3aecb4cf767ee8720b7b1ae96b14bc340962f62b53ff29ec7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_e7bec5e0cf9404759f16ba5b2fb69e85a0cc9656a91015bc6acb79a15cc5d9fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7bec5e0cf9404759f16ba5b2fb69e85a0cc9656a91015bc6acb79a15cc5d9fb->enter($__internal_e7bec5e0cf9404759f16ba5b2fb69e85a0cc9656a91015bc6acb79a15cc5d9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_66599f702917d3aecb4cf767ee8720b7b1ae96b14bc340962f62b53ff29ec7f2->leave($__internal_66599f702917d3aecb4cf767ee8720b7b1ae96b14bc340962f62b53ff29ec7f2_prof);

        
        $__internal_e7bec5e0cf9404759f16ba5b2fb69e85a0cc9656a91015bc6acb79a15cc5d9fb->leave($__internal_e7bec5e0cf9404759f16ba5b2fb69e85a0cc9656a91015bc6acb79a15cc5d9fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
