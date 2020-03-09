<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
 #title {
    text-align: center;
}
    </style>
</head>

<body>
<table>
<tr>
<td>test</td>
<td>test</td>
<td>test</td>
<td>test</td>
<td>test</td>ù<td>test</td>
</tr>
<tr>
<td>test</td>
<td>test</td>
<td>test</td>
<td>test</td>
<td>test</td>ù<td>test</td>
</tr>
<tr>
<td>test</td>
<td>test</td>
<td>test</td>
<td>test</td>
<td>test</td>ù<td>test</td>
</tr>
<tr>
<td>test</td>
<td>test</td>
<td>test</td>
<td>test</td>
<td>test</td>ù<td>test</td>
</tr>
</table>
    <h1 id="title">  <?php  foreach($sem as $s){ echo $s->nom_etabless ;break; }?> Filiere <?php  foreach($sem as $s){ echo $s->nom_file ;break; }?></h1>
        <?php 
 foreach($sem as $s){
    
    echo '<table><tr><td style="border;1px solid red;"><h1> Semestre : '.substr($s->nom_s,0,1) .'</h1></td>';
    echo '</tr>';
    foreach($mod as $m ){
        if($s->nom_s==$m->nom_se){
            echo '<h3 id="tt" style="margin-left:50px;">Module : '.$m->nom_module.'</h3>';
        }
        foreach($elem as $e){
            if($m->nom_module==$e->nom_mod && $s->nom_s==$e->nom_sem){
                echo '<h5 style="margin-left:100px">Element : '.$e->nom_element.'</h5>';
            }
        }
    }
    echo '</table>';
}
?>

</body>

</html>
