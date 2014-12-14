<?php
function args()
{
  function rmdash($str)
  {
    if($str[0] == "-" && $str[1] != "-")
    {
      return substr($str,1);
    }
    elseif($str[0] == "-" && $str[1] == "-")
    {
      return substr($str,2);
    }
    else
    {
      return $str;
    }
  }
  $argc = $GLOBALS['argc'];
  $argv = $GLOBALS['argv'];
  $arga = Array();
  $i = 1;
  unset($argv[0]);
  if($argc > 1)
  {
    for(; $i < $argc; $i++)
    {
      $arg = $argv[$i];
      $nextarg = @$argv[$i+1];
      $try1 = explode("=",$arg);
      if(sizeof($try1) > 1)
      {
        $key = rmdash($try1[0]);
        unset($try1[0]);
        $arga[$key] = implode("=",$try1);
      }
      elseif($arg[0] == "-")
      {
        $arga[rmdash($arg)] = $nextarg;
        $i++;
      }
      else
      {
        $arga[] = $arg;
      }
    }
  }
  return $arga;
}
?>
