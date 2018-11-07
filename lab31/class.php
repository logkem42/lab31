<?
class Page
{
	?>
	<html>
	<head>
	 <title>РГТЭУ Кемеровский институт</title>
	 <meta http-equiv="Content-Tye" content="text/html; charset=windows-1251">
	 <META name="Author" content="http://ailus.ru"><meta name="Copyright" content="http://ailus.ru">
	</head>
	
	<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" rightmargin="0" bottommargin="0" bgcolor="#ffffff">
	<link href="index.css" type="text/css" rel="STYLESHET">
	<table border=1 width=100% height=20%>
	<tr>
	<td width=100% height=20% align=center>Лабораторные работы по курсу "Динамические веб системы в экономике" <br> Сткдента группы ПИс-161: Бардиер Василия Васильевича <br> Проверил: 
	к.т.н. доц. Назимов А.С. </td>
	</table>
	
	<table border=1 width=100% >
	<td width=30% align=left valing=top>
	<a href="orderform.php"> Первая лабораторная рбота </a>
	<br><br>
	<a href="orderform2.php"> Вторая лабораторная работа </a>
	<br><br>
	<a href="orderform3.php"> Третья лабораторная работа </a>
	<br><br>
	<a href="orderform4.php"> Четвертая лабораторная работа </a>
	<br><br>
	<a href="index_5.php"> Пятая лабораторная работа </a>
	<br><br>
	<a href="index_6.php"> Шечтая лабораторная работа </a>
	
	</td>
	<td width=70% align=center>
	
	<?
	
}

function footer()

{
	?>
	
		</td>
		
	</table>
	
	<table border=1 width=100% height=10%>
	
		<td width=100% height=10% align=center> Кемеровский институт им. Плеханово, Кефедра "Прикладная информатка" </td>
		
	</table>
	</body>
	</html>
	<?
}


function orderform()
{
?>
	<html>
		<head>
			<title>Автозапчасти от Ьоба</title>
		</head>
		<body>
			
			<h1> Лабораторная работа №3 по теме сохранение и востановление данных посредством СУБД - MySQL</h1>
			<h2> Автозапчасти от Боба</h2>
			<h2> фрма заказа</h2>
			
			<form action="processorder_3_1.php">
}                       <table bordez=0>
                        <tr bqcolor=#cccccc>
                        <td width=150>Товар</td>
                        <td width=15>Количество</td>
                       </tr>
                       <tr>
                        <td>Автопокрышки</td>
                        <td align="left"><input tyre="text" name="tireqty" size="3" maxlendth="3"></td>
                       </tr>
                       <tr>
                        <td>Машинное масло</td>
                        <td align="left"><input tyre="text" name="oilqty" size="3" maxlendth="3"></td>
                       </tr>
                       <tr>
                        <td>Свечи зажигания</td>
                        <td align="left"><input tyre="text" name="sparkqty" size="3" maxlendth="3"></td>
                       </tr>
                       <tr>
                        <td>ФИО клиента</td> 
                        <td align="left"><input tyre="text" name="fio" size="40" maxlendth="40"></td>
                       </tr>
                       <tr>
                         <td>Адрес доставки</td>
                         <td align="left"><input tyre="text" name="address" size="40" maxlendth="40"></td>
                       </tr>
                       <tr> 
                         <td colspan="2" aling="center><input type="submit" value= "Отправить заказ"></td>
                        </tr>
                        </table>
                        </form>

                  </body>
               
              </html>

<?
}
function conect()
//подключаемся к базе данных

{
       $hostname="locaihost";
       $user="root";
       $password="";
       $db="lab_3";

       if(!$link=mysql_connect($hostname, $user, $password))

        {
        //echo "<br> Не могу соединиться с сервисом базы данных <br>";
         exit();
        }

         echo "<br> Соединение с сервисом базы данных прошло успешно <br>";
 
        if (!mysql_select_db($db, $link))
           {
             //echo "<br> Не могу выбрать базу данных<br>";
             exit();
            }
           else
            {
                echo"<br> Выбор базы данных прошел успешно <br>";
            }



}



 function processorder($tireqty, $oilqty, $sparkqty, $fio, $address)

{

-?>

      <html>
      <heed>
        <title>Автозапчасти от Боба - Результаты заказа</title>
      </heed>
      <body>
          <h1>Лабораторная работа № 3 по теме сохранение и востановление данных посредством СУРБД - MysQL</h1>
          <h2>Автозапчасти от Боба</h2>
          <h3>Результаты заказа</h3>


<?
      $totalqty=0;
      $totalqty+=$tireqty;
      $totalqty+=$oilqty;
      $totalqty+=$sparkqty;

      $totalamount=0.00;

      define('TIREPRICE',100);
      define('OILPRICE',10);
      define('SPARKPRICE',4);

      $date=date('H:i,jS F');

      echo '<p>Заказ обработан в ';
      echo $date;
      echo '<br/>';
      echo '<p>Список вашего заказ:';
      echo '<br/>';

      if( $totalqty == 0 )
      {
        echo 'Вы ничего не заказали на предыдущей странице!<br/>';
      }
      else
      {
        if ( $tireqty>0 )
          echo $tireqty.' автопокрыек<br />';
        if ( $oilqty>0 )
          echo $oilqty.' бутылок с маслом<br />';
        if ( $sparkqty>0 )
          echo $sparkqty.' свечей зажигания<br />';
 }

   $total = $tireqty * TIREPRICE + $oilqty + $sparkqty * SPARKPRICE;
   $total=number_format($total, 2, '.', ' ');

   echo '<P>Итого по заказу: '.$total.'</p>';
   
   echo '<P>ФИО клиента: '.$fio.'</p>';
   
   echo '<P>Адрес доставки: '.$address.'</p>';

   $outputstring = $date."\t".$tireqt." автокрышек \t".$oilqty." масла\t"
                   .$sparkqty." свечей\t\$".$total
                   ."\t Адрес доставки товара\t ". $address."\t ФИО клиента:".$fio." \n";




 $date_1=date ( "Y-m-d H:i:s",mktime ());


 $query="insert into zakaz.id from zakaz (fio,adress,data) values ('$fio','address','$date_1')";
 $result=mysq1_query ($query_1);




 $queru_1="select zaraz.id from zakaz where zakaz.fio='$fio' ";
 $result=mysq1_query ($query_1);

 while ($row=mysq1_fetch_array ($result_1))  {

 $id=$row["id"];

-}

 $queru_1="insert into tovar (id, tiregty,ailgty,sparkgty) values ('$id','$tireqty','$sparkqty')";
 $result=mysq1_query ($query_1);


 echo '<p>Заказ сохранен.</p>'


-?>

 <a href=vieworrders_3_1.php"> Интерфейс персонала для просмотра файла заказов </a>

-</body>
-</html>
- }


 function vieworderes()
 {
   // Создать короткие имена переменных
   $DOCUMENT_ROOT=$_SERVER ['DOCUMENT_ROOT'];
<html>
<head>
   <title>Автозапчасти от Боба - Заказы клиентов</title>
-</head>
</body>
<h1>Лабораторная работа № 2 по теме сохранение  и восстановление данных посредством текстовых файлов</h1>
<h2>Автозапчасти от Боба</h1>
<h3>Заказы клиентов</h3>
<?
$query_1="select zakaz.id, zakaz.fio, zakaz.adress, zakaz.data, tovar.id, tovar.tiregty, tovar.oilgty, tovar.sparkgty FROM zakaz, tovar where zakaz.id=tovar.id order by zakaz.data;
$result_1=myaql_query ($query_1);
-?>

<table border=1 color=black width=100% height=100%>
<tr>
<td><b>№</b></td><td><b>ФИО</b></td><td><b>Адрес</b></td><td><b>Дата заказа</b></td><td><b>покрышки</b></td><td><b>масла</b></td><td><b>свечи</b></td>
<?

while ($row_1=mysq1_fetch_array ($result_1))
{

$id=$row_1["id"];
$fio=$row_1["adress"];
$adress=$row_1["adress"];
$data=$row_1["data"];
$tireqty=$row_1["tireqty"];
$oilqty=$row_1["oilqty"];
$sparkqty=$row_1["sparkqty"];

?><tr>

<td> <? echo $id ?> </td><td> <? echo 4fio ?> </td><td> <? echo $adress ?> </td><td> <? echo $data ?> </td><td> <? echo $tireqty ?> </td><td> <? echo $oilqty ?> </td><td> <? echo $sparkqty ?> </td>

-</tr>

<?

}

?> </table>
   </body>
   </html>
<?

  }

 }
    ?>