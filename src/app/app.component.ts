import { Component } from '@angular/core';
import { FormGroup, FormControl, Validators } from '@angular/forms';
import { MouseEvent } from '@agm/core';

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
  onSubmit1() {
    console.log(this.contacto1.value);
  }
  onSubmit2() {
    console.log(this.contacto2.value);
  }

  // google maps zoom level
  zoom: number = 8;

  // initial center position for the map
  lat: number = 51.673858;
  lng: number = 7.815982;

  clickedMarker(label: string, index: number) {
    console.log(`clicked the marker: ${label || index}`)
  }

  mapClicked($event: MouseEvent) {
    this.markers.push({
      lat: $event.coords.lat,
      lng: $event.coords.lng,
      draggable: true
    });
  }

  markerDragEnd(m: marker, $event: MouseEvent) {
    console.log('dragEnd', m, $event);
  }

  markers: marker[] = [
    {
      lat: 51.673858,
      lng: 7.815982,
      label: 'A',
      draggable: true
    },
    {
      lat: 51.373858,
      lng: 7.215982,
      label: 'B',
      draggable: false
    },
    {
      lat: 51.723858,
      lng: 7.895982,
      label: 'C',
      draggable: true
    }
  ]
}

// just an interface for type safety.
interface marker {
  lat: number;
  lng: number;
  label?: string;
  draggable: boolean;
}
