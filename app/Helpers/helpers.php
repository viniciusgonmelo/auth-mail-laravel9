<?php

function get_greeting(): string
{
  date_default_timezone_set('America/Sao_Paulo');
  $hour = date('H');
  if ($hour >= 6 && $hour <= 12) return 'bom dia';
  if ($hour >= 12 && $hour <= 18) return 'boa tarde';
  if (($hour >= 18 && $hour <= 23) || ($hour >= 0 && $hour <= 6)) return 'boa noite';
}
