<?php

/* sites/all/modules/youtube/templates/youtube-thumbnail.html.twig */
class __TwigTemplate_520945b2fd318ef76fa6175666d68dfb9259e7548f64325627c01e5d1bf9a9e4 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 25
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["image"]) ? $context["image"] : null), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "sites/all/modules/youtube/templates/youtube-thumbnail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 25,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display an embedded YouTube video.*/
/*  **/
/*  * Available variables:*/
/*  * - video_id: The ID of the YouTube video. Used to construct the iframe's src.*/
/*  * - entity_title: The title of the entity with the YouTube video field value.*/
/*  * - image_style: The image style to render the image through, if selected in*/
/*  *   the field's display settings.*/
/*  * - image_link: The link object for where the image should be linked to, if*/
/*  *   selected in the field's display settings.*/
/*  * - image: An image render array. If an image_link was passed, a rendered link*/
/*  *   is wrapped around the image. The image has the following attributes:*/
/*  *   - src: The URL of the local image. This image is downloaded when the*/
/*  *     thumbnail display is first rendered. If the image is to be rendered*/
/*  *     through an image style, this URL will reflect that.*/
/*  *   - alt: Alternate text based on the title of the entity with this field.*/
/*  **/
/*  * @see template_preprocess_youtube_thumbnail()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {{ image }}*/
/* */
