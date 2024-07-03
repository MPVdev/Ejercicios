<?php

function conjuntos( $conjunto1, $conjunto2, $universo ) {
  $conjunto1 = preg_replace( "/\s+/", "", $conjunto1 );
  $conjunto2 = preg_replace( "/\s+/", "", $conjunto2 );
  $universo = preg_replace( "/\s+/", "", $universo );
  $conjunto1 = rtrim( $conjunto1, "," );
  $conjunto2 = rtrim( $conjunto2, "," );
  $universo = rtrim( $universo, "," );
  $conjunto1 = explode( ",", $conjunto1 );
  $conjunto2 = explode( ",", $conjunto2 );
  $universo = explode( ",", $universo );
  $universo = array_unique( $universo );

  //Union
  $union = "{";
  $union_array = [];
  for ( $i = 0; $i < count( $conjunto1 ); $i++ ) {
    if ( !in_array( $elemento, $union_array ) ) {
      $union_array[] = $conjunto1[ $i ];
    }
  }
  for ( $j = 0; $j < count( $conjunto2 ); $j++ ) {
    $elemento = $conjunto2[ $j ];
    if ( !in_array( $elemento, $union_array ) ) {
      $union_array[] = $conjunto2[ $j ];
    }
  }

  for ( $i = 0; $i < count( $union_array ); $i++ ) {
    $union .= $union_array[ $i ];
    if ( $i < ( count( $union_array ) - 1 ) ) {
      $union .= ",";
    }
  }
  $union .= "}";

  //Interseccion
  $interseccion = "{";
  for ( $i = 0; $i < count( $conjunto1 ); $i++ ) {
    for ( $j = 0; $j < count( $conjunto2 ); $j++ ) {
      if ( $conjunto1[ $i ] == $conjunto2[ $j ] ) {
        $interseccion .= $conjunto1[ $i ] . ",";
      }
    }
  }
  $interseccion = rtrim( $interseccion, "," );
  $interseccion .= "}";

  //Diferencia
  $diferencia = "{";
  for ( $i = 0; $i < count( $conjunto1 ); $i++ ) {
    $encontrado = false;
    for ( $j = 0; $j < count( $conjunto2 ); $j++ ) {
      if ( $conjunto1[ $j ] == $conjunto2[ $j ] ) {
        $encontrado = true;
        break;
      }
    }
    if ( !$encontrado ) {
      $diferencia .= $conjunto1[ $i ] . ",";
    }
  }
  $diferencia = rtrim( $diferencia, "," );
  $diferencia .= "}";

  //Diferencia Asimetrica
  $diferenciaSimetrica = "{";
  for ( $i = 0; $i < count( $conjunto1 ); $i++ ) {
    $encontrado = false;
    for ( $j = 0; $j < count( $conjunto2 ); $j++ ) {
      if ( $conjunto1[ $i ] == $conjunto2[ $j ] ) {
        $encontrado = true;
        break;
      }
    }
    if ( !$encontrado ) {
      $diferenciaSimetrica .= $conjunto1[ $i ] . ",";
    }
  }

  for ( $i = 0; $i < count( $conjunto2 ); $i++ ) {
    $encontrado = false;
    for ( $j = 0; $j < count( $conjunto1 ); $j++ ) {
      if ( $conjunto2[ $i ] == $conjunto1[ $j ] ) {
        $encontrado = true;
        break;
      }
    }
    if ( !$encontrado ) {
      $diferenciaSimetrica .= $conjunto2[ $i ] . ",";
    }
  }
  $diferenciaSimetrica = rtrim( $diferenciaSimetrica, "," );
  $diferenciaSimetrica .= "}";

  //Complemento 1
  $complemento1 = "{";
  for ( $i = 0; $i < count( $universo ); $i++ ) {
    if ( !in_array( $universo[ $i ], $conjunto1 ) ) {
      $complemento1 .= $universo[ $i ] . ",";
    }
  }
  $complemento1 = rtrim( $complemento1, "," );
  $complemento1 .= "}";

  //Complemento 2
  $complemento2 = "{";
  for ( $i = 0; $i < count( $universo ); $i++ ) {
    if ( !in_array( $universo[ $i ], $conjunto2 ) ) {
      $complemento2 .= $universo[ $i ] . ",";
    }
  }
  $complemento2 = rtrim( $complemento2, "," );
  $complemento2 .= "}";

  //Conjunto Alternado
  $alternado = "{";
  for ( $i = 0; $i < count( $conjunto1 ); $i++ ) {
    $alternado .= $conjunto1[ $i ] . "," . $conjunto2[ $i ] . ",";
  }
  $alternado = rtrim( $alternado, "," );
  $alternado .= "}";

  //Suma
  $suma = "{";
  for ( $i = 0; $i < count( $conjunto1 ); $i++ ) {
    if ( is_numeric( $conjunto1[ $i ] ) && is_numeric( $conjunto2[ $i ] ) ) {
      $suma .= $conjunto1[ $i ] + $conjunto2[ $i ] . ",";
    } else {
      $suma .= $conjunto1[ $i ] . "+" . $conjunto2[ $i ] . ",";
    }
  }
  $suma = rtrim( $suma, "," );
  $suma .= "}";

  //Resta
  $resta = "{";
  for ( $i = 0; $i < count( $conjunto1 ); $i++ ) {
    if ( is_numeric( $conjunto1[ $i ] ) && is_numeric( $conjunto2[ $i ] ) ) {
      $resta .= $conjunto1[ $i ] - $conjunto2[ $i ] . ",";
    } else {
      $resta .= $conjunto1[ $i ] . "-" . $conjunto2[ $i ] . ",";
    }
  }
  $resta = rtrim( $resta, "," );
  $resta .= "}";

  //Multiplicacion
  $multi = "{";
  for ( $i = 0; $i < count( $conjunto1 ); $i++ ) {
    if ( is_numeric( $conjunto1[ $i ] ) && is_numeric( $conjunto2[ $i ] ) ) {
      $multi .= $conjunto1[ $i ] * $conjunto2[ $i ] . ",";
    } else {
      $multi .= $conjunto1[ $i ] . "*" . $conjunto2[ $i ] . ",";
    }
  }
  $multi = rtrim( $multi, "," );
  $multi .= "}";

  return $union . "--" . $interseccion . "--" . $diferencia . "--" . $diferenciaSimetrica . "--" . $complemento1 . "--" . $complemento2 . "--" . $alternado . "--" . $suma . "--" . $resta . "--" . $multi;
}
?>