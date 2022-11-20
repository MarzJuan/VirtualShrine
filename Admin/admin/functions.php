<?php

define('VIEW','343177169');
define('SERVICE_ACCOUNT','analytics/virtualshrine-7e8a47d0f687.json');
define('DOMAIN','https://virtualshrine.online');


function getActiveVisits($analytics){
  $optParams = array(
    'dimensions' => 'rt:pageTitle,rt:pagePath',
    'sort' => '-rt:activeVisitors',
    'max-results' => '16'
  );
  $result = $analytics
        ->data_realtime
        ->get('ga:'.VIEW, 'rt:activeVisitors',$optParams);

  $div = '';
  if($result){
    $rows = $result->getRows();
    if($rows){
      foreach($rows as $row){
        $div .= '<tr class="open-link" data-link="'.$row[1].'">';
        $div .= '<td>'.htmlspecialchars($row[0],ENT_NOQUOTES).'</td>';
        $div .= '<td>'.htmlspecialchars($row[2],ENT_NOQUOTES).'</td>';
        $div .= '</tr>';
      }
    }else{
      $div .= '<tr><td colspan="2"><small>There is no data to view</small></td></tr>';
    }
    return $div;
  }else{
    return '<tr><td colspan="2"><small>There is no data to view</small></td></tr>';
  }
}

function getActiveVisitors($analytics){
  $active_users = $analytics
          ->data_realtime
          ->get('ga:'.VIEW, 'rt:activeVisitors');
  $active_users = (isset($active_users->rows[0][0]))?$active_users->rows[0][0]:0;
  return $active_users;
}

function getDevices($analytics){
  $optParams = array(
    'dimensions' => 'rt:deviceCategory',
    'sort' => '-rt:activeVisitors'
  );

  $devices = $analytics
        ->data_realtime
        ->get('ga:'.VIEW, 'rt:activeVisitors',$optParams);
  $html = '';
  if($devices->rows){
    $total = 0;
    $class = array('warning','success','danger');
    foreach($devices->rows as $row){
      $total += $row[1];
    }
    $loop = 0;
    $html .= '<div class="progress_label">';
    foreach($devices->rows as $row){
      $percent = round(($row[1]/$total)*100);
      $html .= '<div class="label label-'.$class[$loop].'">';
      $html .= '<span>'.$row[0].'</span>';
      $html .= '<span>'.$row[1].'</span>';
      $html .= '</div>';
      $loop++;
    }
    $html .= '</div>';
    $loop = 0;
    $html .= '<div class="progress" style="width:100%!important">';
    foreach($devices->rows as $row){
      $html .= '<div class="progress-bar progress-bar-'.$class[$loop].'" style="width:'.$percent.'%"></div>';
      $loop++;
    }
    $html .= '</div>';
  }
  return $html;
}


function getFormattedData($result){
  $div = '';
  if($result){
    $rows = $result->getRows();
    if($rows){
      foreach($rows as $row){
        $div .= '<tr>';
        foreach($row as $cell){
          $div .= '<td>'.htmlspecialchars($cell,ENT_NOQUOTES).'</td>';
        }
        $div .= '</tr>';
      }
    }else{
      $div .= '<tr><td colspan="2"><small>There is no data to view</small></td></tr>';
    }
    return $div;
  }else{
    return '<tr><td colspan="2"><small>There is no data to view</small></td></tr>';
  }
}

function getTrafficSources($analytics){
  $optParams = array(
    'dimensions' => 'rt:source',
    'sort' => '-rt:activeVisitors',
    'max-results' => 5
  );

  $result = $analytics
        ->data_realtime
        ->get('ga:'.VIEW,'rt:activeVisitors',$optParams);
  return getFormattedData($result);
}

function getCountries($analytics){
  $optParams = array(
    'dimensions' => 'ga:country',
    'sort' => '-rt:activeVisitors',
    'max-results' => 10
  );

  $result = $analytics
        ->data_realtime
        ->get('ga:'.VIEW,'rt:activeVisitors',$optParams);
  return getFormattedData($result,'Country','Users');
}


function getOS($analytics){
  $optParams = array(
    'dimensions' => 'ga:operatingSystem',
    'sort' => '-rt:activeVisitors',
    'max-results' => 10
  );

  $result = $analytics
        ->data_realtime
        ->get('ga:'.VIEW,'rt:activeVisitors',$optParams);
  return getFormattedData($result,'OS','Users');
}


function getBrowser($analytics){
  $optParams = array(
    'dimensions' => 'ga:browser',
    'sort' => '-rt:activeVisitors',
    'max-results' => 10
  );

  $result = $analytics
        ->data_realtime
        ->get('ga:'.VIEW,'rt:activeVisitors',$optParams);
  return getFormattedData($result,'Browser','Users');
}