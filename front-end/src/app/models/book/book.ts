export class Book {
  id: string;
  title: string;
  subtitle: string;
  authors: object;
  cover: string;

  constructor(data) {
    this.id = data.id;
    this.title = data.volumeInfo.title;
    this.subtitle = data.volumeInfo.subtitle;
    this.authors = data.volumeInfo.authors;
    this.cover = data.volumeInfo.imageLinks.thumbnail;
  }
}
