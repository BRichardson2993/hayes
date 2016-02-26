<footer role="contentinfo">
	<p>&copy;
		<?php 
		$startYear = 2013;
		$thisYear = date('Y');
		if ($startYear == $thisYear) {
			echo $startYear;
		} else {
			echo "{$startYear}&ndash;{$thisYear}";
		}
	?>
			Hayes Lawn &amp; Landscape, LLC | Oklahoma City, OK | &lpar;405&rpar; 313-4929</p>
</footer>
