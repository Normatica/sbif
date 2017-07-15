<?php
if (! function_exists('sbif_dollar'))
{
    function sbif_dollar($date = null)
    {
    	return Sbif::getDollar($date);
    }
}

if (! function_exists('sbif_euro'))
{
    function sbif_euro($date = null)
    {
    	return Sbif::getEuro($date);
    }
}

if (! function_exists('sbif_utm'))
{
    function sbif_utm($date = null)
    {
    	return Sbif::getUTM($date);
    }
}

if (! function_exists('sbif_uf'))
{
    function sbif_uf($date = null)
    {
    	return Sbif::getUF($date);
    }
}

if (! function_exists('sbif_ipc'))
{
    function sbif_ipc($date = null)
    {
    	return Sbif::getIPC($date);
    }
}
