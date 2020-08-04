<?php 

    function productos_json( &$boletos, &$remeras = 0 , &$stickers = 0 ){
        $dias = array(0 => 'un_dia', 1 => 'pase_completo', 2 => 'pase_2dias');
        $total_boletos = array_combine($dias, $boletos);
        $json = array();

        foreach($total_boletos as $key =>$boletos):
            if((int) $boletos > 0 ):
                $json[$key] = (int) $boletos;
            endif;
        endforeach;

        $remeras = (int) $remeras;

        if($remeras > 0 ):
            $json['remeras'] = $remeras;
        endif;

        $stickers = (int) $stickers;

        if($stickers > 0 ):
            $json['stickers'] = $stickers;
        endif;
        
        return json_encode($json);
    }

    function eventos_json(&$eventos){
        $eventos_json = array();
        foreach($eventos as $evento):
            $eventos_json['eventos'] []= $evento;
        endforeach;

        return json_encode($eventos_json);
    }