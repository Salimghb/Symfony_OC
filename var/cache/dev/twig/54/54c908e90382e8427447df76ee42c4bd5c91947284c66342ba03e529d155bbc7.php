<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_53839805dc5d40feee01e1e76eef794f27432b5592295ec3a47dc244c0f55ab2 extends Twig_Template
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
        $__internal_c653a4d3c4a74e2f42c64909f59b60ba95afddf90ea587810aa0d3f72b4ee72d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c653a4d3c4a74e2f42c64909f59b60ba95afddf90ea587810aa0d3f72b4ee72d->enter($__internal_c653a4d3c4a74e2f42c64909f59b60ba95afddf90ea587810aa0d3f72b4ee72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_8f5fb27a297b8eb0e507c4851274f5f33415833d976634e57bc1f1c472723ba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f5fb27a297b8eb0e507c4851274f5f33415833d976634e57bc1f1c472723ba5->enter($__internal_8f5fb27a297b8eb0e507c4851274f5f33415833d976634e57bc1f1c472723ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c653a4d3c4a74e2f42c64909f59b60ba95afddf90ea587810aa0d3f72b4ee72d->leave($__internal_c653a4d3c4a74e2f42c64909f59b60ba95afddf90ea587810aa0d3f72b4ee72d_prof);

        
        $__internal_8f5fb27a297b8eb0e507c4851274f5f33415833d976634e57bc1f1c472723ba5->leave($__internal_8f5fb27a297b8eb0e507c4851274f5f33415833d976634e57bc1f1c472723ba5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
