import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { BookComponent  } from '../../components/book/book.component';

@NgModule({
  entryComponents: [ BookComponent ],
  declarations: [ BookComponent ],
  imports: [ CommonModule ], 
  exports: [ BookComponent ]
})
export class BookModule { }
