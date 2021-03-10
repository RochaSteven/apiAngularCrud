import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { RouterModule, Routes } from '@angular/router';
import { AppComponent } from './app.component';
import { ProductosComponent } from './components/productos/productos.component';
import { NavbarComponent } from './components/navbar/navbar.component';
import { HttpClientModule } from '@angular/common/http';
import { FormsModule } from '@angular/forms';
import { ProductosEditComponent } from './components/productos-edit/productos-edit.component';
import { Productos } from './class/productos';
import { CategoriasComponent } from './components/categorias/categorias.component';
import { CategoriasEditComponent } from './components/categorias-edit/categorias-edit.component';

const routes: Routes = [
  { path: 'productos', component:ProductosComponent }, 
  { path:'productos/edit/:id',component:ProductosEditComponent},
  {path:'categoria', component:CategoriasComponent},
  { path:'categoria/edit/:id',component:CategoriasEditComponent}
];
@NgModule({
  declarations: [
    AppComponent,
    ProductosComponent,
    NavbarComponent,
    ProductosEditComponent,
    CategoriasComponent,
    CategoriasEditComponent 
  ],
  imports: [
    BrowserModule,
    HttpClientModule,
    FormsModule,
   RouterModule.forRoot(routes)
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
