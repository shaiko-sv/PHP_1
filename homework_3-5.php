<?php
	function trans($title)
	{
	$alf = array(
			' ' => '_',
        );
    $title = strtr($title, $alf);
    return $title;
    }

    echo(trans("Шайко Сергей Владимирович. Добрый вечер страна! Тесть..."));