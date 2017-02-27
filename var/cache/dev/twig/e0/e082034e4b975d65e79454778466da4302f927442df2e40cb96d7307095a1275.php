<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_ba884bcc3785bec48fa7a68651cb0366d9c40cfbc143ce192c957dc3a2a98c7e extends Twig_Template
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
        $__internal_6771e6a6187573d9435b92423594b4a0057553f1c239b4f67d95b8c349507065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6771e6a6187573d9435b92423594b4a0057553f1c239b4f67d95b8c349507065->enter($__internal_6771e6a6187573d9435b92423594b4a0057553f1c239b4f67d95b8c349507065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_9d3b3d84cb49d19dabc20b76689564ba1ad347f06de993ee1636f7c5dc31f9e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d3b3d84cb49d19dabc20b76689564ba1ad347f06de993ee1636f7c5dc31f9e5->enter($__internal_9d3b3d84cb49d19dabc20b76689564ba1ad347f06de993ee1636f7c5dc31f9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_6771e6a6187573d9435b92423594b4a0057553f1c239b4f67d95b8c349507065->leave($__internal_6771e6a6187573d9435b92423594b4a0057553f1c239b4f67d95b8c349507065_prof);

        
        $__internal_9d3b3d84cb49d19dabc20b76689564ba1ad347f06de993ee1636f7c5dc31f9e5->leave($__internal_9d3b3d84cb49d19dabc20b76689564ba1ad347f06de993ee1636f7c5dc31f9e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
