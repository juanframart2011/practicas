import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { FormComponent } from './form/form.component';
//import { SearchComponent } from './search/search.component';

const routes: Routes = [
  { path: 'form-1', component: FormComponent },
  /*{ path: 'search', component: SearchComponent }
  { path: 'spa/dist/nuevo-registro-inbound', component: FormComponent }
  { path: 'spa/dist/nuevo-registro-inbound', component: FormComponent }*/
];

@NgModule({
	imports: [ RouterModule.forRoot(routes) ],
	exports: [ RouterModule ]
})

export class AppRoutingModule{

	
}