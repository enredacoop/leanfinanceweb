<?php

if( $_POST && isset($_POST["year_1"]) && isset($_POST["year_2"]) ){

    $elements = [];
    /***** Year 1 *****/
    /* Bloque A */
    array_push( $elements, ["Importe neto de la cifra de negocios", $_POST["year_1_a0"], $_POST["year_2_a0"] ]);
    array_push( $elements, ["Variación de existencias de productos terminados y en curso de fabricación", $_POST["year_1_a1"], $_POST["year_2_a1"] ]);
    array_push( $elements, ["Trabajos realizados por la empresa para su activo", $_POST["year_1_a2"], $_POST["year_2_a2"] ]);
    array_push( $elements, ["Otros ingresos de explotación", $_POST["year_1_a3"], $_POST["year_2_a3"] ]);
    array_push( $elements, ["Aprovisionamientos", $_POST["year_1_a4"], $_POST["year_2_a4"] ]);
    array_push( $elements, ["Gastos de personal", $_POST["year_1_a5"], $_POST["year_2_a5"] ]);
    array_push( $elements, ["Otros gastos de explotación", $_POST["year_1_a6"], $_POST["year_2_a6"] ]);
    array_push( $elements, ["Amortización del inmovilizado", $_POST["year_1_a7"], $_POST["year_2_a7"] ]);
    array_push( $elements, ["Deterioro y rtdo por enajenacion del inmovilizado", $_POST["year_1_a8"], $_POST["year_2_a8"] ]);
    array_push( $elements, ["Otros resultados", $_POST["year_1_a9"], $_POST["year_2_a9"] ]);
    array_push( $elements, ["A) RESULTADO DE EXPLOTACIÓN", $_POST["year_1_ra"], $_POST["year_2_ra"] ]);

    /* Bloque B */
    array_push( $elements, ["Ingresos financieros", $_POST["year_1_b0"], $_POST["year_2_b0"] ]);
    array_push( $elements, ["Gastos financieros", $_POST["year_1_b1"], $_POST["year_2_b1"] ]);
    array_push( $elements, ["Diferencias de cambio", $_POST["year_1_b2"], $_POST["year_2_b2"] ]);
    array_push( $elements, ["B) RESULTADO FINANCIERO", $_POST["year_1_rb"], $_POST["year_2_rb"] ]);

    /* Bloque C */
    array_push( $elements, ["Impuesto sobre beneficios", $_POST["year_1_c0"], $_POST["year_2_c0"] ]);
    array_push( $elements, ["C) RESULTADO DEL EJERCICIO", $_POST["year_1_rc"], $_POST["year_2_rc"] ]);

    /* Bloque ANC */
    array_push( $elements, ["Inmovilizado intangible", $_POST["year_1_anc_0"], $_POST["year_2_anc_0"] ]);
    array_push( $elements, ["Inmovilizado material", $_POST["year_1_anc_1"], $_POST["year_2_anc_1"] ]);
    array_push( $elements, ["Inversiones inmobiliarias", $_POST["year_1_anc_2"], $_POST["year_2_anc_2"] ]);
    array_push( $elements, ["Inversiones en empresas del grupo y asociadas a L/P", $_POST["year_1_anc_3"], $_POST["year_2_anc_3"] ]);
    array_push( $elements, ["Inversiones financieras L/P", $_POST["year_1_anc_4"], $_POST["year_2_anc_4"] ]);
    array_push( $elements, ["Activos por impuesto diferido", $_POST["year_1_anc_5"], $_POST["year_2_anc_5"] ]);
    array_push( $elements, ["Deudores comerciales no corrientes", $_POST["year_1_anc_6"], $_POST["year_2_anc_6"] ]);
    array_push( $elements, ["A) ACTIVO NO CORRIENTE", $_POST["year_1_r_anc"], $_POST["year_2_r_anc"] ]);

    /* Bloque AC */
    array_push( $elements, ["Existencias", $_POST["year_1_ac_0"], $_POST["year_2_ac_0"] ]);
    array_push( $elements, ["Clientes", $_POST["year_1_ac_1"], $_POST["year_2_ac_1"] ]);
    array_push( $elements, ["Otros deudores", $_POST["year_1_ac_2"], $_POST["year_2_ac_2"] ]);
    array_push( $elements, ["Inversiones en empresas del grupo a C/P", $_POST["year_1_ac_3"], $_POST["year_2_ac_3"] ]);
    array_push( $elements, ["Inversiones financieras C/P", $_POST["year_1_ac_4"], $_POST["year_2_ac_4"] ]);
    array_push( $elements, ["Periodificaciones a corto plazo", $_POST["year_1_ac_5"], $_POST["year_2_ac_5"] ]);
    array_push( $elements, ["Efectivo", $_POST["year_1_ac_6"], $_POST["year_2_ac_6"] ]);
    array_push( $elements, ["B) ACTIVO CORRIENTE", $_POST["year_1_r_ac"], $_POST["year_2_r_ac"] ]);

    array_push( $elements, ["TOTAL ACTIVO (A+B)", $_POST["total_1_a"], $_POST["total_2_a"] ]);

    /* Bloque PN */
    array_push( $elements, ["Capital", $_POST["year_1_pn_0"], $_POST["year_2_pn_0"] ]);
    array_push( $elements, ["Prima de emisión", $_POST["year_1_pn_1"], $_POST["year_2_pn_1"] ]);
    array_push( $elements, ["Reservas", $_POST["year_1_pn_2"], $_POST["year_2_pn_2"] ]);
    array_push( $elements, ["Resultado de ejercicios anteriores", $_POST["year_1_pn_3"], $_POST["year_2_pn_3"] ]);
    array_push( $elements, ["Otras aportaciones de socios", $_POST["year_1_pn_4"], $_POST["year_2_pn_4"] ]);
    array_push( $elements, ["Resultado del ejercicio", $_POST["year_1_pn_5"], $_POST["year_2_pn_5"] ]);
    array_push( $elements, ["A) PATRIMONIO NETO", $_POST["year_1_r_pn"], $_POST["year_2_r_pn"] ]);

    /* Bloque PNC */
    array_push( $elements, ["Provisiones a L/P", $_POST["year_1_pnc_0"], $_POST["year_2_pnc_0"] ]);
    array_push( $elements, ["Deudas L/P con entidades de crédito", $_POST["year_1_pnc_1"], $_POST["year_2_pnc_1"] ]);
    array_push( $elements, ["Deudas L/p con acreedores por arrendamiento financiero", $_POST["year_1_pnc_2"], $_POST["year_2_pnc_2"] ]);
    array_push( $elements, ["Otras deudas a L/P", $_POST["year_1_pnc_3"], $_POST["year_2_pnc_3"] ]);
    array_push( $elements, ["Deudas con empresas del grupo y asociadas a L/P", $_POST["year_1_pnc_4"], $_POST["year_2_pnc_4"] ]);
    array_push( $elements, ["Acreedores comerciales no corrientes", $_POST["year_1_pnc_5"], $_POST["year_2_pnc_5"] ]);
    array_push( $elements, ["B) PASIVO NO CORRIENTE", $_POST["year_1_r_pnc"], $_POST["year_2_r_pnc"] ]);

    /* Bloque PC */
    array_push( $elements, ["Provisiones a C/P", $_POST["year_1_pc_0"], $_POST["year_2_pc_0"] ]);
    array_push( $elements, ["Deudas C/P con entidades de crédito", $_POST["year_1_pc_1"], $_POST["year_2_pc_1"] ]);
    array_push( $elements, ["Deudas C/P con acreedores por arrendamiento financiero", $_POST["year_1_pc_2"], $_POST["year_2_pc_2"] ]);
    array_push( $elements, ["Otras deudas a C/P", $_POST["year_1_pc_3"], $_POST["year_2_pc_3"] ]);
    array_push( $elements, ["Deudas con empresas del grupo y asociados a C/P", $_POST["year_1_pc_4"], $_POST["year_2_pc_4"] ]);
    array_push( $elements, ["Proveedores", $_POST["year_1_pc_5"], $_POST["year_2_pc_5"] ]);
    array_push( $elements, ["Acreedores", $_POST["year_1_pc_6"], $_POST["year_2_pc_6"] ]);
    array_push( $elements, ["Otros acreedores", $_POST["year_1_pc_7"], $_POST["year_2_pc_7"] ]);
    array_push( $elements, ["C) PASIVO CORRIENTE", $_POST["year_1_r_pc"], $_POST["year_2_r_pc"] ]);

    array_push( $elements, ["TOTAL PASIVO (A+B+C)", $_POST["total_1_p"], $_POST["total_2_p"] ]);



    /* Datos email */
    $remitente = $_POST['form-email'];
    $destinatario = 'javier@leanfinance.es';
    $asunto = "Herramienta de valoración Enisa"; 
    $filename = $_POST["form-name"] . ".csv";
    /* Cuerpo */
    $cuerpo = "Nombre y apellido: " . $_POST["form-name"] . "\r\n"; 
    $cuerpo .= "Email: " . $_POST["form-email"] . "\r\n";
    $cuerpo .= "Teléfono: " . $_POST["form-phone"] . "\r\n\r\n";
    $cuerpo .= "Se envía como adjunto fichero de herramienta de valoración Enisa" . "\r\n";

    



    //las líneas de arriba definen el contenido del mail. Las palabras que están dentro de $_POST[""] deben coincidir con el "name" de cada campo. 
    // Si se agrega un campo al formulario, hay que agregarlo acá.

    /*$headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['form-name']."\" <".$remitente.">\n";*/

    //mail($destinatario, $asunto, $cuerpo, $headers);
    if( send_csv_mail ($elements, $cuerpo, $destinatario, $asunto, $remitente, $filename) ){
       // include '../'; //se debe crear un html que confirma el envío
        echo '<script language="javascript">
            window.location.href="../procesando/";
          </script>';
    }else{
        //include '../'; //página de error
        echo "¡Ups! Se ha producido un fallo en el envío. <a href='/'>Salir de aquí</a>";
    }

}


function create_csv_string($elements) {
    $csv_separator = ",";
    $csv_end = "\n";

    //Open temp file pointer
    if (!$fp = fopen('php://temp', 'w+')) return FALSE;
    //Loop data and write to file pointer

    /* Primera línea */
    //$new_line = $_POST["form-email"] . $csv_separator . $_POST["year_1"] . $csv_separator . $_POST["year_2"] . $csv_end;
    $new_line = [$_POST["form-email"], $_POST["year_1"], $_POST["year_2"] ];
    fputcsv($fp, $new_line);

    foreach($elements as $line) {
        //$new_line = $line[0] . $csv_separator . $line[1] . $csv_separator . $line[2] . $csv_end;
        fputcsv($fp, $line);
    }
             
    //Place stream pointer at beginning
    rewind($fp);
    //Return the data
    return stream_get_contents($fp);
}

function send_csv_mail ($elements, $body, $to = 'carlos.campos@enreda.coop', $subject = 'Default subject', $from = 'noreply@leanfinance.es', $filename = "test.csv") {
//This will provide plenty adequate entropy
$multipartSep = '-----'.md5(time()).'-----';
//Arrays are much more readable
$headers = array(
"From: $from",
"Reply-To: $from",
"Content-Type: multipart/mixed; boundary=\"$multipartSep\""
);
//Make the attachment
$attachment = chunk_split(base64_encode(create_csv_string($elements))); 
//Make the body of the message
$body = "--$multipartSep\r\n"
. "Content-Type: text/plain; charset=ISO-8859-1; format=flowed\r\n"
. "Content-Transfer-Encoding: 7bit\r\n"
. "\r\n"
. "$body\r\n"
. "--$multipartSep\r\n"
. "Content-Type: text/csv\r\n"
. "Content-Transfer-Encoding: base64\r\n"
. "Content-Disposition: attachment; filename=\"$filename\"\r\n"
. "\r\n"
. "$attachment\r\n"
. "--$multipartSep--";
//Send the email, return the result
return @mail($to, $subject, $body, implode("\r\n", $headers));
}

?>