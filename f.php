<?php
	function fibo ( $n )
	{
		$now = 0;
		$next = 1;
		for ( $i = 0; $i < $n; $i ++ )
		{
			$sum = $now + $next;
			$now = $next;
			$next = $sum;
			echo $now; echo " ";
		}
	}

	fibo ( 20 );