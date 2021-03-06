//Modules
import { NgModule }       from '@angular/core';
import { CommonModule }   from '@angular/common';
import {  ReactiveFormsModule }   from '@angular/forms';


import {SatelliteRoutingModule} from "./satellite-routing.module";
import {ShareModule} from "./../share/share.module";


// components
import { SatelliteComponent } from "./satellite.component";
import { SatelliteListComponent } from "./satellite-list.component";
import { SatelliteSingleComponent } from "./satellite-single.component";
import { SatelliteSingleContainerComponent } from "./satellite-single-container.component";
import { SatelliteSingleEditComponent } from "./satellite-single-edit.component";

import {SatelliteService} from "./../services/satellite-service";


@NgModule({
  imports:      [ 
     ShareModule,
     CommonModule,
     SatelliteRoutingModule,
     ReactiveFormsModule,
  ],
  declarations: [ 
    SatelliteListComponent,
    SatelliteComponent,
    SatelliteSingleComponent,
    SatelliteSingleContainerComponent,
    SatelliteSingleEditComponent
  ],
  providers:    [SatelliteService ],
  exports: [
    // SatelliteFormComponent
  ]
})
export class SatelliteModule { }
