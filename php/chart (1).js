

<script>
var myData = [<?php 
    include ('server.php');
    session_start();
    $uid = $_SESSION['uid'];
    $data=mysqli_query($mysqli,"SELECT * FROM tbl_transaction WHERE uid = $uid;");
    while($info=mysqli_fetch_array($data))
    echo $info['amount'].','; /* We use the concatenation operator '.' to add comma delimiters after each data value. */
?>];

var myLabels = [<?php 
    $data=mysqli_query($mysqli,"SELECT * FROM tbl_transaction WHERE uid = $uid;");
    while($info=mysqli_fetch_array($data))
    echo '"'.$info['add_date'].'",'; /* The concatenation operator '.' is used here to create string values from our database names. */
?>];








window.onload=function(){
zingchart.render({
    id:"myChart",
    width:"100%",
    height:400,
    data:{
    "type":"bar",
    "title":{
        "text":"SPENDING MANAGER EXPESSES"
    },
    "scale-x":{
        "labels":myLabels
    },
    "series":[
        {
            "values":myData
        }
]
}
});
};
</script>