<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_07e48d0a50392af885080e28f6130fa0a71811d01c3e6c9ab444d7df40a149e0 extends Twig_Template
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
        $__internal_63c408b802c78c2fd46fb459879abb59a90a4a83fd38ac1de1536dfa72a8627d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63c408b802c78c2fd46fb459879abb59a90a4a83fd38ac1de1536dfa72a8627d->enter($__internal_63c408b802c78c2fd46fb459879abb59a90a4a83fd38ac1de1536dfa72a8627d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_271961fe72a912551bb2af74d74c8b5c45f4d533fd16bd35938b4adf720aec28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_271961fe72a912551bb2af74d74c8b5c45f4d533fd16bd35938b4adf720aec28->enter($__internal_271961fe72a912551bb2af74d74c8b5c45f4d533fd16bd35938b4adf720aec28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_63c408b802c78c2fd46fb459879abb59a90a4a83fd38ac1de1536dfa72a8627d->leave($__internal_63c408b802c78c2fd46fb459879abb59a90a4a83fd38ac1de1536dfa72a8627d_prof);

        
        $__internal_271961fe72a912551bb2af74d74c8b5c45f4d533fd16bd35938b4adf720aec28->leave($__internal_271961fe72a912551bb2af74d74c8b5c45f4d533fd16bd35938b4adf720aec28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
