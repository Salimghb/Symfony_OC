<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_552e9f692e8c66ced8d9be7d56200b5deea186d81e3a6021debbc8311c914dd2 extends Twig_Template
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
        $__internal_035f0e3d407c6f647f65a3dc316f6f7fe7a89c5ca54ae402789787138e32a033 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_035f0e3d407c6f647f65a3dc316f6f7fe7a89c5ca54ae402789787138e32a033->enter($__internal_035f0e3d407c6f647f65a3dc316f6f7fe7a89c5ca54ae402789787138e32a033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_b6810b8a844bc35858a8d3f6074b46b4af8e512fb1a22c8582c5c59c6478cad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6810b8a844bc35858a8d3f6074b46b4af8e512fb1a22c8582c5c59c6478cad2->enter($__internal_b6810b8a844bc35858a8d3f6074b46b4af8e512fb1a22c8582c5c59c6478cad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_035f0e3d407c6f647f65a3dc316f6f7fe7a89c5ca54ae402789787138e32a033->leave($__internal_035f0e3d407c6f647f65a3dc316f6f7fe7a89c5ca54ae402789787138e32a033_prof);

        
        $__internal_b6810b8a844bc35858a8d3f6074b46b4af8e512fb1a22c8582c5c59c6478cad2->leave($__internal_b6810b8a844bc35858a8d3f6074b46b4af8e512fb1a22c8582c5c59c6478cad2_prof);

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
