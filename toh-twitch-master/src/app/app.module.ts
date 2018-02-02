import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import {BrowserAnimationsModule} from '@angular/platform-browser/animations';
import { AppRoutingModule } from './app-routing.module';

import { AppComponent } from './app.component';

import { MatToolbarModule, MatButtonModule, MatCardModule, MatCalendar} from '@angular/material';
import { HomeComponent } from './home/home.component';
import { PathNotFoundComponent } from './path-not-found/path-not-found.component';
import { GamesComponent } from './games/games.component';

@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    PathNotFoundComponent,
    GamesComponent

  ],
  imports: [
    BrowserModule,
    BrowserAnimationsModule,
    MatToolbarModule,
    MatButtonModule,
    MatCardModule,
    MatCardModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
