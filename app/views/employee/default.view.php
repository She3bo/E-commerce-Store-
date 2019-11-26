<style> 
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
.form{
    margin: 20px;
    border: 2px solid#EEE;
    width: 30%;
    background-color: #EEE;
    float: left;
    
}
form{
    margin-top: 30px;
}
fieldset{
    border: none;;
    
}
legend{
    font-size: 22px;
    color:#999;
    background-color: #DDD;
    position: absolute;
    top: 10px;
    margin-left: 10px;
}
input,label{
    display: block;
    margin: 10px;
}
input{
    margin-bottom: 10px;
    padding: 10px;
    border-radius: 5px;
    border-color: #FFF;
    border: none;
    border-bottom: 2px solid#FFF;
    font-size: 18px;
    width: 90%;
}
input[type='submit']{
    background-color: green;
}
.content{
    width: 70%;
    margin:50px auto;
    height: 400px;
}
table{
    width: 100%;
    margin: 10px;
}
.content tr{
    border:3px solid #EEE;
    width: 100%;;
}
thead td{
   border-bottom: 2px solid #EEE;
   border-left: 2px solid #EEE;
   padding: 8px;
   font-size: 25px;
   font-weight: bold;
}
thead td:first-child{
    border-left: none;
}
tbody td{
    padding: 8px;
    font-size: 18px;
}
tbody tr:nth-child(odd){
    background-color: #EEE;
}
a{
    margin-right: 10px;
}
</style>

<?php
        if(isset($_SESSION['message'])){?>
            <p class="message <?= isset ($error) ? 'error' : ''?>" > <?= $_SESSION['message']?> </p>
        <?php
            unset($_SESSION['message']);
            }
       ?>
<a href="/employee/add"> <?= @$Add_Employee ?>  </a>
<div class="content">
        <table>
            <thead>
                <tr>
                    <td><?= @$employee_name ?></td>
                    <td><?= @$employee_age ?></td>
                    <td><?= @$employee_address ?></td>
                    <td><?= @$control ?></td>
                </tr>
            </thead>
            <tbody>
                <?php  
                    foreach($employees as $em){
                ?>
                 <tr>
                    <td><?= $em->name ?></td>
                    <td><?= $em->age ?></td>
                    <td><?= $em->address ?></td>
                    <td>
                        <a class="alink" href="/employee/edit/id=<?= $em->id?>">edit</a>
                        <a href="/employee/delete/id=<?= $em->id?>"
                            onclick="if(!(confirm('Are you sure to delete this employee'))) return false;">
                            delete
                        </a>
                    </td>
                </tr>
               <?php
                    }
               ?>
            </tbody>
        </table>
</div>