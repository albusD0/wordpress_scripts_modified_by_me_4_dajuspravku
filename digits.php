<?php function number_to_roman($value)
{
    if($value<0) return "";
    if(!$value) return "0";
    $thousands=(int)($value/1000);
    $value-=$thousands*1000;
    $result=str_repeat("M",$thousands);
    $table=array(
        900=>"CM",500=>"D",400=>"CD",100=>"C",
        90=>"XC",50=>"L",40=>"XL",10=>"X",
        9=>"IX",5=>"V",4=>"IV",1=>"I");
    while($value) {
        foreach($table as $part=>$fragment) if($part<=$value) break;
            $amount=(int)($value/$part);
        $value-=$part*$amount;
        $result.=str_repeat($fragment,$amount);
    }
    return $result;
} ?>

<?php 
    if(isset($_POST['digits1'])) 
        {$digits1 = $_POST['digits1'];
        echo number_to_roman($digits1);}
?>