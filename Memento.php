<?php

if ( isset($ConsoleDeCommandes['ConsoleDeCommandes']) && !empty($ConsoleDeCommandes['ConsoleDeCommandes']) )
{
  header("Location: ".$ConsoleDeCommandes['file:///home/loic/Documents/website/Memento/index.html']."");
}
elseif ( isset($CommandesPHP['CommandesPHP']) && !empty($CommandesPHP['CommandesPHP']) )
{
  header("Location: ".$CommandesPHP['file:///home/loic/Documents/website/Memento/index2.html']."");
}
elseif ( isset($CommandesDeGit['CommandesDeGit']) && !empty($CommandesDeGit['CommandesDeGit']) )
{
  header("Location: ".$CommandesDeGit['file:///home/loic/Documents/website/Memento/index3.html']."");
}
elseif ( isset($CommandesHTML['CommandesHTML']) && !empty($CommandesHTML['CommandesHTML']) )
{
  header("Location: ".$CommandesHTML['file:///home/loic/Documents/website/Memento/index4.html']."");
}
elseif ( isset($CréationVHost['Création VHost']) && !empty($CréationVHost['CréationVHost']) )
{
  header("Location: ".$CréationVHost['file:///home/loic/Documents/website/Memento/index5.html']."");
}
?>
