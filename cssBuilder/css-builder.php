<?php

function min_css($tag,$action)
{
	echo	$tag.'{';
	echo	$action;
	echo		'}';
}


function css($tag,$action)
{
	echo	$tag.'{';
	echo	"\n";
	echo	$action;
	echo		'}';
	echo	"\n";
	echo	"\n";
}



/********************************************************************
 ********************************************************************
 *'flex-start|flex-end|center|space-between|space-around|stretch'****
 ********************************************************************
 ********************************************************************/
function align_content($type)
{
	return 'align-content:'.$type.';'."\n".'-webkit-align-content:'.$type.';'."\n";
}


function min_align_content($type)
{
	return 'align-content:'.$type.';'.'-webkit-align-content:'.$type.';';
}

/********************************************************************
 ********************************************************************
 **********'flex-start|flex-end|center|baseline|stretch'*************
 ********************************************************************
 ********************************************************************/

function align_items($type)
{
	return 'align-items:'.$type.';'."\n";
}

function min_align_items($type)
{
	return 'align-items:'.$type.';';
}


/*******************************************************************
 *******************************************************************
 ********auto|flex-start|flex-end|center|baseline|stretch***********
 *******************************************************************
 *******************************************************************/

function align_self($type)
{
	return 'align-self:'.$type.';'."\n";
}

function min_align_self($type)
{
	return 'align-self:'.$type.';';
}


/******************************************************************
 ******************************************************************
 ***<attachment>|<box>|<background-color>|<bg-imge>|<position>*****
 *********<repeat-style>|<bg-size>*********************************
 ******************************************************************/

function background($values)
{
	return 'background:'.$values.';'."\n";
}

function min_background($values)
{
	return 'background:'.$values.';';
}


/****************************************************************
 ****************************************************************
 **********fixed|local|scroll************************************
 ****************************************************************
 **********normal|multiply|screen|overlay|darken|lighten|color-do
 dge|color-burn|hard-light|soft-light|difference|exclusion|hue|
 saturation|color|luminosity*************************************
 ****************************************************************
 ***********border-box|padding-box|content-box*******************
 ****************************************************************
 ***********color-map********************************************
 ****************************************************************
 ***********none|url(/PATH/TO/IMAGE)*****************************
 ****************************************************************
 ***********border-box|padding-box|content-box*******************
 ****************************************************************
 ***********top|bottom|left|right|center|25% 75%|0px 0px,center**
 ****************************************************************
 ***********repeat-x|repeat-y|repeat|space|round|no-repeat*******
 ****************************************************************
 ***********<length>|<percentage>|auto|contain|cover*************/



function custom_background($attachment,$blend_mode,$clip,$color,$image,$orgin,$position,$repeat,$size)
{
	return 'background-attachment:'.$attachment.';'."\n".'background-blend-mode:'.$blend_mode.';'."\n".'background-clip:'.$clip.';'."\n".'background-color:'.$color.';'."\n".'background-image:'.$image.';'."\n".'background-origin:'.$orgin.';'."\n".'background-position:'.$position.';'."\n".'background-repeat:'.$repeat.';'."\n".'background-size:'.$size.';'."\n".'-webkit-background-size:'.$size.';'."\n".'-moz-background-size:'.$size.';'."\n".'-o-background-size:'.$size.';'."\n".'-moz-border-image:'.$image.';'."\n".'-moz-background-origin:'.$orgin.';'."\n".'-webkit-background-image:'.$image.';'."\n".'-moz-background-image:'.$image.';'."\n".'-o-background-image:'.$image.';'."\n".'-moz-background-clip:'.$clip.';'."\n";
}


function min_custom_background($attachment,$blend_mode,$clip,$color,$image,$orgin,$position,$repeat,$size)
{
	return 'background-attachment:'.$attachment.';'.'background-blend-mode:'.$blend_mode.';'.'background-clip:'.$clip.';'.'background-color:'.$color.';'.'background-image:'.$image.';'.'background-origin:'.$orgin.';'.'background-position:'.$position.';'.'background-size:'.$size.';'.'-webkit-background-size:'.$size.';'.'-o-background-size:'.$size.';'.'-moz-border-image:'.$image.';'.'-moz-background-origin:'.$orgin.';'.'-webkit-background-image:'.$image.';'.'-moz-background-image:'.$image.';'.'-o-background-image:'.$image.';'.'-moz-background-clip:'.$clip.';';
}


/***************************************************************************
 ***************************************************************************
 ***********************<br-width>******************************************
 *************<length>|thin|medium|thick************************************
 ***************************************************************************
 **********************<br-style>*******************************************
 *******none|hidden|dotted|dashed|solid|double|groove|ridge|inset|outset****
 ***************************************************************************
 *******************<color>*************************************************
 ************rgb()|rga()|hsl()|hsla()|<hex-color>|<name-color>|currentcolor|
 <deprecated-system-color>**************************************************
 ***************************************************************************/


function border($values)
{
	return 'border:'.$values.';'."\n";
}


function min_border($values)
{
	return 'border:'.$values.';';
}


/***************************************************************************
 ***************************************************************************
 *******top&bottom&left&right:<size>|<type>|<color>*************************
 ***************************************************************************
 ***************************************************************************/

function custom_border($top,$bottom,$left,$right,$image,$radius,$space,$style,$color,$width)
{
	return 'border-top:'.$top.';'."\n".'border-bottom:'.$bottom.';'."\n".'border-left:'.$left.';'."\n".'border-right:'.$right.';'."\n".'border-image:'.$image.';'."\n".'border-radius:'.$radius.';'."\n".'border-spacing:'.$space.';'."\n".'border-style:'.$style.';'."\n".'border-color:'.$color.';'."\n".'border-width:'.$width.';'."\n";
}


function min_custom_border($top,$bottom,$left,$right,$image,$radius,$space,$style,$color,$width)
{
	return 'border-top:'.$top.';'.'border-bottom:'.$bottom.';'.'border-left:'.$left.';'.'border-right:'.$right.';'.'border-image:'.$image.';'.'border-radius:'.$radius.';'.'border-spacing:'.$space.';'.'border-style:'.$style.';'.'border-color:'.$color.';'.'border-width:'.$width.';';}



/*************************************************************************
 *************************************************************************
 ***********border ---- xxxx *********************************************
 *************************************************************************
 *************************************************************************/

function border_bottom($color,$left_radius,$right_radius,$style,$width)
{
	return 'border-bottom-color:'.$color.';'."\n".'border-bottom-left-radius:'.$left_radius.';'."\n".'border-bottom-right-radius:'.$right_radius.';'."\n".'border-bottom-style:'.$style.';'."\n".'border-bottom-width:'.$width.';'."\n";
}


function min_border_bottom($color,$left_radius,$right_radius,$style,$width)
{
	return 'border-bottom-color:'.$color.';'.'border-bottom-left-radius:'.$left_radius.';'.'border-bottom-right-radius:'.$right_radius.';'.'border-bottom-style:'.$style.';'.'border-bottom-width:'.$width.';';

}

function border_top($color,$left_radius,$right_radius,$style,$width)
{
	return 'border-top-color:'.$color.';'."\n".'border-top-left-radius:'.$left_radius.';'."\n".'border-top-right-radius:'.$right_radius.';'."\n".'border-top-style:'.$style.';'."\n".'border-top-width:'.$width.';'."\n";

}


function min_border_top($color,$left_radius,$right_radius,$style,$width)
{
	return 'border-top-color:'.$color.';'.'border-top-left-radius:'.$left_radius.';'.'border-top-right-radius:'.$right_radius.';'.'border-top-style:'.$style.';'.'border-top-width:'.$width.';';
}


function border_left($color,$style,$width)
{
	return 'border-left-color:'.$color.';'."\n".'border-left-style:'.$style.';'."\n".'border-width:'.$width.';'."\n";

}

function min_border_left($color,$style,$width)
{
	return 'border-left-color:'.$color.';'.'border-left-style:'.$style.';'.'border-width:'.$width.';';
}


function border_right($color,$style,$width)
{
	return 'border-right-color:'.$color.';'."\n".'border-right-style:'.$style.';'."\n".'border-right-width:'.$width.';'."\n";

}


function min_border_right($color,$style,$width)
{
	return 'border-right-color:'.$color.';'.'border-right-style:'.$style.';'.'border-right-width:'.$width.';';

}

function border_shadow($set,$X,$y,$blur_radius,$spread_radius,$color)
{
	return 'box-shadow:'.$set.''.$x.''.$y.''.$blur_radius.''.$spread_radius.''.$color.';'."\n".'-moz-box-shadow:'.$set.''.$x.''.$y.''.$blur_radius.''.$spread_radius.''.$color.';'."\n".'-webkit-box-shadow:'.$set.''.$x.''.$y.''.$blur_radius.''.$spread_radius.''.$color.';'."\n";
}


function min_border_shadow($set,$x,$y,$blur_radius,$spread_radius,$color)
{
	return 'box-shadow:'.$set.''.$x.''.$y.''.$blur_radius.''.$spread_radius.''.$color.';'.'-moz-box-shadow:'.$set.''.$x.''.$y.''.$blur_radius.''.$spread_radius.''.$color.';'.'-webkit-box-shadow:'.$set.''.$x.''.$y.''.$blur_radius.''.$spread_radius.''.$color.';';
}



/****************************************************************************
 ****************************************************************************
 **************************break-xxxx****************************************
 ****************************************************************************
 ****************************************************************************/


function break_($time,$values)
{
	return 'break-'.$time.':'.$values.';'."\n";
}


function min_break_($time,$values)
{
	return 'break-'.$time.':'.$values.';';
}


/*************************************************************************
 *************************************************************************
 **************************caption-side***********************************
 *************************************************************************
 *************************************************************************/


function caption_side($values)
{
	return 'caption:'.$values.';'."\n";
}


function min_caption_side($values)
{
	return 'caption:'.$values.';';
}

/***********************************************************************
 ***********************************************************************
 **************************text_effect**********************************
 ***********************************************************************
 ***********************************************************************/

function text_effect($clear)
{
	return 'clear:'.$clear.';'."\n";
}

function min_text_effect($clear)
{
	return 'clear:'.$clear.';';
}



/*******************************************************************
 *******************************************************************
 ************/


function column($count,$fill,$gap,$rule,$span,$width)
{
	return 'column-count:'.$count.';'."\n".'-webkit-column-count:'.$count.';'."\n".'-moz-column-count:'.$count.';'."\n".'column-fill:'.$fill.';'."\n".'-moz-column-fill:'.$fill.';'."\n".'column-gap:'.$gap.';'."\n".'-webkit-column-gap:'.$gap.';'."\n".'-moz-column-gap:'.$gap.';'."\n".'column-rule:'.$rule.';'."\n".'-webkit-column-rule:'.$rule.';'."\n".'-moz-column-rule:'.$rule.';'."\n".'column-span:'.$span.';'."\n".'-webkit-column-span:'.$span.';'."\n".'column-width:'.$width.';'."\n".'-webkit-column-width:'.$width.';'."\n".'-moz-column-width:'.$width.';'."\n";
}

function min_column($count,$fill,$gap,$rule,$span,$width)
{
	return 'column-count:'.$count.';'.'-webkit-column-count:'.$count.';'.'-moz-column-count:'.$count.';'.'column-fill:'.$fill.';'.'-moz-column-fill:'.$fill.';'.'column-gap:'.$gap.';'.'-webkit-column-gap:'.$gap.';'.'-moz-column-gap:'.$gap.';'.'column-rule:'.$rule.';'.'-webkit-column-rule:'.$rule.';'.'-moz-column-rule:'.$rule.';'.'column-span:'.$span.';'.'-webkit-column-span:'.$span.';'.'column-width:'.$width.';'.'-webkit-column-width:'.$width.';'.'-moz-column-width:'.$width.';';

}


function columns($width,$count)
{
	return 'columns:'.$width.''.$count.';'."\n";
}

function min_columns($width,$count)
{
	return 'columns:'.$width.''.$count.';';
}


/***************************************************************************************
 ***************************************************************************************
 **********content *********************************************************************
 ***************************************************************************************
 ***************************************************************************************/


function content($values)
{
	return 'content:'.$values.';'."\n";
}


function min_content($values)
{
	return 'content:'.$values.';';
}


/******************************************************************************
 ******************************************************************************
 *************counter *********************************************************
 ******************************************************************************
 ******************************************************************************/


function counter($increment,$reset)
{
	return 'counter-increment:'.$increment.';'."\n".'counter-reset:'.$reset.';'."\n";
}


function min_counter($increment,$reset)
{
	return 'counter-increment:'.$increment.';'.'counter-reset:'.$reset.';';
}



/***************************************************************************
 ***************************************************************************
 ********************flex-xxxx**********************************************
 ***************************************************************************
 ***************************************************************************/


function flex($grow,$shrink,$basis)
{
	return 'flex:'.$grow.''.$shrink.''.$basis.';'."\n".'-webkit-flex:'.$grow.''.$shrink.''.$basis.';'."\n".'-ms-flex:'.$grow.''.$shrink.''.$basis.';'."\n";
}


function min_flex($grow,$shrink,$basis)
{
	return 'flex:'.$grow.''.$shrink.''.$basis.';'.'-webkit-flex:'.$grow.''.$shrink.''.$basis.';'.'-ms-flex:'.$grow.''.$shrink.''.$basis.';';
}


function flex_basis($basis)
{
	return 'flex-basis:'.$basis.';'."\n".'-webkit-flex-basis:'.$basis.';'."\n";
}

function min_flex_basis($basis)
{
	return 'flex-basis:'.$basis.';'.'-webkit-flex-basis:'.$basis.';';
}


function custom_flex($direction,$grow,$shrink,$wrap)
{
	return 'flex-flow:'.$direction.''.$wrap.';'."\n".'-webkit-flex-flow:'.$direction.''.$wrap.';'."\n".'flex-grow:'.$grow.';'."\n".'-webkit-flex-grow:'.$grow.';'."\n".'flex-shrink:'.$shrink.';'."\n".'-webkit-flex-shrink:'.$shrink.';'."\n";
}


function min_custom_flex($direction,$grow,$shrink,$wrap)
{
	return 'flex-flow:'.$direction.''.$wrap.';'.'-webkit-flex-flow:'.$direction.''.$wrap.';'.'flex-grow:'.$grow.';'.'-webkit-flex-grow:'.$grow.';'.'flex-shrink:'.$shrink.';'.'-webkit-flex-shrink:'.$shrink.';';
}



/************************************************************************************
 ************************************************************************************
 ******************font**************************************************************
 ************************************************************************************
 ************************************************************************************/


function font($values)
{
	return 'font:'.$values.';'."\n";

}


function min_font($values)
{
	return 'font:'.$values.';';
}


function custom_font($family,$kerning,$size,$stretch,$style,$synthesis,$variant,$weight)
{
	return 'font-family:'.$family.';'."\n".'font-kerning:'.$kerning.';'."\n".'font-size:'.$size.';'."\n".'font-stretch:'.$stretch.';'."\n".'font-style:'.$style.';'."\n".'font-synthesis:'.$synthesis.';'."\n".'font-variant:'.$variant.';'."\n".'font-weight:'.$weight.';'."\n";

}


function min_custom_font($family,$kerning,$size,$stretch,$style,$synthesis,$variant,$weight)
{
	return 'font-family:'.$family.';'.'font-kerning:'.$kerning.';'.'font-size:'.$size.';'.'font-stretch:'.$stretch.';'.'font-style:'.$style.';'.'font-synthesis:'.$synthesis.';'.'font-variant:'.$variant.';'.'font-weight:'.$weight.';';
}


function font_feature($setting)
{
	return 'font-feature-setting:'.$setting.';'."\n".'-webkit-font-feature-setting:'.$setting.';'."\n".'-moz-font-feature-setting:'.$setting.';'."\n";
}


function min_font_feature($setting)
{
	return 'font-feature-setting:'.$setting.';'.'-webkit-font-feature-setting:'.$setting.';'.'-moz-font-feature-setting:'.$setting.';';
}



function font_variant($alternates,$caps,$east_asian,$ligatures,$numeric,$position)
{
	return 'font-variant-alternates:'.$alternates.';'."\n".'font-variant-caps:'.$caps.';'."\n".'font-variant-east-asian:'.$east_asian.';'."\n".'font-variant-ligatures:'.$ligatures.';'."\n".'-webkit-font-variant-ligatures:'.$ligatures.';'."\n".'font-variant-numeric:'.$numeric.';'."\n".'font-variant-position:'.$position.';'."\n";
}


function min_font_variant($alternates,$caps,$east_asian,$ligatures,$numeric,$position)
{
	return 'font-variant-alternates:'.$alternates.';'.'font-variant-caps:'.$caps.';'.'font-variant-east-asian:'.$east_asian.';'.'font-variant-ligatures:'.$ligatures.';'.'-webkit-font-variant-ligatures:'.$ligatures.';'.'font-variant-numeric:'.$numeric.';'.'font-variant-position:'.$position.';';
}



/************************************************************
 ************************************************************
 **********grid-xxxx*****************************************
 ************************************************************
 ************************************************************/


function grid($area,$column,$gap,$row,$template)
{
	return 'grid-area:'.$area.';'."\n".'-ms-grid-area:'.$area.';'."\n".'-webkit-grid-area:'.$area.';'."\n".'grid-column:'.$column.';'."\n".'-ms-grid-column:'.$column.';'."\n".'-webkit-grid-column:'.$column.';'."\n".'grid-gap:'.$gap.';'."\n".'-webkit-grid-gap:'.$gap.';'."\n".'grid-row:'.$row.';'."\n".'-ms-grid-row:'.$row.';'."\n".'-webkit-grid-row:'.$row.';'."\n".'grid-template:'.$template.';'."\n".'-webkit-grid-template:'.$template.';'."\n";
}


function min_grid($area,$column,$gap,$row,$template)
{
	return 'grid-area:'.$area.';'.'-ms-grid-area:'.$area.';'.'-webkit-grid-area:'.$area.';'.'grid-column:'.$column.';'.'-ms-grid-column:'.$column.';'.'-webkit-grid-column:'.$column.';'.'grid-gap:'.$gap.';'.'-webkit-grid-gap:'.$gap.';'.'grid-row:'.$row.';'.'-ms-grid-row:'.$row.';'.'-webkit-grid-row:'.$row.';'.'grid-template:'.$template.';'.'-webkit-grid-template:'.$template.';';
}


function grid_auto($columns,$flow,$rows)
{
	return 'grid-auto-columns:'.$columns.';'."\n".'-ms-grid-auto-columns:'.$columns.';'."\n".'-webkit-grid-auto-columns:'.$columns.';'."\n".'grid-auto-flow:'.$flow.';'."\n".'-webkit-grid-auto-flow:'.$flow.';'."\n".'grid-auto-rows:'.$rows.';'."\n".'-ms-grid-auto-rows:'.$rows.';'."\n".'-webkit-grid-auto-rows:'.$rows.';'."\n";
}


function min_grid_auto($columns,$flow,$rows)
{
	return 'grid-auto-columns:'.$columns.';'.'-ms-grid-auto-columns:'.$columns.';'.'-webkit-grid-auto-columns:'.$columns.';'.'grid-auto-flow:'.$flow.';'.'-webkit-grid-auto-flow:'.$flow.';'.'grid-auto-rows:'.$rows.';'.'-ms-grid-auto-rows:'.$rows.';'.'-webkit-grid-auto-rows:'.$rows.';';
}

function grid_column($start,$gap,$end)
{
	return 'grid-column-start:'.$start.';'."\n".'-ms-grid-column-start:'.$start.';'."\n".'-webkit-grid-column-start:'.$start.';'."\n".'grid-column-gap:'.$gap.';'."\n".'-webkit-grid-column-gap:'.$gap.';'."\n".'grid-column-end:'.$end.';'."\n".'-ms-grid-column-end:'.$end.';'."\n".'-webkit-grid-column-end:'.$end.';'."\n";
}


function min_grid_column($start,$gap,$end)
{
	return 'grid-column-start:'.$start.';'.'-ms-grid-column-start:'.$start.';'.'-webkit-grid-column-start:'.$start.';'.'grid-column-gap:'.$gap.';'.'-webkit-grid-column-gap:'.$gap.';'.'grid-column-end:'.$end.';'.'-ms-grid-column-end:'.$end.';'.'-webkit-grid-column-end:'.$end.';';

}

function grid_row($start,$gap,$end)
{
	return 'grid-row-start:'.$start.';'."\n".'-ms-grid-row-start:'.$start.';'."\n".'-webkit-grid-row-start:'.$start.';'."\n".'grid-row-gap:'.$gap.';'."\n".'-webkit-grid-row-gap:'.$gap.';'."\n".'grid-row-end:'.$end.';'."\n".'-ms-grid-row-end:'.$end.';'."\n".'-webkit-grid-row-end:'.$end.';'."\n";

}

function min_grid_row($start,$gap,$end)
{
	return 'grid-row-start:'.$start.';'.'-ms-grid-row-start:'.$start.';'.'-webkit-grid-row-start:'.$start.';'.'grid-row-gap:'.$gap.';'.'-webkit-grid-row-gap:'.$gap.';'.'grid-row-end:'.$end.';'.'-ms-grid-row-end:'.$end.';'.'-webkit-grid-row-end:'.$end.';';

}


function grid_template($areas,$columns,$rows)
{
	return 'grid-template-areas:'.$areas.';'."\n".'-webkit-grid-template-areas:'.$areas.';'."\n".'grid-template-columns:'.$columns.';'."\n".'-ms-grid-template-columns:'.$columns.';'."\n".'-webkit-grid-template-columns:'.$columns.';'."\n".'grid-template-rows:'.$rows.';'."\n".'-ms-grid-template-rows:'.$rows.';'."\n".'-webkit-grid-template-rows:'.$rows.';'."\n";

}

function min_grid_template($area,$columns,$rows)
{
	return 'grid-template-areas:'.$areas.';'.'-webkit-grid-template-areas:'.$areas.';'.'grid-template-columns:'.$columns.';'.'-ms-template-columns:'.$columns.';'.'-webkit-grid-template-columns:'.$columns.';'.'grid-template-rows:'.$rows.';'.'-ms-grid-template-rows:'.$rows.';'.'-webkit-grid-template-rows:'.$rows.';';

}




/************************************************************
 ************************************************************
 ********************content*********************************
 ************************************************************
 ************************************************************/


function justify_content($values)
{
	return 'justify-content:'.$values.';'."\n".'-webkit-justify-content:'.$values.';'."\n";

}


function min_justify_content($values)
{
	return 'justify-content:'.$values.';'.'-webkit-justify-content:'.$values.';';
}


/***********************************************************
 ***********************************************************
 ****************list-style-xxxx****************************
 ***********************************************************
 ***********************************************************/

function list_style($type,$image,$position)
{
	return 'list-style:'.$type.';'.''.$image.''.$position.';'."\n";
}


function min_list_style($type,$image,$position)
{
	return 'list-style:'.$type.';'.''.$image.''.$position.';';
}


function custom_list_style($type,$image,$position)
{
	return 'list-style-type:'.$type.';'."\n".'-moz-list-style-type:'.$values.';'."\n".'list-style-position:'.$position.';'."\n".'list-style-image:'.$image.';'."\n";

}


function min_custom_list_style($type,$image,$position)
{
	return 'list-style-type:'.$type.';'.'-moz-list-style-type:'.$type.';'.'list-stype-position:'.$position.';'.'list-style-image:'.$image.';';
}



/*****************************************************************
 *****************************************************************
 ************margin-xxxx******************************************
 *****************************************************************
 *****************************************************************/


function margin($values)
{
	return 'margin:'.$values.';'."\n";
}



function min_margin($values)
{
	return 'margin:'.$values.';';
}



function custom_margin($top,$bottom,$left,$right)
{
	return 'margin-top:'.$top.';'."\n".'margin-bottom:'.$bottom.';'."\n".'margin-left:'.$left.';'."\n".'margin-right:'.$right.';'."\n";

}


function min_custom_margin($top,$bottom,$left,$right)
{
	return 'margin-top:'.$top.';'.'margin-bottom:'.$bottom.';'.'margin-left:'.$left.';'.'margin-right:'.$right.';';

}



function margin_block($start,$end)
{
	return 'margin-block-start:'.$start.';'."\n".'margin-block-end:'.$end.';'."\n";
}

function min_margin_block($start,$end)
{
	return 'margin-block-start:'.$start.';'.'margin-block-end:'.$end.';';
}

function margin_inline($start,$end)
{
	return 'margin-inline-start:'.$start.';'."\n".'margin-inline-end:'.$end.';'."\n";

}

function min_margin_inline($start,$end)
{
	return 'margin-inline-start:'.$start.';'.'margin-inline-end:'.$end.';';
}


/**************************************************************
 **************************************************************
 *************mask-xxxx****************************************
 **************************************************************
 **************************************************************/


function mask($values)
{
	return 'mask:'.$values.';'."\n";

}


function min_mask($values)
{
	return 'mask:'.$values.';';
}



function custom_mask($clip,$composite,$image,$mode,$origin,$position,$repeat,$size,$type)
{
	return 'mask-clip:'.$clip.';'."\n".'-webkit-mask-clip:'.$clip.';'."\n".'mask-composite:'.$composite.';'."\n".'mask-image:'.$image.';'."\n".'mask-mode:'.$mode.';'."\n".'mask-origin:'.$origin.';'."\n".'mask-position:'.$position.';'."\n".'mask-repeat:'.$repeat.';'."\n".'mask-size:'.$size.';'."\n".'mask-type:'.$type.';'."\n";

}


function min_custom_mask($clip,$composite,$image,$mode,$origin,$position,$repeat,$size,$type)
{
	return 'mask-clip:'.$clip.';'.'-webkit-mask-clip:'.$clip.';'.'mask-composite:'.$composite.';'.'mask-image:'.$image.';'.'mask-mode:'.$mode.';'.'mask-origin:'.$origin.';'.'mask-position:'.$position.';'.'mask-repeat:'.$repeat.';'.'mask-size:'.$size.';'.'mask-type:'.$type.';';

}

/******************************************************************
 ******************************************************************
 *****************max-xxxx**********min-xxxx***********************
 ******************************************************************
 ******************************************************************/


function max_($height,$width,$zoom,$inline_size,$block_size)
{
	return 'max-height:'.$height.';'."\n".'max-width:'.$width.';'."\n".'max-zoom:'.$zoom.';'."\n".'max-inline-size:'.$inline_size.';'."\n".'max-block-size:'.$block_size.';'."\n";
}


function min_max($height,$width,$zoom,$inline_size,$block_size)
{
	return 'max-height:'.$height.';'.'max-width:'.$width.';'.'max-zoom:'.$zoom.'max-inline-size:'.$inline_size.';'.'max-block-size:'.$block_size.';';
}


function min_($height,$width,$zoom,$inline_size,$block_size)
{
	return 'min-height:'.$height.';'."\n".'min-width:'.$width.';'."\n".'min-zoom:'.$zoom.';'."\n".'min-inline-size:'.$inline_size.';'."\n".'min-block-size:'.$block_size.';'."\n";

}


function min_min($height,$width,$zoom,$inline_size,$block_size)
{
	return 'min-height:'.$height.';'.'min-width:'.$width.';'.'min-zoom:'.$zoom.';'.'min-inline-size:'.$inline_size.';'.'min-block-size:'.$block_size.';';
}



/***********************************************************************
 ***********************************************************************
 ******************mix-blend-mode***************************************
 ***********************************************************************
 ***********************************************************************/



function mix_blend_mode($values)
{
	return 'mix-nlend-mode:'.$values.';'."\n";
}

function min_mix_blend_mode($values)
{
	return 'mix-blend-mode:'.$values.';';
}


/*************************************************************
 *************************************************************
 **************object*****************************************
 *************************************************************
 *************************************************************/


function object_($fit,$position)
{
	return 'object-fit:'.$fit.';'."\n".'-o-object-fit:'.$fit.';'."\n".'object-position:'.$position.';'."\n".'-o-object-position:'.$position.';'."\n";
}


function min_object($fit,$position)
{
	return 'object-fit:'.$fit.';'.'-o-object-fit:'.$fit.';'.'object-position:'.$position.';'.'-o-object-position:'.$position.';';

}



/*************************************************************************
 *************************************************************************
 **********offset-xxxx****************************************************
 *************************************************************************
 *************************************************************************/


function offset_inline($start,$end)
{
	return 'offset-inline-start:'.$start.';'."\n".'offset-inline-end:'.$end.';'."\n";
}


function min_offset_inline($start,$end)
{
	return 'offset-inline-start:'.$start.';'.'offset-inline-end:'.$end.';';
}



function offset_block($start,$end)
{
	return 'offset-block-start:'.$start.';'."\n".'offset-block-end:'.$end.';'."\n";
}




function min_offset_block($start,$end)
{
	return 'offset-block-start:'.$start.';'.'offset-block-end:'.$end.';';
}


/********************************************************** 
 **********************************************************
 ***********opacity****************************************
 **********************************************************
 **********************************************************/



function opacity($values)
{
	return 'opacity:'.$values.';'."\n";
}

function min_opacity($values)
{
	return 'opacity:'.$values.';';
}

/*************************************************** 
 ***************************************************
 *******************order***************************
 ***************************************************
 ***************************************************/

function order($values)
{
	return 'order:'.$values.';'."\n".'-webkit-order:'.$values.';'.'-ms-order:'.$values.';'."\n";
}


function min_order($values)
{
	return 'order:'.$values.';'.'-webkit-order:'.$values.';'.'-ms-order:'.$values.';';
}




/**********************************************************************
 **********************************************************************
 **************outline-xxxx********************************************
 **********************************************************************
 **********************************************************************/



function outline($values)
{
	return 'outline:'.$values.';'."\n";
}

function min_outline($values)
{
	return 'outline:'.$values.';';
}


function custom_outline($width,$color,$style,$offset)
{
	return 'outline-width:'.$width.';'."\n".'outline-color:'.$color.';'."\n".'outline-style:'.$style.';'."\n".'outline-offset:'.$offset.';'."\n";
}


function min_custom_outline($width,$color,$style,$offset)
{
	return 'outline-width:'.$width.';'.'outline-color:'.$color.';'.'outline-style:'.$style.';'.'outline-offset:'.$offset.';';

}



/****************************************************************
 ****************************************************************
 *****************overflow-xxxx**********************************
 ****************************************************************
 ****************************************************************/


function overflow($values)
{
	return 'overflow:'.$values.';'."\n";
}

function min_overflow($values)
{
	return 'overflow:'.$values.';';
}


function custom_overflow($x,$y,$wrap)
{
	return 'overflow-x:'.$x.';'."\n".'overflow-y:'.$y.';'."\n".'overflow-y:-ms-'.$y.';'."\n".'overflow-wrap:'.$wrap.';'."\n";
}

function min_custom_overflow($x,$y,$wrap)
{
	return 'overflow-x:'.$x.';'."\n".'overflow-y:'.$y.';'."\n".'overflow-y:-ms-'.$values.';'."\n".'overflow-wrap:'.$wrap.';'."\n";
}


/******************************************************
 ******************************************************
 **********padding-xxxx********************************
 ******************************************************
 ******************************************************/


function padding($values)
{
	return 'padding:'.$values.';'."\n";
}


function min_padding($values)
{
	return 'padding:'.$values.';';
}



function custom_padding($top,$bottom,$left,$right)
{
	return 'padding-top:'.$top.';'."\n".'padding-bottom:'.$bottom.';'."\n".'padding-left:'.$left.';'."\n".'padding-right:'.$right.';'."\n";
}

function min_custom_padding($top,$bottom,$left,$right)
{
	return 'padding-top:'.$top.';'.'padding-bottom:'.$bottom.';'.'padding-left:'.$left.';'.'padding-right:'.$right.';';
}

function padding_inline($start,$end)
{
	return 'padding-inline-start:'.$start.';'."\n".'padding-inline-end:'.$end.';'."\n";
}



function min_padding_inline($start,$end)
{
	return 'padding-inline-start:'.$start.';'.'padding-inline-end:'.$end.';';
}

function padding_block($start,$end)
{
	return 'padding-block-start:'.$start.';'."\n".'padding-block-end:'.$end.';'."\n";

}

function min_padding_block($start,$end)
{
	return 'padding-block-start:'.$start.';'.'padding-block-end:'.$end.';';
}


/***************************************************************
 ***************************************************************
 ********page-break-xxxx****************************************
 ***************************************************************
 ***************************************************************/


function page_break($time,$values)
{
	return 'page-break-'.$time.':'.$values.';'."\n";
}



function min_page_break($time,$values)
{
	return 'page-break-'.$time.':'.$values.';';
}


/***************************************************************
 ***************************************************************
 ***************text-xxxx***************************************
 ***************************************************************
 ***************************************************************/


function custom_text($align,$decoration,$emphasis,$indent,$orientation,$overflow,$rendering,$shadow,$transform)
{
	return 'text-align:'.$align.';'."\n".'text-decoration:'.$decoration.';'."\n".'text-emphasis:'.$emphasis.';'."\n".'text-indent:'.$indent.';'."\n".'text-orientation:'.$orientation.';'."\n".'text-overflow:'.$overflow.';'."\n".'text-rendering:'.$rendering.';'."\n".'text-shadow:'.$shadow.';'."\n".'text-transform:'.$transform.';'."\n";

}


function min_custom_text($align,$decoration,$emphasis,$indent,$orientation,$overflow,$rendering,$shadow,$transform)
{
	return 'text-align:'.$align.';'.'text-decoration:'.$decoration.';'.'text-emphasis:'.$emphasis.';'.'text-indent:'.$indent.';'.'text-orientation:'.$orientation.';'.'text-overflow:'.$overflow.';'.'text-rendering:'.$rendering.';'.'text-shadow:'.$shadow.';'.'text-transform:'.$transform.';';

}


function text_decoration($color,$line,$style)
{
	return 'text-decoration-color:'.$color.';'."\n".'text-decoration-line:'.$line.';'."\n".'text-decoration-style:'.$style.';'."\n".'-moz-text-decoration-color:'.$color.';'."\n".'-webkit-text-decoration-color:'.$color.';'."\n".'-moz-text-decoration-line:'.$line.';'."\n".'-webkit-text-decoration-line:'.$line.';'."\n".'-moz-text-decoration-style:'.$style.';'."\n".'-webkit-text-decoration-style:'.$style.';'."\n";
}


function min_text_decoration($color,$line,$style)
{
	return 'text-decoration-color:'.$color.';'.'-moz-text-decoration-color:'.$color.';'.'-webkit-text-decoration-color:'.$color.';'.'text-decoration-line:'.$line.';'.'-moz-text-decoration-line:'.$line.';'.'-webkit-text-decoration-line:'.$line.';'.'text-decoration-style:'.$style.';'.'-moz-text-decoration-style:'.$style.';'.'-webkit-decoration-style:'.$style.';';

}


function text_emphasis($color,$position,$style)
{
	return 'text-emphasis-color:'.$color.';'."\n".'-webkit-text-emphasis-color:'.$color.';'."\n".'text-emphasis-position:'.$position.';'."\n".'-webkit-text-emphasis-position:'.$position.';'."\n".'text-emphasis-style:'.$style.';'."\n".'-webkit-text-emphasis-style:'.$style.';'."\n";
}



function min_text_emphasis($color,$position,$style)
{
	return 'text-emphasis-color:'.$color.';'.'-webkit-text-emphasis-color:'.$color.';'.'text-emphasis-position:'.$position.';'.'-webkit-text-emphasis-position:'.$position.';'.'text-emphasis-style:'.$style.';'.'-webkit-text-emphasis-style:'.$style.';';
}


/**********************************************************
 **********************************************************
 ********transform-xxxx************************************
 **********************************************************
 **********************************************************/

function transform($values)
{
	return 'transform:'.$values.';'."\n";
}










?>
