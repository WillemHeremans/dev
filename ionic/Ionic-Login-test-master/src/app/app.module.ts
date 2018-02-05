import { BrowserModule } from '@angular/platform-browser';
import { ErrorHandler, NgModule } from '@angular/core';
import { IonicApp, IonicErrorHandler, IonicModule } from 'ionic-angular';
import { SplashScreen } from '@ionic-native/splash-screen';
import { StatusBar } from '@ionic-native/status-bar';

import { MyApp } from './app.component';
import { HomePage } from '../pages/home/home';
import { LoginPage } from '../pages/login/login';
import { LoggedinPage } from "../pages/loggedin/loggedin";
import { RegisterPage } from '../pages/register/register';
import { AngularFireModule } from "angularfire2";
import { AngularFireAuthModule } from "angularfire2/auth";

// Initialize Firebase
const firebaseAuth = {
  apiKey: "AIzaSyA0Q4tMJXtxguIzaPO0Zi29Q-wlpdY-Khc",
  authDomain: "testapp-d0550.firebaseapp.com",
  databaseURL: "https://testapp-d0550.firebaseio.com",
  projectId: "testapp-d0550s",
  storageBucket: "testapp-d0550.appspot.com",
  messagingSenderId: "797493039255"
};

@NgModule({
  declarations: [MyApp, HomePage, LoginPage, LoggedinPage, RegisterPage],
  imports: [
    BrowserModule,
    IonicModule.forRoot(MyApp),
    AngularFireModule.initializeApp(firebaseAuth),
    AngularFireAuthModule
  ],
  bootstrap: [IonicApp],
  entryComponents: [MyApp, HomePage, LoginPage, LoggedinPage, RegisterPage],
  providers: [
    StatusBar,
    SplashScreen,
    { provide: ErrorHandler, useClass: IonicErrorHandler }
  ]
})
export class AppModule {}
