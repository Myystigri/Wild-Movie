<?php

/* FrontendBundle:Default:show.html.twig */
class __TwigTemplate_3dc7d8beb6c57b3034847ced33229d480fed92d50b4e110dc2d633125d337e2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontendBundle:Default:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04bd3d90888ddc3a09679c779d70221dccd6d71157c3ed5455908513aa1074ad = $this->env->getExtension("native_profiler");
        $__internal_04bd3d90888ddc3a09679c779d70221dccd6d71157c3ed5455908513aa1074ad->enter($__internal_04bd3d90888ddc3a09679c779d70221dccd6d71157c3ed5455908513aa1074ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Default:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04bd3d90888ddc3a09679c779d70221dccd6d71157c3ed5455908513aa1074ad->leave($__internal_04bd3d90888ddc3a09679c779d70221dccd6d71157c3ed5455908513aa1074ad_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_97e57d9a5822c01170b266487c385c89b9d363469ed5c0279215584e6554d9ca = $this->env->getExtension("native_profiler");
        $__internal_97e57d9a5822c01170b266487c385c89b9d363469ed5c0279215584e6554d9ca->enter($__internal_97e57d9a5822c01170b266487c385c89b9d363469ed5c0279215584e6554d9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"col-md-12\">
\t\t<div class=\"col-md-5 col-md-offset-1 left\">
\t\t\t<img class=\"img-style-3\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((("uploads/film/" . $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "folder", array())) . "")), "html", null, true);
        echo "\">
\t\t</div>
\t\t<div class=\"col-md-5\">

\t\t\t<h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "titre", array()), "html", null, true);
        echo "</h2>
\t\t\t<hr>
\t\t\t<p>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "description", array()), "html", null, true);
        echo "</p>
\t\t\t
\t\t</div>
\t</div>
\t<div class=\"col-md-10 col-md-offset-1\">
\t\t<div class=\"col-md-12\">
\t\t\t<h2>Commentaires : </h2>
\t\t\t<hr>
\t\t\t";
        // line 20
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 21
            echo "
\t\t\t";
            // line 22
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FrontendBundle:Post:new"));
            echo "
\t\t\t";
        } else {
            // line 24
            echo "
\t\t\t<p>Vous devez être connecté pour laisser un commentaire !</p>
\t\t\t
\t\t\t";
        }
        // line 28
        echo "
\t\t\t";
        // line 29
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FrontendBundle:Post:index"));
        echo "


\t\t\t";
        // line 33
        echo "\t\t</div>
\t</div>

";
        
        $__internal_97e57d9a5822c01170b266487c385c89b9d363469ed5c0279215584e6554d9ca->leave($__internal_97e57d9a5822c01170b266487c385c89b9d363469ed5c0279215584e6554d9ca_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 33,  86 => 29,  83 => 28,  77 => 24,  72 => 22,  69 => 21,  67 => 20,  56 => 12,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<div class="col-md-12">*/
/* 		<div class="col-md-5 col-md-offset-1 left">*/
/* 			<img class="img-style-3" src="{{ asset('uploads/film/' ~ movie.folder ~ '') }}">*/
/* 		</div>*/
/* 		<div class="col-md-5">*/
/* */
/* 			<h2>{{ movie.titre }}</h2>*/
/* 			<hr>*/
/* 			<p>{{ movie.description }}</p>*/
/* 			*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="col-md-10 col-md-offset-1">*/
/* 		<div class="col-md-12">*/
/* 			<h2>Commentaires : </h2>*/
/* 			<hr>*/
/* 			{% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/* */
/* 			{{ render(controller('FrontendBundle:Post:new')) }}*/
/* 			{% else %}*/
/* */
/* 			<p>Vous devez être connecté pour laisser un commentaire !</p>*/
/* 			*/
/* 			{% endif %}*/
/* */
/* 			{{ render(controller('FrontendBundle:Post:index')) }}*/
/* */
/* */
/* 			{# CODE HERE #}*/
/* 		</div>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
