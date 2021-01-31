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
   public className: string;

  constructor() { }

  ngOnInit() {}

  public addFavorite() {
    this.clickOnFav.emit('Livro adicionado!');
  }

  public toFav() {
    this.fav = !this.fav;
  }
}
