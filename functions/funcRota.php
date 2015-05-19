<?php
/**
 * @return array
 * Retorna os dados presentes na url
 */
function get_url(){
    $arr = array();
    $uri = $_SERVER['REQUEST_URI'];

    // query
    $x = array_pad( explode( '?', $uri ), 2, false );
    $arr['query'] = ( $x[1] )? $x[1] : '' ;

    // resource
    $x = array_pad( explode( '/', $x[0] ), 2, false );
    $x_last = array_pop( $x );
    if( strpos( $x_last, '.' ) === false ){
        $arr['resource'] = '';
        $x[] = $x_last;
    }
    else{
        $arr['resource'] = $x_last;
    }

    // path
    $arr['path'] = implode( '/', $x );
    if( substr( $arr['path'], -1 ) !== '/' ) $arr['path'] .= '/';

    // domain
    $arr['domain'] = $_SERVER['SERVER_NAME'];

    // scheme
    $server_prt = explode( '/', $_SERVER['SERVER_PROTOCOL'] );
    $arr['scheme'] = strtolower( $server_prt[0] );

    // url
    $arr['url'] = $arr['scheme'].'://'.$arr['domain'].$uri;

    return $arr;
}

$getPage = function () use($rotas){
    $rota = get_url();

    if(array_key_exists($rota['path'], $rotas)){
        require_once('../view/' . $rotas[$rota['path']]);
    }
    else{
        require_once('../view/' . $rotas['404']);
    }

};