{*
/**
 * Copyright (c) 2007 Madcap BV (http://www.madcap.nl)
 * All rights reserved.
 *
 * Permission is granted for use, copying, modification, distribution,
 * and distribution of modified versions of this work as long as the
 * above copyright notice is included.
 */
*}
<script src="include/SugarFields/Fields/Address/SugarFieldAddress.js" language="javascript"></script>
{{assign var="key" value=$displayParams.key|upper}}
{{assign var="street" value=$displayParams.key|cat:'_address_street'}}
{{assign var="city" value=$displayParams.key|cat:'_address_city'}}
{{assign var="state" value=$displayParams.key|cat:'_address_state'}}
{{assign var="country" value=$displayParams.key|cat:'_address_country'}}
{{assign var="postalcode" value=$displayParams.key|cat:'_address_postalcode'}}
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td valign="top" width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].label}}%' class="dataLabel" NOWRAP>
{sugar_translate label='LBL_{{$key}}_ADDRESS' module='{{$module}}'}:
{{if $street|lower|in_array:$displayParams.required}}
<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span>
{{/if}}
</td>
<td width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].field}}%' class='tabEditViewDF' >
{{if $displayParams.maxlength}}
<textarea id="{{$street}}" name="{{$street}}" maxlength="{{$displayParams.maxlength}}" rows="{{$displayParams.rows|default:4}}" cols="{{$displayParams.cols|default:60}}" tabindex="{{$tabindex}}">{$fields.{{$street}}.value}</textarea>
{{else}}
<textarea id="{{$street}}" name="{{$street}}" rows="{{$displayParams.rows|default:4}}" cols="{{$displayParams.cols|default:60}}" tabindex="{{$tabindex}}">{$fields.{{$street}}.value}</textarea>
{{/if}}
</td>
</tr>

<tr>
<td width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].label}}%' class="dataLabel" NOWRAP>
{sugar_translate label='LBL_CITY' module='{{$module}}'}:
{{if $city|lower|in_array:$displayParams.required}}
<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span>
{{/if}}
</td>
<td width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].field}}%' class='tabEditViewDF' >
<input type="text" name="{{$city}}" id="{{$city}}" size="{{$displayParams.size|default:30}}" {{if !empty($vardef.len)}}maxlength='{{$vardef.len}}'{{/if}} value='{$fields.{{$city}}.value}' tabindex="{{$tabindex}}">
</td>
</tr>

<tr>
<td width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].label}}%' class="dataLabel" NOWRAP>
{sugar_translate label='LBL_STATE' module='{{$module}}'}:
{{if $state|lower|in_array:$displayParams.required}}
<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span>
{{/if}}
</td>
<td width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].field}}%' class='tabEditViewDF' >
<input type="text" name="{{$state}}" id="{{$state}}" size="{{$displayParams.size|default:30}}" {{if !empty($vardef.len)}}maxlength='{{$vardef.len}}'{{/if}} value='{$fields.{{$state}}.value}' tabindex="{{$tabindex}}">
</td>
</tr>

<tr>
<td width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].label}}%' class="dataLabel" NOWRAP>
{sugar_translate label='LBL_POSTAL_CODE' module='{{$module}}'}:
{{if $postalcode|lower|in_array:$displayParams.required}}
<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span>
{{/if}}
</td>
<td width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].field}}%' class='tabEditViewDF' >
<input type="text" name="{{$postalcode}}" id="{{$postalcode}}" size="{{$displayParams.size|default:30}}" {{if !empty($vardef.len)}}maxlength='{{$vardef.len}}'{{/if}} value='{$fields.{{$postalcode}}.value}' tabindex="{{$tabindex}}">
</td>
</tr>

<tr>
<td width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].label}}%' class="dataLabel" NOWRAP>
{sugar_translate label='LBL_COUNTRY' module='{{$module}}'}:
{{if $country|lower|in_array:$displayParams.required}}
<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span>
{{/if}}
</td>
<td width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].field}}%' class='tabEditViewDF' >
<input type="text" name="{{$country}}" id="{{$country}}" size="{{$displayParams.size|default:30}}" {{if !empty($vardef.len)}}maxlength='{{$vardef.len}}'{{/if}} value='{$fields.{{$country}}.value}' tabindex="{{$tabindex}}">
</td>
</tr>

{{if $displayParams.copy}}
<tr>
<td width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].label}}%' class="dataLabel" NOWRAP>
{sugar_translate label='LBL_COPY_ADDRESS_FROM_LEFT' module=''}:
<input id="{{$displayParams.key}}_checkbox" name="{{$displayParams.key}}_checkbox" type="checkbox" onclick="syncFields('{{$displayParams.copy}}', '{{$displayParams.key}}');"; CHECKED>
</td>
</tr>
{{else}}
<tr>
<td colspan="2">&nbsp;</td>
</tr>
{{/if}}
</table>
<script type="text/javascript" language="javascript">
    var fromKey = '{{$displayParams.copy}}';
    var toKey = '{{$displayParams.key}}';
    var checkbox = toKey + "_checkbox";
    var obj = new TestCheckboxReady(checkbox);
</script>
