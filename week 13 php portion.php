<?php
//create our empty array
$books = array();
function add_books($book, $bookID) {
global $books;
$books[$bookID] = $book;
echo 'Added "'.$book.'" to the catalogue with ID = '.$bookID.'<br/>';
}
function delete_books($bookID) {
global $books;
unset($books[$bookID]);
echo 'Deleted a book from the catalogue with ID = '.$bookID.'<br/>';
}
function output_books() {
global $books;
$i = 0;
foreach ($books as $key => $value) {
$i++;
//book id
$bookID = $key;
$bookNo = $i;
//make each word first letter upper case
$bookTitle = ucwords($value);
echo '<tr><td>'.$bookNo.'</td><td>'.$bookID.'</td><td>'.$bookTitle.'</td></tr>';
}
}
$book1 = 'Jules Verne, 20,000 leagues under the sea';
$bookID1 = 'jv-lus';
$book2 = 'Jules Verne, Journey to the centre of the earth';
$bookID2 = 'jv-jce';
$book3 = 'Jules Verne, The sphinx of the ice realm';
$bookID3 = 'jv-sir        ';
//add book 1 to catalogue
add_books($book1, $bookID1);
//add book 2 to catalogue
add_books($book2, $bookID2);
//add book 3 to catalogue
add_books($book3, $bookID3);
//create table headers etc
echo '<table><th>No.</th><th>Book ID</th><th>Book Title</th>';
//output catalogue
output_books();
//complete table
echo '</table>';
//remove a book and rearrange books
delete_books($bookID2);
//output table
echo '<table><th>No.</th><th>Book ID</th><th>Book Title</th>';
//output catalogue
output_books();
//complete table
echo '</table>';
//add book 2 back to catalogue
add_books($book2, $bookID2);
//create table headers etc
echo '<table><th>No.</th><th>Book ID</th><th>Book Title</th>';
//output catalogue
output_books();
//complete table
echo '</table>';
?>
