<?php
  function get_company_list():array
  {
    return array(1,4,7);
  }

  function remove_company_from_list(array &$company_list,int $company_to_remove): void
{
    if (($key = array_search($company_to_remove, $company_list)) !== false) {
        unset($company_list[$key]);
    }
    
  }
  function add_company_to_list(array &$company_list,int $company_to_add): void
  {
      if(!in_array($company_to_add,$company_list)){
          $company_list[]=$company_to_add;
      }
  }

  function add_button(array &$company_list,int $company_to_add):void
  {
    add_company_to_list($company_list,$company_to_add);
    update_cache(ENDPOINT,COMPANY_QUERY,[],APIKEY);
  }

  function remove_button(array &$company_list,int $company_to_add):void
  {
    add_company_to_list($company_list,$company_to_add);
    update_cache(ENDPOINT,COMPANY_QUERY,[],APIKEY);
  }
