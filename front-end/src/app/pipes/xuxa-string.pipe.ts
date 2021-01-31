import { Pipe, PipeTransform } from '@angular/core';

@Pipe({
  name: 'xuxaString'
})
export class XuxaStringPipe implements PipeTransform {

  transform(value: string ): string {
    const firstChar = value.charAt(0);
    switch (firstChar) {
      case 'A':
        return 'A de amor';
      case 'B':
        return 'B de baixinho';
      case 'C':
        return 'C de coração';
      case 'E':
        return 'E de EJCM <3';
      default:
        return value;
    }
  }
}
