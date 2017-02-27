<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_9bd17346f1151846329ee9bedb764f130a7eb79eb82f02ad955b2424b15b926c extends Twig_Template
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
        $__internal_f29d6e36031070f58759c5e3c3919b6adf35ba34cebf07b667c0299a8300648c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f29d6e36031070f58759c5e3c3919b6adf35ba34cebf07b667c0299a8300648c->enter($__internal_f29d6e36031070f58759c5e3c3919b6adf35ba34cebf07b667c0299a8300648c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_21d0454a11254e17d476b41a9779e9d6f76be6a5fb1ee7ebef7a35b8a905fdb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d0454a11254e17d476b41a9779e9d6f76be6a5fb1ee7ebef7a35b8a905fdb0->enter($__internal_21d0454a11254e17d476b41a9779e9d6f76be6a5fb1ee7ebef7a35b8a905fdb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_f29d6e36031070f58759c5e3c3919b6adf35ba34cebf07b667c0299a8300648c->leave($__internal_f29d6e36031070f58759c5e3c3919b6adf35ba34cebf07b667c0299a8300648c_prof);

        
        $__internal_21d0454a11254e17d476b41a9779e9d6f76be6a5fb1ee7ebef7a35b8a905fdb0->leave($__internal_21d0454a11254e17d476b41a9779e9d6f76be6a5fb1ee7ebef7a35b8a905fdb0_prof);

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
