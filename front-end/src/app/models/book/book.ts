export class Book {
  id: string;
  title: string;
  subtitle: string;
  cover: string;

  constructor(data) {
    this.id = data.id;
    this.title = data.volumeInfo.title;
    this.subtitle = data.volumeInfo.subtitle;
    this.cover = data.volumeInfo.imageLinks.thumbnail;
  }
}
