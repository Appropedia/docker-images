<?php

//Dummy implementation for the client URL library (curl).
//Avoids delays caused by connection timeouts by disabling all internet connectivity.
//Intended for local/offline server use.

function curl_errno(CurlHandle $handle): int {
  return CURLE_COULDNT_CONNECT;
}

function curl_error(CurlHandle $handle): string {
  return 'Connections to external backend services are disabled';
}

function curl_exec(CurlHandle $handle): string|bool {
  return false;
}

function curl_multi_errno(CurlMultiHandle $multi_handle): int {
  return CURLE_COULDNT_CONNECT;
}

function curl_multi_exec(CurlMultiHandle $multi_handle, int &$still_running = null): int {
  if ($still_running !== null) {
    $still_running = 0;
  }

  return CURLM_OK;
}

function curl_pause(CurlHandle $handle, int $flags): int {
  return CURLE_OK;
}

//Uncomment all code blocks involving this variable in order to dump the URLs of all attempted
//connections.
// $wgBlockedServers = [];

function curl_setopt(CurlHandle $handle, int $option, mixed $value): bool {
  // global $wgBlockedServers;
  // if ($option == CURLOPT_URL) {
  //   $url = preg_replace('/\?.*/', '', $value);
  //   if (!in_array($url, $wgBlockedServers)) {
  //     echo($url . '<br>');
  //     array_push($wgBlockedServers, $url);
  //   }
  // }

  return true;
}

function curl_setopt_array(CurlHandle $handle, array $options): bool {
  // global $wgBlockedServers;
  // if (array_key_exists(CURLOPT_URL, $options)) {
  //   $url = preg_replace('/\?.*/', '', $options[CURLOPT_URL]);
  //   if (!in_array($url, $wgBlockedServers)) {
  //     echo($url . '<br>');
  //     array_push($wgBlockedServers, $url);
  //   }
  // }

  return true;
}

function curl_upkeep(CurlHandle $handle): bool {
  return false;
}

?>
