<style> 
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
.form{

    border: 2px solid#EEE;
    width: 500px;
    background-color: #EEE;    
    margin:100px auto;
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
    top: 85px;
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
    float: left;
    width: 50%;
    margin-left: 100px;
    height: 400px;
    margin-top: 20px;
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

    <div class="form">
        <fieldset>
            <legend>Information</legend>
            <form method="post" enctype="multipart/form-data" autocomplete="off">
                <label>Name : </label>
                <input type="text" name="name" auto required value="<?= $employee->name ?> "> 
                <label>Age : </label>
                <input type="text" name="age" required value="<?= $employee->age ?> " >
                <label>Address : </label>
                <input type="test" name="address" required value="<?= $employee->address ?> " >
                <input type="submit" name="submit" >
            </form>
        </fieldset>
    </div>