<?php  return '$input = $modx->fromJSON($input);
$output = \'\';

foreach($input as $row)
{
    $sections[] = $modx->getChunk(\'app_featureTracking\', $row);
}

$output .= implode("\\n", $sections);

return $output;
return;
';