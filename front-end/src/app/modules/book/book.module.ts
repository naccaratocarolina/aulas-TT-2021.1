import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { BookComponent  } from '../../components/book/book.component';
import { XuxaStringModule } from '../../pipes/xuxa-string.module';

@NgModule({
  entryComponents: [ BookComponent ],
  declarations: [ BookComponent ],
  imports: [ CommonModule, XuxaStringModule ],
  exports: [ BookComponent ]
})
export class BookModule { }
