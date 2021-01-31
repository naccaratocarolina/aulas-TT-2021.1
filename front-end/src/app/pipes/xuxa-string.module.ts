import { NgModule } from '@angular/core';
import { XuxaStringPipe } from './xuxa-string.pipe';
import { CommonModule } from '@angular/common';

@NgModule({
  declarations: [ XuxaStringPipe ],
  imports:  [ CommonModule ],
  exports: [ XuxaStringPipe ],
  providers: [],
})

export class XuxaStringModule { }
