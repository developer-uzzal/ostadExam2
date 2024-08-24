<?php


class Book {

 // TODO: Add properties as Private
 private $title;
 private $availableCopies;

 public function __construct($title, $availableCopies) {
     // TODO: Initialize properties
        $this->title = $title;
        $this->availableCopies = $availableCopies;

     }


// TODO: Add getTitle method
  function getTitle(){
    return $this->title;
  }


 // TODO: Add getAvailableCopies method
  function getAvailableCopies(){
    return $this->availableCopies;
  }


 // TODO: Add borrowBook method
 function borrowBook(){
    if ($this->availableCopies > 0) {
        $this->availableCopies--;
        return true;
    } else {
        return false;
    }
 }

 // TODO: Add returnBook method
 function returnBook(){
    $this->availableCopies++;
 }

}


class Member {
 // TODO: Add properties as Private
 private $name;
 public function __construct($name) {
      // TODO: Initialize properties
      $this->name = $name;

     }

 // TODO: Add getName method
     function getName(){
        return $this->name;
     }

 // TODO: Add borrowBook method
 function borrowBook(Book $book){
    if ($book->borrowBook()) {
        return $this->name . " borrowed '" . $book->getTitle() . "'.\n";
    } else {
        return "Sorry, " . $this->name . ". '" . $book->getTitle() . "' is not available.\n";
    }
 }

 // TODO: Add returnBook method
 function returnBook(Book $book){
    $book->returnBook();
        return $this->name . " returned '" . $book->getTitle() . "'.\n";
 }

 
}


// Usage

// Create 2 books
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);


// You have to create  2 books and 2 members. Members One should borrow  book 1 and Member Two should borrow  book 2.

// TODO: Create 2 books with the following properties

/*

Book 1 - Name: The Great Gatsby, Available Copies: 5.
Book 2 - Name: To Kill a Mockingbird, Available Copies: 3.


// TODO: Create 2 members with the following properties
Member 1 - Name: John Doe
Member 2 - Name: Jane Smith

// TODO: Apply Borrow book method to each member
// TODO: Print Available Copies with their names:


 */

// Create 2 members
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");
$member3 = new Member("Rakib mia");


// Member 1 borrows book 1
$member1->borrowBook($book1);

// Member 2 borrows book 2
$member2->borrowBook($book2);

// Print available copies
echo "Available Copies of '" . $book1->getTitle() . "': " . $book1->getAvailableCopies() . "\n";
echo "Available Copies of '" . $book2->getTitle() . "': " . $book2->getAvailableCopies() . "\n";



?>