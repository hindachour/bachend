import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';  // Assurez-vous que le chemin est correct
import { AppComponent } from './app.component';

// Angular Material imports
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { MatToolbarModule } from '@angular/material/toolbar';
import { MatIconModule } from '@angular/material/icon';

@NgModule({
  declarations: [
    AppComponent,
  ],
  imports: [
    BrowserModule,              // Le module BrowserModule est essentiel
    AppRoutingModule,           // Module de routage (si vous en avez un)
    BrowserAnimationsModule,    // Nécessaire pour les animations Angular Material
    MatToolbarModule,           // Module de la barre d'outils Angular Material
    MatIconModule,              // Module des icônes Angular Material
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule {}
