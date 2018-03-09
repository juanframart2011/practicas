import { Component } from '@angular/core';
import {Http} from '@angular/http';
//import "@angular/material/prebuilt-themes/indigo-pink.css";

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  	title = 'app';

  	canals = [
        {value: 1, viewValue: "Voz"},
        {value: 2, viewValue: "Chat"},
        {value: 3, viewValue: "WA"}
    ];

    csqs = [
        {value: 1, viewValue: "Val1"},
        {value: 2, viewValue: "Val2"}
    ];

    tipificacions = [
        {value: 1, viewValue: 1},
        {value: 2, viewValue: 2},
        {value: 3, viewValue: 3}
    ];

    interes = [
        {value: 1, viewValue: "Interesa"},
        {value: 2, viewValue: "No Interesa"}
    ];

    parentescos = [
        {value: 1, viewValue: "Papá"},
        {value: 2, viewValue: "Mamá"},
        {value: 3, viewValue: "Abuelo(a)"},
        {value: 4, viewValue: "Tutor"},
        {value: 5, viewValue: "Hermano(a)"}
    ];

    generos = [
        {value: 1, viewValue: "Masculino"},
        {value: 2, viewValue: "Femenino"}
    ];

    campus = [
        {value: 1, viewValue: "Atizapan"},
        {value: 2, viewValue: "Cuitlahuac"},
        {value: 3, viewValue: "Ecatepec"}
    ];

    niveles = [
        {value: 1, viewValue: "Bachillerato"},
        {value: 2, viewValue: "Licenciatura"},
        {value: 3, viewValue: "Postgrado"}
    ];

    modalidades = [
        {value: 1, viewValue: "Presencial"},
        {value: 2, viewValue: "En Línea"},
        {value: 3, viewValue: "Mixta"}
    ];

    ciclos = [
    	{ value: 1, viewValue: "18-2" },
    	{ value: 2, viewValue: "18-3" },
    	{ value: 3, viewValue: "19-1" }
    ];

    horas = [
    	{ value: 1, viewValue: "9am" },
    	{ value: 2, viewValue: "10am" },
    	{ value: 3, viewValue: "11am" },
    	{ value: 4, viewValue: "12pm" },
    	{ value: 5, viewValue: "1pm" },
    	{ value: 6, viewValue: "2pm" }
    ];
}