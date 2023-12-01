<?php 

define("CACHE_PATH", __DIR__ . "/cached_data.json");
require_once 'graphql_query.php';
require_once 'MySQL_helper.php';

function get_cached_data(string $path): array
  {
    $cached_companies = file_get_contents($path);
    $cache_data = json_decode($cached_companies, true);
    return $cache_data;
  }

function get_cached_data_json(string $path): string
  {
    return file_get_contents($path);;
  }

function write_cached_data(array $data_array,string $path):void
  {
    $json_cache = json_encode($data_array, JSON_PRETTY_PRINT);
    $fp = fopen($path, 'w');
    fwrite($fp, $json_cache);
    fclose($fp);
  }


  function update_cache(string $endpoint, string $query, array $variables = [], ?string $apikey = null): void
  {
    $getCompaniesByIdsIds = get_company_list();
    $company_json = graphql_query($endpoint, $company_query, ['getCompaniesByIdsIds'=>$getCompaniesByIdsIds], $apikey);
    $company_string = json_decode($company_json);
    write_cached_data($company_json,$CACHE_PATH);
  }

  function get_cache_age(string $path):int
  {
    $time_last_modified = filemtime($path);
    $age = time() - $time_last_modified;
    return $age;
  }

  function update_cache_if_old(string $path):void
  {
    $DAY_IN_SECONDS = 86400;
    if(get_cache_age($path)>$DAY_IN_SECONDS*3){
        update_cache(ENDPOINT,COMPANY_QUERY,[],APIKEY);
    }
  }

  function update_test(string $path):void
  {
    $MINUTE = 60;
    if(get_cache_age($path)>$MINUTE*3){
        $f = get_cached_data($path);
        write_cached_data($f,CACHE_PATH);
    }
  }
