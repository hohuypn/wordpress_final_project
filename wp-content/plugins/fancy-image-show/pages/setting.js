/**
 *     Fancy Image Show
 *     Copyright (C) 2011 - 2019 www.gopiplus.com
 * 
 *     This program is free software: you can redistribute it and/or modify
 *     it under the terms of the GNU General Public License as published by
 *     the Free Software Foundation, either version 3 of the License, or
 *     (at your option) any later version.
 * 
 *     This program is distributed in the hope that it will be useful,
 *     but WITHOUT ANY WARRANTY; without even the implied warranty of
 *     MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *     GNU General Public License for more details.
 * 
 *     You should have received a copy of the GNU General Public License
 *     along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */	

function FancyImg_submit()
{
	if(document.FancyImg_form.FancyImg_Gallery.value=="")
	{
		alert(fancy_adminscripts.FancyImg_Gallery);
		document.FancyImg_form.FancyImg_Gallery.focus();
		return false;
	}
	else if(document.FancyImg_form.FancyImg_Width.value=="" || isNaN(document.FancyImg_form.FancyImg_Width.value))
	{
		alert(fancy_adminscripts.FancyImg_Width);
		document.FancyImg_form.FancyImg_Width.focus();
		document.FancyImg_form.FancyImg_Width.select();
		return false;
	}
	else if(document.FancyImg_form.FancyImg_Height.value=="" || isNaN(document.FancyImg_form.FancyImg_Height.value))
	{
		alert(fancy_adminscripts.FancyImg_Height);
		document.FancyImg_form.FancyImg_Height.focus();
		document.FancyImg_form.FancyImg_Height.select();
		return false;
	}
	else if(document.FancyImg_form.FancyImg_delay.value=="" || isNaN(document.FancyImg_form.FancyImg_delay.value))
	{
		alert(fancy_adminscripts.FancyImg_delay);
		document.FancyImg_form.FancyImg_delay.focus();
		document.FancyImg_form.FancyImg_delay.select();
		return false;
	}
	else if(document.FancyImg_form.FancyImg_StripDelay.value=="" || isNaN(document.FancyImg_form.FancyImg_StripDelay.value))
	{
		alert(fancy_adminscripts.FancyImg_StripDelay);
		document.FancyImg_form.FancyImg_StripDelay.focus();
		document.FancyImg_form.FancyImg_StripDelay.select();
		return false;
	}
	else if(document.FancyImg_form.FancyImg_Strips.value=="" || isNaN(document.FancyImg_form.FancyImg_Strips.value))
	{
		alert(fancy_adminscripts.FancyImg_Strips);
		document.FancyImg_form.FancyImg_Strips.focus();
		document.FancyImg_form.FancyImg_Strips.select();
		return false;
	}
	else if(document.FancyImg_form.FancyImg_Extra1.value=="")
	{
		alert(fancy_adminscripts.FancyImg_Extra1);
		document.FancyImg_form.FancyImg_Extra1.focus();
		return false;
	}
}

function FancyImg_delete(id)
{
	if(confirm(fancy_adminscripts.FancyImg_delete))
	{
		document.frm_FancyImg_display.action="options-general.php?page=fancy-image-show&ac=del&did="+id;
		document.frm_FancyImg_display.submit();
	}
}	

function FancyImg_redirect()
{
	window.location = "options-general.php?page=fancy-image-show";
}

function FancyImg_help()
{
	window.open("http://www.gopiplus.com/work/2011/11/06/fancy-image-show-wordpress-plugin/");
}