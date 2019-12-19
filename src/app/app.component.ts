import { Component } from '@angular/core';
import { FormGroup, FormControl, Validators } from '@angular/forms';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {

  contacto1 = new FormGroup({
    nombre: new FormControl('', Validators.required),
    telefono: new FormControl('', Validators.required),
    correo: new FormControl('', [Validators.required, Validators.email]),
    area: new FormControl('', Validators.required),
    ciudad: new FormControl('', Validators.required),
    consulta: new FormControl('', Validators.required)
  });
  contacto2 = new FormGroup({
    nombre: new FormControl('', Validators.required),
    correo: new FormControl('', [Validators.required, Validators.email]),
    consulta: new FormControl('', Validators.required)
  });
  onSubmit1(){
    console.log(this.contacto1.value);
  } 
  onSubmit2(){
    console.log(this.contacto2.value);
  }
}
