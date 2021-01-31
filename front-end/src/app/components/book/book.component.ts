import { Component, OnInit, Input, Output, EventEmitter } from '@angular/core';

@Component({
  selector: 'app-book',
  templateUrl: './book.component.html',
  styleUrls: ['./book.component.scss'],
})
export class BookComponent implements OnInit {
  @Input() book;
  @Output() clickOnFav = new EventEmitter<string>();

  public fav: boolean = false;

  constructor() { }

  addFavorite() {
    this.clickOnFav.emit('Livro adicionado!');
  }  

  ngOnInit() {}

  public toFav() {
    this.fav = !this.fav;
  }
}
