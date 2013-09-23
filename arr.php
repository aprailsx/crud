<?
include 'link.php';
//$max = 0;
function MaximumArray($arr)
{
	global $max;
	for($x = 0; $x < count($arr); $x++)
	{
		if ($arr[$x] > $max)
			{
				$max = $arr[$x];
			}
	}
	return $max;
}
$arrayName = array("-71", "-14");
echo MaximumArray($arrayName);
?>