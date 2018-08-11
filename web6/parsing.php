<?php
// MENAMPILKAN DATA XML KE HTML
$dataxml = simplexml_load_file('linksp.xml');
foreach($dataxml->book as $buku)
{
echo "Author : ".$buku->author."<br>";
echo "Title : ".$buku->title."<br>";
echo "Genre : ".$buku->genre."<br>";
echo "Price : $ ".$buku->price."<br>";
echo "Published Date : ".$buku->publish_date."<br>";
echo "Description : ".$buku->description."<hr>";
}
echo "<a href='index.php' style='text-decoration:none'><input type='submit' value='Kembali ke Form'/></a>";
?>