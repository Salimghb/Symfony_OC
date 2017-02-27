<?php

/* SalimPlateformeBundle:Advert:indexBye.html.twig */
class __TwigTemplate_3eba9cd51600481a10d6581c6f0814f5b373e816f83dcf678e5254097b541bb8 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <title>A bientôt sur ma deuxieme page !</title>
  </head>
  <body>
    <h1>Goodbye ";
        // line 7
        echo twig_escape_filter($this->env, ((($context["prenom"] ?? null) . " ") . ($context["nom"] ?? null)), "html", null, true);
        echo " !</h1>

    <p>
      A bientôt !
    </p>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "SalimPlateformeBundle:Advert:indexBye.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SalimPlateformeBundle:Advert:indexBye.html.twig", "C:\\wamp64\\www\\Symfony\\src\\Salim\\PlateformeBundle/Resources/views/Advert/indexBye.html.twig");
    }
}
