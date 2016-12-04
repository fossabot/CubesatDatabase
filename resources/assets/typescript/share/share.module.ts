
import  { MarkdownEditorComponent } from "./markdown-editor.component";

import { PaginationComponent } from "./pagination.component";
import { AutoCompleteComponent } from "./auto-complete.component";
import {  ReactiveFormsModule }   from '@angular/forms';




import { CommonModule }   from '@angular/common';
import { FormsModule }    from '@angular/forms';
import {NgModule}       from '@angular/core';


@NgModule({
  imports:      [
	  CommonModule,
	  FormsModule,
    ReactiveFormsModule
  ],
  	declarations: [ 
  	PaginationComponent, 
  	AutoCompleteComponent,
    MarkdownEditorComponent
  ],
  exports:      [ 
  	PaginationComponent,
  	AutoCompleteComponent,
    MarkdownEditorComponent
  ],
  providers:    [ ]
})
export class ShareModule {
}