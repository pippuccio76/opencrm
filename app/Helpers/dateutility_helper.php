<?php


//-----------------------------------------------------------------------------------
// These are two custom date format conversion helper functions
// with long ugly names. You might choose other convenient names.

if (!function_exists('date_local_format_from_iso')) {

    function date_local_format_from_iso($date = null) {

        if ($date === NULL || is_string($date) && $date === '') {
            return NULL;
        }

        if (($date_time_obj = date_create($date)) !== FALSE) {
            return $date_time_obj->format('d-m-Y');
        }

        return NULL;
    }
}



if (!function_exists('date_local_format_from_iso_anno_due_cifre')) {

    function date_local_format_from_iso_anno_due_cifre($date = null) {

        if ($date === NULL || is_string($date) && $date === '') {
            return NULL;
        }

        if (($date_time_obj = date_create($date)) !== FALSE) {
            return $date_time_obj->format('d-m-y');
        }

        return NULL;
    }
}

if (!function_exists('date_local_format_from_iso_completa')) {

    function date_local_format_from_iso_completa($date = null) {

        if ($date === NULL || is_string($date) && $date === '') {
            return NULL;
        }

        if (($date_time_obj = date_create($date)) !== FALSE) {
            return $date_time_obj->format('d-m-Y H:i:s');
        }

        return NULL;
    }
}

if (!function_exists('date_local_format_to_iso')) {

    function date_local_format_to_iso($date = null) {

        $date = (string) $date;

        if ($date == '') {
            return NULL;
        }

        $date = substr($date, 0, 10);

        if (($date_time_obj = date_create_from_format('d-m-Y', $date)) !== FALSE) {
            return $date_time_obj->format('Y-m-d');
        
        }elseif(($date_time_obj = date_create_from_format('d/m/Y', $date)) !== FALSE) {
            return $date_time_obj->format('Y-m-d');
        }

        return NULL;
    }
}




//---------------------------------------------------------------------------------
//Controllo data esistente uk 

if (!function_exists('date_valid_eu')) {


  function date_valid_uk($date){
      
      $day = (int) substr($date, 8, 2);
      $month = (int) substr($date, 5, 2);
      $year = (int) substr($date, 0, 4);
      
      if(checkdate($month, $day, $year)){
        return TRUE;
      }else{
        
        //$this->form_validation->set_message('date_valid', 'Devi inserire una data inizio valida ');

        return FALSE;
      }
  }
}



//---------------------------------------------------------------------------------
//Controllo data esistente eu 

if (!function_exists('date_valid_eu')) {


  function date_valid_eu($date){
      
      $day = (int) substr($date, 0, 2);
      $month = (int) substr($date, 3, 2);
      $year = (int) substr($date, 6, 4);
      
      if(checkdate($month, $day, $year)){
        return TRUE;
      }else{
        
        //$this->form_validation->set_message('date_valid', 'Devi inserire una data inizio valida ');

        return FALSE;
      }
  }
}


//---------------------------------------------------------------------------------
//Controllo data esistente eu 



function eta($data_uk){
  if($data_uk){
    $data_esplosa=explode("-", $data_uk);
    //anno
    $a=$data_esplosa[0];
    //mese
    $m=$data_esplosa[1];
    //giorno
    $g=$data_esplosa[2];
    //creo una variabile per il calcolo
    $year_diff = '';

    $time = mktime(0,0,0,(int)$m,(int)$g,$a);
    if (FALSE === $time) return 'err';
    $date = date('d-m-Y', $time);
    list ($day,$month,$year) = explode("-",$date);
    $year_diff = (date("Y") - $year);
    $month_diff = (date("m") - $month);
    $day_diff = (date("d") - $day);
    if ($month_diff < 0 || ($month_diff <= 0 && $day_diff < 0) ) $year_diff--;
    return $year_diff . ' anni';
  } else{
    return '';
  }

}

//---------------------------------------------------------------------------------
//Calcolo tempo da data esistente

function anni_mesi_da_evento($data_uk){
  if($data_uk){

      $data_esplosa=explode("-", $data_uk);
      //anno
      $a=$data_esplosa[0];
      //mese
      $m=$data_esplosa[1];
      //giorno
      $g=$data_esplosa[2];
      //creo una variabile per il calcolo
      // configure the base date here 
      $base_day  = $g;  // no leading "0" 
      $base_mon  = $m;  // no leading "0" 
      $base_yr  = $a;  // use 4 digit years! 
      // get the current date (today) -- change this if you need a fixed date 
      $current_day  = date ("j"); 
      $current_mon  = date ("n"); 
      $current_yr  = date ("Y"); 
      // and now .... calculate the difference! :-) 
      // overflow is always caused by max days of $base_mon 
      // so we need to know how many days $base_mon had 
      $base_mon_max  = date ("t",mktime (0,0,0,$base_mon,$base_day,$base_yr)); 
      // days left till the end of that month 
      $base_day_diff   = $base_mon_max - $base_day; 
      // month left till end of that year 
      // substract one to handle overflow correctly 
      $base_mon_diff   = 12 - $base_mon - 1; 
      // start on jan 1st of the next year 
      $start_day  = 1; 
      $start_mon  = 1; 
      $start_yr  = $base_yr + 1; 
      // difference to that 1st of jan 
      $day_diff = ($current_day - $start_day) + 1;  // add today 
      $mon_diff = ($current_mon - $start_mon) + 1; // add current month 
      $yr_diff = ($current_yr - $start_yr); 
      // and add the rest of $base_yr 
      $day_diff = $day_diff + $base_day_diff; 
      $mon_diff = $mon_diff + $base_mon_diff; 
      // handle overflow of days 
      if ($day_diff >= $base_mon_max) 
      { 
       $day_diff = $day_diff - $base_mon_max; 
       $mon_diff = $mon_diff + 1; 
      } 
      // handle overflow of years 
      if ($mon_diff >= 12) 
      { 
       $mon_diff = $mon_diff - 12; 
       $yr_diff = $yr_diff + 1; 
      } 
      // the results are here: 
       //$yr_diff   --> the years between the two dates 
      // $mon_diff  --> the month between the two dates 
      // $day_diff  --> the days between the two dates 
      // **************************************************************************** 
      // simple output of the results  

      $years = "anni"; 
      $days = "giorni"; 
      if ($yr_diff == "1") $years = "anno"; 
      if ($day_diff == "1") $days = "giorno"; 
      // here we go 
      echo  '('.$yr_diff." ".$years.", "; 
      echo  $mon_diff." mesi e "; 
      echo  $day_diff." ".$days.')'; 
  } else{
    return '';
  }

}

  /*
  *
  * $data_finale: ovvero la data termine del conteggio. Il campo deve essere formattato come: “aaaa-mm-gg hh:mm:ss” (ovvero il   * timestamp) oppure come “aaaa-mm-gg” (ovvero il formato date).
  *
  * $unita: accetta una variabile (minuscola) composta da un carattere:
  * m: se la funzione deve riportare i minuti trascorsi tra le due date;
  * h: se la funzione deve riportare le ore trascorse tra le due date;
  * g: se la funzione deve riportare i giorni trascorsi tra le due date;
  * a: se la funzione deve riportare gli anni trascorsi tra le due date.
  *
  */

  
  function delta_tempo($data_iniziale,$data_finale,$unita) {
   
   $data1 = strtotime($data_iniziale);
   $data2 = strtotime($data_finale);
   
    switch($unita) {
           case "m": $unita = 1/60; break;       //MINUTI
           case "h": $unita = 1; break;          //ORE
           case "g": $unita = 24; break;         //GIORNI
           case "a": $unita = 8760; break;         //ANNI
    }
 
    $differenza = (($data2-$data1)/3600)/$unita;
    return $differenza;
  }


/*
*
*
* Funzione che passandogli una data e quanto sommare :
*   
*  '-5 day' oppure '+1 month' oppure '+2 year'
*  
* restituisce la nuova data con operazione effettuata
*
*/

function operazione_date($data_da_elaborare,$periodo_da_sommare_o_togliere)
{

  //ESEGUO L'OPERAZIONE 
  $newdate = strtotime ( $periodo_da_sommare_o_togliere , strtotime ( $data_da_elaborare ) ) ; 

  //RESTITUISCO LA DATA IN FORMATO ISO
  $newdate = date ( 'Y-m-d' , $newdate );


  return $newdate ;
  
}

/*
*
* Funziona per la differenza tra due ore
*
*/

function differenza($ora1, $ora2, $sep){
    $part = explode($sep, $ora1);
    $arr = explode($sep, $ora2);
    $diff= mktime($arr[0], $arr[1]) - mktime($part[0], $part[1]);
    $ore=floor($diff / (60*60)); 
    $minuti=($diff / 60) % 60;
    $ore = str_pad($ore,2,0,STR_PAD_LEFT);
    $minuti = str_pad($minuti,2,0,STR_PAD_LEFT);
    $risultato = $ore.":".$minuti;
    return $risultato;
}

/*
*
* Funziona per la somma tra due ore
*
*/


function somma($ora1,$ora2, $sep){
    $ora1 = explode($sep,$ora1);
    $ora2 = explode($sep,$ora2);
    $ore     = $ora1[0] + $ora2[0];
    $minuti  = $ora1[1] + $ora2[1];
    if ($minuti  > 59){
        $minuti  = $minuti - 60;
        $ore +=1;
    }
    $ore     = str_pad($ore,2,0,STR_PAD_LEFT);
    $minuti  = str_pad($minuti,2,0,STR_PAD_LEFT);
    $risultato = $ore.":".$minuti;
    return $risultato;
}


/**
 * 
 * 
 *  FUNZIONE PER TRASFORMARE LE ORE IN GIORNI 
 * 
 * 
 **/

    function trasforma_ore_in_giorni($ore)
    {

        switch ($ore) {
          case 48:
            $ore_to_return = '2 Giorni';
            break;
          case 72:
            $ore_to_return = '3 Giorni';
            break;
          case 96:
            $ore_to_return = '4 Giorni';
            break;
          case 120:
            $ore_to_return = '5 Giorni';
            break;
          case 144:
            $ore_to_return = '6 Giorni';
            break;
          case 168:
            $ore_to_return = '7 Giorni';
            break;
          default:
            $ore_to_return = $ore;
        }

        return $ore_to_return;
    }

    



