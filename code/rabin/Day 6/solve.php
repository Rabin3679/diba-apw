<?php

include 'file-handle.php';

function puzzle11($input_file)
{
	$data = read_file($input_file);
	$input = str_split ($data);
	for ( $PacketMarkerPos = 4; $PacketMarkerPos < count ( $input ); $PacketMarkerPos++ )
	{
		if ( checkForMarker ( array_slice ( $input, $PacketMarkerPos - 4, 4 ) ) )
		{
			return $PacketMarkerPos;
			break;
		}
	}
}
	
function puzzle12($input_file)
{
	$data = read_file($input_file);
	$input = str_split ($data);
	for ( $MessageMarkerPos = 14; $MessageMarkerPos < count ( $input ); $MessageMarkerPos++ )
	{
		if ( checkForMarker ( array_slice ( $input, $MessageMarkerPos - 14, 14 ) ) )
		{
			return $MessageMarkerPos;
			break;
		}
	}
}

function checkForMarker ( $CharMarker )
{
    $unique = array_unique ( $CharMarker );

    return count ( $unique ) == count ( $CharMarker );
}

echo 'Day #6, part one: ' . puzzle11('input.txt') . PHP_EOL;
echo 'Day #6, part two: ' . puzzle12('input.txt') . PHP_EOL;
