import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title:string = 'Angula Crud';

  	msg:string = null;

  	employees = [
  		{'name': 'Lionel Messi', position: 'Delantero'},
  		{'name': 'Gerar Pique', position: 'Defensa'},
  		{'name': 'Andres Iniesta', position: 'Medio'}
  	];

  	model:any = {};
  	model2:any = {};

  	addEmployee():void{

  		this.employees.push( this.model );
  		this.msg = "campo eliminado";
  	}

  	deleteEmployee():void{
  		
  	}
  	myValue;
  	editEmployee( i ):void{
  		this.model2.name = this.employees[i].name;
  		this.model2.position = this.employees[i].position;
  		this.myValue = i;
  	}

  	updateEmployee():void{
  		console.info( this.model );
  	}
}
