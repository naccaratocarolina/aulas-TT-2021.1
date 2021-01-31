import { Component, OnInit } from '@angular/core';
import { Injectable } from '@angular/core';
import { BookService } from '../services/book/book.service';

@Component({
  selector: 'app-tab1',
  templateUrl: 'tab1.page.html',
  styleUrls: ['tab1.page.scss']
})
export class Tab1Page implements OnInit {
  public books: object = [];

  constructor(public bookService: BookService) {}

  ngOnInit() {
    this.getGoogleBooks();
  }

  public getGoogleBooks() {
    this.bookService.getGoogleBooks().subscribe(
      (response) => {
        this.books = response;
        console.log(response);
      }
    );
  }

  favClicked(event) {
    console.log(event);
    alert('Livro adicionado aos favoritos!');
  }
}
