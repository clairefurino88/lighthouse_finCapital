<?php
/*
#$APIKEY = "LWy2WqKNR4xK14sRXG05ATZOlyuSiqiz";
$ENDPOINT = "https://api.harmonic.ai/graphql";
$COMPANY_QUERY = <<<'JSON'
query Query($getCompaniesByIdsIds: [Int!]!) {
  getCompaniesByIds(ids: $getCompaniesByIdsIds) {
    name
    headcount
    logoUrl
    tags {
      displayValue
    }
    funding {
      lastFundingAt
      lastFundingType
      lastFundingTotal
      investors {
        ... on Company {
          name
        }
      }
    }
    tractionMetrics {
      headcount {
        metrics {
          timestamp
          metricValue
        }
      }
    }
  }
}
JSON;
*/
#define("APIKEY,"LWy2WqKNR4xK14sRXG05ATZOlyuSiqiz");
define("ENDPOINT", "https://api.harmonic.ai/graphql");
define("COMPANY_QUERY", <<<'JSON'
query Query($getCompaniesByIdsIds: [Int!]!) {
  getCompaniesByIds(ids: $getCompaniesByIdsIds) {
    id
    name
    headcount
    logoUrl
    tags {
      displayValue
    }
    funding {
      lastFundingAt
      lastFundingType
      lastFundingTotal
      investors {
        ... on Company {
          name
        }
      }
    }
    tractionMetrics {
      headcount {
        metrics {
          timestamp
          metricValue
        }
      }
    }
  }
}
JSON);

function graphql_query(string $endpoint, string $query, array $variables = [], ?string $token = null): ?array
  {
      $headers = array(
          'User-Agent: PHP Script', 
          'Content-Type: application/json;charset=utf-8', 
          sprintf('apikey: %s',$token)
        );
      $options = array(
          'http' => array(
            'header'  => $headers,
            'method'  => 'POST',
            'content' => json_encode(['query' => $query, 'variables' => $variables])
          )
        );
      $result = file_get_contents($endpoint, false, stream_context_create($options));
      if ($result === false) {
          $error = error_get_last();
          #throw new \ErrorException($error['message'], $error['type']);
          echo "false";
      }
  
      return json_decode($result, true);
///
      if ($result) =file_get_contents($endpoint, false, stream_context_create($options));
      if ($result === false) {
          $error = error_get_last();
          #throw new \ErrorException($error['message'], $error['type']);
          echo "false";
      }
      file_get_contents($endpoint, false, stream_context_create($options));
      if ($result === false) {
          $error = error_get_last();
          #throw new \ErrorException($error['message'], $error['type']);
          echo "false";
      }
      jvnbjkkjbuhbuyjnbhbjmjyunr;kj
      mnkjfjkjmnfn .nkjnj/mniyhoiu
      n ,j  hb  UnhandledMatchErrorn;kjn
       bchfnjvbdhfjurhg\chdnfhjvmnd
       cnhfbvjdncbh
       vbgvfg
}
nvhjbdbjnvhkf\njbhvdhjmmnknk
nhvbnf
file_get_contents($endpoint, false, stream_context_create($options));
      if ($result === false) {
          $error = error_get_last();
          #throw new \ErrorException($error['message'], $error['type']);
          echo "false";
      }
      if ($results == truegyujjbnnfuhcbbbjhbjhvbvu      )
