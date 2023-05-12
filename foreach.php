<!-- It is used to iterate through an array 
or collection of elements and perform specific actions on each element.-->



<!-- Single Dimentional Array -->

<!-- <?php
$names=array('Ammu','Boo','Cindy','Danny','Emma','Forrest');

foreach($names as $persons)
{
    echo $persons.'<br>';
}

?> -->


<!-- Multi-dimensional Array -->

<?php
$students=array(array('Name'=>'Rispa',
                   'Age'=>25,
                   'Weight'=>56),
            array('Name'=>'Rexy',
                  'Age'=>23,
                  'Weight'=>40),
            array('Name'=>'Gladlin',
                  'Age'=>19,
                  'Weight'=>46));

foreach($students as $student=> $innerArray)
{
    echo '<b>'.$student.'</b><br>';
    foreach($innerArray as $item){
        echo $item.'<br>';
    }
}
?>




