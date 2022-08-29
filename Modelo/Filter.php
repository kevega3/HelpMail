<?php 
    require 'Conn.php';

    $query_values = $_POST;
    $extra_query = "WHERE c.Eliminado = 0";

    if($query_values){

        $extra_query.= " AND ";
        $values = [];
        $queries = [];
        
        foreach ($query_values as $field_name => $field_value)
        {
            foreach ($field_value as $value)
            {
                $values[$field_name][] = " {$field_name} = '{$value}'";
            }
        }

        foreach ($values as $field_name => $field_values)
        {
            $queries[$field_name] = "(".implode(  " OR ", $field_values).")";
        }
        $extra_query.= " ".implode( " AND ", $queries);
        
    }   
    
    
    
    $query = 'SELECT  c.IdCorreo,c.Nombre,c.Apellido,c.Correo,t.NombreEntidad,t.IdEntidad,a.NombreActividad,a.IdActividad,o.NombreOrg,o.IdOrg,Ea.Artritis,Ec.Cancer,EEr.EnRenal,EEp.EpatitisC,Eh.Hemofilia,Evh.VH,Co.IdCordinacion
	FROM CorreosMail c  INNER JOIN TipoEntidad t  ON c.IdEntidad = t.IdEntidad 
	INNER JOIN TipoActivadad a  ON c.IdActividad = a.IdActividad 
	INNER JOIN Organizacion o  ON c.IdOrg = o.IdOrg  
	INNER JOIN Artritis Ea  ON c.IdArtritis = Ea.IdArtritis
	INNER JOIN Cancer Ec  ON c.IdCancer = Ec.IdCancer
	INNER JOIN EnRenal EEr  ON c.IdEnRenal = EEr.IdEnRenal
	INNER JOIN EpatitisC EEp  ON c.IdEpatitisC = EEp.IdEpatitisC
	INNER JOIN Hemofilia Eh  ON c.IdHemofilia = Eh.IdHemofilia
	INNER JOIN VH Evh  ON c.IdVH = Evh.IdVH 
	INNER JOIN Coordinacion Co  ON c.IdCordinacion = Co.IdCordinacion '.$extra_query;
    $users = $cnx->query($query);
    
    $user_list =[];
    while($user = $users->fetch( mode: PDO::FETCH_ASSOC)){
        $user_list[$user["IdCorreo"]] = $user;
    }
    echo json_encode($user_list);
?>