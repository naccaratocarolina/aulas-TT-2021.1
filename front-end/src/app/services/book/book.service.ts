import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { Book  } from '../../models/book/book';
import { map } from 'rxjs/operators';

@Injectable({
  providedIn: 'root'
})

export class BookService {
  // URL da API Google Books
  apiUrl = 'https://www.googleapis.com/books/v1/volumes?q=flowers+inauthor:keyes&key=AIzaSyBg3wJQBC3ZunicrhAuSXiE4LyKpCmxNOQ';

  constructor(public http: HttpClient) { }

  public getGoogleBooks(): Observable<Book[]> {
    return this.http.get(this.apiUrl).pipe(map(
      (response) => (Object.entries(response)[2][1]).map(
        (data) => new Book(data)
      )));
  }
}
